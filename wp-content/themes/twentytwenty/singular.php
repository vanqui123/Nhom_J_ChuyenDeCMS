<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
$has_sidebar_1 = is_active_sidebar( 'sidebar-1' );
$has_sidebar_3 = is_active_sidebar( 'sidebar-3' );
?>
<div class="d-flex">
<?php if ( $has_sidebar_3 ) { ?>
	<div class="footer-widgets column-three grid-item">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div>

<?php } ?>
<main id="site-content">

	
	
				
<?php

if ( have_posts() ) {

	while ( have_posts() ) {
		the_post();

		get_template_part( 'template-parts/content', get_post_type() );
	}
}

?>

</main><!-- #site-content -->	

<?php if ( $has_sidebar_1 ) { ?>
<div class="footer-widgets column-one grid-item">
<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>	
<?php } ?>

</div>


<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
