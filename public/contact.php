<?php
require_once '../vendor/autoload.php';
require_once '../includes/functions.php';

use App\I18n;

$i18n = new I18n('../content');

$pageTitle = $i18n->getLang() === 'de' ? 'Kontakt - Samuel Rüegger' : 'Contact - Samuel Rüegger';
$metaDescription = $i18n->getLang() === 'de'
    ? 'Kontaktiere Samuel Rüegger - Web-Entwickler, AI-Experte. Erreichbar über E-Mail, Mastodon, GitHub und weitere Kanäle.'
    : 'Contact Samuel Rüegger - Web Developer, AI Expert. Reachable via email, Mastodon, GitHub, and other channels.';

// OG meta tags
$ogImage = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/images/samuel-rueegger.jpg';
$ogUrl = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$ogType = 'website';

include '../includes/header.php';
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
                <p class="terminal-prompt">netstat -an | grep ESTABLISHED</p>
                <p class="text-[#00ff00] mb-2">&gt; <?= $i18n->getLang() === 'de' ? 'Zeige verfügbare Kommunikationskanäle...' : 'Displaying available communication channels...' ?></p>
                <p class="text-[#a0b0d0]">&gt; <?= $i18n->getLang() === 'de' ? 'Alle Ports offen und empfangsbereit' : 'All ports open and ready to receive' ?></p>
            </div>
        </div>

        <!-- Email - Primary Channel -->
        <div class="lcars-panel p-6 animate-on-scroll">
            <div class="flex items-start gap-4">
                <div class="w-16 h-16 flex items-center justify-center rounded-full bg-[#0a0e27] border-2 border-[#ff9966] flex-shrink-0" style="aspect-ratio: 1/1;">
                    <i class="fa-solid fa-envelope text-[#ff9966] text-2xl"></i>
                </div>
                <div class="flex-1">
                    <h2 class="text-xl font-bold text-[#ff9966] mb-2 uppercase font-mono">
                        PORT 25/SMTP - <?= $i18n->getLang() === 'de' ? 'PRIMÄRER KANAL' : 'PRIMARY CHANNEL' ?>
                    </h2>
                    <p class="text-[#a0b0d0] mb-3 text-sm">
                        <?= $i18n->getLang() === 'de'
                            ? '&gt; Der beste Weg für geschäftliche Anfragen'
                            : '&gt; Best way for business inquiries'
                        ?>
                    </p>
                    <a href="mailto:samuel@rueegger.me" class="inline-block text-[#00ff00] hover:text-[#ff9966] font-mono transition-colors">
                        $ echo "message" | mail -s "subject" samuel@rueegger.me
                    </a>
                </div>
            </div>
        </div>

        <!-- Social Networks -->
        <div class="lcars-panel-purple p-6 animate-on-scroll animation-delay-200">
            <div class="flex items-start gap-4 mb-4">
                <div class="w-16 h-16 flex items-center justify-center rounded-full bg-[#0a0e27] border-2 border-[#cc99cc] flex-shrink-0" style="aspect-ratio: 1/1;">
                    <i class="fa-solid fa-share-nodes text-[#cc99cc] text-2xl"></i>
                </div>
                <div class="flex-1">
                    <h2 class="text-xl font-bold text-[#cc99cc] uppercase font-mono">
                        <?= $i18n->getLang() === 'de' ? 'SOZIALE NETZWERKE - AKTIVE VERBINDUNGEN' : 'SOCIAL NETWORKS - ACTIVE CONNECTIONS' ?>
                    </h2>
                </div>
            </div>
            <p class="text-[#a0b0d0] mb-6 text-sm">
                <?= $i18n->getLang() === 'de'
                    ? '&gt; Folge mir auf verschiedenen Plattformen'
                    : '&gt; Follow me on various platforms'
                ?>
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <a href="https://swiss.social/@srueegger" target="_blank" rel="noopener noreferrer me"
                   class="flex items-center space-x-3 p-3 bg-[#1a1f3a] border border-[#cc99cc] rounded hover:bg-[#cc99cc]/20 transition-all">
                    <i class="fa-brands fa-mastodon text-[#cc99cc] text-xl"></i>
                    <span class="font-mono text-sm text-[#a0b0d0]">Mastodon</span>
                </a>
                <a href="https://github.com/srueegger" target="_blank" rel="noopener noreferrer"
                   class="flex items-center space-x-3 p-3 bg-[#1a1f3a] border border-[#cc99cc] rounded hover:bg-[#cc99cc]/20 transition-all">
                    <i class="fa-brands fa-github text-[#cc99cc] text-xl"></i>
                    <span class="font-mono text-sm text-[#a0b0d0]">GitHub</span>
                </a>
                <a href="https://www.linkedin.com/in/srueegger/" target="_blank" rel="noopener noreferrer"
                   class="flex items-center space-x-3 p-3 bg-[#1a1f3a] border border-[#cc99cc] rounded hover:bg-[#cc99cc]/20 transition-all">
                    <i class="fa-brands fa-linkedin text-[#cc99cc] text-xl"></i>
                    <span class="font-mono text-sm text-[#a0b0d0]">LinkedIn</span>
                </a>
                <a href="https://www.instagram.com/samrueegger/" target="_blank" rel="noopener noreferrer"
                   class="flex items-center space-x-3 p-3 bg-[#1a1f3a] border border-[#cc99cc] rounded hover:bg-[#cc99cc]/20 transition-all">
                    <i class="fa-brands fa-instagram text-[#cc99cc] text-xl"></i>
                    <span class="font-mono text-sm text-[#a0b0d0]">Instagram</span>
                </a>
            </div>
        </div>

        <!-- Response Time -->
        <div class="lcars-panel-blue p-6 animate-on-scroll animation-delay-400">
            <div class="flex items-start gap-4">
                <div class="w-16 h-16 flex items-center justify-center rounded-full bg-[#0a0e27] border-2 border-[#9999ff] flex-shrink-0" style="aspect-ratio: 1/1;">
                    <i class="fa-solid fa-clock text-[#9999ff] text-2xl"></i>
                </div>
                <div class="flex-1">
                    <h2 class="text-xl font-bold text-[#9999ff] mb-2 uppercase font-mono">
                        LATENCY INFO - <?= $i18n->getLang() === 'de' ? 'ANTWORTZEIT' : 'RESPONSE TIME' ?>
                    </h2>
                    <p class="text-[#a0b0d0] text-sm">
                        <?= $i18n->getLang() === 'de'
                            ? '&gt; Typische Antwortzeit: 24-48 Stunden'
                            : '&gt; Typical response time: 24-48 hours'
                        ?>
                    </p>
                    <p class="text-[#a0b0d0] text-sm mt-2">
                        <?= $i18n->getLang() === 'de'
                            ? '&gt; Für dringende Anfragen: Mastodon oder LinkedIn nutzen'
                            : '&gt; For urgent inquiries: use Mastodon or LinkedIn'
                        ?>
                    </p>
                </div>
            </div>
        </div>

        <!-- Connection Status Footer -->
        <div class="terminal mt-8 animate-on-scroll animation-delay-600">
            <div class="terminal-content text-sm">
                <p class="text-[#00ff00]">$ ping samuel@rueegger.me</p>
                <p class="text-[#a0b0d0] mt-2">&gt; PING successful (24-48ms latency)</p>
                <p class="text-[#a0b0d0]">&gt; <?= $i18n->getLang() === 'de' ? 'Alle Kommunikationskanäle betriebsbereit' : 'All communication channels operational' ?></p>
                <p class="terminal-prompt mt-2">█</p>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
