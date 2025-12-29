<?php
/**
 * Template Name: Workers Compensation Insurance Page
 * @package Sperling
 */
get_header();
?>
<main id="main" class="site-main">
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-4">
                    <i class="fas fa-user-hard-hat mb-4" style="font-size: 4rem; color: var(--accent-teal);"></i>
                    <h1 class="display-4 fw-bold mb-4">Workers' Compensation Insurance in Sioux Falls, South Dakota</h1>
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="entry-content text-start">
                                <p class="lead">Workers' Compensation insurance is required in South Dakota for businesses with employees. At Sperling Insurance, we've been helping Sioux Falls businesses meet their workers' comp requirements and protect their employees for over 20 years.</p>
                                <p>Workers' Compensation provides medical benefits and wage replacement for employees who are injured or become ill on the job. It also protects your business from employee injury lawsuits.</p>
                                <p>Our experienced agents understand South Dakota's workers' compensation requirements and can help you find coverage that meets legal requirements while protecting your business.</p>
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
                    <h2 class="display-5 fw-bold text-dark mb-4">What Workers' Compensation Insurance Covers</h2>
                    <p class="lead mb-4">Workers' Compensation provides benefits for work-related injuries and illnesses.</p>
                    <div class="card border-0 bg-light mb-4">
                        <div class="card-body p-4">
                            <h3 class="h5 fw-bold text-accent mb-3">Coverage Includes:</h3>
                            <ul class="mb-0">
                                <li>Medical expenses for work-related injuries</li>
                                <li>Wage replacement for lost time</li>
                                <li>Disability benefits</li>
                                <li>Death benefits</li>
                                <li>Protection from employee injury lawsuits</li>
                            </ul>
                        </div>
                    </div>
                    <div class="alert alert-warning">
                        <h4 class="alert-heading"><i class="fas fa-exclamation-triangle me-2"></i>South Dakota Requirement</h4>
                        <p class="mb-0">South Dakota requires workers' compensation for businesses with employees. There are limited exceptions, but most businesses must carry it.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="display-5 fw-bold text-dark mb-4">Why Workers' Compensation Insurance Matters</h2>
                    <p class="lead mb-4">Workers' Compensation is required by law and protects both employees and employers.</p>
                    <p>Without workers' compensation, you could face fines, legal action, and be personally responsible for employee injury costs. Workers' compensation provides essential protection for Sioux Falls businesses.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" style="background: linear-gradient(135deg, var(--primary-blue) 0%, #001a5e 100%); color: white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-4">Ready to Get Workers' Compensation Coverage?</h2>
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

