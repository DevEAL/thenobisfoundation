<?php
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version		1.0.0
 * 
 * CMSMasters Donations Single Donation Template
 * Created by CMSMasters
 * 
 */


?>
<!--_________________________ Start Standard Donation _________________________ -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cmsmasters_donation_info">
		<?php
		if (!post_password_required() && has_post_thumbnail()) {
			echo '<div class="cmsmasters_donation_info_img">';
				children_charity_thumb(get_the_ID(), 'cmsmasters-square-thumb', false, 'img_' . get_the_ID(), true, true, true, true, false);
			echo '</div>';
		}
		?>
		<div class="cmsmasters_donation_info_cont">
			<?php 
			children_charity_donations_donation_heading(get_the_ID(), 'h2', false);
			
			children_charity_donations_donation_amount_currency(get_the_ID(), 'post');
			
			children_charity_donations_donation_campaign(get_the_ID(), 'post');
			
			if (!is_anonymous_donation(get_the_ID()) && get_the_excerpt() != '') {
				echo '<div class="cmsmasters_donation_content entry-content">';
					
					the_excerpt();
					
				echo '</div>';
			}
			?>
		</div>
	</div>
	<?php
	children_charity_donations_donation_details(get_the_ID(), true);
	?>
</article>
<!--_________________________ Finish Standard Donation _________________________ -->

