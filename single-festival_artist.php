<?php get_header(); ?>


<div class="main">
  <div class="container">

  <div class="content">
 <?php $festivalArtistQuery = new WP_Query(array(
          'post_per_page' => -1, // if you want all its -1
          'post_type' => 'festival_artist'

      )); ?>
      

      <div class="artistComplete">
        <?php if($festivalArtistQuery-> have_posts()):?>
            <?php while($festivalArtistQuery->have_posts()): ?>
              <?php $festivalArtistQuery->the_post(); ?>
              <?php endwhile; ?>
                      <?php wp_reset_postdata(); ?> 
                      <!-- this will end the and reset and go back to normal so you can go back to normal to your page -->
                  <?php endif; ?>
        
        
        
                <div class="artistTitle">
                  <h2><?php the_title(); ?> </h2>
                </div>
                
              <div class="artistMainMain">
                
                   <?php while( has_sub_fields('visual_work') ): ?>
                  <div class="artistArtistArtist toggle">
                    <div class="boxToggleHeader">
                         <h2><?php the_sub_field('year_of_programming_artist_artist'); ?> Programming</h2>
                    </div>
                  
                    <?php $image = get_sub_field('artist_picture') ?> 
                    <img src="<?php echo $image['sizes']['large'] ?>" alt="">
                    <p class="artistCaption"><?php the_sub_field('artist_caption'); ?></p>

                    <div class="schedule">
                      <?php while( has_sub_fields('performance_schedule') ): ?>
                        <div class="performanceDateTime">
                          <?php the_sub_field('performance_date_and_time_repeater'); ?>,  <?php the_sub_field('performance_time_repeater'); ?>
                        </div>
                        <div class="perfromanceName">
                          <?php the_sub_field('performance_title'); ?>
                        </div>
                        <div class="performanceVenue">
                          <?php the_sub_field('venue'); ?>
                        </div>
                    <?php endwhile;//end of schedule loop ?>
                    </div>  
                    
                        
                    <div class="artistInfo">
                      <?php the_sub_field('artist_information'); ?>
                    </div>
                    <p><?php the_sub_field('country_of_origin'); ?></p>
                    <p>
                      <a href="<?php the_sub_field('artists_website_artist'); ?>"><?php the_sub_field('artists_website_artist'); ?></a>
                    </p>


                    <div class="Vimeo">
                      <?php while( has_sub_fields('vimeo') ): ?>
                        <?php the_sub_field('video_styling'); ?>
                        <div class="embed-container">
                          <?php the_sub_field('vimeo_embedded_link'); ?>
                        </div>
                        <?php endwhile;//end of vimeo ?>

                    </div>

                    </div>
                    <?php endwhile;//end of Artist Name loop ?>
                    
                 
                    
                  
              </div> <!-- artist Main -->
      </div> <!-- artist complete div -->

  

          

    

    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main-->


<?php get_footer(); ?>

<?php get_footer(); ?>