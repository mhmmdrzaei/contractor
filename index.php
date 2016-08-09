<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>


<div class="main">
  <div class="container">
      <div class="contentblog">
      <div class="sidebarblog">
        <h3>Festival Blog</h3>
            <?php  dynamic_sidebar( 'blogpost-widget-area' ); ?>
        
        </div>
        
        
            <div class="blogblog">
                <?php get_template_part( 'loop', 'index' );  ?>
            </div> <!--/.content -->
      </div>
    </div> 

<?php get_footer(); ?>
  </div> <!-- /.container -->
</div> <!-- /.main -->
