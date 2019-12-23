<?php 
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version 	1.0.8
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function children_charity_options_general_tabs() {
	$cmsmasters_option = children_charity_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'children-charity');
	
	if ($cmsmasters_option['children-charity' . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'children-charity');
	}
	
	if (CMSMASTERS_THEME_STYLE_COMPATIBILITY) {
		$tabs['theme_style'] = esc_attr__('Theme Style', 'children-charity');
	}
	
	$tabs['header'] = esc_attr__('Header', 'children-charity');
	$tabs['content'] = esc_attr__('Content', 'children-charity');
	$tabs['footer'] = esc_attr__('Footer', 'children-charity');
	
	return apply_filters('cmsmasters_options_general_tabs_filter', $tabs);
}


function children_charity_options_general_sections() {
	$tab = children_charity_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'children-charity');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'children-charity');
		
		break;
	case 'theme_style':
		$sections = array();
		
		$sections['theme_style_section'] = esc_attr__('Theme Design Style', 'children-charity');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'children-charity');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'children-charity');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'children-charity');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_sections_filter', $sections, $tab);
} 


function children_charity_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = children_charity_get_the_tab();
	}
	
	$options = array();
	
	
	$defaults = children_charity_settings_general_defaults();
	
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'children-charity' . '_theme_layout', 
			'title' => esc_html__('Theme Layout', 'children-charity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['children-charity' . '_theme_layout'], 
			'choices' => array( 
				esc_html__('Liquid', 'children-charity') . '|liquid', 
				esc_html__('Boxed', 'children-charity') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'children-charity' . '_logo_type', 
			'title' => esc_html__('Logo Type', 'children-charity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['children-charity' . '_logo_type'], 
			'choices' => array( 
				esc_html__('Image', 'children-charity') . '|image', 
				esc_html__('Text', 'children-charity') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'children-charity' . '_logo_url', 
			'title' => esc_html__('Logo Image', 'children-charity'), 
			'desc' => esc_html__('Choose your website logo image.', 'children-charity'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['children-charity' . '_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'children-charity' . '_logo_url_retina', 
			'title' => esc_html__('Retina Logo Image', 'children-charity'), 
			'desc' => esc_html__('Choose logo image for retina displays. Logo for Retina displays should be twice the size of the default one.', 'children-charity'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['children-charity' . '_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'children-charity' . '_logo_title', 
			'title' => esc_html__('Logo Title', 'children-charity'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['children-charity' . '_logo_title'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'children-charity' . '_logo_subtitle', 
			'title' => esc_html__('Logo Subtitle', 'children-charity'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['children-charity' . '_logo_subtitle'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'children-charity' . '_logo_custom_color', 
			'title' => esc_html__('Custom Text Colors', 'children-charity'), 
			'desc' => esc_html__('enable', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_logo_custom_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'children-charity' . '_logo_title_color', 
			'title' => esc_html__('Logo Title Color', 'children-charity'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['children-charity' . '_logo_title_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'children-charity' . '_logo_subtitle_color', 
			'title' => esc_html__('Logo Subtitle Color', 'children-charity'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['children-charity' . '_logo_subtitle_color'] 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'children-charity' . '_bg_col', 
			'title' => esc_html__('Background Color', 'children-charity'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => $defaults[$tab]['children-charity' . '_bg_col'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'children-charity' . '_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'children-charity'), 
			'desc' => esc_html__('show', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'children-charity' . '_bg_img', 
			'title' => esc_html__('Background Image', 'children-charity'), 
			'desc' => esc_html__('Choose your custom website background image url.', 'children-charity'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['children-charity' . '_bg_img'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'children-charity' . '_bg_rep', 
			'title' => esc_html__('Background Repeat', 'children-charity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['children-charity' . '_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'children-charity') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'children-charity') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'children-charity') . '|repeat-y', 
				esc_html__('Repeat', 'children-charity') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'children-charity' . '_bg_pos', 
			'title' => esc_html__('Background Position', 'children-charity'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['children-charity' . '_bg_pos'], 
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
			'section' => 'bg_section', 
			'id' => 'children-charity' . '_bg_att', 
			'title' => esc_html__('Background Attachment', 'children-charity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['children-charity' . '_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'children-charity') . '|scroll', 
				esc_html__('Fixed', 'children-charity') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'children-charity' . '_bg_size', 
			'title' => esc_html__('Background Size', 'children-charity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['children-charity' . '_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'children-charity') . '|auto', 
				esc_html__('Cover', 'children-charity') . '|cover', 
				esc_html__('Contain', 'children-charity') . '|contain' 
			) 
		);
		
		break;
	case 'theme_style':
		$options[] = array( 
			'section' => 'theme_style_section', 
			'id' => 'children-charity' . '_theme_style', 
			'title' => esc_html__('Choose Theme Style', 'children-charity'), 
			'desc' => '', 
			'type' => 'select_theme_style', 
			'std' => '', 
			'choices' => children_charity_all_theme_styles() 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'children-charity' . '_fixed_header', 
			'title' => esc_html__('Fixed Header', 'children-charity'), 
			'desc' => esc_html__('enable', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_fixed_header'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'children-charity' . '_header_overlaps', 
			'title' => esc_html__('Header Overlaps Content by Default', 'children-charity'), 
			'desc' => esc_html__('enable', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_header_overlaps'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'children-charity' . '_header_top_line', 
			'title' => esc_html__('Top Line', 'children-charity'), 
			'desc' => esc_html__('show', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_header_top_line'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'children-charity' . '_header_top_height', 
			'title' => esc_html__('Top Height', 'children-charity'), 
			'desc' => esc_html__('pixels', 'children-charity'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['children-charity' . '_header_top_height'], 
			'min' => '10' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'children-charity' . '_header_top_line_short_info', 
			'title' => esc_html__('Top Short Info', 'children-charity'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'children-charity') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['children-charity' . '_header_top_line_short_info'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'children-charity' . '_header_top_line_add_cont', 
			'title' => esc_html__('Top Additional Content', 'children-charity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['children-charity' . '_header_top_line_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'children-charity') . '|none', 
				esc_html__('Top Line Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'children-charity') . '|social', 
				esc_html__('Top Line Navigation (will be shown if set in Appearance - Menus tab)', 'children-charity') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'children-charity' . '_header_styles', 
			'title' => esc_html__('Header Styles', 'children-charity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['children-charity' . '_header_styles'], 
			'choices' => array( 
				esc_html__('Default Style', 'children-charity') . '|default', 
				esc_html__('Compact Style Left Navigation', 'children-charity') . '|l_nav', 
				esc_html__('Compact Style Right Navigation', 'children-charity') . '|r_nav', 
				esc_html__('Compact Style Center Navigation', 'children-charity') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'children-charity' . '_header_mid_height', 
			'title' => esc_html__('Header Middle Height', 'children-charity'), 
			'desc' => esc_html__('pixels', 'children-charity'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['children-charity' . '_header_mid_height'], 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'children-charity' . '_header_bot_height', 
			'title' => esc_html__('Header Bottom Height', 'children-charity'), 
			'desc' => esc_html__('pixels', 'children-charity'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['children-charity' . '_header_bot_height'], 
			'min' => '20' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'children-charity' . '_header_search', 
			'title' => esc_html__('Header Search', 'children-charity'), 
			'desc' => esc_html__('show', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_header_search'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'children-charity' . '_header_add_cont', 
			'title' => esc_html__('Header Additional Content', 'children-charity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['children-charity' . '_header_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'children-charity') . '|none', 
				esc_html__('Header Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'children-charity') . '|social', 
				esc_html__('Header Custom HTML', 'children-charity') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'children-charity' . '_header_add_cont_cust_html', 
			'title' => esc_html__('Header Custom HTML', 'children-charity'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'children-charity') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['children-charity' . '_header_add_cont_cust_html'], 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'children-charity' . '_layout', 
			'title' => esc_html__('Layout Type by Default', 'children-charity'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'children-charity'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['children-charity' . '_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'children-charity') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'children-charity') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'children-charity') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'children-charity' . '_archives_layout', 
			'title' => esc_html__('Archives Layout Type', 'children-charity'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Archive Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'children-charity'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['children-charity' . '_archives_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'children-charity') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'children-charity') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'children-charity') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'children-charity' . '_search_layout', 
			'title' => esc_html__('Search Layout Type', 'children-charity'), 
			'desc' => esc_html__('Choosing layout with a sidebar please make sure to add widgets to the Search Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'children-charity'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['children-charity' . '_search_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'children-charity') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'children-charity') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'children-charity') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'children-charity' . '_other_layout', 
			'title' => esc_html__('Other Layout Type', 'children-charity'), 
			'desc' => esc_html__('Layout for pages of non-listed types. Choosing layout with a sidebar please make sure to add widgets to the Sidebar in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'children-charity'), 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['children-charity' . '_other_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'children-charity') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'children-charity') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'children-charity') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'children-charity' . '_heading_alignment', 
			'title' => esc_html__('Heading Alignment by Default', 'children-charity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['children-charity' . '_heading_alignment'], 
			'choices' => array( 
				esc_html__('Left', 'children-charity') . '|left', 
				esc_html__('Right', 'children-charity') . '|right', 
				esc_html__('Center', 'children-charity') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'children-charity' . '_heading_scheme', 
			'title' => esc_html__('Heading Custom Color Scheme by Default', 'children-charity'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['children-charity' . '_heading_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'children-charity' . '_heading_bg_image_enable', 
			'title' => esc_html__('Heading Background Image Visibility by Default', 'children-charity'), 
			'desc' => esc_html__('show', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_heading_bg_image_enable'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'children-charity' . '_heading_bg_image', 
			'title' => esc_html__('Heading Background Image by Default', 'children-charity'), 
			'desc' => esc_html__('Choose your custom heading background image by default.', 'children-charity'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['children-charity' . '_heading_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'children-charity' . '_heading_bg_repeat', 
			'title' => esc_html__('Heading Background Repeat by Default', 'children-charity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['children-charity' . '_heading_bg_repeat'], 
			'choices' => array( 
				esc_html__('No Repeat', 'children-charity') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'children-charity') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'children-charity') . '|repeat-y', 
				esc_html__('Repeat', 'children-charity') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'children-charity' . '_heading_bg_attachment', 
			'title' => esc_html__('Heading Background Attachment by Default', 'children-charity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['children-charity' . '_heading_bg_attachment'], 
			'choices' => array( 
				esc_html__('Scroll', 'children-charity') . '|scroll', 
				esc_html__('Fixed', 'children-charity') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'children-charity' . '_heading_bg_size', 
			'title' => esc_html__('Heading Background Size by Default', 'children-charity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['children-charity' . '_heading_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'children-charity') . '|auto', 
				esc_html__('Cover', 'children-charity') . '|cover', 
				esc_html__('Contain', 'children-charity') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'children-charity' . '_heading_bg_color', 
			'title' => esc_html__('Heading Background Color Overlay by Default', 'children-charity'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => $defaults[$tab]['children-charity' . '_heading_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'children-charity' . '_heading_height', 
			'title' => esc_html__('Heading Height by Default', 'children-charity'), 
			'desc' => esc_html__('pixels', 'children-charity'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['children-charity' . '_heading_height'], 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'children-charity' . '_breadcrumbs', 
			'title' => esc_html__('Breadcrumbs Visibility by Default', 'children-charity'), 
			'desc' => esc_html__('show', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_breadcrumbs'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'children-charity' . '_bottom_scheme', 
			'title' => esc_html__('Bottom Custom Color Scheme', 'children-charity'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['children-charity' . '_bottom_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'children-charity' . '_bottom_sidebar', 
			'title' => esc_html__('Bottom Sidebar Visibility by Default', 'children-charity'), 
			'desc' => esc_html__('show', 'children-charity') . '<br><br>' . esc_html__('Please make sure to add widgets in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_bottom_sidebar'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'children-charity' . '_bottom_sidebar_layout', 
			'title' => esc_html__('Bottom Sidebar Layout by Default', 'children-charity'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['children-charity' . '_bottom_sidebar_layout'], 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'children-charity' . '_footer_scheme', 
			'title' => esc_html__('Footer Custom Color Scheme', 'children-charity'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['children-charity' . '_footer_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'children-charity' . '_footer_type', 
			'title' => esc_html__('Footer Type', 'children-charity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['children-charity' . '_footer_type'], 
			'choices' => array( 
				esc_html__('Default', 'children-charity') . '|default', 
				esc_html__('Small', 'children-charity') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'children-charity' . '_footer_additional_content', 
			'title' => esc_html__('Footer Additional Content', 'children-charity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['children-charity' . '_footer_additional_content'], 
			'choices' => array( 
				esc_html__('None', 'children-charity') . '|none', 
				esc_html__('Footer Navigation (will be shown if set in Appearance - Menus tab)', 'children-charity') . '|nav', 
				esc_html__('Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'children-charity') . '|social', 
				esc_html__('Custom HTML', 'children-charity') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'children-charity' . '_footer_logo', 
			'title' => esc_html__('Footer Logo', 'children-charity'), 
			'desc' => esc_html__('show', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_footer_logo'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'children-charity' . '_footer_logo_url', 
			'title' => esc_html__('Footer Logo', 'children-charity'), 
			'desc' => esc_html__('Choose your website footer logo image.', 'children-charity'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['children-charity' . '_footer_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'children-charity' . '_footer_logo_url_retina', 
			'title' => esc_html__('Footer Logo for Retina', 'children-charity'), 
			'desc' => esc_html__('Choose your website footer logo image for retina.', 'children-charity'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['children-charity' . '_footer_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'children-charity' . '_footer_nav', 
			'title' => esc_html__('Footer Navigation', 'children-charity'), 
			'desc' => esc_html__('show', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_footer_nav'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'children-charity' . '_footer_social', 
			'title' => esc_html__('Footer Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'children-charity'), 
			'desc' => esc_html__('show', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['children-charity' . '_footer_social'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'children-charity' . '_footer_html', 
			'title' => esc_html__('Footer Custom HTML', 'children-charity'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'children-charity') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['children-charity' . '_footer_html'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'children-charity' . '_footer_copyright', 
			'title' => esc_html__('Copyright Text', 'children-charity'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['children-charity' . '_footer_copyright'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_fields_filter', $options, $tab);
}

