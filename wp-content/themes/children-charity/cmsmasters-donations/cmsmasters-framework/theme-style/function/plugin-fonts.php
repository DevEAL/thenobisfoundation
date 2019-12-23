<?php
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version 	1.0.0
 * 
 * CMSMasters Donations Fonts Rules
 * Created by CMSMasters
 * 
 */


function children_charity_donations_fonts($custom_css) {
	$cmsmasters_option = children_charity_get_global_options();
	
	
	$custom_css .= "
/***************** Start CMSMasters Donations Font Styles ******************/

	/* Start Content Font */
	.cmsmasters_single_slider_campaign .cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_title_wrap * , 
	.donations.opened-article > .donation .cmsmasters_donation_details_item_value, 
	.cmsmasters_campaigns .campaign .cmsmasters_stat_title {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_content_font_google_font']) . $cmsmasters_option['children-charity' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_content_font_font_style'] . ";
	}
	
	.donations.opened-article > .donation .cmsmasters_donation_details_item_value, 
	.cmsmasters_campaigns .campaign .cmsmasters_campaign_content {
		font-size:" . ((int)$cmsmasters_option['children-charity' . '_content_font_font_size'] - 2) . "px;
	}
	
	.cmsmasters_single_slider_campaign .cmsmasters_stats .cmsmasters_stat_wrap .cmsmasters_stat_title_wrap * , 
	.cmsmasters_campaigns .campaign .cmsmasters_stat_title {
		text-transform:none;
	}
	/* Finish Content Font */
	
	
	/* Start Link Font */
	/* Finish Link Font */
	
	
	/* Start Navigation Title Font */
	/* Finish Navigation Title Font */
	
	
	/* Start H1 Font */
	.cmsmasters_featured_campaign .campaign .cmsmasters_stats.stats_type_horizontal .cmsmasters_stat_wrap *,
	.cmsmasters_featured_campaign .campaign .cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap .cmsmasters_stat_units,
	.donations.opened-article > .donation .cmsmasters_donation_amount_currency {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h1_font_google_font']) . $cmsmasters_option['children-charity' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_featured_campaign .campaign .cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap .cmsmasters_stat_units,
	.cmsmasters_featured_campaign .campaign .cmsmasters_stats.stats_type_horizontal .cmsmasters_stat_wrap * {
		font-size:" . ((int)$cmsmasters_option['children-charity' . '_h1_font_font_size'] + 8) . "px;
	}
	
	.donations.opened-article > .donation .cmsmasters_donation_amount_currency {
		font-size:" . ((int)$cmsmasters_option['children-charity' . '_h1_font_font_size'] + 20) . "px;
	}
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	/* Finish H2 Font */
	
	
	/* Start H3 Font */	
	.cmsmasters_donation_field > label, 
	.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_rest_amount {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h3_font_google_font']) . $cmsmasters_option['children-charity' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h3_font_text_decoration'] . ";
	}
	
	@media only screen and (max-width: 600px) {
		.cmsmasters_donation_field > label {
			font-size:" . ((int) $cmsmasters_option['children-charity' . '_h3_font_font_size'] - 8) . "px;
		}
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.cmsmasters_donations .donation .cmsmasters_donation_footer .cmsmasters_donation_amount_currency,
	.cmsmasters_campaigns .campaign .cmsmasters_stat_subtitle {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h4_font_google_font']) . $cmsmasters_option['children-charity' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h4_font_text_decoration'] . ";
	}
	
	.cmsmasters_single_slider_campaign .cmsmasters_single_slider_item_title {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_h4_font_font_size'] + 2) . "px;
	}
	
	.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_donations_count_number, 
	.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_target_number {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_h4_font_font_size'] + 4) . "px;
	}
	
	.cmsmasters_featured_campaign .cmsmasters_campaign_donated_percent .cmsmasters_stat_container {
		height:" . ((int) $cmsmasters_option['children-charity' . '_h4_font_line_height'] * 2 + 220 + 56) . "px;
	}
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.opened-article > .campaign .campaign_meta_wrap .cmsmasters_stat_title_wrap .cmsmasters_stat_counter,
	.opened-article > .campaign .campaign_meta_wrap .cmsmasters_stat_title_wrap .cmsmasters_stat_units,
	.donations.opened-article > .donation .cmsmasters_donation_campaign a {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h5_font_google_font']) . $cmsmasters_option['children-charity' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h5_font_text_decoration'] . ";
		letter-spacing:.1em;
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.donations.opened-article > .donation .cmsmasters_donation_details_item_title, 
	.donations.opened-article > .donation .cmsmasters_donation_details_item_title a, 
	.donations.opened-article > .donation .cmsmasters_donation_details_item_value a, 
	.cmsmasters_single_slider_campaign .cmsmasters_stat_subtitle, 
	.opened-article > .campaign .cmsmasters_campaign_cont_info > span * , 
	.opened-article > .campaign .cmsmasters_campaign_cont_info > span, 
	.cmsmasters_donations .donation .cmsmasters_donation_campaign a, 
	.cmsmasters_donations .donation .cmsmasters_donation_footer span, 
	.opened-article > .campaign .campaign_meta_wrap .cmsmasters_stat_title_wrap *,
	#page .cmsmasters_featured_campaign .cmsmasters_campaign_donated_percent .cmsmasters_stat_title {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h6_font_google_font']) . $cmsmasters_option['children-charity' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h6_font_text_decoration'] . ";
		letter-spacing:.1em;
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	.cmsmasters_donation_field .field_inner > select + small.description {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_small_font_font_size'] - 2) . "px;
	}
	/* Finish Small Text Font */

/***************** Finish CMSMasters Donations Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('children_charity_theme_fonts_filter', 'children_charity_donations_fonts');

