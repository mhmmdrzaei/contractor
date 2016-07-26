<?php

/*
  Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div class="main">
  <div class="container">
    <div class="aboutComplete">
      <div class="aboutSide">
        <div class="collectiveMembers">
         <h2>Collective Members</h2>
          <?php while( has_sub_fields('collective_members') ): ?>
                        <p><?php the_sub_field('collective_member_name'); ?></p>
                 
          <?php endwhile;//end of Collective Members loop ?>
        </div>
        <div class="collectiveMembers">
         <h2>Former Collective Members</h2>
          <?php while( has_sub_fields('former_collective_members') ): ?>
                        <p><?php the_sub_field('former_collective_member_name'); ?></p>
                 
          <?php endwhile;//end of Former collective Members loop ?>
        </div>
      </div>
      
      <div class="aboutMain">
        <div class="aboutbody">
          <?php // Start the loop ?>
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
          
          <?php endwhile; // end the loop?>
        </div>
        <div class="aboutName">
         <h2>And about that name...</h2>
        
          <?php the_field('and_about_that_name'); ?>
          
        </div>
      </div>
    </div>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>