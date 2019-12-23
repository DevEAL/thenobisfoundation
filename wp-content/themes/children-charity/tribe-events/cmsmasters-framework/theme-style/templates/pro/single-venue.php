<?php
/**
 * @cmsmasters_package 	Children Charity
 * @cmsmasters_version 	1.0.0
 */


$venue_id = get_the_ID();
$full_address = tribe_get_full_address();
$telephone    = tribe_get_phone();
$website_link = tribe_get_venue_website_link();
global $wp_query;


while ( have_posts() ) : the_post(); ?>
<div class="tribe-events-venue">
	<div class="cmsmasters_events_venue_header clearfix">
		<div class="updated published time-details cmsmasters_events_start_date">
			<span class="cmsmasters_event_day"><?php echo tribe_get_start_date(null, false, 'd'); ?></span>
			<span class="cmsmasters_event_month_week">
				<span class="cmsmasters_event_month"><?php echo tribe_get_end_date(null, false, 'F'); ?></span>
				<span class="cmsmasters_event_week"><?php echo tribe_get_end_date(null, false, 'l'); ?></span>
			</span>
		</div>
		<div class="cmsmasters_events_venue_header_left clearfix">
			<!-- Venue Title -->
			<?php do_action('tribe_events_single_venue_before_title'); ?>
			<h2 class="tribe-venue-name entry-title author fn org"><?php echo tribe_get_venue( $venue_id ); ?></h2>
			<?php do_action( 'tribe_events_single_venue_after_title' ) ?>
			
			<div class="tribe-events-event-meta">
				<!-- Venue Meta -->
				<?php do_action( 'tribe_events_single_venue_before_the_meta' ) ?>

				<div class="venue-address">

					<?php if ( $full_address ) : ?>
					<address class="tribe-events-address">
						<span class="location">
							<?php echo wp_kses( $full_address, 'post' ); ?>
						</span>
					</address>
					<?php endif; ?>

					<?php if ( $telephone ): ?>
						<span class="tel">
							<?php echo esc_html( $telephone ); ?>
						</span>
					<?php endif; ?>

					<?php if ( $website_link ): ?>
						<span class="url">
							<?php echo wp_kses( $website_link, 'post' ); ?>
						</span>
					<?php endif; ?>

				</div><!-- .venue-address -->

				<?php do_action( 'tribe_events_single_venue_after_the_meta' ) ?>
			</div>
		</div>
		<div class="cmsmasters_events_venue_header_right clearfix">
			<div class="tribe-events-back">
				<a class="cmsmasters_theme_icon_date" href="<?php echo esc_url( tribe_get_events_link() ); ?>" rel="bookmark"><?php printf( esc_html__( 'Back to %s', 'children-charity' ), tribe_get_event_label_plural() ); ?></a>
			</div>
		</div>
	</div>
	<div class="tribe-events-venue-meta vcard tribe-clearfix">
		<?php 
		if (has_post_thumbnail() || tribe_embed_google_map()) {
			echo '<div class="cmsmasters_single_event_map_img_wrap';
				
				if (has_post_thumbnail() && tribe_embed_google_map()) {
					echo ' used_thumbnail_and_map';
				}
				
				echo '">';
				
				if (has_post_thumbnail()) {
					echo '<div class="cmsmasters_events_venue_meta_img">' . 
						tribe_event_featured_image(null, 'cmsmasters-full-masonry-thumb') . 
					'</div>';
				}
				
				if (tribe_embed_google_map() && tribe_address_exists()) {
					echo '<div class="cmsmasters_events_venue_meta_map">' . 
						'<div class="tribe-events-map-wrap">' . 
							tribe_get_embedded_map( $venue_id, '100%', '0px' ) . 
						'</div>' . 
					'</div>';
				}
				
			echo '</div>';
		}
		?>
		<!-- Venue Description -->
		<?php if( get_the_content() ) : ?>
		<div class="tribe-venue-description tribe-events-content entry-content">
			<?php the_content(); ?>
		</div>
		<?php endif; ?>
	</div><!-- .tribe-events-event-meta -->

	<!-- Upcoming event list -->
	<?php do_action( 'tribe_events_single_venue_before_upcoming_events' ) ?>

	<?php
	// Use the tribe_events_single_venuer_posts_per_page to filter the number of events to get here.
	echo tribe_venue_upcoming_events( $venue_id, $wp_query->query_vars ); ?>

	<?php do_action( 'tribe_events_single_venue_after_upcoming_events' ) ?>
	
</div><!-- .tribe-events-venue -->
<?php endwhile; ?>