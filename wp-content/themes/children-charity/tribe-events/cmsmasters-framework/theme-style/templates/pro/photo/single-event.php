<?php 
/**
 * @cmsmasters_package 	Children Charity
 * @cmsmasters_version 	1.0.0
 */

?>

<?php

global $post;


$venue_details = tribe_get_venue_details();

?>

<div class="tribe-events-photo-event-wrap">
	<div class="cmsmasters_event_img_date_wrap">
		<?php echo tribe_event_featured_image( null, 'cmsmasters-event-thumb' ); ?>
	
		<div class="cmsmasters_event_date_details">
			<span class="cmsmasters_event_photo_date"><?php echo tribe_get_start_date(null, false, 'j M, Y'); ?></span>
		</div>
	</div>
	
	<div class="tribe-events-event-details tribe-clearfix">

		<!-- Event Title -->
		<?php do_action( 'tribe_events_before_the_event_title' ); ?>
		<h2 class="tribe-events-list-event-title entry-title summary">
			<a class="url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title() ?>" rel="bookmark">
				<?php the_title(); ?>
			</a>
		</h2>
		<?php do_action( 'tribe_events_after_the_event_title' ); ?>

		<!-- Event Meta -->
		<?php do_action( 'tribe_events_before_the_meta' ); ?>
		<div class="tribe-events-event-meta">
			<div class="updated published time-details">
				<span class="cmsmasters_event_day"><?php echo tribe_get_start_date(null, false, 'l, H:i'); ?></span>
				<span class="cmsmasters_event_month"> - <?php echo tribe_get_end_date(null, false, 'l, H:i'); ?></span>
			</div>
			<div class="tribe-events-event-location">
				<?php echo children_charity_return_content($venue_details['address']); ?>
				
			</div>
		</div><!-- .tribe-events-event-meta -->
		<?php do_action( 'tribe_events_after_the_meta' ); ?>
		
		<!-- Event Content -->
		<?php do_action( 'tribe_events_before_the_content' ); ?>
		<div class="tribe-events-list-photo-description tribe-events-content entry-summary description">
			<?php echo tribe_events_get_the_excerpt() ?>
		</div>
		<?php do_action( 'tribe_events_after_the_content' ) ?>

	</div><!-- /.tribe-events-event-details -->

</div><!-- /.tribe-events-photo-event-wrap -->
