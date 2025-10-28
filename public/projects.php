<?php
require_once '../vendor/autoload.php';
require_once '../includes/functions.php';
use App\I18n;

$i18n = new I18n('../content');
$pageTitle = $i18n->getLang() === 'de' ? 'Projekte - Samuel Rüegger' : 'Projects - Samuel Rüegger';
include '../includes/header.php';

$projects = [
    ['title' => 'AI-Integration-Suite', 'desc_de' => 'KI-Framework für Webanwendungen', 'desc_en' => 'AI framework for web apps', 'tech' => ['PHP', 'Laravel', 'Claude', 'GPT'], 'icon' => '🤖'],
    ['title' => 'Modern-CMS-Platform', 'desc_de' => 'Headless CMS mit GraphQL', 'desc_en' => 'Headless CMS with GraphQL', 'tech' => ['PHP', 'Symfony', 'GraphQL', 'Vue'], 'icon' => '📝'],
    ['title' => 'E-Commerce-Optimization', 'desc_de' => '70% schneller durch Performance-Tuning', 'desc_en' => '70% faster through performance tuning', 'tech' => ['JavaScript', 'PWA', 'Redis'], 'icon' => '🛒'],
    ['title' => 'DevOps-Automation', 'desc_de' => 'CI/CD Pipeline für Kubernetes', 'desc_en' => 'CI/CD pipeline for Kubernetes', 'tech' => ['Docker', 'K8s', 'GitLab'], 'icon' => '🚀'],
];
?>

<div class="pt-24 pb-20 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="terminal mb-12 animate-on-scroll">
            <div class="terminal-header">
                <div class="terminal-dot bg-red-500"></div>
                <div class="terminal-dot bg-yellow-500"></div>
                <div class="terminal-dot bg-green-500"></div>
                <span class="ml-2 text-sm">samuel@rueegger.me:~$</span>
            </div>
            <div class="terminal-content text-sm">
                <p class="terminal-prompt">ls -la ~/projects/</p>
                <p class="text-[#00ff00] mb-2">&gt; total <?= count($projects) ?></p>
                <?php foreach ($projects as $p): ?>
                <p class="text-[#a0b0d0]">drwxr-xr-x  samuel  wheel   <?= $p['title'] ?>/</p>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php $delay = 0; foreach ($projects as $p): 
            $desc = $i18n->getLang() === 'de' ? $p['desc_de'] : $p['desc_en'];
            ?>
            <div class="lcars-panel p-6 animate-on-scroll animation-delay-<?= $delay ?>">
                <div class="flex items-start gap-4">
                    <div class="text-4xl"><?= $p['icon'] ?></div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-[#ff9966] mb-2 uppercase font-mono"><?= $p['title'] ?></h3>
                        <p class="text-[#a0b0d0] mb-4 text-sm"><?= $desc ?></p>
                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($p['tech'] as $tech): ?>
                            <span class="tech-badge"><?= $tech ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php $delay += 200; endforeach; ?>
        </div>

        <div class="mt-12 text-center animate-on-scroll">
            <div class="lcars-panel-blue p-8 inline-block">
                <p class="text-2xl mb-2 text-[#9999ff] font-bold">$ git clone https://github.com/srueegger</p>
                <a href="https://github.com/srueegger" target="_blank" class="btn btn-secondary mt-4 inline-block">
                    VIEW ON GITHUB →
                </a>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
