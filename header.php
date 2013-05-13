<?php
/**
 * The Header for the theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;

  wp_title( '|', true, 'right' );

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', 'camelcases' ), max( $paged, $page ) );

  ?></title>


<!-- Apple Touch Icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/touch/apple-touch-icon-144x144-precomposed.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/touch/apple-touch-icon-114x114-precomposed.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/touch/apple-touch-icon-72x72-precomposed.png" />
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/touch/apple-touch-icon-57x57-precomposed.png" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/touch/apple-touch-icon.png" />

<!-- Favicons -->
<link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" rel="icon" />
<link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" rel="shortcut icon" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header cf" role="banner">
    <nav role="navigation" class="site-navigation main-navigation cf">
      <div class="wrapper">
        <!-- <a class="logo" href="<?php echo home_url( '/' ); ?>">
          <img src="<?php bloginfo( 'template_url' ); ?>/img/monkeys-white.png" alt="My Kids Are Napping" />
        </a> -->
        <h1 class="assistive-text"><?php _e( 'Menu', 'wpboiler' ); ?></h1>
        <div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'wpboiler' ); ?>"><?php _e( 'Skip to content', 'wpboiler' ); ?></a></div>

        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
      </div>
      
    </nav><!-- .site-navigation .main-navigation -->
    <div class="branding">
      <div class="wrapper">
        <div class="site-titles">
          <h1 class="site-title"><a class="ir" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <h2 class="site-description visuallyhidden"><?php bloginfo( 'description' ); ?></h2>
        </div>
        <div class="subscribe-form">
          <button class="btn subscribe-btn">Subscribe</button>
          <?php echo do_shortcode("[subscribe2]"); ?>
        </div>
      </div>      
    </div>
		
		

	</header><!-- #masthead .site-header -->

	<div id="main" class="site-main cf">
    <div class="wrapper">