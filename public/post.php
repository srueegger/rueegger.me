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

// OG and Twitter meta tags
$ogImage = isset($meta['image']) && $meta['image'] ? $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $meta['image'] : $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/images/samuel-rueegger.jpg';
$ogUrl = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$ogType = 'article';
$articlePublishedTime = isset($meta['date']) ? date('c', strtotime($meta['date'])) : '';
$articleAuthor = 'Samuel Rüegger';
$articleTags = isset($meta['tags']) && is_array($meta['tags']) ? $meta['tags'] : [];

include '../includes/header.php';
?>

<article class="pt-24 pb-20 px-4">
    <div class="max-w-4xl mx-auto">
        <!-- Terminal Navigation -->
        <div class="terminal mb-8">
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
        <header class="lcars-panel p-8 mb-8">
            <?php if (isset($meta['image']) && $meta['image']): ?>
            <div class="mb-6" style="box-shadow: 0 0 30px rgba(255, 153, 102, 0.5);">
                <?= responsiveImage(ltrim($meta['image'], '/'), e($meta['title'] ?? ''), 'hero', 'w-full h-96 object-cover rounded border-4 border-[#ff9966]') ?>
            </div>
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
                <svg class="w-4 h-4 mr-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                    <path d="M224 64C241.7 64 256 78.3 256 96L256 128L384 128L384 96C384 78.3 398.3 64 416 64C433.7 64 448 78.3 448 96L448 128L480 128C515.3 128 544 156.7 544 192L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 192C96 156.7 124.7 128 160 128L192 128L192 96C192 78.3 206.3 64 224 64zM334.3 253.1C328.4 241.2 311.5 241.2 305.6 253.1L282.3 300.3L230.3 307.9C217.2 309.8 211.9 325.9 221.4 335.2L259.1 371.9L250.2 423.7C248 436.8 261.7 446.7 273.4 440.6L320 416L366.5 440.5C378.2 446.7 392 436.7 389.7 423.6L380.8 371.8L418.5 335.1C428 325.8 422.8 309.7 409.6 307.8L357.6 300.2L334.3 253z"/>
                </svg>
                <time datetime="<?= e($meta['date'] ?? '') ?>">
                    [<?= isset($meta['date']) ? date('Y-m-d H:i', strtotime($meta['date'])) : '' ?>]
                </time>
            </div>
        </header>

        <!-- Article Content -->
        <div class="lcars-panel p-8 md:p-12">
            <div class="prose prose-lg prose-invert max-w-none post-content">
                <?= $html ?>
            </div>
        </div>

        <!-- Share Section - Terminal Style -->
        <div class="terminal mt-8">
            <div class="terminal-content text-sm">
                <p class="text-[#00ff00] mb-3">
                    $ share --platform [linkedin|whatsapp|facebook|x]
                </p>
                <p class="text-[#a0b0d0] mb-4">
                    &gt; <?= $i18n->getLang() === 'de' ? 'Artikel über soziale Netzwerke teilen' : 'Share article via social networks' ?>
                </p>
                <div class="flex flex-wrap gap-3">
                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= urlencode($_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) ?>"
                       target="_blank" rel="noopener noreferrer"
                       class="px-4 py-2 bg-[#1a1f3a] border border-[#00ff00] text-[#00ff00] rounded hover:bg-[#00ff00] hover:text-black transition-all font-mono text-xs inline-flex items-center">
                        <svg class="w-4 h-4 mr-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M512 96L127.9 96C110.3 96 96 110.5 96 128.3L96 511.7C96 529.5 110.3 544 127.9 544L512 544C529.6 544 544 529.5 544 511.7L544 128.3C544 110.5 529.6 96 512 96zM231.4 480L165 480L165 266.2L231.5 266.2L231.5 480L231.4 480zM198.2 160C219.5 160 236.7 177.2 236.7 198.5C236.7 219.8 219.5 237 198.2 237C176.9 237 159.7 219.8 159.7 198.5C159.7 177.2 176.9 160 198.2 160zM480.3 480L413.9 480L413.9 376C413.9 351.2 413.4 319.3 379.4 319.3C344.8 319.3 339.5 346.3 339.5 374.2L339.5 480L273.1 480L273.1 266.2L336.8 266.2L336.8 295.4L337.7 295.4C346.6 278.6 368.3 260.9 400.6 260.9C467.8 260.9 480.3 305.2 480.3 362.8L480.3 480z"/></svg>
                        LinkedIn
                    </a>

                    <!-- WhatsApp -->
                    <a href="https://api.whatsapp.com/send?text=<?= urlencode(($meta['title'] ?? '') . ' - ' . $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) ?>"
                       target="_blank" rel="noopener noreferrer"
                       class="px-4 py-2 bg-[#1a1f3a] border border-[#00ff00] text-[#00ff00] rounded hover:bg-[#00ff00] hover:text-black transition-all font-mono text-xs inline-flex items-center">
                        <svg class="w-4 h-4 mr-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/></svg>
                        WhatsApp
                    </a>

                    <!-- Facebook -->
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) ?>"
                       target="_blank" rel="noopener noreferrer"
                       class="px-4 py-2 bg-[#1a1f3a] border border-[#00ff00] text-[#00ff00] rounded hover:bg-[#00ff00] hover:text-black transition-all font-mono text-xs inline-flex items-center">
                        <svg class="w-4 h-4 mr-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 440 146.7 540.8 258.2 568.5L258.2 398.2L205.4 398.2L205.4 320L258.2 320L258.2 286.3C258.2 199.2 297.6 158.8 383.2 158.8C399.4 158.8 427.4 162 438.9 165.2L438.9 236C432.9 235.4 422.4 235 409.3 235C367.3 235 351.1 250.9 351.1 292.2L351.1 320L434.7 320L420.3 398.2L351 398.2L351 574.1C477.8 558.8 576 450.9 576 320z"/></svg>
                        Facebook
                    </a>

                    <!-- X (Twitter) -->
                    <a href="https://twitter.com/intent/tweet?url=<?= urlencode($_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) ?>&text=<?= urlencode($meta['title'] ?? '') ?>"
                       target="_blank" rel="noopener noreferrer"
                       class="px-3 py-2 bg-[#1a1f3a] border border-[#00ff00] text-[#00ff00] rounded hover:bg-[#00ff00] hover:text-black transition-all font-mono text-xs inline-flex items-center justify-center"
                       title="X">
                        <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M453.2 112L523.8 112L369.6 288.2L551 528L409 528L297.7 382.6L170.5 528L99.8 528L264.7 339.5L90.8 112L236.4 112L336.9 244.9L453.2 112zM428.4 485.8L467.5 485.8L215.1 152L173.1 152L428.4 485.8z"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- EOF Terminal -->
        <div class="terminal mt-6">
            <div class="terminal-content text-sm">
                <p class="text-[#00ff00]">&gt; EOF reached</p>
                <p class="text-[#a0b0d0]">&gt; <?= $i18n->getLang() === 'de' ? 'Datei vollständig gelesen' : 'File read complete' ?></p>
                <p class="terminal-prompt mt-2">$ █</p>
            </div>
        </div>
    </div>
</article>

<?php include '../includes/footer.php'; ?>
