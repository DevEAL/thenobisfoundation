<?php
/**
 * @cmsmasters_package 	Children Charity
 * @cmsmasters_version 	1.0.0
 */


$events_label_plural = tribe_get_event_label_plural();

$posts = tribe_get_list_widget_events();

// Check if any event posts are found.
if ( $posts ) : ?>

	<ol class="hfeed vcalendar">
		<?php
		// Setup the post data for each event.
		foreach ( $posts as $post ) :
			setup_postdata( $post );
			?>
			<li class="tribe-events-list-widget-events <?php tribe_events_event_classes() ?>">
				<div class="cmsmasters_event_date">
					<div class="cmsmasters_event_date_inner">
						<span class="cmsmasters_event_day_mon"><?php echo tribe_get_start_date(null, false, 'd.m'); ?></span>
						<span class="cmsmasters_event_year"><?php echo tribe_get_start_date(null, false, 'Y'); ?></span>
					</div>
				</div>
				<div class="tribe-events-list-widget-content-wrap">
					<?php do_action( 'tribe_events_list_widget_before_the_event_title' ); ?>
					<!-- Event Title -->
					<h5 class="entry-title summary">
						<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" rel="bookmark"><?php the_title(); ?></a>
					</h5>

					<?php do_action( 'tribe_events_list_widget_after_the_event_title' ); ?>
					<!-- Event Time -->

					<?php do_action( 'tribe_events_list_widget_before_the_meta' ) ?>

					<div class="cmsmasters_widget_event_info">
						<div class="duration">
							<?php echo tribe_events_event_schedule_details(); ?>
						</div>
					</div>

					<?php do_action( 'tribe_events_list_widget_after_the_meta' ) ?>
				</div>
			</li>
		<?php
		endforeach;
		?>
	</ol><!-- .hfeed -->

	<p class="tribe-events-widget-link">
		<a href="<?php echo esc_url( tribe_get_events_link() ); ?>" rel="bookmark"><?php printf( esc_html__( 'View All %s', 'children-charity' ), $events_label_plural ); ?></a>
	</p>

<?php
// No events were found.
else : ?>
	<p><?php printf( esc_html__( 'There are no upcoming %s at this time.', 'children-charity' ), strtolower( $events_label_plural ) ); ?></p>
<?php
endif;
