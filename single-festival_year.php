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
               <h3><?php the_field('sub_title'); ?> </h3>
                 <div class="contentWelcome">
                   <?php the_content(); ?>
                 </div>
                 <div class="poster">

                     <?php 
                   
                     $image = get_field('poster');
                   
                     if( !empty($image) ): ?>

                       <!-- Trigger the Modal -->
                   
                       <img id="myImg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                       <!-- The Modal -->
                       <div id="myModal" class="modal">

                         <!-- The Close Button -->
                         <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

                         <!-- Modal Content (The Image) -->
                         <img class="modal-content" id="img01">

                         <!-- Modal Caption (Image Text) -->
                         <div id="caption"></div>
                       </div>
                   
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
                                                        <a href="<?php the_sub_field('artist_page_with_image'); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
                                                   
                                                    <?php endif; ?>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul><!-- .bxslider -->
                                <?php endif;  // end gallery repeater field?>
                                <!-- instagram -->
                                <? the_field('instagram_feed'); ?>
                                <!-- Artists -->
                                <?php if( has_sub_fields('artists_festival_year') ): ?>

                                <div class="toggle">
                                <h2 class="toggle-trigger">Artists</h2>

                                 <div class="artistMain toggle-content">
                                <?php while( has_sub_fields('artists_festival_year') ): ?>

                                   
                                        <a href="<?php the_sub_field('artist_page_year_link'); ?>"> <?php the_sub_field('artist_name_year_select'); ?></a> // 
                                                 
                                  <?php endwhile;//end of Artist Name loop ?>    
                                   </div><!-- .toggle-content (end) -->
                                   
                                   
                                   
                                 
                                </div><!-- .toggle (end) -->
                              <?php endif; ?>

 <!-- Schedule -->
               <?php if( has_sub_fields('schedule_year') ): ?>
                <div class="toggle">

                 <!-- Toggle Link -->
                 <h2 class="toggle-trigger"> Schedule</h2>

                 <!-- Toggle Content to display -->
                 <?php while( has_sub_fields('schedule_year') ): ?>
                 <div class="scheduleMain toggle-content">
                 
                         <div class="scheduleDate">
                           <?php the_sub_field('schedule_date_'); ?>
                         </div>
       
                         <?php while( has_sub_fields('schedule_details') ): ?>
                           <div class="schedDetails">
                             <div class="artistNameSchedule">
                             <a href=" <?php the_sub_field('artist_name_link_scheudle'); ?>"><?php the_sub_field('artist_name_schedue'); ?></a>
                             </div>
                             <div class="schedulePerformanceNam">
                             <?php the_sub_field('performance_name_schedule'); ?>
                             </div>
                             <div class="scheduleVenue">
                             <?php the_sub_field('performance_venue'); ?>
                             </div>
                             <div class="scheduleTime">
                             <?php the_sub_field('performance_time'); ?>
                             </div>
                           </div>
                             <?php endwhile;//end of Schedule Details loop ?>

                 </div><!-- .toggle-content (end) -->
                  <?php endwhile;//end of Schedule loop ?>
                </div><!-- .toggle (end) -->
                <?php endif; ?>


                   <!-- additional -->
                   <?php while( has_sub_fields('additional_field') ): ?>
                   <div class="toggle">

                    <!-- Toggle Link -->
                       <div class="additionalEach ">
                        <h2 class="toggle-trigger"><?php the_sub_field('additional_field_title_title'); ?></h2>
                    
                    <!-- Toggle Content to display -->
                    <div class="toggle-content">
                       <?php the_sub_field('additional_field_text'); ?>
                    </div><!-- .toggle-content (end) -->
                  </div>
                  
                   </div><!-- .toggle (end) -->
                   <?php endwhile;//end of additional loop ?>
                 <?php while( has_sub_fields('promo_mat_upload') ): ?>
                   <div class="catalog">
                   
                     <?php 
                 
                     $file = get_sub_field('catalog');
                 
                     if( $file ): ?>
                       
                       <a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?><?php the_sub_field('promo_material_download_link_text'); ?></a>
                 
                     <?php endif; ?>
                   
                     </div>
                   <?php endwhile;//end of Promo Material ?>

                     <!-- additional Programming -->
                     <?php while( has_sub_fields('additional_progamming') ): ?>
                      <div class="toggle otherProjectsToggle">
                     <div class="otherProjects">
                     
                         <div class="additionalProgEach additionalEach">
                          <h2 class="toggle-trigger additional_prog_header"><?php the_sub_field('additional_prog_title'); ?></h2>
                      
                      <!-- Toggle Content to display -->
                      <div class="toggle-content">
                         <?php the_sub_field('additional_prog_text'); ?> 
                      </div>
                    </div>

                    </div>
                    </div>
                     
                     <?php endwhile;//end of additional Programming loop ?>


                     <div class="sponsors">
                       <div class="sponsors">
                     <?php while( has_sub_fields('presenting_partners') ): ?>
                      <h4><?php the_sub_field('presenting_partners_title'); ?></h4>
                          <?php while( has_sub_fields('logo_images_logo') ): ?>
                       
                           <?php $imageLogo = get_sub_field('logo_image_logo') ?> 
                           <a href="<?php the_sub_field('logo_link'); ?>"><img src="<?php echo $imageLogo['sizes']['large'] ?>" alt=""></a>
                              
                          <?php endwhile;//end of logo images loop ?>       
                         <?php endwhile;// end of presenting partners loop loop ?>
                      </div>
    </div>

          

   </div> 

    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main-->


<?php get_footer(); ?>