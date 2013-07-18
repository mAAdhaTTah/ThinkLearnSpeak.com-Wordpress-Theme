<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="main-wrapper">
		<div id="content-area">
			<div class="left-column">
				<?php /* The loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php get_template_part( 'content', get_post_format() ); ?>
					<?php get_template_part( 'subscribe'); ?>

					<?php comments_template(); ?>
					<?php twentythirteen_post_nav(); ?>
				<?php endwhile; ?>
			</div>
			<div class="right-column">
				<?php dynamic_sidebar( 'sidebar-4' ); ?>
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>