<?php get_header();  ?>



<div class="main">
  <div class="container">
      <div class="contentblog">
        <div class="sidebarblog">
          <h3>Festival Updates</h3>
        
          </div>
          
        <div class="blogblog">
            <div class="updates">
               <h2>Festival Updates</h2>
               <?
                 $args = array( 'post_type' => 'festival_updates', 'posts_per_page' => -1 );
                 query_posts( $args ); // hijack the main loop
                 while ( have_posts() ) : the_post();
                   ?>
              
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
            </div>
      </div>
    </div> <!-- /containr -->


<?php get_footer(); ?>


