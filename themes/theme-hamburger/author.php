<?php get_header(); ?>
<section class="blogHeader">
  

</section>
<div class="main">
  <div class="container">
    <div class="content">

      <?php
      	/* Queue the first post, that way we know who
      	 * the author is when we try to get their name,
      	 * URL, description, avatar, etc.
      	 */
      	if ( have_posts() )
      		the_post();
      ?>

      <h1>More posts from
        <a class="name" href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>">
          <?php the_author(); ?>
        </a>
      </h1>

      <?php
      	// If a user has filled out their description, show a bio on their entries.
      	if ( get_the_author_meta('description') ) : ?>
        
        
             <?php echo get_avatar( get_the_author_meta('user_email'), 160); ?>
        
            <h2>About <?php the_author(); ?>

              <a href="<?php the_author_meta('user_url'); ?>">
                <?php the_author_meta('user_url'); ?>
              </a>
            </h2> 

        		<?php the_author_meta('description'); ?>
               <?php get_the_author_link(); ?> 
       
        
        <?php endif; ?>

      	<?php
      		rewind_posts();
      		get_template_part('loop', 'author');
      	?>
    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>