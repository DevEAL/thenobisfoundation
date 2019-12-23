<?php
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version 	1.0.0
 * 
 * Tribe Events Fonts Rules
 * Created by CMSMasters
 * 
 */


function children_charity_tribe_events_fonts($custom_css) {
	$cmsmasters_option = children_charity_get_global_options();
	
	
	$custom_css .= "
/***************** Start Tribe Events Font Styles ******************/

	/* Start Content Font */
	.widget .vcalendar .cmsmasters_widget_event_info, 
	.widget .vcalendar .cmsmasters_widget_event_info a, 
	.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item_descr, 
	.tribe-this-week-events-widget .tribe-this-week-event .duration, 
	.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue, 
	.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue a, 
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-],
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-] a {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_content_font_google_font']) . $cmsmasters_option['children-charity' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_content_font_font_style'] . ";
	}
	
	.widget .vcalendar .cmsmasters_widget_event_info, 
	.widget .vcalendar .cmsmasters_widget_event_info a, 
	.tribe-this-week-events-widget .tribe-this-week-event .duration, 
	.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue, 
	.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue a, 
	.tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info, 
	.tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info a {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_content_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_content_font_line_height'] - 4) . "px;
	}
	
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-],
	table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-] a, 
	table.tribe-events-calendar tbody td .tribe-events-viewmore a,
	.tribe-events-notices > ul > li,
	.tribe-events-venue .cmsmasters_events_venue_header_right a,
	.tribe-events-organizer .cmsmasters_events_organizer_header_right a {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_content_font_font_size'] - 2) . "px;
	}
	
	.tribe-mini-calendar thead th,
	.tribe-mini-calendar tbody,
	.tribe-mini-calendar tbody a {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_content_font_font_size'] - 2) . "px;
		line-height:20px;
	}
	
	.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item_descr {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_content_font_font_size'] - 3) . "px;
	}
	
	.tribe-events-grid .column.first, 
	.tribe-events-grid .tribe-week-grid-hours {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_content_font_font_size'] - 4) . "px;
	}
	
	
	.tribe-this-week-events-widget .tribe-this-week-widget-header-date {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_content_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_content_font_line_height'] - 4) . "px;
	}
	
	.tribe-events-grid .tribe-week-grid-hours {
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_content_font_line_height'] - 4) . "px;
	}
	
	
	@media only screen and (min-width: 950px) {
		.cmsmasters_row .one_first .tribe-events-adv-list-widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info {
			font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_content_font_google_font']) . $cmsmasters_option['children-charity' . '_content_font_system_font'] . ";
			font-size:" . $cmsmasters_option['children-charity' . '_content_font_font_size'] . "px;
			line-height:" . $cmsmasters_option['children-charity' . '_content_font_line_height'] . "px;
			font-weight:" . $cmsmasters_option['children-charity' . '_content_font_font_weight'] . ";
			font-style:" . $cmsmasters_option['children-charity' . '_content_font_font_style'] . ";
		}
	}
	
	/* Finish Content Font */
	
	
	/* Start Link Font */
	
	@media only screen and (min-width: 950px) {
		.cmsmasters_row .one_first .tribe-events-adv-list-widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info a {
			font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_link_font_google_font']) . $cmsmasters_option['children-charity' . '_link_font_system_font'] . ";
			font-size:" . $cmsmasters_option['children-charity' . '_link_font_font_size'] . "px;
			line-height:" . $cmsmasters_option['children-charity' . '_link_font_line_height'] . "px;
			font-weight:" . $cmsmasters_option['children-charity' . '_link_font_font_weight'] . ";
			font-style:" . $cmsmasters_option['children-charity' . '_link_font_font_style'] . ";
			text-transform:" . $cmsmasters_option['children-charity' . '_link_font_text_transform'] . ";
			text-decoration:" . $cmsmasters_option['children-charity' . '_link_font_text_decoration'] . ";
		}
	}
	
	.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item_descr a {
		font-size:" . ((int)$cmsmasters_option['children-charity' . '_link_font_font_size'] - 3) . "px;
	}
	
	/* Finish Link Font */
	
	
	/* Start H1 Font */
	.tribe-events-adv-list-widget .cmsmasters_event_date.date_for_content .cmsmasters_event_date_day,
	.tribe-events-list .type-tribe_events .cmsmasters_events_start_date .cmsmasters_event_day,
	.cmsmasters_single_event .cmsmasters_events_start_date .cmsmasters_event_day,
	.tribe-events-venue .cmsmasters_events_start_date .cmsmasters_event_day,
	.tribe-events-organizer .cmsmasters_events_start_date .cmsmasters_event_day {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h1_font_google_font']) . $cmsmasters_option['children-charity' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h1_font_text_decoration'] . ";
	}
	
	.tribe-events-list .type-tribe_events .cmsmasters_events_start_date .cmsmasters_event_day,
	.cmsmasters_single_event .cmsmasters_events_start_date .cmsmasters_event_day,
	.tribe-events-venue .cmsmasters_events_start_date .cmsmasters_event_day,
	.tribe-events-organizer .cmsmasters_events_start_date .cmsmasters_event_day {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_font_size'] + 50) . "px;
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_line_height'] + 50) . "px;
		font-weight:400;
	}
	
	@media only screen and (min-width: 950px) {
		.cmsmasters_row .one_first .tribe-events-adv-list-widget .cmsmasters_event_date.date_for_content .cmsmasters_event_date_day {
			font-size:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_font_size'] + 50) . "px;
			line-height:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_line_height'] + 50) . "px;
			font-weight:400;
		}
	}
	
	@media only screen and (min-width: 768px) {
		.cmsmasters_row .one_first .tribe-events-countdown-widget .tribe-countdown-text a, 
		.cmsmasters_row .one_first .tribe-events-countdown-widget .tribe-countdown-time {
			font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h1_font_google_font']) . $cmsmasters_option['children-charity' . '_h1_font_system_font'] . ";
			font-size:" . $cmsmasters_option['children-charity' . '_h1_font_font_size'] . "px;
			line-height:" . $cmsmasters_option['children-charity' . '_h1_font_line_height'] . "px;
			font-weight:" . $cmsmasters_option['children-charity' . '_h1_font_font_weight'] . ";
			font-style:" . $cmsmasters_option['children-charity' . '_h1_font_font_style'] . ";
			text-transform:" . $cmsmasters_option['children-charity' . '_h1_font_text_transform'] . ";
			text-decoration:" . $cmsmasters_option['children-charity' . '_h1_font_text_decoration'] . ";
		}
		
		.cmsmasters_row .one_first .tribe-events-countdown-widget .tribe-countdown-text a {
			font-size:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_font_size'] + 2) . "px;
			line-height:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_line_height'] + 2) . "px;
		}
		
		.cmsmasters_row .one_first .tribe-events-countdown-widget .tribe-countdown-time {
			font-size:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_font_size'] + 28) . "px;
			line-height:" . ((int) $cmsmasters_option['children-charity' . '_h1_font_line_height'] + 22) . "px;
		}
	}
	/* Finish H1 Font */
	
	
	/* Start H2 Font */
	
	.tribe-events-countdown-widget .tribe-countdown-time {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h2_font_google_font']) . $cmsmasters_option['children-charity' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h2_font_text_decoration'] . ";
	}
	
	.tribe-events-countdown-widget .tribe-countdown-time {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_h2_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_h2_font_line_height'] - 4) . "px;
	}
	
	@media only screen and (min-width: 540px) and (max-width: 767px) {
		.tribe-events-countdown-widget .tribe-countdown-time {
			font-size:" . ((int) $cmsmasters_option['children-charity' . '_h2_font_font_size'] + 2) . "px;
			line-height:" . ((int) $cmsmasters_option['children-charity' . '_h2_font_line_height']) . "px;
		}
	}
	
	/* Finish H2 Font */
	
	
	/* Start H3 Font */
	.tribe-mobile-day .tribe-mobile-day-date, 
	.tribe-events-list .tribe-events-list-event-title,
	.tribe-events-list .tribe-events-list-event-title a,
	.cmsmasters_single_event .tribe-events-single-event-title {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h3_font_google_font']) . $cmsmasters_option['children-charity' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h3_font_text_decoration'] . ";
	}
	
	.tribe-events-list .tribe-events-list-event-title,
	.tribe-events-list .tribe-events-list-event-title a,
	.cmsmasters_single_event .tribe-events-single-event-title {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_h3_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_h3_font_line_height'] + 4) . "px;
	}
	
	@media only screen and (min-width: 950px) {
		.cmsmasters_row .one_first .tribe-events-adv-list-widget .tribe-events-list-widget-content-wrap .entry-title a {
			font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h3_font_google_font']) . $cmsmasters_option['children-charity' . '_h3_font_system_font'] . ";
			font-size:" . ((int)$cmsmasters_option['children-charity' . '_h3_font_font_size'] + 4) . "px;
			line-height:" . ((int)$cmsmasters_option['children-charity' . '_h3_font_line_height'] + 4) . "px;
			font-weight:" . $cmsmasters_option['children-charity' . '_h3_font_font_weight'] . ";
			font-style:" . $cmsmasters_option['children-charity' . '_h3_font_font_style'] . ";
			text-transform:" . $cmsmasters_option['children-charity' . '_h3_font_text_transform'] . ";
			text-decoration:" . $cmsmasters_option['children-charity' . '_h3_font_text_decoration'] . ";
			letter-spacing:normal;
		}
		
		.cmsmasters_row .one_first .one_first .tribe-events-adv-list-widget .tribe-events-list-widget-content-wrap .entry-title a {
			font-size:" . ((int) $cmsmasters_option['children-charity' . '_h3_font_font_size'] + 4) . "px;
			line-height:" . ((int) $cmsmasters_option['children-charity' . '_h3_font_line_height'] + 4) . "px;
		}
	}
	/* Finish H3 Font */
	
	
	/* Start H4 Font */
	.tribe-events-page-title,
	.tribe-events-related-events-title, 
	.tribe-events-list .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_week,
	.cmsmasters_single_event .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_week,
	.tribe-events-venue .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_week,
	.tribe-events-organizer .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_week {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h4_font_google_font']) . $cmsmasters_option['children-charity' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h4_font_text_decoration'] . ";
	}
	
	@media only screen and (min-width: 950px) {
		.cmsmasters_row .one_first .tribe-events-adv-list-widget .cmsmasters_event_date.date_for_content > span.cmsmasters_event_date_month_wrap .cmsmasters_event_date_week {
			font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h4_font_google_font']) . $cmsmasters_option['children-charity' . '_h4_font_system_font'] . ";
			font-size:" . $cmsmasters_option['children-charity' . '_h4_font_font_size'] . "px;
			line-height:" . $cmsmasters_option['children-charity' . '_h4_font_line_height'] . "px;
			font-weight:" . $cmsmasters_option['children-charity' . '_h4_font_font_weight'] . ";
			font-style:" . $cmsmasters_option['children-charity' . '_h4_font_font_style'] . ";
			text-transform:" . $cmsmasters_option['children-charity' . '_h4_font_text_transform'] . ";
			text-decoration:" . $cmsmasters_option['children-charity' . '_h4_font_text_decoration'] . ";
		}
	}
	
	/* Finish H4 Font */
	
	
	/* Start H5 Font */
	.tribe-bar-filters-inner > div label,
	#tribe-events-content > .tribe-events-button,
	.cmsmasters_single_event .tribe-events-cost,
	.cmsmasters_single_event_meta dt, 
	.cmsmasters_single_event_meta dd a,
	.tribe-mobile-day .tribe-events-read-more, 
	.tribe-events-countdown-widget .tribe-countdown-text,
	.tribe-events-countdown-widget .tribe-countdown-text a, 
	.tribe-this-week-events-widget .tribe-events-viewmore a,
	.tribe-events-list .tribe-events-list-separator-month,
	.tribe-events-list .tribe-events-day-time-slot > h5,
	.cmsmasters_single_event .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_month,
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .entry-title,
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .entry-title a,
	.tribe-events-venue .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_month,
	.tribe-events-organizer .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_month {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h5_font_google_font']) . $cmsmasters_option['children-charity' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h5_font_text_decoration'] . ";
	}
	
	.tribe-this-week-events-widget .tribe-this-week-event .entry-title a, 
	.tribe_mini_calendar_widget .tribe-mini-calendar-list-wrapper .entry-title a {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_h5_font_font_size'] - 1) . "px;
	}
	/* Finish H5 Font */
	
	
	/* Start H6 Font */
	.tribe-this-week-events-widget .tribe-events-page-title, 
	.tribe-events-tooltip .entry-title,
	.tribe-mini-calendar [id*=tribe-mini-calendar-month],
	table.tribe-events-calendar tbody td .tribe-events-month-event-title,
	table.tribe-events-calendar tbody td .tribe-events-month-event-title a, 
	.tribe-mobile-day .tribe-events-event-schedule-details, 
	.tribe-mobile-day .tribe-event-schedule-details,
	table.tribe-events-calendar thead th,
	.tribe-events-grid .tribe-grid-header span, 
	.tribe-events-photo .cmsmasters_event_date_details {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_h6_font_google_font']) . $cmsmasters_option['children-charity' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['children-charity' . '_h6_font_text_decoration'] . ";
	}
	
	.tribe-events-tooltip .entry-title, 
	table.tribe-events-calendar tbody td .tribe-events-month-event-title,
	table.tribe-events-calendar tbody td .tribe-events-month-event-title a {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_h6_font_font_size'] - 1) . "px;
	}
	/* Finish H6 Font */
	
	
	/* Start Button Font */
	#tribe-bar-views .tribe-bar-views-list li,
	#tribe-bar-views .tribe-bar-views-list li a {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_button_font_google_font']) . $cmsmasters_option['children-charity' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_button_font_text_transform'] . ";
		letter-spacing:1px;
	}
	
	/* Finish Button Font */
	
	
	/* Start Small Text Font */
	.tribe-events-venue-widget .tribe-venue-widget-venue-name, 
	.cmsmasters_event_date,
	.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item_title, 
	.tribe-events-countdown-widget .tribe-countdown-under,
	.tribe-events-countdown-widget .tribe-countdown-number .tribe-countdown-days span,
	.tribe-events-tooltip .duration, 
	.tribe-related-events .cmsmasters_events_start_date, 
	.tribe-events-tooltip .tribe-events-event-body *, 
	.tribe-events-grid .tribe-week-event .vevent .entry-title a, 
	.tribe-events-list .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_month {
		font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_small_font_google_font']) . $cmsmasters_option['children-charity' . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option['children-charity' . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['children-charity' . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['children-charity' . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['children-charity' . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['children-charity' . '_small_font_text_transform'] . ";
	}
	
	.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item_title, 
	.tribe-events-tooltip .tribe-events-event-body * {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_small_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['children-charity' . '_small_font_line_height'] - 1) . "px;
	}
	
	.tribe-events-grid .tribe-week-event .vevent .entry-title a, 
	.tribe-events-tooltip .duration {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_small_font_font_size'] - 2) . "px;
	}
	
	.cmsmasters_event_date,
	.tribe-events-countdown-widget .tribe-countdown-number .tribe-countdown-under {
		font-size:" . ((int) $cmsmasters_option['children-charity' . '_small_font_font_size'] - 1) . "px;
	}
	
	@media only screen and (min-width: 950px) {
		.cmsmasters_row .one_first .tribe-events-adv-list-widget .cmsmasters_event_date.date_for_content > span.cmsmasters_event_date_month_wrap .cmsmasters_event_date_month {
			font-family:" . children_charity_get_google_font($cmsmasters_option['children-charity' . '_small_font_google_font']) . $cmsmasters_option['children-charity' . '_small_font_system_font'] . ";
			font-size:" . $cmsmasters_option['children-charity' . '_small_font_font_size'] . "px;
			line-height:" . $cmsmasters_option['children-charity' . '_small_font_line_height'] . "px;
			font-weight:" . $cmsmasters_option['children-charity' . '_small_font_font_weight'] . ";
			font-style:" . $cmsmasters_option['children-charity' . '_small_font_font_style'] . ";
			text-transform:" . $cmsmasters_option['children-charity' . '_small_font_text_transform'] . ";
		}
		
		.cmsmasters_row .one_first .tribe-events-countdown-widget .tribe-countdown-number .tribe-countdown-under {
			font-size:" . ((int) $cmsmasters_option['children-charity' . '_small_font_font_size'] + 2) . "px;
			line-height:" . ((int) $cmsmasters_option['children-charity' . '_small_font_line_height'] + 2) . "px;
		}
	}
	
	/* Finish Small Text Font */

/***************** Finish Tribe Events Font Styles ******************/

";
	
	
	return $custom_css;
}

add_filter('children_charity_theme_fonts_filter', 'children_charity_tribe_events_fonts');

