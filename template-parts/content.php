<?php
/**
 * Template part for displaying posts
 *
 * @package Sperling
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mb-5'); ?>>
    <header class="entry-header mb-3">
        <?php
        if (is_singular()) {
            the_title('<h1 class="entry-title">', '</h1>');
        } else {
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>');
        }
        ?>
    </header>

    <div class="entry-content">
        <?php
        the_content();
        wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'sperling'),
            'after'  => '</div>',
        ));
        ?>
    </div>
</article>

