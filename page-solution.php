<?php
/**
 * Template Name: Solution Page
 * 
 * Template for specific insurance solution pages (e.g., Auto Insurance, Home Insurance, Business Insurance)
 * 
 * @package Sperling
 */

get_header();
?>

<main id="main" class="site-main">
    
    <?php
    // Get ACF fields (if available) or use defaults
    $solution_icon = get_field('solution_icon') ?: 'fa-shield-alt';
    $hero_title = get_field('hero_title') ?: get_the_title();
    $hero_subtitle = get_field('hero_subtitle') ?: '';
    $intro_text = get_field('intro_text') ?: '';
    $benefits = get_field('benefits') ?: array();
    $coverage_details = get_field('coverage_details') ?: array();
    $faq_items = get_field('faq_items') ?: array();
    $why_choose = get_field('why_choose') ?: '';
    ?>
    
    <!-- Solution Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <?php if ($solution_icon): ?>
                                <i class="fas <?php echo esc_attr($solution_icon); ?> mb-4" style="font-size: 4rem; color: var(--accent-teal);"></i>
                            <?php endif; ?>
                            <h1 class="display-4 fw-bold mb-3"><?php echo esc_html($hero_title); ?></h1>
                            <?php if ($hero_subtitle): ?>
                                <p class="lead mb-4"><?php echo esc_html($hero_subtitle); ?></p>
                            <?php endif; ?>
                            <?php if ($intro_text): ?>
                                <div class="mb-4">
                                    <?php echo wp_kses_post($intro_text); ?>
                                </div>
                            <?php elseif (have_posts()): ?>
                                <?php while (have_posts()): the_post(); ?>
                                    <div class="entry-content mb-4">
                                        <?php the_excerpt(); ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <div class="d-flex gap-3 flex-wrap">
                                <a href="#quote" class="btn btn-primary btn-lg">Get a Free Quote</a>
                                <a href="#benefits" class="btn btn-outline-light btn-lg">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-6 text-center mt-5 mt-lg-0">
                            <div class="location-card p-5">
                                <h3 class="location-title mb-4">Get Started Today</h3>
                                <p class="location-address mb-4">Call one of our experienced agents to discuss your <?php echo esc_html(strtolower($hero_title)); ?> needs.</p>
                                <a href="tel:605-334-7350" class="location-phone-btn">
                                    <i class="fas fa-phone me-2"></i>(605) 334-7350
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if (!empty($benefits)): ?>
    <!-- Benefits Section -->
    <section id="benefits" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="display-5 fw-bold text-dark">Benefits of <?php echo esc_html($hero_title); ?></h2>
                </div>
            </div>
            <div class="row">
                <?php foreach ($benefits as $benefit): ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card service-card h-100 text-center p-4">
                            <?php if (!empty($benefit['icon'])): ?>
                                <i class="fas <?php echo esc_attr($benefit['icon']); ?> service-icon mb-3"></i>
                            <?php endif; ?>
                            <?php if (!empty($benefit['title'])): ?>
                                <h5><?php echo esc_html($benefit['title']); ?></h5>
                            <?php endif; ?>
                            <?php if (!empty($benefit['description'])): ?>
                                <p><?php echo wp_kses_post($benefit['description']); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($coverage_details)): ?>
    <!-- Coverage Details Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="display-5 fw-bold text-dark text-center mb-5">What's Covered</h2>
                    <div class="row">
                        <?php foreach ($coverage_details as $detail): ?>
                            <div class="col-md-6 mb-4">
                                <div class="card border-0 bg-white h-100">
                                    <div class="card-body p-4">
                                        <?php if (!empty($detail['title'])): ?>
                                            <h5 class="text-accent mb-3">
                                                <?php if (!empty($detail['icon'])): ?>
                                                    <i class="fas <?php echo esc_attr($detail['icon']); ?> me-2"></i>
                                                <?php endif; ?>
                                                <?php echo esc_html($detail['title']); ?>
                                            </h5>
                                        <?php endif; ?>
                                        <?php if (!empty($detail['description'])): ?>
                                            <p><?php echo wp_kses_post($detail['description']); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php if ($why_choose || have_posts()): ?>
    <!-- Why Choose Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="card border-0 bg-light">
                        <div class="card-body p-5">
                            <h3 class="text-center text-accent mb-4">Why Choose Sperling Insurance for Your <?php echo esc_html($hero_title); ?>?</h3>
                            <?php if ($why_choose): ?>
                                <div class="mb-4">
                                    <?php echo wp_kses_post($why_choose); ?>
                                </div>
                            <?php elseif (have_posts()): ?>
                                <?php while (have_posts()): the_post(); ?>
                                    <div class="entry-content">
                                        <?php the_content(); ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($faq_items)): ?>
    <!-- FAQ Section -->
    <section class="faq-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="display-5 fw-bold text-dark text-center mb-5">Frequently Asked Questions</h2>
                    <div class="accordion" id="solutionFaqAccordion">
                        <?php foreach ($faq_items as $index => $faq): ?>
                            <div class="accordion-item faq-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button <?php echo $index === 0 ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faq<?php echo esc_attr($index); ?>" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-controls="faq<?php echo esc_attr($index); ?>">
                                        <?php echo esc_html($faq['question']); ?>
                                    </button>
                                </h3>
                                <div id="faq<?php echo esc_attr($index); ?>" class="accordion-collapse collapse <?php echo $index === 0 ? 'show' : ''; ?>" data-bs-parent="#solutionFaqAccordion">
                                    <div class="accordion-body">
                                        <?php echo wp_kses_post($faq['answer']); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- CTA Section -->
    <section id="quote" class="py-5" style="background: linear-gradient(135deg, var(--primary-blue) 0%, #001a5e 100%); color: white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-4">Get Your Free <?php echo esc_html($hero_title); ?> Quote</h2>
                    <p class="lead mb-4">Our experienced agents are ready to help you find the perfect coverage at the best price.</p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <?php if (class_exists('Forminator') || function_exists('wpforms_display')): ?>
                            <a href="#quote-form" class="btn btn-lg quote-form-btn" onclick="document.getElementById('quote-form')?.scrollIntoView({behavior: 'smooth'}); return false;">
                                <i class="fas fa-paper-plane me-2"></i>Get My Free Quote
                            </a>
                        <?php else: ?>
                            <a href="#quote-form" class="btn btn-lg quote-form-btn">
                                <i class="fas fa-paper-plane me-2"></i>Get My Free Quote
                            </a>
                        <?php endif; ?>
                        <a href="tel:605-334-7350" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-phone me-2"></i>Call (605) 334-7350
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>

