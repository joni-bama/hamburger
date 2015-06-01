<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link href='http://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
  <div class="container clearfix">
    <nav class="sideNav">
      <span class="fa fa-bars"></span>
      <ul class="slideLeft">
        <li>
          <a href="<?php echo home_url( '/' ); ?>">Home</a>
          <a href="<?php echo get_page_link(get_page_by_title(about)); ?>">About</a>
          <a href="<?php echo get_page_link(get_page_by_title(blog)); ?>">Blog</a>
        </li>
        <li><img src="<?php bloginfo('template_directory'); ?>/img/burgerLogo.png"></li>
        <li>123 Fake St. Fakeland USA, 90210</li>
        <li>123-456-7891</li>
        <li>
          <a href="http://facebook.com" target="blank"><i class="fa fa-facebook"></i></a>
          <a href="http://twitter.com" target="blank"><i class="fa fa-twitter"></i></a>
          <a href="http://instagram.com" target="blank"><i class="fa fa-instagram"></i></a>
        </li>
        <li>&copy; BurgerPlace 2015</li>
      </ul> 
    </nav>

    <!-- <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        // <?php bloginfo( 'name' ); ?>
      </a>
    </h1> -->

  <!--   <?php wp_nav_menu( array(
      // 'container' => false,
      // 'theme_locations' => 'primary'
    )); ?> -->

    <nav class="mainNav">
      <ul>
        <li><a href="<?php echo home_url( '/' ); ?>">Home</a></li>
        <li><a href="<?php echo get_page_link(get_page_by_title(about)); ?>">About</a></li>
        <li><a href="<?php echo get_page_link(get_page_by_title(blog)); ?>">Blog</a></li>
      </ul>
    </nav><!-- End mainNav -->

<!--     <nav class="sideNav">
      <span class="fa fa-bars"></span>
      <ul class="dropdown wrapper">
        <li>
          <a href="<?php echo home_url( '/' ); ?>">Home</a>
          <a href="<?php echo get_page_link(get_page_by_title(about)); ?>">About</a>
          <a href="<?php echo get_page_link(get_page_by_title(blog)); ?>">Blog</a>
        </li>
        <li><img src="wp-content/themes/theme-hackeryou/img/burgerLogo.png"></li>
        <li>123 Fake St. Fakeland USA, 90210</li>
        <li>123-456-7891</li>
        <li>
          <a href="http://facebook.com" target="blank"><i class="fa fa-facebook"></i></a>
          <a href="http://twitter.com" target="blank"><i class="fa fa-twitter"></i></a>
          <a href="http://instagram.com" target="blank"><i class="fa fa-instagram"></i></a>
        </li>
        <li>&copy; BurgerPlace 2015</li>
      </ul> 
    </nav> -->
  </div> <!-- /.container -->
</header><!--/.header-->

