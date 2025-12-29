<?php
/**
 * WordPress Page Creation Script
 * 
 * This script creates all service pages, assigns templates, and sets up navigation.
 * 
 * HOW TO USE:
 * 1. Upload this file to your WordPress root directory (same folder as wp-config.php)
 * 2. Access it via browser: https://sperlinginsurance.com/create-all-pages.php
 * 3. OR run via WP-CLI: wp eval-file create-all-pages.php
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

// Page definitions with template assignments
$pages = [
    // Personal Insurance
    ['title' => 'Auto Insurance', 'slug' => 'auto-insurance', 'template' => 'page-auto-insurance.php'],
    ['title' => 'Home Insurance', 'slug' => 'home-insurance', 'template' => 'page-home-insurance.php'],
    ['title' => 'Boat & RV Insurance', 'slug' => 'boat-rv-insurance', 'template' => 'page-boat-rv-insurance.php'],
    ['title' => 'Motorcycle & ATV Insurance', 'slug' => 'motorcycle-atv-insurance', 'template' => 'page-motorcycle-atv-insurance.php'],
    ['title' => 'Life Insurance', 'slug' => 'life-insurance', 'template' => 'page-life-insurance.php'],
    ['title' => 'Health Insurance', 'slug' => 'health-insurance', 'template' => 'page-health-insurance.php'],
    ['title' => 'Medicare Supplements', 'slug' => 'medicare-supplements', 'template' => 'page-medicare-supplements.php'],
    ['title' => 'Umbrella Insurance', 'slug' => 'umbrella-insurance', 'template' => 'page-umbrella-insurance.php'],
    ['title' => 'Renters Insurance', 'slug' => 'renters-insurance', 'template' => 'page-renters-insurance.php'],
    ['title' => 'Landlord Insurance', 'slug' => 'landlord-insurance', 'template' => 'page-landlord-insurance.php'],
    ['title' => 'Inland Marine Insurance', 'slug' => 'inland-marine', 'template' => 'page-inland-marine.php'],
    
    // Farm & Agricultural
    ['title' => 'Rural Property Insurance', 'slug' => 'rural-property-insurance', 'template' => 'page-rural-property-insurance.php'],
    ['title' => 'Farm Inland Marine Insurance', 'slug' => 'farm-inland-marine', 'template' => 'page-farm-inland-marine.php'],
    
    // Business & Commercial
    ['title' => 'Business Insurance', 'slug' => 'business-insurance', 'template' => 'page-business-insurance.php'],
    ['title' => 'BOP Insurance', 'slug' => 'bop-insurance', 'template' => 'page-bop-insurance.php'],
    ['title' => 'General Liability Insurance', 'slug' => 'general-liability-insurance', 'template' => 'page-general-liability-insurance.php'],
    ['title' => 'Contractors Insurance', 'slug' => 'contractors-insurance', 'template' => 'page-contractors-insurance.php'],
    ['title' => 'Workers Compensation Insurance', 'slug' => 'workers-compensation', 'template' => 'page-workers-compensation.php'],
    ['title' => 'Commercial Auto Insurance', 'slug' => 'commercial-auto-insurance', 'template' => 'page-commercial-auto-insurance.php'],
    ['title' => 'Business Life Insurance', 'slug' => 'business-life-insurance', 'template' => 'page-business-life-insurance.php'],
    ['title' => 'Business Health Insurance', 'slug' => 'business-health-insurance', 'template' => 'page-business-health-insurance.php'],
    ['title' => 'Builders Risk Insurance', 'slug' => 'builders-risk-insurance', 'template' => 'page-builders-risk-insurance.php'],
    
    // Supporting Pages
    ['title' => 'About Us', 'slug' => 'about-us', 'template' => 'page-about.php'],
    ['title' => 'Privacy Policy', 'slug' => 'privacy-policy', 'template' => 'page-privacy-policy.php'],
    ['title' => 'Terms of Use', 'slug' => 'terms-of-use', 'template' => 'page-terms-of-use.php'],
];

$created = [];
$updated = [];
$errors = [];

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
        
        $updated[] = $title;
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
            $created[] = $title;
        } else {
            $errors[] = $title . ': ' . ($page_id->get_error_message() ?? 'Unknown error');
        }
    }
}

// Output results
echo "<h1>Page Creation Results</h1>";
echo "<h2>Created Pages (" . count($created) . "):</h2>";
echo "<ul>";
foreach ($created as $title) {
    echo "<li>$title</li>";
}
echo "</ul>";

echo "<h2>Updated Pages (" . count($updated) . "):</h2>";
echo "<ul>";
foreach ($updated as $title) {
    echo "<li>$title</li>";
}
echo "</ul>";

if (!empty($errors)) {
    echo "<h2>Errors:</h2>";
    echo "<ul>";
    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";
}

echo "<p><strong>Total Pages Processed:</strong> " . (count($created) + count($updated)) . "</p>";
echo "<p><em>Remember to delete this file after running!</em></p>";

