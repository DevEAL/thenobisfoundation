<?php 
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version 	1.0.0
 * 
 * Custom Single Comment Template
 * Created by CMSMasters
 * 
 */


function children_charity_mytheme_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
        <div id="comment-<?php comment_ID(); ?>" class="comment-body cmsmasters_comment_item">
			<figure class="cmsmasters_comment_item_avatar">
				<?php echo get_avatar($comment->comment_author_email, 56, get_option('avatar_default')) . "\n";
				
				edit_comment_link(esc_attr__('Edit', 'children-charity'), '', '');
				?>
			</figure>
			<div class="cmsmasters_comment_item_cont_info">
				<h6 class="fn cmsmasters_comment_item_title"><?php echo get_comment_author_link(); ?></h6>
				
				<div class="cmsmasters_comment_item_cont_reply_date">
					<?php 
					comment_reply_link(array_merge($args, array( 
						'depth' => $depth, 
						'max_depth' => $args['max_depth'], 
						'reply_text' => esc_attr__('Reply', 'children-charity') 
					)));
					
					echo '<abbr class="published cmsmasters_comment_item_date" title="' . get_comment_date() . '">' . 
						get_comment_date() . 
					'</abbr>';
					?>
				</div>
			</div>
			<div class="cmsmasters_comment_item_content">
				<?php 
				comment_text();
				
				if ($comment->comment_approved == '0') {
					echo '<p>' . 
						'<em>' . esc_html__('Your comment is awaiting moderation.', 'children-charity') . '</em>' . 
					'</p>';
				}
				?>
			</div>
        </div>
    <?php 
}

