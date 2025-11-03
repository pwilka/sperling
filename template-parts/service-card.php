<?php
/**
 * Template part for displaying a service card
 *
 * @package Sperling
 * 
 * @param array $args - Array with: icon, title, description
 */

if (!isset($args)) {
    return;
}

$icon = $args['icon'] ?? 'fa-shield-alt';
$title = $args['title'] ?? '';
$description = $args['description'] ?? '';
?>

<div class="card service-card h-100 text-center p-4">
    <?php if ($icon): ?>
        <i class="fas <?php echo esc_attr($icon); ?> service-icon mb-3"></i>
    <?php endif; ?>
    <?php if ($title): ?>
        <h5><?php echo esc_html($title); ?></h5>
    <?php endif; ?>
    <?php if ($description): ?>
        <p><?php echo wp_kses_post($description); ?></p>
    <?php endif; ?>
</div>

