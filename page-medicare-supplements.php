<?php
/**
 * Template Name: Medicare Supplements Page
 * @package Sperling
 */
get_header();
?>
<main id="main" class="site-main">
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-4">
                    <i class="fas fa-heartbeat mb-4" style="font-size: 4rem; color: var(--accent-teal);"></i>
                    <h1 class="display-4 fw-bold mb-4">Medicare Supplements in Sioux Falls, South Dakota</h1>
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="entry-content text-start">
                                <p class="lead">Medicare doesn't cover everything, and Medicare Supplement insurance (Medigap) helps fill the gaps in your Medicare coverage. At Sperling Insurance, we've been helping Sioux Falls seniors find the right Medicare Supplement plans for over 20 years.</p>
                                <p>Medicare Supplement insurance helps pay for costs that Original Medicare doesn't cover, like deductibles, copayments, and coinsurance. With the right Medigap plan, you can reduce your out-of-pocket healthcare costs and have more predictable medical expenses.</p>
                                <p>Our experienced agents work with multiple Medicare Supplement carriers to help you compare plans and find coverage that fits your needs and budget. We understand Medicare and can help you navigate your options.</p>
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
                    <h2 class="display-5 fw-bold text-dark mb-4">What Medicare Supplements Coverage Is</h2>
                    <p class="lead mb-4">Medicare Supplement insurance helps pay for healthcare costs that Original Medicare doesn't cover.</p>
                    <div class="card border-0 bg-light mb-4">
                        <div class="card-body p-4">
                            <h3 class="h5 fw-bold text-accent mb-3">What Medigap Covers:</h3>
                            <ul class="mb-0">
                                <li>Medicare Part A deductible and coinsurance</li>
                                <li>Medicare Part B deductible and coinsurance</li>
                                <li>Blood (first 3 pints)</li>
                                <li>Part A hospice care coinsurance</li>
                                <li>Skilled nursing facility coinsurance</li>
                                <li>Foreign travel emergency coverage (some plans)</li>
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
                    <h2 class="display-5 fw-bold text-dark mb-4">Why Medicare Supplements Matter</h2>
                    <p class="lead mb-4">Medicare Supplement insurance helps you manage healthcare costs and provides peace of mind.</p>
                    <p>Without a Medicare Supplement plan, you could face significant out-of-pocket costs for deductibles, copayments, and coinsurance. A Medigap plan helps protect you from these unexpected expenses.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="display-5 fw-bold text-dark mb-4">Why Choose Sperling Insurance</h2>
                    <p>We understand Medicare and can help you find the right Supplement plan for your needs.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" style="background: linear-gradient(135deg, var(--primary-blue) 0%, #001a5e 100%); color: white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-4">Ready to Find the Right Medicare Supplement?</h2>
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
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true">When can I enroll in a Medicare Supplement plan?</button>
                            </h3>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">The best time to enroll is during your Medigap Open Enrollment Period, which starts when you're 65 and enrolled in Medicare Part B. During this time, you have guaranteed issue rights.</div>
                            </div>
                        </div>
                        <div class="accordion-item faq-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">How much does a Medicare Supplement plan cost?</button>
                            </h3>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">Costs vary by plan type, carrier, and your age. We can help you compare plans and find one that fits your budget.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

