<?php
require_once '../vendor/autoload.php';
require_once '../includes/functions.php';

use App\I18n;
use App\MarkdownParser;

$i18n = new I18n('../content');
$parser = new MarkdownParser();

// Set up page metadata
extract(setupPageMeta([
    'title' => $i18n->getLang() === 'de' ? 'Über mich' : 'About Me',
    'description' => $i18n->getLang() === 'de'
        ? 'Erfahre mehr über Samuel Rüegger - Web-Entwickler, AI-Experte und Tech-Kreativer. Meine Geschichte, Technologien und Philosophie.'
        : 'Learn more about Samuel Rüegger - Web Developer, AI Expert & Tech Creative. My story, technologies, and philosophy.',
    'ogType' => 'profile'
]));

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
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M392.8 65.2C375.8 60.3 358.1 70.2 353.2 87.2L225.2 535.2C220.3 552.2 230.2 569.9 247.2 574.8C264.2 579.7 281.9 569.8 286.8 552.8L414.8 104.8C419.7 87.8 409.8 70.1 392.8 65.2zM457.4 201.3C444.9 213.8 444.9 234.1 457.4 246.6L530.8 320L457.4 393.4C444.9 405.9 444.9 426.2 457.4 438.7C469.9 451.2 490.2 451.2 502.7 438.7L598.7 342.7C611.2 330.2 611.2 309.9 598.7 297.4L502.7 201.4C490.2 188.9 469.9 188.9 457.4 201.4zM182.7 201.3C170.2 188.8 149.9 188.8 137.4 201.3L41.4 297.3C28.9 309.8 28.9 330.1 41.4 342.6L137.4 438.6C149.9 451.1 170.2 451.1 182.7 438.6C195.2 426.1 195.2 405.8 182.7 393.3L109.3 320L182.6 246.6C195.1 234.1 195.1 213.8 182.6 201.3z"/></svg>'
                    ],
                    [
                        'title' => 'Open Source First',
                        'desc' => 'Wissen gehört geteilt, nicht gehortet',
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M176 168C189.3 168 200 157.3 200 144C200 130.7 189.3 120 176 120C162.7 120 152 130.7 152 144C152 157.3 162.7 168 176 168zM256 144C256 176.8 236.3 205 208 217.3L208 288L384 288C410.5 288 432 266.5 432 240L432 217.3C403.7 205 384 176.8 384 144C384 99.8 419.8 64 464 64C508.2 64 544 99.8 544 144C544 176.8 524.3 205 496 217.3L496 240C496 301.9 445.9 352 384 352L208 352L208 422.7C236.3 435 256 463.2 256 496C256 540.2 220.2 576 176 576C131.8 576 96 540.2 96 496C96 463.2 115.7 435 144 422.7L144 217.4C115.7 205 96 176.8 96 144C96 99.8 131.8 64 176 64C220.2 64 256 99.8 256 144zM488 144C488 130.7 477.3 120 464 120C450.7 120 440 130.7 440 144C440 157.3 450.7 168 464 168C477.3 168 488 157.3 488 144zM176 520C189.3 520 200 509.3 200 496C200 482.7 189.3 472 176 472C162.7 472 152 482.7 152 496C152 509.3 162.7 520 176 520z"/></svg>'
                    ],
                    [
                        'title' => 'Lifelong Learning',
                        'desc' => 'Jeden Tag etwas Neues lernen (heute: noch mehr über LCARS-Design)',
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M80 259.8L289.2 345.9C299 349.9 309.4 352 320 352C330.6 352 341 349.9 350.8 345.9L593.2 246.1C602.2 242.4 608 233.7 608 224C608 214.3 602.2 205.6 593.2 201.9L350.8 102.1C341 98.1 330.6 96 320 96C309.4 96 299 98.1 289.2 102.1L46.8 201.9C37.8 205.6 32 214.3 32 224L32 520C32 533.3 42.7 544 56 544C69.3 544 80 533.3 80 520L80 259.8zM128 331.5L128 448C128 501 214 544 320 544C426 544 512 501 512 448L512 331.4L369.1 390.3C353.5 396.7 336.9 400 320 400C303.1 400 286.5 396.7 270.9 390.3L128 331.4z"/></svg>'
                    ],
                    [
                        'title' => 'Privacy by Design',
                        'desc' => 'Datenschutz ist keine Option, sondern Standard',
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M320 64C324.6 64 329.2 65 333.4 66.9L521.8 146.8C543.8 156.1 560.2 177.8 560.1 204C559.6 303.2 518.8 484.7 346.5 567.2C329.8 575.2 310.4 575.2 293.7 567.2C121.3 484.7 80.6 303.2 80.1 204C80 177.8 96.4 156.1 118.4 146.8L306.7 66.9C310.9 65 315.4 64 320 64z"/></svg>'
                    ],
                    [
                        'title' => 'Ship Fast, Iterate Faster',
                        'desc' => 'Perfekt ist der Feind von fertig',
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M192 384L88.5 384C63.6 384 48.3 356.9 61.1 335.5L114 247.3C122.7 232.8 138.3 224 155.2 224L250.2 224C326.3 95.1 439.8 88.6 515.7 99.7C528.5 101.6 538.5 111.6 540.3 124.3C551.4 200.2 544.9 313.7 416 389.8L416 484.8C416 501.7 407.2 517.3 392.7 526L304.5 578.9C283.2 591.7 256 576.3 256 551.5L256 448C256 412.7 227.3 384 192 384L191.9 384zM464 224C464 197.5 442.5 176 416 176C389.5 176 368 197.5 368 224C368 250.5 389.5 272 416 272C442.5 272 464 250.5 464 224z"/></svg>'
                    ],
                    [
                        'title' => 'Coffee-Driven Development',
                        'desc' => 'while(awake) { code(); coffee(); }',
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M184 48C170.7 48 160 58.7 160 72C160 110.9 183.4 131.4 199.1 145.1L200.2 146.1C216.5 160.4 224 167.9 224 184C224 197.3 234.7 208 248 208C261.3 208 272 197.3 272 184C272 145.1 248.6 124.6 232.9 110.9L231.8 109.9C215.5 95.7 208 88.1 208 72C208 58.7 197.3 48 184 48zM128 256C110.3 256 96 270.3 96 288L96 480C96 533 139 576 192 576L384 576C425.8 576 461.4 549.3 474.5 512L480 512C550.7 512 608 454.7 608 384C608 313.3 550.7 256 480 256L128 256zM480 448L480 320C515.3 320 544 348.7 544 384C544 419.3 515.3 448 480 448zM320 72C320 58.7 309.3 48 296 48C282.7 48 272 58.7 272 72C272 110.9 295.4 131.4 311.1 145.1L312.2 146.1C328.5 160.4 336 167.9 336 184C336 197.3 346.7 208 360 208C373.3 208 384 197.3 384 184C384 145.1 360.6 124.6 344.9 110.9L343.8 109.9C327.5 95.7 320 88.1 320 72z"/></svg>'
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
                                <div class="w-8 h-8 text-[#ff9966] fill-current">
                                    <?= $principle['icon'] ?>
                                </div>
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
