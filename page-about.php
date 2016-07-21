<?php

/*
  Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div class="main">
  <div class="container">
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

    <div class="aboutMain">
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
    <div class="sponsors">
      <h4>7a*11d and its presenting partners gratefully acknowledge the support of:</h4>
      
      <?php while( has_sub_fields('presenting_partners') ): ?>
        <?php $image = get_sub_field('logo_images') ?> 
          <img src="<?php echo $image['sizes']['large'] ?>" alt="">        
      <?php endwhile;//end of Former collective Members loop ?>
    </div>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>