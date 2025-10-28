<?php
require_once '../vendor/autoload.php';
require_once '../includes/functions.php';
use App\I18n;

$i18n = new I18n('../content');
$pageTitle = 'Blog - Samuel Rüegger';
$metaDescription = $i18n->getLang() === 'de' ? 'Tech-Blog über Webentwicklung, AI, Linux' : 'Tech blog about web development, AI, Linux';
include '../includes/header.php';
$posts = $i18n->getBlogPosts();
?>

<div class="pt-24 pb-20 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="terminal mb-12 animate-on-scroll">
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
            <article class="lcars-panel p-6 hover:border-[#00ff00] transition-all animate-on-scroll">
                <div class="flex flex-col md:flex-row gap-6">
                    <?php if ($post['image']): ?>
                    <div class="md:w-48 flex-shrink-0">
                        <img src="<?= e($post['image']) ?>" alt="<?= e($post['title']) ?>" 
                             class="w-full h-32 object-cover rounded border-2 border-[#3a4f7a]">
                    </div>
                    <?php endif; ?>
                    <div class="flex-1">
                        <div class="flex items-start justify-between mb-2">
                            <span class="text-xs font-mono text-[#00ff00]">[<?= date('Y-m-d H:i', strtotime($post['date'])) ?>]</span>
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
