<?php 
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version 	1.0.0
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function children_charity_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'children-charity');
	
	if (class_exists('Cmsmasters_Content_Composer')) {
		$tabs['icon'] = esc_attr__('Social Icons', 'children-charity');
	}
	
	$tabs['lightbox'] = esc_attr__('Lightbox', 'children-charity');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'children-charity');
	$tabs['error'] = esc_attr__('404', 'children-charity');
	$tabs['code'] = esc_attr__('Custom Codes', 'children-charity');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'children-charity');
	}
	
	return apply_filters('cmsmasters_options_element_tabs_filter', $tabs);
}


function children_charity_options_element_sections() {
	$tab = children_charity_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'children-charity');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'children-charity');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'children-charity');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'children-charity');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'children-charity');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'children-charity');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'children-charity');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_sections_filter', $sections, $tab);	
} 


function children_charity_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = children_charity_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = children_charity_settings_element_defaults();
	
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => 'children-charity' . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'children-charity'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => $defaults[$tab]['children-charity' . '_sidebar'] 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => 'children-charity' . '_social_icons', 
			'title' => esc_html__('Social Icons', 'children-charity'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => $defaults[$tab]['children-charity' . '_social_icons'] 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'children-charity' . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'children-charity'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['children-charity' . '_ilightbox_skin'], 
			'choices' => array( 
				esc_html__('Dark', 'children-charity') . '|dark', 
				esc_html__('Light', 'children-charity') . '|light', 
				esc_html__('Mac', 'children-charity') . '|mac', 
				esc_html__('Metro Black', 'children-charity') . '|metro-black', 
				esc_html__('Metro White', 'children-charity') . '|metro-white', 
				esc_html__('Parade', 'children-charity') . '|parade', 
				esc_html__('Smooth', 'children-charity') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'children-charity' . '_ilightbox_path', 
			'title' => esc_html__('Path', 'children-charity'), 
			'desc' => esc_html__('Sets path for switching windows', 'children-charity'), 
			'type' => 'radio', 
			'std' => $defaults[$tab]['children-charity' . '_ilightbox_path'], 
			'choices' => array( 
				esc_html__('Vertical', 'children-charity') . '|vertical', 
				esc_html__('Horizontal', 'children-charity') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'children-charity' . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'children-charity'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_ilightbox_infinite'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'children-charity' . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'children-charity'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_ilightbox_aspect_ratio'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'children-charity' . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'children-charity'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_ilightbox_mobile_optimizer'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'children-charity' . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'children-charity'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'children-charity'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['children-charity' . '_ilightbox_max_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'children-charity' . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'children-charity'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'children-charity'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['children-charity' . '_ilightbox_min_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'children-charity' . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'children-charity'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_ilightbox_inner_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'children-charity' . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'children-charity'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_ilightbox_smart_recognition'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'children-charity' . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'children-charity'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_ilightbox_fullscreen_one_slide'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'children-charity' . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'children-charity'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'children-charity'), 
			'type' => 'select', 
			'std' => $defaults[$tab]['children-charity' . '_ilightbox_fullscreen_viewport'], 
			'choices' => array( 
				esc_html__('Center', 'children-charity') . '|center', 
				esc_html__('Fit', 'children-charity') . '|fit', 
				esc_html__('Fill', 'children-charity') . '|fill', 
				esc_html__('Stretch', 'children-charity') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'children-charity' . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'children-charity'), 
			'desc' => esc_html__('Sets buttons be available or not', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_ilightbox_controls_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'children-charity' . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'children-charity'), 
			'desc' => esc_html__('Enable the arrow buttons', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_ilightbox_controls_arrows'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'children-charity' . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'children-charity'), 
			'desc' => esc_html__('Sets the fullscreen button', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_ilightbox_controls_fullscreen'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'children-charity' . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'children-charity'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_ilightbox_controls_thumbnail'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'children-charity' . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'children-charity'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_ilightbox_controls_keyboard'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'children-charity' . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'children-charity'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_ilightbox_controls_mousewheel'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'children-charity' . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'children-charity'), 
			'desc' => esc_html__('Sets the swipe navigation', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_ilightbox_controls_swipe'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'children-charity' . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'children-charity'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_ilightbox_controls_slideshow'] 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'children-charity' . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'children-charity'), 
			'desc' => esc_html__('show', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_sitemap_nav'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'children-charity' . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'children-charity'), 
			'desc' => esc_html__('show', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_sitemap_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'children-charity' . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'children-charity'), 
			'desc' => esc_html__('show', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_sitemap_tags'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'children-charity' . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'children-charity'), 
			'desc' => esc_html__('show', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_sitemap_month'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'children-charity' . '_sitemap_pj_categs', 
			'title' => esc_html__('Portfolio Archives by Categories', 'children-charity'), 
			'desc' => esc_html__('show', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_sitemap_pj_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'children-charity' . '_sitemap_pj_tags', 
			'title' => esc_html__('Portfolio Archives by Tags', 'children-charity'), 
			'desc' => esc_html__('show', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_sitemap_pj_tags'] 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'children-charity' . '_error_color', 
			'title' => esc_html__('Text Color', 'children-charity'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['children-charity' . '_error_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'children-charity' . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'children-charity'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['children-charity' . '_error_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'children-charity' . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'children-charity'), 
			'desc' => esc_html__('show', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_error_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'children-charity' . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'children-charity'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'children-charity'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['children-charity' . '_error_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'children-charity' . '_error_bg_rep', 
			'title' => esc_html__('Background Repeat', 'children-charity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['children-charity' . '_error_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'children-charity') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'children-charity') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'children-charity') . '|repeat-y', 
				esc_html__('Repeat', 'children-charity') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'children-charity' . '_error_bg_pos', 
			'title' => esc_html__('Background Position', 'children-charity'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['children-charity' . '_error_bg_pos'], 
			'choices' => array( 
				esc_html__('Top Left', 'children-charity') . '|top left', 
				esc_html__('Top Center', 'children-charity') . '|top center', 
				esc_html__('Top Right', 'children-charity') . '|top right', 
				esc_html__('Center Left', 'children-charity') . '|center left', 
				esc_html__('Center Center', 'children-charity') . '|center center', 
				esc_html__('Center Right', 'children-charity') . '|center right', 
				esc_html__('Bottom Left', 'children-charity') . '|bottom left', 
				esc_html__('Bottom Center', 'children-charity') . '|bottom center', 
				esc_html__('Bottom Right', 'children-charity') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'children-charity' . '_error_bg_att', 
			'title' => esc_html__('Background Attachment', 'children-charity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['children-charity' . '_error_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'children-charity') . '|scroll', 
				esc_html__('Fixed', 'children-charity') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'children-charity' . '_error_bg_size', 
			'title' => esc_html__('Background Size', 'children-charity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['children-charity' . '_error_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'children-charity') . '|auto', 
				esc_html__('Cover', 'children-charity') . '|cover', 
				esc_html__('Contain', 'children-charity') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'children-charity' . '_error_search', 
			'title' => esc_html__('Search Line', 'children-charity'), 
			'desc' => esc_html__('show', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_error_search'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'children-charity' . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'children-charity'), 
			'desc' => esc_html__('show', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_error_sitemap_button'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'children-charity' . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'children-charity'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['children-charity' . '_error_sitemap_link'], 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'children-charity' . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'children-charity'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['children-charity' . '_custom_css'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'children-charity' . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'children-charity'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['children-charity' . '_custom_js'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'children-charity' . '_gmap_api_key', 
			'title' => esc_html__('Google Maps API key', 'children-charity'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['children-charity' . '_gmap_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'children-charity' . '_api_key', 
			'title' => esc_html__('Twitter API key', 'children-charity'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['children-charity' . '_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'children-charity' . '_api_secret', 
			'title' => esc_html__('Twitter API secret', 'children-charity'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['children-charity' . '_api_secret'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'children-charity' . '_access_token', 
			'title' => esc_html__('Twitter Access token', 'children-charity'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['children-charity' . '_access_token'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'children-charity' . '_access_token_secret', 
			'title' => esc_html__('Twitter Access token secret', 'children-charity'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['children-charity' . '_access_token_secret'], 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'children-charity' . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'children-charity'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['children-charity' . '_recaptcha_public_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'children-charity' . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'children-charity'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['children-charity' . '_recaptcha_private_key'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_fields_filter', $options, $tab);	
}

