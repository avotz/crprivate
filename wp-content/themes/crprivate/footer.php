<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package crPrivate
 */

?>

	</div><!-- #content -->

	<footer class="footer">
		<div class="inner">
			<div class="footer-container">
				<div class="footer-item">
					<div class="copy">
						CR Private Tours &copy; 2018. <a href="#"><i class="icon-avotz"></i></a>
					</div>
				</div>
				<div class="footer-item">
					<div class="contact">
						<h3>Contact Us</h3>
						<ul>
							<li>Information: (506)8826-5425</li>
							<li><a href="mailto::info@costaricaprivate.net">info@costaricaprivate.net</a> </li>
							
						</ul>
						

					</div>
				</div>
				<div class="footer-item">
					<h3>Get in Touch</h3>
					<div class="social">
						<a href="#" class="social-item"><i class="icon-facebook"></i></a>
						<a href="https://www.tripadvisor.com.mx/Attraction_Review-g309240-d2149604-Reviews-Costa_Rica_Private_Tours-Liberia_Province_of_Guanacaste.html" class="social-item" target="_blank"><i class="fa fa-tripadvisor"></i></a>
					</div>
				</div>
			</div>
			
			
			
			
		</div>
		
	</footer>
	
</div><!-- #page -->

   <div id="tour-popup" class="request-popup white-popup mfp-hide mfp-with-anim">
		<?php echo do_shortcode('[contact-form-7 id="183" title="Book Tour"]');
	?>               
	    
	</div>
	 <div id="shuttle-popup" class="request-popup white-popup mfp-hide mfp-with-anim">
		<?php echo do_shortcode('[contact-form-7 id="184" title="Book Shuttle"]');
	?>               
	    
	</div>

<?php wp_footer(); ?>

</body>
</html>
