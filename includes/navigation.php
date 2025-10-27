<nav class="fixed w-full top-0 z-50 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-800 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="<?= url('/') ?>" class="flex items-center space-x-2 group">
                <span class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent group-hover:scale-105 transition-transform">
                    SR
                </span>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="<?= url('/') ?>" class="nav-link <?= isActive('/index.php') ? 'text-blue-600 dark:text-blue-400' : '' ?>">
                    <?= $i18n->getLang() === 'de' ? 'Start' : 'Home' ?>
                </a>
                <a href="<?= url('about.php') ?>" class="nav-link <?= isActive('about.php') ? 'text-blue-600 dark:text-blue-400' : '' ?>">
                    <?= $i18n->getLang() === 'de' ? 'Über mich' : 'About' ?>
                </a>
                <a href="<?= url('projects.php') ?>" class="nav-link <?= isActive('projects.php') ? 'text-blue-600 dark:text-blue-400' : '' ?>">
                    <?= $i18n->getLang() === 'de' ? 'Projekte' : 'Projects' ?>
                </a>
                <a href="<?= url('blog.php') ?>" class="nav-link <?= isActive('blog.php') ? 'text-blue-600 dark:text-blue-400' : '' ?>">
                    Blog
                </a>
                <a href="<?= url('contact.php') ?>" class="nav-link <?= isActive('contact.php') ? 'text-blue-600 dark:text-blue-400' : '' ?>">
                    <?= $i18n->getLang() === 'de' ? 'Kontakt' : 'Contact' ?>
                </a>

                <!-- Language Switcher -->
                <a href="?lang=<?= $i18n->getOtherLang() ?>"
                   class="px-4 py-2 rounded-lg bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors text-sm font-medium">
                    <?= $i18n->getOtherLang() === 'de' ? '🇩🇪 DE' : '🇬🇧 EN' ?>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden border-t border-gray-200 dark:border-gray-800">
        <div class="px-4 py-4 space-y-3">
            <a href="<?= url('/') ?>" class="block nav-link py-2 <?= isActive('/index.php') ? 'text-blue-600 dark:text-blue-400' : '' ?>">
                <?= $i18n->getLang() === 'de' ? 'Start' : 'Home' ?>
            </a>
            <a href="<?= url('about.php') ?>" class="block nav-link py-2 <?= isActive('about.php') ? 'text-blue-600 dark:text-blue-400' : '' ?>">
                <?= $i18n->getLang() === 'de' ? 'Über mich' : 'About' ?>
            </a>
            <a href="<?= url('projects.php') ?>" class="block nav-link py-2 <?= isActive('projects.php') ? 'text-blue-600 dark:text-blue-400' : '' ?>">
                <?= $i18n->getLang() === 'de' ? 'Projekte' : 'Projects' ?>
            </a>
            <a href="<?= url('blog.php') ?>" class="block nav-link py-2 <?= isActive('blog.php') ? 'text-blue-600 dark:text-blue-400' : '' ?>">
                Blog
            </a>
            <a href="<?= url('contact.php') ?>" class="block nav-link py-2 <?= isActive('contact.php') ? 'text-blue-600 dark:text-blue-400' : '' ?>">
                <?= $i18n->getLang() === 'de' ? 'Kontakt' : 'Contact' ?>
            </a>
            <a href="?lang=<?= $i18n->getOtherLang() ?>"
               class="block px-4 py-2 rounded-lg bg-gray-100 dark:bg-gray-800 text-center font-medium">
                <?= $i18n->getOtherLang() === 'de' ? '🇩🇪 Deutsch' : '🇬🇧 English' ?>
            </a>
        </div>
    </div>
</nav>

<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
