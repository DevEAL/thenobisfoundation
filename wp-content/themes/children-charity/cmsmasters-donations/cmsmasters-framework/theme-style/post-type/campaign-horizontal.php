<?php
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version		1.0.0
 * 
 * CMSMasters Donations Campaign Horizontal Format
 * Created by CMSMasters
 * 
 */


$cmsmasters_metadata = explode(',', $cmsmasters_campaigns_metadata);

$title = (in_array('title', $cmsmasters_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$excerpt = (in_array('excerpt', $cmsmasters_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$donated_percent = (in_array('donated_percent', $cmsmasters_metadata) || is_home() || is_archive() || is_search()) ? true : false;
$cmsmasters_campaign_color = get_post_meta(get_the_ID(), 'cmsmasters_campaign_color', true);

global $post;

$camp = $post;


if (is_home() || is_archive() || is_search()) {
	$cmsmasters_thumb_size = 'post-thumbnail';
} else {
	$cmsmasters_thumb_size = 'cmsmasters-blog-masonry-thumb';
}
?>
<!--_________________________ Start Horizontal Campaign _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
	if ($cmsmasters_campaign_color != '' && class_exists('Cmsmasters_Content_Composer')) { 
	
		$cmsmasters_campaign_style = "
			.cmsmasters_campaigns #post-" . $camp->ID . " .cmsmasters_campaign_inner {
				background-color:{$cmsmasters_campaign_color};
			}
			
			.cmsmasters_campaigns #post-" . $camp->ID . " .cmsmasters_img_rollover {
				background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_campaign_color) . ", 0.9);
			}	
		";
		
		echo cmsmasters_theme_generate_front_css($cmsmasters_campaign_style);
	}
	
	
	children_charity_thumb_rollover($camp->ID, $cmsmasters_thumb_size, true, true, false, false, false, false, false, false, true, false, false);
	
	if ($title || $excerpt || $donated_percent) {
		echo '<div class="cmsmasters_campaign_inner">';
		
			if ($title) {
				children_charity_donations_campaign_heading($camp->ID, 'h3', true);
			}
			
			
			if ($excerpt) {
				if ($camp->post_excerpt != '') {
					$cmsmasters_content = $camp->post_excerpt;
				} else {
					$cmsmasters_content = $camp->post_content;
				}
				
				
				children_charity_donations_campaign_exc_cont($cmsmasters_content);
			}
			
			
			if ($donated_percent) {
				children_charity_donations_campaign_donated($camp->ID, 'page', 'horizontal');
			}

		echo '</div>';
	}
	?>
</article>
<!--_________________________ Finish Horizontal Campaign _________________________ -->

