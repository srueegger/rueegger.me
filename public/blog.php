<?php
require_once '../vendor/autoload.php';
require_once '../includes/functions.php';
use App\I18n;

$i18n = new I18n('../content');
$pageTitle = 'Blog - Samuel Rüegger';
$metaDescription = $i18n->getLang() === 'de' ? 'Tech-Blog über Webentwicklung, AI, Linux' : 'Tech blog about web development, AI, Linux';

// OG meta tags
$ogImage = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/images/samuel-rueegger.jpg';
$ogUrl = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$ogType = 'website';

include '../includes/header.php';
$posts = $i18n->getBlogPosts();
?>

<div class="pt-24 pb-20 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="terminal mb-12">
            <div class="terminal-header">
                <div class="terminal-dot bg-red-500"></div>
                <div class="terminal-dot bg-yellow-500"></div>
                <div class="terminal-dot bg-green-500"></div>
                <span class="ml-2 text-sm">samuel@rueegger.me:~/blog$</span>
            </div>
            <div class="terminal-content text-sm">
                <p class="terminal-prompt">tail -f posts.log</p>
                <p class="text-[#00ff00] mb-2">&gt; <?= $i18n->getLang() === 'de' ? 'Zeige neueste Blogposts...' : 'Showing recent blog posts...' ?></p>
                <p class="text-[#a0b0d0]">&gt; Total: <?= count($posts) ?> posts</p>
            </div>
        </div>

        <?php if (empty($posts)): ?>
        <div class="lcars-panel p-12 text-center">
            <p class="text-[#00ff00] text-xl">$ ls -la ~/blog/</p>
            <p class="text-[#a0b0d0] mt-4">&gt; <?= $i18n->getLang() === 'de' ? 'Noch keine Artikel verfügbar.' : 'No articles available yet.' ?></p>
        </div>
        <?php else: ?>
        <div class="space-y-6">
            <?php foreach ($posts as $i => $post): ?>
            <article class="lcars-panel p-6 hover:border-[#00ff00] transition-all">
                <div class="flex flex-col md:flex-row gap-6">
                    <?php if ($post['image']): ?>
                    <div class="md:w-48 flex-shrink-0">
                        <img src="<?= e($post['image']) ?>" alt="<?= e($post['title']) ?>" 
                             class="w-full h-32 object-cover rounded border-2 border-[#3a4f7a]">
                    </div>
                    <?php endif; ?>
                    <div class="flex-1">
                        <div class="flex items-start justify-between mb-2">
                            <div class="flex items-center text-xs font-mono text-[#00ff00]">
                                <svg class="w-3 h-3 mr-1.5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                    <path d="M224 64C241.7 64 256 78.3 256 96L256 128L384 128L384 96C384 78.3 398.3 64 416 64C433.7 64 448 78.3 448 96L448 128L480 128C515.3 128 544 156.7 544 192L544 480C544 515.3 515.3 544 480 544L160 544C124.7 544 96 515.3 96 480L96 192C96 156.7 124.7 128 160 128L192 128L192 96C192 78.3 206.3 64 224 64zM334.3 253.1C328.4 241.2 311.5 241.2 305.6 253.1L282.3 300.3L230.3 307.9C217.2 309.8 211.9 325.9 221.4 335.2L259.1 371.9L250.2 423.7C248 436.8 261.7 446.7 273.4 440.6L320 416L366.5 440.5C378.2 446.7 392 436.7 389.7 423.6L380.8 371.8L418.5 335.1C428 325.8 422.8 309.7 409.6 307.8L357.6 300.2L334.3 253z"/>
                                </svg>
                                <span>[<?= date('Y-m-d H:i', strtotime($post['date'])) ?>]</span>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <?php foreach (array_slice($post['tags'], 0, 3) as $tag): ?>
                                <span class="tech-badge text-xs"><?= e($tag) ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <h2 class="text-xl font-bold text-[#ff9966] mb-2 uppercase">
                            <a href="<?= url('post.php?slug=' . $post['slug']) ?>" class="hover:text-[#ffb000]">
                                <?= e($post['title']) ?>
                            </a>
                        </h2>
                        <p class="text-[#a0b0d0] text-sm mb-3"><?= e($post['excerpt']) ?></p>
                        <a href="<?= url('post.php?slug=' . $post['slug']) ?>" 
                           class="inline-block text-[#00ff00] hover:text-[#ff9966] font-mono text-sm">
                            $ cat <?= $post['slug'] ?>.md →
                        </a>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
