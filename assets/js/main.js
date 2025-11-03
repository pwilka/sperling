/**
 * Sperling Theme JavaScript
 */

(function() {
    'use strict';

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            // Skip if it's just "#" or "#quote" (let default behavior work for forms)
            if (href === '#' || href === '#quote') {
                return;
            }
            
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                const offsetTop = target.offsetTop - 80;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Navbar background on scroll
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (navbar) {
            if (window.scrollY > 50) {
                navbar.classList.add('shadow');
            } else {
                navbar.classList.remove('shadow');
            }
        }
    });

    // Quote form handling (can be connected to WPForms later)
    const quoteForm = document.querySelector('#quote form, .quote-form-btn');
    if (quoteForm) {
        // Form handling will be added when WPForms is integrated
    }
})();

