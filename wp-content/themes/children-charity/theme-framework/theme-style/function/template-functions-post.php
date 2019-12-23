<?php 
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version		1.0.8
 * 
 * Template Functions for Blog & Post
 * Created by CMSMasters
 * 
 */


/* Get Posts Heading Function */
function children_charity_post_heading($cmsmasters_id, $tag = 'h1', $show = true) { 
	$out = '';
	
	
	if (cmsmasters_title($cmsmasters_id, false) != $cmsmasters_id) {
		$out = '<header class="cmsmasters_post_header entry-header">' . 
			'<' . esc_html($tag) . ' class="cmsmasters_post_title entry-title">' . 
				'<a href="' . esc_url(get_permalink()) . '">' . cmsmasters_title($cmsmasters_id, false) . '</a>' . 
			'</' . esc_html($tag) . '>' . 
		'</header>';
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Posts Heading Without Link Function */
function children_charity_post_title_nolink($cmsmasters_id, $tag = 'h1', $show = true) { 
	$out = '';
	
	
	if (cmsmasters_title($cmsmasters_id, false) != $cmsmasters_id) {
		$out = '<header class="cmsmasters_post_header entry-header">' . 
			'<' . esc_html($tag) . ' class="cmsmasters_post_title entry-title">' . 
				esc_html(strip_tags(get_the_title($cmsmasters_id) ? get_the_title($cmsmasters_id) : $cmsmasters_id)) . 
			'</' . esc_html($tag) . '>' . 
		'</header>';
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Posts Date Function */
function children_charity_get_post_date($template_type = 'page', $layout_type = 'default', $show = true) {
	if ($template_type == 'page') {
		if (($layout_type == 'default') || ($layout_type == 'masonry')) {
			$out = '<span class="cmsmasters_post_date">' . 
				'<abbr class="published" title="' . esc_attr(get_the_date('j M, Y')) . '">' . 
					esc_html(get_the_date('j M, Y')) .  
				'</abbr>' . 
				'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
					esc_html(get_the_modified_date()) . 
				'</abbr>' . 
			'</span>';
		} elseif ($layout_type == 'timeline') {
			$out = '<span class="cmsmasters_post_date">' . 
				'<abbr class="published" title="' . esc_attr(get_the_date('j/m/Y')) . '">' . 
					esc_html(get_the_date('j/m/Y')) .  
				'</abbr>' . 
				'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
					esc_html(get_the_modified_date()) . 
				'</abbr>' . 
			'</span>';
		}
		
		
		if (cmsmasters_title(get_the_ID(), false) == get_the_ID()) {
			$out = '<a href="' . esc_url(get_permalink()) . '">' . $out . '</a>';
		}
	} elseif ($template_type == 'post') {
		$cmsmasters_option = children_charity_get_global_options();
		
		$out = '';
		
		if ($cmsmasters_option['children-charity' . '_blog_post_date']) {
			$out .= '<span class="cmsmasters_post_date">' . 
				'<abbr class="published" title="' . esc_attr(get_the_date()) . '">' . 
					esc_html(get_the_date()) . 
				'</abbr>' . 
				'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
					esc_html(get_the_modified_date()) . 
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



/* Get Posts Author Function */
function children_charity_get_post_author($template_type = 'page', $show = true) {
	if ($template_type == 'page') {
		$out = '<span class="cmsmasters_post_author">' . 
			'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Posts by', 'children-charity') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author">' . 
				'<span class="fn">' . esc_html(get_the_author_meta('display_name')) . '</span>' . 
			'</a>' . 
		'</span>';
	} elseif ($template_type == 'post') {
		$cmsmasters_option = children_charity_get_global_options();
		$out = '';
		
		if ($cmsmasters_option['children-charity' . '_blog_post_author']) {
			$out .= '<span class="cmsmasters_post_author">' . 
				'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" title="' . esc_attr__('Posts by', 'children-charity') . ' ' . esc_attr(get_the_author_meta('display_name')) . '" class="vcard author">' . 
					'<span class="fn">' . esc_html(get_the_author_meta('display_name')) . '</span>' . 
				'</a>' . 
			'</span>';
		}
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Posts Category Function */
function children_charity_get_post_category($cmsmasters_id, $taxonomy, $template_type = 'page', $show = true) {
	$out = '';
	
	
	if (get_the_terms($cmsmasters_id, $taxonomy)) {
		if ($template_type == 'page') {
			$out .= '<span class="cmsmasters_post_category">' . 
				children_charity_get_the_category_list($cmsmasters_id, $taxonomy, ', ') . 
			'</span>';
		} elseif ($template_type == 'post') {
			$cmsmasters_option = children_charity_get_global_options();
			
			
			if ($cmsmasters_option['children-charity' . '_blog_post_cat']) {
				$out .= '<span class="cmsmasters_post_category">' . 
					children_charity_get_the_category_list($cmsmasters_id, $taxonomy, ', ') . 
				'</span>';
			}
		}
	}
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Posts Tags Function */
function children_charity_get_post_tags($show = true) {
	if (get_the_tags()) {
		$cmsmasters_option = children_charity_get_global_options();
		$out = '';
		
		if ($cmsmasters_option['children-charity' . '_blog_post_tag']) {
			$out .= '<span class="cmsmasters_post_tags">' . 
				get_the_tag_list('' . ' ', ', ', '') . 
			'</span>';
		}
		
		
		if ($show) {
			echo wp_kses_post($out);
		} else {
			return wp_kses_post($out);
		}
	}
}



/* Get Posts Content/Excerpt Function */
function children_charity_post_exc_cont($template_type = 'page', $layout_type = 'default', $show = true) {
	if ($template_type == 'page') {
		if ($layout_type == 'default') {
			$out = cmsmasters_divpdel('<div class="cmsmasters_post_content entry-content">' . "\n" . 
				wpautop(children_charity_excerpt(60, false)) . 
			'</div>' . "\n");
		} elseif (($layout_type == 'masonry') || ($layout_type == 'timeline')) {
			$out = cmsmasters_divpdel('<div class="cmsmasters_post_content entry-content">' . "\n" . 
				wpautop(children_charity_excerpt(22, false)) . 
			'</div>' . "\n");
		}
	} elseif ($template_type == 'post') {
		$out = cmsmasters_divpdel('<div class="cmsmasters_post_content entry-content">' . "\n" . 
			wpautop(children_charity_excerpt(20, false)) . 
		'</div>' . "\n");
	}
	
	
	if (children_charity_excerpt(20, false) != '') {
		if ($show) {
			echo children_charity_return_content($out);
		} else {
			return $out;
		}
	}
}



/* Get Posts Like Function */
function children_charity_get_post_likes($template_type = 'page', $show = true) {
	$out = '';
	
	
	if ($template_type == 'page') {
		$out = cmsmasters_like('cmsmasters_post_likes');
	} elseif ($template_type == 'post') {
		$cmsmasters_option = children_charity_get_global_options();
		
		if ($cmsmasters_option['children-charity' . '_blog_post_like']) {
			$out = cmsmasters_like('cmsmasters_post_likes');
		}
	}
	
	
	if ($show) {
		echo children_charity_return_content($out);
	} else {
		return $out;
	}
}



/* Get Posts Comments Function */
function children_charity_get_post_comments($template_type = 'page', $show = true) {
	$out = '';
	
	
	if (comments_open()) {
		if ($template_type == 'page') {
			$out = children_charity_get_comments('cmsmasters_post_comments');
		} elseif ($template_type == 'post') {
			$cmsmasters_option = children_charity_get_global_options();
			
			if ($cmsmasters_option['children-charity' . '_blog_post_comment']) {
				$out = children_charity_get_comments('cmsmasters_post_comments');
			}
		}
	}
	
	
	if ($show) {
		echo children_charity_return_content($out);
	} else {
		return $out;
	}
}



/* Get Posts More Button/Link Function */
function children_charity_post_more($cmsmasters_id, $show = true) {
	$cmsmasters_post_read_more = get_post_meta($cmsmasters_id, 'cmsmasters_post_read_more', true);
	
	
	if ($cmsmasters_post_read_more == '') {
		$cmsmasters_post_read_more = esc_html__('Continue Reading...', 'children-charity');
	}
	
	
	$out = '<a class="cmsmasters_post_read_more" href="' . esc_url(get_permalink($cmsmasters_id)) . '">' . esc_html($cmsmasters_post_read_more) . '</a>';
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}



/* Get Post Format Icon Placeholder Function */
function children_charity_post_format_icon_placeholder($cmsmasters_id, $format = 'std', $show = true) {
	$out = '<figure>' . 
		'<a href="' . esc_url(get_permalink()) . '" title="' . cmsmasters_title($cmsmasters_id, false) . '" class="preloader cmsmasters_theme_icon_' . esc_attr($format) . '"></a>' . 
	'</figure>';
	
	
	if ($show) {
		echo wp_kses_post($out);
	} else {
		return wp_kses_post($out);
	}
}


/* Get Opened Profile Social Icons Styles Function */
function children_charity_post_open_style_social_icons() {
	$post_id = get_the_ID();
	
	$cmsmasters_post_date_color = get_post_meta(get_the_ID(), 'cmsmasters_post_color', true);
	
	$cmsmasters_post_style = '';
	
	if ($cmsmasters_post_date_color != '') {
		$cmsmasters_post_style .= "
		
		#post-{$post_id} .cmsmasters_post_meta_info {
			background-color:{$cmsmasters_post_date_color};
		}";
	}
	
	
	wp_add_inline_style('children-charity-style', $cmsmasters_post_style);
}

add_action('wp_enqueue_scripts', 'children_charity_post_open_style_social_icons');

