#!/usr/bin/env php
<?php
/**
 * Import WordPress posts via WP-JSON API
 */

echo "Fetching posts from rueegger.me...\n";

// Fetch posts
$json = file_get_contents('https://rueegger.me/wp-json/wp/v2/posts?per_page=100&_embed');
$posts = json_decode($json, true);

echo "Found " . count($posts) . " posts\n\n";

$contentDir = __DIR__ . '/../content/de/blog';
$imageDir = __DIR__ . '/../public/images/blog';

// Ensure directories exist
if (!is_dir($contentDir)) {
    mkdir($contentDir, 0755, true);
}
if (!is_dir($imageDir)) {
    mkdir($imageDir, 0755, true);
}

foreach ($posts as $post) {
    $date = date('Y-m-d', strtotime($post['date']));
    $slug = $post['slug'];
    $filename = $date . '-' . $slug . '.md';
    $filepath = $contentDir . '/' . $filename;

    // Skip if already exists
    if (file_exists($filepath)) {
        echo "⏭️  Skip: $filename (already exists)\n";
        continue;
    }

    $title = html_entity_decode($post['title']['rendered'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $title = str_replace('"', '', $title); // Remove quotes for YAML

    // Extract excerpt (remove HTML)
    $excerpt = strip_tags($post['excerpt']['rendered']);
    $excerpt = html_entity_decode($excerpt, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $excerpt = trim(preg_replace('/\s+/', ' ', $excerpt));
    $excerpt = str_replace(["\n", "\r", '"'], ['', '', ''], $excerpt);

    // Get featured image
    $imageUrl = '';
    $imagePath = '';
    if (isset($post['_embedded']['wp:featuredmedia'][0]['source_url'])) {
        $imageUrl = $post['_embedded']['wp:featuredmedia'][0]['source_url'];
        $imageExt = pathinfo(parse_url($imageUrl, PHP_URL_PATH), PATHINFO_EXTENSION);
        $imageName = $slug . '.' . ($imageExt ?: 'jpg');
        $imagePath = '/images/blog/' . $imageName;

        // Download image
        $imageFile = $imageDir . '/' . $imageName;
        if (!file_exists($imageFile)) {
            echo "  📥 Downloading image: $imageName\n";
            $imageData = @file_get_contents($imageUrl);
            if ($imageData) {
                file_put_contents($imageFile, $imageData);
            }
        }
    }

    // Get tags/categories
    $tags = [];
    if (isset($post['_embedded']['wp:term'])) {
        foreach ($post['_embedded']['wp:term'] as $termGroup) {
            foreach ($termGroup as $term) {
                if ($term['taxonomy'] === 'category' || $term['taxonomy'] === 'post_tag') {
                    $tags[] = $term['name'];
                }
            }
        }
    }

    // Convert HTML content to Markdown (basic conversion)
    $content = $post['content']['rendered'];
    $content = html_entity_decode($content, ENT_QUOTES | ENT_HTML5, 'UTF-8');

    // Basic HTML to Markdown conversion
    $content = preg_replace('/<h2[^>]*>(.*?)<\/h2>/is', "\n## $1\n", $content);
    $content = preg_replace('/<h3[^>]*>(.*?)<\/h3>/is', "\n### $1\n", $content);
    $content = preg_replace('/<h4[^>]*>(.*?)<\/h4>/is', "\n#### $1\n", $content);
    $content = preg_replace('/<strong[^>]*>(.*?)<\/strong>/is', "**$1**", $content);
    $content = preg_replace('/<em[^>]*>(.*?)<\/em>/is', "*$1*", $content);
    $content = preg_replace('/<a[^>]*href=["\']([^"\']*)["\'][^>]*>(.*?)<\/a>/is', "[$2]($1)", $content);
    $content = preg_replace('/<li[^>]*>(.*?)<\/li>/is', "- $1\n", $content);
    $content = preg_replace('/<ul[^>]*>(.*?)<\/ul>/is', "\n$1\n", $content);
    $content = preg_replace('/<ol[^>]*>(.*?)<\/ol>/is', "\n$1\n", $content);
    $content = preg_replace('/<p[^>]*>(.*?)<\/p>/is', "$1\n\n", $content);
    $content = preg_replace('/<br[^>]*>/i', "\n", $content);
    $content = preg_replace('/<code[^>]*>(.*?)<\/code>/is', "`$1`", $content);
    $content = preg_replace('/<pre[^>]*>(.*?)<\/pre>/is', "\n```\n$1\n```\n", $content);

    // Remove remaining HTML tags
    $content = strip_tags($content);
    $content = trim($content);

    // Create frontmatter
    $frontmatter = "---\n";
    $frontmatter .= "title: \"$title\"\n";
    $frontmatter .= "date: \"$date\"\n";
    $frontmatter .= "excerpt: \"$excerpt\"\n";
    if (!empty($tags)) {
        $frontmatter .= "tags: [\"" . implode('", "', $tags) . "\"]\n";
    }
    if ($imagePath) {
        $frontmatter .= "image: \"$imagePath\"\n";
    }
    $frontmatter .= "---\n\n";

    // Write file
    $markdown = $frontmatter . $content;
    file_put_contents($filepath, $markdown);

    echo "✅ Created: $filename\n";
}

echo "\n✨ Import complete!\n";
