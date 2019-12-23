<?php
/**
 * @package 	WordPress
 * @subpackage 	Children Charity
 * @version		1.0.6
 * 
 * Post Single Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = children_charity_get_global_options();

$cmsmasters_post_title = get_post_meta(get_the_ID(), 'cmsmasters_post_title', true);


list($cmsmasters_layout) = children_charity_theme_page_layout_scheme();

if ($cmsmasters_layout == 'fullwidth') {
	$cmsmasters_image_thumb_size = 'cmsmasters-full-masonry-thumb';
} else {
	$cmsmasters_image_thumb_size = 'cmsmasters-masonry-thumb';
}



$cmsmasters_post_format = get_post_format();

$cmsmasters_post_date_color = get_post_meta(get_the_ID(), 'cmsmasters_post_color', true);

$cmsmasters_post_sharing_box = get_post_meta(get_the_ID(), 'cmsmasters_post_sharing_box', true);

$cmsmasters_post_author_box = get_post_meta(get_the_ID(), 'cmsmasters_post_author_box', true);

$cmsmasters_post_more_posts = get_post_meta(get_the_ID(), 'cmsmasters_post_more_posts', true);

?>
<!--_________________________ Start Post Single Article _________________________ -->
<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_open_post'); ?>>
	<?php 
	if (class_exists('Cmsmasters_Content_Composer')) {
		$cmsmasters_post_style = "
			#post-" . get_the_ID() . " .cmsmasters_post_meta_info {
				background-color:{$cmsmasters_post_date_color};
			}
		";
		
		echo cmsmasters_theme_generate_front_css($cmsmasters_post_style);
	}
	
	if ($cmsmasters_option['children-charity' . '_blog_post_date']) {
		echo '<div class="cmsmasters_post_meta_info entry-meta">';
			
			children_charity_get_post_date('post');
			
		echo '</div>';
	}
	
	
	if ($cmsmasters_post_title == 'true') {
		children_charity_post_title_nolink(get_the_ID(), 'h2');
	}
	
	
	if (
		$cmsmasters_option['children-charity' . '_blog_post_author'] || 
		$cmsmasters_option['children-charity' . '_blog_post_cat'] || 
		$cmsmasters_option['children-charity' . '_blog_post_tag'] 
	) {
		echo '<div class="cmsmasters_post_cont_info entry-meta">';
		
			children_charity_get_post_author('post');
			
			children_charity_get_post_category(get_the_ID(), 'category', 'post');
			
			children_charity_get_post_tags();
			
		echo '</div>';
	}
	
	
	if ($cmsmasters_post_format == 'image') {
		$cmsmasters_post_image_link = get_post_meta(get_the_ID(), 'cmsmasters_post_image_link', true);
		
		children_charity_post_type_image(get_the_ID(), $cmsmasters_post_image_link, $cmsmasters_image_thumb_size);
	} elseif ($cmsmasters_post_format == 'gallery') {
		$cmsmasters_post_images = explode(',', str_replace(' ', '', str_replace('img_', '', get_post_meta(get_the_ID(), 'cmsmasters_post_images', true))));
		
		children_charity_post_type_slider(get_the_ID(), $cmsmasters_post_images, $cmsmasters_image_thumb_size);
	} elseif ($cmsmasters_post_format == 'video') {
		$cmsmasters_post_video_type = get_post_meta(get_the_ID(), 'cmsmasters_post_video_type', true);
		$cmsmasters_post_video_link = get_post_meta(get_the_ID(), 'cmsmasters_post_video_link', true);
		$cmsmasters_post_video_links = get_post_meta(get_the_ID(), 'cmsmasters_post_video_links', true);
		
		children_charity_post_type_video(get_the_ID(), $cmsmasters_post_video_type, $cmsmasters_post_video_link, $cmsmasters_post_video_links, $cmsmasters_image_thumb_size);
	} elseif ($cmsmasters_post_format == 'audio') {
		$cmsmasters_post_audio_links = get_post_meta(get_the_ID(), 'cmsmasters_post_audio_links', true);
		
		children_charity_post_type_audio($cmsmasters_post_audio_links);
	} elseif (!post_password_required() && has_post_thumbnail()) {
		$cmsmasters_post_image_show = get_post_meta(get_the_ID(), 'cmsmasters_post_image_show', true);
		
		if ($cmsmasters_post_image_show != 'true') {
			children_charity_thumb(get_the_ID(), $cmsmasters_image_thumb_size, false, 'cmsmasters_open_post_img', false, false, false, true, false);
		}
	}
	
	
	if (get_the_content() != '') {
		echo '<div class="cmsmasters_post_content entry-content">';
			
			the_content();
			
			
			wp_link_pages(array( 
				'before' => '<div class="subpage_nav">' . '<strong>' . esc_html__('Pages', 'children-charity') . ':</strong>', 
				'after' => '</div>', 
				'link_before' => '<span>', 
				'link_after' => '</span>' 
			));
			
		echo '</div>';
	}
	
	
	if (
		$cmsmasters_option['children-charity' . '_blog_post_like'] || 
		$cmsmasters_option['children-charity' . '_blog_post_comment'] 
	) {
		echo '<footer class="cmsmasters_post_footer entry-meta">';
			
			if ($cmsmasters_post_sharing_box == 'true') {
				children_charity_sharing_box(esc_html__('Like this post?', 'children-charity'), 'h4');
			}
			
			
			if (
				$cmsmasters_option['children-charity' . '_blog_post_like'] || 
				$cmsmasters_option['children-charity' . '_blog_post_comment'] 
			) {
				echo '<div class="cmsmasters_post_info entry-meta">';
				
					children_charity_get_post_likes('post');
					
					children_charity_get_post_comments('post');
					
				echo '</div>';
			}
			
		echo '</footer>';
	}
	?>
</article>
<!--_________________________ Finish Post Single Article _________________________ -->
<?php 

if ($cmsmasters_option['children-charity' . '_blog_post_nav_box']) {
	$order_cat = (isset($cmsmasters_option['children-charity' . '_blog_post_nav_order_cat']) ? $cmsmasters_option['children-charity' . '_blog_post_nav_order_cat'] : false);
	
	children_charity_prev_next_posts($order_cat, 'category');
}


if (get_the_tags()) {
	$tgsarray = array();
	
	foreach (get_the_tags() as $tagone) {
		$tgsarray[] = $tagone->term_id;
	}
} else {
	$tgsarray = '';
}


if ($cmsmasters_post_more_posts != 'hide') {
	children_charity_related( 
		'h4', 
		esc_html__('More posts', 'children-charity'), 
		esc_html__('No posts found', 'children-charity'), 
		$cmsmasters_post_more_posts, 
		$tgsarray, 
		$cmsmasters_option['children-charity' . '_blog_more_posts_count'], 
		$cmsmasters_option['children-charity' . '_blog_more_posts_pause'], 
		'post' 
	);
}


if ($cmsmasters_post_author_box == 'true') {
	children_charity_author_box(esc_html__('About author', 'children-charity'), 'h4', 'h5');
}


echo children_charity_get_pings(get_the_ID(), 'h4');


comments_template(); 