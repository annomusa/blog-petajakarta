<?php
/**
 * The template for displaying all single posts.
 *
 * @package Lola
 */
get_header(); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'single-post-content', get_post_format() ); ?>
<div class="post-tags">Post <?php the_tags(); ?></div>
				<nav class="nav-single">

					<h3 class="assistive-text"><?php _e( 'Post navigation', 'lola' ); ?></h3>

					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'lola' ) . '</span> %title' ); ?></span>

				<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'lola' ) . '</span>' ); ?></span>

				</nav><!-- .nav-single -->

              <div id="authorarea">

<?php echo get_avatar( get_the_author_meta( 'user_email' ), 70 ); ?><div class="author-full-info">

<h3><?php the_author_link(); ?></h3>

<div class="author-info">

<?php the_author_meta( 'description' ); ?>

<a class="readon" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"> View all posts by <?php get_the_author(); ?> <span class="meta-nav">&rarr;</span></a>

</div></div>

</div>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>