<?php
// Initialize
require_once '../vendor/autoload.php';
require_once '../includes/functions.php';

use App\I18n;
use App\MarkdownParser;

$i18n = new I18n('../content');
$parser = new MarkdownParser();

// SEO
$pageTitle = $i18n->getLang() === 'de'
    ? 'Samuel Rüegger - Web-Entwickler, AI-Experte & Tech-Kreativer'
    : 'Samuel Rüegger - Web Developer, AI Expert & Tech Creative';

$metaDescription = $i18n->getLang() === 'de'
    ? 'Portfolio von Samuel Rüegger - Moderner Web-Entwickler, AI-Experte und Tech-Kreativer. Spezialisiert auf PHP, JavaScript, KI-Integration und innovative Weblösungen.'
    : 'Portfolio of Samuel Rüegger - Modern Web Developer, AI Expert & Tech Creative. Specialized in PHP, JavaScript, AI integration, and innovative web solutions.';

$metaKeywords = 'Web Development, AI, PHP, JavaScript, Full-Stack, Linux, Technology, Innovation';

include '../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-16">
    <!-- Gradient Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-purple-50 dark:from-gray-900 dark:via-gray-900 dark:to-gray-800"></div>

    <!-- Animated Background Shapes -->
    <div class="absolute inset-0 overflow-hidden opacity-20 dark:opacity-10">
        <div class="absolute top-20 left-10 w-72 h-72 bg-blue-400 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
        <div class="absolute top-40 right-10 w-72 h-72 bg-purple-400 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-20 left-20 w-72 h-72 bg-pink-400 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000"></div>
    </div>

    <!-- Content -->
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div class="animate-on-scroll">
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                    <span class="block text-gray-900 dark:text-white">Samuel Rüegger</span>
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                        <?= $i18n->getLang() === 'de' ? 'Web-Entwickler' : 'Web Developer' ?>
                    </span>
                </h1>

                <div class="flex flex-wrap gap-3 mb-8">
                    <span class="px-4 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-800 dark:text-blue-300 rounded-full font-medium">
                        <?= $i18n->getLang() === 'de' ? 'AI-Experte' : 'AI Expert' ?>
                    </span>
                    <span class="px-4 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-800 dark:text-purple-300 rounded-full font-medium">
                        <?= $i18n->getLang() === 'de' ? 'Tech-Kreativer' : 'Tech Creative' ?>
                    </span>
                    <span class="px-4 py-2 bg-pink-100 dark:bg-pink-900/30 text-pink-800 dark:text-pink-300 rounded-full font-medium">
                        Full-Stack
                    </span>
                </div>

                <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 mb-8 leading-relaxed">
                    <?= $i18n->getLang() === 'de'
                        ? 'Ich entwickle moderne Webanwendungen mit Fokus auf KI-Integration, Performance und User Experience. Leidenschaft für Open Source und innovative Technologien.'
                        : 'I develop modern web applications focusing on AI integration, performance, and user experience. Passionate about Open Source and innovative technologies.'
                    ?>
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="<?= url('projects.php') ?>" class="btn btn-primary">
                        <?= $i18n->getLang() === 'de' ? 'Meine Projekte' : 'My Projects' ?>
                    </a>
                    <a href="<?= url('contact.php') ?>" class="btn btn-outline">
                        <?= $i18n->getLang() === 'de' ? 'Kontakt aufnehmen' : 'Get in Touch' ?>
                    </a>
                </div>
            </div>

            <!-- Profile Image -->
            <div class="animate-on-scroll animation-delay-300">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl transform rotate-6 scale-105 opacity-20"></div>
                    <img src="<?= asset('images/samuel-rueegger.jpg') ?>"
                         alt="Samuel Rüegger - Web Developer & AI Expert"
                         class="relative rounded-3xl shadow-2xl w-full max-w-md mx-auto transform transition-transform duration-500 hover:scale-105"
                         loading="eager">
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- Skills Section -->
<section class="py-20 bg-white dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="section-heading">
                <?= $i18n->getLang() === 'de' ? 'Technologien & Expertise' : 'Technologies & Expertise' ?>
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                <?= $i18n->getLang() === 'de'
                    ? 'Moderne Technologien für innovative Lösungen'
                    : 'Modern technologies for innovative solutions'
                ?>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Backend -->
            <div class="card animate-on-scroll">
                <div class="text-4xl mb-4">⚙️</div>
                <h3 class="text-2xl font-bold mb-4">Backend Development</h3>
                <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                    <li>• PHP / Laravel / Symfony</li>
                    <li>• Node.js / Express</li>
                    <li>• RESTful APIs & GraphQL</li>
                    <li>• Database Design (MySQL, PostgreSQL)</li>
                </ul>
            </div>

            <!-- Frontend -->
            <div class="card animate-on-scroll animation-delay-200">
                <div class="text-4xl mb-4">🎨</div>
                <h3 class="text-2xl font-bold mb-4">Frontend Development</h3>
                <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                    <li>• JavaScript / TypeScript</li>
                    <li>• Vue.js / React</li>
                    <li>• Tailwind CSS / Bootstrap</li>
                    <li>• Responsive & Accessible Design</li>
                </ul>
            </div>

            <!-- AI -->
            <div class="card animate-on-scroll animation-delay-400">
                <div class="text-4xl mb-4">🤖</div>
                <h3 class="text-2xl font-bold mb-4">AI & Machine Learning</h3>
                <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                    <li>• AI Integration & APIs</li>
                    <li>• Natural Language Processing</li>
                    <li>• Claude / GPT Implementation</li>
                    <li>• Automation & Workflows</li>
                </ul>
            </div>

            <!-- DevOps -->
            <div class="card animate-on-scroll">
                <div class="text-4xl mb-4">🚀</div>
                <h3 class="text-2xl font-bold mb-4">DevOps & Infrastructure</h3>
                <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                    <li>• Docker / Kubernetes</li>
                    <li>• CI/CD Pipelines</li>
                    <li>• Linux Server Administration</li>
                    <li>• Cloud Platforms (AWS, GCP)</li>
                </ul>
            </div>

            <!-- Tools -->
            <div class="card animate-on-scroll animation-delay-200">
                <div class="text-4xl mb-4">🛠️</div>
                <h3 class="text-2xl font-bold mb-4"><?= $i18n->getLang() === 'de' ? 'Tools & Workflows' : 'Tools & Workflows' ?></h3>
                <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                    <li>• Git / GitHub / GitLab</li>
                    <li>• VS Code / PhpStorm</li>
                    <li>• Agile / Scrum</li>
                    <li>• Testing & Quality Assurance</li>
                </ul>
            </div>

            <!-- Open Source -->
            <div class="card animate-on-scroll animation-delay-400">
                <div class="text-4xl mb-4">💚</div>
                <h3 class="text-2xl font-bold mb-4">Open Source & Linux</h3>
                <ul class="space-y-2 text-gray-600 dark:text-gray-400">
                    <li>• Linux Expert (Ubuntu, Fedora, Arch)</li>
                    <li>• Open Source Contributor</li>
                    <li>• Community Engagement</li>
                    <li>• Technical Writing & Blogging</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Latest Blog Posts -->
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-12 animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold">
                <?= $i18n->getLang() === 'de' ? 'Neueste Artikel' : 'Latest Articles' ?>
            </h2>
            <a href="<?= url('blog.php') ?>" class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 font-medium">
                <?= $i18n->getLang() === 'de' ? 'Alle Artikel →' : 'All Articles →' ?>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php
            $posts = array_slice($i18n->getBlogPosts(), 0, 3);
            $delay = 0;
            foreach ($posts as $post):
            ?>
            <article class="card animate-on-scroll animation-delay-<?= $delay ?>">
                <?php if ($post['image']): ?>
                <img src="<?= e($post['image']) ?>" alt="<?= e($post['title']) ?>" class="w-full h-48 object-cover rounded-lg mb-4">
                <?php endif; ?>
                <h3 class="text-xl font-bold mb-2">
                    <a href="<?= url('post.php?slug=' . $post['slug']) ?>" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                        <?= e($post['title']) ?>
                    </a>
                </h3>
                <p class="text-gray-600 dark:text-gray-400 mb-4"><?= e($post['excerpt']) ?></p>
                <div class="flex justify-between items-center text-sm text-gray-500 dark:text-gray-500">
                    <span><?= formatDate($post['date'], $i18n->getLang()) ?></span>
                    <a href="<?= url('post.php?slug=' . $post['slug']) ?>" class="text-blue-600 dark:text-blue-400 hover:underline">
                        <?= $i18n->getLang() === 'de' ? 'Weiterlesen' : 'Read more' ?> →
                    </a>
                </div>
            </article>
            <?php
            $delay += 200;
            endforeach;
            ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-purple-600">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-on-scroll">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
            <?= $i18n->getLang() === 'de' ? 'Lass uns zusammenarbeiten' : "Let's Work Together" ?>
        </h2>
        <p class="text-xl text-blue-100 mb-8">
            <?= $i18n->getLang() === 'de'
                ? 'Hast du ein spannendes Projekt? Ich freue mich darauf, von dir zu hören!'
                : 'Have an exciting project? I\'d love to hear from you!'
            ?>
        </p>
        <a href="<?= url('contact.php') ?>" class="inline-block px-8 py-4 bg-white text-blue-600 rounded-lg font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
            <?= $i18n->getLang() === 'de' ? 'Kontaktiere mich' : 'Contact Me' ?>
        </a>
    </div>
</section>

<style>
@keyframes blob {
    0%, 100% {
        transform: translate(0, 0) scale(1);
    }
    33% {
        transform: translate(30px, -50px) scale(1.1);
    }
    66% {
        transform: translate(-20px, 20px) scale(0.9);
    }
}

.animate-blob {
    animation: blob 7s infinite;
}

.animation-delay-2000 {
    animation-delay: 2s;
}

.animation-delay-4000 {
    animation-delay: 4s;
}

.animation-delay-200 {
    animation-delay: 0.2s;
}

.animation-delay-300 {
    animation-delay: 0.3s;
}

.animation-delay-400 {
    animation-delay: 0.4s;
}
</style>

<?php include '../includes/footer.php'; ?>
