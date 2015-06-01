<?php

/*
	Template Name: Home-page
*/

get_header();  ?>
 	<div class="bannerHeader">
	 	<div class="headerMain">
	 		<img src="<?php bloginfo('template_directory'); ?>/img/burgerLogo.png" alt="">
	 	</div>	
	</div>
	<div class="hamburgerChoices clearfix">
		<div class="hamburger">
			<img src="<?php bloginfo('template_directory') ?>/img/burger.jpg" alt="">
			<!-- <h1>lorem</h1>
			<p>Lorem ipsum dolor.</p>
			<button>Order Now</button> -->
		</div>
		<div class="hamburger">
			<img src="<?php bloginfo('template_directory') ?>/img/burger.jpg" alt="">
			<!-- <h1>lorem</h1>
			<p>Lorem ipsum dolor.</p>
			<button>Order Now</button> -->
		</div>
		<div class="hamburger">
			<img src="<?php bloginfo('template_directory') ?>/img/burger.jpg" alt="">
		<!-- 	<h1>lorem</h1>
			<p>Lorem ipsum dolor.</p>
			<button>Order Now</button> -->
		</div>
		<div class="hamburger">
			<img src="<?php bloginfo('template_directory') ?>/img/burger.jpg" alt="">
			<!-- <h1>lorem</h1>
			<p>Lorem ipsum dolor.</p>
			<button>Order Now</button> -->
		</div>
		<div class="hamburger">
			<img src="<?php bloginfo('template_directory') ?>/img/burger.jpg" alt="">
		<!-- 	<h1>lorem</h1>
			<p>Lorem ipsum dolor.</p>
			<button>Order Now</button> -->
		</div>
		<div class="hamburger">
			<img src="<?php bloginfo('template_directory') ?>/img/burger.jpg" alt="">
			<!-- <h1>lorem</h1>
			<p>Lorem ipsum dolor.</p>
			<button>Order Now</button> -->
		</div>

		<div class="overlay">
			<div class="modal">
				<img src="<?php bloginfo('template_directory') ?>/img/burger.jpg" alt="">
				<div class="info">
					<p>ex: General Info About Burger</p>
					<p>$10.99</p>
				</div>
				<a href="" class="close">&times;</a>
			</div>
		</div>
	</div>

	<div class="catering clearfix">
		<div class="wrapper">
			
				  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					
					<h1><?php the_title(); ?></h1>
					<hr>

					<p><?php the_content();?></p>

				<?php endwhile; // end of the loop. ?>
				<?php echo do_shortcode( '[contact-form-7 id="10" title="Catering Contact Form"]' ); ?>
		</div>
	</div>
<!-- Banner -->
<div class="main">
  <div class="container">
 
	<!-- End of Banner -->
<!-- One -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>