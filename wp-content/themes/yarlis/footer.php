<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>


<footer>
	

			<div class="sv-footer">
			    <div class="container">
			    	<div class="all-sections">
				<div class="row">
					  <div class="col-md-4 col-sm-4 col-xs-12">
						 <div class="sv-footer-abtus">
						 	<h2>Quick links</h2>
						 		<!--<ul>
						 			<li><a href="#">>&nbsp &nbsp Home</a></li>
						 			<li><a href="#">>&nbsp &nbsp About Us</a></li>
						 			<li><a href="#">>&nbsp &nbsp SERVICES</a></li>
						 			<li><a href="#">>&nbsp &nbsp PRODUCTS</a></li>
						 			<li><a href="#">>&nbsp &nbsp CAREER</a></li>
						 			<li><a href="#">>&nbsp &nbsp Contact us</a></li>

						 		</ul>-->
								<?php wp_nav_menu( array('menu' => 'primary-menu' )); ?>
						</div>
				</div>

					  <div class="col-md-4 col-sm-4 col-xs-12">
						 <div class="sv-footer-abtus">
						 	<h2>Contact us</h2>
						 		<ul>
						 		<li><i class="fa fa-map-marker" aria-hidden="true"></i><span>East point St.no 123</span></li>
						 			<li><i class="fa fa-phone" aria-hidden="true"></i><span>123 4567 89 - 0</span></li>
						 			<li><i class="fa fa-envelope" aria-hidden="true"></i><span><a href="Info@yarlis.com"></a>Info@yarlis.com</span></li>
						 			
						 		</ul>
						 </div>							
				</div>
					  <div class="col-md-4 col-sm-4 col-xs-12">
						 <div class="sv-foterfollow-abtus">
						 	<h2>NEWSLETTER</h2>
						 	<p>Get our latest news and special offers</p>
						 	<?php dynamic_sidebar( 'Primary Widget Area' ); ?>
						 	<div class="newsletter">
								<img src="<?php bloginfo('template_directory');?>/images/newsletter-pic.png" alt="service image " class="img-responsive">
								
							</div>
						 		
						 </div>
							
						</div>

					  </div>
				</div>	

				<div class="sv-footerflogo-inner">
				<div class="row">
					  <div class="col-md-12 col-sm-12 col-xs-12">
						 <div class="sv-footerlogo-abtus">
						 <ul>	
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

									<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>

									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									
								</ul>
						 	<p>“Copyright<span>© 2018</span>Yarlis Delivering Business Value - All rights reserved. - Terms of use |<span><a>Privacy policy”</a></span>
						 			</p>
						 	</div>
						</div>
				</div>
				</div>

				
		  </div>	
	   </div>


</footer>







</div><!-- .wrapper -->

<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.9.1.min"></script>
<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.js"></script>
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">


<script defer="defer">
    jQuery(document).ready(function() {
       jQuery("#owl-demo").owlCarousel({
        items : 1,
        lazyLoad : true,
        slideSpeed : 2000,
		paginationSpeed :2000,
		lazyLoad : true,
		stopOnHover : true,
		autoPlay : true,
		itemsDesktop : [1170,1], //5 items between 1000px and901px 
		itemsDesktopSmall : [900,1], // betweem 900px and 601px 
		itemsTablet: [600,1], //2 items between 600 and 0 
		itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option       
      });
    });
</script>
<script defer="defer">
    jQuery(document).ready(function() {
       jQuery("#service-pic-section").owlCarousel({
        items : 3,
        lazyLoad : true,
        slideSpeed : 2000,
		paginationSpeed :2000,
		lazyLoad : true,
		stopOnHover : true,
		autoPlay : true,
		pagination: false,
		navigation: true,
		itemsDesktop : [1170,3], //5 items between 1000px and901px 
		itemsDesktopSmall : [900,2], // betweem 900px and 601px 
		itemsTablet: [600,1], //2 items between 600 and 0 
		itemsMobile : [400,1], // itemsMobile disabled - inherit from itemsTablet option       
      });
    });
</script> 
    

<script>
  
  jQuery(document).ready(function() {
    jQuery('#s').attr('placeholder', 'Search');
  });
  
</script>
<script>
function openNav() {
	var d = document.getElementById("myNav");
	d.className += " opennav";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
	document.getElementById("myNav").classList.remove("opennav");
}
</script>
<?php
	/*
	 * Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
