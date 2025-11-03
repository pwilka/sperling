<?php
/**
 * Template Name: Service Page
 * 
 * Template for service category pages (e.g., Personal Insurance, Business Insurance, Farm Insurance)
 * 
 * @package Sperling
 */

get_header();
?>

<main id="main" class="site-main">
    
    <?php
    // Get ACF fields (if available) or use defaults
    $hero_title = get_field('hero_title') ?: get_the_title();
    $hero_subtitle = get_field('hero_subtitle') ?: '';
    $hero_description = get_field('hero_description') ?: '';
    $service_icon = get_field('service_icon') ?: 'fa-shield-alt';
    $coverages = get_field('coverages') ?: array();
    $features_list = get_field('features_list') ?: array();
    $cta_text = get_field('cta_text') ?: 'Get a Free Quote';
    $cta_link = get_field('cta_link') ?: '#quote';
    ?>
    
    <!-- Service Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-4">
                    <?php if ($service_icon): ?>
                        <i class="fas <?php echo esc_attr($service_icon); ?> mb-4" style="font-size: 4rem; color: var(--accent-teal);"></i>
                    <?php endif; ?>
                    <h1 class="display-4 fw-bold mb-3"><?php echo esc_html($hero_title); ?></h1>
                    <?php if ($hero_subtitle): ?>
                        <p class="lead mb-4"><?php echo esc_html($hero_subtitle); ?></p>
                    <?php endif; ?>
                    <?php if ($hero_description || have_posts()): ?>
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <?php if ($hero_description): ?>
                                    <p class="mb-4"><?php echo wp_kses_post($hero_description); ?></p>
                                <?php elseif (have_posts()): ?>
                                    <?php while (have_posts()): the_post(); ?>
                                        <div class="entry-content text-start">
                                            <?php the_content(); ?>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="mt-4">
                        <a href="<?php echo esc_url($cta_link); ?>" class="btn btn-primary btn-lg me-3"><?php echo esc_html($cta_text); ?></a>
                        <a href="#coverages" class="btn btn-outline-light btn-lg">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if (!empty($coverages) || have_posts()): ?>
    <!-- Coverage Options Section -->
    <section id="coverages" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="display-5 fw-bold text-dark">Coverage Options</h2>
                    <p class="lead">We offer comprehensive coverage options tailored to your specific needs.</p>
                </div>
            </div>
            
            <?php if (!empty($coverages)): ?>
                <!-- ACF Repeater Field: Coverages -->
                <div class="row">
                    <?php foreach ($coverages as $coverage): ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card service-card h-100 text-center p-4">
                                <?php if (!empty($coverage['icon'])): ?>
                                    <i class="fas <?php echo esc_attr($coverage['icon']); ?> service-icon mb-3"></i>
                                <?php endif; ?>
                                <?php if (!empty($coverage['title'])): ?>
                                    <h5><?php echo esc_html($coverage['title']); ?></h5>
                                <?php endif; ?>
                                <?php if (!empty($coverage['description'])): ?>
                                    <p><?php echo wp_kses_post($coverage['description']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <!-- Fallback: Show page content if no ACF fields -->
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <?php if (have_posts()): ?>
                            <?php while (have_posts()): the_post(); ?>
                                <div class="card border-0 bg-light mb-4">
                                    <div class="card-body p-5">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($features_list)): ?>
    <!-- Features/Benefits Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="card border-0 bg-white shadow-sm">
                        <div class="card-body p-5">
                            <h3 class="text-center text-accent mb-4">Why Choose <?php echo esc_html($hero_title); ?> with Sperling Insurance</h3>
                            <div class="row">
                                <?php 
                                $features_count = count($features_list);
                                $col_class = $features_count <= 2 ? 'col-md-6' : 'col-md-4';
                                ?>
                                <?php foreach ($features_list as $feature): ?>
                                    <div class="<?php echo esc_attr($col_class); ?> mb-3">
                                        <ul class="list-unstyled">
                                            <li>
                                                <?php if (!empty($feature['icon'])): ?>
                                                    <i class="fas <?php echo esc_attr($feature['icon']); ?> text-accent me-2"></i>
                                                <?php endif; ?>
                                                <strong><?php echo esc_html($feature['title']); ?></strong>
                                                <?php if (!empty($feature['description'])): ?>
                                                    - <?php echo esc_html($feature['description']); ?>
                                                <?php endif; ?>
                                            </li>
                                        </ul>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- CTA Section -->
    <section class="py-5" style="background: linear-gradient(135deg, var(--primary-blue) 0%, #001a5e 100%); color: white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-4">Ready to Get Started?</h2>
                    <p class="lead mb-4">Get a free quote today and see how we can help protect what matters most to you.</p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="#quote" class="btn btn-lg quote-form-btn">
                            <i class="fas fa-paper-plane me-2"></i>Get My Free Quote
                        </a>
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

