<?php
/**
 * @package Lola
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
    <div class="featured-post">
			<?php _e( 'Featured post', 'lola' ); ?>
		</div>
		<?php endif; ?>
    <?php if ( is_single() ) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php else : ?>
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
			<?php endif; // is_single() ?>
    <footer class="entry-meta">
        <span>By <?php the_author_link(); ?> | <?php get_option( 'date_format' ); ?> | <?php the_category(', '); ?> | <?php comments_number( 'No Comments', 'One Comment', '% Comments' ); ?> </span>
<div class="should-be-hidden"><?php lola_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'lola' ), '<span class="edit-link">', '</span>' ); ?>
			
		</footer><!-- .entry-meta -->
		<header class="entry-header">
			<?php if ( ! post_password_required() && ! is_attachment() ) :
				the_post_thumbnail();
			endif; ?>
			<?php if ( comments_open() ) : ?>
				<div class="comments-link">
					<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'lola' ) . '</span>', __( '1 Reply', 'lola' ), __( '% Replies', 'lola' ) ); ?>
				</div><!-- .comments-link -->
			<?php endif; // comments_open() ?>
		</header><!-- .entry-header -->
		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'lola' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'lola' ), 'after' => '</div>' ) ); ?>

		</div><!-- .entry-content -->
		<?php endif; ?>
	</article><!-- #post -->