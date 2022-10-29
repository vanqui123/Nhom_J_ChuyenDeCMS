<?php

/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$twentytwenty_unique_id = twentytwenty_unique_id('search-form-');

$twentytwenty_aria_label = !empty($args['aria_label']) ? 'aria-label="' . esc_attr($args['aria_label']) . '"' : '';
// Backward compatibility, in case a child theme template uses a `label` argument.
if (empty($twentytwenty_aria_label) && !empty($args['label'])) {
	$twentytwenty_aria_label = 'aria-label="' . esc_attr($args['label']) . '"';
}
?>
<form role="search" <?php echo $twentytwenty_aria_label; //  
					?> method="get" class="search-form form-control rounded border d-flex align-items-center" action="<?php echo esc_url(home_url('/')); ?>">
	<i class="fa fa-search" style="font-size: 26px;"></i>
	<label class="w-100" for="<?php echo esc_attr($twentytwenty_unique_id); ?>">
		<span class="screen-reader-text"><?php _e('Search for:', 'twentytwenty'); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations 
											?></span>
		<input type="search" id="<?php echo esc_attr($twentytwenty_unique_id); ?>" class="search-field border-0 w-100" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'twentytwenty'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<button type="submit" class="btn btn-success p-0 py-2 px-3" style="font-size: 26px;" value="<?php echo esc_attr_x('Search', 'submit button', 'twentytwenty'); ?>">Search</button>
</form>