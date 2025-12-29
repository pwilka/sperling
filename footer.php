    <!-- Footer -->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <?php 
                    $logo = get_template_directory_uri() . '/assets/images/logo.png';
                    if (file_exists(get_template_directory() . '/assets/images/logo.png')) {
                        echo '<img src="' . esc_url($logo) . '" alt="' . esc_attr(get_bloginfo('name')) . '" style="height: 40px;">';
                    } else {
                        echo '<img src="https://mydlandinsurance.com/wp-content/uploads/Sperling-Insurance-Horiz-Full-01-300x150.jpg" alt="' . esc_attr(get_bloginfo('name')) . '" style="height: 40px;">';
                    }
                    ?>
                </div>
                <div class="col-md-6 text-md-end mt-3 mt-md-0">
                    <p class="mb-0">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>

<!-- Organization Schema Markup for Local SEO -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "InsuranceAgency",
    "name": "Sperling Insurance",
    "image": "<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>",
    "@id": "<?php echo esc_url(home_url()); ?>",
    "url": "<?php echo esc_url(home_url()); ?>",
    "telephone": "(605) 334-7350",
    "priceRange": "$$",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "220 S. Bahnson Ave.",
        "addressLocality": "Sioux Falls",
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
    "areaServed": {
        "@type": "City",
        "name": "Sioux Falls"
    },
    "serviceArea": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": "",
            "longitude": ""
        }
    },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Insurance Services",
        "itemListElement": [
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Auto Insurance",
                    "description": "Auto insurance in Sioux Falls, South Dakota"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Home Insurance",
                    "description": "Home insurance in Sioux Falls, South Dakota"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Business Insurance",
                    "description": "Business insurance in Sioux Falls, South Dakota"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Farm Insurance",
                    "description": "Farm and ranch insurance in South Dakota"
                }
            }
        ]
    },
    "sameAs": [
        "<?php echo esc_url(home_url()); ?>"
    ]
}
</script>

</body>
</html>

