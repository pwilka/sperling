<?php
/**
 * Template Name: Business Life Insurance Page
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
                    <h1 class="display-4 fw-bold mb-4">Business Life Insurance in Sioux Falls, South Dakota</h1>
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="entry-content text-start">
                                <p class="lead">Business Life Insurance protects your Sioux Falls business from the financial impact of losing a key person or owner. At Sperling Insurance, we've been helping Sioux Falls businesses protect themselves with business life insurance for over 20 years.</p>
                                <p>Business life insurance can fund buy-sell agreements, provide key person coverage, or help ensure business continuity. It's an essential tool for protecting your business's financial future.</p>
                                <p>Our experienced agents can help you determine what type of business life insurance is right for your business and find coverage that meets your needs.</p>
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
                    <h2 class="display-5 fw-bold text-dark mb-4">What Business Life Insurance Covers</h2>
                    <p class="lead mb-4">Business life insurance provides financial protection for your business.</p>
                    <div class="card border-0 bg-light mb-4">
                        <div class="card-body p-4">
                            <h3 class="h5 fw-bold text-accent mb-3">Types of Business Life Insurance:</h3>
                            <ul class="mb-0">
                                <li>Key person insurance</li>
                                <li>Buy-sell agreement funding</li>
                                <li>Business loan protection</li>
                                <li>Executive benefits</li>
                            </ul>
                        </div>
                    </div>
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
</main>
<?php get_footer(); ?>

