<?php 
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version		1.0.8
 * 
 * Admin Panel Fonts Options
 * Created by CMSMasters
 * 
 */


function children_charity_options_font_tabs() {
	$tabs = array();
	
	$tabs['content'] = esc_attr__('Content', 'children-charity');
	$tabs['link'] = esc_attr__('Links', 'children-charity');
	$tabs['nav'] = esc_attr__('Navigation', 'children-charity');
	$tabs['heading'] = esc_attr__('Heading', 'children-charity');
	$tabs['other'] = esc_attr__('Other', 'children-charity');
	$tabs['google'] = esc_attr__('Google Fonts', 'children-charity');
	
	return apply_filters('cmsmasters_options_font_tabs_filter', $tabs);
}


function children_charity_options_font_sections() {
	$tab = children_charity_get_the_tab();
	
	switch ($tab) {
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_html__('Content Font Options', 'children-charity');
		
		break;
	case 'link':
		$sections = array();
		
		$sections['link_section'] = esc_html__('Links Font Options', 'children-charity');
		
		break;
	case 'nav':
		$sections = array();
		
		$sections['nav_section'] = esc_html__('Navigation Font Options', 'children-charity');
		
		break;
	case 'heading':
		$sections = array();
		
		$sections['heading_section'] = esc_html__('Headings Font Options', 'children-charity');
		
		break;
	case 'other':
		$sections = array();
		
		$sections['other_section'] = esc_html__('Other Fonts Options', 'children-charity');
		
		break;
	case 'google':
		$sections = array();
		
		$sections['google_section'] = esc_html__('Serving Google Fonts from CDN', 'children-charity');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_sections_filter', $sections, $tab);
} 


function children_charity_options_font_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = children_charity_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = children_charity_settings_font_defaults();
	
	
	switch ($tab) {
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'children-charity' . '_content_font', 
			'title' => esc_html__('Main Content Font', 'children-charity'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['children-charity' . '_content_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'link':
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'children-charity' . '_link_font', 
			'title' => esc_html__('Links Font', 'children-charity'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['children-charity' . '_link_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'link_section', 
			'id' => 'children-charity' . '_link_hover_decoration', 
			'title' => esc_html__('Links Hover Text Decoration', 'children-charity'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['children-charity' . '_link_hover_decoration'], 
			'choices' => children_charity_text_decoration_list() 
		);
		
		break;
	case 'nav':
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'children-charity' . '_nav_title_font', 
			'title' => esc_html__('Navigation Title Font', 'children-charity'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['children-charity' . '_nav_title_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'nav_section', 
			'id' => 'children-charity' . '_nav_dropdown_font', 
			'title' => esc_html__('Navigation Dropdown Font', 'children-charity'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['children-charity' . '_nav_dropdown_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		break;
	case 'heading':
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'children-charity' . '_h1_font', 
			'title' => esc_html__('H1 Tag Font', 'children-charity'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['children-charity' . '_h1_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'children-charity' . '_h2_font', 
			'title' => esc_html__('H2 Tag Font', 'children-charity'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['children-charity' . '_h2_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'children-charity' . '_h3_font', 
			'title' => esc_html__('H3 Tag Font', 'children-charity'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['children-charity' . '_h3_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'children-charity' . '_h4_font', 
			'title' => esc_html__('H4 Tag Font', 'children-charity'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['children-charity' . '_h4_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'children-charity' . '_h5_font', 
			'title' => esc_html__('H5 Tag Font', 'children-charity'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['children-charity' . '_h5_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		$options[] = array( 
			'section' => 'heading_section', 
			'id' => 'children-charity' . '_h6_font', 
			'title' => esc_html__('H6 Tag Font', 'children-charity'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['children-charity' . '_h6_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform', 
				'text_decoration' 
			) 
		);
		
		break;
	case 'other':
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'children-charity' . '_button_font', 
			'title' => esc_html__('Button Font', 'children-charity'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['children-charity' . '_button_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'children-charity' . '_small_font', 
			'title' => esc_html__('Small Tag Font', 'children-charity'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['children-charity' . '_small_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style', 
				'text_transform' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'children-charity' . '_input_font', 
			'title' => esc_html__('Text Fields Font', 'children-charity'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['children-charity' . '_input_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		$options[] = array( 
			'section' => 'other_section', 
			'id' => 'children-charity' . '_quote_font', 
			'title' => esc_html__('Blockquote Font', 'children-charity'), 
			'desc' => '', 
			'type' => 'typorgaphy', 
			'std' => $defaults[$tab]['children-charity' . '_quote_font'], 
			'choices' => array( 
				'system_font', 
				'google_font', 
				'font_size', 
				'line_height', 
				'font_weight', 
				'font_style' 
			) 
		);
		
		break;
	case 'google':
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'children-charity' . '_google_web_fonts', 
			'title' => esc_html__('Google Fonts', 'children-charity'), 
			'desc' => '', 
			'type' => 'google_web_fonts', 
			'std' => $defaults[$tab]['children-charity' . '_google_web_fonts'] 
		);
		
		$options[] = array( 
			'section' => 'google_section', 
			'id' => 'children-charity' . '_google_web_fonts_subset', 
			'title' => esc_html__('Google Fonts Subset', 'children-charity'), 
			'desc' => '', 
			'type' => 'select_multiple', 
			'std' => '', 
			'choices' => array( 
				esc_html__('Latin Extended', 'children-charity') . '|' . 'latin-ext', 
				esc_html__('Arabic', 'children-charity') . '|' . 'arabic', 
				esc_html__('Cyrillic', 'children-charity') . '|' . 'cyrillic', 
				esc_html__('Cyrillic Extended', 'children-charity') . '|' . 'cyrillic-ext', 
				esc_html__('Greek', 'children-charity') . '|' . 'greek', 
				esc_html__('Greek Extended', 'children-charity') . '|' . 'greek-ext', 
				esc_html__('Vietnamese', 'children-charity') . '|' . 'vietnamese', 
				esc_html__('Japanese', 'children-charity') . '|' . 'japanese', 
				esc_html__('Korean', 'children-charity') . '|' . 'korean', 
				esc_html__('Thai', 'children-charity') . '|' . 'thai', 
				esc_html__('Bengali', 'children-charity') . '|' . 'bengali', 
				esc_html__('Devanagari', 'children-charity') . '|' . 'devanagari', 
				esc_html__('Gujarati', 'children-charity') . '|' . 'gujarati', 
				esc_html__('Gurmukhi', 'children-charity') . '|' . 'gurmukhi', 
				esc_html__('Hebrew', 'children-charity') . '|' . 'hebrew', 
				esc_html__('Kannada', 'children-charity') . '|' . 'kannada', 
				esc_html__('Khmer', 'children-charity') . '|' . 'khmer', 
				esc_html__('Malayalam', 'children-charity') . '|' . 'malayalam', 
				esc_html__('Myanmar', 'children-charity') . '|' . 'myanmar', 
				esc_html__('Oriya', 'children-charity') . '|' . 'oriya', 
				esc_html__('Sinhala', 'children-charity') . '|' . 'sinhala', 
				esc_html__('Tamil', 'children-charity') . '|' . 'tamil', 
				esc_html__('Telugu', 'children-charity') . '|' . 'telugu' 
			) 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_font_fields_filter', $options, $tab);	
}

