<?php
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version		1.0.0
 * 
 * CMSMasters Donations Campaign Vertical Format
 * Created by CMSMasters
 * 
 */

$cmsmasters_option = children_charity_get_global_options();
$cmsmasters_metadata = explode(',', $cmsmasters_campaign_metadata);

$image = in_array('image', $cmsmasters_metadata) ? true : false;
$link = in_array('link', $cmsmasters_metadata) ? true : false;
$rest_amount = in_array('rest_amount', $cmsmasters_metadata) ? true : false;
$donated_percent = in_array('donated_percent', $cmsmasters_metadata) ? true : false;
$excerpt = in_array('excerpt', $cmsmasters_metadata) ? true : false;
$donation_but = in_array('donation_but', $cmsmasters_metadata) ? true : false;
$cmsmasters_campaign_color = get_post_meta(get_the_ID(), 'cmsmasters_campaign_color', true);

global $post;

$camp = $post;
?>
<!--_________________________ Start Vertical Campaign _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
	if ($cmsmasters_campaign_color != '' && class_exists('Cmsmasters_Content_Composer')) { 
	
		$cmsmasters_campaign_style = "
			.cmsmasters_featured_campaign #post-" . $camp->ID . " .cmsmasters_campaign_donate_button a:hover {
				color:{$cmsmasters_campaign_color};
			}
			
			.cmsmasters_featured_campaign #post-" . $camp->ID . ",
			.cmsmasters_featured_campaign #post-" . $camp->ID . " .cmsmasters_stat_inner {
				background-color:{$cmsmasters_campaign_color};
			}
			
			.cmsmasters_featured_campaign #post-" . $camp->ID . " .button {
				border-color:{$cmsmasters_campaign_color};
			}
			
			.cmsmasters_featured_campaign #post-" . $camp->ID . " .cmsmasters_img_rollover {
				background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_campaign_color) . ", 0.9);
			}
		";
	
		echo cmsmasters_theme_generate_front_css($cmsmasters_campaign_style);
	}
	
	if ($image) {
		echo '<div class="cmsmasters_campaign_wrap_img">';
			children_charity_thumb_rollover($camp->ID, 'cmsmasters-square-thumb', true, $link, false, false, false, false, false, false, true, false, false);
		echo '</div>';
	}
	?>
	<div class="cmsmasters_campaign_cont">
		<div class="cmsmasters_campaign_wrap_heading">
			<?php 
			if ($rest_amount) {
				children_charity_donations_campaign_rest_amount($camp->ID);
			}
			
			children_charity_donations_campaign_heading($camp->ID, 'h2', $link);
			?>
		</div>
		<?php
		if ($excerpt) {
			if ($camp->post_excerpt != '') {
				$cmsmasters_content = $camp->post_excerpt;
			} else {
				$cmsmasters_content = $camp->post_content;
			}
			
			
			children_charity_donations_campaign_exc_cont($cmsmasters_content);
		}
		
		
		if ($donation_but) {
			children_charity_donations_campaign_donate_button($camp->ID);
		}
		?>
	</div>
	
	<?php
	if ($donated_percent) {
		children_charity_donations_campaign_donated($camp->ID, 'page', 'vertical');
	}
	?>
	
</article>
<!--_________________________ Finish Vertical Campaign _________________________ -->

