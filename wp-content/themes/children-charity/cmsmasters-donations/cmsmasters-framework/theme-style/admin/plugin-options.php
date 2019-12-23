<?php 
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version 	1.0.0
 * 
 * CMSMasters Donations CSS Rules
 * Created by CMSMasters
 * 
 */


function children_charity_donations_meta_fields_custom($custom_all_meta_fields) {
	$custom_all_meta_fields_new = array();
	
	if (
		(isset($_GET['post_type']) && $_GET['post_type'] == 'campaign') || 
		(isset($_POST['post_type']) && $_POST['post_type'] == 'campaign') || 
		(isset($_GET['post']) && get_post_type($_GET['post']) == 'campaign') 
	) {		
		foreach ($custom_all_meta_fields as $custom_all_meta_field) {
			if ($custom_all_meta_field['id'] == 'cmsmasters_other_tabs') {
				$custom_all_meta_field['std'] = 'cmsmasters_campaign';
				
				
				$tabs_array = array();
				
				$tabs_array['cmsmasters_campaign'] = array( 
					'label' => esc_html__('Campaign', 'children-charity'), 
					'value'	=> 'cmsmasters_campaign' 
				);
				
				
				foreach ($custom_all_meta_field['options'] as $key => $val) {
					$tabs_array[$key] = $val;
				}
				
				
				$custom_all_meta_field['options'] = $tabs_array;
				
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} elseif (
				$custom_all_meta_field['id'] == 'cmsmasters_campaign_title'
			) {
				$custom_all_meta_fields_new[] = array( 
					'label'	=> esc_html__('Background Color', 'children-charity'), 
					'desc'	=> '', 
					'id'	=> 'cmsmasters_campaign_color', 
					'type'	=> 'color', 
					'hide'	=> '', 
					'std'	=> '' 
				);	
				
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else {
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			}
		}
	} elseif (
		(isset($_GET['post_type']) && $_GET['post_type'] == 'donation') || 
		(isset($_POST['post_type']) && $_POST['post_type'] == 'donation') || 
		(isset($_GET['post']) && get_post_type($_GET['post']) == 'donation') 
	) {
		foreach ($custom_all_meta_fields as $custom_all_meta_field) {
			if ($custom_all_meta_field['id'] == 'cmsmasters_other_tabs') {
				$custom_all_meta_field['std'] = 'cmsmasters_donation';
				
				
				$tabs_array = array();
				
				$tabs_array['cmsmasters_donation'] = array( 
					'label' => esc_html__('Donation', 'children-charity'), 
					'value'	=> 'cmsmasters_donation' 
				);
				
				$tabs_array['cmsmasters_donator'] = array( 
					'label' => esc_html__('Donator', 'children-charity'), 
					'value'	=> 'cmsmasters_donator' 
				);
				
				
				foreach ($custom_all_meta_field['options'] as $key => $val) {
					$tabs_array[$key] = $val;
				}
				
				
				$custom_all_meta_field['options'] = $tabs_array;
				
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} elseif (
				$custom_all_meta_field['id'] == 'cmsmasters_donation_amount'
			) {
				
				$custom_all_meta_fields_new[] = array( 
					'label'	=> esc_html__('Background Color', 'children-charity'), 
					'desc'	=> '', 
					'id'	=> 'cmsmasters_donation_color', 
					'type'	=> 'color', 
					'hide'	=> '', 
					'std'	=> '' 
				);
				
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else {
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			}
		}
	} else {
		$custom_all_meta_fields_new = $custom_all_meta_fields;
	}
	
	return $custom_all_meta_fields_new;
}

add_filter('get_custom_all_meta_fields_filter', 'children_charity_donations_meta_fields_custom');


