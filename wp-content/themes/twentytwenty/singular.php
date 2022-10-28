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
?>
<div class="d-flex">
    <div class="col-2" style="margin-top:100px">
	<ul style="list-style: none">
    <h2>Categories</h2>
    <div class="crossedbg"></div>
<?php  $categories = get_categories();
foreach($categories as $category) {
   echo '<li class="categories-content"><a class="categories-text" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
}?>

</ul>
</div>
<main id="site-content col-8">		
<?php

if ( have_posts() ) {

	while ( have_posts() ) {
		the_post();

		get_template_part( 'template-parts/content', get_post_type() );
	}
}

?>

</main>
<!-- #site-content -->	
<div class="col-2" style="margin-top:100px">
<h2>Recent Post</h2>
    <div class="crossedbg"></div>
<ul style="list-style: none" class="recent_post">

<?php
    // $args = array( 'numberposts' => '5' );
    $recent_posts = wp_get_recent_posts();
    foreach( $recent_posts as $recent ){
        echo '<li class="recent-post-content"><a class="categories-text" href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
    }
?>
</ul>
</div>
</div>


<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
