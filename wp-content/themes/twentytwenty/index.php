<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();

$has_sidebar_2 = is_active_sidebar('sidebar-2');
$has_sidebar_3 = is_active_sidebar('sidebar-3');
?>

<main id="site-content">
	
	<!-- <div class="col1">
		<?php if ($has_sidebar_2) { ?>
		<div class="footer-widgets-wrapper">
			<?php if ($has_sidebar_2) { ?>
				<div class="footer-widgets column-one grid-item">
					<?php dynamic_sidebar('sidebar-2') ?>
				</div>
			<?php } ?>
		</div>
		<?php } ?>
	</div>

	<div class="col2">
		<?php if ($has_sidebar_3) { ?>
		<div class="footer-widgets-wrapper">
			<?php if ($has_sidebar_3) { ?>
				<div class="footer-widgets column-one grid-item">
					<?php dynamic_sidebar('sidebar-3') ?>
				</div>
			<?php } ?>
		</div>
		<?php } ?>
	</div> -->

	<?php

	$archive_title    = '';
	$archive_subtitle = '';

	if (is_search()) {
		global $wp_query;

		$archive_title = sprintf(
			'%1$s %2$s',
			'<span class="color-accent">' . __('Search:', 'twentytwenty') . '</span>',
			'&ldquo;' . get_search_query() . '&rdquo;'
		);

		if ($wp_query->found_posts) {
			$archive_subtitle = sprintf(
				/* translators: %s: Number of search results. */
				_n(
					'We found %s result for your search.',
					'We found %s results for your search.',
					$wp_query->found_posts,
					'twentytwenty'
				),
				number_format_i18n($wp_query->found_posts)
			);
		} else {
			$archive_subtitle = __('We could not find any results for your search. You can give it another try through the search form below.', 'twentytwenty');
		}
	} elseif (is_archive() && !have_posts()) {
		$archive_title = __('Nothing Found', 'twentytwenty');
	} elseif (!is_home()) {
		$archive_title    = get_the_archive_title();
		$archive_subtitle = get_the_archive_description();
	}

	if ($archive_title || $archive_subtitle) {
	?>

		<header class="archive-header has-text-align-center header-footer-group">

			<div class="archive-header-inner section-inner medium">

				<?php if ($archive_title) { ?>
					<h1 class="archive-title"><?php echo wp_kses_post($archive_title); ?></h1>
				<?php } ?>

				<?php if ($archive_subtitle) { ?>
					<div class="archive-subtitle section-inner thin max-percentage intro-text"><?php echo wp_kses_post(wpautop($archive_subtitle)); ?></div>
				<?php } ?>

			</div><!-- .archive-header-inner -->

		</header><!-- .archive-header -->

	<?php
	}

	if (is_search()  && have_posts()) {
		$i = 0;
	?>
		
			<div style="padding: 0 30px; max-width: 1222px; margin: 0 auto;">
				<?php
				while (have_posts()) {
					$i++;
					if ($i > 1) {
						echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
					}
					the_post();
					get_template_part('template-parts/postman_search', get_post_type());
				}
				?>
			</div>
		
				<?php
			} 
				elseif (have_posts()) {
				$i = 0;
				?>

					<div class="d-flex">
						<div class="archives_group">
							<h2>Archive</h2>
							<div class="crossedbg"></div>
							<ul>
								<?php $archive = wp_get_archives(); ?>
							</ul>
						</div>
						<div class="">
							<?php
							while (have_posts()) {
								$i++;
								if ($i > 1) {
									echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
								}
								the_post();
								get_template_part('template-parts/postman', get_post_type());
							}
							?>
						</div>
						<div class="archives_group">

							<?php $recent_comments = get_comments(array(
								'number'      => 5, // number of comments to retrieve.
								'status'      => 'approve', // we only want approved comments.
								'post_status' => 'publish' // limit to published comments.
							));


							if ($recent_comments) {
							?>
								<div class="archives_group">
									<h2>Comment</h2>
									<div class="crossedbg"></div>
									<ul>
										<?php
										foreach ((array) $recent_comments as $comment) {

											// sample output - do something useful here

											echo '
			<li>
			<a href="' . esc_url(get_comment_link($comment)) . '">' . get_the_title($comment->comment_post_ID) . '</a>
			</li>
			';
										}
										?>
									</ul>
								<?php
							}
								?>
								</div>

							<?php
						} elseif (is_search()) {
							?>

								<div class="d-flex w-100 justify-content-center align-items-center" style="background-color: #f5efe0; height: 200px;">

									<?php
									get_search_form(
										array(
											'aria_label' => __('search again', 'twentytwenty'),
										)
									);
									?>
								</div><!-- .no-search-results -->

							<?php
						}

							?>
							<?php get_template_part('template-parts/pagination'); ?>
							
</main><!-- #site-content -->

<?php get_template_part('template-parts/footer-menus-widgets'); ?>

<?php
get_footer();
