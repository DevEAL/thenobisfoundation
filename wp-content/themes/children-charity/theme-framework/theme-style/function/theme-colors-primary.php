<?php
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version 	1.0.7
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */


function children_charity_theme_colors_primary() {
	$cmsmasters_option = children_charity_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version 	1.0.7
 * 
 * Theme Primary Color Schemes Rules
 * Created by CMSMasters
 * 
 */

";
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	" . (($scheme == 'default') ? "body," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme}," : '') . "
	{$rule}input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	{$rule}textarea,
	{$rule}select,
	{$rule}option,
	{$rule}form .formError .formErrorContent,
	{$rule}.cmsmasters_likes a,
	{$rule}.cmsmasters_likes a:hover,
	{$rule}.cmsmasters_likes a.active,
	{$rule}.cmsmasters_comments a,
	{$rule}.cmsmasters_comments a:hover,
	{$rule}.post_nav > span > span.sub,
	{$rule}.widget_categories ul *,
	{$rule}.widget_archive ul *,
	{$rule}.widget_meta ul *, 
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li p {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_color']) . "
	}
	
	{$rule}input::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_color']) . "
	}
	
	{$rule}input:-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_color']) . "
	}
	
	{$rule}textarea::-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_color']) . "
	}
	
	{$rule}textarea::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}a,
	{$rule}h1 a:hover,
	{$rule}h2 a:hover,
	{$rule}h3 a:hover,
	{$rule}h4 a:hover,
	{$rule}h5 a:hover,
	{$rule}h6 a:hover,
	{$rule}.color_2,
	{$rule}.cmsmasters_likes a:before,
	{$rule}.cmsmasters_comments a:before,
	{$rule}.cmsmasters_dropcap.type1,
	{$rule}.cmsmasters_wrap_more_items.cmsmasters_loading:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_heading_left .icon_box_heading:before,
	{$rule}.bypostauthor > .comment-body .alignleft:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a:hover,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a:hover,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a:hover,
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_edit a, 
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_meta a,
	{$rule}.cmsmasters_profile_horizontal .cmsmasters_profile_header .cmsmasters_profile_title,
	{$rule}.cmsmasters_profile_horizontal .cmsmasters_profile_header .cmsmasters_profile_title a,
	{$rule}#page .profile_outer .cmsmasters_social_icon:hover,
	{$rule}.cmsmasters_profile_vertical .cmsmasters_profile_header .cmsmasters_profile_title,
	{$rule}.cmsmasters_profile_vertical .cmsmasters_profile_header .cmsmasters_profile_title a,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title a,
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_img_info_wrap .cmsmasters_quote_placeholder:before,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap:before,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before,
	{$rule}.cmsmasters_pricing_table .cmsmasters_price_wrap,
	{$rule}.cmsmasters_twitter_wrap .twr_icon,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_cont_info a:hover,
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_slider_project_cont_info > span a:hover, 
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_slider_project_cont_info > span a:hover, 
	{$rule}.post_nav > span a:hover,
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_info .cmsmasters_archive_item_user_name a:hover,
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_info .cmsmasters_archive_item_category a:hover,
	{$rule}#page .cmsmasters_open_profile .profile_social_icons_list a:hover,
	{$rule}.error_cont .error_button_wrap .button:hover,
	{$rule}.cmsmasters_project_grid .cmsmasters_project_cont_info a,
	{$rule}.widget_categories ul a:hover,
	{$rule}.widget_categories ul a:hover:before,
	{$rule}.widget_archive ul a:hover,
	{$rule}.widget_archive ul a:hover:before,
	{$rule}.widget_meta ul a:hover,
	{$rule}.widget_meta ul a:hover:before,
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_slider_project_title a, 
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_slider_project_title a, 
	{$rule}.cmsmasters_button:hover,
	{$rule}.cmsmasters_project_grid .cmsmasters_project_title a:hover,
	{$rule}.cmsmasters_slider_project .cmsmasters_slider_project_cont_info a,
	{$rule}.blog .cmsmasters_post_title a:hover,
	{$rule}.blog .cmsmasters_post_author a:hover,
	{$rule}.blog .cmsmasters_post_category a,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_title a:hover,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_cont_info .cmsmasters_slider_post_category a,
	{$rule}#wp-calendar #today,
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_header a,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap, 
	{$rule}.search_bar_wrap .search_button button:hover,
	{$rule}.widget_custom_contact_info_entries div:before,
	{$rule}.widget_nav_menu ul li a:hover,
	{$rule}.widget_nav_menu ul li.current-menu-item a,
	{$rule}.cmsmasters_single_slider_item_title a,
	{$rule}.pricing_best .cmsmasters_pricing_but_wrap .cmsmasters_button,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quote_title,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li.current a,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a:hover,
	{$rule}.widget_pages ul li a:hover,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li .cmsmasters_comments_post_title a:hover,
	{$rule}.widget_recent_comments ul li a:hover,
	{$rule}.cmsmasters_header_search_form .cmsmasters_header_search_form_close:hover,
	{$rule}.widget_recent_entries ul li a:hover,
	{$rule}.widget_tag_cloud a:hover,
	{$rule}.widget_custom_twitter_entries .tweet_time:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
	}
	
	" . (($scheme == 'default') ? "#slide_top," : '') . "
	" . (($scheme == 'default') ? "mark," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme} mark," : '') . "
	{$rule}.cmsmasters_dropcap.type2,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:after, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:after, 
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:after, 
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:after,
	{$rule}.button,
	{$rule}input[type=submit],
	{$rule}input[type=button],
	{$rule}button,
	{$rule}.cmsmasters_button,
	{$rule}.owl-buttons > div:hover,
	{$rule}.cmsmasters_notice .notice_close:hover, 
	{$rule}.post_nav > span a:hover + span,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title:hover .cmsmasters_toggle_plus span,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap.current_toggle .cmsmasters_toggle_title .cmsmasters_toggle_plus span,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_pricing_item_inner, 
	{$rule}.cmsmasters_slider_post .cmsmasters_post_date_wrap,
	{$rule}.blog .cmsmasters_post_info,
	{$rule}.cmsmasters_open_post .cmsmasters_post_meta_info,
	{$rule}.cmsmasters_content_slider .owl-pagination .owl-page:hover,
	{$rule}.cmsmasters_content_slider .owl-pagination .owl-page.active,
	{$rule}.cmsmasters_notice.cmsmasters_notice_custom .notice_close:hover,
	{$rule}.cmsmasters_table .cmsmasters_table_row_header th,
	{$rule}.cmsmasters_single_slider .owl-buttons > div:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_profile_horizontal .pl_img_wrap .profile_social_icons:hover,
	{$rule}.cmsmasters_img_rollover_wrap .cmsmasters_img_rollover,
	{$rule}.cmsmasters_project_puzzle .project_inner {
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . ", .9);
	}
	
	{$rule}.button,
	{$rule}input[type=submit],
	{$rule}input[type=button],
	{$rule}button,
	{$rule}.cmsmasters_button,
	{$rule}form .formError .formErrorContent,
	{$rule}input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]):focus,
	{$rule}.error_cont input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]):focus,
	{$rule}.cmsmasters_mailpoet_form input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]):focus,
	{$rule}textarea:focus,
	{$rule}.owl-buttons > div:hover,
	{$rule}.post_nav > span a:hover + span,
	{$rule}.cmsmasters_header_search_form input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	{$rule}.widget_nav_menu ul li a:hover,
	{$rule}.widget_nav_menu ul li.current-menu-item a,
	{$rule}.cmsmasters_notice .notice_close:hover, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_pricing_item_inner, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_price_wrap,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .pricing_title,
	{$rule}.cmsmasters_notice.cmsmasters_notice_custom .notice_close:hover,
	{$rule}.cmsmasters_table .cmsmasters_table_row_header th {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li.current a {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
	}
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}a:hover,
	{$rule}.cmsmasters_likes a:hover:before,
	{$rule}.cmsmasters_likes a.active:before,
	{$rule}.cmsmasters_comments a:hover:before,
	{$rule}.cmsmasters_comments a.active:before,
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_edit a:hover,
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_meta a:hover,
	{$rule}blockquote:before,
	{$rule}.cmsmasters_profile_horizontal .cmsmasters_profile_header .cmsmasters_profile_title a:hover,
	{$rule}.cmsmasters_profile_vertical .cmsmasters_profile_header .cmsmasters_profile_title a:hover,
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_subtitle,
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_site,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quote_subtitle,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quote_site,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quote_site a,
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_header a:hover,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before,
	{$rule}.cmsmasters_pricing_table .cmsmasters_price_wrap .cmsmasters_period,
	{$rule}.cmsmasters-form-builder label,
	{$rule}.wpcf7-form p,
	{$rule}.cmsmasters_twitter_wrap .published,
	{$rule}.widget_custom_twitter_entries .tweet_time,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont .published,
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_slider_project_title a:hover, 
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_slider_project_title a:hover, 
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers,
	{$rule}.subpage_nav > a,
	{$rule}.cmsmasters_post_default .cmsmasters_post_read_more:hover,
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_read_more:hover,
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_read_more:hover,
	{$rule}.cmsmasters_single_slider_item_title a:hover,
	{$rule}.cmsmasters_single_slider .cmsmasters_post_date,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_date,
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_info > span,
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_slider_project_cont_info > span, 
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_slider_project_cont_info > span, 
	{$rule}.cmsmasters_project_grid .cmsmasters_project_cont_info > span,
	{$rule}.cmsmasters_project_grid .cmsmasters_project_cont_info a:hover,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_cont_info > span,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_read_more:hover, 
	{$rule}.footer_inner .cmsmasters_social_icon:hover,
	{$rule}.cmsmasters_comment_item .cmsmasters_comment_item_cont_info .cmsmasters_comment_item_date,
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_type,
	{$rule}#page .cmsmasters_open_profile .profile_social_icons_list a {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_hover']) . "
	}
	
	" . (($scheme == 'default') ? "#slide_top:hover," : '') . "
	{$rule}.pricing_best .cmsmasters_pricing_but_wrap .cmsmasters_button:hover,
	{$rule}.button:hover,
	{$rule}input[type=submit]:hover,
	{$rule}input[type=button]:hover,
	{$rule}button:hover,
	{$rule}.cmsmasters_button:hover,
	{$rule}.cmsmasters_quotes_slider .owl-buttons > div:before,
	{$rule}.cmsmasters_quotes_slider .owl-buttons > div:after,
	{$rule}.cmsmasters_single_slider .owl-buttons > div {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.pricing_best .cmsmasters_pricing_but_wrap .cmsmasters_button:hover,
	{$rule}.button:hover,
	{$rule}input[type=submit]:hover,
	{$rule}input[type=button]:hover,
	{$rule}button:hover,
	{$rule}.cmsmasters_button:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_hover']) . "
	}
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	" . (($scheme == 'default') ? ".headline_outer a:hover," : '') . "
	{$rule}h1,
	{$rule}h2,
	{$rule}h3,
	{$rule}h4,
	{$rule}h5,
	{$rule}h6,
	{$rule}h1 a,
	{$rule}h2 a,
	{$rule}h3 a,
	{$rule}h4 a,
	{$rule}h5 a,
	{$rule}h6 a,
	{$rule}fieldset legend,
	{$rule}blockquote footer,
	{$rule}table caption,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > ul li a:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > ul li a:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap_archive > li a:before,
	{$rule}blockquote,
	{$rule}.owl-buttons > div,
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers > span,
	{$rule}.subpage_nav > a,
	{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list .cmsmasters_tabs_list_item a,
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item a,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap.current_toggle .cmsmasters_toggle_title a, 
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title a:hover, 
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_content,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quote_content,
	{$rule}.cmsmasters_project_grid .cmsmasters_project_title a,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat_title,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap,
	{$rule}.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat_title,
	{$rule}.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title,
	{$rule}.cmsmasters_notice .notice_close,
	{$rule}.cmsmasters_table tfoot .cmsmasters_table_row_footer td,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_but,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_but.current,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but.reversed,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a,
	{$rule}.post_nav > span > span,
	{$rule}.post_nav > span a,
	{$rule}.project_navi a,
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_info .cmsmasters_archive_item_user_name a,
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_info .cmsmasters_archive_item_category a,
	{$rule}.cmsmasters_open_project .project_details_item_desc .cmsmastersLike:hover,
	{$rule}.cmsmasters_open_project .project_features_item_desc .cmsmastersLike.active,
	{$rule}#wp-calendar caption,
	{$rule}#wp-calendar thead,
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_slider_project_cont_info > span a, 
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_slider_project_cont_info > span a, 
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_cont_info a,
	{$rule}.search_bar_wrap .search_button button,
	{$rule}.widget_nav_menu ul li a,
	{$rule}.blog .cmsmasters_post_title,
	{$rule}.blog .cmsmasters_post_title a,
	{$rule}.blog .cmsmasters_post_author a,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_title a,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_read_more,
	{$rule}.cmsmasters_post_default .cmsmasters_post_read_more,
	{$rule}.cmsmasters_post_masonry .cmsmasters_post_read_more,
	{$rule}.cmsmasters_post_timeline .cmsmasters_post_read_more,
	{$rule}.widget_pages ul li a,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li .cmsmasters_comments_post_title,
	{$rule}.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li .cmsmasters_comments_post_title a,
	{$rule}.widget_recent_comments ul li a,
	{$rule}.widget_recent_entries ul li a,
	{$rule}.widget_tag_cloud a {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.widget_categories ul li a:before,
	{$rule}.widget_archive ul li a:before,
	{$rule}.widget_meta ul li a:before {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['children-charity' . '_' . $scheme . '_heading']) . ", .3);
	}
	
	{$rule}.footer_inner .cmsmasters_social_icon {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['children-charity' . '_' . $scheme . '_heading']) . ", .3);
	}
	
	" . (($scheme == 'default') ? ".headline_outer," : '') . "
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_plus span,
	{$rule}.cmsmasters_quotes_slider .owl-buttons > div:hover:before,
	{$rule}.cmsmasters_quotes_slider .owl-buttons > div:hover:after,
	{$rule}.img_placeholder_small,
	{$rule}.img_placeholder {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.cmsmasters_hover_slider .cmsmasters_hover_slider_thumbs li.hovered_item a:before {
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['children-charity' . '_' . $scheme . '_heading']) . ", .5);
	}
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	" . (($scheme == 'default') ? ".headline_outer," : '') . "
	" . (($scheme == 'default') ? ".headline_outer .entry-title," : '') . "
	" . (($scheme == 'default') ? ".headline_outer .cmsmasters_breadcrumbs_inner a," : '') . "
	" . (($scheme == 'default') ? ".headline_outer .cmsmasters_breadcrumbs_inner a:hover," : '') . "
	/*   */
	{$rule}mark,
	{$rule}.cmsmasters_button,
	{$rule}.button,
	{$rule}input[type=submit],
	{$rule}input[type=button],
	{$rule}button,
	{$rule}.button:hover,
	{$rule}input[type=submit]:hover,
	{$rule}input[type=button]:hover,
	{$rule}button:hover,
	{$rule}.cmsmasters_button:hover,
	{$rule}.error_cont .error_button_wrap .button:hover,
	{$rule}.cmsmasters_notice .notice_close:hover,
	{$rule}.owl-buttons > div:hover,
	{$rule}.post_nav span a:hover + span span:before,
	{$rule}.cmsmasters_img_rollover_wrap .cmsmasters_img_rollover .cmsmasters_open_link:before,
	{$rule}#page .cmsmasters_profile_horizontal .pl_img_wrap .profile_social_icons_list a,
	{$rule}#page .cmsmasters_profile_horizontal .pl_img_wrap .profile_social_icons_list a:hover,
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers:hover,
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers:hover > span,
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.current,
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.current > span,
	{$rule}.subpage_nav strong + span,
	{$rule} body .subpage_nav > span,
	{$rule}.subpage_nav > a:hover,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left_top:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left:before,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top:before,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .pricing_title,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_price_wrap,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .cmsmasters_price_wrap .cmsmasters_period,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .feature_list,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item.pricing_best .feature_list a,
	{$rule}.cmsmasters_notice.cmsmasters_notice_custom .notice_close:hover,
	{$rule}.cmsmasters_table .cmsmasters_table_row_header th,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_img_wrap .cmsmasters_post_date_wrap .cmsmasters_slider_post_date,
	{$rule}.blog .cmsmasters_post_date,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_single_slider .owl-buttons > div span,
	{$rule}.cmsmasters_pricing_table .pricing_best .feature_list li > span:before,
	{$rule}.img_placeholder,
	{$rule}.img_placeholder_small,
	{$rule}.cmsmasters_header_search_form input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	{$rule}.pricing_best .cmsmasters_pricing_but_wrap .cmsmasters_button:hover,
	{$rule}.cmsmasters_project_puzzle .project_inner_cont *,
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_footer a:hover:before,
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_footer a.active:before,
	{$rule}.cmsmasters_header_search_form .cmsmasters_header_search_form_close,
	{$rule}#page .error_cont .search_bar_wrap > form * {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.error_cont .search_bar_wrap > form input::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.error_cont .search_bar_wrap > form input:-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_header_search_form ::-webkit-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_header_search_form ::-moz-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_header_search_form :-ms-input-placeholder {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_project_puzzle .cmsmasters_project_footer a:before,
	{$rule}.cmsmasters_project_puzzle .project_inner_cont .cmsmasters_project_header a:hover,
	{$rule}.cmsmasters_project_puzzle .project_inner_cont .cmsmasters_project_cont_info a:hover {
		color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . ", .5);
	}
	
	" . (($scheme == 'default') ? "body," : '') . "
	" . (($scheme != 'default') ? ".cmsmasters_color_scheme_{$scheme}," : '') . "
	" . (($scheme == 'default') ? ".middle_inner," : '') . "
	{$rule}select,
	{$rule}input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	{$rule}textarea,
	{$rule}option,
	{$rule}form .formError .formErrorContent,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:before,
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:before,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:before,
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:before,
	{$rule}.owl-buttons > div,
	{$rule}.owl-pagination .owl-page:hover span,
	{$rule}.owl-pagination .owl-page.active span,
	{$rule}.cmsmasters_open_project .project_content .project_gallery_row .cmsmasters_img_rollover_wrap .cmsmasters_image_link:before, 
	{$rule}.cmsmasters_open_project .project_content .project_gallery_row .cmsmasters_img_rollover_wrap .cmsmasters_image_link:after, 
	{$rule}.cmsmasters_img.with_caption,
	{$rule}.pricing_best .cmsmasters_pricing_but_wrap .cmsmasters_button, 
	{$rule}.blog .cmsmasters_post_cont_info .cmsmasters_sticky:before,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner,
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before,
	{$rule}.cmsmasters_quotes_slider .owl-buttons > div:hover,
	{$rule}.cmsmasters_notice .notice_close,
	{$rule}.project_navi,
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item_inner,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_but,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_but:hover,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_but.current,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but:hover,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but.reversed,
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_img_rollover .cmsmasters_open_link:before,
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_img_rollover .cmsmasters_open_link:after,
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_img_rollover .cmsmasters_open_link:before,
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_img_rollover .cmsmasters_open_link:after,
	{$rule}.cmsmasters_img_rollover_wrap .cmsmasters_img_rollover .cmsmasters_open_post_link:before,
	{$rule}.cmsmasters_img_rollover_wrap .cmsmasters_img_rollover .cmsmasters_open_post_link:after,
	{$rule}#wp-calendar tfoot a:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_mailpoet_form input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	{$rule}.pricing_best .cmsmasters_pricing_but_wrap .cmsmasters_button {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.error_cont input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]) {
		border-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . ", .2);
	}
	
	{$rule}.cmsmasters_img_rollover_wrap .cmsmasters_img_rollover .cmsmasters_open_post_link {
		background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . ", .2);
	}
	
	{$rule}.cmsmasters_tabs.tabs_mode_tour.tabs_pos_left .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab {
		" . cmsmasters_color_css('border-right-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_tabs.tabs_mode_tour.tabs_pos_right .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab {
		" . cmsmasters_color_css('border-left-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	" . (($scheme == 'default') ? "#slide_top," : '') . "
	{$rule}.cmsmasters_dropcap.type2,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before, 
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon_wrap {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_alternate']) . "
	}
	
	{$rule}fieldset,
	{$rule}fieldset legend,
	{$rule}.cmsmasters_featured_block,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left,
	{$rule}.gallery-item .gallery-icon,
	{$rule}.gallery-item .gallery-caption,
	{$rule}.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat canvas, 
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_container,
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap:after,
	{$rule}.cmsmasters_icon_list_items .cmsmasters_icon_list_item .cmsmasters_icon_list_icon {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}#page .profile_outer .cmsmasters_social_icon,
	{$rule}#wp-calendar caption:before,
	{$rule}#wp-calendar tfoot a:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.owl-pagination .owl-page,
	{$rule}.cmsmasters_slider_post .cmsmasters_slider_post_cont_info span:before,
	{$rule}.blog .cmsmasters_post_cont_info span:before,
	{$rule}.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li:before,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quotes_vert:before,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quotes_vert:after,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quotes_vert > span,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quotes_list:before,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item a:after, 
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li:before, 
	{$rule}.blog.timeline:before,
	{$rule}.cmsmasters_archive_type .cmsmasters_archive_item_info:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_border']) . "
	}
	
	" . (($scheme == 'default') ? ".headline_outer," : '') . "
	{$rule}.cmsmasters_attach_img .cmsmasters_attach_img_info,
	{$rule}select,
	{$rule}input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	{$rule}textarea,
	{$rule}option,
	{$rule}hr,
	{$rule}.cmsmasters_post_default,
	{$rule}.cmsmasters_divider,
	{$rule}.cmsmasters_widget_divider,
	{$rule}.cmsmasters_img.with_caption,
	{$rule}.cmsmasters_pings_list .pingslist .pingback,
	{$rule}.cmsmasters_icon_wrap .cmsmasters_simple_icon,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_top,
	{$rule}.cmsmasters_icon_box.cmsmasters_icon_box_left,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=checkbox] + span.wpcf7-list-item-label:before,
	{$rule}.cmsmasters-form-builder .check_parent input[type=checkbox] + label:before,
	{$rule}.wpcf7 form.wpcf7-form span.wpcf7-list-item input[type=radio] + span.wpcf7-list-item-label:before,
	{$rule}.owl-buttons > div,
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers,
	{$rule}.subpage_nav > a,
	{$rule}.cmsmasters-form-builder .check_parent input[type=radio] + label:before,
	{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list,
	{$rule}.cmsmasters_toggles .cmsmasters_toggle_wrap .cmsmasters_toggle_title,
	{$rule}.cmsmasters_quotes_grid,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quote,
	{$rule}.cmsmasters_notice,
	{$rule}.cmsmasters_notice .notice_close,
	{$rule}.cmsmasters_table tr td,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_icon_list_type_block .cmsmasters_icon_list_item,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_icon:after,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:after,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:after,
	{$rule}.share_posts a,
	{$rule}.post_nav > span > span,
	{$rule}.cmsmasters_single_slider,
	{$rule}.cmsmasters_comment_item,
	{$rule}.comment-respond,
	{$rule}.post_comments,
	{$rule}.about_author,
	{$rule}table:not([class]):not([id]) th, 
	{$rule}table:not([class]):not([id]) td, 
	{$rule}.cmsmasters_pricing_table .cmsmasters_pricing_item_inner,
	{$rule}.cmsmasters_open_profile .profile_details_item,
	{$rule}.cmsmasters_open_profile .profile_features_item,
	{$rule}.portfolio .project .project_inner,
	{$rule}.cmsmasters_open_project .project_details_item,
	{$rule}.cmsmasters_open_project .project_features_item,
	{$rule}.widget_rss ul li,
	{$rule}.textwidget ul li,
	{$rule}.widget_pages ul li,
	{$rule}.widget_categories ul li,
	{$rule}.widget_archive ul li,
	{$rule}.widget_meta ul li,
	{$rule}.widget_recent_comments ul li,
	{$rule}.widget_recent_entries ul li,
	{$rule}.widget_nav_menu ul li, 
	{$rule}.widget_custom_twitter_entries ul li {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_border']) . "
	}
	
	@media only screen and (max-width: 600px) {
		{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list .cmsmasters_tabs_list_item,
		{$rule}#page .cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item,
		{$rule}#page .cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab,
		{$rule}#page .widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item,
		{$rule}#page .widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab {
			" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_border']) . "
		}
	}
	
	{$rule}.cmsmasters_tabs.tabs_mode_tour.tabs_pos_left .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab,
	{$rule}.cmsmasters_tabs.tabs_mode_tour.tabs_pos_right .cmsmasters_tabs_list .cmsmasters_tabs_list_item:not(.current_tab) {
		" . cmsmasters_color_css('border-left-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsmasters_tabs.tabs_mode_tour.tabs_pos_left .cmsmasters_tabs_list .cmsmasters_tabs_list_item:not(.current_tab),
	{$rule}.cmsmasters_tabs.tabs_mode_tour.tabs_pos_right .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab {
		" . cmsmasters_color_css('border-right-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab {
		" . cmsmasters_color_css('border-bottom-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */
	
	
		/* Start Secondary Color */
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner:before, 
	{$rule}.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner:before, 
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item.current_tab a, 
	{$rule}.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item a:before, 
	{$rule}.cmsmasters_stats.stats_mode_bars.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap:before, 
	{$rule}.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list .cmsmasters_tabs_list_item a:before, 
	{$rule}.cmsmasters_profile_vertical .cmsmasters_profile_subtitle,
	{$rule}.cmsmasters_pricing_table .feature_list li > span:before,
	{$rule}.cmsmasters_quotes_grid .cmsmasters_quote_inner:before,
	{$rule}.cmsmasters_quotes_slider .cmsmasters_quote_cont:before,
	{$rule}.widget_custom_contact_info_entries span:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_icon:before,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_border .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	{$rule}.widget_custom_contact_info_entries .adress_wrap:before,
	{$rule}.cmsmasters_post_default .cmsmasters_post_cont_info .cmsmasters_sticky,
	{$rule}.cmsmasters_profile_horizontal .cmsmasters_profile_subtitle,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but.reversed,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but.current,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_but.current,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_filter_but:hover,
	{$rule}.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but:hover {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers:hover,
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.current, 
	{$rule}.subpage_nav strong + span,
	{$rule} body .subpage_nav > span,
	{$rule}.subpage_nav > a:hover,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_bg .cmsmasters_icon_list_item .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_icon_list_items.cmsmasters_color_type_icon .cmsmasters_icon_list_item:hover .cmsmasters_icon_list_icon,
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item:before, 
	{$rule}.cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item:after, 
	{$rule}.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.subpage_nav strong + span,
	{$rule} body.subpage_nav > span,
	{$rule}.subpage_nav > a:hover,
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers:hover,
	{$rule}.cmsmasters_wrap_pagination ul li .page-numbers.current {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_secondary']) . "
	}
	/* Finish Secondary Color */
	
	
	/* Start Custom Rules */
	{$rule}.widget_custom_latest_projects_entries .cmsmasters_slider_project_inner,
	{$rule}.widget_custom_popular_projects_entries .cmsmasters_slider_project_inner {
		background-color:transparent;
	}
	
	{$rule}::selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['children-charity' . '_' . $scheme . '_secondary']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . ";
	}
	
	{$rule}::-moz-selection {
		" . cmsmasters_color_css('background', $cmsmasters_option['children-charity' . '_' . $scheme . '_secondary']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	";
	
	
	if ($scheme != 'default') {
		$custom_css .= "
		.cmsmasters_color_scheme_{$scheme}.cmsmasters_row_top_zigzag:before, 
		.cmsmasters_color_scheme_{$scheme}.cmsmasters_row_bot_zigzag:after {
			background-image: -webkit-linear-gradient(135deg, " . $cmsmasters_option['children-charity' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-webkit-linear-gradient(45deg, " . $cmsmasters_option['children-charity' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -moz-linear-gradient(135deg, " . $cmsmasters_option['children-charity' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-moz-linear-gradient(45deg, " . $cmsmasters_option['children-charity' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -ms-linear-gradient(135deg, " . $cmsmasters_option['children-charity' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-ms-linear-gradient(45deg, " . $cmsmasters_option['children-charity' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: -o-linear-gradient(135deg, " . $cmsmasters_option['children-charity' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					-o-linear-gradient(45deg, " . $cmsmasters_option['children-charity' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
			background-image: linear-gradient(315deg, " . $cmsmasters_option['children-charity' . '_' . $scheme . '_bg'] . " 25%, transparent 25%), 
					linear-gradient(45deg, " . $cmsmasters_option['children-charity' . '_' . $scheme . '_bg'] . " 25%, transparent 25%);
		}
		";
	}
	
	
	$custom_css .= "
	/* Finish Custom Rules */

/***************** Finish {$title} Color Scheme Rules ******************/


/***************** Start {$title} Button Color Scheme Rules ******************/
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_hover:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bd_underline {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bd_underline:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert:hover, 
	{$rule}.cmsmasters_button.cm.sms_but_bg_expand_hor:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_left:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_right:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_top:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_slide_bottom:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_vert:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_hor:after, 
	{$rule}.cmsmasters_button.cmsmasters_but_bg_expand_diag:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_shadow {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_shadow:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_dark_bg:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_light_bg:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_divider:after {
		" . cmsmasters_color_css('border-right-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_inverse:hover:after {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_right {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_slide_right:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_left, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_right, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_top, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_left:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_right:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_top:hover, 
	{$rule}.cmsmasters_button.cmsmasters_but_icon_hover_slide_bottom:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}

/***************** Finish {$title} Button Color Scheme Rules ******************/


";
	}
	
	
	return apply_filters('children_charity_theme_colors_primary_filter', $custom_css);
}

