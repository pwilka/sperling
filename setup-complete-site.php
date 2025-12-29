<?php
/**
 * Complete Site Setup Script for Sperling Insurance
 * 
 * This script creates ALL pages, assigns templates, sets up navigation menus,
 * and configures everything automatically.
 * 
 * HOW TO USE:
 * 1. Upload this file to your WordPress root directory (same folder as wp-config.php)
 * 2. Access via browser: https://sperlinginsurance.local/setup-complete-site.php
 * 3. OR run via WP-CLI: wp eval-file setup-complete-site.php
 * 
 * SECURITY: Delete this file after running!
 */

// Security check - only allow if logged in as admin
if (!defined('ABSPATH')) {
    require_once('wp-load.php');
}

if (!current_user_can('manage_options')) {
    die('You must be logged in as an administrator to run this script.');
}

// Start output
echo "<!DOCTYPE html><html><head><title>Site Setup - Sperling Insurance</title>";
echo "<style>body{font-family:Arial,sans-serif;max-width:1200px;margin:40px auto;padding:20px;}h1{color:#003366;}h2{color:#0066cc;margin-top:30px;}ul{line-height:1.8;}li.success{color:green;}li.error{color:red;}li.info{color:blue;}.section{margin:20px 0;padding:15px;background:#f5f5f5;border-radius:5px;}</style></head><body>";
echo "<h1>🚀 Sperling Insurance - Complete Site Setup</h1>";
echo "<p><strong>This script will create all pages, set up menus, and configure your site.</strong></p>";

$results = [
    'created' => [],
    'updated' => [],
    'errors' => [],
    'menu_items' => []
];

// Page definitions with template assignments and menu organization
$pages = [
    // Personal Insurance
    ['title' => 'Auto Insurance', 'slug' => 'auto-insurance', 'template' => 'page-auto-insurance.php', 'menu' => 'Personal Insurance', 'order' => 1],
    ['title' => 'Home Insurance', 'slug' => 'home-insurance', 'template' => 'page-home-insurance.php', 'menu' => 'Personal Insurance', 'order' => 2],
    ['title' => 'Boat & RV Insurance', 'slug' => 'boat-rv-insurance', 'template' => 'page-boat-rv-insurance.php', 'menu' => 'Personal Insurance', 'order' => 3],
    ['title' => 'Motorcycle & ATV Insurance', 'slug' => 'motorcycle-atv-insurance', 'template' => 'page-motorcycle-atv-insurance.php', 'menu' => 'Personal Insurance', 'order' => 4],
    ['title' => 'Life Insurance', 'slug' => 'life-insurance', 'template' => 'page-life-insurance.php', 'menu' => 'Personal Insurance', 'order' => 5],
    ['title' => 'Health Insurance', 'slug' => 'health-insurance', 'template' => 'page-health-insurance.php', 'menu' => 'Personal Insurance', 'order' => 6],
    ['title' => 'Medicare Supplements', 'slug' => 'medicare-supplements', 'template' => 'page-medicare-supplements.php', 'menu' => 'Personal Insurance', 'order' => 7],
    ['title' => 'Umbrella Insurance', 'slug' => 'umbrella-insurance', 'template' => 'page-umbrella-insurance.php', 'menu' => 'Personal Insurance', 'order' => 8],
    ['title' => 'Renters Insurance', 'slug' => 'renters-insurance', 'template' => 'page-renters-insurance.php', 'menu' => 'Personal Insurance', 'order' => 9],
    ['title' => 'Landlord Insurance', 'slug' => 'landlord-insurance', 'template' => 'page-landlord-insurance.php', 'menu' => 'Personal Insurance', 'order' => 10],
    ['title' => 'Inland Marine Insurance', 'slug' => 'inland-marine', 'template' => 'page-inland-marine.php', 'menu' => 'Personal Insurance', 'order' => 11],
    
    // Farm & Agricultural
    ['title' => 'Farm & Ranch Insurance', 'slug' => 'farm-insurance', 'template' => 'page-farm-insurance.php', 'menu' => 'Farm Insurance', 'order' => 1],
    ['title' => 'Rural Property Insurance', 'slug' => 'rural-property-insurance', 'template' => 'page-rural-property-insurance.php', 'menu' => 'Farm Insurance', 'order' => 2],
    ['title' => 'Farm Inland Marine Insurance', 'slug' => 'farm-inland-marine', 'template' => 'page-farm-inland-marine.php', 'menu' => 'Farm Insurance', 'order' => 3],
    
    // Business & Commercial
    ['title' => 'Business Insurance', 'slug' => 'business-insurance', 'template' => 'page-business-insurance.php', 'menu' => 'Business Insurance', 'order' => 1],
    ['title' => 'BOP Insurance', 'slug' => 'bop-insurance', 'template' => 'page-bop-insurance.php', 'menu' => 'Business Insurance', 'order' => 2],
    ['title' => 'General Liability Insurance', 'slug' => 'general-liability-insurance', 'template' => 'page-general-liability-insurance.php', 'menu' => 'Business Insurance', 'order' => 3],
    ['title' => 'Contractors Insurance', 'slug' => 'contractors-insurance', 'template' => 'page-contractors-insurance.php', 'menu' => 'Business Insurance', 'order' => 4],
    ['title' => 'Workers Compensation Insurance', 'slug' => 'workers-compensation', 'template' => 'page-workers-compensation.php', 'menu' => 'Business Insurance', 'order' => 5],
    ['title' => 'Commercial Auto Insurance', 'slug' => 'commercial-auto-insurance', 'template' => 'page-commercial-auto-insurance.php', 'menu' => 'Business Insurance', 'order' => 6],
    ['title' => 'Business Life Insurance', 'slug' => 'business-life-insurance', 'template' => 'page-business-life-insurance.php', 'menu' => 'Business Insurance', 'order' => 7],
    ['title' => 'Business Health Insurance', 'slug' => 'business-health-insurance', 'template' => 'page-business-health-insurance.php', 'menu' => 'Business Insurance', 'order' => 8],
    ['title' => 'Builders Risk Insurance', 'slug' => 'builders-risk-insurance', 'template' => 'page-builders-risk-insurance.php', 'menu' => 'Business Insurance', 'order' => 9],
    
    // Supporting Pages
    ['title' => 'About Us', 'slug' => 'about-us', 'template' => 'page-about.php', 'menu' => 'Main Menu', 'order' => 10],
    ['title' => 'Privacy Policy', 'slug' => 'privacy-policy', 'template' => 'page-privacy-policy.php', 'menu' => 'Footer', 'order' => 1],
    ['title' => 'Terms of Use', 'slug' => 'terms-of-use', 'template' => 'page-terms-of-use.php', 'menu' => 'Footer', 'order' => 2],
];

echo "<div class='section'><h2>Step 1: Creating Pages</h2>";

// Create/Update all pages
foreach ($pages as $page_data) {
    $title = $page_data['title'];
    $slug = $page_data['slug'];
    $template = $page_data['template'];
    
    // Check if page already exists
    $existing_page = get_page_by_path($slug);
    
    if ($existing_page) {
        // Update existing page
        $page_id = wp_update_post([
            'ID' => $existing_page->ID,
            'post_title' => $title,
            'post_name' => $slug,
            'post_status' => 'publish',
        ]);
        
        // Update template
        update_post_meta($page_id, '_wp_page_template', $template);
        
        $results['updated'][] = ['title' => $title, 'id' => $page_id];
        echo "<p class='info'>✓ Updated: $title</p>";
    } else {
        // Create new page
        $page_id = wp_insert_post([
            'post_title' => $title,
            'post_name' => $slug,
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_content' => '', // Content is in template
        ]);
        
        if ($page_id && !is_wp_error($page_id)) {
            // Assign template
            update_post_meta($page_id, '_wp_page_template', $template);
            $results['created'][] = ['title' => $title, 'id' => $page_id, 'menu' => $page_data['menu'], 'order' => $page_data['order']];
            echo "<p class='success'>✓ Created: $title</p>";
        } else {
            $error_msg = is_wp_error($page_id) ? $page_id->get_error_message() : 'Unknown error';
            $results['errors'][] = "$title: $error_msg";
            echo "<p class='error'>✗ Error: $title - $error_msg</p>";
        }
    }
}

echo "</div>";

// Step 2: Set up navigation menus
echo "<div class='section'><h2>Step 2: Setting Up Navigation Menus</h2>";

// Get or create main menu
$main_menu = wp_get_nav_menu_object('Primary Menu');
if (!$main_menu) {
    $main_menu_id = wp_create_nav_menu('Primary Menu');
    echo "<p class='success'>✓ Created 'Primary Menu'</p>";
} else {
    $main_menu_id = $main_menu->term_id;
    echo "<p class='info'>✓ Using existing 'Primary Menu'</p>";
}

// Assign menu to location
$locations = get_theme_mod('nav_menu_locations');
if (!$locations) {
    $locations = [];
}
$locations['primary'] = $main_menu_id;
set_theme_mod('nav_menu_locations', $locations);
echo "<p class='success'>✓ Assigned menu to primary location</p>";

// Organize pages by menu
$menu_groups = [];
foreach ($results['created'] as $page) {
    $menu_name = $page['menu'] ?? 'Main Menu';
    if (!isset($menu_groups[$menu_name])) {
        $menu_groups[$menu_name] = [];
    }
    $menu_groups[$menu_name][] = $page;
}

// Add pages to main menu
$menu_order = 1;
foreach ($menu_groups as $group_name => $group_pages) {
    if ($group_name === 'Main Menu') {
        // Add individual pages to main menu
        foreach ($group_pages as $page) {
            wp_update_nav_menu_item($main_menu_id, 0, [
                'menu-item-title' => $page['title'],
                'menu-item-object' => 'page',
                'menu-item-object-id' => $page['id'],
                'menu-item-type' => 'post_type',
                'menu-item-status' => 'publish',
                'menu-item-position' => $menu_order++
            ]);
        }
    } elseif ($group_name !== 'Footer') {
        // Create submenu items for service categories
        $parent_id = wp_update_nav_menu_item($main_menu_id, 0, [
            'menu-item-title' => $group_name,
            'menu-item-type' => 'custom',
            'menu-item-url' => '#',
            'menu-item-status' => 'publish',
            'menu-item-position' => $menu_order++
        ]);
        
        foreach ($group_pages as $page) {
            wp_update_nav_menu_item($main_menu_id, 0, [
                'menu-item-title' => $page['title'],
                'menu-item-object' => 'page',
                'menu-item-object-id' => $page['id'],
                'menu-item-type' => 'post_type',
                'menu-item-status' => 'publish',
                'menu-item-parent-id' => $parent_id,
                'menu-item-position' => $menu_order++
            ]);
        }
    }
}

echo "<p class='success'>✓ Navigation menu configured</p>";
echo "</div>";

// Step 3: Summary
echo "<div class='section'><h2>✅ Setup Complete!</h2>";
echo "<h3>Summary:</h3>";
echo "<ul>";
echo "<li class='success'><strong>Created:</strong> " . count($results['created']) . " pages</li>";
echo "<li class='info'><strong>Updated:</strong> " . count($results['updated']) . " pages</li>";
if (!empty($results['errors'])) {
    echo "<li class='error'><strong>Errors:</strong> " . count($results['errors']) . "</li>";
}
echo "<li class='success'><strong>Navigation Menu:</strong> Configured</li>";
echo "</ul>";

echo "<h3>Next Steps:</h3>";
echo "<ol>";
echo "<li>Go to <strong>Appearance → Menus</strong> in WordPress admin to fine-tune navigation</li>";
echo "<li>Configure SEO settings with Rank Math for each page</li>";
echo "<li>Add featured images to pages (optional)</li>";
echo "<li><strong>Delete this file</strong> for security: <code>setup-complete-site.php</code></li>";
echo "</ol>";

echo "<h3>View Your Pages:</h3>";
echo "<ul>";
foreach ($results['created'] as $page) {
    $url = get_permalink($page['id']);
    echo "<li><a href='$url' target='_blank'>{$page['title']}</a></li>";
}
echo "</ul>";

echo "</div>";
echo "<p><strong>🎉 All done! Your site is ready to go.</strong></p>";
echo "</body></html>";

