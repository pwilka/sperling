<?php
/**
 * Template part for displaying a CTA section
 *
 * @package Sperling
 * 
 * @param array $args - Array with: title, description, button_text, button_link, secondary_button_text, secondary_button_link
 */

if (!isset($args)) {
    $args = array();
}

$title = $args['title'] ?? 'Ready to Get Started?';
$description = $args['description'] ?? 'Get a free quote today and see how we can help protect what matters most to you.';
$button_text = $args['button_text'] ?? 'Get My Free Quote';
$button_link = $args['button_link'] ?? '#quote';
$secondary_button_text = $args['secondary_button_text'] ?? 'Call (605) 334-7350';
$secondary_button_link = $args['secondary_button_link'] ?? 'tel:605-334-7350';
?>

<section class="py-5" style="background: linear-gradient(135deg, var(--primary-blue) 0%, #001a5e 100%); color: white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold mb-4"><?php echo esc_html($title); ?></h2>
                <p class="lead mb-4"><?php echo esc_html($description); ?></p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="<?php echo esc_url($button_link); ?>" class="btn btn-lg quote-form-btn">
                        <i class="fas fa-paper-plane me-2"></i><?php echo esc_html($button_text); ?>
                    </a>
                    <a href="<?php echo esc_url($secondary_button_link); ?>" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-phone me-2"></i><?php echo esc_html($secondary_button_text); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

