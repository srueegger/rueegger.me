// Smooth scrolling and interactions
document.addEventListener('DOMContentLoaded', function() {
    // Scroll animations removed - caused visibility issues on mobile
    // All elements with .animate-on-scroll are now immediately visible

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add scroll-based navbar styling
    const nav = document.querySelector('nav');
    let lastScroll = 0;

    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;

        if (currentScroll > 50) {
            nav.classList.add('shadow-lg');
        } else {
            nav.classList.remove('shadow-lg');
        }

        lastScroll = currentScroll;
    });
});

// Native lazy loading is used via loading="lazy" attribute
// Modern browsers support this natively, no JS needed
