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
                            <svg class="w-12 h-12 fill-[#a0b0d0] group-hover:fill-[#00ff00] transition-colors" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M237.9 461.4C237.9 463.4 235.6 465 232.7 465C229.4 465.3 227.1 463.7 227.1 461.4C227.1 459.4 229.4 457.8 232.3 457.8C235.3 457.5 237.9 459.1 237.9 461.4zM206.8 456.9C206.1 458.9 208.1 461.2 211.1 461.8C213.7 462.8 216.7 461.8 217.3 459.8C217.9 457.8 216 455.5 213 454.6C210.4 453.9 207.5 454.9 206.8 456.9zM251 455.2C248.1 455.9 246.1 457.8 246.4 460.1C246.7 462.1 249.3 463.4 252.3 462.7C255.2 462 257.2 460.1 256.9 458.1C256.6 456.2 253.9 454.9 251 455.2zM316.8 72C178.1 72 72 177.3 72 316C72 426.9 141.8 521.8 241.5 555.2C254.3 557.5 258.8 549.6 258.8 543.1C258.8 536.9 258.5 502.7 258.5 481.7C258.5 481.7 188.5 496.7 173.8 451.9C173.8 451.9 162.4 422.8 146 415.3C146 415.3 123.1 399.6 147.6 399.9C147.6 399.9 172.5 401.9 186.2 425.7C208.1 464.3 244.8 453.2 259.1 446.6C261.4 430.6 267.9 419.5 275.1 412.9C219.2 406.7 162.8 398.6 162.8 302.4C162.8 274.9 170.4 261.1 186.4 243.5C183.8 237 175.3 210.2 189 175.6C209.9 169.1 258 202.6 258 202.6C278 197 299.5 194.1 320.8 194.1C342.1 194.1 363.6 197 383.6 202.6C383.6 202.6 431.7 169 452.6 175.6C466.3 210.3 457.8 237 455.2 243.5C471.2 261.2 481 275 481 302.4C481 398.9 422.1 406.6 366.2 412.9C375.4 420.8 383.2 435.8 383.2 459.3C383.2 493 382.9 534.7 382.9 542.9C382.9 549.4 387.5 557.3 400.2 555C500.2 521.8 568 426.9 568 316C568 177.3 455.5 72 316.8 72zM169.2 416.9C167.9 417.9 168.2 420.2 169.9 422.1C171.5 423.7 173.8 424.4 175.1 423.1C176.4 422.1 176.1 419.8 174.4 417.9C172.8 416.3 170.5 415.6 169.2 416.9zM158.4 408.8C157.7 410.1 158.7 411.7 160.7 412.7C162.3 413.7 164.3 413.4 165 412C165.7 410.7 164.7 409.1 162.7 408.1C160.7 407.5 159.1 407.8 158.4 408.8zM190.8 444.4C189.2 445.7 189.8 448.7 192.1 450.6C194.4 452.9 197.3 453.2 198.6 451.6C199.9 450.3 199.3 447.3 197.3 445.4C195.1 443.1 192.1 442.8 190.8 444.4zM179.4 429.7C177.8 430.7 177.8 433.3 179.4 435.6C181 437.9 183.7 438.9 185 437.9C186.6 436.6 186.6 434 185 431.7C183.6 429.4 181 428.4 179.4 429.7z"/></svg>
                        </a>
                        <a href="https://swiss.social/@srueegger" target="_blank" rel="noopener noreferrer me"
                           class="flex flex-col items-center justify-center p-4 bg-[#0a0e27] border border-[#3a4f7a] rounded hover:border-[#00ff00] transition-all group"
                           style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);"
                           aria-label="Mastodon">
                            <svg class="w-12 h-12 fill-[#a0b0d0] group-hover:fill-[#00ff00] transition-colors" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M529 243.1C529 145.9 465.3 117.4 465.3 117.4C402.8 88.7 236.7 89 174.8 117.4C174.8 117.4 111.1 145.9 111.1 243.1C111.1 358.8 104.5 502.5 216.7 532.2C257.2 542.9 292 545.2 320 543.6C370.8 540.8 399.3 525.5 399.3 525.5L397.6 488.6C397.6 488.6 361.3 500 320.5 498.7C280.1 497.3 237.5 494.3 230.9 444.7C230.3 440.1 230 435.4 230 430.8C315.6 451.7 388.7 439.9 408.7 437.5C464.8 430.8 513.7 396.2 519.9 364.6C529.7 314.8 528.9 243.1 528.9 243.1zM453.9 368.3L407.3 368.3L407.3 254.1C407.3 204.4 343.3 202.5 343.3 261L343.3 323.5L297 323.5L297 261C297 202.5 233 204.4 233 254.1L233 368.3L186.3 368.3C186.3 246.2 181.1 220.4 204.7 193.3C230.6 164.4 284.5 162.5 308.5 199.4L320.1 218.9L331.7 199.4C355.8 162.3 409.8 164.6 435.5 193.3C459.2 220.6 453.9 246.3 453.9 368.3L453.9 368.3z"/></svg>
                        </a>
                        <a href="https://www.linkedin.com/in/srueegger/" target="_blank" rel="noopener noreferrer"
                           class="flex flex-col items-center justify-center p-4 bg-[#0a0e27] border border-[#3a4f7a] rounded hover:border-[#00ff00] transition-all group"
                           style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);"
                           aria-label="LinkedIn">
                            <svg class="w-12 h-12 fill-[#a0b0d0] group-hover:fill-[#00ff00] transition-colors" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M512 96L127.9 96C110.3 96 96 110.5 96 128.3L96 511.7C96 529.5 110.3 544 127.9 544L512 544C529.6 544 544 529.5 544 511.7L544 128.3C544 110.5 529.6 96 512 96zM231.4 480L165 480L165 266.2L231.5 266.2L231.5 480L231.4 480zM198.2 160C219.5 160 236.7 177.2 236.7 198.5C236.7 219.8 219.5 237 198.2 237C176.9 237 159.7 219.8 159.7 198.5C159.7 177.2 176.9 160 198.2 160zM480.3 480L413.9 480L413.9 376C413.9 351.2 413.4 319.3 379.4 319.3C344.8 319.3 339.5 346.3 339.5 374.2L339.5 480L273.1 480L273.1 266.2L336.8 266.2L336.8 295.4L337.7 295.4C346.6 278.6 368.3 260.9 400.6 260.9C467.8 260.9 480.3 305.2 480.3 362.8L480.3 480z"/></svg>
                        </a>
                        <a href="https://www.instagram.com/samrueegger/" target="_blank" rel="noopener noreferrer"
                           class="flex flex-col items-center justify-center p-4 bg-[#0a0e27] border border-[#3a4f7a] rounded hover:border-[#00ff00] transition-all group"
                           style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);"
                           aria-label="Instagram">
                            <svg class="w-12 h-12 fill-[#a0b0d0] group-hover:fill-[#00ff00] transition-colors" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path d="M320.3 205C256.8 204.8 205.2 256.2 205 319.7C204.8 383.2 256.2 434.8 319.7 435C383.2 435.2 434.8 383.8 435 320.3C435.2 256.8 383.8 205.2 320.3 205zM319.7 245.4C360.9 245.2 394.4 278.5 394.6 319.7C394.8 360.9 361.5 394.4 320.3 394.6C279.1 394.8 245.6 361.5 245.4 320.3C245.2 279.1 278.5 245.6 319.7 245.4zM413.1 200.3C413.1 185.5 425.1 173.5 439.9 173.5C454.7 173.5 466.7 185.5 466.7 200.3C466.7 215.1 454.7 227.1 439.9 227.1C425.1 227.1 413.1 215.1 413.1 200.3zM542.8 227.5C541.1 191.6 532.9 159.8 506.6 133.6C480.4 107.4 448.6 99.2 412.7 97.4C375.7 95.3 264.8 95.3 227.8 97.4C192 99.1 160.2 107.3 133.9 133.5C107.6 159.7 99.5 191.5 97.7 227.4C95.6 264.4 95.6 375.3 97.7 412.3C99.4 448.2 107.6 480 133.9 506.2C160.2 532.4 191.9 540.6 227.8 542.4C264.8 544.5 375.7 544.5 412.7 542.4C448.6 540.7 480.4 532.5 506.6 506.2C532.8 480 541 448.2 542.8 412.3C544.9 375.3 544.9 264.5 542.8 227.5zM495 452C487.2 471.6 472.1 486.7 452.4 494.6C422.9 506.3 352.9 503.6 320.3 503.6C287.7 503.6 217.6 506.2 188.2 494.6C168.6 486.8 153.5 471.7 145.6 452C133.9 422.5 136.6 352.5 136.6 319.9C136.6 287.3 134 217.2 145.6 187.8C153.4 168.2 168.5 153.1 188.2 145.2C217.7 133.5 287.7 136.2 320.3 136.2C352.9 136.2 423 133.6 452.4 145.2C472 153 487.1 168.1 495 187.8C506.7 217.3 504 287.3 504 319.9C504 352.5 506.7 422.6 495 452z"/></svg>
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
