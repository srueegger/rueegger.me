<?php
require_once '../vendor/autoload.php';
require_once '../includes/functions.php';

use App\I18n;
use App\MarkdownParser;

$i18n = new I18n('../content');
$parser = new MarkdownParser();

$pageTitle = $i18n->getLang() === 'de' ? 'Über mich - Samuel Rüegger' : 'About Me - Samuel Rüegger';
$metaDescription = $i18n->getLang() === 'de'
    ? 'Erfahre mehr über Samuel Rüegger - Web-Entwickler, AI-Experte und Tech-Kreativer. Meine Geschichte, Technologien und Philosophie.'
    : 'Learn more about Samuel Rüegger - Web Developer, AI Expert & Tech Creative. My story, technologies, and philosophy.';

include '../includes/header.php';

// Load content
$content = $i18n->loadContent('pages/about');
$html = $content ? $parser->parse($content) : '';
?>

<div class="pt-24 pb-20 px-4">
    <div class="max-w-4xl mx-auto">
        <!-- Terminal Header -->
        <div class="terminal mb-8 animate-on-scroll">
            <div class="terminal-header">
                <div class="terminal-dot bg-red-500"></div>
                <div class="terminal-dot bg-yellow-500"></div>
                <div class="terminal-dot bg-green-500"></div>
                <span class="ml-2 text-sm">samuel@rueegger.me:~$</span>
            </div>
            <div class="terminal-content text-sm">
                <p class="terminal-prompt">cat ~/about/samuel-rueegger.md</p>
                <p class="text-[#00ff00] mb-2">&gt; <?= $i18n->getLang() === 'de' ? 'Lade Profildaten...' : 'Loading profile data...' ?></p>
                <p class="text-[#a0b0d0]">&gt; <?= $i18n->getLang() === 'de' ? 'Datei gefunden und wird angezeigt...' : 'File found and displaying...' ?></p>
            </div>
        </div>

        <!-- Content in LCARS Panel -->
        <div class="lcars-panel p-8 md:p-12 animate-on-scroll animation-delay-200">
            <div class="prose prose-lg prose-invert max-w-none about-content">
                <?= $html ?>
            </div>
        </div>

        <!-- File Info Footer -->
        <div class="mt-6 lcars-panel-blue p-4 text-sm font-mono animate-on-scroll animation-delay-400">
            <div class="flex justify-between text-[#a0b0d0]">
                <span>&gt; EOF reached</span>
                <span><?= $i18n->getLang() === 'de' ? 'Datei vollständig gelesen' : 'File read complete' ?></span>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
