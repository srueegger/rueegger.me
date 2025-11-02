<?php

/**
 * Global helper functions
 */

/**
 * Escape HTML output
 */
function e(?string $string): string
{
    return htmlspecialchars($string ?? '', ENT_QUOTES, 'UTF-8');
}

/**
 * Generate URL with language parameter
 */
function url(string $path = '', ?string $lang = null): string
{
    global $i18n;
    $lang = $lang ?? $i18n->getLang();
    $base = rtrim($_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'], '/');

    if (empty($path) || $path === '/') {
        return $base . '/?lang=' . $lang;
    }

    // Check if path already contains query parameters
    $separator = strpos($path, '?') !== false ? '&' : '?';

    return $base . '/' . ltrim($path, '/') . $separator . 'lang=' . $lang;
}

/**
 * Check if current page is active
 */
function isActive(string $page): bool
{
    $current = $_SERVER['REQUEST_URI'];
    $current = strtok($current, '?'); // Remove query string

    if ($page === '/' || $page === '/index.php') {
        return $current === '/' || $current === '/index.php' || basename($current) === 'index.php';
    }

    return strpos($current, $page) !== false;
}

/**
 * Format date
 */
function formatDate(string $date, string $lang = 'de'): string
{
    $timestamp = strtotime($date);

    if ($lang === 'de') {
        return date('d. F Y', $timestamp);
    }

    return date('F d, Y', $timestamp);
}

/**
 * Truncate text
 */
function truncate(string $text, int $length = 150): string
{
    if (mb_strlen($text) <= $length) {
        return $text;
    }

    return mb_substr($text, 0, $length) . '...';
}

/**
 * Get asset URL with version timestamp for cache busting
 */
function asset(string $path): string
{
    $url = '/' . ltrim($path, '/');
    $filePath = $_SERVER['DOCUMENT_ROOT'] . $url;

    // Add version parameter based on file modification time
    if (file_exists($filePath)) {
        $mtime = filemtime($filePath);
        $url .= '?v=' . $mtime;
    }

    return $url;
}

/**
 * Generate responsive image HTML with <picture> element
 *
 * @param string $imagePath Path to the source image (relative to /media/source/)
 * @param string $alt Alt text for the image
 * @param string $preset Size preset: 'hero', 'thumbnail', 'card', 'profile'
 * @param string $classes Additional CSS classes for the <img> tag
 * @param string $sizes Sizes attribute for responsive images (optional)
 * @return string HTML for <picture> element with multiple sources
 */
function responsiveImage(string $imagePath, string $alt, string $preset = 'card', string $classes = '', string $sizes = ''): string
{
    // Size presets matching scripts/process-images.js
    $sizePresets = [
        'hero' => [480, 768, 1024, 1536],
        'thumbnail' => [200, 400, 600],
        'card' => [400, 600, 800, 1200],
        'profile' => [400, 600, 800, 1200]
    ];

    // Default sizes attribute if not provided
    $defaultSizes = [
        'hero' => '(max-width: 896px) 100vw, 896px',
        'thumbnail' => '(max-width: 768px) 100vw, 192px',
        'card' => '(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 400px',
        'profile' => '(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 600px'
    ];

    if (empty($sizes)) {
        $sizes = $defaultSizes[$preset] ?? $defaultSizes['card'];
    }

    $widths = $sizePresets[$preset] ?? $sizePresets['card'];

    // Extract path info
    $pathInfo = pathinfo($imagePath);
    $dir = $pathInfo['dirname'] === '.' ? '' : $pathInfo['dirname'] . '/';
    $basename = $pathInfo['filename'];

    // Base path for generated images
    $basePath = '/media/generated/' . $dir . $basename;

    // Build srcset for each format (only include sizes that exist)
    $avifSrcset = [];
    $webpSrcset = [];
    $jpegSrcset = [];
    $availableWidths = [];

    foreach ($widths as $width) {
        $jpegPath = $_SERVER['DOCUMENT_ROOT'] . $basePath . '-' . $width . 'w.jpeg';

        // Only add this width if the JPEG file exists
        if (file_exists($jpegPath)) {
            $availableWidths[] = $width;
            $avifSrcset[] = $basePath . '-' . $width . 'w.avif ' . $width . 'w';
            $webpSrcset[] = $basePath . '-' . $width . 'w.webp ' . $width . 'w';
            $jpegSrcset[] = $basePath . '-' . $width . 'w.jpeg ' . $width . 'w';
        }
    }

    // If no images were generated, return empty string
    if (empty($availableWidths)) {
        return '';
    }

    // Fallback image (smallest available JPEG)
    $fallbackSrc = $basePath . '-' . $availableWidths[0] . 'w.jpeg';

    // Build HTML
    $html = '<picture>';
    $html .= '<source srcset="' . implode(', ', $avifSrcset) . '" sizes="' . e($sizes) . '" type="image/avif">';
    $html .= '<source srcset="' . implode(', ', $webpSrcset) . '" sizes="' . e($sizes) . '" type="image/webp">';
    $html .= '<source srcset="' . implode(', ', $jpegSrcset) . '" sizes="' . e($sizes) . '" type="image/jpeg">';
    $html .= '<img src="' . e($fallbackSrc) . '" alt="' . e($alt) . '" class="' . e($classes) . '" loading="lazy">';
    $html .= '</picture>';

    return $html;
}
