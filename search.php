<?php get_header(); ?>
<div class="main">
	<div class="container">

		<div class="contentSearch">
			<?php if ( have_posts() ) : ?>

				<div class="searchTitle">
					<h3>Search Results for: <?php echo get_search_query(); ?></h3>
				</div>

				<div class="searchResults"><?php get_template_part( 'loop', 'search' ); ?></div>

			<?php else : ?>

				<h2>Nothing Found</h2>
				<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>

			<?php endif; ?>
		</div> <!-- /.content -->

	</div><!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
