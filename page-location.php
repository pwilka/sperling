<?php
/**
 * Template Name: Location Page
 * 
 * Template for location/office pages (Sioux Falls, Garretson)
 * SEO-optimized with local keywords and schema markup
 * 
 * @package Sperling
 */

get_header();
?>

<main id="main" class="site-main">
    
    <?php
    // Get ACF fields (if available) or use defaults
    $location_name = get_field('location_name') ?: get_the_title();
    $location_address = get_field('location_address') ?: '';
    $location_phone = get_field('location_phone') ?: '';
    $location_fax = get_field('location_fax') ?: '';
    $office_hours = get_field('office_hours') ?: '';
    $google_map_embed = get_field('google_map_embed') ?: '';
    $neighborhoods_served = get_field('neighborhoods_served') ?: '';
    $nearby_towns = get_field('nearby_towns') ?: '';
    $local_landmarks = get_field('local_landmarks') ?: '';
    $local_risks = get_field('local_risks') ?: '';
    $services_offered = get_field('services_offered') ?: array();
    $intro_content = get_field('intro_content') ?: '';
    ?>
    
    <!-- Location Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-4">
                    <h1 class="display-4 fw-bold mb-3">Sperling Insurance - <?php echo esc_html($location_name); ?> Office</h1>
                    <?php if ($intro_content): ?>
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <div class="entry-content text-start">
                                    <?php echo wp_kses_post($intro_content); ?>
                                </div>
                            </div>
                        </div>
                    <?php elseif (have_posts()): ?>
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <?php while (have_posts()): the_post(); ?>
                                    <div class="entry-content text-start">
                                        <?php the_content(); ?>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Details Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Left Column: Contact Info -->
                <div class="col-lg-6 mb-5">
                    <div class="card h-100 border-0 shadow-lg">
                        <div class="card-body p-5">
                            <h2 class="h3 fw-bold text-dark mb-4">Contact Information</h2>
                            
                            <?php if ($location_address): ?>
                            <div class="mb-4">
                                <i class="fas fa-map-marker-alt text-accent me-2" style="font-size: 1.5rem;"></i>
                                <h4 class="d-inline-block mb-2">Address</h4>
                                <p class="mb-0"><?php echo nl2br(esc_html($location_address)); ?></p>
                            </div>
                            <?php endif; ?>
                            
                            <?php if ($location_phone): ?>
                            <div class="mb-4">
                                <i class="fas fa-phone text-accent me-2" style="font-size: 1.5rem;"></i>
                                <h4 class="d-inline-block mb-2">Phone</h4>
                                <p class="mb-0">
                                    <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9]/', '', $location_phone)); ?>" class="text-decoration-none">
                                        <strong><?php echo esc_html($location_phone); ?></strong>
                                    </a>
                                </p>
                            </div>
                            <?php endif; ?>
                            
                            <?php if ($location_fax): ?>
                            <div class="mb-4">
                                <i class="fas fa-fax text-accent me-2" style="font-size: 1.5rem;"></i>
                                <h4 class="d-inline-block mb-2">Fax</h4>
                                <p class="mb-0"><?php echo esc_html($location_fax); ?></p>
                            </div>
                            <?php endif; ?>
                            
                            <?php if ($office_hours): ?>
                            <div class="mb-4">
                                <i class="fas fa-clock text-accent me-2" style="font-size: 1.5rem;"></i>
                                <h4 class="d-inline-block mb-2">Office Hours</h4>
                                <p class="mb-0"><?php echo nl2br(esc_html($office_hours)); ?></p>
                            </div>
                            <?php endif; ?>
                            
                            <div class="mt-4">
                                <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9]/', '', $location_phone)); ?>" class="btn btn-primary btn-lg me-3">
                                    <i class="fas fa-phone me-2"></i>Call <?php echo esc_html($location_name); ?> Office
                                </a>
                                <a href="<?php echo esc_url(home_url('/quote')); ?>" class="btn btn-outline-primary btn-lg">
                                    Get a Quote in <?php echo esc_html($location_name); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column: Google Map -->
                <div class="col-lg-6 mb-5">
                    <?php if ($google_map_embed): ?>
                        <div class="card border-0 shadow-lg h-100">
                            <div class="card-body p-0">
                                <div class="ratio ratio-16x9">
                                    <?php echo $google_map_embed; // Output embed code ?>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <!-- Fallback: Address for manual map -->
                        <div class="card border-0 shadow-lg h-100">
                            <div class="card-body p-5 d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    <i class="fas fa-map-marked-alt text-accent mb-3" style="font-size: 4rem;"></i>
                                    <p class="lead">Map coming soon</p>
                                    <?php if ($location_address): ?>
                                        <p><?php echo esc_html($location_address); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Localized Content Section -->
    <?php if ($neighborhoods_served || $nearby_towns || $local_landmarks || $local_risks): ?>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="display-5 fw-bold text-dark text-center mb-5">Serving <?php echo esc_html($location_name); ?> and Surrounding Areas</h2>
                    
                    <div class="row">
                        <?php if ($neighborhoods_served): ?>
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 bg-white h-100">
                                <div class="card-body p-4">
                                    <h3 class="h5 fw-bold text-accent mb-3">
                                        <i class="fas fa-map-marker-alt me-2"></i>Neighborhoods We Serve
                                    </h3>
                                    <p><?php echo nl2br(esc_html($neighborhoods_served)); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <?php if ($nearby_towns): ?>
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 bg-white h-100">
                                <div class="card-body p-4">
                                    <h3 class="h5 fw-bold text-accent mb-3">
                                        <i class="fas fa-city me-2"></i>Nearby Communities
                                    </h3>
                                    <p><?php echo nl2br(esc_html($nearby_towns)); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <?php if ($local_landmarks): ?>
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 bg-white h-100">
                                <div class="card-body p-4">
                                    <h3 class="h5 fw-bold text-accent mb-3">
                                        <i class="fas fa-landmark me-2"></i>Local Landmarks
                                    </h3>
                                    <p><?php echo nl2br(esc_html($local_landmarks)); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <?php if ($local_risks): ?>
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 bg-white h-100">
                                <div class="card-body p-4">
                                    <h3 class="h5 fw-bold text-accent mb-3">
                                        <i class="fas fa-shield-alt me-2"></i>Local Risks We Protect Against
                                    </h3>
                                    <p><?php echo nl2br(esc_html($local_risks)); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Services Offered Section -->
    <?php if (!empty($services_offered)): ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="display-5 fw-bold text-dark text-center mb-5">Insurance Services Available in <?php echo esc_html($location_name); ?></h2>
                    <div class="card border-0 bg-light">
                        <div class="card-body p-5">
                            <ul class="list-unstyled mb-0">
                                <?php foreach ($services_offered as $service): ?>
                                    <li class="mb-3">
                                        <i class="fas fa-check-circle text-accent me-2"></i>
                                        <?php if (!empty($service['link'])): ?>
                                            <a href="<?php echo esc_url($service['link']); ?>" class="text-decoration-none fw-semibold">
                                                <?php echo esc_html($service['name']); ?>
                                            </a>
                                        <?php else: ?>
                                            <strong><?php echo esc_html($service['name']); ?></strong>
                                        <?php endif; ?>
                                        <?php if (!empty($service['description'])): ?>
                                            <span class="text-muted"> - <?php echo esc_html($service['description']); ?></span>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
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
                    <h2 class="display-5 fw-bold mb-4">Get a Quote in <?php echo esc_html($location_name); ?></h2>
                    <p class="lead mb-4">Ready to protect what matters most? Contact our <?php echo esc_html($location_name); ?> office today for a free, personalized insurance quote.</p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="<?php echo esc_url(home_url('/quote')); ?>" class="btn btn-lg quote-form-btn">
                            <i class="fas fa-paper-plane me-2"></i>Get My Free Quote
                        </a>
                        <?php if ($location_phone): ?>
                        <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9]/', '', $location_phone)); ?>" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-phone me-2"></i>Call (<?php echo esc_html($location_phone); ?>)
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LocalBusiness Schema Markup -->
    <?php if ($location_address && $location_phone): ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Sperling Insurance - <?php echo esc_js($location_name); ?>",
        "image": "<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>",
        "@id": "<?php echo esc_url(get_permalink()); ?>",
        "url": "<?php echo esc_url(home_url()); ?>",
        "telephone": "<?php echo esc_js($location_phone); ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "<?php echo esc_js($location_address); ?>",
            "addressLocality": "<?php echo esc_js($location_name); ?>",
            "addressRegion": "SD",
            "postalCode": "57103",
            "addressCountry": "US"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "",
            "longitude": ""
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday"
            ],
            "opens": "08:00",
            "closes": "17:00"
        },
        "sameAs": [
            "<?php echo esc_url(home_url()); ?>"
        ]
    }
    </script>
    <?php endif; ?>

</main>

<?php
get_footer();
?>

