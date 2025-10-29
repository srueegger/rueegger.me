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

// OG meta tags
$ogImage = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/images/samuel-rueegger.jpg';
$ogUrl = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$ogType = 'profile';

include '../includes/header.php';

// Load content
$content = $i18n->loadContent('pages/about');
$html = $content ? $parser->parse($content) : '';
?>

<div class="pt-24 pb-20 px-4">
    <div class="max-w-4xl mx-auto">
        <!-- Terminal Header -->
        <div class="terminal mb-8">
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
        <div class="lcars-panel p-8 md:p-12">
            <div class="prose prose-lg prose-invert max-w-none about-content">
                <?php
                // Extract principles section and replace with custom cards
                $principles = [
                    [
                        'title' => 'Clean Code',
                        'desc' => 'Lesbar heute = wartbar morgen',
                        'icon' => 'fa-solid fa-code'
                    ],
                    [
                        'title' => 'Open Source First',
                        'desc' => 'Wissen gehört geteilt, nicht gehortet',
                        'icon' => 'fa-solid fa-code-branch'
                    ],
                    [
                        'title' => 'Lifelong Learning',
                        'desc' => 'Jeden Tag etwas Neues lernen (heute: noch mehr über LCARS-Design)',
                        'icon' => 'fa-solid fa-graduation-cap'
                    ],
                    [
                        'title' => 'Privacy by Design',
                        'desc' => 'Datenschutz ist keine Option, sondern Standard',
                        'icon' => 'fa-solid fa-shield-halved'
                    ],
                    [
                        'title' => 'Ship Fast, Iterate Faster',
                        'desc' => 'Perfekt ist der Feind von fertig',
                        'icon' => 'fa-solid fa-rocket'
                    ],
                    [
                        'title' => 'Coffee-Driven Development',
                        'desc' => 'while(awake) { code(); coffee(); }',
                        'icon' => 'fa-solid fa-mug-hot'
                    ]
                ];

                // Remove the principles section from the HTML
                $htmlParts = preg_split('/<h2[^>]*>Philosophie &amp; Prinzipien<\/h2>/', $html, 2);
                $beforePrinciples = $htmlParts[0];

                if (isset($htmlParts[1])) {
                    $afterParts = preg_split('/<h2[^>]*>/', $htmlParts[1], 2);
                    $afterPrinciples = isset($afterParts[1]) ? '<h2>' . $afterParts[1] : '';
                } else {
                    $afterPrinciples = '';
                }

                echo $beforePrinciples;
                ?>

                <h2 class="text-[#ff9966] font-bold uppercase tracking-wider mt-8 mb-4">Philosophie & Prinzipien</h2>
                <p class="mb-6"><strong>Code ist wie Jazz</strong> – es braucht Struktur, aber auch Improvisation. Meine Grundsätze:</p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 my-8 not-prose">
                    <?php foreach ($principles as $index => $principle): ?>
                    <div class="principle-card group bg-[#1a1f3a] border-2 border-[#3a4f7a] rounded-lg p-6 transition-all duration-300 hover:border-[#ff9966] hover:shadow-lg hover:shadow-[#ff9966]/20 hover:-translate-y-1">
                        <div class="flex flex-col items-center text-center">
                            <div class="principle-icon w-20 h-20 rounded-full bg-[#0a0e27] border-2 border-[#ff9966] flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:rotate-12 group-hover:shadow-lg group-hover:shadow-[#ff9966]/50 mb-4" style="aspect-ratio: 1/1;">
                                <i class="<?= $principle['icon'] ?> text-[#ff9966] text-3xl"></i>
                            </div>
                            <h3 class="text-[#ff9966] font-bold text-sm uppercase tracking-wider mb-2 group-hover:text-[#ffb000] transition-colors">
                                <?= e($principle['title']) ?>
                            </h3>
                            <p class="text-[#a0b0d0] text-sm leading-relaxed">
                                <?= e($principle['desc']) ?>
                            </p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <?= $afterPrinciples ?>
            </div>
        </div>

        <!-- File Info Footer -->
        <div class="mt-6 lcars-panel-blue p-4 text-sm font-mono">
            <div class="flex justify-between text-[#a0b0d0]">
                <span>&gt; EOF reached</span>
                <span><?= $i18n->getLang() === 'de' ? 'Datei vollständig gelesen' : 'File read complete' ?></span>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
