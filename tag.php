<?php get_header(); ?>
	
	<div class="main">
	  <div class="container">
	
	    <div class="contentTag">
	      <div class="tagTitle"><h3>Blogposts: <?php single_tag_title(); ?></h3></div>
			<div class="tagResults">
			<?php get_template_part( 'loop', 'tag' ); ?></div>	    

			</div> <!-- /.content -->
	
	  </div><!-- /.container -->
	</div><!-- /.main -->
<?php get_footer(); ?>