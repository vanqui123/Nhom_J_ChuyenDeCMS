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

<article id="post-<?php the_ID(); ?>" class='p-3'>
	<div class="d-flex">
		<div class="img-ctn">
			<img src="<?= get_the_post_thumbnail_url() ?>" class="img-fluid" alt="">
		</div>
		<div class="pr-2 pl-2">
			<h2 class="content-date-day m-0"><?php echo get_the_date('d', $post_id); ?></h2>
			<p class="content-month m-0" style="white-space: nowrap;">
				THÁNG
				<?php echo
				get_the_date('m', $post_id); ?>
			</p>
		</div>
		<div class="pl-4 border-left">
			<div class="post-title entry-title heading-size-1 m-0">
				<h2><a class="content-title" style="color: #428bca;" href="<?= esc_url(get_permalink()) ?>"><?= get_the_title() ?></a></h2>
			</div>
			<div class="" style="font-size: 18px;">
				<?php 
				if(strlen(get_the_content()) > 35 )
				{
					$titlep = wp_trim_words(get_the_content(), 35, ' 	<a href="'.get_the_permalink().'">[...]</a>');
				}
				else
				{
					$titlep = get_the_content();   
				}
				echo $titlep;
				?>
			</div>
		</div>
	</div>
</article>