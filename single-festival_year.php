<?php get_header();  ?>

<div class="main">
  <div class="container">

  <div class="content">


  <?php $dreamBeanQuery = new WP_Query(array(
          // 'post_per_page' => 1,// if you want all its -1
          'post_type' => array( 'festival_year' ),
          'post_per_page' => array(1 )
      )); ?> 
      

      <?php if($dreamBeanQuery-> have_posts()):?>
          <?php while($dreamBeanQuery->have_posts()): ?> 
            <?php $dreamBeanQuery->the_post(); ?>
             <?php $dreamBeanQuery->the_content(); ?> 
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?> 
                    <!-- this will end the and reset and go back to normal so you can go back to normal to your page -->
          <?php endif; ?>
          <div class="yearComplete">
                <div class="yearSide">
               <h3><?php the_title(); ?> </h3>
                 <div class="contentWelcome">
                   <h2>Welcome</h2>
                   <?php the_content(); ?>
                 </div>
                 <div class="poster">
                   <h2>Poster</h2>
                     <?php 
                   
                     $image = get_field('poster');
                   
                     if( !empty($image) ): ?>
                   
                       <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                   
                     <?php endif; ?>
                   </div>
               </div>
               <div class="yearMain">
                 <?php if( have_rows('gallery_slider') ) : ?>
                     <ul class="bxslider">
                         <?php while( have_rows('gallery_slider') ) : the_row(); ?>
                             <li>
                                 <?php $image = get_sub_field('image_slider_year');
                                     if( !empty($image) ): ?>
                                         <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                     <?php endif; ?>
                             </li>
                         <?php endwhile; ?>
                     </ul><!-- .bxslider -->
                 <?php endif;  // end gallery repeater field?>
                 
                 <button><div class="artists boxToggle">
                    <div class="boxToggleHeader">
                      <h2><?php the_title(); ?> Artists</h2>
                      <div class="plusSign">
                          <div class="line1"></div>
                         <div class="line2"></div>
                      </div>
                    </div>
                     <div class="artistMain">
                     <?php while( has_sub_fields('artists_festival_year') ): ?>
                       <a href="<?php the_sub_field('artist_page_year_link'); ?>"> <?php the_sub_field('artist_name_year_select'); ?></a> // 
                                
                     <?php endwhile;//end of Artist Name loop ?>
                     </div> 
                    </div></button>
                  <button><div class="schedule boxToggle">
                  <div class="scheduleHead">
                    <div class="boxToggleHeader">
                      <h2><?php the_title(); ?> Festival Schedule</h2>
                        <div class="plusSign">
                            <div class="line1"></div>
                           <div class="line2"></div>
                          </div>
                        </div>

                        
                      <div class="scheduleMain">
                        <?php while( has_sub_fields('schedule_year') ): ?>
                          <div class="scheduleDate">
                            <?php the_sub_field('schedule_date_'); ?>
                          </div>
                          <?php while( has_sub_fields('schedule_details') ): ?>
                            <div class="artistNameSchedule">
                              <a href="<?php the_sub_field('artist_name_schedule_year'); ?>"> <?php the_sub_field('artist_name_schedue'); ?></a>
                            </div>
                            <div class="schedulePerformanceNam">
                            <?php the_sub_field('performance_name_schedule'); ?>
                            </div>
                            <div class="scheduleTime">
                            <?php the_sub_field('performance_time'); ?>
                            </div>
                             <div class="scheduleVenue">
                            <?php the_sub_field('performance_venue'); ?>
                            </div>




                                
                     <?php endwhile;//end of Schedule Details loop ?>
                     <?php endwhile;//end of Schedule loop ?>
                        

                      </div>

      
                  </button>
                  <button> <div class="additional">
                      
                      <?php while( has_sub_fields('additional_field') ): ?>
                        <div class="additionalEach boxToggle">
                        <div class="boxToggleHeader">
                         <h2><?php the_sub_field('additional_field_title_title'); ?></h2>
                         <div class="plusSign">
                            <div class="line1"></div>
                           <div class="line2"></div>
                        </div>
                        </div>
                          
                          <?php the_sub_field('additional_field_text'); ?>
                        </div>
                      <?php endwhile;//end of additional loop ?>
                      
                    </div></button>
                    <button> <div class="eyesEars boxToggle">
                      <div class="boxToggleHeader">
                         <h2>Festival Blog's Eyes and Ears</h2>
                         <div class="plusSign">
                            <div class="line1"></div>
                           <div class="line2"></div>
                        </div>
                        </div>
                      <?php while( has_sub_fields('festival_eyes_and_ears') ): ?>
                        
                        <div class="eyesEarsName">
                         <?php the_sub_field('contributor_name'); ?>
                        </div>
                       <div class="eyesEarsBio visHidden">   
                          <?php the_sub_field('contributor_bio'); ?>
                        </div>
                      <?php endwhile;//end of additional loop ?>
                      
                    </div></button>
                   <div class="catalog">
                     <?php 
                 
                     $file = get_field('catalog');
                 
                     if( $file ): ?>
                       
                       <a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?>Download This Years' Promotional Material (PDF)</a>
                 
                     <?php endif; ?>
                     </div>

                     <div class="sponsors">
                       <h4>7a*11d and its presenting partners gratefully acknowledge the support of:</h4>
                       
                       <?php while( has_sub_fields('presenting_partners') ): ?>
                           <?php $imageLogo = get_sub_field('logo_image_logo') ?> 
                             <img src="<?php echo $imageLogo['sizes']['large'] ?>" alt="">        
                         <?php endwhile;//image loop ?>
                                              </div>
    </div>

          

    

    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main-->


<?php get_footer(); ?>