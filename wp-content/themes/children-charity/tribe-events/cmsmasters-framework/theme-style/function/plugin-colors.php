<?php
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version 	1.0.8
 * 
 * Tribe Events Colors Rules
 * Created by CMSMasters
 * 
 */


function children_charity_tribe_events_colors($custom_css) {
	$cmsmasters_option = children_charity_get_global_options();
	
	
	$cmsmasters_color_schemes = cmsmasters_color_schemes_list();
	
	
	foreach ($cmsmasters_color_schemes as $scheme => $title) {
		$rule = (($scheme != 'default') ? "html .cmsmasters_color_scheme_{$scheme} " : '');
		
		
		$custom_css .= "
/***************** Start {$title} Tribe Events Color Scheme Rules ******************/

	/* Start Main Content Font Color */
	{$rule}table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-], 
	{$rule}table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-] a,
	{$rule}.cmsmasters_single_event .cmsmasters_single_event_header_right a,
	{$rule}.cmsmasters_single_event .cmsmasters_single_event_header_right a:before,
	{$rule}.tribe-mini-calendar tbody a,
	{$rule}.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue a,
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header_right a,
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header_right a {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_color']) . "
	}
	/* Finish Main Content Font Color */
	
	
	/* Start Primary Color */
	{$rule}#tribe-events-content > .tribe-events-button:hover,
	{$rule}.tribe-events-photo .tribe-events-list-event-title a, 
	{$rule}table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-]:hover a,
	{$rule}table.tribe-events-calendar tbody td .tribe-events-viewmore a:hover,
	{$rule}#tribe-bar-views .button,
	{$rule}#tribe-events-content.tribe-events-list .tribe-events-list-event-title a:hover,
	{$rule}#tribe-bar-views.tribe-bar-views-open .button,
	{$rule}#tribe-bar-views .tribe-bar-views-list li a:hover,
	{$rule}#tribe-bar-views .tribe-bar-views-list li.tribe-bar-active a, 
	{$rule}#tribe-bar-views .tribe-bar-views-list li.tribe-bar-active a:hover,
	{$rule}.tribe-events-grid .tribe-grid-header a:hover span,
	{$rule}.tribe-events-grid .tribe-grid-header .tribe-week-today span,
	{$rule}.cmsmasters_single_event .tribe-events-schedule .tribe-events-cost,
	{$rule}.cmsmasters_single_event .cmsmasters_single_event_header_right a:hover,
	{$rule}.cmsmasters_single_event .cmsmasters_single_event_header_right a:hover:before,
	{$rule}.cmsmasters_event_date,
	{$rule}.tribe-related-events .tribe-related-events-title a,
	{$rule}table.tribe-events-calendar tbody td.tribe-events-past div[id*=tribe-events-daynum-] a:hover,
	{$rule}table.tribe-events-calendar tbody td.tribe-events-othermonth div[id*=tribe-events-daynum-] a:hover,
	{$rule}.tribe-events-list .tribe-events-day-time-slot > h5,
	{$rule}.widget .vcalendar .cmsmasters_widget_event_info a:hover,
	{$rule}.tribe-events-list .tribe-events-list-separator-month,
	{$rule}.tribe-events-countdown-widget .tribe-countdown-text a:hover,
	{$rule}.tribe-mini-calendar thead a:hover,
	{$rule}.tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info a:hover,
	{$rule}.tribe-mini-calendar tbody a:hover,
	{$rule}.tribe-events-adv-list-widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info a,
	{$rule}.tribe-this-week-events-widget .tribe-this-week-widget-header-date, 
	{$rule}.tribe-mini-calendar tbody .tribe-events-present,
	{$rule}.tribe-mini-calendar tbody .tribe-events-present a,
	{$rule}.tribe-this-week-events-widget .tribe-this-week-event .tribe-venue a:hover,
	{$rule}.tribe-events-venue .cmsmasters_events_venue_header_right a:hover,
	{$rule}.tribe-events-organizer .tribe-events-event-meta a:hover,
	{$rule}.tribe-events-organizer .cmsmasters_events_organizer_header_right a:hover,
	{$rule}#tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option:hover,
	{$rule}#tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option.tribe-bar-active {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
	}
	
	{$rule}table.tribe-events-calendar tbody td .tribe-events-month-event-title a:hover,
	{$rule}.tribe-events-photo .cmsmasters_event_date_details,
	{$rule}#tribe-bar-views .button > span,
	{$rule}#tribe-bar-views .button > span:before,
	{$rule}#tribe-bar-views .button > span:after,
	{$rule}.tribe-events-sub-nav li a:hover span:not([class]),
	{$rule}.tribe-events-grid .tribe-week-event .vevent .entry-title a:hover,
	{$rule}.tribe-events-grid .tribe-week-event:hover .vevent .entry-title a,
	{$rule}.tribe-events-notices:before,
	{$rule}.tribe-mini-calendar tbody a:before,
	{$rule}.tribe-this-week-events-widget .this-week-today .tribe-this-week-widget-header-date {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
	}
	
	@media only screen and (max-width: 768px) {
		{$rule}table.tribe-events-calendar tbody td.tribe-events-has-events:before {
			" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
		}
	}
	
	{$rule}#tribe-bar-views .button,
	{$rule}#tribe-bar-views.tribe-bar-views-open .button,
	{$rule}.tribe-events-sub-nav li a:hover span:not([class]) {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
	}
	
	
	@media only screen and (min-width: 950px) {
		{$rule}.sidebar_layout_11 .one_first .tribe-events-adv-list-widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info a {
			" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_link']) . "
		}
	}
	
	/* Finish Primary Color */
	
	
	/* Start Highlight Color */
	{$rule}.event_hover,
	{$rule}table.tribe-events-calendar tbody td.tribe-events-past .tribe-events-month-event-title a,
	{$rule}.tribe-events-tooltip .duration,
	{$rule}.tribe-mini-calendar tbody a, 
	{$rule}.tribe-mini-calendar tbody span, 
	{$rule}.tribe-events-photo .tribe-events-list-event-title a:hover,
	{$rule}table.tribe-events-calendar tbody td.tribe-events-othermonth div[id*=tribe-events-daynum-],
	{$rule}table.tribe-events-calendar tbody td.tribe-events-othermonth div[id*=tribe-events-daynum-] a,
	{$rule}table.tribe-events-calendar tbody td.tribe-events-past div[id*=tribe-events-daynum-],
	{$rule}table.tribe-events-calendar tbody td.tribe-events-past div[id*=tribe-events-daynum-] a,
	{$rule}.tribe-events-list .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_month,
	{$rule}.cmsmasters_single_event .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_month,
	{$rule}.tribe-events-adv-list-widget .cmsmasters_event_date.date_for_content > span.cmsmasters_event_date_month_wrap .cmsmasters_event_date_month,
	{$rule}.tribe-events-adv-list-widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info a:hover,
	{$rule}.widget .vcalendar .cmsmasters_widget_event_info a,
	{$rule}.tribe-related-events .cmsmasters_event_start,
	{$rule}.tribe-mini-calendar-list-wrapper .cmsmasters_widget_event_info a,
	{$rule}.tribe-related-events .tribe-related-events-title a:hover,
	{$rule}.tribe-events-venue .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_month,
	{$rule}.tribe-events-organizer .tribe-events-event-meta,
	{$rule}.tribe-events-organizer .tribe-events-event-meta a,
	{$rule}.tribe-events-organizer .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_month {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.cmsmasters_row .one_first .tribe-events-adv-list-widget .tribe-events-read-more-wrap a:hover, 
	{$rule}.tribe-events-list .tribe-events-read-more-wrap .button:hover {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_hover']) . "
	}
	
	{$rule}.cmsmasters_row .one_first .tribe-events-adv-list-widget .tribe-events-read-more-wrap a:hover, 
	{$rule}.tribe-events-list .tribe-events-read-more-wrap .button:hover {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_hover']) . "
	}
	
	@media only screen and (min-width: 950px) {
		{$rule}.sidebar_layout_11 .one_first .tribe-events-adv-list-widget .tribe-events-list-widget-content-wrap .cmsmasters_widget_event_info a:hover, 
		{$rule}.sidebar_layout_11 .one_first .tribe-events-adv-list-widget .cmsmasters_event_date.date_for_content > span.cmsmasters_event_date_month_wrap .cmsmasters_event_date_month {
			" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_hover']) . "
		}
	}
	
	/* Finish Highlight Color */
	
	
	/* Start Headings Color */
	{$rule}.tribe-events-grid .tribe-week-event:hover .vevent .entry-title a,
	{$rule}.cmsmasters_single_event_meta dt,
	{$rule}.tribe-mobile-day .tribe-events-event-schedule-details, 
	{$rule}.tribe-mobile-day .tribe-event-schedule-details,
	{$rule}#tribe-events-content > .tribe-events-button,
	{$rule}.tribe-bar-filters-inner > div label,
	{$rule}#tribe-bar-views .tribe-bar-views-list li,
	{$rule}#tribe-bar-views .tribe-bar-views-list li a,
	{$rule}table.tribe-events-calendar tbody td .tribe_events,
	{$rule}table.tribe-events-calendar tbody td .tribe_events a,
	{$rule}table.tribe-events-calendar tbody td .tribe-events-viewmore a,
	{$rule}.tribe-events-sub-nav li a span:not([class]),
	{$rule}.tribe-events-grid .tribe-week-event .vevent .entry-title a,
	{$rule}.tribe-events-list .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_week,
	{$rule}#tribe-events-content.tribe-events-list .tribe-events-list-event-title a,
	{$rule}.cmsmasters_single_event .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_week,
	{$rule}.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item_title,
	{$rule}.tribe-events-countdown-widget .tribe-countdown-text,
	{$rule}.tribe-events-countdown-widget .tribe-countdown-text a,
	{$rule}.tribe-events-countdown-widget .tribe-countdown-time,
	{$rule}.tribe-events-countdown-widget .tribe-countdown-number span, 
	{$rule}.tribe-this-week-events-widget .tribe-events-page-title,
	{$rule}.tribe-events-venue .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_week,
	{$rule}.tribe-events-organizer .cmsmasters_events_start_date .cmsmasters_event_month_week .cmsmasters_event_week,
	{$rule}#tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_heading']) . "
	}
	
	{$rule}.tribe-mini-calendar tbody .tribe-mini-calendar-today a:before, 
	{$rule}table.tribe-events-calendar tbody td.tribe-events-has-events.mobile-active:before,
	/*   */
	{$rule}table.tribe-events-calendar thead th,
	{$rule}.tribe-events-grid .tribe-grid-header,
	{$rule}.tribe-mini-calendar .tribe-mini-calendar-nav,
	{$rule}.tribe-mini-calendar tbody a:hover:before,
	{$rule}.tribe-mini-calendar tbody .tribe-events-present a:before {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_heading']) . "
	}
	
	@media only screen and (min-width: 950px) {
		{$rule}.cmsmasters_row .one_first .tribe-events-adv-list-widget .cmsmasters_event_date.date_for_content > span.cmsmasters_event_date_month_wrap .cmsmasters_event_date_week {
			" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_heading']) . "
		}
	}
	
	/* Finish Headings Color */
	
	
	/* Start Main Background Color */
	{$rule}.event_bg,
	/*   */
	{$rule}.tribe-events-list .tribe-events-read-more-wrap .button,
	{$rule}.cmsmasters_row .one_first .tribe-events-adv-list-widget .tribe-events-read-more-wrap a, 
	{$rule}.tribe-events-photo .cmsmasters_event_date_details .cmsmasters_event_photo_date,
	{$rule}table.tribe-events-calendar thead th,
	{$rule}table.tribe-events-calendar tbody td.tribe-events-present div[id*=tribe-events-daynum-],
	{$rule}table.tribe-events-calendar tbody td.tribe-events-present div[id*=tribe-events-daynum-] a,
	{$rule}table.tribe-events-calendar tbody td .tribe-events-month-event-title a:hover,
	{$rule}.tribe-events-sub-nav li a:hover span:not([class]),
	{$rule}.tribe-events-grid .tribe-grid-header span,
	{$rule}.tribe-events-grid .tribe-week-event .vevent .entry-title a:hover,
	{$rule}.tribe-events-grid .tribe-week-event:hover .vevent .entry-title a,
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-venue-name a,
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-venue-name a:hover,
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-venue-name:before,
	{$rule}.tribe-mini-calendar thead,
	{$rule}.tribe-mini-calendar thead a,
	{$rule}.tribe-this-week-events-widget .this-week-today .tribe-this-week-widget-header-date {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}table.tribe-events-calendar,
	{$rule}.tribe-events-tooltip,
	{$rule}#tribe-bar-views .button,
	{$rule}#tribe-bar-views.tribe-bar-views-open .button,
	{$rule}.tribe-events-sub-nav li a span:not([class]),
	{$rule}.tribe-events-grid .tribe-scroller,
	{$rule}.tribe-mini-calendar {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}table.tribe-events-calendar thead th {
		border-color:rgba(" . cmsmasters_color2rgb($cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . ", .1);
	}
	
	{$rule}.tribe-events-tooltip:after {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.tribe-events-grid .tribe-events-tooltip:after {
		" . cmsmasters_color_css('border-right-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	
	{$rule}.tribe-events-grid .tribe-events-day-column-0 .tribe-events-tooltip:after,
	{$rule}.tribe-events-grid .tribe-events-day-column-5 .tribe-events-tooltip:after,
	{$rule}.tribe-events-grid .tribe-events-day-column-6 .tribe-events-tooltip:after {
		" . cmsmasters_color_css('border-left-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_bg']) . "
	}
	/* Finish Main Background Color */
	
	
	/* Start Alternate Background Color */
	{$rule}table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-],
	{$rule}.tribe-events-grid .tribe-grid-allday,
	{$rule}.tribe-events-list .tribe-events-day-time-slot > h5,
	{$rule}.tribe-events-list .tribe-events-list-separator-month,
	{$rule}.tribe-events-grid .tribe-week-event .vevent .entry-title a,
	{$rule}.tribe-events-notices,
	{$rule}.tribe-mini-calendar td.tribe-events-othermonth {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_alternate']) . "
	}
	/* Finish Alternate Background Color */
	
	
	/* Start Borders Color */
	{$rule}.tribe-events-list .type-tribe_events .cmsmasters_events_start_date .cmsmasters_event_day,
	{$rule}.cmsmasters_single_event .cmsmasters_events_start_date .cmsmasters_event_day,
	{$rule}.tribe-mini-calendar tbody .tribe-events-othermonth,
	{$rule}.tribe-mini-calendar tbody .tribe-events-othermonth a,
	{$rule}.tribe-events-venue .cmsmasters_events_start_date .cmsmasters_event_day,
	{$rule}.tribe-events-organizer .cmsmasters_events_start_date .cmsmasters_event_day {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_border']) . "
	}
	
	@media only screen and (min-width: 950px) {
		{$rule}.cmsmasters_row .one_first .tribe-events-adv-list-widget .cmsmasters_event_date.date_for_content .cmsmasters_event_date_day {
			" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_border']) . "
		}
	}
	
	{$rule}.tribe-mobile-day .tribe-events-mobile,
	{$rule}table.tribe-events-calendar tbody tr td,
	{$rule}table.tribe-events-calendar tbody td .tribe_events,
	{$rule}table.tribe-events-calendar tbody td div[id*=tribe-events-daynum-],
	{$rule}.tribe-events-tooltip,
	{$rule}.tribe-events-sub-nav li a span:not([class]),
	{$rule}.tribe-events-grid .tribe-scroller,
	{$rule}.tribe-events-grid .tribe-week-grid-block div,
	{$rule}.tribe-events-grid .tribe-week-grid-block div:before,
	{$rule}.tribe-events-grid .tribe-grid-allday,
	{$rule}.tribe-events-grid .tribe-week-grid-hours div,
	{$rule}.tribe-events-grid .tribe-grid-content-wrap .column,
	{$rule}.tribe-events-list .type-tribe_events,
	{$rule}.tribe-events-list .tribe-events-list-separator-month,
	{$rule}.tribe-events-list .tribe-events-day-time-slot > h5,
	{$rule}.cmsmasters_single_event_meta .cmsmasters_event_meta_info_item,
	{$rule}.tribe-events-notices,
	{$rule}.tribe-events-related-events-title,
	{$rule}.widget .vcalendar .type-tribe_events,
	{$rule}.tribe-mini-calendar tbody td,
	{$rule}.tribe-mini-calendar-list-wrapper .type-tribe_events,
	{$rule}.tribe-this-week-events-widget .tribe-this-week-widget-day {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.tribe-events-tooltip:before {
		" . cmsmasters_color_css('border-top-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.tribe-events-grid .tribe-events-tooltip:before {
		" . cmsmasters_color_css('border-right-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_border']) . "
	}
	
	{$rule}.tribe-events-grid .tribe-events-day-column-0 .tribe-events-tooltip:before,
	{$rule}.tribe-events-grid .tribe-events-day-column-5 .tribe-events-tooltip:before,
	{$rule}.tribe-events-grid .tribe-events-day-column-6 .tribe-events-tooltip:before {
		" . cmsmasters_color_css('border-left-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_border']) . "
	}
	/* Finish Borders Color */

	/* Start Secondary Color */
	{$rule}.tribe-events-countdown-widget .tribe-countdown-text > a:before {
		" . cmsmasters_color_css('color', $cmsmasters_option['children-charity' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}table.tribe-events-calendar tbody td.tribe-events-present div[id*=tribe-events-daynum-], 
	{$rule}.tribe-mini-calendar thead, 
	{$rule}.tribe-events-venue-widget .tribe-venue-widget-venue, 
	{$rule}.cmsmasters_row .one_first .tribe-events-adv-list-widget .tribe-events-read-more-wrap a, 
	{$rule}.tribe-events-list .tribe-events-read-more-wrap .button {
		" . cmsmasters_color_css('background-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_secondary']) . "
	}
	
	{$rule}.cmsmasters_row .one_first .tribe-events-adv-list-widget .tribe-events-read-more-wrap a, 
	{$rule}.tribe-events-list .tribe-events-read-more-wrap .button {
		" . cmsmasters_color_css('border-color', $cmsmasters_option['children-charity' . '_' . $scheme . '_secondary']) . "
	}
	/* Finish Secondary Color */
	
	/* Start Custom Color */
	{$rule}#tribe-bar-views.tribe-bar-views-open .button > span {
		background:transparent;
	}
	/* Finish Custom Color */

/***************** Finish {$title} Tribe Events Color Scheme Rules ******************/

";
	}
	
	
	return $custom_css;
}

add_filter('children_charity_theme_colors_secondary_filter', 'children_charity_tribe_events_colors');

