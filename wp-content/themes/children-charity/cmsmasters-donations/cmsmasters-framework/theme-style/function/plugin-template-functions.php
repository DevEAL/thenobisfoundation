<?php 
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version		1.0.8
 * 
 * CMSMasters Donations Template Functions
 * Created by CMSMasters
 * 
 */


/* Header Top Donations Button */
function children_charity_donations_header_top_button($cmsmasters_option) {
	if (
		isset($cmsmasters_option['children-charity' . '_header_top_line_donations_but']) && 
		$cmsmasters_option['children-charity' . '_header_top_line_donations_but'] &&
		isset($cmsmasters_option['children-charity' . '_header_top_line_donations_but_text']) && 
		$cmsmasters_option['children-charity' . '_header_top_line_donations_but_text'] != '' 
	) {
		$cmsmasters_donations_form_page = get_option('cmsmasters_donations_form_page');
		
		$cmsmasters_donations_button_link = (isset($cmsmasters_option['children-charity' . '_header_top_line_donations_but_link']) && $cmsmasters_option['children-charity' . '_header_top_line_donations_but_link'] != '' ? $cmsmasters_option['children-charity' . '_header_top_line_donations_but_link'] : get_permalink($cmsmasters_donations_form_page));
		
		
		echo '<div class="header_top_donation_but_wrap">' . 
			'<a href="' . esc_url($cmsmasters_donations_button_link) . '" class="header_top_donation_but"><span>' . esc_html($cmsmasters_option['children-charity' . '_header_top_line_donations_but_text']) . '</span></a>' . 
		'</div>';
	}
}

add_action('cmsmasters_before_header_top', 'children_charity_donations_header_top_button');


/* Header Mid Donations Button */
function children_charity_donations_header_mid_button($cmsmasters_option) {
	if (
		isset($cmsmasters_option['children-charity' . '_header_donations_but']) && 
		$cmsmasters_option['children-charity' . '_header_donations_but'] && 
		isset($cmsmasters_option['children-charity' . '_header_donations_but_text']) && 
		$cmsmasters_option['children-charity' . '_header_donations_but_text'] != '' && 
		$cmsmasters_option['children-charity' . '_header_styles'] != 'c_nav'
	) {
		$cmsmasters_donations_form_page = get_option('cmsmasters_donations_form_page');
		
		$cmsmasters_donations_button_link = (isset($cmsmasters_option['children-charity' . '_header_donations_but_link']) && $cmsmasters_option['children-charity' . '_header_donations_but_link'] != '' ? $cmsmasters_option['children-charity' . '_header_donations_but_link'] : get_permalink($cmsmasters_donations_form_page));
		
		
		echo '<div class="header_donation_but_wrap">' . 
			'<div class="header_donation_but_wrap_inner">' . 
				'<div class="header_donation_but">' . 
					'<a href="' . esc_url($cmsmasters_donations_button_link) . '" class="cmsmasters_button">' . 
						'<span>' . esc_html($cmsmasters_option['children-charity' . '_header_donations_but_text']) . '</span>' . 
					'</a>' . 
				'</div>' . 
			'</div>' . 
		'</div>';
	}
}

add_action('cmsmasters_after_logo', 'children_charity_donations_header_mid_button');



/********** Template Functions for Campaign **********/
/* Get Campaigns Heading Function */
function children_charity_donations_campaign_heading($cmsmasters_id, $tag = 'h1', $link = true, $show = true) { 
	$out = '<header class="cmsmasters_campaign_header entry-header">' . 
		'<' . $tag . ' class="cmsmasters_campaign_title entry-title">' . 
			($link ? '<a href="' . esc_url(get_permalink($cmsmasters_id)) . '">' : '') . 
				esc_html(strip_tags(get_the_title($cmsmasters_id) ? get_the_title($cmsmasters_id) : $cmsmasters_id)) . 
			($link ? '</a>' : '') . 
		'</' . $tag . '>' . 
	'</header>';
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}


/* Get Campaigns Date Function */
function children_charity_donations_campaign_date($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = '<span class="cmsmasters_campaign_date">' . 
			esc_html__('On', 'children-charity') . ' ' . 
			'<abbr class="published" title="' . esc_attr(get_the_date()) . '">' . 
				get_the_date() . 
			'</abbr>' . 
			'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
				get_the_modified_date() . 
			'</abbr>' . 
		'</span>';
	} elseif ($template_type == 'post') {
		$cmsmasters_option = children_charity_get_global_options();
		
		$out = '';
		
		
		if ($cmsmasters_option['children-charity' . '_donations_campaign_date']) {
			$out .= '<span class="cmsmasters_campaign_date">' . 
				esc_html__('On', 'children-charity') . ' ' . 
				'<abbr class="published" title="' . esc_attr(get_the_date()) . '">' . 
					get_the_date() . 
				'</abbr>' . 
				'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
					get_the_modified_date() . 
				'</abbr>' . 
			'</span>';
		}
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}


/* Get Campaigns Author Function */
function children_charity_donations_campaign_author($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = '<span class="cmsmasters_campaign_user_name">' . 
			'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Posts by', 'children-charity') . ' ' . get_the_author_meta('display_name') . '" class="vcard author"><span class="fn">' . get_the_author_meta('display_name') . '</span></a>' . 
		'</span>';
	} elseif ($template_type == 'post') {
		$cmsmasters_option = children_charity_get_global_options();
		
		$out = '';
		
		
		if ($cmsmasters_option['children-charity' . '_donations_campaign_author']) {
			$out .= '<span class="cmsmasters_campaign_user_name">' . 
				'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Posts by', 'children-charity') . ' ' . get_the_author_meta('display_name') . '" class="vcard author"><span class="fn">' . get_the_author_meta('display_name') . '</span></a>' . 
			'</span>';
		}
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}


/* Get Campaigns Category Function */
function children_charity_donations_campaign_category($cmsmasters_id, $taxonomy, $template_type = 'page', $show = true) {
	if (get_the_terms($cmsmasters_id, $taxonomy)) {
		if ($template_type == 'page') {
			$out = '<span class="cmsmasters_campaign_category">' . 
				get_the_term_list($cmsmasters_id, $taxonomy, '', ', ', '') . 
			'</span>';
		} elseif ($template_type == 'post') {
			$cmsmasters_option = children_charity_get_global_options();
			
			$out = '';
			
			
			if ($cmsmasters_option['children-charity' . '_donations_campaign_cat']) {
				$out .= '<span class="cmsmasters_campaign_category">' . 
					get_the_term_list($cmsmasters_id, $taxonomy, ' ', ', ', '') . 
				'</span>';
			}
		}
		
		
		if ($show) {
			echo children_charity_return_content($out);
		} else {
			return $out;
		}
	}
}


/* Get Campaigns Tags Function */
function children_charity_donations_campaign_tags($cmsmasters_id, $taxonomy, $template_type = 'page', $show = true) {
	if (get_the_terms($cmsmasters_id, $taxonomy)) {
		if ($template_type == 'page') {
			$out = '<span class="cmsmasters_campaign_tags">' . 
				get_the_term_list($cmsmasters_id, $taxonomy, '', ', ', '') . 
			'</span>';
		} else if ($template_type == 'post') {
			$cmsmasters_option = children_charity_get_global_options();
			
			$out = '';
			
			
			if ($cmsmasters_option['children-charity' . '_donations_campaign_tag']) {
				$out .= '<span class="cmsmasters_campaign_tags">' . 
					get_the_term_list($cmsmasters_id, $taxonomy, esc_html__('Tags', 'children-charity') . ' ', ', ', '') . 
				'</span>';
			}
		}
		
		
		if ($show) {
			echo children_charity_return_content($out);
		} else {
			return $out;
		}
	}
}


/* Get Campaigns Content/Excerpt Function */
function children_charity_donations_campaign_exc_cont($content = '', $word_count = 55, $show = true) {
	if ($content != '') {
		$content = preg_replace('~\[[^\]]+\]~', '', $content);
		
		$words = explode(' ', $content);
		
		if (count($words) > $word_count) {
			array_splice($words, $word_count);
			
			$content = implode(' ', $words);
		}
		
		
		$out = cmsmasters_divpdel('<div class="cmsmasters_campaign_content entry-content">' . "\n" . 
			'<p>' . $content . '</p>' . 
		'</div>' . "\n");
		
		
		if ($show) {
			echo children_charity_return_content($out);
		} else {
			return $out;
		}
	}
}


/* Get Campaigns Like Function */
function children_charity_donations_campaign_like($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = cmsmasters_like(false);
	} elseif ($template_type == 'post') {
		$cmsmasters_option = children_charity_get_global_options();
		
		$out = '';
		
		
		if ($cmsmasters_option['children-charity' . '_donations_campaign_like']) {
			$out = cmsmasters_like(false);
		}
	}
	
	
	if ($show) {
		echo children_charity_return_content($out);
	} else {
		return $out;
	}
}


/* Get Campaigns Comments Function */
function children_charity_donations_campaign_comments($template_type = 'page', $show = true) {
	if (comments_open()) {
		if ($template_type == 'page') {
			$out = '<span class="cmsmasters_comments">' . 
				'<a class="cmsmasters_post_comments cmsmasters_theme_icon_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'children-charity') . ' ' . get_the_title() . '">' . 
					'<span>' . get_comments_number() . '</span>' . 
				'</a>' . 
			'</span>';
		} elseif ($template_type == 'post') {
			$cmsmasters_option = children_charity_get_global_options();
			
			$out = '';
			
			
			if ($cmsmasters_option['children-charity' . '_donations_campaign_comment']) {
				$out = '<span class="cmsmasters_comments">' . 
					'<a class="cmsmasters_post_comments cmsmasters_theme_icon_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'children-charity') . ' ' . get_the_title() . '">' . 
						'<span>' . get_comments_number() . '</span>' . 
					'</a>' . 
				'</span>';
			}
		}
		
		
		if ($show) {
			echo children_charity_return_content($out);
		} else {
			return $out;
		}
	}
}


/* Get Campaign Rest Amount Function */
function children_charity_donations_campaign_rest_amount($cmsmasters_id, $show = true) {
	$target = get_the_campaign_target($cmsmasters_id);
	
	$funds = get_the_funds($cmsmasters_id);
	
	$togo_number = $target - ($funds > $target ? $target : $funds);
	
	
	$out = '<span class="cmsmasters_campaign_rest_amount">' . 
		sprintf(esc_attr__('%s To Go', 'children-charity'), cmsmasters_donations_currency($togo_number)) . 
	'</span>';
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}


/* Get Campaign Target Function */
function children_charity_donations_campaign_target($cmsmasters_id, $show = true) {
	$target = get_the_campaign_target($cmsmasters_id, true);
	
	
	$out = '<div class="cmsmasters_campaign_target">' . 
		'<div class="cmsmasters_campaign_target_inner">' . 
			'<h4 class="cmsmasters_campaign_target_number">' . cmsmasters_donations_currency($target) . '</h4>' . 
			'<h6 class="cmsmasters_campaign_target_title">' . esc_html__('Campaign Target', 'children-charity') . '</h6>' . 
		'</div>' . 
	'</div>';
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}


/* Get Campaign Donations Count Function */
function children_charity_donations_campaign_donations_count($cmsmasters_id, $show = true) {
	$funds_number = get_the_funds($cmsmasters_id, true);
	
	
	$out = '<div class="cmsmasters_campaign_donations_count">' . 
		'<div class="cmsmasters_campaign_donations_count_inner">' . 
			'<h4 class="cmsmasters_campaign_donations_count_number">' . $funds_number . '</h4>' . 
			'<h6 class="cmsmasters_campaign_donations_count_title">' . esc_html__('Donations', 'children-charity') . '</h6>' . 
		'</div>' . 
	'</div>';
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}


/* Get Campaign Donated Function */
function children_charity_donations_campaign_donated($cmsmasters_id, $template_type = 'page', $layout_type = 'horizontal', $togo = true, $show = true) {
	$target = get_the_campaign_target($cmsmasters_id);
	
	$funds = get_the_funds($cmsmasters_id);
	
	
	$progress = ($target != 0 ? floor((100 / $target) * $funds) : 0);
	
	$progress = ($progress > 100 ? 100 : $progress);
	
	$togo_number = $target - ($funds > $target ? $target : $funds);
	
	$shortcode_styles = '';
	
	if ($template_type == 'page') {
		if ($layout_type == 'horizontal') {
			$out = '<div class="cmsmasters_campaign_donated_percent">' . 
				'<div class="cmsmasters_stats stats_mode_bars stats_type_horizontal">' . 
					'<div class="cmsmasters_stat_wrap">' . 
						'<div class="cmsmasters_stat_title_wrap">' . 
							'<span class="cmsmasters_stat_title">' . esc_html__('Donated', 'children-charity') . '</span>' . 
							'<span class="cmsmasters_stat_counter">' . esc_attr($progress) . '</span>' . 
							'<span class="cmsmasters_stat_units">%</span>' . 
						'</div>' . 
						'<div id="cmsmasters_stat_' . esc_attr($cmsmasters_id) . '" class="cmsmasters_stat" data-percent="' . esc_attr($progress) . '">' . 
							'<div class="cmsmasters_stat_inner"></div>' . 
						'</div>' .
						'<span class="cmsmasters_stat_subtitle">' . sprintf(esc_attr__('%s to go', 'children-charity'), cmsmasters_donations_currency($togo_number)) . '</span>' . 
					'</div>' . 
				'</div>' . 
			'</div>';
			
			$shortcode_styles .= "\n" . 
				'.cmsmasters_stats.shortcode_animated #cmsmasters_stat_' . esc_attr($cmsmasters_id) . '.cmsmasters_stat { ' . 
					"\n\t" . 'width:' . esc_attr($progress) . '%; ' . 
				"\n" . '} ' . 
			"\n";
			$out .= cmsmasters_theme_generate_front_css($shortcode_styles);
		} elseif ($layout_type == 'vertical') {		
			$out = '<div class="cmsmasters_campaign_donated_percent">' . 
				do_shortcode('[cmsmasters_stats mode="circles" count="1" shortcode_id="' . esc_attr($cmsmasters_id) . '"][cmsmasters_stat shortcode_id="' . esc_attr($cmsmasters_id) . '" progress="' . $progress . '" color="#ffffff"]' . esc_html__('Donated', 'children-charity') . '[/cmsmasters_stat][/cmsmasters_stats]') . 
			'</div>';
		}
	} elseif ($template_type == 'post') {
		$out = '<div class="cmsmasters_campaign_donated">' . 
			'<div class="cmsmasters_campaign_donated_inner">' .  
				'<div class="cmsmasters_stats stats_mode_bars stats_type_horizontal">' . 
					'<div class="cmsmasters_stat_wrap">' . 
						'<div class="cmsmasters_stat_title_wrap">' . 
							'<span class="cmsmasters_stat_title">' . esc_html__('Donated', 'children-charity') . '</span>' . 
							'<span class="cmsmasters_stat_counter">' . esc_attr($progress) . '</span>' . 
							'<span class="cmsmasters_stat_units">%</span>' . 
						'</div>' .  
						'<div id="cmsmasters_stat_' . esc_attr($cmsmasters_id) . '" class="cmsmasters_stat" data-percent="' . $progress . '">' . 
							'<div class="cmsmasters_stat_inner"></div>' . 
						'</div>' . 
						(($togo) ? '<h6 class="cmsmasters_stat_subtitle">' . sprintf(esc_attr__('%s to go', 'children-charity'), cmsmasters_donations_currency($togo_number)) . '</h6>' : '') .
					'</div>' . 
				'</div>' . 
			'</div>' . 
		'</div>';
	}
	
	
	if ($show) {
		echo children_charity_return_content($out);
	} else {
		return $out;
	}
}


/* Get Opened Campaign Donated Style Function */
function children_charity_donations_campaign_donated_open_style() {
	$campaign_id = get_the_ID();
	
	if (get_post_type($campaign_id) == 'campaign') {
		$target = get_the_campaign_target($campaign_id);
		
		$funds = get_the_funds($campaign_id);
		
		
		$progress = ($target != 0 ? floor((100 / $target) * $funds) : 0);
		
		$progress = ($progress > 100 ? 100 : $progress);
		
		$shortcode_styles = '';
		
		
		$shortcode_styles .= "\n" . 
			'.cmsmasters_stats.shortcode_animated #cmsmasters_stat_' . esc_attr($campaign_id) . '.cmsmasters_stat { ' . 
				"\n\t" . 'width:' . esc_attr($progress) . '%; ' . 
			"\n" . '} ' . 
		"\n";
		
		
		if ($shortcode_styles != '') {
			wp_add_inline_style('children-charity-style', $shortcode_styles);
		}
	}
}

add_action('wp_enqueue_scripts', 'children_charity_donations_campaign_donated_open_style');


/* Get Campaign Donate Button Function */
function children_charity_donations_campaign_donate_button($cmsmasters_id, $show = true) {
	$cmsmasters_donations_form_page = get_option('cmsmasters_donations_form_page');
	
	
	$out = '<div class="cmsmasters_campaign_donate_button">' . 
		'<div class="cmsmasters_campaign_donate_button_inner">' . 
			'<a class="button" href="' . add_query_arg('campaign_id', urlencode($cmsmasters_id), get_permalink($cmsmasters_donations_form_page)) . '">' . esc_html__('Donate Now', 'children-charity') . '</a>' . 
		'</div>' . 
	'</div>';
	
	
	if ($show) {
		echo children_charity_return_content($out);
	} else {
		return $out;
	}
}


/* Get Related, Popular & Recent Posts Function */
function children_charity_donations_related($tag = 'h3', $title = '', $no_title = '', $box_type = false, $tgsarray = null, $items_number = 5, $pause_time = 5, $type = 'post', $taxonomy = null) {
	if ( 
		($box_type == 'related' && !empty($tgsarray)) || 
		$box_type == 'popular' || 
		$box_type == 'recent' 
	) {
		$autoplay = ((int) $pause_time > 0) ? $pause_time * 1000 : 'false';
		
		
		$r_args = array( 
			'posts_per_page' => $items_number, 
			'post_status' => 'publish', 
			'ignore_sticky_posts' => 1, 
			'post__not_in' => array(get_the_ID()), 
			'post_type' => $type 
		);
		
		
		if ($box_type == 'related' && !empty($tgsarray)) {
			if ($type == 'post') {
				$r_args['tag__in'] = $tgsarray;
			} elseif ($type != 'post' && $taxonomy) {
				$r_args['tax_query'] = array( 
					array( 
						'taxonomy' => $taxonomy, 
						'field' => 'term_id', 
						'terms' => $tgsarray 
					) 
				);
			}
		} elseif ($box_type == 'popular') {
			$r_args['order'] = 'DESC';
			
			$r_args['orderby'] = 'meta_value_num';
			
			$r_args['meta_key'] = 'cmsmasters_likes';
		}
		
		
		$r_query = new WP_Query($r_args);
		
		
		echo "<aside class=\"cmsmasters_single_slider cmsmasters_single_slider_campaign\">";
			echo "<" . esc_html($tag) . " class=\"cmsmasters_single_slider_title\">" . 
				($title != '' ? esc_html($title) : esc_html__('More items', 'children-charity')) . 
			"</" . esc_html($tag) . ">";
			
			
			if ($r_query->have_posts()) {
				echo '<div class="cmsmasters_single_slider_inner">' . 
					'<div' . 
						' id="cmsmasters_owl_slider_' . esc_attr(uniqid()) . '"' . 
						' class="cmsmasters_owl_slider"' . 
						' data-single-item="false"' . 
						' data-auto-play="' . esc_attr($autoplay) . '"' . 
					'>';
						while ($r_query->have_posts()) : $r_query->the_post();
							echo "<div class=\"cmsmasters_owl_slider_item cmsmasters_single_slider_item\">
								<div class=\"cmsmasters_single_slider_item_outer\">";
								
									children_charity_thumb(get_the_ID(), 'cmsmasters-project-thumb', true, false, true, false, true, true, false, false, false, 'cmsmasters_theme_icon_image');
									
									echo "<div class=\"cmsmasters_single_slider_item_inner\">
										<h4 class=\"cmsmasters_single_slider_item_title\">
											<a href=\"" . esc_url(get_permalink()) . "\">" . cmsmasters_title(get_the_ID(), false) . "</a>
										</h4>";
										
										children_charity_donations_campaign_donated(get_the_ID(), 'page');
										
									echo "</div>
								</div>
							</div>";
						endwhile;
					echo "</div>";
			} else {
				echo "<h5 class=\"cmsmasters_single_slider_no_items\">" . 
					($no_title != '' ? esc_html($no_title) : esc_html__('No items found', 'children-charity')) . 
				"</h5>";
			}
		
		
		echo "</aside>";
		
		
		wp_reset_postdata();
	}
}



/********** Template Functions for Donation **********/
/* Get Donations Heading Function */
function children_charity_donations_donation_heading($cmsmasters_id, $tag = 'h1', $link = true, $show = true) { 
	$out = '<header class="cmsmasters_donation_header entry-header">' . 
		'<' . $tag . ' class="cmsmasters_donation_title entry-title">' . 
			($link ? '<a href="' . esc_url(get_permalink()) . '">' : '');
			
				if (
					!is_anonymous_donation($cmsmasters_id) && 
					(
						get_the_donator_meta('firstname', $cmsmasters_id) || 
						get_the_donator_meta('lastname', $cmsmasters_id)
					)
				) {
					$out .= get_the_donator_meta('firstname', $cmsmasters_id) . ' ' . get_the_donator_meta('lastname', $cmsmasters_id);
				} else {
					$out .= esc_html__('Anonym', 'children-charity');
				}
				
			$out .= ($link ? '</a>' : '') . 
		'</' . $tag . '>' . 
	'</header>';
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}


/* Get Donation Amount Currency Function */
function children_charity_donations_donation_amount_currency($cmsmasters_id, $template_type = 'page', $show = true) { 
	if (get_the_donation_amount_currency($cmsmasters_id)) {
		if ($template_type == 'page') {
			$cmsmasters_donation_amount = get_the_donation_amount_currency($cmsmasters_id);
			
			$out = '<span class="cmsmasters_donation_amount_currency">' . 
				substr($cmsmasters_donation_amount, 0, -3) . 
			'</span>' .
			'<span class="cmsmasters_donation_amount_title">' . esc_html__('Donated', 'children-charity') . '</span>';
		} elseif ($template_type == 'post') {
			$out = '<span class="cmsmasters_donation_amount_currency">' . 
				get_the_donation_amount_currency($cmsmasters_id) . 
				((is_recurring_donation($cmsmasters_id)) ? ' ' . get_the_recurrence_period($cmsmasters_id) : ' ' . esc_html__('One-time', 'children-charity')) . 
			'</span>';
		}
		
		
		if ($show) {
			echo wp_kses_post($out);
		} else {
			return wp_kses_post($out);
		}
	}
}


/* Get Donation Amount Currency Function */
function children_charity_donations_donation_campaign($cmsmasters_id, $template_type = 'page', $show = true) { 
	if (get_the_donation_campaign($cmsmasters_id)) {
		if ($template_type == 'page') {
			$out = '<span class="cmsmasters_donation_campaign">' . 
				get_the_donation_campaign($cmsmasters_id, true) . 
			'</span>';
		} elseif ($template_type == 'post') {
			$out = '<span class="cmsmasters_donation_campaign">' . 
				get_the_donation_campaign($cmsmasters_id, true) . 
			'</span>';
		}
		
		
		if ($show) {
			echo wp_kses_post($out);
		} else {
			return wp_kses_post($out);
		}
	}
}


/* Get Donation Details Info Function */
function children_charity_donations_donation_details($cmsmasters_id, $show = true) {
	$out = '';
	
	
	if (!is_anonymous_donation($cmsmasters_id)) {
		$out .= '<div class="cmsmasters_donation_details entry-meta">';
		
			if (get_the_donator_meta('details_title', get_the_ID()) != '') {
				$out .= '<h3>' . get_the_donator_meta('details_title', get_the_ID()) . '</h3>';
			}
			
			$out .= '<div class="cmsmasters_row">' . 
				'<div class="cmsmasters_row_margin">' . 
					'<div class="cmsmasters_column one_half">';
					
						if (get_the_donator_meta('firstname', $cmsmasters_id)) {
							$out .= '<div class="cmsmasters_donation_details_item">' . 
								'<span class="cmsmasters_donation_details_item_title">' . esc_html__('First Name:', 'children-charity') . ' </span>' . 
								'<span class="cmsmasters_donation_details_item_value">' . esc_html(get_the_donator_meta('firstname', $cmsmasters_id)) . '</span>' . 
							'</div>';
						}
						
						if (get_the_donator_meta('lastname', $cmsmasters_id)) {
							$out .= '<div class="cmsmasters_donation_details_item">' . 
								'<span class="cmsmasters_donation_details_item_title">' . esc_html__('Last Name:', 'children-charity') . ' </span>' . 
								'<span class="cmsmasters_donation_details_item_value">' . esc_html(get_the_donator_meta('lastname', $cmsmasters_id)) . '</span>' . 
							'</div>';
						}
						
						if (get_the_donator_meta('email', $cmsmasters_id)) {
							$out .= '<div class="cmsmasters_donation_details_item">' . 
								'<span class="cmsmasters_donation_details_item_title">' . esc_html__('Email:', 'children-charity') . ' </span>' . 
								'<span class="cmsmasters_donation_details_item_value">' . '<a href="mailto:' . esc_html(get_the_donator_meta('email', $cmsmasters_id)) . '">' . esc_html(get_the_donator_meta('email', $cmsmasters_id)) . '</a></span>' . 
							'</div>';
						}
						
						if (get_the_donator_meta('company', $cmsmasters_id)) {
							$out .= '<div class="cmsmasters_donation_details_item">' . 
								'<span class="cmsmasters_donation_details_item_title">' . esc_html__('Company:', 'children-charity') . ' </span>' . 
								'<span class="cmsmasters_donation_details_item_value">' . esc_html(get_the_donator_meta('company', $cmsmasters_id)) . '</span>' . 
							'</div>';
						}
						
						if (get_the_donator_meta('phone', $cmsmasters_id)) {
							$out .= '<div class="cmsmasters_donation_details_item">' . 
								'<span class="cmsmasters_donation_details_item_title">' . esc_html__('Phone:', 'children-charity') . ' </span>' . 
								'<span class="cmsmasters_donation_details_item_value">' . esc_html(get_the_donator_meta('phone', $cmsmasters_id)) . '</span>' . 
							'</div>';
						}
						
						if (get_the_donator_meta('website', $cmsmasters_id)) {
							$out .= '<div class="cmsmasters_donation_details_item">' . 
								'<span class="cmsmasters_donation_details_item_title">' . esc_html__('Website:', 'children-charity') . ' </span>' . 
								'<span class="cmsmasters_donation_details_item_value"><a href="' . esc_url(get_the_donator_meta('website', $cmsmasters_id)) . '">' . esc_url(get_the_donator_meta('website', $cmsmasters_id)) . '</a></span>' . 
							'</div>';
						}
						
					$out .= '</div>' . 
					'<div class="cmsmasters_column one_half">';
					
						if (get_the_donator_meta('address', $cmsmasters_id)) {
							$out .= '<div class="cmsmasters_donation_details_item">' . 
								'<span class="cmsmasters_donation_details_item_title">' . esc_html__('Address:', 'children-charity') . ' </span>' . 
								'<span class="cmsmasters_donation_details_item_value">' . esc_html(get_the_donator_meta('address', $cmsmasters_id)) . '</span>' . 
							'</div>';
						}
						
						if (get_the_donator_meta('city', $cmsmasters_id)) {
							$out .= '<div class="cmsmasters_donation_details_item">' . 
								'<span class="cmsmasters_donation_details_item_title">' . esc_html__('City:', 'children-charity') . ' </span>' . 
								'<span class="cmsmasters_donation_details_item_value">' . esc_html(get_the_donator_meta('city', $cmsmasters_id)) . '</span>' . 
							'</div>';
						}
						
						if (get_the_donator_meta('state', $cmsmasters_id)) {
							$out .= '<div class="cmsmasters_donation_details_item">' . 
								'<span class="cmsmasters_donation_details_item_title">' . esc_html__('State / Province:', 'children-charity') . ' </span>' . 
								'<span class="cmsmasters_donation_details_item_value">' . esc_html(get_the_donator_meta('state', $cmsmasters_id)) . '</span>' . 
							'</div>';
						}
						
						if (get_the_donator_meta('zip', $cmsmasters_id)) {
							$out .= '<div class="cmsmasters_donation_details_item">' . 
								'<span class="cmsmasters_donation_details_item_title">' . esc_html__('Postal / Zip Code:', 'children-charity') . ' </span>' . 
								'<span class="cmsmasters_donation_details_item_value">' . esc_html(get_the_donator_meta('zip', $cmsmasters_id)) . '</span>' . 
							'</div>';
						}
						
						if (get_the_donator_meta('country', $cmsmasters_id)) {
							$out .= '<div class="cmsmasters_donation_details_item">' . 
								'<span class="cmsmasters_donation_details_item_title">' . esc_html__('Country:', 'children-charity') . ' </span>' . 
								'<span class="cmsmasters_donation_details_item_value">' . esc_html(get_the_donator_meta('country', $cmsmasters_id)) . '</span>' . 
							'</div>';
						}
						
					$out .= '</div>' . 
				'</div>' . 
			'</div>' . 
		'</div>';
	}
	
	
	if ($show) {
		echo children_charity_return_content($out);
	} else {
		return $out;
	}
}

