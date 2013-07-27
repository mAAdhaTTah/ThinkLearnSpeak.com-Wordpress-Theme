<?php
/**
 * Register the homepage widget.
 *
 */
function thinklearnspeak_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Side Homepage Widget Area', 'thinklearnspeak' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears on the homepage of the site', 'thinklearnspeak' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Top Homepage Widget Area', 'thinklearnspeak' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Appears on the homepage of the site on top by metaslider', 'thinklearnspeak' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	/* These are the subscribe bar widgets. */
	register_sidebar( array(
		'name'          => __( 'Subscribe Bar Widget 1', 'thinklearnspeak' ),
		'id'            => 'sidebar-5',
		'description'   => __( 'First subscribe bar widget', 'thinklearnspeak' ),
		'before_title'  => '<h3 class="subscribe-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Subscribe Bar Widget 2', 'thinklearnspeak' ),
		'id'            => 'sidebar-6',
		'description'   => __( 'Second subscribe bar widget', 'thinklearnspeak' ),
		'before_title'  => '<h3 class="subscribe-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Subscribe Bar Widget 3', 'thinklearnspeak' ),
		'id'            => 'sidebar-7',
		'description'   => __( 'Third subscribe bar widget', 'thinklearnspeak' ),
		'before_title'  => '<h3 class="subscribe-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Subscribe Bar Widget 4', 'thinklearnspeak' ),
		'id'            => 'sidebar-8',
		'description'   => __( 'Fourth subscribe bar widget', 'thinklearnspeak' ),
		'before_title'  => '<h3 class="subscribe-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'thinklearnspeak_widgets_init' );

function thinklearnspeak_setup() {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 600, 250, true ); // Normal post thumbnails
}
add_action( 'after_setup_theme', 'thinklearnspeak_setup', 11 );

if ( ! function_exists( 'twentythirteen_entry_meta' ) ) :
/**
 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own twentythirteen_entry_meta() to override in a child theme.
 *
 * @since Twenty Thirteen 1.0
 *
 * @return void
 */
function thinklearnspeak_entry_meta() {
	if ( is_sticky() && is_home() && ! is_paged() )
		echo '<p class="featured-post">' . __( 'Sticky', 'thinklearnspeak' ) . '</p>';

	if ( ! has_post_format( 'link' ) && 'post' == get_post_type() )
		twentythirteen_entry_date();

	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( __( ', ', 'thinklearnspeak' ) );
	if ( $categories_list ) {
		echo '<p class="categories-links">' . $categories_list . '</p>';
	}
}
endif;

/**
 * Remove standard image sizes so that these sizes are not
 * created during the Media Upload process
 *
 * Tested with WP 3.2.1
 *
 * Hooked to intermediate_image_sizes_advanced filter
 * See wp_generate_attachment_metadata( $attachment_id, $file ) in wp-admin/includes/image.php
 *
 * @param $sizes, array of default and added image sizes
 * @return $sizes, modified array of image sizes
 * @author Ade Walker http://www.studiograsshopper.ch
 */

function sgr_filter_image_sizes( $sizes) {

	unset( $sizes['medium']);
	unset( $sizes['large']);
	
	return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'sgr_filter_image_sizes');

function exclude_widget_categories($args) {
	$exclude = "201,175,68"; // The IDs of the excluding categories
	$args["exclude"] = $exclude;
	return $args;
}

add_filter('widget_categories_args', 'exclude_widget_categories' );


add_action( 'after_setup_theme', 'thinklearnspeak_formats', 11 );
function thinklearnspeak_formats(){
     add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'image', 'quote', 'video'
		 ) );
}

?>