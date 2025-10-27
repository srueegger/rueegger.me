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

    return $base . '/' . ltrim($path, '/') . '?lang=' . $lang;
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
 * Get asset URL
 */
function asset(string $path): string
{
    return '/' . ltrim($path, '/');
}
