<?php
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version 	1.0.0
 * 
 * Theme Content Composer Functions
 * Created by CMSMasters
 * 
 */


/* Register JS Scripts */
function children_charity_theme_register_c_c_scripts() {
	global $pagenow;
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('children-charity-composer-shortcodes-extend', get_template_directory_uri() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/js/cmsmasters-c-c-theme-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('children-charity-composer-shortcodes-extend', 'cmsmasters_theme_shortcodes', array( 
			'portfolio_title' => 									esc_attr__('Profiles', 'children-charity'), 
			'portfolio_field_orderby_descr' => 						esc_attr__('Choose your profiles order by parameter', 'children-charity'), 			
			'portfolio_field_pj_number_title' =>					esc_attr__('Profiles Number', 'children-charity'),
			'portfolio_field_pj_number_descr' =>					esc_attr__('Enter the number of profiles for showing per page', 'children-charity'),
			'portfolio_field_pj_number_descr_note' =>				esc_attr__('number, if empty - show all profiles', 'children-charity'), 
			'portfolio_field_categories_descr' =>					esc_attr__('Show profiles associated with certain categories.', 'children-charity'),
			'portfolio_field_categories_descr_note' =>				esc_attr__("If you don't choose any profile categories, all your profiles will be shown", 'children-charity'),			
			'portfolio_field_layout_descr' =>						esc_attr__('Choose layout type for your profiles', 'children-charity'),
			'portfolio_field_layout_choice_grid' =>					esc_attr__('Profiles Grid', 'children-charity'),
			'portfolio_field_layout_mode_descr' =>					esc_attr__('Choose grid layout mode for your profiles', 'children-charity'),			
			'portfolio_field_col_count_descr' =>					esc_attr__('Choose number of profiles per row', 'children-charity'),
			'portfolio_field_metadata_descr' =>						esc_attr__('Choose profiles metadata that you want to show', 'children-charity'),
			'portfolio_field_gap_descr' =>							esc_attr__('Choose the gap between profiles', 'children-charity'),
			'portfolio_field_filter_descr' =>						esc_attr__('If checked, enable profiles category filter', 'children-charity'),
			'portfolio_field_sorting_descr' =>						esc_attr__('If checked, enable profiles date & name sorting', 'children-charity'), 
			
			'posts_slider_field_poststype_choice_project' =>		esc_attr__('Profiles', 'children-charity'),
			'posts_slider_field_pjcateg_title' =>					esc_attr__('Profiles Categories', 'children-charity'),
			'posts_slider_field_pjcateg_descr' =>					esc_attr__('Show profiles associated with certain categories.', 'children-charity'),
			'posts_slider_field_pjcateg_descr_note' =>				esc_attr__("If you don't choose any profiles categories, all your profiles will be shown", 'children-charity'),			
			'posts_slider_field_col_count_descr' =>					esc_attr__('Choose number of profiles per row', 'children-charity'),			
			'posts_slider_field_pjmeta_title' =>					esc_attr__('Profiles Metadata', 'children-charity'),
			'posts_slider_field_pjmeta_descr' =>					esc_attr__('Choose profiles metadata you want to be shown', 'children-charity'), 
			
			'profiles_title' =>										esc_attr__('Staff', 'children-charity'),
			'profiles_field_orderby_descr' =>						esc_attr__('Choose your staff order by parameter', 'children-charity'),
			'profiles_field_profiles_number_title' =>				esc_attr__('Staff Number per Page', 'children-charity'),
			'profiles_field_profiles_number_descr_note' =>			esc_attr__('number, if empty - show all staff', 'children-charity'),			
			'profiles_field_categories_descr' =>					esc_attr__('Show staff associated with certain categories', 'children-charity'),			
			'profiles_field_categories_descr_note' =>				esc_attr__("If you don't choose any categories, all your staff will be shown", 'children-charity'),
			'profiles_field_col_count_descr' =>						esc_attr__('Choose number of staff per row', 'children-charity')
		));
	}
}

add_action('admin_enqueue_scripts', 'children_charity_theme_register_c_c_scripts');

