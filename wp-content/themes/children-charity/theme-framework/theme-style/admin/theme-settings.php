<?php 
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version		1.0.4
 * 
 * Theme Admin Settings
 * Created by CMSMasters
 * 
 */


 /* General Settings */
function children_charity_theme_options_general_fields($options, $tab) {

	$defaults = children_charity_settings_general_defaults();
	
	if ($tab == 'footer') {
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'children-charity' . '_footer_bg_image_enable', 
			'title' => esc_html__('Footer Background Image Visibility by Default', 'children-charity'), 
			'desc' => esc_html__('show', 'children-charity'), 
			'type' => 'checkbox', 
			'std' => 1 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'children-charity' . '_footer_bg_image', 
			'title' => esc_html__('Footer Background Image by Default', 'children-charity'), 
			'desc' => esc_html__('Choose your footer background image by default.', 'children-charity'), 
			'type' => 'upload', 
			'std' => '', 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'children-charity' . '_footer_bg_repeat', 
			'title' => esc_html__('Footer Background Repeat by Default', 'children-charity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'no-repeat', 
			'choices' => array( 
				esc_html__('No Repeat', 'children-charity') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'children-charity') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'children-charity') . '|repeat-y', 
				esc_html__('Repeat', 'children-charity') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'children-charity' . '_footer_bg_pos', 
			'title' => esc_html__('Background Position', 'children-charity'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => 'top center', 
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
			'section' => 'footer_section', 
			'id' => 'children-charity' . '_footer_bg_attachment', 
			'title' => esc_html__('Footer Background Attachment by Default', 'children-charity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'fixed', 
			'choices' => array( 
				esc_html__('Scroll', 'children-charity') . '|scroll', 
				esc_html__('Fixed', 'children-charity') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'children-charity' . '_footer_bg_size', 
			'title' => esc_html__('Footer Background Size by Default', 'children-charity'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => 'cover', 
			'choices' => array( 
				esc_html__('Auto', 'children-charity') . '|auto', 
				esc_html__('Cover', 'children-charity') . '|cover', 
				esc_html__('Contain', 'children-charity') . '|contain' 
			) 
		);
	} elseif ($tab == 'general') {
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'children-charity' . '_logo_scroll_url', 
			'title' => esc_html__('Logo Scroll Image', 'children-charity'), 
			'desc' => esc_html__('Choose your website logo image on scroll.', 'children-charity'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['children-charity' . '_logo_scroll_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'children-charity' . '_logo_scroll_url_retina', 
			'title' => esc_html__('Retina Logo Scroll Image', 'children-charity'), 
			'desc' => esc_html__('Choose logo image on scroll for retina displays.', 'children-charity'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['children-charity' . '_logo_scroll_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
	}
	
	
	return $options;
}

add_filter('cmsmasters_options_general_fields_filter', 'children_charity_theme_options_general_fields', 10, 2);


/* Color Settings */
function children_charity_theme_options_color_fields($options, $tab) {
	$defaults = children_charity_color_schemes_defaults();
	
	
	if ($tab != 'header' && $tab != 'navigation' && $tab != 'header_top') {
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'children-charity' . '_' . $tab . '_secondary', 
			'title' => esc_html__('Secondary Color', 'children-charity'), 
			'desc' => esc_html__('Secondary color for some elements', 'children-charity'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['secondary'] : $defaults['default']['secondary'] 
		);
	}
	
	
	return $options;
}

add_filter('cmsmasters_options_color_fields_filter', 'children_charity_theme_options_color_fields', 10, 2);



/* Single Settings */
function children_charity_theme_options_single_fields($options, $tab) {
	$new_options = array();
	
	$defaults = children_charity_settings_single_defaults();
	
		if ($tab == 'project') {
			
			foreach ($options as $option) {
				if ($option['id'] == 'children-charity_portfolio_project_title') {
					$option['title'] = esc_html__('Profile Title', 'children-charity');
					
					$new_options[] = $option;
				} elseif ($option['id'] == 'children-charity_portfolio_project_details_title') {
					$option['title'] = esc_html__('Profile Details Title', 'children-charity');
					$option['desc'] = esc_html__('Enter a profile details block title', 'children-charity');
					
					$new_options[] = $option;
				} elseif ($option['id'] == 'children-charity_portfolio_project_date') {
					$option['title'] = esc_html__('Profile Date', 'children-charity');
					
					$new_options[] = $option;
				} elseif ($option['id'] == 'children-charity_portfolio_project_cat') {
					$option['title'] = esc_html__('Profile Categories', 'children-charity');
					
					$new_options[] = $option;
				} elseif ($option['id'] == 'children-charity_portfolio_project_author') {
					// this field removed
				} elseif ($option['id'] == 'children-charity_portfolio_project_comment') {
					$option['title'] = esc_html__('Profile Comments', 'children-charity');
					
					$new_options[] = $option;
				} elseif ($option['id'] == 'children-charity_portfolio_project_tag') {
					$option['title'] = esc_html__('Profile Tags', 'children-charity');
					
					$new_options[] = $option;
				} elseif ($option['id'] == 'children-charity_portfolio_project_link') {
					$option['title'] = esc_html__('Profile Link', 'children-charity');
					
					$new_options[] = $option;
				} elseif ($option['id'] == 'children-charity_portfolio_project_nav_box') {
					$option['title'] = esc_html__('Profiles Navigation Box', 'children-charity');
					
					$new_options[] = $option;
				} elseif ($option['id'] == 'children-charity_portfolio_more_projects_box') {
					$option['title'] = esc_html__('More Profiles Box', 'children-charity');
					$option['choices'] = array( 
						esc_html__('Show Related Profiles', 'children-charity') . '|related', 
						esc_html__('Show Popular Profiles', 'children-charity') . '|popular', 
						esc_html__('Show Recent Profiles', 'children-charity') . '|recent', 
						esc_html__('Hide More Profiles Box', 'children-charity') . '|hide' 
					);
					
					$new_options[] = $option;
				} elseif ($option['id'] == 'children-charity_portfolio_more_projects_count') {
					$option['title'] = esc_html__('More Profiles Box Items Number', 'children-charity');
					$option['desc'] = esc_html__('profiles', 'children-charity');
					
					$new_options[] = $option;
				} elseif ($option['id'] == 'children-charity_portfolio_more_projects_pause') {
					$option['title'] = esc_html__('More Profiles Slider Pause Time', 'children-charity');
					
					$new_options[] = $option;
				} elseif ($option['id'] == 'children-charity_portfolio_project_slug') {
					$option['title'] = esc_html__('Profile Slug', 'children-charity');
					$option['desc'] = esc_html__('Enter a page slug that should be used for your profiles single item', 'children-charity');
					
					$new_options[] = $option;
				} elseif ($option['id'] == 'children-charity_portfolio_pj_categs_slug') {
					$option['title'] = esc_html__('Profile Categories Slug', 'children-charity');
					$option['desc'] = esc_html__('Enter page slug that should be used on profiles categories archive page', 'children-charity');
					
					$new_options[] = $option;
				} elseif ($option['id'] == 'children-charity_portfolio_pj_tags_slug') {
					$option['title'] = esc_html__('Profile Categories Slug', 'children-charity');
					$option['desc'] = esc_html__('Enter page slug that should be used on profiles tags archive page', 'children-charity');
					
					$new_options[] = $option;
				} else {
					$new_options[] = $option;
				}
			}
		} elseif ($tab == 'profile') {
			foreach ($options as $option) {
				if ($option['id'] == 'children-charity_profile_post_title') {
					$option['title'] = esc_html__('Member Title', 'children-charity');
					
					$new_options[] = $option;
				} elseif ($option['id'] == 'children-charity_profile_post_details_title') {
					$option['title'] = esc_html__('Member Details Title', 'children-charity');
					$option['desc'] = esc_html__('Enter a member page details block title', 'children-charity');
					
					$new_options[] = $option;
				} elseif ($option['id'] == 'children-charity_profile_post_cat') {
					$option['title'] = esc_html__('Member Categories', 'children-charity');
					
					$new_options[] = $option;
				} elseif ($option['id'] == 'children-charity_profile_post_comment') {
					$option['title'] = esc_html__('Member Comments', 'children-charity');
					
					$new_options[] = $option;
				} elseif ($option['id'] == 'children-charity_profile_post_like') {
					$option['title'] = esc_html__('Member Likes', 'children-charity');
					
					$new_options[] = $option;
				} elseif ($option['id'] == 'children-charity_profile_post_nav_box') {
					$option['title'] = esc_html__('Member Navigation Box', 'children-charity');
					
					$new_options[] = $option;
				} elseif ($option['id'] == 'children-charity_profile_post_slug') {
					$option['title'] = esc_html__('Member Slug', 'children-charity');
					$option['desc'] = esc_html__('Enter a page slug that should be used for your profiles single item', 'children-charity');
					
					$new_options[] = $option;
				} elseif ($option['id'] == 'children-charity_profile_pl_categs_slug') {
					$option['title'] = esc_html__('Member Categories Slug', 'children-charity');
					$option['desc'] = esc_html__('Enter page slug that should be used on profiles categories archive page', 'children-charity');
					
					$new_options[] = $option;
				} else {
					$new_options[] = $option;
				}
			}
		} else {
			$new_options = $options;
		}
	
	return $new_options;
}

add_filter('cmsmasters_options_single_fields_filter', 'children_charity_theme_options_single_fields', 10, 2);



/* Single Tabs */
function children_charity_theme_options_single_tabs($tabs) {
		$tabs['project'] = esc_attr__('Profile', 'children-charity');
		$tabs['profile'] = esc_attr__('Member', 'children-charity');
	return $tabs;
}

add_filter('cmsmasters_options_single_tabs_filter', 'children_charity_theme_options_single_tabs', 10, 2);



/* Single Sections */
function children_charity_theme_options_single_sections($sections, $tab) {
	if ($tab == 'project') {
		$sections['project_section'] = esc_attr__('Profile Options', 'children-charity');
	} elseif ($tab == 'profile') {
		$sections['profile_section'] = esc_attr__('Member Options', 'children-charity');
	}
	
	return $sections;
}

add_filter('cmsmasters_options_single_sections_filter', 'children_charity_theme_options_single_sections', 10, 2);