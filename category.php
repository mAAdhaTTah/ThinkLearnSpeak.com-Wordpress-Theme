<?php
/**
 * The template for displaying Category pages.
 */

get_header(); ?>

<div id="main-wrapper">
	<div id="content-area">
		<?php if ( have_posts() ) : ?>
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( __( '%s', 'twentythirteen' ), single_cat_title( '', false ) ); ?></h1>

				<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
				<?php endif; ?>
			</header><!-- .archive-header -->
		<div class="left-column">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>
			<?php get_template_part( 'subscribe'); ?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
		</div><!-- #content -->
		<div class="right-column">
			<?php dynamic_sidebar( 'sidebar-4' ); ?>
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</div>
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>