<?php get_header(); ?>

			<div id="main">

<?php the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( 'before=<div class="page-link">' . __( 'Pages:', 'twentyten' ) . '&after=</div>'); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-<?php the_ID(); ?> -->

				<?php comments_template( '', true ); ?>

			</div><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>