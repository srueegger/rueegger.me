<?php
require_once '../vendor/autoload.php';
require_once '../includes/functions.php';

use App\I18n;

$i18n = new I18n('../content');

$pageTitle = 'Blog - Samuel Rüegger';
$metaDescription = $i18n->getLang() === 'de'
    ? 'Tech-Blog von Samuel Rüegger - Artikel über Webentwicklung, AI, Linux und moderne Technologien.'
    : 'Tech blog by Samuel Rüegger - Articles about web development, AI, Linux, and modern technologies.';

include '../includes/header.php';

$posts = $i18n->getBlogPosts();
?>

<div class="pt-24 pb-20 bg-gradient-to-br from-blue-50 via-white to-purple-50 dark:from-gray-900 dark:via-gray-900 dark:to-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16 animate-on-scroll">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                    Blog
                </span>
            </h1>
            <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                <?= $i18n->getLang() === 'de'
                    ? 'Gedanken und Erkenntnisse zu Webentwicklung, AI, Linux und Tech'
                    : 'Thoughts and insights on web development, AI, Linux, and tech'
                ?>
            </p>
        </div>

        <!-- Blog Posts Grid -->
        <?php if (empty($posts)): ?>
        <div class="text-center py-12">
            <p class="text-xl text-gray-600 dark:text-gray-400">
                <?= $i18n->getLang() === 'de' ? 'Noch keine Artikel verfügbar.' : 'No articles available yet.' ?>
            </p>
        </div>
        <?php else: ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $delay = 0;
            foreach ($posts as $post):
            ?>
            <article class="card animate-on-scroll animation-delay-<?= $delay ?>">
                <?php if ($post['image']): ?>
                <img src="<?= e($post['image']) ?>" alt="<?= e($post['title']) ?>" class="w-full h-48 object-cover rounded-lg mb-4" loading="lazy">
                <?php endif; ?>

                <div class="flex flex-wrap gap-2 mb-3">
                    <?php foreach ($post['tags'] as $tag): ?>
                    <span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded text-xs">
                        <?= e($tag) ?>
                    </span>
                    <?php endforeach; ?>
                </div>

                <h2 class="text-xl font-bold mb-3">
                    <a href="<?= url('post.php?slug=' . $post['slug']) ?>" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                        <?= e($post['title']) ?>
                    </a>
                </h2>

                <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-3">
                    <?= e($post['excerpt']) ?>
                </p>

                <div class="flex justify-between items-center text-sm">
                    <span class="text-gray-500 dark:text-gray-500">
                        <?= formatDate($post['date'], $i18n->getLang()) ?>
                    </span>
                    <a href="<?= url('post.php?slug=' . $post['slug']) ?>" class="text-blue-600 dark:text-blue-400 hover:underline font-medium">
                        <?= $i18n->getLang() === 'de' ? 'Weiterlesen →' : 'Read more →' ?>
                    </a>
                </div>
            </article>
            <?php
            $delay = ($delay + 100) % 500;
            endforeach;
            ?>
        </div>
        <?php endif; ?>
    </div>
</div>

<style>
.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>

<?php include '../includes/footer.php'; ?>
