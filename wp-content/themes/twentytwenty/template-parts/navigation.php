<?php

/**
 * Displays the next and previous post navigation in single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$next_post = get_next_post();
$prev_post = get_previous_post();

if ($next_post || $prev_post) {

	$pagination_classes = '';

	if (!$next_post) {
		$pagination_classes = ' only-one only-prev';
	} elseif (!$prev_post) {
		$pagination_classes = ' only-one only-next';
	}

?>

	<nav class="pagination-single section-inner<?php echo esc_attr($pagination_classes); ?>" aria-label="<?php esc_attr_e('Post', 'twentytwenty'); ?>">

		<hr class="styled-separator is-style-wide" aria-hidden="true" />

		<div class="pagination-single-inner">
			

			<?php
			if ($prev_post) {
			?>

				<a class="previous-post" style="margin-left: 40px ;" href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">

					<div class="arrow">
						<div class="arrow-headlinesdm">
							<div class="arrow-headlinesday"><?php echo get_the_date('d', $post_id); ?></div>
							<div class="arrow-headlinesmonth"><?php echo get_the_date('m', $post_id); ?></div>
						</div>
						<div class="arrow-headlinesyear"><?php echo get_the_date('y', $post_id); ?></div>
						<span class="title" style="margin-left: 167px;"><span class="title-inner"><?php echo wp_kses_post(get_the_title($prev_post->ID)); ?></span></span>

					</div>

				</a>

			<?php
			}

			if ($next_post) {
			?>

<a class="previous-post" style="margin-left: 40px ;" href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">

<div class="arrow">
	<div class="arrow-headlinesdm">
		<div class="arrow-headlinesday"><?php echo get_the_date('d', $post_id); ?></div>
		<div class="arrow-headlinesmonth"><?php echo get_the_date('m', $post_id); ?></div>
	</div>
	<div class="arrow-headlinesyear"><?php echo get_the_date('y', $post_id); ?></div>
	<span class="title" style="margin-left: 167px;"><span class="title-inner"><?php echo wp_kses_post(get_the_title($next_post->ID)); ?></span></span>

</div>

</a>
			<?php
			}
			?>

		</div><!-- .pagination-single-inner -->

		<hr class="styled-separator is-style-wide" aria-hidden="true" />

	</nav><!-- .pagination-single -->

<?php
}
