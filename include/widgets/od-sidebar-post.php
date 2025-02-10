<?php

/**
 * ordainit-toolkit Sidebar Posts Image
 *
 *
 * @author 		Theme_Pure
 * @category 	Widgets
 * @package 	ordainit-toolkit/Widgets
 * @version 	1.0.0
 * @extends 	WP_Widget
 */

class OD_Post_Sidebar_Widget extends WP_Widget
{

	public function __construct()
	{
		parent::__construct('od-latest-posts', 'Recent Posts Sidebar', array(
			'description'	=> 'Latest Blog Post Widget by Ordainit'
		));
	}


	public function widget($args, $instance)
	{
		extract($args);
		extract($instance);

		echo $before_widget;
		if ($instance['title']):
			echo $before_title; ?>
			<?php echo apply_filters('widget_title', $instance['title']); ?>
			<?php echo $after_title; ?>
		<?php endif; ?>
		<?php
		$q = new WP_Query(array(
			'post_type'     => 'post',
			'posts_per_page' => ($instance['count']) ? $instance['count'] : '3',
			'order'			=> ($instance['posts_order']) ? $instance['posts_order'] : 'DESC',
			'orderby' => 'date'
		));

		if ($q->have_posts()):
			while ($q->have_posts()): $q->the_post();
		?>
				<div class="rc-post d-flex align-items-center">
					<?php if (has_post_thumbnail()) : ?>
						<div class="rc-post-thumb mr-20">
							<a href="blog-details-right-sidebar.html">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
							</a>
						</div>
					<?php endif; ?>
					<div class="rc-post-content">
						<div class="rc-meta">
							<span>
								<svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12.5 2H11V0.375C11 0.1875 10.8125 0 10.625 0H10.375C10.1562 0 10 0.1875 10 0.375V2H4V0.375C4 0.1875 3.8125 0 3.625 0H3.375C3.15625 0 3 0.1875 3 0.375V2H1.5C0.65625 2 0 2.6875 0 3.5V14.5C0 15.3438 0.65625 16 1.5 16H12.5C13.3125 16 14 15.3438 14 14.5V3.5C14 2.6875 13.3125 2 12.5 2ZM1.5 3H12.5C12.75 3 13 3.25 13 3.5V5H1V3.5C1 3.25 1.21875 3 1.5 3ZM12.5 15H1.5C1.21875 15 1 14.7812 1 14.5V6H13V14.5C13 14.7812 12.75 15 12.5 15ZM4.625 10C4.8125 10 5 9.84375 5 9.625V8.375C5 8.1875 4.8125 8 4.625 8H3.375C3.15625 8 3 8.1875 3 8.375V9.625C3 9.84375 3.15625 10 3.375 10H4.625ZM7.625 10C7.8125 10 8 9.84375 8 9.625V8.375C8 8.1875 7.8125 8 7.625 8H6.375C6.15625 8 6 8.1875 6 8.375V9.625C6 9.84375 6.15625 10 6.375 10H7.625ZM10.625 10C10.8125 10 11 9.84375 11 9.625V8.375C11 8.1875 10.8125 8 10.625 8H9.375C9.15625 8 9 8.1875 9 8.375V9.625C9 9.84375 9.15625 10 9.375 10H10.625ZM7.625 13C7.8125 13 8 12.8438 8 12.625V11.375C8 11.1875 7.8125 11 7.625 11H6.375C6.15625 11 6 11.1875 6 11.375V12.625C6 12.8438 6.15625 13 6.375 13H7.625ZM4.625 13C4.8125 13 5 12.8438 5 12.625V11.375C5 11.1875 4.8125 11 4.625 11H3.375C3.15625 11 3 11.1875 3 11.375V12.625C3 12.8438 3.15625 13 3.375 13H4.625ZM10.625 13C10.8125 13 11 12.8438 11 12.625V11.375C11 11.1875 10.8125 11 10.625 11H9.375C9.15625 11 9 11.1875 9 11.375V12.625C9 12.8438 9.15625 13 9.375 13H10.625Z" fill="#DC1D1C"></path>
								</svg><?php echo get_the_date('j F Y'); ?>
							</span>
							<h3 class="rc-post-title">
								<a class="border-line-black" href="<?php the_permalink(); ?>"><?php print wp_trim_words(get_the_title(), 6, ''); ?></a>
							</h3>
						</div>
					</div>
				</div>

		



		<?php endwhile;
		endif;
		wp_reset_query(); ?>




		<?php echo $after_widget; ?>

	<?php
	}



	public function form($instance)
	{
		$title = ! empty($instance['title']) ? $instance['title'] : '';
		$count = ! empty($instance['count']) ? $instance['count'] : esc_html__('3', 'ordainit-toolkit');
		$posts_order = ! empty($instance['posts_order']) ? $instance['posts_order'] : esc_html__('DESC', 'ordainit-toolkit');
		$choose_style = ! empty($instance['choose_style']) ? $instance['choose_style'] : esc_html__('style_1', 'ordainit-toolkit');
	?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">Title</label>
			<input type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo esc_attr($title); ?>" class="widefat">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('count'); ?>">How many posts you want to show ?</label>
			<input type="number" name="<?php echo $this->get_field_name('count'); ?>" id="<?php echo $this->get_field_id('count'); ?>" value="<?php echo esc_attr($count); ?>" class="widefat">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('posts_order'); ?>">Posts Order</label>
			<select name="<?php echo $this->get_field_name('posts_order'); ?>" id="<?php echo $this->get_field_id('posts_order'); ?>" class="widefat">
				<option value="" disabled="disabled">Select Post Order</option>
				<option value="ASC" <?php if ($posts_order === 'ASC') {
										echo 'selected="selected"';
									} ?>>ASC</option>
				<option value="DESC" <?php if ($posts_order === 'DESC') {
											echo 'selected="selected"';
										} ?>>DESC</option>
			</select>
		</p>

<?php }
}

add_action('widgets_init', function () {
	register_widget('OD_Post_Sidebar_Widget');
});
