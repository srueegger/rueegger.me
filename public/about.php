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
                <?php
                // Extract principles section and replace with custom cards
                $principles = [
                    [
                        'title' => 'Clean Code',
                        'desc' => 'Lesbar heute = wartbar morgen',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>'
                    ],
                    [
                        'title' => 'Open Source First',
                        'desc' => 'Wissen gehört geteilt, nicht gehortet',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>'
                    ],
                    [
                        'title' => 'Lifelong Learning',
                        'desc' => 'Jeden Tag etwas Neues lernen (heute: noch mehr über LCARS-Design)',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>'
                    ],
                    [
                        'title' => 'Privacy by Design',
                        'desc' => 'Datenschutz ist keine Option, sondern Standard',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>'
                    ],
                    [
                        'title' => 'Ship Fast, Iterate Faster',
                        'desc' => 'Perfekt ist der Feind von fertig',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>'
                    ],
                    [
                        'title' => 'Coffee-Driven Development',
                        'desc' => 'while(awake) { code(); coffee(); }',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>'
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
                    <div class="principle-card group bg-[#1a1f3a] border-2 border-[#3a4f7a] rounded-lg p-6 transition-all duration-300 hover:border-[#ff9966] hover:shadow-lg hover:shadow-[#ff9966]/20 hover:-translate-y-1"
                         style="animation-delay: <?= $index * 100 ?>ms;">
                        <div class="flex items-start gap-4">
                            <div class="principle-icon flex-shrink-0 w-12 h-12 rounded-full bg-[#0a0e27] border-2 border-[#ff9966] flex items-center justify-center transition-all duration-300 group-hover:scale-110 group-hover:rotate-12 group-hover:shadow-lg group-hover:shadow-[#ff9966]/50">
                                <svg class="w-6 h-6 text-[#ff9966]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <?= $principle['icon'] ?>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-[#ff9966] font-bold text-sm uppercase tracking-wider mb-2 group-hover:text-[#ffb000] transition-colors">
                                    <?= e($principle['title']) ?>
                                </h3>
                                <p class="text-[#a0b0d0] text-sm leading-relaxed">
                                    <?= e($principle['desc']) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <?= $afterPrinciples ?>
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
