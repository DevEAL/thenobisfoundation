<?php 
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version		1.0.8
 * 
 * Theme Settings Defaults
 * Created by CMSMasters
 * 
 */


/* Theme Settings General Default Values */
if (!function_exists('children_charity_settings_general_defaults')) {

function children_charity_settings_general_defaults($id = false) {
	$settings = array( 
		'general' => array( 
			'children-charity' . '_theme_layout' => 			'liquid', 
			'children-charity' . '_logo_type' => 			'image', 
			'children-charity' . '_logo_url' => 				'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo.png', 
			'children-charity' . '_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_retina.png', 
			'children-charity' . '_logo_scroll_url' => 				'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_scroll.png', 
			'children-charity' . '_logo_scroll_url_retina' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_scroll_retina.png', 
			'children-charity' . '_logo_title' => 			get_bloginfo('name') ? get_bloginfo('name') : 'Children Charity', 
			'children-charity' . '_logo_subtitle' => 		'', 
			'children-charity' . '_logo_custom_color' => 	0, 
			'children-charity' . '_logo_title_color' => 		'', 
			'children-charity' . '_logo_subtitle_color' => 	'' 
		), 
		'bg' => array( 
			'children-charity' . '_bg_col' => 			'#e5e4e1', 
			'children-charity' . '_bg_img_enable' => 	1, 
			'children-charity' . '_bg_img' => 			'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/background.jpg', 
			'children-charity' . '_bg_rep' => 			'no-repeat', 
			'children-charity' . '_bg_pos' => 			'top center', 
			'children-charity' . '_bg_att' => 			'scroll', 
			'children-charity' . '_bg_size' => 			'cover' 
		), 
		'header' => array( 
			'children-charity' . '_fixed_header' => 					1, 
			'children-charity' . '_header_overlaps' => 				1, 
			'children-charity' . '_header_top_line' => 				0, 
			'children-charity' . '_header_top_height' => 			'34', 
			'children-charity' . '_header_top_line_short_info' => 	'', 
			'children-charity' . '_header_top_line_add_cont' => 		'social', 
			'children-charity' . '_header_styles' => 				'default', 
			'children-charity' . '_header_mid_height' => 			'170', 
			'children-charity' . '_header_bot_height' => 			'65', 
			'children-charity' . '_header_search' => 				0, 
			'children-charity' . '_header_add_cont' => 				'social', 
			'children-charity' . '_header_add_cont_cust_html' => 	'' 
		), 
		'content' => array( 
			'children-charity' . '_layout' => 					'r_sidebar', 
			'children-charity' . '_archives_layout' => 			'r_sidebar', 
			'children-charity' . '_search_layout' => 			'r_sidebar', 
			'children-charity' . '_other_layout' => 				'r_sidebar', 
			'children-charity' . '_heading_alignment' => 		'left', 
			'children-charity' . '_heading_scheme' => 			'default', 
			'children-charity' . '_heading_bg_image_enable' => 	0, 
			'children-charity' . '_heading_bg_image' => 			'', 
			'children-charity' . '_heading_bg_repeat' => 		'no-repeat', 
			'children-charity' . '_heading_bg_attachment' => 	'scroll', 
			'children-charity' . '_heading_bg_size' => 			'cover', 
			'children-charity' . '_heading_bg_color' => 			'rgba(50,51,56,0)', 
			'children-charity' . '_heading_height' => 			'150', 
			'children-charity' . '_breadcrumbs' => 				1, 
			'children-charity' . '_bottom_scheme' => 			'fourth', 
			'children-charity' . '_bottom_sidebar' => 			0, 
			'children-charity' . '_bottom_sidebar_layout' => 	'14141414' 
		), 
		'footer' => array( 
			'children-charity' . '_footer_scheme' => 				'footer', 
			'children-charity' . '_footer_type' => 					'small', 
			'children-charity' . '_footer_additional_content' => 	'social', 
			'children-charity' . '_footer_logo' => 					1, 
			'children-charity' . '_footer_logo_url' => 				'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer.png', 
			'children-charity' . '_footer_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer_retina.png', 
			'children-charity' . '_footer_nav' => 					1, 
			'children-charity' . '_footer_social' => 				1, 
			'children-charity' . '_footer_html' => 					'', 
			'children-charity' . '_footer_copyright' => 				'Children Charity' . ' &copy; ' . date('Y') . ' / ' . esc_html__('All Rights Reserved', 'children-charity') 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}


/* Theme Settings Fonts Default Values */
if (!function_exists('children_charity_settings_font_defaults')) {

function children_charity_settings_font_defaults($id = false) {
	$settings = array( 
		'content' => array( 
			'children-charity' . '_content_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'16', 
				'line_height' => 		'24', 
				'font_weight' => 		'300', 
				'font_style' => 		'normal' 
			) 
		), 
		'link' => array( 
			'children-charity' . '_link_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Dosis:300,400,500,700', 
				'font_size' => 			'18', 
				'line_height' => 		'24', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'children-charity' . '_link_hover_decoration' => 	'none' 
		), 
		'nav' => array( 
			'children-charity' . '_nav_title_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Dosis:300,400,500,700', 
				'font_size' => 			'18', 
				'line_height' => 		'24', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'children-charity' . '_nav_dropdown_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			) 
		), 
		'heading' => array( 
			'children-charity' . '_h1_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Dosis:300,400,500,700', 
				'font_size' => 			'40', 
				'line_height' => 		'52', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'children-charity' . '_h2_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Dosis:300,400,500,700', 
				'font_size' => 			'24', 
				'line_height' => 		'32', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'children-charity' . '_h3_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Dosis:300,400,500,700', 
				'font_size' => 			'18', 
				'line_height' => 		'26', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'children-charity' . '_h4_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Dosis:300,400,500,700', 
				'font_size' => 			'16', 
				'line_height' => 		'22', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'children-charity' . '_h5_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'13', 
				'line_height' => 		'18', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			), 
			'children-charity' . '_h6_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'11', 
				'line_height' => 		'16', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase', 
				'text_decoration' => 	'none' 
			) 
		), 
		'other' => array( 
			'children-charity' . '_button_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'11', 
				'line_height' => 		'40', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'children-charity' . '_small_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'500', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'children-charity' . '_input_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Roboto:300,300italic,400,400italic,500,500italic,700,700italic', 
				'font_size' => 			'15', 
				'line_height' => 		'24', 
				'font_weight' => 		'300', 
				'font_style' => 		'normal' 
			), 
			'children-charity' . '_quote_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Dosis:300,400,500,700', 
				'font_size' => 			'30', 
				'line_height' => 		'42', 
				'font_weight' => 		'300', 
				'font_style' => 		'normal' 
			) 
		),
		'google' => array( 
			'children-charity' . '_google_web_fonts' => array( 
				'Titillium+Web:300,300italic,400,400italic,600,600italic,700,700italic|Titillium Web',
				'Roboto:300,300italic,400,400italic,500,500italic,700,700italic|Roboto', 
				'Roboto+Condensed:400,400italic,700,700italic|Roboto Condensed', 
				'Open+Sans:300,300italic,400,400italic,700,700italic|Open Sans', 
				'Open+Sans+Condensed:300,300italic,700|Open Sans Condensed', 
				'Droid+Sans:400,700|Droid Sans', 
				'Droid+Serif:400,400italic,700,700italic|Droid Serif', 
				'PT+Sans:400,400italic,700,700italic|PT Sans', 
				'PT+Sans+Caption:400,700|PT Sans Caption', 
				'PT+Sans+Narrow:400,700|PT Sans Narrow', 
				'PT+Serif:400,400italic,700,700italic|PT Serif', 
				'Ubuntu:400,400italic,700,700italic|Ubuntu', 
				'Ubuntu+Condensed|Ubuntu Condensed', 
				'Headland+One|Headland One', 
				'Source+Sans+Pro:300,300italic,400,400italic,700,700italic|Source Sans Pro', 
				'Lato:400,400italic,700,700italic|Lato', 
				'Cuprum:400,400italic,700,700italic|Cuprum', 
				'Oswald:300,400,700|Oswald', 
				'Yanone+Kaffeesatz:300,400,700|Yanone Kaffeesatz', 
				'Lobster|Lobster', 
				'Lobster+Two:400,400italic,700,700italic|Lobster Two', 
				'Questrial|Questrial', 
				'Raleway:300,400,500,600,700|Raleway', 
				'Dosis:300,400,500,700|Dosis', 
				'Cutive+Mono|Cutive Mono', 
				'Quicksand:300,400,700|Quicksand', 
				'Montserrat:400,700|Montserrat', 
				'Cookie|Cookie'  
			) 
		)  
	);

	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// WP Color Picker Palettes
if (!function_exists('cmsmasters_color_picker_palettes')) {

function cmsmasters_color_picker_palettes() {
	$palettes = array( 
		'#908c92', 
		'#cd366b', 
		'#81256f', 
		'#44364e', 
		'#ffffff', 
		'#e5e4e1', 
		'#dfdfdf', 
		'#fcc41a'
	);
	
	
	return $palettes;
}

}



// Theme Settings Color Schemes Default Colors
if (!function_exists('children_charity_color_schemes_defaults')) {

function children_charity_color_schemes_defaults($id = false) {
	$settings = array( 
		'default' => array( // content default color scheme
			'color' => 		'#908c92', 
			'link' => 		'#cd366b', 
			'hover' => 		'#81256f', 
			'heading' => 	'#44364e', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#e5e4e1', 
			'border' => 	'#dfdfdf', 
			'secondary' =>	'#cd366b'
		), 
		'header' => array( // Header color scheme
			'mid_color' => 		'rgba(255,255,255,0.8)', 
			'mid_link' => 		'#ffffff', 
			'mid_hover' => 		'rgba(255,255,255,0.6)', 
			'mid_bg' => 		'rgba(255,255,255,0)', 
			'mid_bg_scroll' => 	'#362740', 
			'mid_border' => 	'rgba(255,255,255,.1)', 
			'bot_color' => 		'rgba(255,255,255,0.8)', 
			'bot_link' => 		'#ffffff', 
			'bot_hover' => 		'rgba(255,255,255,0.6)', 
			'bot_bg' => 		'rgba(255,255,255,0)', 
			'bot_bg_scroll' => 	'rgba(54,39,64,0.8)', 
			'bot_border' => 	'rgba(255,255,255,.1)' 
		), 
		'navigation' => array( // Navigation color scheme
			'title_link' => 			'#ffffff', 
			'title_link_hover' => 		'rgba(255,255,255,0.65)', 
			'title_link_current' => 	'rgba(255,255,255,0.65)', 
			'title_link_subtitle' => 	'rgba(255,255,255,0.6)', 
			'title_link_bg' => 			'rgba(255,255,255,0)', 
			'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
			'title_link_bg_current' => 	'rgba(255,255,255,0)', 
			'title_link_border' => 		'rgba(255,255,255,0)', 
			'dropdown_text' => 			'#5b4c62', 
			'dropdown_bg' => 			'#f2f1ed', 
			'dropdown_border' => 		'#f2f1ed', 
			'dropdown_link' => 			'#5b4c62', 
			'dropdown_link_hover' => 	'#d5377b', 
			'dropdown_link_subtitle' => '#9b949c', 
			'dropdown_link_highlight' => '#f2f1ed', 
			'dropdown_link_border' => 	'#f2f1ed' 
		), 
		'header_top' => array( // Header Top color scheme
			'color' => 					'rgba(255,255,255,0.7)', 
			'link' => 					'#ffffff', 
			'hover' => 					'#d5377b', 
			'bg' => 					'#42324d', 
			'border' => 				'#42324d', 
			'title_link' => 			'#ffffff', 
			'title_link_hover' => 		'#ffffff', 
			'title_link_bg' => 			'#53425f', 
			'title_link_bg_hover' => 	'#d5377b', 
			'title_link_border' => 		'#42324d', 
			'dropdown_bg' => 			'#f2f1ed', 
			'dropdown_border' => 		'#f2f1ed', 
			'dropdown_link' => 			'#5b4c62', 
			'dropdown_link_hover' => 	'#d5377b', 
			'dropdown_link_highlight' => '#f2f1ed', 
			'dropdown_link_border' => 	'#f2f1ed' 
		), 
		'footer' => array( // Footer color scheme
			'color' => 		'rgba(255,255,255,0.6)', 
			'link' => 		'rgba(255,255,255,0.7)', 
			'hover' => 		'#ffffff', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#281e2f', 
			'alternate' => 	'#382a41', 
			'border' => 	'rgba(255,255,255,0.08)', 
			'secondary' =>	'rgba(255,255,255,0.7)'
		), 
		'first' => array( // custom color scheme 1
			'color' => 		'#908c92', 
			'link' => 		'#44364e', 
			'hover' => 		'#81256f', 
			'heading' => 	'#cd366b', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#e5e4e1', 
			'border' => 	'#dfdfdf', 
			'secondary' =>	'#ea8a18'
		), 
		'second' => array( // custom color scheme 2
			'color' => 		'#908c92', 
			'link' => 		'#fcc41a', 
			'hover' => 		'#81256f', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#cd366b', 
			'alternate' => 	'#e5e4e1', 
			'border' => 	'rgba(255,255,255,0.4)', 
			'secondary' =>	'#cd366b'
		), 
		'third' => array( // custom color scheme 3
			'color' => 		'#908c92', 
			'link' => 		'#f6be14', 
			'hover' => 		'#81256f', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#e5e4e1', 
			'border' => 	'#dfdfdf', 
			'secondary' =>	'#cd366b'
		), 
		'fourth' => array( // custom color scheme 4
			'color' => 		'#908c92', 
			'link' => 		'rgba(255,255,255,0.7)', 
			'hover' => 		'rgba(255,255,255,0.5)', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#382a41', 
			'alternate' => 	'#e5e4e1', 
			'border' => 	'rgba(255,255,255,0.1)', 
			'secondary' =>	'#ffffff'
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Elements Default Values
if (!function_exists('children_charity_settings_element_defaults')) {

function children_charity_settings_element_defaults($id = false) {
	$settings = array( 
		'sidebar' => array( 
			'children-charity' . '_sidebar' => 	'' 
		), 
		'icon' => array( 
			'children-charity' . '_social_icons' => array( 
				'cmsmasters-icon-facebook-1|#|' . esc_html__('Facebook', 'children-charity') . '|false||', 
				'cmsmasters-icon-gplus-1|#|' . esc_html__('Google+', 'children-charity') . '|false||', 
				'cmsmasters-icon-instagram|#|' . esc_html__('Instagram', 'children-charity') . '|false||', 
				'cmsmasters-icon-twitter|#|' . esc_html__('Twitter', 'children-charity') . '|false||', 
				'cmsmasters-icon-youtube-play|#|' . esc_html__('YouTube', 'children-charity') . '|false||'  
			) 
		), 
		'lightbox' => array( 
			'children-charity' . '_ilightbox_skin' => 					'dark', 
			'children-charity' . '_ilightbox_path' => 					'vertical', 
			'children-charity' . '_ilightbox_infinite' => 				0, 
			'children-charity' . '_ilightbox_aspect_ratio' => 			1, 
			'children-charity' . '_ilightbox_mobile_optimizer' => 		1, 
			'children-charity' . '_ilightbox_max_scale' => 				1, 
			'children-charity' . '_ilightbox_min_scale' => 				0.2, 
			'children-charity' . '_ilightbox_inner_toolbar' => 			0, 
			'children-charity' . '_ilightbox_smart_recognition' => 		0, 
			'children-charity' . '_ilightbox_fullscreen_one_slide' => 	0, 
			'children-charity' . '_ilightbox_fullscreen_viewport' => 	'center', 
			'children-charity' . '_ilightbox_controls_toolbar' => 		1, 
			'children-charity' . '_ilightbox_controls_arrows' => 		0, 
			'children-charity' . '_ilightbox_controls_fullscreen' => 	1, 
			'children-charity' . '_ilightbox_controls_thumbnail' => 	1, 
			'children-charity' . '_ilightbox_controls_keyboard' => 		1, 
			'children-charity' . '_ilightbox_controls_mousewheel' => 	1, 
			'children-charity' . '_ilightbox_controls_swipe' => 		1, 
			'children-charity' . '_ilightbox_controls_slideshow' => 	0 
		), 
		'sitemap' => array( 
			'children-charity' . '_sitemap_nav' => 			1, 
			'children-charity' . '_sitemap_categs' => 		1, 
			'children-charity' . '_sitemap_tags' => 		1, 
			'children-charity' . '_sitemap_month' => 		1, 
			'children-charity' . '_sitemap_pj_categs' => 	1, 
			'children-charity' . '_sitemap_pj_tags' => 		1 
		), 
		'error' => array( 
			'children-charity' . '_error_color' => 				'#ffffff', 
			'children-charity' . '_error_bg_color' => 			'#44364e', 
			'children-charity' . '_error_bg_img_enable' => 		0, 
			'children-charity' . '_error_bg_image' => 			'', 
			'children-charity' . '_error_bg_rep' => 			'no-repeat', 
			'children-charity' . '_error_bg_pos' => 			'top center', 
			'children-charity' . '_error_bg_att' => 			'scroll', 
			'children-charity' . '_error_bg_size' => 			'cover', 
			'children-charity' . '_error_search' => 			1, 
			'children-charity' . '_error_sitemap_button' => 	1, 
			'children-charity' . '_error_sitemap_link' => 		'' 
		), 
		'code' => array( 
			'children-charity' . '_custom_css' => 			'', 
			'children-charity' . '_custom_js' => 			'', 
			'children-charity' . '_gmap_api_key' => 		'', 
			'children-charity' . '_api_key' => 				'', 
			'children-charity' . '_api_secret' => 			'', 
			'children-charity' . '_access_token' => 		'', 
			'children-charity' . '_access_token_secret' => 	'' 
		), 
		'recaptcha' => array( 
			'children-charity' . '_recaptcha_public_key' => 	'', 
			'children-charity' . '_recaptcha_private_key' => 	'' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Single Posts Default Values
if (!function_exists('children_charity_settings_single_defaults')) {

function children_charity_settings_single_defaults($id = false) {
	$settings = array( 
		'post' => array( 
			'children-charity' . '_blog_post_layout' => 		'r_sidebar', 
			'children-charity' . '_blog_post_title' => 			1, 
			'children-charity' . '_blog_post_date' => 			1, 
			'children-charity' . '_blog_post_cat' => 			1, 
			'children-charity' . '_blog_post_author' => 		1, 
			'children-charity' . '_blog_post_comment' => 		1, 
			'children-charity' . '_blog_post_tag' => 			1, 
			'children-charity' . '_blog_post_like' => 			1, 
			'children-charity' . '_blog_post_nav_box' => 		1, 
			'children-charity' . '_blog_post_nav_order_cat' => 		0, 
			'children-charity' . '_blog_post_share_box' => 		1, 
			'children-charity' . '_blog_post_author_box' => 	1, 
			'children-charity' . '_blog_more_posts_box' => 		'popular', 
			'children-charity' . '_blog_more_posts_count' => 	'3', 
			'children-charity' . '_blog_more_posts_pause' => 	'5' 
		), 
		'project' => array( 
			'children-charity' . '_portfolio_project_title' => 			1, 
			'children-charity' . '_portfolio_project_details_title' => 	esc_html__('Profile details', 'children-charity'), 
			'children-charity' . '_portfolio_project_date' => 			1, 
			'children-charity' . '_portfolio_project_cat' => 			1, 
			'children-charity' . '_portfolio_project_author' => 		1, 
			'children-charity' . '_portfolio_project_comment' => 		0, 
			'children-charity' . '_portfolio_project_tag' => 			0, 
			'children-charity' . '_portfolio_project_like' => 			1, 
			'children-charity' . '_portfolio_project_link' => 			0, 
			'children-charity' . '_portfolio_project_share_box' => 		1, 
			'children-charity' . '_portfolio_project_nav_box' => 		1, 
			'children-charity' . '_portfolio_project_nav_order_cat' => 		0, 
			'children-charity' . '_portfolio_project_author_box' => 	1, 
			'children-charity' . '_portfolio_more_projects_box' => 		'popular', 
			'children-charity' . '_portfolio_more_projects_count' => 	'4', 
			'children-charity' . '_portfolio_more_projects_pause' => 	'5', 
			'children-charity' . '_portfolio_project_slug' => 			'profile', 
			'children-charity' . '_portfolio_pj_categs_slug' => 		'pj-categs', 
			'children-charity' . '_portfolio_pj_tags_slug' => 			'pj-tags' 
		), 
		'profile' => array( 
			'children-charity' . '_profile_post_title' => 			1, 
			'children-charity' . '_profile_post_details_title' => 	esc_html__('Member details', 'children-charity'), 
			'children-charity' . '_profile_post_cat' => 			1, 
			'children-charity' . '_profile_post_comment' => 		1, 
			'children-charity' . '_profile_post_like' => 			1, 
			'children-charity' . '_profile_post_nav_box' => 		1, 
			'children-charity' . '_profile_post_nav_order_cat' => 		0, 
			'children-charity' . '_profile_post_share_box' => 		1, 
			'children-charity' . '_profile_post_slug' => 			'member', 
			'children-charity' . '_profile_pl_categs_slug' => 		'pl-categs' 
		) 
	);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Project Puzzle Proportion */
if (!function_exists('children_charity_project_puzzle_proportion')) {

function children_charity_project_puzzle_proportion() {
	return 1;
}

}



/* Theme Image Thumbnails Size */
if (!function_exists('children_charity_get_image_thumbnail_list')) {

function children_charity_get_image_thumbnail_list() {
	$list = array( 
		'cmsmasters-small-thumb' => array( 
			'width' => 		90, 
			'height' => 	90, 
			'crop' => 		true 
		), 
		'cmsmasters-square-thumb' => array( 
			'width' => 		300, 
			'height' => 	300, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Square', 'children-charity') 
		), 
		'cmsmasters-blog-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	400, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Masonry Blog', 'children-charity') 
		), 
		'cmsmasters-project-thumb' => array( 
			'width' => 		400, 
			'height' => 	400, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project', 'children-charity') 
		), 
		'cmsmasters-project-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Project', 'children-charity') 
		), 
		'post-thumbnail' => array( 
			'width' => 		860, 
			'height' => 	530, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Featured', 'children-charity') 
		), 
		'cmsmasters-masonry-thumb' => array( 
			'width' => 		860, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry', 'children-charity') 
		), 
		'cmsmasters-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	600, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Full', 'children-charity') 
		), 
		'cmsmasters-project-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	650, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Project Full', 'children-charity') 
		), 
		'cmsmasters-full-masonry-thumb' => array( 
			'width' => 		1160, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Full', 'children-charity') 
		) 
	);
	
	
	return $list;
}

}



/* Profile Post Type Registration Rename */
if (!function_exists('children_charity_profile_labels')) {

function children_charity_profile_labels() {
	return array( 
		'name' => 					esc_html__('Profiles', 'children-charity'), 
		'singular_name' => 			esc_html__('Profile', 'children-charity'), 
		'menu_name' => 				esc_html__('Profiles', 'children-charity'), 
		'all_items' => 				esc_html__('All Profiles', 'children-charity'), 
		'add_new' => 				esc_html__('Add New', 'children-charity'), 
		'add_new_item' => 			esc_html__('Add New Profile', 'children-charity'), 
		'edit_item' => 				esc_html__('Edit Profile', 'children-charity'), 
		'new_item' => 				esc_html__('New Profile', 'children-charity'), 
		'view_item' => 				esc_html__('View Profile', 'children-charity'), 
		'search_items' => 			esc_html__('Search Profiles', 'children-charity'), 
		'not_found' => 				esc_html__('No profiles found', 'children-charity'), 
		'not_found_in_trash' => 	esc_html__('No profiles found in Trash', 'children-charity') 
	);
}

}

add_filter('cmsmasters_project_labels_filter', 'children_charity_profile_labels');


if (!function_exists('children_charity_pj_categs_labels')) {

function children_charity_pj_categs_labels() {
	return array( 
		'name' => 					esc_html__('Profile Categories', 'children-charity'), 
		'singular_name' => 			esc_html__('Profile Category', 'children-charity') 
	);
}

}

add_filter('cmsmasters_pj_categs_labels_filter', 'children_charity_pj_categs_labels');


if (!function_exists('children_charity_pj_tags_labels')) {

function children_charity_pj_tags_labels() {
	return array( 
		'name' => 					esc_html__('Profile Tags', 'children-charity'), 
		'singular_name' => 			esc_html__('Profile Tag', 'children-charity') 
	);
}

}

add_filter('cmsmasters_pj_tags_labels_filter', 'children_charity_pj_tags_labels');



/* Member Post Type Registration Rename */
if (!function_exists('children_charity_member_labels')) {

function children_charity_member_labels() {
	return array( 
		'name' => 					esc_html__('Staff', 'children-charity'), 
		'singular_name' => 			esc_html__('Staff', 'children-charity'), 
		'menu_name' => 				esc_html__('Staff', 'children-charity'), 
		'all_items' => 				esc_html__('All Staff', 'children-charity'), 
		'add_new' => 				esc_html__('Add New', 'children-charity'), 
		'add_new_item' => 			esc_html__('Add New Member Page', 'children-charity'), 
		'edit_item' => 				esc_html__('Edit Member Page', 'children-charity'), 
		'new_item' => 				esc_html__('New Member Page', 'children-charity'), 
		'view_item' => 				esc_html__('View Member Page', 'children-charity'), 
		'search_items' => 			esc_html__('Search Staff', 'children-charity'), 
		'not_found' => 				esc_html__('No Staff found', 'children-charity'), 
		'not_found_in_trash' => 	esc_html__('No Staff found in Trash', 'children-charity') 
	);
}

}

add_filter('cmsmasters_profile_labels_filter', 'children_charity_member_labels');


if (!function_exists('children_charity_pl_categs_labels')) {

function children_charity_pl_categs_labels() {
	return array( 
		'name' => 					esc_html__('Member Categories', 'children-charity'), 
		'singular_name' => 			esc_html__('Member Category', 'children-charity') 
	);
}

}

add_filter('cmsmasters_pl_categs_labels_filter', 'children_charity_pl_categs_labels');

