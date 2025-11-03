<?php
/**
 * Sperling Theme Functions
 *
 * @package Sperling
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function sperling_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'sperling'),
    ));
    
    // Add support for ACF Options Page (if ACF is active)
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title' => 'Theme Settings',
            'menu_title' => 'Theme Settings',
            'menu_slug' => 'theme-settings',
            'capability' => 'edit_posts',
        ));
    }
}
add_action('after_setup_theme', 'sperling_setup');

/**
 * Enqueue Styles and Scripts
 */
function sperling_scripts() {
    // Bootstrap 5 CSS
    wp_enqueue_style('bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css', array(), '5.3.0');
    
    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    
    // Theme Stylesheet
    wp_enqueue_style('sperling-style', get_stylesheet_uri(), array('bootstrap-css'), '1.0.0');
    
    // Bootstrap 5 JS
    wp_enqueue_script('bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js', array(), '5.3.0', true);
    
    // Custom JavaScript
    wp_enqueue_script('sperling-script', get_template_directory_uri() . '/assets/js/main.js', array('bootstrap-js'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'sperling_scripts');

/**
 * Fallback menu if no menu is set
 */
function sperling_fallback_menu() {
    echo '<ul class="navbar-nav ms-auto">';
    echo '<li class="nav-item"><a class="nav-link" href="#home">Home</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="#services">Services</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="#about">About</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>';
    echo '<li class="nav-item"><a class="nav-link btn btn-primary text-white ms-2 px-3" href="#quote">Get Quote</a></li>';
    echo '</ul>';
}

/**
 * Bootstrap Nav Walker
 */
class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        $classes[] = 'nav-item';

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $class_names .'>';

        $attributes = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
        $attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target     ) .'"' : '';
        $attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn        ) .'"' : '';
        $attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url        ) .'"' : '';

        $link_class = 'nav-link';
        if (strpos($item->title, 'Get Quote') !== false) {
            $link_class .= ' btn btn-primary text-white ms-2 px-3';
        }

        $item_output = isset($args->before) ? $args->before : '';
        $item_output .= '<a class="' . $link_class . '"' . $attributes .'>';
        $item_output .= (isset($args->link_before) ? $args->link_before : '') . apply_filters('the_title', $item->title, $item->ID) . (isset($args->link_after) ? $args->link_after : '');
        $item_output .= '</a>';
        $item_output .= isset($args->after) ? $args->after : '';

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "</li>\n";
    }
}

