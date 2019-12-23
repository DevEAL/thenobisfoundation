<?php
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version 	1.0.8
 * 
 * Content Composer Icon Box Shortcode
 * Created by Seasidetms
 * 
 */
 
 
 
extract(shortcode_atts($new_atts, $atts));


$unique_id = $shortcode_id;


if ($button_font_family != '') {
	$font_family_array = str_replace('+', ' ', explode(':', $button_font_family));
	
	$font_family_name = "'" . $font_family_array[0] . "'";
	
	$font_family_url = str_replace('+', ' ', $button_font_family);
	
	
	cmsmasters_theme_google_font($font_family_url, $font_family_array[0]);
}


if (
	$button_style != '' || 
	$button_font_family != '' || 
	$button_font_size != '' || 
	$button_line_height != '' || 
	$button_font_weight != '' || 
	$button_font_style != '' || 
	$button_padding_hor != '' || 
	$button_border_width != '' || 
	$button_border_style != '' || 
	$button_border_radius != '' || 
	$button_bg_color != '' || 
	$button_text_color != '' || 
	$button_border_color != '' || 
	$button_bg_color_h != '' || 
	$button_text_color_h != '' || 
	$button_border_color_h != '' 
) {
	$button_custom_styles = 'true';
} else {
	$button_custom_styles = 'false';
}


$shortcode_styles = "\n" . 
	'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' { ' . 
		(($box_border_width != '') ? "\n\t" . 'border-width:' . esc_attr($box_border_width) . 'px; ' : '') . 
		(((int) $box_border_radius > 0) ? "\n\t" . '-webkit-border-radius:' . esc_attr($box_border_radius) . '; ' . "\n\t" . 'border-radius:' . esc_attr($box_border_radius) . '; ' : '') . 
		(($box_color != '') ? "\n\t" . cmsmasters_color_css('color', $box_color) : '') . 
		(($box_bg_color != '') ? "\n\t" . cmsmasters_color_css('background-color', $box_bg_color) : '') . 
		(($box_bd_color != '') ? "\n\t" . cmsmasters_color_css('border-color', $box_bd_color) : '') . 
	"\n" . '} ' . "\n\n" . 
	'#cmsmasters_icon_box_' . esc_attr($unique_id) . ':before, ' . "\n" . 
	'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .icon_box_heading:before { ' . 
		"\n\t" . 'font-size:' . esc_attr($box_icon_size) . 'px; ' . 
		"\n\t" . 'line-height:' . esc_attr(((int) $box_icon_space - ((int) $box_icon_border_width * 2))) . 'px; ' . 
		"\n\t" . 'width:' . esc_attr($box_icon_space) . 'px; ' . 
		"\n\t" . 'height:' . esc_attr($box_icon_space) . 'px; ' . 
		"\n\t" . 'border-width:' . esc_attr($box_icon_border_width) . 'px; ' . 
		(((int) $box_icon_border_radius > 0) ? "\n\t" . '-webkit-border-radius:' . esc_attr($box_icon_border_radius) . '; ' . "\n\t" . 'border-radius:' . esc_attr($box_icon_border_radius) . '; ' : '') . 
		(($box_icon_color != '') ? "\n\t" . cmsmasters_color_css('color', $box_icon_color) : '') . 
		(($box_icon_bg_color != '') ? "\n\t" . cmsmasters_color_css('background-color', $box_icon_bg_color) : '') . 
		(($box_icon_bd_color != '') ? "\n\t" . cmsmasters_color_css('border-color', $box_icon_bd_color) : '') . 
	"\n" . '} ' . "\n\n";


if ( 
	$box_bg_color != '' || 
	( 
		$box_bd_color != '' && 
		((int) $box_border_width > 0) 
	) 
) {
	$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . '.cmsmasters_icon_heading_left, ' . "\n" . 
	'#cmsmasters_icon_box_' . esc_attr($unique_id) . '.cmsmasters_icon_top, ' . "\n" . 
	'#cmsmasters_icon_box_' . esc_attr($unique_id) . '.cmsmasters_icon_box_left_top { ' . 
		"\n\t" . 'padding:30px 20px; ' . 
	'} ' . "\n\n" . 
	'#cmsmasters_icon_box_' . esc_attr($unique_id) . '.cmsmasters_icon_top:before { ' . 
		"\n\t" . 'top:30px;' . 
	'} ' . "\n\n";
}


if ($box_color != '') {
	$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . ' a:not(.cmsmasters_button), ' . "\n" . 
	'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' a:not(.cmsmasters_button):hover, ' . "\n" . 
	'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' h1, ' . "\n" . 
	'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' h2, ' . "\n" . 
	'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' h3, ' . "\n" . 
	'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' h4, ' . "\n" . 
	'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' h5, ' . "\n" . 
	'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' h6 { ' . 
		"\n\t" . cmsmasters_color_css('color', $box_color) . 
	'} ' . "\n\n" . 
	'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' a:not(.cmsmasters_button) { ' . "\n" . 
		"\n\t" . 'text-decoration:underline;' . 
	'} ' . "\n\n" . 
	'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' a:not(.cmsmasters_button):hover { ' . "\n" . 
		"\n\t" . 'text-decoration:none;' . 
	'} ' . "\n\n";
}


if ($box_type == 'cmsmasters_icon_top' || $box_type == 'cmsmasters_icon_box_top') {
	$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . ' { ' . 
		"\n\t" . 'padding-top:' . esc_attr(((int) $box_icon_space + 30)) . 'px; ' . 
	'} ' . "\n\n" . 
	'#cmsmasters_icon_box_' . esc_attr($unique_id) . ':before, ' . "\n" . 
	'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .icon_box_heading:before { ' . 
		"\n\t" . 'margin-left:-' . esc_attr(((int) $box_icon_space / 2)) . 'px; ' . 
	"\n\t" . '} ' . "\n\n";
}


if ($box_type == 'cmsmasters_icon_top') {
	$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . '.cmsmasters_icon_top { ' . 
		"\n\t" . 'padding-top:' . esc_attr(((int) $box_icon_space + 60)) . 'px; ' . 
	"\n\t" . '} ' . "\n\n";
}


if ($box_type == 'cmsmasters_icon_box_top') {
	$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . '.cmsmasters_icon_box_top { ' . 
		"\n\t" . 'padding-top:' . esc_attr(((int) $box_icon_space - ((int) $box_icon_space / 2) + 30)) . 'px; ' . 
		"\n\t" . 'margin-top:' . esc_attr(((int) $box_icon_space / 2)) . 'px; ' . 
	"\n\t" . '} ' . "\n\n" . 
	'#cmsmasters_icon_box_' . esc_attr($unique_id) . '.cmsmasters_icon_box_top:before { ' . 
		"\n\t" . 'top:-' . esc_attr(((int) $box_icon_space / 2)) . 'px; ' . 
	"\n\t" . '} ' . "\n\n";
}


if ($box_type == 'cmsmasters_icon_box_left' || $box_type == 'cmsmasters_icon_box_left_top') {
	if (!is_rtl()) {
		$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . '.cmsmasters_icon_box_left, ' . "\n" . 
		'#cmsmasters_icon_box_' . esc_attr($unique_id) . '.cmsmasters_icon_box_left_top { ' . 
			"\n\t" . 'padding-left:' . esc_attr(((int) $box_icon_space - ((int) $box_icon_space / 2) + 30)) . 'px; ' . 
			"\n\t" . 'margin-left:' . esc_attr(((int) $box_icon_space / 2)) . 'px; ' . 
		"\n\t" . '} ' . "\n\n" . 
		'#cmsmasters_icon_box_' . esc_attr($unique_id) . '.cmsmasters_icon_box_left:before, ' . "\n" . 
		'#cmsmasters_icon_box_' . esc_attr($unique_id) . '.cmsmasters_icon_box_left_top:before { ' . 
			"\n\t" . 'left:-' . esc_attr(((int) $box_icon_space / 2)) . 'px; ' . 
		"\n\t" . '} ' . "\n\n";
	} else {
		$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . '.cmsmasters_icon_box_left, ' . "\n" . 
		'#cmsmasters_icon_box_' . esc_attr($unique_id) . '.cmsmasters_icon_box_left_top { ' . 
			"\n\t" . 'padding-right:' . esc_attr(((int) $box_icon_space - ((int) $box_icon_space / 2) + 30)) . 'px; ' . 
			"\n\t" . 'margin-right:' . esc_attr(((int) $box_icon_space / 2)) . 'px; ' . 
		"\n\t" . '} ' . "\n\n" . 
		'#cmsmasters_icon_box_' . esc_attr($unique_id) . '.cmsmasters_icon_box_left:before, ' . "\n" . 
		'#cmsmasters_icon_box_' . esc_attr($unique_id) . '.cmsmasters_icon_box_left_top:before { ' . 
			"\n\t" . 'right:-' . esc_attr(((int) $box_icon_space / 2)) . 'px; ' . 
		"\n\t" . '} ' . "\n\n";
	}
}


if ($box_type == 'cmsmasters_icon_box_left') {
	$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . '.cmsmasters_icon_box_left:before { ' . 
		"\n\t" . 'margin-top:-' . esc_attr(((int) $box_icon_space / 2)) . 'px; ' . 
	"\n\t" . '} ' . "\n\n";
}


if ($box_type == 'cmsmasters_icon_heading_left') {
	$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . '.cmsmasters_icon_heading_left .icon_box_heading { ' . 
		"\n\t" . 'min-height:' . esc_attr($box_icon_space) . 'px; ' . 
		"\n\t" . 'padding-left:' . esc_attr(((int) $box_icon_space * 1.25)) . 'px; ' . 
	"\n\t" . '} ' . "\n\n";
}


if ( 
	$box_type == 'cmsmasters_icon_box_left_top' && 
	( 
		$box_bg_color != '' || 
		( 
			$box_bd_color != '' && 
			((int) $box_border_width > 0) 
		) 
	) 
) {
	$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . '.cmsmasters_icon_box_left_top { ' . 
		"\n\t" . 'padding-top:' . esc_attr(((int) $box_icon_space - ((int) $box_icon_space / 2))) . 'px; ' . 
		"\n\t" . 'margin-top:' . esc_attr($box_icon_space) . 'px; ' . 
	"\n\t" . '} ' . "\n\n" . 
	'#cmsmasters_icon_box_' . esc_attr($unique_id) . '.cmsmasters_icon_box_left_top:before { ' . 
		"\n\t" . 'margin-top:-' . esc_attr(((int) $box_icon_space / 2)) . 'px; ' . 
	"\n\t" . '} ' . "\n\n";
}


if ($box_icon_type == 'image' && $box_icon_image != '') {
	$image_id = explode('|', $box_icon_image);
	
	
	if (is_numeric($image_id[0]) && is_array(wp_get_attachment_image_src($image_id[0], 'full'))) {
		$image_url_src = wp_get_attachment_image_src($image_id[0], 'full');
	
		$image_url = $image_url_src[0];
	} else if ($image_id[0] != '') {
		$image_url = $image_id[0];
	} else {
		$image_url = $image_id[1];
	}
	
	
	$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . (($box_type != 'cmsmasters_icon_heading_left') ? ':before' : '.cmsmasters_icon_heading_left .icon_box_heading:before') . ' { ' . 
		"\n\t" . 'background-image:url(' . esc_url($image_url) . '); ' . 
	"\n" . '} ' . "\n";
}


if ($box_icon_type == 'number') {
	$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . (($box_type != 'cmsmasters_icon_heading_left') ? ':before' : '.cmsmasters_icon_heading_left .icon_box_heading:before') . ' { ' . 
		"\n\t" . "content:'" . esc_attr($box_icon_number) . "'; " . 
	"\n" . '} ' . "\n";
}


if ($button_show == 'true') {
	$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button:before { ' . 
		"\n\t" . 'margin-right:' . (($button_title != '') ? '.5em; ' : '0;') . 
		"\n\t" . 'margin-left:0; ' . 
		"\n\t" . 'vertical-align:baseline; ' . 
	"\n" . '} ' . "\n\n";
	
	
	if ($button_custom_styles == 'true') {
		$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button { ' . 
			(($button_font_family != '') ? "\n\t" . 'font-family:' . str_replace('+', ' ', $font_family_name) . '; ' : '') . 
			(($button_font_size != '') ? "\n\t" . 'font-size:' . esc_attr($button_font_size) . 'px; ' : '') . 
			(($button_line_height != '') ? "\n\t" . 'line-height:' . esc_attr($button_line_height) . 'px; ' : '') . 
			(($button_font_weight != '') ? "\n\t" . 'font-weight:' . esc_attr($button_font_weight) . '; ' : '') . 
			(($button_font_style != '') ? "\n\t" . 'font-style:' . esc_attr($button_font_style) . '; ' : '') . 
			(($button_padding_hor != '') ? "\n\t" . 'padding-right:' . esc_attr($button_padding_hor) . 'px; ' : '') . 
			(($button_padding_hor != '') ? "\n\t" . 'padding-left:' . esc_attr($button_padding_hor) . 'px; ' : '') . 
			(($button_border_width != '') ? "\n\t" . 'border-width:' . esc_attr($button_border_width) . 'px; ' : '') . 
			(($button_border_style != '') ? "\n\t" . 'border-style:' . esc_attr($button_border_style) . '; ' : '') . 
			(($button_border_radius != '') ? "\n\t" . '-webkit-border-radius:' . esc_attr($button_border_radius) . '; ' . "\n\t" . 'border-radius:' . esc_attr($button_border_radius) . '; ' : '') . 
			(($button_bg_color != '') ? "\n\t" . cmsmasters_color_css('background-color', $button_bg_color) : '') . 
			(($button_text_color != '') ? "\n\t" . cmsmasters_color_css('color', $button_text_color) : '') . 
			(($button_border_color != '') ? "\n\t" . cmsmasters_color_css('border-color', $button_border_color) : '') . 
		"\n" . '} ' . "\n";
		
		$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button:hover { ' . 
			(($button_bg_color_h != '') ? "\n\t" . cmsmasters_color_css('background-color', $button_bg_color_h) : '') . 
			(($button_text_color_h != '') ? "\n\t" . cmsmasters_color_css('color', $button_text_color_h) : '') . 
			(($button_border_color_h != '') ? "\n\t" . cmsmasters_color_css('border-color', $button_border_color_h) : '') . 
		"\n" . '} ' . "\n";
		
		
		if ($button_style != '') {
			if (
				$button_style == 'cmsmasters_but_bg_slide_left' || 
				$button_style == 'cmsmasters_but_bg_slide_right' || 
				$button_style == 'cmsmasters_but_bg_slide_top' || 
				$button_style == 'cmsmasters_but_bg_slide_bottom' || 
				$button_style == 'cmsmasters_but_bg_expand_vert' || 
				$button_style == 'cmsmasters_but_bg_expand_hor' || 
				$button_style == 'cmsmasters_but_bg_expand_diag' 
			) {
				if ($button_bg_color != '') {
					$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_slide_left:hover, ' . 
					'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_slide_right:hover, ' . 
					'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_slide_top:hover, ' . 
					'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_slide_bottom:hover, ' . 
					'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_expand_vert:hover, ' . 
					'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_expand_hor:hover, ' . 
					'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_expand_diag:hover { ' . 
						"\n\t" . cmsmasters_color_css('background-color', $button_bg_color) . 
					"\n" . '} ' . "\n";
				}
				
				if ($button_bg_color_h != '') {
					$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_slide_left:after, ' . 
					'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_slide_right:after, ' . 
					'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_slide_top:after, ' . 
					'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_slide_bottom:after, ' . 
					'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_expand_vert:after, ' . 
					'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_expand_hor:after, ' . 
					'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_bg_expand_diag:after { ' . 
						"\n\t" . cmsmasters_color_css('background-color', $button_bg_color_h) . 
					"\n" . '} ' . "\n";
				}
			}
			
			
			if (
				$button_style == 'cmsmasters_but_icon_dark_bg' || 
				$button_style == 'cmsmasters_but_icon_light_bg' || 
				$button_style == 'cmsmasters_but_icon_divider' || 
				$button_style == 'cmsmasters_but_icon_inverse' 
			) {
				$but_icon_pad = ($button_padding_hor != '' ? $button_padding_hor : '20') + ($button_line_height != '' ? $button_line_height : '40');
				
				if ($button_padding_hor != '' || $button_line_height != '') {
					$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_dark_bg, ' . 
					'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_light_bg, ' . 
					'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_divider, ' .  
					'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_inverse { ' . 
						"\n\t" . 'padding-left:' . esc_attr($but_icon_pad) . 'px; ' . 
					"\n" . '} ' . "\n";
					
					$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_dark_bg:before, ' . 
					'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_light_bg:before, ' . 
					'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_divider:before, ' . 
					'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_inverse:before, ' . 
					'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_dark_bg:after, ' . 
					'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_light_bg:after, ' . 
					'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_divider:after, ' . 
					'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_inverse:after { ' . 
						"\n\t" . 'width:' . esc_attr($button_line_height) . 'px; ' . 
					"\n" . '} ' . "\n";
				}
				
				
				if ($button_border_color != '' || $button_border_color_h != '') {
					$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_divider:after { ' . 
						"\n\t" . cmsmasters_color_css('border-color', $button_border_color) . 
					"\n" . '} ' . "\n";
					
					$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_divider:hover:after { ' . 
						"\n\t" . cmsmasters_color_css('border-color', $button_border_color_h) . 
					"\n" . '} ' . "\n";
				}
				
				
				if ($button_style == 'cmsmasters_but_icon_inverse') {
					$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_inverse:before { ' . 
						(($button_text_color_h != '') ? "\n\t" . cmsmasters_color_css('color', $button_text_color_h) : '') . 
					"\n" . '} ' . "\n";
					
					$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_inverse:after { ' . 
						(($button_bg_color_h != '') ? "\n\t" . cmsmasters_color_css('background-color', $button_bg_color_h) : '') . 
					"\n" . '} ' . "\n";
					
					$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_inverse:hover:before { ' . 
						(($button_text_color != '') ? "\n\t" . cmsmasters_color_css('color', $button_text_color) : '') . 
					"\n" . '} ' . "\n";
					
					$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_inverse:hover:after { ' . 
						(($button_bg_color != '') ? "\n\t" . cmsmasters_color_css('background-color', $button_bg_color) : '') . 
					"\n" . '} ' . "\n";
				}
			}
			
			
			if (
				$button_style == 'cmsmasters_but_icon_slide_left' || 
				$button_style == 'cmsmasters_but_icon_slide_right' 
			) {
				if ($button_padding_hor != '') {
					$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_slide_left, ' . 
					'#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_slide_right { ' . 
						"\n\t" . 'padding-left:' . esc_attr(($button_padding_hor * 2)) . 'px; ' . 
						"\n\t" . 'padding-right:' . esc_attr(($button_padding_hor * 2)) . 'px; ' . 
					"\n" . '} ' . "\n";
					
					$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_slide_left:before { ' . 
						"\n\t" . 'width:' . esc_attr(($button_padding_hor * 2)) . 'px; ' . 
						"\n\t" . 'left:-' . esc_attr(($button_padding_hor * 2)) . 'px; ' . 
					"\n" . '} ' . "\n";
					
					$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_slide_left:hover:before { ' . 
						"\n\t" . 'left:0; ' . 
					"\n" . '} ' . "\n";
					
					$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_slide_right:before { ' . 
						"\n\t" . 'width:' . esc_attr(($button_padding_hor * 2)) . 'px; ' . 
						"\n\t" . 'right:-' . esc_attr(($button_padding_hor * 2)) . 'px; ' . 
					"\n" . '} ' . "\n";
					
					$shortcode_styles .= '#cmsmasters_icon_box_' . esc_attr($unique_id) . ' .cmsmasters_button.cmsmasters_but_icon_slide_right:hover:before { ' . 
						"\n\t" . 'right:0; ' . 
					"\n" . '} ' . "\n";
				}
			}
		}
	}
}


$shortcode_styles .= "\n";


$out = $this->cmsmasters_generate_front_css($shortcode_styles);


$box_icon = ($box_icon_type == 'icon') ? $box_icon : '';


$out .= '<div id="cmsmasters_icon_box_' . esc_attr($unique_id) . '" class="cmsmasters_icon_box ' . esc_attr($box_type) . ' box_icon_type_' . esc_attr($box_icon_type) . 
(($box_type != 'cmsmasters_icon_heading_left') ? ' ' . esc_attr($box_icon) : '') . 
(($classes != '') ? ' ' . esc_attr($classes) : '') . 
'"' . 
(($animation != '') ? ' data-animation="' . esc_attr($animation) . '"' : '') . 
(($animation != '' && $animation_delay != '') ? ' data-delay="' . esc_attr($animation_delay) . '"' : '') . 
'>' . "\n" . 
	'<div class="icon_box_inner">' . "\n";
		
		
		if ($title != '') {
			$out .= '<' . esc_attr($heading_type) . ' class="icon_box_heading' . (($box_type == 'cmsmasters_icon_heading_left') ? ' ' . esc_attr($box_icon)  . '' : '') . '">' . esc_html($title) . '</' . esc_attr($heading_type) . '>' . "\n";
		}
		
		
		$out .= cmsmasters_divpdel('<div class="icon_box_text">' . "\n" . 
			do_shortcode(wpautop($content)) . 
		'</div>' . "\n");
		
		
		if ($button_show == 'true') {
			$out .= '<a href="' . esc_url($button_link) . '" class="cmsmasters_button icon_box_button' . 
			(($button_style != '') ? ' cmsmasters_but_clear_styles ' . esc_attr($button_style) : '') . 
			(($button_icon != '') ? ' ' . esc_attr($button_icon) : '') . 
			'"' . 
			(($button_target == 'blank') ? ' target="_blank"' : '') . 
			'><span>' . esc_html($button_title) . '</span></a>' . "\n";
		}
		
		
	$out .= '</div>' . "\n" . 
'</div>' . "\n";


echo children_charity_return_content($out);