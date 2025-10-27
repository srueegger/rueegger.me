    </main>

    <!-- Footer - LCARS Status Bar Style -->
    <footer class="mt-20 border-t-2 border-[#ff9966] bg-[#1a1f3a]" style="box-shadow: 0 -5px 20px rgba(255, 153, 102, 0.2);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- System Status Bar -->
            <div class="mb-8 flex flex-wrap items-center gap-4">
                <div class="status-bar flex-shrink-0">
                    <span class="text-xs">SYSTEM STATUS:</span>
                    <span class="ml-2 text-sm">● ONLINE</span>
                </div>
                <div class="h-12 w-px bg-[#3a4f7a]"></div>
                <div class="flex-1 flex items-center gap-2 text-[#00ff00] text-xs font-mono">
                    <span>UPTIME: <?= date('Y') - 2010 ?> YEARS</span>
                    <span class="mx-2">|</span>
                    <span>LOCATION: CH-SWITZERLAND</span>
                    <span class="mx-2">|</span>
                    <span class="blink">█</span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <!-- Terminal Info -->
                <div class="lcars-panel p-6">
                    <h3 class="text-lg font-bold mb-4 text-[#ff9966] uppercase tracking-wider">$ whoami</h3>
                    <p class="text-[#a0b0d0] text-sm leading-relaxed">
                        <?= $i18n->getLang() === 'de'
                            ? '&gt; Web-Entwickler, AI-Experte<br>&gt; Tech-Kreativer mit Leidenschaft<br>&gt; für moderne Technologien'
                            : '&gt; Web Developer, AI Expert<br>&gt; Tech Creative passionate about<br>&gt; modern technologies'
                        ?>
                    </p>
                </div>

                <!-- Quick Nav -->
                <div class="lcars-panel-purple p-6">
                    <h3 class="text-lg font-bold mb-4 text-[#cc99cc] uppercase tracking-wider">$ ls ~/pages/</h3>
                    <ul class="space-y-2 text-sm font-mono">
                        <li><a href="<?= url('about.php') ?>" class="text-[#a0b0d0] hover:text-[#ff9966] transition-colors">
                            <span class="text-[#00ff00]">→</span> <?= $i18n->getLang() === 'de' ? 'about.txt' : 'about.txt' ?>
                        </a></li>
                        <li><a href="<?= url('projects.php') ?>" class="text-[#a0b0d0] hover:text-[#ff9966] transition-colors">
                            <span class="text-[#00ff00]">→</span> <?= $i18n->getLang() === 'de' ? 'projects/' : 'projects/' ?>
                        </a></li>
                        <li><a href="<?= url('blog.php') ?>" class="text-[#a0b0d0] hover:text-[#ff9966] transition-colors">
                            <span class="text-[#00ff00]">→</span> blog.log
                        </a></li>
                        <li><a href="<?= url('contact.php') ?>" class="text-[#a0b0d0] hover:text-[#ff9966] transition-colors">
                            <span class="text-[#00ff00]">→</span> <?= $i18n->getLang() === 'de' ? 'contact.sh' : 'contact.sh' ?>
                        </a></li>
                    </ul>
                </div>

                <!-- Connection Ports (Social) -->
                <div class="lcars-panel-blue p-6">
                    <h3 class="text-lg font-bold mb-4 text-[#9999ff] uppercase tracking-wider">$ netstat -ports</h3>
                    <div class="grid grid-cols-3 gap-3">
                        <a href="https://github.com/srueegger" target="_blank" rel="noopener noreferrer"
                           class="flex flex-col items-center justify-center p-3 bg-[#0a0e27] border border-[#3a4f7a] rounded hover:border-[#00ff00] transition-all group"
                           style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);"
                           aria-label="GitHub">
                            <svg class="w-6 h-6 text-[#a0b0d0] group-hover:text-[#00ff00] transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            <span class="text-xs text-[#a0b0d0] mt-1 font-mono">GH</span>
                        </a>
                        <a href="https://swiss.social/@srueegger" target="_blank" rel="noopener noreferrer me"
                           class="flex flex-col items-center justify-center p-3 bg-[#0a0e27] border border-[#3a4f7a] rounded hover:border-[#00ff00] transition-all group"
                           style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);"
                           aria-label="Mastodon">
                            <svg class="w-6 h-6 text-[#a0b0d0] group-hover:text-[#00ff00] transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M23.193 7.879c0-5.206-3.411-6.732-3.411-6.732C18.062.357 15.108.025 12.041 0h-.076c-3.068.025-6.02.357-7.74 1.147 0 0-3.411 1.526-3.411 6.732 0 1.192-.023 2.618.015 4.129.124 5.092.934 10.109 5.641 11.355 2.17.574 4.034.695 5.535.612 2.722-.15 4.25-.972 4.25-.972l-.09-1.975s-1.945.613-4.129.539c-2.165-.074-4.449-.233-4.799-2.891a5.499 5.499 0 0 1-.048-.745s2.125.520 4.817.643c1.646.075 3.19-.097 4.758-.283 3.007-.359 5.625-2.212 5.954-3.905.517-2.665.475-6.507.475-6.507zm-4.024 6.709h-2.497V8.469c0-1.29-.543-1.944-1.628-1.944-1.2 0-1.802.776-1.802 2.312v3.349h-2.483v-3.349c0-1.536-.602-2.312-1.802-2.312-1.085 0-1.628.655-1.628 1.944v6.119H4.832V8.284c0-1.289.328-2.313.987-3.07.68-.757 1.569-1.146 2.674-1.146 1.278 0 2.246.491 2.886 1.474l.622 1.043.622-1.043c.64-.983 1.608-1.474 2.886-1.474 1.104 0 1.994.389 2.674 1.146.658.757.986 1.781.986 3.07v6.304z"/></svg>
                            <span class="text-xs text-[#a0b0d0] mt-1 font-mono">MD</span>
                        </a>
                        <a href="https://www.linkedin.com/in/srueegger/" target="_blank" rel="noopener noreferrer"
                           class="flex flex-col items-center justify-center p-3 bg-[#0a0e27] border border-[#3a4f7a] rounded hover:border-[#00ff00] transition-all group"
                           style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);"
                           aria-label="LinkedIn">
                            <svg class="w-6 h-6 text-[#a0b0d0] group-hover:text-[#00ff00] transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            <span class="text-xs text-[#a0b0d0] mt-1 font-mono">LI</span>
                        </a>
                        <a href="https://twitter.com/srueegger" target="_blank" rel="noopener noreferrer"
                           class="flex flex-col items-center justify-center p-3 bg-[#0a0e27] border border-[#3a4f7a] rounded hover:border-[#00ff00] transition-all group"
                           style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);"
                           aria-label="Twitter">
                            <svg class="w-6 h-6 text-[#a0b0d0] group-hover:text-[#00ff00] transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            <span class="text-xs text-[#a0b0d0] mt-1 font-mono">X</span>
                        </a>
                        <a href="https://www.youtube.com/@rueeggerme" target="_blank" rel="noopener noreferrer"
                           class="flex flex-col items-center justify-center p-3 bg-[#0a0e27] border border-[#3a4f7a] rounded hover:border-[#00ff00] transition-all group"
                           style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);"
                           aria-label="YouTube">
                            <svg class="w-6 h-6 text-[#a0b0d0] group-hover:text-[#00ff00] transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                            <span class="text-xs text-[#a0b0d0] mt-1 font-mono">YT</span>
                        </a>
                        <a href="https://www.instagram.com/samrueegger/" target="_blank" rel="noopener noreferrer"
                           class="flex flex-col items-center justify-center p-3 bg-[#0a0e27] border border-[#3a4f7a] rounded hover:border-[#00ff00] transition-all group"
                           style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);"
                           aria-label="Instagram">
                            <svg class="w-6 h-6 text-[#a0b0d0] group-hover:text-[#00ff00] transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            <span class="text-xs text-[#a0b0d0] mt-1 font-mono">IG</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="pt-8 border-t-2 border-[#3a4f7a] flex flex-col md:flex-row justify-between items-center gap-4 text-sm">
                <div class="text-[#a0b0d0] font-mono">
                    <span class="text-[#00ff00]">©</span> <?= date('Y') ?> Samuel Rüegger
                    <span class="mx-2 text-[#3a4f7a]">|</span>
                    <span class="text-xs">LICENSE: MIT</span>
                </div>
                <div class="flex gap-4 font-mono text-xs">
                    <a href="<?= url('privacy.php') ?>" class="text-[#a0b0d0] hover:text-[#ff9966] transition-colors">
                        <?= $i18n->getLang() === 'de' ? 'privacy.md' : 'privacy.md' ?>
                    </a>
                    <span class="text-[#3a4f7a]">|</span>
                    <a href="<?= url('imprint.php') ?>" class="text-[#a0b0d0] hover:text-[#ff9966] transition-colors">
                        <?= $i18n->getLang() === 'de' ? 'imprint.txt' : 'imprint.txt' ?>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript for scroll animations -->
    <script src="<?= asset('js/main.js') ?>"></script>
</body>
</html>
