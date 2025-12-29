<?php
/**
 * Template Name: Umbrella Insurance Page
 * @package Sperling
 */
get_header();
?>
<main id="main" class="site-main">
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-4">
                    <i class="fas fa-umbrella mb-4" style="font-size: 4rem; color: var(--accent-teal);"></i>
                    <h1 class="display-4 fw-bold mb-4">Umbrella Insurance in Sioux Falls, South Dakota</h1>
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="entry-content text-start">
                                <p class="lead">Umbrella insurance provides an extra layer of liability protection above and beyond your existing auto, home, or business insurance policies. At Sperling Insurance, we've been helping Sioux Falls residents protect their assets with umbrella insurance for over 20 years.</p>
                                <p>If you're sued and the damages exceed your primary insurance limits, umbrella insurance kicks in to provide additional coverage. This extra protection is especially important if you have significant assets to protect or face higher liability risks.</p>
                                <p>Our experienced agents can help you determine if umbrella insurance is right for you and find coverage that provides the protection you need at a competitive rate.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="<?php echo esc_url(home_url('/quote')); ?>" class="btn btn-primary btn-lg me-3">Get a Free Quote</a>
                        <a href="tel:605-334-7350" class="btn btn-outline-light btn-lg">Call (605) 334-7350</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="display-5 fw-bold text-dark mb-4">What Umbrella Insurance Coverage Is</h2>
                    <p class="lead mb-4">Umbrella insurance provides additional liability coverage beyond your primary insurance policies.</p>
                    <div class="card border-0 bg-light mb-4">
                        <div class="card-body p-4">
                            <h3 class="h5 fw-bold text-accent mb-3">What Umbrella Insurance Covers:</h3>
                            <ul class="mb-0">
                                <li>Bodily injury liability</li>
                                <li>Property damage liability</li>
                                <li>Personal injury liability (libel, slander, defamation)</li>
                                <li>Landlord liability</li>
                                <li>Legal defense costs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="display-5 fw-bold text-dark mb-4">Why Umbrella Insurance Matters</h2>
                    <p class="lead mb-4">Umbrella insurance protects your assets from large liability claims.</p>
                    <p>If you're found liable for damages that exceed your primary insurance limits, you could be personally responsible for the difference. Umbrella insurance provides an extra layer of protection to help safeguard your assets.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="display-5 fw-bold text-dark mb-4">Why Choose Sperling Insurance</h2>
                    <p>We can help you determine if umbrella insurance is right for you and find coverage that fits your needs.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" style="background: linear-gradient(135deg, var(--primary-blue) 0%, #001a5e 100%); color: white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-4">Ready to Protect Your Assets?</h2>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="<?php echo esc_url(home_url('/quote')); ?>" class="btn btn-lg quote-form-btn">Get My Free Quote</a>
                        <a href="tel:605-334-7350" class="btn btn-outline-light btn-lg">Call (605) 334-7350</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="display-5 fw-bold text-dark text-center mb-5">Frequently Asked Questions</h2>
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item faq-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true">Who needs umbrella insurance?</button>
                            </h3>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Anyone with significant assets, high liability risks, or who wants extra protection should consider umbrella insurance. We can help you determine if it's right for you.</div>
                            </div>
                        </div>
                        <div class="accordion-item faq-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">How much umbrella insurance do I need?</button>
                            </h3>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">The amount you need depends on your assets and liability risks. We'll help you determine the right amount for your situation.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

