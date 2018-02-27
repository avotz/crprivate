<?php
/*
 * Template Name: page-home
 */


get_header(); ?>
	 <section class="banner">
		<div class="owl-carousel owl-theme">
	  	  <div class="item" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/banner1.jpg');">
	  	  	<div class="inner">
	  	  		<div class="item-info txt-center">
	  	  			<h1>Costa Rica</h1>
	  	  			<p>Private tours</p>
	  	  			
	  	  		</div>
	  	  		
	  	  	</div>
	  	  </div>
	  	  <div class="item" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/banner2.jpg');">
	  	  		<div class="inner">
	  	  		<div class="item-info">
	  	  			<span >Full day tours</span>
	  	  			<span >Half day tours</span>
	  	  			<span >Water Sports</span>
	  	  		</div>
	  	  		
	  	  		
	  	  	</div>
	  	  </div>
	  	  	  
		</div>
	</section>
	
    <section class="services">
		<div class="inner">
			<div class="services-container">
				
				<div class="services-item">
					<div class="services-media">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/tours-activities.jpg" alt="Tours" />
						<a href="<?php echo esc_url(home_url('/tour-category/land-tours/')); ?>" class="services-link ">
							<span>Read More</span> <i class="icon-angle-right"></i>
						</a>
					</div>
					<div class="services-info">
						<a href="<?php echo esc_url(home_url('/tour-category/land-tours/')); ?>" ><h3>Land Tours</h3></a>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis rem possimus ipsam odit vel 
						</p>
					</div>
				</div>
				<div class="services-item">
					<div class="services-media">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/water-tours.jpg" alt="Private" />
						<a href="<?php echo esc_url(home_url('/tour-category/water-tours/')); ?>" class="services-link ">
							<span>Read More</span> <i class="icon-angle-right"></i>
						</a>
					</div>
					<div class="services-info">
						<a href="<?php echo esc_url(home_url('/tour-category/water-tours/')); ?>" class=""><h3>Water Tours</h3></a>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis rem possimus ipsam odit vel 
						</p>
					</div>
				</div>
				<div class="services-item">
					<div class="services-media">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/shuttle-services.jpg" alt="Shuttle" />
						<a href="<?php echo esc_url(home_url('/shuttle-services')); ?>" class="services-link ">
							<span>Read More</span> <i class="icon-angle-right"></i>
						</a>
					</div>
					<div class="services-info">
						<a href="<?php echo esc_url(home_url('/shuttle-services')); ?>" ><h3>Shuttle Services</h3></a>
						<p>
							We serve the following destinations to/from Nat Costa Ricaingo - Conchal - Playa Grande - Pinilla
						</p>
					</div>
					
				</div>
			</div>
		</div>
		
	</section>
	
	<section id="shuttle" class="shuttle">
		<div class="inner">
			<h1 class="shuttle-title">Shuttle Services</h1>
			<p class="shuttle-subtitle">Our Destinations</p>
			  <?php rewind_posts(); ?>
			            <?php query_posts('post_type=page&page_id=174'); ?>
			            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			         
			                    	
			                       
										<?php
									the_content();

									?>
									
			    
			                <?php endwhile; ?>
			                <!-- post navigation -->
			              
			            <?php endif; ?>
			          
			 
			
		</div>
	</section>
	
	<section id="tours" class="tours">
		<div class="tours-info">
			<h1 class="tours-title">Tours &amp; Activities</h1>
			<p>Featured tours with different activities and ecosystems</p>
			<ul class="tours-ul">
					<li> <a href="<?php echo esc_url(home_url('/tour/palo-verde-national-park-dry-forest-boat-tour/')); ?>">Palo verde</a></li>
					<li> <a href="<?php echo esc_url(home_url('/tour/borinquen-adventure-tour/')); ?>">Borinquen</a></li>
					<li> <a href="<?php echo esc_url(home_url('/tour/nicaragua-tour-overnight/')); ?>">Nicaragua</a></li>
					<li> <a href="<?php echo esc_url(home_url('/tour/white-water-rafting/')); ?>">White Water Rafting</a></li>
					<li> <a href="<?php echo esc_url(home_url('/tour/rain-forest-arenal-volcano-full-day-tour-combinations/')); ?>">Arenal Volcano</a></li>
				</ul>
		</div>
		<div class="tours-img" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/img/tours-home.jpg');">
			
		</div>
	</section>
	<section id="testimonials" class="testimonials">
		<div class="inner">
			<div class="testimonials-item">
				<i class="fa fa-quote-left"></i>
				<h3>Ask about our corporate rates for groups or large families! </h3>
				
				<i class="fa fa-quote-right"></i>
			</div>
		</div>
	</section>
	<section id="wedding" class="wedding">
		<div class="inner">
			
				<h1 class="wedding-title">Lorem ipsum</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores corporis alias, eveniet eum ipsum expedita recusandae cum a dolorem, unde ratione aperiam? Nobis adipisci et tempore quia, tempora quibusdam accusantium. </p>
				<div class="wedding-container">
					<div class="wedding-item">
						<h3>lorem ipsum</h3>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores corporis alias, eveniet eum ipsum expedita recusandae cum a dolorem, unde ratione aperiam? Nobis adipisci et tempore quia, tempora quibusdam accusantium.</p>
					</div>
					<div class="wedding-item">
						<h3>lorem ipsum</h3>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores corporis alias, eveniet eum ipsum expedita recusandae cum a dolorem, unde ratione aperiam? Nobis adipisci et tempore quia, tempora quibusdam accusantium.</p>
					</div>
					<div class="wedding-item">
						<h3>lorem ipsum</h3>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores corporis alias, eveniet eum ipsum expedita recusandae cum a dolorem, unde ratione aperiam? Nobis adipisci et tempore quia, tempora quibusdam accusantium.</p>
					</div>

				</div>
				
			
		</div>
	</section>
	
	<section class="partners">
		<div class="inner">
			<div class="partners-item">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/calitur-logo.jpg" alt="Calitur" />
			</div>
			<div class="partners-item">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/caturgua-logo.jpg" alt="caturgua" />
			</div>
			<div class="partners-item">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/ict-logo.jpg" alt="ict" />
			</div>
		</div>
	</section>
	
	
<?php

get_footer();
