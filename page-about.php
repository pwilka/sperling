<?php
/**
 * Template Name: About Us Page
 * @package Sperling
 */
get_header();
?>
<main id="main" class="site-main">
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-4">
                    <h1 class="display-4 fw-bold mb-4">About Sperling Insurance</h1>
                    <p class="lead">Serving Sioux Falls, Garretson, and South Dakota for Over 20 Years</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="display-5 fw-bold text-dark mb-4">Our Story</h2>
                    <p class="lead mb-4">Sperling Insurance has been serving Sioux Falls, Garretson, and communities across South Dakota for over 20 years. As an independent insurance agency, we're committed to helping our neighbors find the right insurance coverage at competitive rates.</p>
                    <p>We understand that insurance can be confusing, and we're here to make it simple. Our experienced agents take the time to understand your needs and explain your options in plain English. We're not tied to one insurance company—we shop multiple top-rated carriers to find you the best coverage at the best price.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="display-5 fw-bold text-dark mb-4">Why Choose Sperling Insurance</h2>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 bg-white h-100">
                                <div class="card-body p-4">
                                    <h3 class="h5 fw-bold text-accent mb-3"><i class="fas fa-handshake me-2"></i>Independent Agency</h3>
                                    <p>We're not tied to one insurance company. We shop multiple carriers to find you the best rates and coverage options.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 bg-white h-100">
                                <div class="card-body p-4">
                                    <h3 class="h5 fw-bold text-accent mb-3"><i class="fas fa-map-marker-alt me-2"></i>Local Expertise</h3>
                                    <p>We understand Sioux Falls and South Dakota. We know the local risks and can help you get the right coverage.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 bg-white h-100">
                                <div class="card-body p-4">
                                    <h3 class="h5 fw-bold text-accent mb-3"><i class="fas fa-users me-2"></i>Personalized Service</h3>
                                    <p>You're never just a policy number. We take time to understand your situation and provide personalized service.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 bg-white h-100">
                                <div class="card-body p-4">
                                    <h3 class="h5 fw-bold text-accent mb-3"><i class="fas fa-shield-alt me-2"></i>Claims Support</h3>
                                    <p>If you have a claim, we're here to help. We advocate for you with the insurance company and guide you through the process.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="display-5 fw-bold text-dark mb-4">Our Locations</h2>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 bg-light h-100">
                                <div class="card-body p-4">
                                    <h3 class="h5 fw-bold text-accent mb-3">Sioux Falls Office</h3>
                                    <p>220 S. Bahnson Ave.<br>Sioux Falls, SD 57103</p>
                                    <p><a href="tel:605-334-7350">(605) 334-7350</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 bg-light h-100">
                                <div class="card-body p-4">
                                    <h3 class="h5 fw-bold text-accent mb-3">Garretson Office</h3>
                                    <p>Contact us for Garretson location details</p>
                                    <p><a href="tel:605-334-7350">(605) 334-7350</a></p>
                                </div>
                            </div>
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
                    <h2 class="display-5 fw-bold mb-4">Ready to Get Started?</h2>
                    <p class="lead mb-4">Contact us today for a free insurance quote.</p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="<?php echo esc_url(home_url('/quote')); ?>" class="btn btn-lg quote-form-btn">Get a Free Quote</a>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline-light btn-lg">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>

