<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">
  <div class="collectiveMembers">
     <h3>Festival Eyes and Ears</h3>
      <?php while( has_sub_fields('festival_eyes_and_ears', 'option') ): ?>
                    <p><?php the_sub_field('contributor_bio'); ?></p>
             
      <?php endwhile;//end of Collective Members loop ?>
    </div>

    <div class="content">
    	<h2>Festival Blog</h2>
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->

<?php get_footer(); ?>
  </div> <!-- /.container -->
</div> <!-- /.main -->
