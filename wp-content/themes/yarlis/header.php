<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<!---Bootstrap Css and Font Awesome Css Files-->	
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" />
<!---OWL CRUISER-->
<link href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css" type="text/css" rel="stylesheet" />
<link href="<?php bloginfo('template_url'); ?>/css/owl.theme.css" type="text/css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">


<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link href="<?php bloginfo('template_url'); ?>/css/responsive.css" type="text/css" rel="stylesheet" /> 
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/*
	 * We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/*
	 * Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper">


<header>	

		<div class="sv-toplinks">
			<div class="container">
				<div class="row">
					<div class="sv-toplinks-inner">
					
				<!--	<div id="myNav" class="overlay">
									<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
										<div class="overlay-content">
										<h3>YARLIS</h3>
										<ul>	
											<li><a href="http://wordpress.oneviewcrm.com/yarlis/"> HOME</a></li>
											<li><a href="http://wordpress.oneviewcrm.com/yarlis/about-us/"> ABOUT US</a></li>
											<li><a href="http://wordpress.oneviewcrm.com/yarlis/services/"> SERVICES</a></li>
											<li><a href="http://wordpress.oneviewcrm.com/yarlis/#pro"> PRODUCTS</a></li>
											<li><a href="http://wordpress.oneviewcrm.com/yarlis/career/"> CAREER</a></li>
											<li><a href="http://wordpress.oneviewcrm.com/yarlis/contact-us/"> CONTACT US</a></li>
										</ul>
									  </div>
									 
							
								</div>	-->

						<div class="col-md-2 col-sm-2 col-xs-12">
							
						<!--	<div class="barss">	
							<span style="font-size:30px;cursor:pointer" onclick="openNav()"><i class="fa fa-bars"></i> </span>
								<!--<i class="fa fa-bars"></i> 
							</div>	-->	
						</div>

						<div class="col-md-2 col-sm-2 col-xs-12">
							<div class="top-fonts">
								
			<a href="http://wordpress.oneviewcrm.com/yarlis/">	 <img src="<?php bloginfo('template_directory');?>/images/header-logo.png" alt="service image " class="img-responsive"></a>
							</div>	
						</div>

						<div class="three">
						<div class="col-md-2 col-sm-3 col-xs-12">
							<div class="account-top">	
								<div class="acc">
								</div>
								<p>Address<br>
								East point St.no 123</p>
							</div>	
							<!--<div class="topleks-fonts">	
						<?php echo get_site_url();?>"><img src="<?php bloginfo ('template_url');?>/images/tboth.png" class="img-responsive logo" />
							
							</div>-->
						</div>

						<div class="col-md-2 col-sm-3 col-xs-12">
							<div class="whish-list">
								<div class="w-list">
									</div>
								<p>Email Us<br>
								Info@yarlis.com</p>
							</div>	
						</div>

						<div class="col-md-2 col-sm-2 col-xs-12">
							<div class="my-cart">
								<div class="m-cart">
								</div>
									<p>Call Us<br>
										123 4567 89 - 0</p>
							</div>
						</div>

						<div class="col-md-2 col-sm-12 col-xs-12">
							<div class="toplin-font">
								<?php dynamic_sidebar( 'Fourth Footer Widget Area' ); ?>
							</div>
						</div>

						</div>


					</div>
				</div>
			</div>
		</div>

		<div class="clearfix"></div>

		<div class="navigationn">
			<div class="container">
				<div class="sv-top">
				<div class="row">


					<div class="col-md-10 col-sm-10 col-xs-12">
						<div class="prmyhome">
					<?php wp_nav_menu( array('menu' => 'primary-menu' )); ?>
						</div>
						
					</div>


					


					<div class="col-md-2 col-sm-2 col-xs-12">
						<div class="prmy">
							<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								
									<li><a href="#"><i class="fa fa-twitter"  aria-hidden="true"></i></a></li>
									
									<li><a href="#"><i class="fa fa-instagram"  aria-hidden="true"></i></a></li>

									<li><a href="#"><i class="fa fa-youtube"  aria-hidden="true"></i></a></li>

									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>

								</ul>
						</div>	
					</div>


				</div>
				</div>

			</div>
		</div>
			



				<div class="slider">
			
				   	<?php echo do_shortcode( '[layerslider id="1"]	' );?>
				
				</div>


				<!-- <div class="formbd">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="sip">
					<?php echo do_shortcode( '[contact-form-7 id="" title="Contact form 1"]' );?>
					</div>
				</div>-->

	</header>
