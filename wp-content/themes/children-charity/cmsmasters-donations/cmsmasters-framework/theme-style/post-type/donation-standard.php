<?php
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version		1.0.0
 * 
 * CMSMasters Donations Donation Standard Format
 * Created by CMSMasters
 * 
 */


$cmsmasters_metadata = explode(',', $cmsmasters_donation_metadata);

$image = in_array('image', $cmsmasters_metadata) ? true : false;
$link = in_array('link', $cmsmasters_metadata) ? true : false;
$campaign = in_array('campaign', $cmsmasters_metadata) ? true : false;
$amount = in_array('amount', $cmsmasters_metadata) ? true : false;
$cmsmasters_donation_color = get_post_meta(get_the_ID(), 'cmsmasters_donation_color', true);

global $post;

$camp = $post;

?>
<!--_________________________ Start Standard Donation _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsmasters_donation_cont_wrap">
		<?php 
		if ($cmsmasters_donation_color != '' && class_exists('Cmsmasters_Content_Composer')) {
		
			$cmsmasters_donation_style = "
				.cmsmasters_donations #post-" . $camp->ID . " .cmsmasters_donation_cont_wrap_bottom  {
					background-color:{$cmsmasters_donation_color};
				}
				
				.cmsmasters_donations #post-" . $camp->ID . " .cmsmasters_img_rollover {
					background-color:rgba(" . cmsmasters_color2rgb($cmsmasters_donation_color) . ", 0.9);
				}
			";
			
			echo cmsmasters_theme_generate_front_css($cmsmasters_donation_style);
		}
		
		if ($image) {
			children_charity_thumb_rollover(get_the_ID(), 'cmsmasters-blog-masonry-thumb', true, $link, false, false, false, false, false, false, true, false, false);
		}
		?>
		<div class="cmsmasters_donation_cont_wrap_bottom">
			<div class="cmsmasters_donation_cont">
				<?php 
				children_charity_donations_donation_heading(get_the_ID(), 'h3', $link);
				
				$campaign ? children_charity_donations_donation_campaign(get_the_ID(), 'page') : '';
				?>
			</div>
			<?php 
			if ($amount) { ?>
			<footer class="cmsmasters_donation_footer entry-meta">
				<?php children_charity_donations_donation_amount_currency(get_the_ID(), 'page'); ?>
			</footer>
			<?php } 
			?>
		</div>
	</div>
</article>
<!--_________________________ Finish Standard Donation _________________________ -->

