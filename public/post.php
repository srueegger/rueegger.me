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

<article class="pt-24 pb-20 px-4">
    <div class="max-w-4xl mx-auto">
        <!-- Terminal Navigation -->
        <div class="terminal mb-8 animate-on-scroll">
            <div class="terminal-header">
                <div class="terminal-dot bg-red-500"></div>
                <div class="terminal-dot bg-yellow-500"></div>
                <div class="terminal-dot bg-green-500"></div>
                <span class="ml-2 text-sm">samuel@rueegger.me:~/blog$</span>
            </div>
            <div class="terminal-content text-sm">
                <p class="terminal-prompt">cat <?= e($slug) ?>.md</p>
                <div class="flex justify-between text-[#a0b0d0] mt-2">
                    <span>&gt; <?= $i18n->getLang() === 'de' ? 'Datei wird gelesen...' : 'Reading file...' ?></span>
                    <a href="<?= url('blog.php') ?>" class="text-[#ff9966] hover:text-[#00ff00] transition-colors">
                        $ cd ..
                    </a>
                </div>
            </div>
        </div>

        <!-- Article Header in LCARS Panel -->
        <header class="lcars-panel p-8 mb-8 animate-on-scroll animation-delay-200">
            <?php if (isset($meta['image']) && $meta['image']): ?>
            <img src="<?= e($meta['image']) ?>" alt="<?= e($meta['title'] ?? '') ?>"
                 class="w-full h-96 object-cover rounded border-4 border-[#ff9966] mb-6"
                 style="box-shadow: 0 0 30px rgba(255, 153, 102, 0.5);">
            <?php endif; ?>

            <div class="flex flex-wrap gap-2 mb-4">
                <?php if (isset($meta['tags']) && is_array($meta['tags'])): ?>
                    <?php foreach ($meta['tags'] as $tag): ?>
                    <span class="tech-badge"><?= e($tag) ?></span>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-[#ff9966] uppercase font-mono">
                <?= e($meta['title'] ?? 'Untitled') ?>
            </h1>

            <div class="flex items-center text-[#00ff00] font-mono text-sm">
                <span class="mr-2">📅</span>
                <time datetime="<?= e($meta['date'] ?? '') ?>">
                    [<?= isset($meta['date']) ? date('Y-m-d H:i', strtotime($meta['date'])) : '' ?>]
                </time>
            </div>
        </header>

        <!-- Article Content -->
        <div class="lcars-panel p-8 md:p-12 animate-on-scroll animation-delay-400">
            <div class="prose prose-lg prose-invert max-w-none post-content">
                <?= $html ?>
            </div>
        </div>

        <!-- Share Section - Terminal Style -->
        <div class="terminal mt-8 animate-on-scroll animation-delay-600">
            <div class="terminal-content text-sm">
                <p class="text-[#00ff00] mb-3">
                    $ share --platform [twitter|linkedin]
                </p>
                <p class="text-[#a0b0d0] mb-4">
                    &gt; <?= $i18n->getLang() === 'de' ? 'Artikel über soziale Netzwerke teilen' : 'Share article via social networks' ?>
                </p>
                <div class="flex gap-3">
                    <a href="https://twitter.com/intent/tweet?url=<?= urlencode($_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) ?>&text=<?= urlencode($meta['title'] ?? '') ?>"
                       target="_blank" rel="noopener noreferrer"
                       class="px-4 py-2 bg-[#1a1f3a] border border-[#00ff00] text-[#00ff00] rounded hover:bg-[#00ff00] hover:text-black transition-all font-mono text-xs">
                        <svg class="w-4 h-4 inline mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        Twitter/X
                    </a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= urlencode($_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) ?>"
                       target="_blank" rel="noopener noreferrer"
                       class="px-4 py-2 bg-[#1a1f3a] border border-[#00ff00] text-[#00ff00] rounded hover:bg-[#00ff00] hover:text-black transition-all font-mono text-xs">
                        <svg class="w-4 h-4 inline mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        LinkedIn
                    </a>
                </div>
            </div>
        </div>

        <!-- EOF Terminal -->
        <div class="terminal mt-6 animate-on-scroll animation-delay-800">
            <div class="terminal-content text-sm">
                <p class="text-[#00ff00]">&gt; EOF reached</p>
                <p class="text-[#a0b0d0]">&gt; <?= $i18n->getLang() === 'de' ? 'Datei vollständig gelesen' : 'File read complete' ?></p>
                <p class="terminal-prompt mt-2">$ █</p>
            </div>
        </div>
    </div>
</article>

<?php include '../includes/footer.php'; ?>
