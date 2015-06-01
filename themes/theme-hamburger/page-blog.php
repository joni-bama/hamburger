<?php

/*
	Template Name: Blog Page
*/

get_header();  ?>
<section class="blogHeader">
	

</section>
  <div class="wallpaper clearfix">
    <div class="wrapper">
  	 <div class="container">
      <?php // Start the loop ?>
   <h2><?php the_title(); ?></h2>
      
        
      <?php 
        $postsQueryArg = array("post_type" => "post", "posts_per_page" => -1);
        $postsQuery = new WP_Query($postsQueryArg);

        if($postsQuery->have_posts()) {
          while($postsQuery->have_posts()) {
            $postsQuery->the_post()
          ?>



            <h3><?php the_title();?></h3>
            <?php  the_content(); ?>
          


          <?php
          }
        }
       ?>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
   
   
   <!--  <p><?php the_author_posts_link(); ?><----Click Me, to see what this guys said!</p>
    <!-- <p>See what he has said!</p> --> 

   <?php echo get_avatar( get_the_author_meta( 'ID' ), 190 ); ?>
    <h3>More posts from
      <a class="name" href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>">
        <?php the_author(); ?>
      </a>
    </h3>
      <?php endwhile; // end the loop?>


    </div> <!-- /.container -->
  </div> <!-- /.main -->
</div>
<?php get_footer(); ?>