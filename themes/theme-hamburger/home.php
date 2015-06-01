<?php

/*
	Template Name: blog archive
*/

get_header();  ?>
<section class="blogHeader">
	

</section>
  <div class="wallpaper clearfix">
    <div class="wrapper">
  	 <div class="container">
     <h1>home.php</h1>
      <?php // Start the loop ?>

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  	    
        <h2><?php the_title(); ?></h2>
       <!--  <p><?php the_author_posts_link(); ?><----Click Me, to see what this guys said!</p>
        <!-- <p>See what he has said!</p> --> 

       <?php echo get_avatar( get_the_author_meta( 'ID' ), 190 ); ?>
        <h3>More posts from
        <a class="name" href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>">
          <?php the_author(); ?>
        </a>
      </h3>
        
        <?php the_content(); ?>
       

      



      <?php endwhile; // end the loop?>


    </div> <!-- /.container -->
  </div> <!-- /.main -->
</div>
<?php get_footer(); ?>