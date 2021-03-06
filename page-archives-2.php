<?php get_header();  ?>

<?php //start by fetching the terms for the animal_cat taxonomy
$terms = get_terms( 'animal_cat', array(
    'orderby'    => 'name',
    'order' => 'DESC',
    'hide_empty' => 0
) );
?>

<div class="main">
  <div class="container">
  
  <div class="archivesToggle">
  <h3>Archives</h3>
    <div class="archivesArtistList">
      <h2 id="hartist">Artists</h2>
    </div>
    <div class="archivesYearList">
      <h2 id="hyear" class="underlineYear">Year</h2>
    </div>
  </div>

  <div class="content">
      <div class="artistArchiveToggle fartsnatcher away">
        <?php $festivalArtistQueryQuery = new WP_Query(array(
              'post_type' => 'festival_artist',
              'orderby'=> 'title',
              'order' => 'ASC',
              'posts_per_page' => -1
          )); ?>
          

        
          <div id="data" class="Column1">
            <?php if($festivalArtistQueryQuery-> have_posts()):?>
                <?php while($festivalArtistQueryQuery->have_posts()): ?>
                  <?php $festivalArtistQueryQuery->the_post(); ?>
                   
                    
                      <p><a href="<?php the_permalink(); ?>">
                      <?php the_title(); ?></a></p>
                    
                    
            
                      <?php endwhile; ?>
                          <?php wp_reset_postdata(); ?> 
                          <!-- this will end the and reset and go back to normal so you can go back to normal to your page -->
                      <?php endif; ?>
          </div>
          <div id="Column2"></div>
        </div> 

      <div class="yearArchiveToggle">
      <?php
      // now run a query for each animal family
      foreach( $terms as $term ) {
       
          // Define the query
          $args = array(
              'post_type' => 'festival_year',
              'order' => 'DESC',
              'animal_cat' => $term->slug
          ); ?>
          <div class="yearArchive"> 
          <?php 
          $query = new WP_Query( $args );
                   
          // output the term name in a heading tag                
          echo'<h2>' . $term->name . '</h2>';
                    // output the post titles in a list
           ?>
 
           
              
              
             <?php 
              
              //star of the loop
             while ( $query->have_posts() ) : $query->the_post(); ?>
      
                    <p>

                    <a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
                    <?php the_title(); ?></a></p>
                  
               
              <?php endwhile; ?>
           </div> 
           
          <?php // use reset postdata to restore orginal query
          wp_reset_postdata();
       
      } ?>

</div>
</div>
    </div> <!-- /,content -->
<?php get_footer(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main-->


