<?php
require_once '../vendor/autoload.php';
require_once '../includes/functions.php';

use App\I18n;
use App\MarkdownParser;

$i18n = new I18n('../content');
$parser = new MarkdownParser();

// Get slug from URL
$slug = $_GET['slug'] ?? '';

if (empty($slug)) {
    header('Location: ' . url('blog.php'));
    exit;
}

// Load post content
$content = $i18n->loadContent('blog', $slug);

if (!$content) {
    header('HTTP/1.0 404 Not Found');
    include '../includes/header.php';
    echo '<div class="pt-24 pb-20 text-center"><h1 class="text-4xl font-bold mb-4">404 - Not Found</h1><p>Post not found.</p></div>';
    include '../includes/footer.php';
    exit;
}

// Extract metadata
$meta = $i18n->extractMetadata($content);
$html = $parser->parse($content);

$pageTitle = ($meta['title'] ?? 'Blog Post') . ' - Samuel Rüegger';
$metaDescription = $meta['excerpt'] ?? '';
$metaKeywords = isset($meta['tags']) && is_array($meta['tags']) ? implode(', ', $meta['tags']) : '';

include '../includes/header.php';
?>

<article class="pt-24 pb-20 bg-gradient-to-br from-blue-50 via-white to-purple-50 dark:from-gray-900 dark:via-gray-900 dark:to-gray-800">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Back Button -->
        <div class="mb-8 animate-on-scroll">
            <a href="<?= url('blog.php') ?>" class="inline-flex items-center text-blue-600 dark:text-blue-400 hover:underline">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <?= $i18n->getLang() === 'de' ? 'Zurück zum Blog' : 'Back to Blog' ?>
            </a>
        </div>

        <!-- Article Header -->
        <header class="mb-12 animate-on-scroll animation-delay-200">
            <?php if (isset($meta['image']) && $meta['image']): ?>
            <img src="<?= e($meta['image']) ?>" alt="<?= e($meta['title'] ?? '') ?>" class="w-full h-96 object-cover rounded-2xl shadow-2xl mb-8">
            <?php endif; ?>

            <div class="flex flex-wrap gap-2 mb-4">
                <?php if (isset($meta['tags']) && is_array($meta['tags'])): ?>
                    <?php foreach ($meta['tags'] as $tag): ?>
                    <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 rounded-full text-sm">
                        <?= e($tag) ?>
                    </span>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                <?= e($meta['title'] ?? 'Untitled') ?>
            </h1>

            <div class="flex items-center text-gray-600 dark:text-gray-400">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <time datetime="<?= e($meta['date'] ?? '') ?>">
                    <?= isset($meta['date']) ? formatDate($meta['date'], $i18n->getLang()) : '' ?>
                </time>
            </div>
        </header>

        <!-- Article Content -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 md:p-12 animate-on-scroll animation-delay-400">
            <div class="prose prose-lg dark:prose-invert max-w-none">
                <?= $html ?>
            </div>
        </div>

        <!-- Share Section -->
        <div class="mt-12 text-center animate-on-scroll animation-delay-600">
            <p class="text-gray-600 dark:text-gray-400 mb-4">
                <?= $i18n->getLang() === 'de' ? 'Artikel teilen:' : 'Share this article:' ?>
            </p>
            <div class="flex justify-center gap-4">
                <a href="https://twitter.com/intent/tweet?url=<?= urlencode($_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) ?>&text=<?= urlencode($meta['title'] ?? '') ?>"
                   target="_blank" rel="noopener noreferrer"
                   class="p-3 bg-gray-100 dark:bg-gray-700 rounded-full hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= urlencode($_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) ?>"
                   target="_blank" rel="noopener noreferrer"
                   class="p-3 bg-gray-100 dark:bg-gray-700 rounded-full hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
            </div>
        </div>
    </div>
</article>

<?php include '../includes/footer.php'; ?>
