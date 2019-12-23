<?php
/**
 * @cmsmasters_package 	Children Charity
 * @cmsmasters_version 	1.0.8
 */


$events_label_singular = tribe_get_event_label_singular();
$events_label_plural = tribe_get_event_label_plural();

$venue_details = tribe_get_venue_details();

$has_venue = ( $venue_details ) ? ' vcard' : '';
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';

$event_id = get_the_ID();

if (have_posts()) : the_post();

?>

<div id="tribe-events-content" class="tribe-events-single vevent hentry">
	<div id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_single_event'); ?>>
		<?php 
		tribe_the_notices();
		?>
		
		<div class="cmsmasters_single_event_header clearfix">
			<div class="updated published time-details cmsmasters_events_start_date">
				<span class="cmsmasters_event_day"><?php echo tribe_get_start_date(null, false, 'd'); ?></span>
				<span class="cmsmasters_event_month_week">
					<span class="cmsmasters_event_month"><?php echo tribe_get_end_date(null, false, 'F'); ?></span>
					<span class="cmsmasters_event_week"><?php echo tribe_get_end_date(null, false, 'l'); ?></span>
				</span>
			</div>
			<div class="cmsmasters_single_event_header_left clearfix">
				<?php 
				the_title('<h2 class="tribe-events-single-event-title summary entry-title">', '</h2>');
				
				
				echo '<div class="tribe-events-schedule updated published clearfix">';
					?>
					<div class="updated published time-details cmsmasters_events_start_end_date">
						<span class="cmsmasters_event_start"><?php echo tribe_get_start_date(null, false, 'd F Y, H:i'); ?></span>
						<span class="cmsmasters_event_end"> - <?php echo tribe_get_end_date(null, false, 'd F Y, H:i'); ?></span>
					</div>
					
					<?php if ( $venue_details ) : ?>
						<!-- Venue Display Info -->
						<div class="tribe-events-venue-details">
							<?php echo implode( ', ', $venue_details ); ?>
						</div> <!-- .tribe-events-venue-details -->
					<?php endif;
					
				echo '</div>';
				?>
			</div>
			<div class="cmsmasters_single_event_header_right clearfix">
				<div class="tribe-events-back">
					<a class="cmsmasters_theme_icon_date" href="<?php echo esc_url( tribe_get_events_link() ); ?>"> <?php printf( esc_html__( 'All %s', 'children-charity' ), $events_label_plural ); ?></a>
				</div>
				
				
				<?php
				$cmsmasters_tribe_events_ical = new Tribe__Events__iCal();
				
				$cmsmasters_tribe_events_ical->single_event_links(); 
				?>
				
			</div>
		</div>
		
		<?php 
		if (has_post_thumbnail() || tribe_embed_google_map()) {
			echo '<div class="cmsmasters_single_event_map_img_wrap';
				
				if (has_post_thumbnail() && tribe_embed_google_map()) {
					echo ' used_thumbnail_and_map';
				}
				
				echo '">';
				
				if (has_post_thumbnail()) {
					echo '<div class="cmsmasters_single_event_img">' . 
						tribe_event_featured_image($event_id, (!tribe_embed_google_map() ? 'cmsmasters-full-masonry-thumb' : 'cmsmasters-event-thumb'), false) . 
					'</div>';
				}
				
				
				if (tribe_embed_google_map()) {
					echo '<div class="cmsmasters_single_event_map' . (!has_post_thumbnail() ? ' cmsmasters_single_event_full_width' : '') . '">';
					
						tribe_get_template_part('modules/meta/map');
					
					echo '</div>';
				}
				
			echo '</div>';
		}
		
		
		do_action('tribe_events_single_event_before_the_content');
		
		
		echo '<div class="tribe-events-single-event-description cmsmasters_single_event_content tribe-events-content entry-content description">';
			
			the_content();
			
		echo '</div>';
		
		
		do_action('tribe_events_single_event_after_the_content');
		
	echo '</div>';
	
	
	do_action('tribe_events_single_event_before_the_meta');
	
	
	if (!apply_filters('tribe_events_single_event_meta_legacy_mode', false)) {
		tribe_get_template_part( 'modules/meta' );
	} else {
		echo tribe_events_single_event_meta();
	}
	
	
	$cmsmasters_post_type = get_post_type();
	
	$published_events = wp_count_posts($cmsmasters_post_type)->publish;
	
	
	if ($published_events > 1) {
		echo '<aside id="tribe-events-sub-nav" class="post_nav">';
			
			if (tribe_get_prev_event_link()) {
				echo '<span class="tribe-events-nav-previous cmsmasters_prev_post">';
					
					tribe_the_prev_event_link('%title%');
					
					echo '<span class="cmsmasters_prev_arrow"><span></span></span>' . 
				'</span>';
			}
			
			
			if (tribe_get_next_event_link()) {
				echo '<span class="tribe-events-nav-next cmsmasters_next_post">';
					
					tribe_the_next_event_link('%title%');
					
					echo '<span class="cmsmasters_next_arrow"><span></span></span>' . 
				'</span>';
			}
			
		echo '</aside>';
	}
	
	
	do_action('tribe_events_single_event_after_the_meta');

	
	
	do_action('tribe_events_single_event_after_the_meta');
	
	
	if (get_post_type() == Tribe__Events__Main::POSTTYPE && tribe_get_option('showComments', false)) {
		comments_template();
	}
	
echo '</div>';



endif;

