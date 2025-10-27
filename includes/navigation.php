<nav class="fixed w-full top-0 z-50 bg-[#0a0e27]/95 backdrop-blur-sm border-b-2 border-[#ff9966]" style="box-shadow: 0 0 20px rgba(255, 153, 102, 0.3);">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- LCARS-style top bar -->
        <div class="flex justify-between items-center h-16">
            <!-- Logo / Terminal prompt -->
            <a href="<?= url('/') ?>" class="flex items-center space-x-3 group">
                <div class="flex items-center space-x-2">
                    <span class="text-[#00ff00] text-xl font-bold">&gt;_</span>
                    <span class="text-[#ff9966] text-xl font-bold uppercase tracking-wider group-hover:text-glow-orange transition-all">
                        SRUEEGGER
                    </span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-1">
                <a href="<?= url('/') ?>"
                   class="nav-link px-4 py-2 <?= isActive('/index.php') ? 'active bg-[#ff9966]/20' : '' ?>">
                    <span class="text-[#00ff00]">~/</span><?= $i18n->getLang() === 'de' ? 'start' : 'home' ?>
                </a>
                <a href="<?= url('about.php') ?>"
                   class="nav-link px-4 py-2 <?= isActive('about.php') ? 'active bg-[#ff9966]/20' : '' ?>">
                    <span class="text-[#00ff00]">~/</span><?= $i18n->getLang() === 'de' ? 'über' : 'about' ?>
                </a>
                <a href="<?= url('projects.php') ?>"
                   class="nav-link px-4 py-2 <?= isActive('projects.php') ? 'active bg-[#ff9966]/20' : '' ?>">
                    <span class="text-[#00ff00]">~/</span><?= $i18n->getLang() === 'de' ? 'projekte' : 'projects' ?>
                </a>
                <a href="<?= url('blog.php') ?>"
                   class="nav-link px-4 py-2 <?= isActive('blog.php') ? 'active bg-[#ff9966]/20' : '' ?>">
                    <span class="text-[#00ff00]">~/</span>blog
                </a>
                <a href="<?= url('contact.php') ?>"
                   class="nav-link px-4 py-2 <?= isActive('contact.php') ? 'active bg-[#ff9966]/20' : '' ?>">
                    <span class="text-[#00ff00]">~/</span><?= $i18n->getLang() === 'de' ? 'kontakt' : 'contact' ?>
                </a>

                <!-- Language Switcher - Terminal style -->
                <div class="ml-4 pl-4 border-l-2 border-[#3a4f7a]">
                    <a href="?lang=<?= $i18n->getOtherLang() ?>"
                       class="px-4 py-2 bg-[#1a1f3a] border border-[#00ff00] text-[#00ff00] rounded hover:bg-[#00ff00] hover:text-black transition-all uppercase text-xs font-bold tracking-wider"
                       style="box-shadow: 0 0 10px rgba(0, 255, 0, 0.3);">
                        $ lang --set=<?= $i18n->getOtherLang() ?>
                    </a>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden p-2 text-[#ff9966] hover:text-[#00ff00] transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden border-t-2 border-[#3a4f7a] bg-[#1a1f3a]">
        <div class="px-4 py-4 space-y-2">
            <a href="<?= url('/') ?>" class="block nav-link py-2 px-3 <?= isActive('/index.php') ? 'active bg-[#ff9966]/20' : '' ?>">
                <span class="text-[#00ff00]">$ cd</span> ~/<?= $i18n->getLang() === 'de' ? 'start' : 'home' ?>
            </a>
            <a href="<?= url('about.php') ?>" class="block nav-link py-2 px-3 <?= isActive('about.php') ? 'active bg-[#ff9966]/20' : '' ?>">
                <span class="text-[#00ff00]">$ cd</span> ~/<?= $i18n->getLang() === 'de' ? 'über' : 'about' ?>
            </a>
            <a href="<?= url('projects.php') ?>" class="block nav-link py-2 px-3 <?= isActive('projects.php') ? 'active bg-[#ff9966]/20' : '' ?>">
                <span class="text-[#00ff00]">$ cd</span> ~/<?= $i18n->getLang() === 'de' ? 'projekte' : 'projects' ?>
            </a>
            <a href="<?= url('blog.php') ?>" class="block nav-link py-2 px-3 <?= isActive('blog.php') ? 'active bg-[#ff9966]/20' : '' ?>">
                <span class="text-[#00ff00]">$ cd</span> ~/blog
            </a>
            <a href="<?= url('contact.php') ?>" class="block nav-link py-2 px-3 <?= isActive('contact.php') ? 'active bg-[#ff9966]/20' : '' ?>">
                <span class="text-[#00ff00]">$ cd</span> ~/<?= $i18n->getLang() === 'de' ? 'kontakt' : 'contact' ?>
            </a>
            <div class="pt-3 mt-3 border-t border-[#3a4f7a]">
                <a href="?lang=<?= $i18n->getOtherLang() ?>"
                   class="block px-4 py-2 bg-[#003300] border border-[#00ff00] text-[#00ff00] rounded text-center font-bold text-sm">
                    $ lang --set=<?= $i18n->getOtherLang() ?>
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
        document.getElementById('mobile-menu')?.classList.toggle('hidden');
    });
</script>
