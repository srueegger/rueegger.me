<?php

namespace App;

/**
 * Markdown Parser using Parsedown
 * Handles markdown to HTML conversion with responsive images
 */
class MarkdownParser
{
    private object $parsedown;

    public function __construct()
    {
        $this->parsedown = new \Parsedown();
        $this->parsedown->setSafeMode(true);
        $this->parsedown->setBreaksEnabled(true); // Enable line breaks
    }

    /**
     * Parse markdown to HTML
     */
    public function parse(string $markdown, bool $removeFirstH1 = false): string
    {
        // Remove frontmatter
        $markdown = $this->stripFrontmatter($markdown);

        // Parse markdown to HTML
        $html = $this->parsedown->text($markdown);

        // Remove first <h1> if requested (useful for blog posts where title is shown separately)
        if ($removeFirstH1) {
            $html = preg_replace('/<h1[^>]*>.*?<\/h1>/i', '', $html, 1);
        }

        // Convert <img> tags to responsive <picture> elements
        $html = $this->convertImagesToResponsive($html);

        return $html;
    }

    /**
     * Remove frontmatter from content
     */
    public function stripFrontmatter(string $content): string
    {
        return preg_replace('/^---\s*\n.*?\n---\s*\n/s', '', $content);
    }

    /**
     * Convert <img> tags to responsive <picture> elements
     */
    private function convertImagesToResponsive(string $html): string
    {
        // Pattern to match <img> tags
        $pattern = '/<img\s+([^>]*?)src=["\']([^"\']+)["\']([^>]*?)>/i';

        return preg_replace_callback($pattern, function($matches) {
            $beforeSrc = $matches[1];
            $src = $matches[2];
            $afterSrc = $matches[3];

            // Extract alt text if present
            $altPattern = '/alt=["\']([^"\']*)["\']|alt=(\S+)/i';
            $alt = '';
            if (preg_match($altPattern, $beforeSrc . $afterSrc, $altMatches)) {
                $alt = $altMatches[1] ?? $altMatches[2] ?? '';
            }

            // Extract classes if present
            $classPattern = '/class=["\']([^"\']*)["\']|class=(\S+)/i';
            $classes = '';
            if (preg_match($classPattern, $beforeSrc . $afterSrc, $classMatches)) {
                $classes = $classMatches[1] ?? $classMatches[2] ?? '';
            }

            // Skip external images (keep as regular <img>)
            if (preg_match('/^https?:\/\//i', $src)) {
                return $matches[0];
            }

            // Clean up the image path
            // Remove leading slash for responsiveImage() function
            $imagePath = ltrim($src, '/');

            // Determine preset based on image location or classes
            $preset = 'card'; // Default
            if (strpos($src, '/blog/') !== false) {
                $preset = 'hero'; // Blog images are typically larger
            }

            // Generate responsive image HTML
            // Note: responsiveImage() expects path relative to /media/source/
            return responsiveImage($imagePath, $alt, $preset, $classes);
        }, $html);
    }
}
