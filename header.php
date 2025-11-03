<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                <?php 
                $logo = get_template_directory_uri() . '/assets/images/logo.png';
                if (file_exists(get_template_directory() . '/assets/images/logo.png')) {
                    echo '<img src="' . esc_url($logo) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
                } else {
                    // Fallback to external logo until uploaded
                    echo '<img src="https://mydlandinsurance.com/wp-content/uploads/Sperling-Insurance-Horiz-Full-01-300x150.jpg" alt="' . esc_attr(get_bloginfo('name')) . '">';
                }
                ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'navbar-nav ms-auto',
                    'fallback_cb' => 'sperling_fallback_menu',
                    'depth' => 2,
                    'walker' => new Bootstrap_Walker_Nav_Menu(),
                ));
                ?>
            </div>
        </div>
    </nav>

