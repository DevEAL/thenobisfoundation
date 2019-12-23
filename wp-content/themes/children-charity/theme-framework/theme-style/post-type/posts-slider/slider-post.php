<?php
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version		1.0.0
 * 
 * Posts Slider Post Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_metadata = explode(',', $cmsmasters_post_metadata);


$title = in_array('title', $cmsmasters_metadata) ? true : false;
$excerpt = (in_array('excerpt', $cmsmasters_metadata) && children_charity_slider_post_check_exc_cont('post')) ? true : false;
$date = in_array('date', $cmsmasters_metadata) ? true : false;
$categories = (get_the_category() && (in_array('categories', $cmsmasters_metadata))) ? true : false;
$author = in_array('author', $cmsmasters_metadata) ? true : false;
$comments = (comments_open() && (in_array('comments', $cmsmasters_metadata))) ? true : false;
$likes = in_array('likes', $cmsmasters_metadata) ? true : false;
$more = in_array('more', $cmsmasters_metadata) ? true : false;


$cmsmasters_post_date_color = get_post_meta(get_the_ID(), 'cmsmasters_post_color', true);

$cmsmasters_post_format = get_post_format();

?>
<!--_________________________ Start Posts Slider Post Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_slider_post'); ?>>
	<div class="cmsmasters_slider_post_outer">
	<?php
		$cmsmasters_post_style = "
			#post-" . get_the_ID() . " .cmsmasters_post_date_wrap {
				background-color:{$cmsmasters_post_date_color};
			}
		";
		
		echo cmsmasters_theme_generate_front_css($cmsmasters_post_style);
		
		echo '<div class="cmsmasters_slider_post_img_wrap">';
			
			if ($date) {
				echo '<div class="cmsmasters_post_date_wrap">';
					
					$date ? children_charity_get_slider_post_date('post') : '';
					
				echo '</div>';
			}
		
			children_charity_thumb_rollover(get_the_ID(), 'cmsmasters-square-thumb', false, true, false, false, false, false, false, false, true, false, false);
			
		echo '</div>';
		
		
		if ($date || $title || $excerpt || $more || $author || $categories || $likes || $comments) {
			echo '<div class="cmsmasters_slider_post_inner">';
				
				$title ? children_charity_slider_post_heading(get_the_ID(), 'post', 'h2') : '';
				
				if ($author || $categories) {
					echo '<div class="cmsmasters_slider_post_cont_info entry-meta">';
					
						$author ? children_charity_get_slider_post_author('post') : '';
						
						$categories ? children_charity_get_slider_post_category(get_the_ID(), 'category', 'post') : '';
						
					echo '</div>';
				}
				
				$excerpt ? children_charity_slider_post_exc_cont('post') : '';
				
				
				if ($more || $likes || $comments) {
					echo '<footer class="cmsmasters_slider_post_footer entry-meta">';
					
						$more ? children_charity_slider_post_more(get_the_ID()) : '';
						
						if ($likes || $comments) {
							echo '<div class="cmsmasters_slider_post_meta_info entry-meta">';
							
								$likes ? children_charity_slider_post_like('post') : '';
								
								$comments ? children_charity_get_slider_post_comments('post') : '';
								
							echo '</div>';
						}
						
					echo '</footer>';
				}
				
			echo '</div>';
		}
	?>
	</div>
</article>
<!--_________________________ Finish Posts Slider Post Article _________________________ -->

