<?php
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version 	1.0.8
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


function children_charity_theme_fonts() {
	$cmsmasters_option = children_charity_get_global_options();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version 	1.0.0
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


/***************** Start Theme Font Styles ******************/

	/* Start Content Font */
	body,
	.mid_nav a .nav_subtitle,
	.bot_nav a .nav_subtitle,
	.cmsmasters_twitter_wrap .published, 
	#page .cmsmasters_comment_item .cmsmasters_comment_item_cont_info .comment-reply-link,
	#page .cmsmasters_comment_item .cmsmasters_comment_item_cont_info .cmsmasters_comment_item_date,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li p,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li .cmsmasters_comments_post_title small {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_content_font_google_font']) . $cmsmasters_option['children-charity' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_content_font_font_style'] . ";
	}
	
	.about_author .about_author_cont, 
	.about_author .about_author_cont a {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_content_font_font_size'] + 1) . "px;
	}
	
	.cmsmasters_comment_item .cmsmasters_comment_item_content p,
	.cmsmasters_twitter_wrap .published, 
	.cmsmasters_archive_type .cmsmasters_archive_item_info .cmsmasters_archive_item_user_name,
	.cmsmasters_archive_type .cmsmasters_archive_item_info .cmsmasters_archive_item_user_name a,
	.cmsmasters_archive_type .cmsmasters_archive_item_info .cmsmasters_archive_item_category,
	.cmsmasters_archive_type .cmsmasters_archive_item_info .cmsmasters_archive_item_category a,
	#wp-calendar * {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_content_font_font_size'] - 1) . "px;
	}
	
	.widget_custom_twitter_entries .tweet_time, 
	#page .cmsmasters_comment_item .cmsmasters_comment_item_cont_info .cmsmasters_comment_item_date, 
	#page .cmsmasters_comment_item .cmsmasters_comment_item_cont_info .comment-reply-link, 
	.cmsmasters_comment_item .cmsmasters_comment_item_cont_info .cmsmasters_comment_item_date, 
	.cmsmasters_open_project .project_details_item_desc .cmsmastersLike:before,
	.cmsmasters_open_project .project_features_item_desc .cmsmastersLike:before,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li p {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_content_font_font_size'] - 2) . "px;
	}
	
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li .cmsmasters_comments_post_title small {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_content_font_font_size'] - 3) . "px;
	}
	
	.mid_nav a .nav_subtitle,
	.bot_nav a .nav_subtitle {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_content_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_content_font_line_height'] - 4) . "px;
	}
	
	.mid_nav a .nav_subtitle,
	.bot_nav a .nav_subtitle {
		text-transform:none;
	}
	
	.cmsmasters_icon_list_items li:before {
		line-height:" . $cmsmasters_option['children-charity' . '_content_font_line_height'] . "px;
	}
	/* Finish Content Font */


	/* Start Link Font */
	a {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_link_font_google_font']) . $cmsmasters_option['children-charity' . '_link_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_link_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_link_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_link_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_link_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_link_font_text_decoration'] . ";
	}
	
	.cmsmasters_wrap_pagination ul li .page-numbers,
	.cmsmasters_comment_item .cmsmasters_comment_item_avatar a {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_link_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_link_font_line_height'] - 2) . "px;
	}
	
	a:hover {
		text-decoration:" . $cmsmasters_option['children-charity' . '_link_hover_decoration'] . ";
	}
	/* Finish Link Font */


	/* Start Navigation Title Font */
	.mid_nav a .nav_tag, 
	.bot_nav a .nav_tag, 
	.header_top .header_top_donation_but_wrap a,
	.navigation > li > a,
	.header_top .top_line_nav > li > a {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_nav_title_font_google_font']) . $cmsmasters_option['children-charity' . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_nav_title_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_nav_title_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_nav_title_font_text_transform'] . ";
	}
	
	.mid_nav.mid_nav div.menu-item-mega-container > ul > li > a,
	.bot_nav div.menu-item-mega-container > ul > li > a {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_nav_title_font_google_font']) . $cmsmasters_option['children-charity' . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_nav_title_font_font_weight'] . ";
	}
	
	.mid_nav a .nav_tag, 
	.bot_nav a .nav_tag {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_nav_title_font_font_size'] - 6) . "px;
	}
	
	.header_top .header_top_donation_but_wrap a,
	.header_top .top_line_nav > li > a {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_nav_title_font_font_size'] - 3) . "px;
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_nav_title_font_line_height'] + 2) . "px;
	}
	
	.header_top .meta_wrap > *:before {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_nav_title_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_nav_title_font_line_height'] - 2) . "px;
	}
	
	@media only screen and (max-width: 1024px) {
		#header .navigation .cmsmasters_resp_nav_toggle {
			font-size:" . ((int) $cmsmasters_option['children-charity' . '_nav_title_font_font_size'] + 6) . "px;
		}
	}
	
	.mid_nav div.menu-item-mega-container > ul > li > a,
	.bot_nav div.menu-item-mega-container > ul > li > a {
		text-transform:" . $cmsmasters_option['children-charity' . '_nav_title_font_text_transform'] . ";
	}
	/* Finish Navigation Title Font */


	/* Start Navigation Dropdown Font */
	.header_top .meta_wrap *,
	.top_line_nav li > a,
	.navigation ul li a {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_nav_dropdown_font_google_font']) . $cmsmasters_option['children-charity' . '_nav_dropdown_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_nav_dropdown_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_nav_dropdown_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_nav_dropdown_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_nav_dropdown_font_text_transform'] . ";
	}
	/* Finish Navigation Dropdown Font */


	/* Start H1 Font */
	h1,
	h1 a,
	.logo .title,
	.cmsmasters_pricing_table .cmsmasters_price_wrap,
	.cmsmasters_quotes_slider .cmsmasters_quote_placeholder:before,
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter.counter_has_icon_or_image .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h1_font_google_font']) . $cmsmasters_option['children-charity' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_font_size'] + 22) . "px;
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_line_height'] + 16) . "px;
	}
	
	.cmsmasters_quotes_slider .cmsmasters_quote_placeholder:before {
		font-size:150px;
		line-height:150px;
		font-weight:600;
	}
	
	.cmsmasters_dropcap {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h1_font_google_font']) . $cmsmasters_option['children-charity' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['children-charity' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_icon_list_items.cmsmasters_icon_list_icon_type_number .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	.cmsmasters_icon_box.box_icon_type_number:before,
	.cmsmasters_icon_box.cmsmasters_icon_heading_left.box_icon_type_number .icon_box_heading:before {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h1_font_google_font']) . $cmsmasters_option['children-charity' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['children-charity' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h1_font_font_style'] . ";
	}
	
	.cmsmasters_quotes_slider .cmsmasters_quote_content,
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter.counter_has_icon_or_image .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap,
	.cmsmasters_open_profile .cmsmasters_profile_header .cmsmasters_profile_title {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_line_height'] - 10) . "px;
	}
	
	.cmsmasters_dropcap.type1 {
		font-size:44px; /* static */
	}
	
	.cmsmasters_dropcap.type2 {
		font-size:22px; /* static */
	}
	
	.headline_outer .headline_inner .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_line_height'] + 15) . "px;
	}
	
	.headline_outer .headline_inner.align_left .headline_icon {
		padding-left:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_right .headline_icon {
		padding-right:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon {
		padding-top:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_line_height'] + 15) . "px;
	}
	
	.widget_tag_cloud a {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h1_font_google_font']) . $cmsmasters_option['children-charity' . '_h1_font_system_font'] . ";
	}
	/* Finish H1 Font */


	/* Start H2 Font */
	h2,
	h2 a,
	.widgettitle,
	.post_nav > span a,
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h2_font_google_font']) . $cmsmasters_option['children-charity' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h2_font_text_decoration'] . ";
	}
	
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_h2_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_h2_font_line_height'] - 14) . "px;
	}
	
	.cmsmasters_open_project .cmsmasters_project_title,
	.cmsmasters_open_post .cmsmasters_post_title, 
	.cmsmasters_post_default .cmsmasters_post_title,
	.cmsmasters_post_default .cmsmasters_post_title a {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_h2_font_font_size'] + 8) . "px;
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_h2_font_line_height'] + 12) . "px;
	}
	
	/* Finish H2 Font */


	/* Start H3 Font */
	h3,
	h3 a,
	.cmsmasters_toggles .cmsmasters_toggle_title a, 
	.cmsmasters_tabs.tabs_mode_tour .cmsmasters_tabs_list .cmsmasters_tabs_list_item a span,
	.cmsmasters_tabs.tabs_mode_tab .cmsmasters_tabs_list .cmsmasters_tabs_list_item a span,
	.cmsmasters_search > .about_author .about_author_cont_title,
	.cmsmasters_archive > .about_author .about_author_cont_title {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h3_font_google_font']) . $cmsmasters_option['children-charity' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h3_font_text_decoration'] . ";
	}
	/* Finish H3 Font */


	/* Start H4 Font */
	h4, 
	h4 a,
	.cmsmasters_tabs.tabs_mode_tab.lpr .cmsmasters_tabs_list .cmsmasters_tabs_list_item a span,
	.cmsmasters_twitter_wrap .cmsmasters_twitter_item_content, 
	.comment-respond .comment-reply-title, 
	.widget_custom_popular_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_title,
	.widget_custom_popular_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_title a,
	.widget_custom_latest_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_title,
	.widget_custom_latest_projects_entries .cmsmasters_slider_project_inner .cmsmasters_slider_project_title a,
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap, 
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a, 
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a,
	.cmsmasters_post_default .cmsmasters_post_read_more,
	.cmsmasters_post_masonry .cmsmasters_post_read_more,
	.cmsmasters_post_timeline .cmsmasters_post_read_more,
	.cmsmasters_slider_post .cmsmasters_slider_post_read_more, 
	.cmsmasters_open_profile .profile_details_title,
	.cmsmasters_open_profile .profile_features_title,
	.cmsmasters_open_profile .profile_social_icons_title {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h4_font_google_font']) . $cmsmasters_option['children-charity' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h4_font_text_decoration'] . ";
	}
	/* Finish H4 Font */


	/* Start H5 Font */
	h5,
	h5 a,
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat_counter_wrap, 
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap .cmsmasters_stat_units, 
	.cmsmasters_stats.stats_type_vertical .cmsmasters_stat_wrap *, 
	.cmsmasters_stats.stats_type_horizontal .cmsmasters_stat_wrap *,
	.cmsmasters_archive_type .cmsmasters_archive_item_type,
	.cmsmasters_woo_tabs.cmsmasters_tabs .cmsmasters_tabs_list_item a,
	.cmsmasters_pricing_table .cmsmasters_period,
	.cmsmasters_slider_post .cmsmasters_slider_post_cont_info *, 
	.cmsmasters_slider_project .cmsmasters_slider_project_cont_info *, 
	.cmsmasters_project_grid .cmsmasters_project_cont_info *, 
	.cmsmasters_project_puzzle .cmsmasters_project_cont_info *, 
	.cmsmasters_open_post .cmsmasters_post_cont_info *,
	.cmsmasters_post_default .cmsmasters_post_cont_info *,
	.cmsmasters_post_masonry .cmsmasters_post_cont_info *,
	.cmsmasters_post_timeline .cmsmasters_post_cont_info *,
	.project_navi a,
	.widget_recent_comments ul li a,
	.widget_recent_entries ul li a {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h5_font_google_font']) . $cmsmasters_option['children-charity' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h5_font_text_decoration'] . ";
		letter-spacing:.1em;
	}
	
	.cmsmasters_pricing_table .cmsmasters_period {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_h5_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_h5_font_line_height'] + 2) . "px;
	}
	
	.cmsmasters_stats.stats_type_vertical .cmsmasters_stat_wrap *, 
	.cmsmasters_stats.stats_type_horizontal .cmsmasters_stat_wrap * {
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_h5_font_line_height'] - 2) . "px;
	}
	
	.cmsmasters_comment_item .cmsmasters_comment_item_cont_info {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_h5_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_h5_font_line_height'] - 4) . "px;
	}
	
	.widget_rss ul li * {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h5_font_google_font']) . $cmsmasters_option['children-charity' . '_h5_font_system_font'] . ";
	}
	/* Finish H5 Font */


	/* Start H6 Font */
	h6,
	h6 a,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont > a,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tab.tab_comments li .cmsmasters_comments_post_title a,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list .cmsmasters_tabs_list_item a, 
	.cmsmasters_stats.stats_type_vertical .cmsmasters_stat_wrap .cmsmasters_stat_title, 
	.cmsmasters_stats.stats_type_horizontal .cmsmasters_stat_wrap .cmsmasters_stat_title,
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner *,
	.cmsmasters_img .cmsmasters_img_caption,
	.footer_nav > li > a,
	.post_nav span.sub,
	.cmsmasters_slider_post .cmsmasters_slider_post_date, 
	.cmsmasters_quotes_slider .cmsmasters_quote_site,
	.cmsmasters_quotes_slider .cmsmasters_quote_site a,
	.cmsmasters_quotes_grid .cmsmasters_quote_site,
	.cmsmasters_quotes_grid .cmsmasters_quote_site a,
	.cmsmasters_table caption,
	.cmsmasters_items_filter_wrap .cmsmasters_items_filter_but,
	.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but,
	.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list,
	.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a,
	.cmsmasters_post_masonry .cmsmasters_post_info,
	.cmsmasters_post_timeline .cmsmasters_post_info,
	.widget_custom_contact_form_entries .cmsmasters-form-builder *,
	.widget_custom_contact_info_entries div *,
	.widget_custom_contact_info_entries span *,
	.widget_nav_menu .menu a,
	.widget_pages ul li a {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h6_font_google_font']) . $cmsmasters_option['children-charity' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h6_font_text_decoration'] . ";
		letter-spacing:.1em;
	}
	
	.wpcf7-form p {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h6_font_google_font']) . $cmsmasters_option['children-charity' . '_h6_font_system_font'] . ";
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_h6_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_h6_font_line_height'] - 1) . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h6_font_font_style'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h6_font_text_decoration'] . ";
	}
	
	.widget_recent_entries ul li span {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_h6_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_h6_font_font_size'] - 2) . "px;
	}

	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont .published {
		font-size:" . $cmsmasters_option['children-charity' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_h6_font_font_size'] . "px;
	}
	/* Finish H6 Font */


	/* Start Button Font */
	.cmsmasters_button, 
	.button, 
	input[type=submit], 
	input[type=button], 
	button,
	.widget_custom_contact_form_entries .cmsmasters-form-builder .button,
	.widget_custom_contact_form_entries .cmsmasters-form-builder .button *,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item a {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_button_font_google_font']) . $cmsmasters_option['children-charity' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_button_font_text_transform'] . ";
		letter-spacing:1px;
	}
	
	.cmsmasters_post_default .cmsmasters_post_read_more,
	.cmsmasters_post_masonry .cmsmasters_post_read_more,
	.cmsmasters_post_timeline .cmsmasters_post_read_more,
	.cmsmasters_slider_post .cmsmasters_slider_post_read_more {
		line-height:" . $cmsmasters_option['children-charity' . '_content_font_line_height'] . "px;
	}
	
	.gform_wrapper .gform_footer input.button, 
	.gform_wrapper .gform_footer input[type=submit] {
		font-size:" . $cmsmasters_option['children-charity' . '_button_font_font_size'] . "px !important;
	}
	
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item a {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_button_font_font_size'] - 1) . "px;
	}
	
	.widget_custom_contact_form_entries .cmsmasters-form-builder .button,
	.widget_custom_contact_form_entries .cmsmasters-form-builder .button * {
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_button_font_line_height'] - 4) . "px;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	.cmsmasters_button.cmsmasters_but_icon_divider, 
	.cmsmasters_button.cmsmasters_but_icon_inverse {
		padding-left:" . ((int) $cmsmasters_option['children-charity' . '_button_font_line_height'] + 20) . "px;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_divider:before, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:before, 
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_divider:after, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		width:" . $cmsmasters_option['children-charity' . '_button_font_line_height'] . "px;
	}
	/* Finish Button Font */


	/* Start Small Text Font */
	small, 
	.cmsmasters-form-builder label,
	.cmsmasters_archive_type .cmsmasters_archive_item_info .cmsmasters_archive_item_date_wrap, 
	.cmsmasters_single_slider .cmsmasters_post_date, 
	.cmsmasters_post_default .cmsmasters_post_info,
	.cmsmasters_open_post .cmsmasters_post_meta_info,
	form .formError .formErrorContent {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_small_font_google_font']) . $cmsmasters_option['children-charity' . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_small_font_text_transform'] . ";
	}
	
	.cmsmasters-form-builder label,
	.cmsmasters-form-builder small,
	.wpcf7-form small {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_small_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_small_font_line_height'] - 2) . "px;
	}
	
	form .formError .formErrorContent {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_small_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_small_font_line_height'] - 4) . "px;
	}
	
	.cmsmasters_post_timeline .cmsmasters_post_info {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_small_font_font_size'] + 2) . "px;
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_small_font_line_height'] + 2). "px;
		font-weight:400;
	}
	
	.cmsmasters_archive_type .cmsmasters_archive_item_info .cmsmasters_archive_item_date_wrap {
		line-height:" . $cmsmasters_option['children-charity' . '_content_font_line_height'] . "px;
	}
	
	.gform_wrapper .description, 
	.gform_wrapper .gfield_description, 
	.gform_wrapper .gsection_description, 
	.gform_wrapper .instruction {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_small_font_google_font']) . $cmsmasters_option['children-charity' . '_small_font_system_font'] . " !important;
		font-size:" . $cmsmasters_option['children-charity' . '_small_font_font_size'] . "px !important;
		line-height:" . $cmsmasters_option['children-charity' . '_small_font_line_height'] . "px !important;
	}
	/* Finish Small Text Font */


	/* Start Text Fields Font */
	input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	textarea,
	select,
	option {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_input_font_google_font']) . $cmsmasters_option['children-charity' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_input_font_font_style'] . ";
	}
	
	.cmsmasters_header_search_form input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]) {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_input_font_google_font']) . $cmsmasters_option['children-charity' . '_input_font_system_font'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_input_font_font_style'] . ";
	}
	
	.gform_wrapper input:not([type=submit]):not([type=button]):not([type=radio]):not([type=checkbox]),
	.gform_wrapper textarea, 
	.gform_wrapper select {
		font-size:" . $cmsmasters_option['children-charity' . '_input_font_font_size'] . "px !important;
	}
	
	#page input[type=number] {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_input_font_font_size'] + 1) . "px;
	}
	
	/* Finish Text Fields Font */


	/* Start Blockquote Font */
	blockquote,
	.cmsmasters_quotes_slider .cmsmasters_quote_content {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_quote_font_google_font']) . $cmsmasters_option['children-charity' . '_quote_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_quote_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_quote_font_font_style'] . ";
	}
	
	q {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_quote_font_google_font']) . $cmsmasters_option['children-charity' . '_quote_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['children-charity' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_quote_font_font_style'] . ";
	}
	
	.cmsmasters_quotes_grid .cmsmasters_quote_content {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_quote_font_google_font']) . $cmsmasters_option['children-charity' . '_quote_font_system_font'] . ";
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_quote_font_font_size'] - 8) . "px;
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_quote_font_line_height'] - 6)  . "px;
		font-weight: 500;
	}
	/* Finish Blockquote Font */

/***************** Finish Theme Font Styles ******************/


";

if ($cmsmasters_option['children-charity' . '_h1_font_font_size'] > 49) {
	$custom_css .= "
		@media only screen and (max-width: 950px) {
			h1,
			h1 a {
				font-size:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_font_size'] - 14) . "px;
				line-height:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_line_height'] - 14) . "px;
			}
		}
		
		@media only screen and (max-width: 767px) {
			h1,
			h1 a {
				font-size:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_font_size'] - 18) . "px;
				line-height:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_line_height'] - 18) . "px;
			}
		}
		
		@media only screen and (max-width: 600px) {
			h1,
			h1 a {
				font-size:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_font_size'] - 22) . "px;
				line-height:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_line_height'] - 22) . "px;
			}
		}
		
		@media only screen and (max-width: 540px) {
			h1,
			h1 a {
				font-size:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_font_size'] - 26) . "px;
				line-height:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_line_height'] - 26) . "px;
			}
		}
		
		@media only screen and (max-width: 320px) {
			h1,
			h1 a {
				font-size:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_font_size'] - 30) . "px;
				line-height:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_line_height'] - 30) . "px;
			}
		}
	";
} else {
	$custom_css .= "
		@media only screen and (max-width: 950px) {
			h1,
			h1 a {
				font-size:36px;
				line-height:40px;
			}
		}
		
		@media only screen and (max-width: 767px) {
			h1,
			h1 a {
				font-size:32px;
				line-height:38px;
			}
		}
		
		@media only screen and (max-width: 600px) {
			h1,
			h1 a {
				font-size:28px;
				line-height:34px;
			}
		}
		
		@media only screen and (max-width: 540px) {
			h1,
			h1 a {
				font-size:24px;
				line-height:30px;
			}
		}
		
		@media only screen and (max-width: 320px) {
			h1,
			h1 a {
				font-size:20px;
				line-height:26px;
			}
		}
	";
}
	
	
	return apply_filters('children_charity_theme_fonts_filter', $custom_css);
}

