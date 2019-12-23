<?php
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version 	1.0.3
 * 
 * CMSMasters Donations Functions
 * Created by CMSMasters
 * 
 */


/* Load Parts */
require_once(get_template_directory() . '/cmsmasters-donations/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/plugin-colors.php');
require_once(get_template_directory() . '/cmsmasters-donations/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/plugin-fonts.php');
require_once(get_template_directory() . '/cmsmasters-donations/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/function/plugin-template-functions.php');
require_once(get_template_directory() . '/cmsmasters-donations/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/admin/plugin-options.php');


/* Register CSS Styles and Scripts */
function children_charity_donations_register_styles_scripts() {
	// Styles
	wp_enqueue_style('children-charity-donations-style', get_template_directory_uri() . '/cmsmasters-donations/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/plugin-style.css', array(), '1.0.0', 'screen');
	
	wp_enqueue_style('children-charity-donations-adaptive', get_template_directory_uri() . '/cmsmasters-donations/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/plugin-adaptive.css', array(), '1.0.0', 'screen');
	
	
	if (is_rtl()) {
		wp_enqueue_style('children-charity-donations-rtl', get_template_directory_uri() . '/cmsmasters-donations/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/css/plugin-rtl.css', array(), '1.0.0', 'screen');
	}
	
	
	// Scripts
	wp_enqueue_script('children-charity-donations-script', get_template_directory_uri() . '/cmsmasters-donations/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/js/jquery.plugin-script.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'children_charity_donations_register_styles_scripts');



/* Scripts for Admin */
function children_charity_donation_admin_scripts() {
	wp_enqueue_script('children-charity-settings-toggle', get_template_directory_uri() . '/cmsmasters-donations/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/admin/js/plugin-settings-toggle.js', array('jquery'), '1.0.0', true);
	
	wp_localize_script('children-charity-settings-toggle', 'cmsmasters_donations_settings', array( 
		'shortname' => 	'children-charity' 
	));
}

add_action('admin_enqueue_scripts', 'children_charity_donation_admin_scripts');



/* Register Post Types in Author & Date Archive */
function children_charity_donations_archive($post_types) {
	$post_types[] = 'campaign';
	
	
	return $post_types;
}

add_filter('post_types_archive_filter', 'children_charity_donations_archive');


/* Donation Page Layout */
function children_charity_donations_donation_page_layout($cmsmasters_layout) {
	if (is_singular('donation')) {
		$cmsmasters_layout = 'fullwidth';
	}
	
	
	return $cmsmasters_layout;
}

add_filter('cmsmasters_theme_page_layout_filter', 'children_charity_donations_donation_page_layout');

