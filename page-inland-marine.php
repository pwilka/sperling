<?php
/**
 * Template Name: Inland Marine Insurance Page
 * @package Sperling
 */
get_header();
?>
<main id="main" class="site-main">
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-4">
                    <i class="fas fa-box mb-4" style="font-size: 4rem; color: var(--accent-teal);"></i>
                    <h1 class="display-4 fw-bold mb-4">Inland Marine Insurance in Sioux Falls, South Dakota</h1>
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="entry-content text-start">
                                <p class="lead">Inland Marine insurance covers property that moves or is frequently transported, as well as property that's in transit or stored away from your primary location. At Sperling Insurance, we've been helping Sioux Falls residents and businesses protect their movable property with Inland Marine insurance for over 20 years.</p>
                                <p>Despite its name, Inland Marine insurance doesn't cover boats or water-related property. Instead, it covers valuable items that move or are stored off-site, such as equipment, tools, electronics, and other portable property.</p>
                                <p>Our experienced agents can help you determine if Inland Marine insurance is right for your situation and find coverage that protects your valuable movable property.</p>
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
                    <h2 class="display-5 fw-bold text-dark mb-4">What Inland Marine Insurance Coverage Is</h2>
                    <p class="lead mb-4">Inland Marine insurance covers movable property and property in transit.</p>
                    <div class="card border-0 bg-light mb-4">
                        <div class="card-body p-4">
                            <h3 class="h5 fw-bold text-accent mb-3">What Inland Marine Covers:</h3>
                            <ul class="mb-0">
                                <li>Equipment and tools that move between locations</li>
                                <li>Property in transit</li>
                                <li>Property stored off-site</li>
                                <li>Valuable items not adequately covered by other policies</li>
                                <li>Contractors' equipment</li>
                                <li>Musical instruments and equipment</li>
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
                    <h2 class="display-5 fw-bold text-dark mb-4">Why Inland Marine Insurance Matters</h2>
                    <p class="lead mb-4">Standard property insurance may not adequately cover movable or off-site property.</p>
                    <p>If you have valuable equipment, tools, or property that moves or is stored away from your primary location, Inland Marine insurance can provide the specialized coverage you need.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="display-5 fw-bold text-dark mb-4">Why Choose Sperling Insurance</h2>
                    <p>We can help you determine if Inland Marine insurance is right for your situation and find coverage that protects your valuable movable property.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" style="background: linear-gradient(135deg, var(--primary-blue) 0%, #001a5e 100%); color: white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-4">Ready to Protect Your Movable Property?</h2>
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
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true">Who needs Inland Marine insurance?</button>
                            </h3>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Anyone with valuable movable property, equipment that travels, or property stored off-site should consider Inland Marine insurance. We can help you determine if it's right for you.</div>
                            </div>
                        </div>
                        <div class="accordion-item faq-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">What's the difference between Inland Marine and property insurance?</button>
                            </h3>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Inland Marine insurance covers movable property and property in transit, while standard property insurance typically covers property at a fixed location. Inland Marine provides broader coverage for items that move.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

