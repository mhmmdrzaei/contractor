<?php get_header(); ?>


<div class="main">
  <div class="container">

  <div class="content">
 <?php $festivalArtistQuery = new WP_Query(array(
          'post_per_page' => 1, // if you want all its -1
          'post_type' => 'festival_artist'

      )); ?>
      

      <?php if($festivalArtistQuery-> have_posts()):?>
          <?php while($festivalArtistQuery->have_posts()): ?>
            <?php $festivalArtistQuery->the_post(); ?>
            <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?> 
                    <!-- this will end the and reset and go back to normal so you can go back to normal to your page -->
                <?php endif; ?>



              <h3><?php the_title(); ?> </h3>
              
            <div class="visualWork">
               <?php while( has_sub_fields('visual_work') ): ?>
                    <h2><?php the_sub_field('year_of_programming'); ?></h2>
                    <?php $image = get_sub_field('artist_picture') ?> 
            <img src="<?php echo $image['sizes']['large'] ?>" alt="">
                <p class="artistCaption"><?php the_sub_field('artist_caption'); ?></p>
                <p><?php the_sub_field('performance_date_and_time'); ?></p>
                <p><?php the_sub_field('performance_venue'); ?></p>

                <div class="artistInfo">
                  <?php the_sub_field('artist_information'); ?>
                </div>
                <p><?php the_sub_field('country_of_origin'); ?></p>
                <a href="<?php the_sub_field('artists_website'); ?>"><?php the_sub_field('artists_website'); ?></a>
                
                <div class="vimeo">
                  <iframe src="https://player.vimeo.com/video/<?php the_sub_field('vimeo_link'); ?>" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
             
                <?php endwhile;//end of Artist Name loop ?>
                
              </div>
              <div class="content">
                <?php the_content(); ?>
                
              </div>


          

    

    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main-->


<?php get_footer(); ?>

<?php get_footer(); ?>