#!/usr/bin/env php
<?php
/**
 * Static Sitemap Generator
 * Generates a static sitemap.xml file
 * Run: php generate-sitemap.php
 */

// Include necessary files
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/includes/classes/I18n.php';
require_once __DIR__ . '/includes/classes/MarkdownParser.php';

// Configuration
$baseUrl = 'https://rueegger.me';  // Change this to your production URL
$outputFile = __DIR__ . '/public/sitemap.xml';

// Static pages with their priorities and change frequencies
$staticPages = [
    ['url' => '/', 'priority' => '1.0', 'changefreq' => 'weekly'],
    ['url' => '/about.php', 'priority' => '0.9', 'changefreq' => 'monthly'],
    ['url' => '/projects.php', 'priority' => '0.9', 'changefreq' => 'monthly'],
    ['url' => '/blog.php', 'priority' => '0.9', 'changefreq' => 'weekly'],
    ['url' => '/contact.php', 'priority' => '0.8', 'changefreq' => 'yearly'],
    ['url' => '/privacy.php', 'priority' => '0.5', 'changefreq' => 'yearly'],
    ['url' => '/imprint.php', 'priority' => '0.5', 'changefreq' => 'yearly'],
];

// Languages
$languages = ['de', 'en'];

// Start building XML
$xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"' . PHP_EOL;
$xml .= '        xmlns:xhtml="http://www.w3.org/1999/xhtml">' . PHP_EOL;

// Add static pages for both languages
foreach ($staticPages as $page) {
    foreach ($languages as $lang) {
        $url = $baseUrl . $page['url'];

        // Add language parameter
        $separator = strpos($page['url'], '?') !== false ? '&' : '?';
        $fullUrl = $url . $separator . 'lang=' . $lang;

        $xml .= '    <url>' . PHP_EOL;
        $xml .= '        <loc>' . htmlspecialchars($fullUrl) . '</loc>' . PHP_EOL;
        $xml .= '        <changefreq>' . $page['changefreq'] . '</changefreq>' . PHP_EOL;
        $xml .= '        <priority>' . $page['priority'] . '</priority>' . PHP_EOL;

        // Add alternate language links
        foreach ($languages as $altLang) {
            $altUrl = $url . $separator . 'lang=' . $altLang;
            $xml .= '        <xhtml:link rel="alternate" hreflang="' . $altLang . '" href="' . htmlspecialchars($altUrl) . '" />' . PHP_EOL;
        }

        $xml .= '    </url>' . PHP_EOL;
    }
}

// Add blog posts for both languages
foreach ($languages as $lang) {
    // Create I18n instance for this language
    $_GET['lang'] = $lang;
    $i18n = new App\I18n(__DIR__ . '/content');
    $posts = $i18n->getBlogPosts();

    foreach ($posts as $post) {
        $postUrl = $baseUrl . '/post.php?slug=' . urlencode($post['slug']) . '&lang=' . $lang;

        // Get last modified date from file
        $filePath = __DIR__ . '/content/' . $lang . '/blog/' . $post['filename'] . '.md';
        $lastmod = file_exists($filePath) ? date('c', filemtime($filePath)) : null;

        $xml .= '    <url>' . PHP_EOL;
        $xml .= '        <loc>' . htmlspecialchars($postUrl) . '</loc>' . PHP_EOL;
        if ($lastmod) {
            $xml .= '        <lastmod>' . $lastmod . '</lastmod>' . PHP_EOL;
        }
        $xml .= '        <changefreq>monthly</changefreq>' . PHP_EOL;
        $xml .= '        <priority>0.7</priority>' . PHP_EOL;

        // Add alternate language links
        foreach ($languages as $altLang) {
            $altPostUrl = $baseUrl . '/post.php?slug=' . urlencode($post['slug']) . '&lang=' . $altLang;
            $xml .= '        <xhtml:link rel="alternate" hreflang="' . $altLang . '" href="' . htmlspecialchars($altPostUrl) . '" />' . PHP_EOL;
        }

        $xml .= '    </url>' . PHP_EOL;
    }
}

$xml .= '</urlset>' . PHP_EOL;

// Write to file
file_put_contents($outputFile, $xml);

echo "✅ Sitemap generated successfully!" . PHP_EOL;
echo "📁 Location: {$outputFile}" . PHP_EOL;
echo "📊 Total URLs: " . substr_count($xml, '<url>') . PHP_EOL;
