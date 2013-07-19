<?php  
    /* Template Name: ThinkLearnSpeak Home Page */  
    get_header();  
?>

<div id="main-wrapper">
	<div id="featured-area">
		<div class="metaslider-wrap">
			<?php echo do_shortcode("[metaslider id=778]"); ?>
		</div>
		<div class="welcome">
			<?php dynamic_sidebar( 'sidebar-4' ); ?>
		</div>
	</div>
	<div id="content-area">
		<div class="left-column">
		<h1 class="homepagetitle">Recent Long Writes</h1>
			<?php query_posts('cat=201&posts_per_page=5');?>
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php /* The loop */ ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
			<?php get_template_part( 'subscribe'); ?>
		</div>
		<div class="right-column">
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</div>
	</div>
</div>	

<?php get_footer(); ?>