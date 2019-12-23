<?php
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version 	1.0.8
 * 
 * Content Composer Clients Shortcode
 * Created by CMSMasters
 * 
 */


extract(shortcode_atts($new_atts, $atts));


$unique_id = $shortcode_id;


$this->clients_atts = array(
	'client_out' => '', 
	'layout' => $layout 
);


$clients_col = '';

if ($columns == 1) {
	$clients_col = 'clients_one';
} elseif ($columns == 2) {
	$clients_col = 'clients_two';
} elseif ($columns == 3) {
	$clients_col = 'clients_three';
} elseif ($columns == 4) {
	$clients_col = 'clients_four';
} elseif ($columns == 5) {
	$clients_col = 'clients_five';
}


do_shortcode($content);

$shortcode_styles = "\n" . 
	'#cmsmasters_clients_' . esc_attr($unique_id) . ' .cmsmasters_clients_item { ' . 
		'height:' . esc_attr($height) . 'px; ' .  
		'line-height:' . esc_attr($height) . 'px; ' .  
	'} ' . "\n" . 
	'#cmsmasters_clients_' . esc_attr($unique_id) . ' .cmsmasters_clients_item a { ' . 
		'line-height:' . esc_attr($height) . 'px; ' .  
	'} ' . 
"\n";


$out = $this->cmsmasters_generate_front_css($shortcode_styles);


if ($layout == 'slider') {
	$autoplay = ($autoplay != 'true' ? 'false' : '5000');
	$speed = ((int) $speed * 1000);
	$slides_control = ($slides_control != 'true' ? 'false' : 'true');
	$arrow_control = ($arrow_control != 'true' ? 'false' : 'true');
	
	$out .= '<div class="cmsmasters_clients_slider_wrap ' . (($classes != '') ? ' ' . esc_attr($classes) : '') . (($slides_control != 'true') ? '' : 'slides_control ') . (($arrow_control != 'true') ? '' : 'arrow_control ') . '"' . 
	(($animation != '') ? ' data-animation="' . esc_attr($animation) . '"' : '') . 
	(($animation != '' && $animation_delay != '') ? ' data-delay="' . esc_attr($animation_delay) . '"' : '') . 
	'>' . "\n" . 
		"<div" . 
			" id=\"cmsmasters_clients_" . esc_attr($unique_id) . "\"" . 
			" class=\"cmsmasters_owl_slider owl-carousel cmsmasters_clients_slider\"" . 
			" data-items=\"" . esc_attr($columns) . "\"" . 
			" data-single-item=\"false\"" . 
			" data-auto-play=\"" . esc_attr($autoplay) . "\"" . 
			" data-slide-speed=\"" . esc_attr($speed) . "\"" . 
			" data-pagination-speed=\"" . esc_attr($speed) . "\"" . 
			" data-pagination=\"" . esc_attr($slides_control) . "\"" . 
			" data-navigation=\"" . esc_attr($arrow_control) . "\"" . 
		">" . 
			$this->clients_atts['client_out'] . 
		'</div>' . "\n" . 
	'</div>' . "\n";
} else {
	$out .= '<div class="cmsmasters_clients_grid_wrap' . (($classes != '') ? ' ' . esc_attr($classes) : '') . '"' . 
	(($animation != '') ? ' data-animation="' . esc_attr($animation) . '"' : '') . 
	(($animation != '' && $animation_delay != '') ? ' data-delay="' . esc_attr($animation_delay) . '"' : '') . 
	'>' . "\n" . 
	'<div id="cmsmasters_clients_' . esc_attr($unique_id) . '" class="cmsmasters_clients_grid' . ' ' . esc_attr($clients_col) . '">' . "\n" . 
	'<div class="cmsmasters_clients_items slides">' . "\n" . 
		$this->clients_atts['client_out'] . 
	'</div>' . "\n" . 
	'</div>' . "\n" . 
	'</div>' . "\n";
}

echo children_charity_return_content($out);

