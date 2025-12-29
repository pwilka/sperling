<?php
/**
 * Template Name: Service Page - Detailed SEO Structure
 * 
 * Template for service pages with full SEO structure:
 * 1. H1 + Intro
 * 2. What This Coverage Is
 * 3. Why This Coverage Matters
 * 4. Why Sperling
 * 5. CTA Block
 * 6. FAQs
 * 
 * @package Sperling
 */

get_header();

// Get page content
$page_title = get_the_title();
$service_name = $page_title; // e.g., "Auto Insurance"
$service_icon = get_field('service_icon') ?: 'fa-shield-alt';
?>

<main id="main" class="site-main">
    
    <!-- Section 1: H1 + Intro -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-4">
                    <?php if ($service_icon): ?>
                        <i class="fas <?php echo esc_attr($service_icon); ?> mb-4" style="font-size: 4rem; color: var(--accent-teal);"></i>
                    <?php endif; ?>
                    <h1 class="display-4 fw-bold mb-4"><?php echo esc_html($service_name); ?> in Sioux Falls, South Dakota</h1>
                    <?php if (have_posts()): ?>
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <?php while (have_posts()): the_post(); ?>
                                    <div class="entry-content text-start">
                                        <?php 
                                        // Get intro content (first 2-3 paragraphs from editor)
                                        $content = get_the_content();
                                        // For now, display all content - can be split later if needed
                                        echo wp_kses_post($content);
                                        ?>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="mt-4">
                        <a href="<?php echo esc_url(home_url('/quote')); ?>" class="btn btn-primary btn-lg me-3">Get a Free Quote</a>
                        <a href="tel:605-334-7350" class="btn btn-outline-light btn-lg">Call (605) 334-7350</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    // Get ACF fields for sections (if available)
    $what_coverage = get_field('what_coverage_is');
    $why_matters = get_field('why_coverage_matters');
    $why_sperling = get_field('why_sperling');
    $faqs = get_field('faqs');
    ?>

    <!-- Section 2: What This Coverage Is -->
    <?php if ($what_coverage || get_field('section_2_content')): ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="display-5 fw-bold text-dark mb-4">What <?php echo esc_html($service_name); ?> Coverage Is</h2>
                    <?php if ($what_coverage): ?>
                        <div class="entry-content">
                            <?php echo wp_kses_post($what_coverage); ?>
                        </div>
                    <?php elseif (get_field('section_2_content')): ?>
                        <div class="entry-content">
                            <?php echo wp_kses_post(get_field('section_2_content')); ?>
                        </div>
                    <?php else: ?>
                        <!-- Content will come from WordPress editor or ACF -->
                        <p class="lead"><?php echo esc_html($service_name); ?> is designed to protect you and your assets from financial losses.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Section 3: Why This Coverage Matters -->
    <?php if ($why_matters || get_field('section_3_content')): ?>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="display-5 fw-bold text-dark mb-4">Why <?php echo esc_html($service_name); ?> Matters in Sioux Falls</h2>
                    <?php if ($why_matters): ?>
                        <div class="entry-content">
                            <?php echo wp_kses_post($why_matters); ?>
                        </div>
                    <?php elseif (get_field('section_3_content')): ?>
                        <div class="entry-content">
                            <?php echo wp_kses_post(get_field('section_3_content')); ?>
                        </div>
                    <?php else: ?>
                        <!-- Content will come from WordPress editor or ACF -->
                        <p class="lead">Having the right <?php echo esc_html(strtolower($service_name)); ?> coverage protects you from unexpected financial losses.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Section 4: Why Sperling -->
    <?php if ($why_sperling || get_field('section_4_content')): ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="display-5 fw-bold text-dark mb-4">Why Choose Sperling Insurance for <?php echo esc_html($service_name); ?></h2>
                    <?php if ($why_sperling): ?>
                        <div class="entry-content">
                            <?php echo wp_kses_post($why_sperling); ?>
                        </div>
                    <?php elseif (get_field('section_4_content')): ?>
                        <div class="entry-content">
                            <?php echo wp_kses_post(get_field('section_4_content')); ?>
                        </div>
                    <?php else: ?>
                        <div class="card border-0 bg-light">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <ul class="list-unstyled">
                                            <li><i class="fas fa-handshake text-accent me-2"></i><strong>Independent Advantage</strong> - We shop multiple carriers to find you the best rates</li>
                                            <li><i class="fas fa-map-marker-alt text-accent me-2"></i><strong>Local Expertise</strong> - We understand Sioux Falls and South Dakota risks</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <ul class="list-unstyled">
                                            <li><i class="fas fa-users text-accent me-2"></i><strong>Personalized Service</strong> - You're never just a policy number</li>
                                            <li><i class="fas fa-shield-alt text-accent me-2"></i><strong>Claims Support</strong> - We advocate for you at claim time</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Section 5: CTA Block -->
    <section class="py-5" style="background: linear-gradient(135deg, var(--primary-blue) 0%, #001a5e 100%); color: white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-4">Ready to Get Started?</h2>
                    <p class="lead mb-4">Get a free <?php echo esc_html(strtolower($service_name)); ?> quote today and see how we can help protect what matters most to you.</p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="<?php echo esc_url(home_url('/quote')); ?>" class="btn btn-lg quote-form-btn">
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

    <!-- Section 6: FAQs -->
    <?php if (!empty($faqs) || get_field('faqs_content')): ?>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="display-5 fw-bold text-dark text-center mb-5">Frequently Asked Questions</h2>
                    <div class="accordion" id="faqAccordion">
                        <?php 
                        if (!empty($faqs) && is_array($faqs)):
                            $faq_index = 0;
                            foreach ($faqs as $faq): 
                                $faq_index++;
                                $faq_id = 'faq' . $faq_index;
                                $is_first = $faq_index === 1;
                        ?>
                            <div class="accordion-item faq-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button <?php echo $is_first ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo esc_attr($faq_id); ?>" aria-expanded="<?php echo $is_first ? 'true' : 'false'; ?>" aria-controls="<?php echo esc_attr($faq_id); ?>">
                                        <?php echo esc_html($faq['question']); ?>
                                    </button>
                                </h3>
                                <div id="<?php echo esc_attr($faq_id); ?>" class="accordion-collapse collapse <?php echo $is_first ? 'show' : ''; ?>" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <?php echo wp_kses_post($faq['answer']); ?>
                                    </div>
                                </div>
                            </div>
                        <?php 
                            endforeach;
                        elseif (get_field('faqs_content')):
                            // If FAQs are in a text field, display them
                            echo wp_kses_post(get_field('faqs_content'));
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

</main>

<?php
get_footer();
?>

