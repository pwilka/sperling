<?php
/**
 * Template Name: BOP Insurance Page
 * @package Sperling
 */
get_header();
?>
<main id="main" class="site-main">
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-4">
                    <i class="fas fa-briefcase mb-4" style="font-size: 4rem; color: var(--accent-teal);"></i>
                    <h1 class="display-4 fw-bold mb-4">BOP Insurance in Sioux Falls, South Dakota</h1>
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="entry-content text-start">
                                <p class="lead">A Business Owner's Policy (BOP) combines general liability and property insurance into one convenient, cost-effective package. At Sperling Insurance, we've been helping Sioux Falls businesses protect their operations with BOP insurance for over 20 years.</p>
                                <p>BOP insurance is ideal for small to medium-sized businesses, providing essential coverage at a lower cost than buying policies separately. It combines property coverage for your business assets with liability protection in one comprehensive policy.</p>
                                <p>Our experienced agents work with multiple carriers to find you competitive BOP insurance rates. We understand Sioux Falls businesses and can help you determine if a BOP is right for your operation.</p>
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
                    <h2 class="display-5 fw-bold text-dark mb-4">What BOP Insurance Coverage Is</h2>
                    <p class="lead mb-4">BOP insurance combines property and liability coverage into one policy.</p>
                    <div class="row mb-4">
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 bg-light h-100">
                                <div class="card-body p-4">
                                    <h3 class="h5 fw-bold text-accent mb-3"><i class="fas fa-building me-2"></i>Property Coverage</h3>
                                    <ul class="mb-0">
                                        <li>Building and contents</li>
                                        <li>Equipment and inventory</li>
                                        <li>Business interruption</li>
                                        <li>Protection from fire, theft, and weather</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 bg-light h-100">
                                <div class="card-body p-4">
                                    <h3 class="h5 fw-bold text-accent mb-3"><i class="fas fa-shield-alt me-2"></i>Liability Coverage</h3>
                                    <ul class="mb-0">
                                        <li>Bodily injury protection</li>
                                        <li>Property damage protection</li>
                                        <li>Legal fees</li>
                                        <li>Medical expenses</li>
                                    </ul>
                                </div>
                            </div>
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
                    <h2 class="display-5 fw-bold text-dark mb-4">Why BOP Insurance Matters</h2>
                    <p class="lead mb-4">BOP insurance provides essential business protection at an affordable price.</p>
                    <p>For most small to medium businesses, a BOP provides the coverage you need at a lower cost than buying property and liability insurance separately. It's a convenient, cost-effective way to protect your Sioux Falls business.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="display-5 fw-bold text-dark mb-4">Why Choose Sperling Insurance</h2>
                    <p>We understand Sioux Falls businesses and can help you find the right BOP coverage at competitive rates.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" style="background: linear-gradient(135deg, var(--primary-blue) 0%, #001a5e 100%); color: white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-4">Ready to Protect Your Business?</h2>
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
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true">Is a BOP right for my business?</button>
                            </h3>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">BOPs are ideal for small to medium businesses. We can help you determine if a BOP or separate policies work better for your specific needs.</div>
                            </div>
                        </div>
                        <div class="accordion-item faq-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">What's included in a BOP?</button>
                            </h3>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">A BOP typically includes property coverage, liability coverage, and may include business interruption coverage. We'll explain exactly what's included in your policy.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

