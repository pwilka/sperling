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

    // Google Analytics Event Tracking
    
    // Track phone number clicks
    document.querySelectorAll('a[href^="tel:"]').forEach(function(phoneLink) {
        phoneLink.addEventListener('click', function() {
            const phoneNumber = this.getAttribute('href').replace('tel:', '');
            const linkText = this.textContent.trim();
            
            if (typeof gtag !== 'undefined') {
                gtag('event', 'phone_click', {
                    'event_category': 'Contact',
                    'event_label': phoneNumber,
                    'value': 1
                });
            }
        });
    });

    // Track email clicks
    document.querySelectorAll('a[href^="mailto:"]').forEach(function(emailLink) {
        emailLink.addEventListener('click', function() {
            const email = this.getAttribute('href').replace('mailto:', '');
            
            if (typeof gtag !== 'undefined') {
                gtag('event', 'email_click', {
                    'event_category': 'Contact',
                    'event_label': email,
                    'value': 1
                });
            }
        });
    });

    // Track quote form submissions (Forminator)
    if (typeof jQuery !== 'undefined') {
        jQuery(document).on('forminator:form:submit:success', function(e, formId) {
            if (typeof gtag !== 'undefined') {
                if (formId === '13') { // Quote form
                    gtag('event', 'form_submission', {
                        'event_category': 'Quote Form',
                        'event_label': 'Homepage Quote Request',
                        'value': 1
                    });
                } else if (formId === '18') { // Contact form
                    gtag('event', 'form_submission', {
                        'event_category': 'Contact Form',
                        'event_label': 'Contact Page Submission',
                        'value': 1
                    });
                } else {
                    // Generic form submission
                    gtag('event', 'form_submission', {
                        'event_category': 'Form',
                        'event_label': 'Form ID ' + formId,
                        'value': 1
                    });
                }
            }
        });
    }

    // Track CTA button clicks
    document.querySelectorAll('.btn-primary, .quote-form-btn, .location-phone-btn').forEach(function(ctaButton) {
        ctaButton.addEventListener('click', function() {
            const buttonText = this.textContent.trim();
            const buttonHref = this.getAttribute('href') || '';
            
            if (typeof gtag !== 'undefined') {
                gtag('event', 'cta_click', {
                    'event_category': 'CTA',
                    'event_label': buttonText,
                    'value': 1
                });
            }
        });
    });

    // Track scroll depth (optional - tracks when user scrolls 25%, 50%, 75%, 100%)
    let scrollTracked = {
        25: false,
        50: false,
        75: false,
        100: false
    };

    window.addEventListener('scroll', function() {
        const scrollPercent = Math.round((window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100);
        
        if (typeof gtag !== 'undefined') {
            if (scrollPercent >= 25 && !scrollTracked[25]) {
                scrollTracked[25] = true;
                gtag('event', 'scroll_depth', {
                    'event_category': 'Engagement',
                    'event_label': '25%',
                    'value': 25
                });
            }
            if (scrollPercent >= 50 && !scrollTracked[50]) {
                scrollTracked[50] = true;
                gtag('event', 'scroll_depth', {
                    'event_category': 'Engagement',
                    'event_label': '50%',
                    'value': 50
                });
            }
            if (scrollPercent >= 75 && !scrollTracked[75]) {
                scrollTracked[75] = true;
                gtag('event', 'scroll_depth', {
                    'event_category': 'Engagement',
                    'event_label': '75%',
                    'value': 75
                });
            }
            if (scrollPercent >= 100 && !scrollTracked[100]) {
                scrollTracked[100] = true;
                gtag('event', 'scroll_depth', {
                    'event_category': 'Engagement',
                    'event_label': '100%',
                    'value': 100
                });
            }
        }
    });
})();

