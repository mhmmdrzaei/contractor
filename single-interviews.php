<?php get_header(); ?>


<div class="main">
  <div class="container">

  <div class="content">
 <?php $interviewsQuery = new WP_Query(array(
          'post_per_page' => 1, // if you want all its -1
          'post_type' => 'interviews'
      )); ?>
      

      <?php if($interviewsQuery-> have_posts()):?>
          <?php while($interviewsQuery->have_posts()): ?>
            <?php $interviewsQuery->the_post(); ?>
              <h2><?php the_title(); ?></h2>
              <?php the_content(); ?>
              
            <div class="interviews">
            
                <div class="vimeo">
                  <iframe src="https://player.vimeo.com/video/<?php the_sub_field('vimeo_link_interview'); ?>" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>

                <a href="<?php get_field('artists_page_interview') ?>"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Artist's Page </a>
  
                
             
                <?php endwhile;//end of Artist Name loop ?>
                
              </div>
               

                    <?php wp_reset_postdata(); ?> 
                    <!-- this will end the and reset and go back to normal so you can go back to normal to your page -->
                <?php endif; ?>



          

    

    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main-->


<?php get_footer(); ?>

<?php get_footer(); ?>