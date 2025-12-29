<?php
/**
 * Template Name: Farm Inland Marine Insurance Page
 * @package Sperling
 */
get_header();
?>
<main id="main" class="site-main">
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-4">
                    <i class="fas fa-tractor mb-4" style="font-size: 4rem; color: var(--accent-teal);"></i>
                    <h1 class="display-4 fw-bold mb-4">Farm Inland Marine Insurance in Sioux Falls, South Dakota</h1>
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="entry-content text-start">
                                <p class="lead">Farm Inland Marine insurance covers agricultural equipment, tools, and property that moves or is frequently transported. At Sperling Insurance, we've been helping South Dakota farmers protect their movable farm property for over 20 years.</p>
                                <p>Farm equipment, tools, and supplies often move between locations or are stored off-site. Farm Inland Marine insurance provides specialized coverage for these items that may not be adequately covered by standard farm insurance.</p>
                                <p>Our experienced agents understand farm operations and can help you determine if Farm Inland Marine insurance is right for your operation.</p>
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
                    <h2 class="display-5 fw-bold text-dark mb-4">What Farm Inland Marine Insurance Covers</h2>
                    <p class="lead mb-4">Farm Inland Marine insurance covers movable farm equipment and property.</p>
                    <div class="card border-0 bg-light mb-4">
                        <div class="card-body p-4">
                            <h3 class="h5 fw-bold text-accent mb-3">Coverage Includes:</h3>
                            <ul class="mb-0">
                                <li>Farm equipment in transit</li>
                                <li>Tools and supplies stored off-site</li>
                                <li>Portable farm equipment</li>
                                <li>Equipment used at multiple locations</li>
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
                    <h2 class="display-5 fw-bold mb-4">Ready to Protect Your Farm Equipment?</h2>
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

