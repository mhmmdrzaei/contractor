<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">

        <?php $dreamBeanQuery = new WP_Query(array(
          'post_per_page' => 1, // if you want all its -1
          'post_type' => 'festival_year',
          'category_name' => 'featured'
          
            )); ?>

        <?php if($dreamBeanQuery-> have_posts()):?>
          <?php while($dreamBeanQuery->have_posts()): ?>
            <?php $dreamBeanQuery->the_post(); ?>
             <?php $dreamBeanQuery->the_content(); ?>

             <div class="yearComplete">
                <div class="yearSide">
               <h3><?php the_field('sub_title'); ?> </h3>
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
                 <!-- Artists -->
                 <div class="toggle">

                  <!-- Toggle Link -->
                  <h2 class="toggle-trigger"><?php the_field('sub_title'); ?> Artists</h2>

                  <!-- Toggle Content to display -->
                  <div class="artistMain toggle-content">
                     <?php while( has_sub_fields('artists_festival_year') ): ?>
                       <a href="<?php the_sub_field('artist_page_year_link'); ?>"> <?php the_sub_field('artist_name_year_select'); ?></a> // 
                                
                     <?php endwhile;//end of Artist Name loop ?>
                  </div><!-- .toggle-content (end) -->
                 </div><!-- .toggle (end) -->

  <!-- Schedule -->
                 <div class="toggle">

                  <!-- Toggle Link -->
                  <h2 class="toggle-trigger"><?php the_field('sub_title'); ?> Schedule</h2>

                  <!-- Toggle Content to display -->
                  <?php while( has_sub_fields('schedule_year') ): ?>
                  <div class="scheduleMain toggle-content">
                  
                          <div class="scheduleDate">
                            <?php the_sub_field('schedule_date_'); ?>
                          </div>
        
                          <?php while( has_sub_fields('schedule_details') ): ?>
                            <div class="schedDetails">
                              <div class="artistNameSchedule">
                                 <?php the_sub_field('artist_name_schedue'); ?>
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

                <!-- Eyes and Ears -->
                 <div class="toggle">

                  <!-- Toggle Link -->
                  <h2 class="toggle-trigger"> Festival Blog's Eyes and Ears</h2>

                  <!-- Toggle Content to display -->
                  <div class="toggle-content">
                     <?php while( has_sub_fields('festival_eyes_and_ears') ): ?>
                        
                        <div class="eyesEarsName">
                         <?php the_sub_field('contributor_name'); ?>
                        </div>
                       <div class="eyesEarsBio">   
                          <?php the_sub_field('contributor_bio'); ?>
                        </div>
                      <?php endwhile;//end of additional loop ?>
                  </div><!-- .toggle-content (end) -->
                 </div><!-- .toggle (end) -->

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
                                              
                      <?php endwhile; ?>
                       <?php wp_reset_postdata(); ?> 
                       <!-- this will end the and reset and go back to normal so you can go back to normal to your page -->
                   <?php endif; ?>
                   </div>
                   
                   
                 
                 <!-- UPDATES  -->
                 <div class="updates">
                   <h2>Festival Updates</h2>
                   <?
                     $args = array( 'post_type' => 'festival_updates', 'posts_per_page' => 4 );
                     query_posts( $args ); // hijack the main loop
                     while ( have_posts() ) : the_post();
                       ?>
                   <div class="update">
                     <div class="entry-date">
                     <? the_date(); ?>
                       
                 
                     </div> <? /* */  ?>
                     <h4><? the_title(); ?></h4>
                     <div class="entry-content">
                       <?
                       global $more;    // Declare global $more (before the loop).
                       $more = 1;       // Set (inside the loop) to display all content, including text below more.
                       the_excerpt();
                       ?>
                     </div>
                      <?
                     endwhile;
                     ?>
                     <?
                     wp_reset_query();
                     ?> 
                   </div> 
                   <div class="readmore">
 
                       <a href="<?php echo get_permalink(146) ?>"><span class="meta-nav">&rarr;</span> More Updates</a>
                     </div>
                 </div>
               </div>
             </div>
             </div>
             </div>
          



    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main-->


<?php get_footer(); ?>