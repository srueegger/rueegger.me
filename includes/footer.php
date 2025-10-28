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
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                        <a href="https://github.com/srueegger" target="_blank" rel="noopener noreferrer"
                           class="flex flex-col items-center justify-center p-4 bg-[#0a0e27] border border-[#3a4f7a] rounded hover:border-[#00ff00] transition-all group"
                           style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);"
                           aria-label="GitHub">
                            <i class="fa-brands fa-github text-3xl text-[#a0b0d0] group-hover:text-[#00ff00] transition-colors"></i>
                        </a>
                        <a href="https://swiss.social/@srueegger" target="_blank" rel="noopener noreferrer me"
                           class="flex flex-col items-center justify-center p-4 bg-[#0a0e27] border border-[#3a4f7a] rounded hover:border-[#00ff00] transition-all group"
                           style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);"
                           aria-label="Mastodon">
                            <i class="fa-brands fa-mastodon text-3xl text-[#a0b0d0] group-hover:text-[#00ff00] transition-colors"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/srueegger/" target="_blank" rel="noopener noreferrer"
                           class="flex flex-col items-center justify-center p-4 bg-[#0a0e27] border border-[#3a4f7a] rounded hover:border-[#00ff00] transition-all group"
                           style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);"
                           aria-label="LinkedIn">
                            <i class="fa-brands fa-linkedin text-3xl text-[#a0b0d0] group-hover:text-[#00ff00] transition-colors"></i>
                        </a>
                        <a href="https://www.instagram.com/samrueegger/" target="_blank" rel="noopener noreferrer"
                           class="flex flex-col items-center justify-center p-4 bg-[#0a0e27] border border-[#3a4f7a] rounded hover:border-[#00ff00] transition-all group"
                           style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);"
                           aria-label="Instagram">
                            <i class="fa-brands fa-instagram text-3xl text-[#a0b0d0] group-hover:text-[#00ff00] transition-colors"></i>
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
