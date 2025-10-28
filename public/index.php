<?php
require_once '../vendor/autoload.php';
require_once '../includes/functions.php';

use App\I18n;
use App\MarkdownParser;

$i18n = new I18n('../content');
$parser = new MarkdownParser();

$pageTitle = $i18n->getLang() === 'de'
    ? 'Samuel Rüegger - Web-Entwickler, AI-Experte & Tech-Nerd'
    : 'Samuel Rüegger - Web Developer, AI Expert & Tech Nerd';

$metaDescription = $i18n->getLang() === 'de'
    ? 'Portfolio von Samuel Rüegger - Nerdiger Web-Entwickler, AI-Experte. Terminal-Aesthetik trifft moderne Webentwicklung.'
    : 'Portfolio of Samuel Rüegger - Nerdy Web Developer, AI Expert. Terminal aesthetics meet modern web development.';

include '../includes/header.php';
?>

<!-- Hero Terminal Section -->
<section class="min-h-screen flex items-center justify-center px-4 pt-24 pb-12">
    <div class="max-w-6xl w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <!-- Terminal Window -->
            <div class="terminal animate-on-scroll">
                <div class="terminal-header">
                    <div class="terminal-dot bg-red-500"></div>
                    <div class="terminal-dot bg-yellow-500"></div>
                    <div class="terminal-dot bg-green-500"></div>
                    <span class="ml-2 text-sm font-mono">samuel@rueegger.me:~$</span>
                </div>
                <div class="terminal-content text-sm">
                    <p class="terminal-prompt">whoami</p>
                    <p class="mb-2">&gt; Samuel Rüegger</p>
                    <p class="mb-4">&gt; <?= $i18n->getLang() === 'de' ? 'WEB-ENTWICKLER | AI-EXPERTE | TECH-NERD' : 'WEB DEVELOPER | AI EXPERT | TECH NERD' ?></p>
                    
                    <p class="terminal-prompt">cat ./skills.txt</p>
                    <p class="mb-1">&gt; PHP, Laravel, Symfony</p>
                    <p class="mb-1">&gt; JavaScript, Vue.js, React</p>
                    <p class="mb-1">&gt; AI Integration, Claude, GPT</p>
                    <p class="mb-4">&gt; Linux, Docker, DevOps</p>
                    
                    <p class="terminal-prompt">ls ./projects/</p>
                    <p class="mb-1">&gt; AI-Integration-Suite/</p>
                    <p class="mb-1">&gt; Modern-CMS-Platform/</p>
                    <p class="mb-4">&gt; E-Commerce-Optimization/</p>
                    
                    <p class="flex items-center">
                        <span class="terminal-prompt inline">./contact.sh</span>
                        <span class="terminal-cursor ml-1"></span>
                    </p>
                </div>
            </div>

            <!-- Profile Image with LCARS Frame -->
            <div class="animate-on-scroll animation-delay-300">
                <div class="relative">
                    <div class="absolute -inset-4 border-4 border-[#ff9966] rounded-2xl opacity-30 blur-xl"></div>
                    <div class="relative border-4 border-[#ff9966] rounded-2xl overflow-hidden" style="box-shadow: 0 0 30px rgba(255, 153, 102, 0.5);">
                        <img src="<?= asset('images/samuel-rueegger.jpg') ?>" 
                             alt="Samuel Rüegger - Web Developer & AI Expert"
                             class="w-full h-auto">
                    </div>
                    <div class="absolute -bottom-4 -right-4 status-bar">
                        STATUS: ONLINE
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="mt-12 flex flex-wrap gap-4 justify-center">
            <a href="<?= url('projects.php') ?>" class="btn btn-primary">
                $ cd ~/projects
            </a>
            <a href="<?= url('blog.php') ?>" class="btn btn-secondary">
                $ tail -f blog.log
            </a>
            <a href="<?= url('contact.php') ?>" class="btn btn-secondary">
                $ ./contact.sh
            </a>
        </div>
    </div>
</section>

<!-- Skills LCARS Panels -->
<section class="py-20 px-4">
    <div class="max-w-7xl mx-auto">
        <h2 class="section-heading text-center mb-12 animate-on-scroll">
            $ cat ~/expertise/*
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Backend -->
            <div class="lcars-panel p-6 animate-on-scroll">
                <h3 class="text-xl font-bold text-[#ff9966] mb-4 uppercase">// BACKEND</h3>
                <div class="space-y-2 text-sm">
                    <p class="text-[#00ff00]">&gt; PHP 8.3 / Laravel / Symfony</p>
                    <p class="text-[#00ff00]">&gt; Node.js / Express</p>
                    <p class="text-[#00ff00]">&gt; RESTful APIs / GraphQL</p>
                    <p class="text-[#00ff00]">&gt; MySQL / PostgreSQL / Redis</p>
                </div>
            </div>

            <!-- Frontend -->
            <div class="lcars-panel-purple p-6 animate-on-scroll animation-delay-200">
                <h3 class="text-xl font-bold text-[#cc99cc] mb-4 uppercase">// FRONTEND</h3>
                <div class="space-y-2 text-sm">
                    <p class="text-[#00ff00]">&gt; JavaScript / TypeScript</p>
                    <p class="text-[#00ff00]">&gt; Vue.js / React</p>
                    <p class="text-[#00ff00]">&gt; Tailwind CSS / Bootstrap</p>
                    <p class="text-[#00ff00]">&gt; Responsive Design / PWA</p>
                </div>
            </div>

            <!-- AI/ML -->
            <div class="lcars-panel-blue p-6 animate-on-scroll animation-delay-400">
                <h3 class="text-xl font-bold text-[#9999ff] mb-4 uppercase">// AI & ML</h3>
                <div class="space-y-2 text-sm">
                    <p class="text-[#00ff00]">&gt; Claude AI / GPT Integration</p>
                    <p class="text-[#00ff00]">&gt; NLP / Text Processing</p>
                    <p class="text-[#00ff00]">&gt; Automation Workflows</p>
                    <p class="text-[#00ff00]">&gt; Custom AI Solutions</p>
                </div>
            </div>

            <!-- DevOps -->
            <div class="lcars-panel p-6 animate-on-scroll">
                <h3 class="text-xl font-bold text-[#ff9966] mb-4 uppercase">// DEVOPS</h3>
                <div class="space-y-2 text-sm">
                    <p class="text-[#00ff00]">&gt; Docker / Kubernetes</p>
                    <p class="text-[#00ff00]">&gt; CI/CD Pipelines</p>
                    <p class="text-[#00ff00]">&gt; Linux Server Admin</p>
                    <p class="text-[#00ff00]">&gt; AWS / GCP / Azure</p>
                </div>
            </div>

            <!-- Tools -->
            <div class="lcars-panel-purple p-6 animate-on-scroll animation-delay-200">
                <h3 class="text-xl font-bold text-[#cc99cc] mb-4 uppercase">// TOOLS</h3>
                <div class="space-y-2 text-sm">
                    <p class="text-[#00ff00]">&gt; Git / GitHub / GitLab</p>
                    <p class="text-[#00ff00]">&gt; VS Code / PhpStorm</p>
                    <p class="text-[#00ff00]">&gt; Agile / Scrum</p>
                    <p class="text-[#00ff00]">&gt; Testing / QA</p>
                </div>
            </div>

            <!-- Open Source -->
            <div class="lcars-panel-blue p-6 animate-on-scroll animation-delay-400">
                <h3 class="text-xl font-bold text-[#9999ff] mb-4 uppercase">// OPEN SOURCE</h3>
                <div class="space-y-2 text-sm">
                    <p class="text-[#00ff00]">&gt; Linux Expert (Ubuntu/Arch)</p>
                    <p class="text-[#00ff00]">&gt; OSS Contributor</p>
                    <p class="text-[#00ff00]">&gt; Tech Blogger</p>
                    <p class="text-[#00ff00]">&gt; Community Engagement</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest Blog Posts -->
<section class="py-20 px-4 bg-[#1a1f3a]">
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between items-center mb-12 animate-on-scroll">
            <h2 class="text-3xl md:text-4xl font-bold text-[#ff9966] uppercase tracking-wider">
                $ tail -n 3 ~/blog/posts.log
            </h2>
            <a href="<?= url('blog.php') ?>" class="text-[#00ff00] hover:text-[#ff9966] font-mono text-sm">
                [view all →]
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php
            $posts = array_slice($i18n->getBlogPosts(), 0, 3);
            $delay = 0;
            foreach ($posts as $post):
            ?>
            <article class="card animate-on-scroll animation-delay-<?= $delay ?>">
                <?php if ($post['image']): ?>
                <img src="<?= e($post['image']) ?>" alt="<?= e($post['title']) ?>" 
                     class="w-full h-48 object-cover rounded mb-4 border-2 border-[#3a4f7a]">
                <?php endif; ?>
                
                <div class="flex flex-wrap gap-2 mb-3">
                    <?php foreach ($post['tags'] as $tag): ?>
                    <span class="tech-badge"><?= e($tag) ?></span>
                    <?php endforeach; ?>
                </div>

                <h3 class="text-lg font-bold text-[#ff9966] mb-2 uppercase">
                    <?= e($post['title']) ?>
                </h3>
                
                <p class="text-[#a0b0d0] text-sm mb-4"><?= e(truncate($post['excerpt'], 100)) ?></p>
                
                <div class="flex justify-between items-center text-xs font-mono">
                    <span class="text-[#00ff00]">[<?= date('Y-m-d', strtotime($post['date'])) ?>]</span>
                    <a href="<?= url('post.php?slug=' . $post['slug']) ?>" 
                       class="text-[#ff9966] hover:text-[#ffb000]">
                        cat →
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

<?php include '../includes/footer.php'; ?>
