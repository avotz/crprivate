<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package crPrivate
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>img/favicons/favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,300|Raleway:800,400' rel='stylesheet' type='text/css'>
	<!--<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bundle.css">-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--<div id="page" class="site">-->

	<!--<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'crprivate' ); ?></a>

	<header id="masthead" class="site-header">-->
	<header class="header">
		<div class="inner">
		
			<a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.jpeg" alt="Costa Rica Private Tours" /></a>
			
			<div class="header-contact">
				<div class="header-contact-item"><i class="icon-phone"></i> (506) 2667-1132</div>
				<div class="header-contact-item">
					<a href="#" class="social-item"><i class="icon-facebook"></i></a>
					<a href="#" class="social-item"><i class="icon-twitter"></i></a>
					<a href="#" class="social-item"><i class="icon-google-plus"></i></a>
				</div>
					
			</div>
		

		<nav class="header-menu">
			
		
			
			
				
				<?php 
				if(has_nav_menu('primary')){
					wp_nav_menu( array(
					'theme_location' => 'menu-1',
	             'menu_id' => 'primary-menu',
	             'container'       => 'div',
	            'container_class' => 'header-menu-item',
	            'container_id'    => '',
	            'menu_class'      => 'header-menu-link anchor',
	              ) 
	          ); 
							}else{
								
									wp_nav_menu( array(
									
										'menu_id' => 'menu',
										'container'       => '',
										'container_class' => 'header-menu-item',
										'container_id'    => 'claseli',
										'menu_class'      => 'header-menu-ul',
										'menu_id'=>'mymenu'
																
									) );
								
							}
				
	          
			?>
			
		</nav><!-- #site-navigation -->
		<button id="btn-menu" class="header-btn-menu">
	        <i class="icon-menu"></i>
	    </button>
		</div>
	</header><!-- #masthead -->
