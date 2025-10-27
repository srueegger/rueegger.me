    </main>

    <!-- Footer -->
    <footer class="bg-gray-50 dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- About -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Samuel Rüegger</h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        <?= $i18n->getLang() === 'de'
                            ? 'Web-Entwickler, AI-Experte und Tech-Kreativer mit Leidenschaft für moderne Technologien und innovative Lösungen.'
                            : 'Web Developer, AI Expert & Tech Creative passionate about modern technologies and innovative solutions.'
                        ?>
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-bold mb-4">
                        <?= $i18n->getLang() === 'de' ? 'Schnelllinks' : 'Quick Links' ?>
                    </h3>
                    <ul class="space-y-2">
                        <li><a href="<?= url('about.php') ?>" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                            <?= $i18n->getLang() === 'de' ? 'Über mich' : 'About' ?>
                        </a></li>
                        <li><a href="<?= url('projects.php') ?>" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                            <?= $i18n->getLang() === 'de' ? 'Projekte' : 'Projects' ?>
                        </a></li>
                        <li><a href="<?= url('blog.php') ?>" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                            Blog
                        </a></li>
                        <li><a href="<?= url('contact.php') ?>" class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                            <?= $i18n->getLang() === 'de' ? 'Kontakt' : 'Contact' ?>
                        </a></li>
                    </ul>
                </div>

                <!-- Social Links -->
                <div>
                    <h3 class="text-lg font-bold mb-4">
                        <?= $i18n->getLang() === 'de' ? 'Folge mir' : 'Follow Me' ?>
                    </h3>
                    <div class="flex flex-wrap gap-4">
                        <a href="https://github.com/srueegger" target="_blank" rel="noopener noreferrer"
                           class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors"
                           aria-label="GitHub">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </a>
                        <a href="https://swiss.social/@srueegger" target="_blank" rel="noopener noreferrer me"
                           class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors"
                           aria-label="Mastodon">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.193 7.879c0-5.206-3.411-6.732-3.411-6.732C18.062.357 15.108.025 12.041 0h-.076c-3.068.025-6.02.357-7.74 1.147 0 0-3.411 1.526-3.411 6.732 0 1.192-.023 2.618.015 4.129.124 5.092.934 10.109 5.641 11.355 2.17.574 4.034.695 5.535.612 2.722-.15 4.25-.972 4.25-.972l-.09-1.975s-1.945.613-4.129.539c-2.165-.074-4.449-.233-4.799-2.891a5.499 5.499 0 0 1-.048-.745s2.125.520 4.817.643c1.646.075 3.19-.097 4.758-.283 3.007-.359 5.625-2.212 5.954-3.905.517-2.665.475-6.507.475-6.507zm-4.024 6.709h-2.497V8.469c0-1.29-.543-1.944-1.628-1.944-1.2 0-1.802.776-1.802 2.312v3.349h-2.483v-3.349c0-1.536-.602-2.312-1.802-2.312-1.085 0-1.628.655-1.628 1.944v6.119H4.832V8.284c0-1.289.328-2.313.987-3.07.68-.757 1.569-1.146 2.674-1.146 1.278 0 2.246.491 2.886 1.474l.622 1.043.622-1.043c.64-.983 1.608-1.474 2.886-1.474 1.104 0 1.994.389 2.674 1.146.658.757.986 1.781.986 3.07v6.304z"/></svg>
                        </a>
                        <a href="https://www.linkedin.com/in/srueegger/" target="_blank" rel="noopener noreferrer"
                           class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors"
                           aria-label="LinkedIn">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <a href="https://twitter.com/srueegger" target="_blank" rel="noopener noreferrer"
                           class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors"
                           aria-label="Twitter">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        <a href="https://www.youtube.com/@rueeggerme" target="_blank" rel="noopener noreferrer"
                           class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors"
                           aria-label="YouTube">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="mt-12 pt-8 border-t border-gray-200 dark:border-gray-700 text-center text-gray-600 dark:text-gray-400">
                <p>&copy; <?= date('Y') ?> Samuel Rüegger. <?= $i18n->getLang() === 'de' ? 'Alle Rechte vorbehalten.' : 'All rights reserved.' ?></p>
                <p class="mt-2 text-sm">
                    <a href="<?= url('privacy.php') ?>" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                        <?= $i18n->getLang() === 'de' ? 'Datenschutz' : 'Privacy' ?>
                    </a>
                    <span class="mx-2">•</span>
                    <a href="<?= url('imprint.php') ?>" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                        <?= $i18n->getLang() === 'de' ? 'Impressum' : 'Imprint' ?>
                    </a>
                </p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for scroll animations -->
    <script src="<?= asset('js/main.js') ?>"></script>
</body>
</html>
