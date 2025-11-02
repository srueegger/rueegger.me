<?php
require_once '../vendor/autoload.php';
require_once '../includes/functions.php';
use App\I18n;

$i18n = new I18n('../content');

// Set up page metadata
extract(setupPageMeta([
    'title' => $i18n->getLang() === 'de' ? 'Projekte' : 'Projects',
    'description' => $i18n->getLang() === 'de'
        ? 'Entdecke meine Projekte: GuideOS, helfen-helfen, LinuxGuides und mehr. Open-Source-Projekte und Community-Initiativen.'
        : 'Discover my projects: GuideOS, helfen-helfen, LinuxGuides and more. Open-source projects and community initiatives.'
]));

include '../includes/header.php';

$projects = [
    [
        'title' => 'GuideOS',
        'desc_de' => 'Innovatives Open-Source-Projekt, das die Art und Weise revolutioniert, wie wir mit Betriebssystemen und Entwicklungsumgebungen arbeiten',
        'desc_en' => 'Innovative open-source project revolutionizing how we work with operating systems and development environments',
        'tech' => ['Open Source', 'Linux', 'Development Tools'],
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M192 384L88.5 384C63.6 384 48.3 356.9 61.1 335.5L114 247.3C122.7 232.8 138.3 224 155.2 224L250.2 224C326.3 95.1 439.8 88.6 515.7 99.7C528.5 101.6 538.5 111.6 540.3 124.3C551.4 200.2 544.9 313.7 416 389.8L416 484.8C416 501.7 407.2 517.3 392.7 526L304.5 578.9C283.2 591.7 256 576.3 256 551.5L256 448C256 412.7 227.3 384 192 384L191.9 384zM464 224C464 197.5 442.5 176 416 176C389.5 176 368 197.5 368 224C368 250.5 389.5 272 416 272C442.5 272 464 250.5 464 224z"/></svg>',
        'url' => 'https://guideos.de',
        'image' => 'images/guideos-desktop.png'
    ],
    [
        'title' => 'helfen-helfen',
        'desc_de' => 'Gemeinnütziger Verein zur Unterstützung von Menschen in Not',
        'desc_en' => 'Non-profit organization supporting people in need',
        'tech' => ['Social Impact', 'Community'],
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M320 64C390.7 64 448 121.3 448 192C448 262.7 390.7 320 320 320C249.3 320 192 262.7 192 192C192 121.3 249.3 64 320 64zM40 128C62.1 128 80 145.9 80 168L80 328.2C80 345.2 86.7 361.5 98.7 373.5L149.8 424.6C158.1 432.9 171.1 434.2 180.8 427.7C193.7 419.1 195.5 400.8 184.5 389.9C177.2 382.6 161.4 366.8 137.3 342.7C124.8 330.2 124.8 309.9 137.3 297.4C149.8 284.9 170.1 284.9 182.6 297.4C206.7 321.5 222.5 337.3 229.8 344.6L229.8 344.6L255.1 369.9C276.1 390.9 287.9 419.4 287.9 449.1L287.9 528C287.9 554.5 266.4 576 239.9 576L173.2 576C156.2 576 139.9 569.3 127.9 557.3L28.1 457.4C10.1 439.4 0 415 0 389.5L0 168C0 145.9 17.9 128 40 128zM600 128C622.1 128 640 145.9 640 168L640 389.5C640 415 629.9 439.4 611.9 457.4L512 557.3C500 569.3 483.7 576 466.7 576L400 576C373.5 576 352 554.5 352 528L352 449.1C352 419.4 363.8 390.9 384.8 369.9L410.1 344.6L410.1 344.6C417.4 337.3 433.2 321.5 457.3 297.4C469.8 284.9 490.1 284.9 502.6 297.4C515.1 309.9 515.1 330.2 502.6 342.7C478.5 366.8 462.7 382.6 455.4 389.9C444.4 400.9 446.2 419.1 459.1 427.7C468.8 434.2 481.8 432.9 490.1 424.6L541.2 373.5C553.2 361.5 559.9 345.2 559.9 328.2L560 168C560 145.9 577.9 128 600 128z"/></svg>',
        'url' => 'https://helfen-helfen.ch',
        'video' => '/media/videos/helfen-helfen.mp4',
        'poster' => 'images/helfen-helfen-thumbnail.jpg'
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
            <div class="lcars-panel p-8 hover:border-[#ff9966] transition-all group">
                <?php if (isset($p['image'])): ?>
                <div class="mb-6 rounded overflow-hidden border-2 border-[#3a4f7a] group-hover:border-[#ff9966] transition-colors">
                    <?= responsiveImage($p['image'], e($p['title']), 'card', 'w-full h-64 object-cover') ?>
                </div>
                <?php endif; ?>

                <?php if (isset($p['video'])): ?>
                <div class="mb-6 rounded overflow-hidden border-2 border-[#3a4f7a] group-hover:border-[#ff9966] transition-colors h-64 relative">
                    <video class="w-full h-full object-cover" controls preload="metadata" poster="<?= isset($p['poster']) ? '/media/generated/' . $p['poster'] . '-800w.jpeg' : '' ?>">
                        <source src="<?= e($p['video']) ?>" type="video/mp4">
                        <?= $i18n->getLang() === 'de' ? 'Dein Browser unterstützt das Video-Tag nicht.' : 'Your browser does not support the video tag.' ?>
                    </video>
                </div>
                <?php endif; ?>

                <div class="flex items-start gap-4">
                    <div class="w-16 h-16 flex items-center justify-center rounded-full bg-[#0a0e27] border-2 border-[#ff9966] flex-shrink-0 group-hover:scale-110 transition-all" style="aspect-ratio: 1/1;">
                        <div class="w-8 h-8 text-[#ff9966] fill-current">
                            <?= $p['icon'] ?>
                        </div>
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
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M384 64C366.3 64 352 78.3 352 96C352 113.7 366.3 128 384 128L466.7 128L265.3 329.4C252.8 341.9 252.8 362.2 265.3 374.7C277.8 387.2 298.1 387.2 310.6 374.7L512 173.3L512 256C512 273.7 526.3 288 544 288C561.7 288 576 273.7 576 256L576 96C576 78.3 561.7 64 544 64L384 64zM144 160C99.8 160 64 195.8 64 240L64 496C64 540.2 99.8 576 144 576L400 576C444.2 576 480 540.2 480 496L480 416C480 398.3 465.7 384 448 384C430.3 384 416 398.3 416 416L416 496C416 504.8 408.8 512 400 512L144 512C135.2 512 128 504.8 128 496L128 240C128 231.2 135.2 224 144 224L224 224C241.7 224 256 209.7 256 192C256 174.3 241.7 160 224 160L144 160z"/></svg>
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
