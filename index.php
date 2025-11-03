<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 *
 * @package Sperling
 */

get_header();
?>

<main id="main" class="site-main">
    <div class="container py-5">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/content', get_post_type());
            }
        } else {
            get_template_part('template-parts/content', 'none');
        }
        ?>
    </div>
</main>

<?php
get_footer();
?>
