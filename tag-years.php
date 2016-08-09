
<?php single_tag_title(); ?>
<?php get_template_part( 'loop', 'tag' ); ?>
      <div class="yearArchiveToggle">
        <?php $dreamBeanQuery = new WP_Query(array(
              'post_per_page' => -1, // if you want all its -1
              'post_type' => 'festival_year',
              'orderby'=> 'title',
              'order' => 'DSC'
          )); ?>
          <?php if($dreamBeanQuery-> have_posts()):?>
              <?php while($dreamBeanQuery->have_posts()): ?>
                <?php $dreamBeanQuery->the_single_tag_title(); ?>
                <?php $dreamBeanQuery->the_post(); ?>
                 <?php $dreamBeanQuery->the_content(); ?>
                  <div class="yearArchive">
                    <h3><a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
                    <?php the_title(); ?></a></h3>
                    <h5><?php the_field('sub_title'); ?></h5>
                  </div>
                    <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?> 
                        <!-- this will end the and reset and go back to normal so you can go back to normal to your page -->
                    <?php endif; ?>
        </div>
      