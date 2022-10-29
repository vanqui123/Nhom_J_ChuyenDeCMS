	<?php

	/**
	 * The default template for displaying content
	 *
	 * Used for both singular and index.
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package WordPress
	 * @subpackage Twenty_Twenty
	 * @since Twenty Twenty 1.0
	 */

	?>

	<article <?php post_class('pb-4');?> id="post-<?php the_ID();?>">


		<div class="main-content">
			<div >
				<?php if (!is_single()) {?>
					<div class="d-flex" style="width: 249px;">
					<img src="https://product.hstatic.net/200000056344/product/clay_7d68fe621f7a410bb13aa4f48a0a21ca_large_014da905eb344ee18d2e18f551b94512_master.png" width="180" class="img-fluid" alt="">
					<!-- <div class="" style="flex-shrink: 0;">
						<h2 class="content-date-day"><?php echo get_the_date('d', $post_id); ?>
						</h2>
						<p class="content-month">
							THÁNG
							<?php echo
		get_the_date('m', $post_id); ?>
						</p>
					</div> -->
				</div>
					<?php }?>
			</div>
			<div class=" pl-3">
				<header class="<?php echo esc_attr($entry_header_classes); ?>">
					<div class="entry-header-inner section-inner medium">
						<?php
	/**
	 * Allow child themes and plugins to filter the display of the categories in the entry header.
	 *
	 * @since Twenty Twenty 1.0
	 *
	 * @param bool Whether to show the categories in header. Default true.
	 */
	$show_categories = apply_filters('twentytwenty_show_categories_in_entry_header', true);

	if (true === $show_categories && has_category()) {
		?>

							<!-- <div class="entry-categories">
					<span class="screen-reader-text"><?php //_e( 'Categories', 'twentytwenty' );
		?></span>
					<div class="entry-categories-inner">
						<?php //the_category( ' ' );
		?>
					</div>
				</div> -->
				<div class='row border-bottom border-gray '>

				<div class='col-10'><?php
	}
	if (is_singular()) {

		the_title('<h1 class="entry-title pb-5" class="detail-name" style="margin-left:-30px">', '</h1> ');
		?></div>
				<div class=''>
					<div class="d-flex align-items-center justify-content-center bg-tag">
						<div class="" style="">
							<div class="" style="font-size: 16px;">24</div>
							<hr class="m-0">
							<div class="" style="font-size: 16px;">06</div>
						</div>
						<div class="" style="font-size: 16px;">'18</div>
					</div>
				</div>
						<?php
	} else {
		the_title('<h2 class="entry-title heading-size-1 "><a class="content-title" style="color: #428bca;" href="' . esc_url(get_permalink()) . '">', '</a></h2>');
	}

	$intro_text_width = '';

	if (is_singular()) {
		$intro_text_width = ' small';
	} else {
		$intro_text_width = ' thin';
	}

	if (has_excerpt() && is_singular()) {
		?>

							<div class="intro-text section-inner max-percentage<?php echo $intro_text_width; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output
		?>">
								<?php the_excerpt();?>
							</div>

						<?php
	}

	// Default to displaying the post meta.
	twentytwenty_the_post_meta(get_the_ID(), 'single-top');
	?>

					</div><!-- .entry-header-inner -->

				</header><!-- .entry-header -->


				<div class="post-inner <?php echo is_page_template('templates/template-full-width.php') ? '' : 'thin'; ?> ">

					<div class="entry-content">
						<span> <?php
	if (is_search() || !is_singular() && 'summary' === get_theme_mod('blog_content', 'full')) {
		the_excerpt();
	} else {
		$content = get_the_content();
		echo $content;

		// the_content( __( 'Continue reading', 'twentytwenty' ) );
	}
	?></span>


					</div><!-- .entry-content -->

				</div><!-- .post-inner -->


			</div>

		</div>
		<div>

		</div>
		<?php

	/*
	* Output comments wrapper if it's a post, or if comments are open,
	* or if there's a comment number – and check for password.
	*/
	if ((is_single() || is_page()) && (comments_open() || get_comments_number()) && !post_password_required()) {
		?>

			<div class="comments-wrapper section-inner">

				<?php comments_template();?>

			</div><!-- .comments-wrapper -->

		<?php
	}
	?>

	</article>
