<?php
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version 	1.0.0
 * 
 * CMSMasters Donations Colors Rules
 * Created by CMSMasters
 * 
 */


function children_charity_donations_colors($custom_css) {
	$cmsmasters_option = children_charity_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} CMSMasters Donations Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_stat_title, 
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_campaign a, 
	{$rule}.cmsmasters_donations_color {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_donate_button > div a:hover,
	{$rule}.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_donate_button a:hover, 
	{$rule}.cmsmasters_single_slider_campaign .cmsmasters_stat_subtitle, 
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_stat_subtitle, 
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_amount_currency, 
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_campaign a:hover, 
	{$rule}.cmsmasters_donations_link {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.opened-article > .campaign .campaign_meta_wrap,
	{$rule}.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_donated_percent .cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner, 
	{$rule}.cmsmasters_campaigns .cmsmasters_owl_slider .owl-buttons > div:hover, 
	{$rule}#submit-donation-form input[type='checkbox'] + .field_before:after, 
	{$rule}#submit-donation-form input[type='radio'] + .field_before:after, 
	{$rule}.header_donation_but > a.cmsmasters_button:hover,
	{$rule}.cmsmasters_featured_campaign .campaign,
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_cont_wrap_bottom,
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_campaign_inner {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.header_donation_but > a.cmsmasters_button:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.cmsmasters_donations_hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.header_donation_but > a.cmsmasters_button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.header_donation_but > a.cmsmasters_button {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_img_wrap .preloader:after {
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['children-charity' . '_' . $scheme . '_hover']) . ", 0.85);
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}.cmsmasters_campaigns .cmsmasters_owl_slider .owl-buttons > div span, 
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_details_item_title,
	{$rule}.cmsmasters_donations_heading {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_heading']) . "
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_target_number, 
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_donations_count_number, 
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_donate_button > div a,
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_title a, 
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_campaign a:hover,
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_campaign_title a, 
	{$rule}.cmsmasters_campaigns .cmsmasters_owl_slider .owl-buttons > div:hover span, 
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_img_wrap .preloader, 
	{$rule}.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_title a, 
	{$rule}.cmsmasters_featured_campaign .campaign .cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap, 
	{$rule}.header_donation_but > a.cmsmasters_button, 
	{$rule}.header_donation_but > a.cmsmasters_button:hover, 
	{$rule}.cmsmasters_donations_bg {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsmasters_stat_subtitle, 
	{$rule}#page .cmsmasters_featured_campaign .campaign .cmsmasters_campaign_donated_percent .cmsmasters_stat_title, 
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_footer .cmsmasters_donation_amount_currency,
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_stat_subtitle {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . ", .6);
	}
	
	{$rule}.opened-article > .campaign .cmsmasters_campaign_donated .cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat_title_wrap span,
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_target_title, 
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_donations_count_title,
	{$rule}.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_title a:hover, 
	{$rule}.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_rest_amount, 
	{$rule}.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_content, 
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_title a:hover,
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_campaign a,
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_footer span,
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_campaign_title a:hover,
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_campaign_content,
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat_title_wrap * {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . ", .7);
	}
	
	
	{$rule}.cmsmasters_campaigns .cmsmasters_owl_slider .owl-buttons > div,
	{$rule}.opened-article > .campaign .cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_donate_button > div a:hover,
	{$rule}.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_donate_button a:hover,
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner, 
	{$rule}.cmsmasters_donations .donation .cmsmasters_donation_cont_wrap, 
	{$rule}#submit-donation-form input[type='checkbox'] + .field_before:before, 
	{$rule}#submit-donation-form input[type='radio'] + .field_before:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.opened-article > .campaign .campaign_meta_wrap .cmsmasters_campaign_donate_button > div a,
	{$rule}.cmsmasters_featured_campaign .campaign .cmsmasters_campaign_donate_button a {
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . ", .2);
	}
	
	{$rule}.cmsmasters_campaign_donated .cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap:after,
	{$rule}.cmsmasters_featured_campaign .campaign .cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat canvas,
	{$rule}.cmsmasters_campaigns .campaign .cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap:after {
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . ", .6);
	}
	
	{$rule}.opened-article > .campaign .campaign_meta_wrap > div {
		border-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . ", .2);
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}.cmsmasters_donations_alternate {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.cmsmasters_donations_border {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_details_item, 
	{$rule}.donations.opened-article > .donation .cmsmasters_donation_info, 
	{$rule}#submit-donation-form input[type='checkbox'] + .field_before:before, 
	{$rule}#submit-donation-form input[type='radio'] + .field_before:before, 
	{$rule}.opened-article > .campaign .campaign_meta_wrap, 
	{$rule}.cmsmasters_donations .donation .img_placeholder {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */

/***************** Finish {$title} CMSMasters Donations Color Scheme Rules ******************/

";
	}
	
	
	return $custom_css;
}

add_filter('children_charity_theme_colors_secondary_filter', 'children_charity_donations_colors');

