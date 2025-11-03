<?php
/**
 * Template Name: Contact Page
 * 
 * Template for the contact page with location info and GMB map
 * 
 * @package Sperling
 */

get_header();
?>

<main id="main" class="site-main">
    
    <?php
    // Get ACF fields (if available) or use defaults
    $hero_title = get_field('hero_title') ?: 'Contact Sperling Insurance';
    $hero_subtitle = get_field('hero_subtitle') ?: 'Ready to review your insurance or get a free quote? Call or visit us today.';
    $show_form = get_field('show_contact_form') !== false; // Default to true
    ?>
    
    <!-- Contact Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-4 fw-bold mb-3"><?php echo esc_html($hero_title); ?></h1>
                    <?php if ($hero_subtitle): ?>
                        <p class="lead mb-4"><?php echo esc_html($hero_subtitle); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Contact Section: Locations + Form -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-start">
                <!-- Left Column: Compact Office Locations -->
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <h2 class="h3 fw-bold text-dark mb-4">Visit Our Offices</h2>
                    
                    <!-- Sioux Falls Office - Compact -->
                    <div class="card border-0 shadow-sm mb-3">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start mb-3">
                                <i class="fas fa-map-marker-alt text-accent me-3" style="font-size: 1.5rem; margin-top: 0.25rem;"></i>
                                <div class="flex-grow-1">
                                    <h4 class="h5 fw-bold mb-1">Sioux Falls Office</h4>
                                    <p class="text-accent mb-2 small">Sperling Insurance</p>
                                    <p class="mb-2 small">
                                        220 S. Bahnson Ave # 1<br>
                                        Sioux Falls, SD 57103
                                    </p>
                                    <p class="mb-2 small"><strong>Phone:</strong> <a href="tel:605-334-7350" class="text-decoration-none">(605) 334-7350</a></p>
                                    <p class="mb-2 small"><strong>Fax:</strong> (605) 334-0711</p>
                                    <div class="d-flex gap-2 mt-3">
                                        <a href="tel:605-334-7350" class="btn btn-sm btn-primary">
                                            <i class="fas fa-phone me-1"></i>Call
                                        </a>
                                        <a href="https://maps.google.com/?q=220+S+Bahnson+Ave,+Sioux+Falls,+SD+57103" target="_blank" class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-directions me-1"></i>Directions
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Garretson Office - Compact -->
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start mb-3">
                                <i class="fas fa-map-marker-alt text-accent me-3" style="font-size: 1.5rem; margin-top: 0.25rem;"></i>
                                <div class="flex-grow-1">
                                    <h4 class="h5 fw-bold mb-1">Garretson Office</h4>
                                    <p class="text-accent mb-2 small">Garretson Insurance</p>
                                    <p class="mb-2 small">
                                        Serving the Garretson<br>
                                        community with pride
                                    </p>
                                    <p class="mb-2 small"><strong>Phone:</strong> <a href="tel:605-594-2251" class="text-decoration-none">(605) 594-2251</a></p>
                                    <div class="d-flex gap-2 mt-3">
                                        <a href="tel:605-594-2251" class="btn btn-sm btn-primary">
                                            <i class="fas fa-phone me-1"></i>Call
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column: Contact Form -->
                <?php if ($show_form): ?>
                <div class="col-lg-7">
                    <h2 class="h3 fw-bold text-dark mb-4">Send Us a Message</h2>
                    <div class="card shadow-lg border-0" style="border-radius: 20px; background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px);">
                        <div class="card-body p-5">
                            <?php
                            // Check if Forminator Forms is active
                            if (class_exists('Forminator')) {
                                // Try to get form ID from ACF field or use form ID 18
                                $form_id = get_field('contact_form_id') ?: 18;
                                echo do_shortcode('[forminator_form id="' . esc_attr($form_id) . '"]');
                            } elseif (function_exists('wpforms_display')) {
                                // Fallback to WPForms if still active
                                $form_id = get_field('contact_form_id') ?: 1;
                                echo do_shortcode('[wpforms id="' . esc_attr($form_id) . '"]');
                            } else {
                                // Fallback HTML form
                                ?>
                                <form action="#" method="post" id="contact-form-fallback">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label fw-semibold small">First Name *</label>
                                                <input type="text" class="form-control" name="first_name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label fw-semibold small">Last Name *</label>
                                                <input type="text" class="form-control" name="last_name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label fw-semibold small">Email Address *</label>
                                                <input type="email" class="form-control" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label fw-semibold small">Phone Number</label>
                                                <input type="tel" class="form-control" name="phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold small">Subject</label>
                                        <input type="text" class="form-control" name="subject">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold small">Message *</label>
                                        <textarea class="form-control" rows="4" name="message" required></textarea>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-paper-plane me-2"></i>Send Message
                                        </button>
                                    </div>
                                    <div class="text-center mt-2">
                                        <small class="text-muted">* Required fields. We'll respond within 24 hours.</small>
                                    </div>
                                </form>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Google My Business Map Section with Office Hours -->
    <?php
    $office_hours = get_field('office_hours');
    $show_default_hours = get_field('show_default_hours') !== false; // Default to true
    ?>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="h3 fw-bold text-dark mb-4">Find Us on the Map</h2>
                    <div class="card border-0 shadow-lg">
                        <div class="card-body p-0">
                            <?php
                            // Check if ACF map embed is set
                            $gmb_map_embed = get_field('gmb_map_embed');
                            
                            if ($gmb_map_embed) {
                                // Use ACF field if available (allows override)
                                echo '<div class="ratio ratio-21x9" style="min-height: 400px;">';
                                echo wp_kses_post($gmb_map_embed);
                                echo '</div>';
                            } else {
                                // Default Sperling Insurance map
                                ?>
                                <div class="ratio ratio-21x9" style="min-height: 400px;">
                                    <iframe 
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2891.9116616657857!2d-96.68202219999999!3d43.5458833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x878eb468f5c3eea9%3A0xdd9ec6f48727368f!2sSperling%20Insurance!5e0!3m2!1sen!2sus!4v1762037113011!5m2!1sen!2sus" 
                                        width="100%" 
                                        height="100%" 
                                        style="border:0;" 
                                        allowfullscreen="" 
                                        loading="lazy" 
                                        referrerpolicy="no-referrer-when-downgrade"
                                        title="Sperling Insurance Location">
                                    </iframe>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    
                    <?php if (!$gmb_map_embed): ?>
                    <div class="mt-3">
                        <p class="text-muted mb-0">
                            <small>
                                <i class="fas fa-info-circle me-2"></i>
                                Map showing Sperling Insurance location at 220 S. Bahnson Ave, Sioux Falls, SD.
                            </small>
                        </p>
                    </div>
                    <?php endif; ?>
                </div>
                
                <!-- Right Column: Office Hours -->
                <div class="col-lg-4">
                    <h2 class="h3 fw-bold text-dark mb-4">Office Hours</h2>
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <?php if ($office_hours && is_array($office_hours)): ?>
                                <!-- ACF Repeater Field: Office Hours -->
                                <?php foreach ($office_hours as $location): ?>
                                    <div class="mb-4">
                                        <h5 class="fw-bold mb-3 small"><?php echo esc_html($location['location_name'] ?? 'Sioux Falls Office'); ?></h5>
                                        <?php echo wp_kses_post($location['hours'] ?? ''); ?>
                                    </div>
                                <?php endforeach; ?>
                            <?php elseif ($office_hours): ?>
                                <!-- ACF Textarea Field -->
                                <div>
                                    <?php echo wp_kses_post($office_hours); ?>
                                </div>
                            <?php elseif ($show_default_hours): ?>
                                <!-- Default Office Hours -->
                                <div class="list-group list-group-flush">
                                    <div class="list-group-item bg-transparent border-bottom px-0 py-2 d-flex justify-content-between">
                                        <span class="fw-semibold small">Monday</span>
                                        <span class="small">8:30 AM - 4:30 PM</span>
                                    </div>
                                    <div class="list-group-item bg-transparent border-bottom px-0 py-2 d-flex justify-content-between">
                                        <span class="fw-semibold small">Tuesday</span>
                                        <span class="small">8:30 AM - 4:30 PM</span>
                                    </div>
                                    <div class="list-group-item bg-transparent border-bottom px-0 py-2 d-flex justify-content-between">
                                        <span class="fw-semibold small">Wednesday</span>
                                        <span class="small">8:30 AM - 4:30 PM</span>
                                    </div>
                                    <div class="list-group-item bg-transparent border-bottom px-0 py-2 d-flex justify-content-between">
                                        <span class="fw-semibold small">Thursday</span>
                                        <span class="small">8:30 AM - 4:30 PM</span>
                                    </div>
                                    <div class="list-group-item bg-transparent border-bottom px-0 py-2 d-flex justify-content-between">
                                        <span class="fw-semibold small">Friday</span>
                                        <span class="small">8:30 AM - 4:30 PM</span>
                                    </div>
                                    <div class="list-group-item bg-transparent border-bottom px-0 py-2 d-flex justify-content-between">
                                        <span class="fw-semibold small">Saturday</span>
                                        <span class="text-muted small">Closed</span>
                                    </div>
                                    <div class="list-group-item bg-transparent px-0 py-2 d-flex justify-content-between">
                                        <span class="fw-semibold small">Sunday</span>
                                        <span class="text-muted small">Closed</span>
                                    </div>
                                </div>
                                <div class="text-center mt-3 pt-3 border-top">
                                    <p class="text-muted mb-0">
                                        <small>
                                            <i class="fas fa-star text-warning me-1"></i>
                                            Rated 5.0 out of 5.0<br>
                                            <span class="small">Based on 4 reviews</span>
                                        </small>
                                    </p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Contact CTA -->
    <section class="py-5" style="background: linear-gradient(135deg, var(--primary-blue) 0%, #001a5e 100%); color: white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-4">Prefer to Call?</h2>
                    <p class="lead mb-4">Our friendly team is ready to help you find the perfect insurance coverage.</p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="tel:605-334-7350" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-phone me-2"></i>Sioux Falls: (605) 334-7350
                        </a>
                        <a href="tel:605-594-2251" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-phone me-2"></i>Garretson: (605) 594-2251
                        </a>
                    </div>
                    <div class="mt-4">
                        <a href="#quote" class="btn btn-lg quote-form-btn">
                            <i class="fas fa-paper-plane me-2"></i>Get a Free Quote Online
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

