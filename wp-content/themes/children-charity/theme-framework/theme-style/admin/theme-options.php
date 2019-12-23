<?php 
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version		1.0.3
 * 
 * Theme Admin Options
 * Created by CMSMasters
 * 
 */


function children_charity_single_options_meta_fields($custom_post_meta_fields) {
	$cmsmasters_option = children_charity_get_global_options();
	
	
	$custom_post_meta_fields_new = array();
	
	if (
		(isset($_GET['post_type']) && $_GET['post_type'] == 'post') || 
		(isset($_POST['post_type']) && $_POST['post_type'] == 'post') || 
		(isset($_GET['post']) && get_post_type($_GET['post']) == 'post') 
	) {
		foreach ($custom_post_meta_fields as $custom_post_meta_field) {
			if (
				$custom_post_meta_field['id'] == 'cmsmasters_post_title'
			) {	
				$custom_post_meta_fields_new[] = array( 
					'label'	=> esc_html__('Post Date Color', 'children-charity'), 
					'desc'	=> esc_html__('Choose custom color for date', 'children-charity'), 
					'id'	=> 'cmsmasters_post_color', 
					'type'	=> 'color', 
					'hide'	=> '', 
					'std'	=> '' 
				);
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} else {
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			}
		}	
	} elseif (
		(isset($_GET['post_type']) && $_GET['post_type'] == 'project') || 
		(isset($_POST['post_type']) && $_POST['post_type'] == 'project') || 
		(isset($_GET['post']) && get_post_type($_GET['post']) == 'project') 
	) {
		foreach ($custom_post_meta_fields as $custom_post_meta_field) {
			if (
				$custom_post_meta_field['id'] == 'cmsmasters_project_images'
			) {	
				$custom_post_meta_field['label'] = esc_html__('Profile Images', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_project_image_show'
			) {	
				$custom_post_meta_field['label'] = esc_html__('Don\'t Show Featured Image in Open Profile', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_project_title'
			) {	
				$custom_post_meta_field['label'] = esc_html__('Profile Title', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_project_size'
			) {	
				$custom_post_meta_field['label'] = esc_html__('Profile Puzzle Image Size', 'children-charity');
				
				$custom_post_meta_field['desc'] = esc_html__('Recommended Profile Puzzle Image dimensions, or other size, with the same ratio', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_project_puzzle_image'
			) {	
				$custom_post_meta_field['label'] = esc_html__('Profile Puzzle Image', 'children-charity');
				
				$custom_post_meta_field['desc'] = esc_html__('Choose image for Masonry Puzzle profiles', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_project_details_title'
			) {	
				$custom_post_meta_field['label'] = esc_html__('Profile Details Title', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_project_features'
			) {	
				$custom_post_meta_field['label'] = esc_html__('Profile Info', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_project_link_text'
			) {	
				$custom_post_meta_field['label'] = esc_html__('Profile Link Text"', 'children-charity');
				$custom_post_meta_field['std'] = esc_html__('View Profile', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_project_link_url'
			) {	
				$custom_post_meta_field['label'] = esc_html__('Profile Link URL', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_project_link_redirect'
			) {	
				$custom_post_meta_field['desc'] = esc_html__('Redirect to profile link URL instead of opening profile page', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_project_link_target'
			) {	
				$custom_post_meta_field['label'] = esc_html__('Profile Link Target', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_project_features_one_title'
			) {	
				$custom_post_meta_field['label'] = esc_html__('Profile Features 1 Title', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_project_features_one'
			) {	
				$custom_post_meta_field['label'] = esc_html__('Profile Features 1', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_project_features_two_title'
			) {	
				$custom_post_meta_field['label'] = esc_html__('Profile Features 2 Title', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_project_features_two'
			) {	
				$custom_post_meta_field['label'] = esc_html__('Profile Features 2', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_project_features_three_title'
			) {	
				$custom_post_meta_field['label'] = esc_html__('Profile Features 3 Title', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_project_features_three'
			) {	
				$custom_post_meta_field['label'] = esc_html__('Profile Features 3', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_project_tabs'
			) {
				$custom_post_meta_field['options']['cmsmasters_project']['label'] = esc_html__('Profile', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} else {
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			}
		}	
	} elseif (
		(isset($_GET['post_type']) && $_GET['post_type'] == 'profile') || 
		(isset($_POST['post_type']) && $_POST['post_type'] == 'profile') || 
		(isset($_GET['post']) && get_post_type($_GET['post']) == 'profile') 
	) {
		foreach ($custom_post_meta_fields as $custom_post_meta_field) {
			if (
				$custom_post_meta_field['id'] == 'cmsmasters_profile_title'
			) {	
				$custom_post_meta_field['label'] = esc_html__('Member Page Title', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_profile_subtitle'
			) {	
				$custom_post_meta_field['label'] = esc_html__('Member Page Subtitle', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_profile_details_title'
			) {	
				$custom_post_meta_field['label'] = esc_html__('Member Page Details Title', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_profile_social'
			) {	
				$custom_post_meta_field['desc'] = esc_html__('Add social icons for this member page', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_profile_features'
			) {	
				$custom_post_meta_field['label'] = esc_html__('Member Info', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_profile_features_one_title'
			) {	
				$custom_post_meta_field['id'] = 'cmsmasters_profile_features_one_title';
				$custom_post_meta_field['label'] = esc_html__('Member Features 1 Title', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_profile_features_one'
			) {	
				$custom_post_meta_field['id'] = 'cmsmasters_profile_features_one';
				$custom_post_meta_field['label'] = esc_html__('Member Features 1', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_profile_features_two_title'
			) {	
				$custom_post_meta_field['id'] = 'cmsmasters_profile_features_two_title';
				$custom_post_meta_field['label'] = esc_html__('Member Features 2 Title', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_profile_features_two'
			) {	
				$custom_post_meta_field['id'] = 'cmsmasters_profile_features_two';
				$custom_post_meta_field['label'] = esc_html__('Member Features 2', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_profile_features_three_title'
			) {	
				$custom_post_meta_field['id'] = 'cmsmasters_profile_features_three_title';
				$custom_post_meta_field['label'] = esc_html__('Member Features 3 Title', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_profile_features_three'
			) {	
				$custom_post_meta_field['id'] = 'cmsmasters_profile_features_three';
				$custom_post_meta_field['label'] = esc_html__('Member Features 3', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} elseif (
				$custom_post_meta_field['id'] == 'cmsmasters_profile_tabs'
			) {
				$custom_post_meta_field['options']['cmsmasters_profile']['label'] = esc_html__('Member', 'children-charity');
				
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			} else {
				$custom_post_meta_fields_new[] = $custom_post_meta_field;
			}
		}	
	} else {
		$custom_post_meta_fields_new = $custom_post_meta_fields;
	}	
	
	
	return $custom_post_meta_fields_new;
}

add_filter('get_custom_all_meta_fields_filter', 'children_charity_single_options_meta_fields');