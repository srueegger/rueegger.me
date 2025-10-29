<?php
require_once '../vendor/autoload.php';
require_once '../includes/functions.php';
use App\I18n;

$i18n = new I18n('../content');
$pageTitle = $i18n->getLang() === 'de' ? 'Projekte - Samuel Rüegger' : 'Projects - Samuel Rüegger';
$metaDescription = $i18n->getLang() === 'de'
    ? 'Entdecke meine Projekte: GuideOS, helfen-helfen, LinuxGuides und mehr. Open-Source-Projekte und Community-Initiativen.'
    : 'Discover my projects: GuideOS, helfen-helfen, LinuxGuides and more. Open-source projects and community initiatives.';

// OG meta tags
$ogImage = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/images/samuel-rueegger.jpg';
$ogUrl = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$ogType = 'website';

include '../includes/header.php';

$projects = [
    [
        'title' => 'GuideOS',
        'desc_de' => 'Innovatives Open-Source-Projekt, das die Art und Weise revolutioniert, wie wir mit Betriebssystemen und Entwicklungsumgebungen arbeiten',
        'desc_en' => 'Innovative open-source project revolutionizing how we work with operating systems and development environments',
        'tech' => ['Open Source', 'Linux', 'Development Tools'],
        'icon' => 'fa-solid fa-rocket',
        'url' => 'https://guideos.de'
    ],
    [
        'title' => 'helfen-helfen',
        'desc_de' => 'Gemeinnütziger Verein zur Unterstützung von Menschen in Not',
        'desc_en' => 'Non-profit organization supporting people in need',
        'tech' => ['Social Impact', 'Community'],
        'icon' => 'fa-solid fa-hands-holding-circle',
        'url' => 'https://helfen-helfen.ch'
    ],
];
?>

<div class="pt-24 pb-20 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="terminal mb-12">
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
            <div class="lcars-panel p-6<?= $delay ?> hover:border-[#ff9966] transition-all group">
                <div class="flex items-start gap-4">
                    <div class="w-16 h-16 flex items-center justify-center rounded-full bg-[#0a0e27] border-2 border-[#ff9966] flex-shrink-0 group-hover:scale-110 transition-all" style="aspect-ratio: 1/1;">
                        <i class="<?= $p['icon'] ?> text-[#ff9966] text-2xl"></i>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-[#ff9966] mb-2 uppercase font-mono group-hover:text-[#ffb000] transition-colors"><?= $p['title'] ?></h3>
                        <p class="text-[#a0b0d0] mb-4 text-sm"><?= $desc ?></p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <?php foreach ($p['tech'] as $tech): ?>
                            <span class="tech-badge"><?= $tech ?></span>
                            <?php endforeach; ?>
                        </div>
                        <?php if (isset($p['url'])): ?>
                        <a href="<?= $p['url'] ?>" target="_blank" rel="noopener noreferrer"
                           class="inline-flex items-center gap-2 px-4 py-2 bg-[#1a1f3a] border border-[#00ff00] text-[#00ff00] rounded hover:bg-[#00ff00] hover:text-black transition-all font-mono text-xs">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            <?= $i18n->getLang() === 'de' ? 'Projekt besuchen' : 'Visit project' ?>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php $delay += 200; endforeach; ?>
        </div>

        <div class="mt-12 text-center">
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
