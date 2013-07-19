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
	/*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
	add_theme_support( 'post-headers' );
	set_post_thumbnail_size( 600, 250, true );
}
add_action( 'after_setup_theme', 'thinklearnspeak_setup' );

function exclude_widget_categories($args) {
	$exclude = "201,175,68"; // The IDs of the excluding categories
	$args["exclude"] = $exclude;
	return $args;
}

add_filter("widget_categories_args","exclude_widget_categories");


add_action( 'after_setup_theme', 'thinklearnspeak_formats', 11 );
function thinklearnspeak_formats(){
     add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'image', 'quote', 'video'
		 ) );
}

?>