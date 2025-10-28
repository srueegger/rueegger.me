<?php
require_once '../vendor/autoload.php';
require_once '../includes/functions.php';

use App\I18n;

$i18n = new I18n('../content');

$pageTitle = $i18n->getLang() === 'de' ? 'Kontakt - Samuel Rüegger' : 'Contact - Samuel Rüegger';
$metaDescription = $i18n->getLang() === 'de'
    ? 'Kontaktiere Samuel Rüegger - Web-Entwickler, AI-Experte. Erreichbar über E-Mail, Mastodon, GitHub und weitere Kanäle.'
    : 'Contact Samuel Rüegger - Web Developer, AI Expert. Reachable via email, Mastodon, GitHub, and other channels.';

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
                <div class="text-4xl">📧</div>
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
            <h2 class="text-xl font-bold text-[#cc99cc] mb-4 uppercase font-mono">
                🌐 <?= $i18n->getLang() === 'de' ? 'SOZIALE NETZWERKE - AKTIVE VERBINDUNGEN' : 'SOCIAL NETWORKS - ACTIVE CONNECTIONS' ?>
            </h2>
            <p class="text-[#a0b0d0] mb-6 text-sm">
                <?= $i18n->getLang() === 'de'
                    ? '&gt; Folge mir auf verschiedenen Plattformen'
                    : '&gt; Follow me on various platforms'
                ?>
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <a href="https://swiss.social/@srueegger" target="_blank" rel="noopener noreferrer me"
                   class="flex items-center space-x-3 p-3 bg-[#1a1f3a] border border-[#cc99cc] rounded hover:bg-[#cc99cc]/20 transition-all">
                    <svg class="w-5 h-5 text-[#cc99cc]" fill="currentColor" viewBox="0 0 24 24"><path d="M23.193 7.879c0-5.206-3.411-6.732-3.411-6.732C18.062.357 15.108.025 12.041 0h-.076c-3.068.025-6.02.357-7.74 1.147 0 0-3.411 1.526-3.411 6.732 0 1.192-.023 2.618.015 4.129.124 5.092.934 10.109 5.641 11.355 2.17.574 4.034.695 5.535.612 2.722-.15 4.25-.972 4.25-.972l-.09-1.975s-1.945.613-4.129.539c-2.165-.074-4.449-.233-4.799-2.891a5.499 5.499 0 0 1-.048-.745s2.125.520 4.817.643c1.646.075 3.19-.097 4.758-.283 3.007-.359 5.625-2.212 5.954-3.905.517-2.665.475-6.507.475-6.507zm-4.024 6.709h-2.497V8.469c0-1.29-.543-1.944-1.628-1.944-1.2 0-1.802.776-1.802 2.312v3.349h-2.483v-3.349c0-1.536-.602-2.312-1.802-2.312-1.085 0-1.628.655-1.628 1.944v6.119H4.832V8.284c0-1.289.328-2.313.987-3.07.68-.757 1.569-1.146 2.674-1.146 1.278 0 2.246.491 2.886 1.474l.622 1.043.622-1.043c.64-.983 1.608-1.474 2.886-1.474 1.104 0 1.994.389 2.674 1.146.658.757.986 1.781.986 3.07v6.304z"/></svg>
                    <span class="font-mono text-sm text-[#a0b0d0]">Mastodon</span>
                </a>
                <a href="https://github.com/srueegger" target="_blank" rel="noopener noreferrer"
                   class="flex items-center space-x-3 p-3 bg-[#1a1f3a] border border-[#cc99cc] rounded hover:bg-[#cc99cc]/20 transition-all">
                    <svg class="w-5 h-5 text-[#cc99cc]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    <span class="font-mono text-sm text-[#a0b0d0]">GitHub</span>
                </a>
                <a href="https://www.linkedin.com/in/srueegger/" target="_blank" rel="noopener noreferrer"
                   class="flex items-center space-x-3 p-3 bg-[#1a1f3a] border border-[#cc99cc] rounded hover:bg-[#cc99cc]/20 transition-all">
                    <svg class="w-5 h-5 text-[#cc99cc]" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    <span class="font-mono text-sm text-[#a0b0d0]">LinkedIn</span>
                </a>
                <a href="https://twitter.com/srueegger" target="_blank" rel="noopener noreferrer"
                   class="flex items-center space-x-3 p-3 bg-[#1a1f3a] border border-[#cc99cc] rounded hover:bg-[#cc99cc]/20 transition-all">
                    <svg class="w-5 h-5 text-[#cc99cc]" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    <span class="font-mono text-sm text-[#a0b0d0]">Twitter/X</span>
                </a>
                <a href="https://www.youtube.com/@rueeggerme" target="_blank" rel="noopener noreferrer"
                   class="flex items-center space-x-3 p-3 bg-[#1a1f3a] border border-[#cc99cc] rounded hover:bg-[#cc99cc]/20 transition-all">
                    <svg class="w-5 h-5 text-[#cc99cc]" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    <span class="font-mono text-sm text-[#a0b0d0]">YouTube</span>
                </a>
                <a href="https://www.instagram.com/samrueegger/" target="_blank" rel="noopener noreferrer"
                   class="flex items-center space-x-3 p-3 bg-[#1a1f3a] border border-[#cc99cc] rounded hover:bg-[#cc99cc]/20 transition-all">
                    <svg class="w-5 h-5 text-[#cc99cc]" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    <span class="font-mono text-sm text-[#a0b0d0]">Instagram</span>
                </a>
            </div>
        </div>

        <!-- Response Time -->
        <div class="lcars-panel-blue p-6 animate-on-scroll animation-delay-400">
            <div class="flex items-start gap-4">
                <div class="text-4xl">⏱️</div>
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
