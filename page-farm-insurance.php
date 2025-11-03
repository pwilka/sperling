<?php
/**
 * Template Name: Farm Insurance Page
 * 
 * Template for Farm & Ranch Insurance page with detailed content sections
 * 
 * @package Sperling
 */

get_header();

// Get ACF fields or use defaults
$hero_title = get_field('hero_title') ?: 'Farm & Ranch Insurance in Sioux Falls, SD';
$hero_subtitle = get_field('hero_subtitle') ?: 'Comprehensive Protection for South Dakota Farms';
$hero_description = get_field('hero_description') ?: 'Your farm is more than acreage—it\'s your livelihood. As a family-owned, independent agency in Sioux Falls, we design farm and ranch insurance that protects your home, barns, equipment, livestock, and liability under one roof. We serve producers across Sioux Falls, Garretson, and rural South Dakota with straightforward guidance and local service.';
?>

<main id="main" class="site-main">
    
    <!-- Farm Insurance Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center mb-4">
                    <i class="fas fa-tractor mb-4" style="font-size: 4rem; color: var(--accent-teal);"></i>
                    <h1 class="display-4 fw-bold mb-3"><?php echo esc_html($hero_title); ?></h1>
                    <h2 class="h3 fw-normal mb-4"><?php echo esc_html($hero_subtitle); ?></h2>
                    <?php if ($hero_description): ?>
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <p class="lead text-start"><?php echo wp_kses_post($hero_description); ?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="mt-4">
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary btn-lg me-3">Get a Free Quote</a>
                        <a href="#about-coverage" class="btn btn-outline-light btn-lg">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About This Coverage Section -->
    <section class="py-5" id="about-coverage">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="farm-insurance-content">
                        <?php 
                        // Output editor content for Rank Math SEO analysis (hidden from users)
                        if (have_posts()): 
                            while (have_posts()): the_post();
                                $editor_content = get_the_content();
                                if (!empty(trim($editor_content))):
                                    // Hide editor content from display but keep it for Rank Math
                                    echo '<div class="sr-only" style="position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); border: 0;">';
                                    the_content();
                                    echo '</div>';
                                endif;
                            endwhile;
                            rewind_posts();
                        endif;
                        ?>
                        <!-- Hardcoded content for display (beautiful formatting) - Always shown -->
                        <h2>About This Coverage</h2>
                        <p>Farm insurance combines elements of homeowners, commercial property, and liability coverage into one policy tailored to how you operate. Whether you run a small hobby farm or a multi-location operation, we help you build a policy that fits today and scales for tomorrow.</p>

                        <h3>Core Protections</h3>
                        <ul>
                            <li><strong>Farm Dwelling & Personal Property:</strong> Coverage for your farmhouse, belongings, and detached garages.</li>
                            <li><strong>Farm Outbuildings:</strong> Barns, grain bins, machine sheds, shops, and fencing.</li>
                            <li><strong>Equipment & Tools:</strong> Tractors, combines, skid steers, and specialized implements—on and off premises.</li>
                            <li><strong>Livestock:</strong> Cattle, hogs, sheep, poultry, and scheduled high-value animals.</li>
                            <li><strong>Liability:</strong> Bodily injury, property damage, premises liability, and farm operations liability.</li>
                            <li><strong>Business Interruption:</strong> Lost income and extra expense after a covered loss.</li>
                            <li><strong>Optional Coverages:</strong> Peak season inventory, custom farming, boarding/agribusiness exposures, cargo/transport, and pollution liability.</li>
                        </ul>
                        <p>
                            <a href="<?php echo esc_url(home_url('/business-insurance-south-dakota')); ?>">Business Insurance South Dakota</a> | 
                            <a href="<?php echo esc_url(home_url('/home-insurance-sioux-falls')); ?>">Home Insurance Sioux Falls</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Sioux Falls Farmers Choose Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="farm-insurance-content">
                        <h2>Why Sioux Falls Farmers Choose Sperling Insurance</h2>
                        <p>For 20+ years, our team has paired local know-how with top carriers to keep South Dakota operations running—even when weather and markets don't cooperate. We're easy to reach, we explain every option in plain language, and we advocate for you at claim time. As an independent insurance agency in Sioux Falls, we shop multiple insurers to help you secure strong coverage and value.</p>

                        <h3>Local Advantages</h3>
                        <ul>
                            <li><strong>Independent & Family-Owned:</strong> Real people, real answers, right here in Sioux Falls and Garretson.</li>
                            <li><strong>Farm-Focused Expertise:</strong> We understand planting windows, custom harvesting, and livestock risk.</li>
                            <li><strong>Carrier Choice:</strong> Access to regional and national farm & ranch markets for competitive pricing.</li>
                            <li><strong>Claims Support:</strong> When a storm rolls through Minnehaha County, we're on the phone—with you and the adjuster.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Carriers & Coverage Options Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="farm-insurance-content">
                        <h2>Our Carriers & Coverage Options</h2>
                        <p>We partner with respected farm insurers to customize protection for your property, livestock, and income.</p>

                        <h3>Popular Add-Ons in South Dakota</h3>
                        <ul>
                            <li><strong>Equipment Breakdown & Scheduled Machinery:</strong> Broader protection for high-value units.</li>
                            <li><strong>Crop/Hail & Livestock Enhancements:</strong> Ask about private products to complement federal crop programs.</li>
                            <li><strong>Farm Auto & Truck:</strong> From grain trucks to service pickups—bundle with <a href="<?php echo esc_url(home_url('/auto-insurance-sioux-falls')); ?>">Auto Insurance Sioux Falls</a>.</li>
                            <li><strong>Umbrella Liability:</strong> Extra protection for farm and personal liability.</li>
                            <li><strong>Dwelling Replacement Cost:</strong> Helps rebuild the farmhouse without depreciation surprises.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cost Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="farm-insurance-content">
                        <h2>How Much Does Farm Insurance Cost in South Dakota?</h2>
                        <p>Pricing depends on acreage, buildings, machinery values, livestock, revenue, and liability limits. Small farms in South Dakota may start with lower premiums by scheduling only essential buildings and equipment, then adding coverage as operations grow. Larger ranches and dairy farms often need broader liability and business income protection, which increases cost but reduces risk. The best way to get accurate farm insurance cost in South Dakota is a custom quote that reflects your exact operation.</p>

                        <h3>Ways to Save</h3>
                        <ul>
                            <li><strong>Bundle Policies:</strong> Combine farm, auto, and umbrella for multi-policy discounts.</li>
                            <li><strong>Correct Valuations:</strong> Right-size building and equipment values to today's replacement costs.</li>
                            <li><strong>Higher Deductibles:</strong> Consider a deductible that fits your tolerance for risk and cash flow.</li>
                            <li><strong>Risk Improvements:</strong> Security lighting, fencing, and updated wiring can help with eligibility and pricing.</li>
                        </ul>
                        <p><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact Page for a Free Quote</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Small & Hobby Farms Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="farm-insurance-content">
                        <h2>Farm Insurance for Small & Hobby Farms</h2>
                        <p>Raising a few beef cattle, selling produce at the Falls Park Farmers Market, or boarding a couple of horses? We'll help you choose essential protections—like liability, equipment, and limited outbuilding coverage—without paying for what you don't need. Ask for a "small farm" package built for part-time and direct-to-consumer operations in South Dakota.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dairy Farms Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="farm-insurance-content">
                        <h2>Farm Insurance for Dairy Farms in South Dakota</h2>
                        <p>Dairy operations face unique risks—from bulk tank contamination to equipment breakdown and business interruption. We can tailor coverage for milking parlors, refrigeration, backup power, and livestock mortality options so milk keeps moving even when machinery doesn't.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="display-5 fw-bold text-dark text-center mb-5">FAQ: Farm Insurance Near Me — Sioux Falls & Statewide</h2>
                    <div class="accordion" id="farmInsuranceFaqAccordion">
                        <div class="accordion-item faq-item mb-3">
                            <h3 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                    What's the difference between farm insurance and homeowners insurance?
                                </button>
                            </h3>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#farmInsuranceFaqAccordion">
                                <div class="accordion-body">
                                    <p>Homeowners policies aren't designed for commercial exposures like livestock liability, farm employees, or custom farming. Farm insurance blends home and business protection, insuring outbuildings, machinery, livestock, and farm liability in ways homeowners insurance can't. If you have any income from the land, let's review options on our <a href="<?php echo esc_url(home_url('/home-insurance-sioux-falls')); ?>">Home Insurance Sioux Falls</a> and farm pages to avoid coverage gaps.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item faq-item mb-3">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                    How do I get farm insurance quotes in Sioux Falls?
                                </button>
                            </h3>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#farmInsuranceFaqAccordion">
                                <div class="accordion-body">
                                    <p>Easy—our independent agency shops multiple farm carriers for you. Share a list of buildings, equipment, livestock counts, and any custom operations, and we'll deliver side-by-side farm insurance quotes in Sioux Falls. Start here: <a href="<?php echo esc_url(home_url('/contact')); ?>">Contact Page for a Free Quote</a>.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item faq-item mb-3">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                    How much farm liability do I need?
                                </button>
                            </h3>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#farmInsuranceFaqAccordion">
                                <div class="accordion-body">
                                    <p>Many South Dakota farms start with $1M farm liability and add a personal umbrella for extra protection. If you host agritourism, sell direct to consumer, or custom farm, we'll discuss higher limits.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item faq-item mb-3">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                    Do you cover ranches and crop farms across South Dakota?
                                </button>
                            </h3>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#farmInsuranceFaqAccordion">
                                <div class="accordion-body">
                                    <p>Yes. From Garretson to Yankton and across the state, we insure row-crop, cow/calf, feedlot, and mixed operations. Learn more on <a href="<?php echo esc_url(home_url('/farm-and-ranch-insurance-south-dakota')); ?>">Farm and Ranch Insurance South Dakota</a>.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item faq-item mb-3">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                    Can I bundle farm trucks and personal autos?
                                </button>
                            </h3>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#farmInsuranceFaqAccordion">
                                <div class="accordion-body">
                                    <p>Absolutely. Bundling farm auto with personal vehicles can simplify billing and may save money. See <a href="<?php echo esc_url(home_url('/auto-insurance-sioux-falls')); ?>">Auto Insurance Sioux Falls</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="py-5" style="background: linear-gradient(135deg, var(--primary-blue) 0%, #001a5e 100%); color: white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-4">Get a Free Farm Insurance Quote Today</h2>
                    <p class="lead mb-4">Protect your livelihood with a local team that knows South Dakota agriculture. Request free farm insurance quotes in Sioux Falls now, and we'll compare carriers, explain coverage in plain English, and build a plan that fits your budget.</p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-lg quote-form-btn">
                            <i class="fas fa-paper-plane me-2"></i>Get Your Free Quote
                        </a>
                        <a href="tel:605-334-7350" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-phone me-2"></i>Call (605) 334-7350
                        </a>
                    </div>
                    <p class="mt-4 mb-0">
                        <small>Call our Sioux Falls office on Bahnson Ave, visit our Garretson location, or start online.</small>
                    </p>
                    <p class="mt-3 mb-0">
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" style="color: white; text-decoration: underline;">Contact Page for a Free Quote</a> | 
                        <a href="<?php echo esc_url(home_url('/about')); ?>" style="color: white; text-decoration: underline;">About Sperling Insurance</a> | 
                        <a href="<?php echo esc_url(home_url('/business-insurance-south-dakota')); ?>" style="color: white; text-decoration: underline;">Business Insurance South Dakota</a> | 
                        <a href="<?php echo esc_url(home_url('/home-insurance-sioux-falls')); ?>" style="color: white; text-decoration: underline;">Home Insurance Sioux Falls</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
// FAQ Schema for SEO
$faq_schema = array(
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array(
        array(
            '@type' => 'Question',
            'name' => 'What\'s the difference between farm insurance and homeowners insurance?',
            'acceptedAnswer' => array(
                '@type' => 'Answer',
                'text' => 'Homeowners policies aren\'t designed for commercial exposures like livestock liability, farm employees, or custom farming. Farm insurance blends home and business protection, insuring outbuildings, machinery, livestock, and farm liability in ways homeowners insurance can\'t.'
            )
        ),
        array(
            '@type' => 'Question',
            'name' => 'How do I get farm insurance quotes in Sioux Falls?',
            'acceptedAnswer' => array(
                '@type' => 'Answer',
                'text' => 'Easy—our independent agency shops multiple farm carriers for you. Share a list of buildings, equipment, livestock counts, and any custom operations, and we\'ll deliver side-by-side farm insurance quotes in Sioux Falls.'
            )
        ),
        array(
            '@type' => 'Question',
            'name' => 'How much farm liability do I need?',
            'acceptedAnswer' => array(
                '@type' => 'Answer',
                'text' => 'Many South Dakota farms start with $1M farm liability and add a personal umbrella for extra protection. If you host agritourism, sell direct to consumer, or custom farm, we\'ll discuss higher limits.'
            )
        ),
        array(
            '@type' => 'Question',
            'name' => 'Do you cover ranches and crop farms across South Dakota?',
            'acceptedAnswer' => array(
                '@type' => 'Answer',
                'text' => 'Yes. From Garretson to Yankton and across the state, we insure row-crop, cow/calf, feedlot, and mixed operations.'
            )
        ),
        array(
            '@type' => 'Question',
            'name' => 'Can I bundle farm trucks and personal autos?',
            'acceptedAnswer' => array(
                '@type' => 'Answer',
                'text' => 'Absolutely. Bundling farm auto with personal vehicles can simplify billing and may save money.'
            )
        )
    )
);
?>

<script type="application/ld+json">
<?php echo wp_json_encode($faq_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<?php
get_footer();
?>
