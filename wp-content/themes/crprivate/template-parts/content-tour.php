<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package crPrivate
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
 		<div id="slider-gallery" class="slider-gallery owl-carousel">
               <?php $images = rwmb_meta( 'rw_gallery', 'type=image&size=item-gallery' ); 
	             if ( $images ) : ?>
	             
	             	 
	               
	                     <?php foreach ( $images as $image ){?>

	                     		<div class="item tour-banner" style="background-image: url('<?php echo $image['url'] ?>');"></div>
	                         
	                      <?php } ?>
                
                <?php else: ?>

                    <?php if (has_post_thumbnail()) :

                        $id = get_post_thumbnail_id($post->ID);
                        $thumb_url = wp_get_attachment_image_src($id, 'item-gallery', true);
                    ?>
					    	
							<div class="item tour-banner" style="background-image: url('<?php echo $thumb_url[0] ?>');">
					  	  		
					  	  	</div>
							
					
					  	 
					<?php endif; ?>
	           
                 <?php endif; ?>
            </div>
	<header class="entry-header tour-header">
		<?php
		if ( is_singular() ) :
			the_title('<h1 class="entry-title">', '</h1>');
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		?>
	</header><!-- .entry-header -->

	<?php /*crprivate_post_thumbnail();*/ ?>

	<div class="entry-content">
		<div class="tour-container">
			<div class="tour-info">
			<?php
				the_content();

			
			?>
			</div>
			<div class="tour-details">
				
				<div class="dl">
					<?php if(rwmb_meta('rw_op_title_1')) : ?>
						<div class="dt btn btn-celeste"><?php
								echo do_shortcode(rwmb_meta('rw_op_title_1')); ?></div>
						<div class="dd hidden" style="display: block;">
							<?php
								echo do_shortcode(rwmb_meta('rw_op_details_1')); ?>

							<a href="#tour-popup" class="btn btn-red tour-popup-link" data-title="<?php echo rwmb_meta('rw_op_title_1') ?>">Inquiry now</a>
						</div>
					<?php endif; ?>
					<?php if(rwmb_meta('rw_op_title_2')) : ?>
						<div class="dt btn btn-celeste"><?php
								echo do_shortcode(rwmb_meta('rw_op_title_2')); ?></div>
						<div class="dd hidden" >
							<?php
								echo do_shortcode(rwmb_meta('rw_op_details_2')); ?>
							<a href="#tour-popup" class="btn btn-red tour-popup-link" data-title="<?php echo rwmb_meta('rw_op_title_2') ?>">Inquiry now</a>
						</div>
					<?php endif; ?>
					<?php if(rwmb_meta('rw_op_title_3')) : ?>
						<div class="dt btn btn-celeste"><?php
								echo do_shortcode(rwmb_meta('rw_op_title_3')); ?></div>
						<div class="dd hidden" >
							<?php
								echo do_shortcode(rwmb_meta('rw_op_details_3')); ?>
							<a href="#tour-popup" class="btn btn-red tour-popup-link" data-title="<?php echo rwmb_meta('rw_op_title_3') ?>">Inquiry now</a>
						</div>
					<?php endif; ?>
					<?php if(rwmb_meta('rw_op_title_4')) : ?>
						<div class="dt btn btn-celeste"><?php
								echo do_shortcode(rwmb_meta('rw_op_title_4')); ?></div>
						<div class="dd hidden" >
							<?php
								echo do_shortcode(rwmb_meta('rw_op_details_4')); ?>
								<a href="#tour-popup" class="btn btn-red tour-popup-link" data-title="<?php echo rwmb_meta('rw_op_title_4') ?>">Inquiry now</a>
						</div>
					<?php endif; ?>
					
				</div>
			</div>
		</div>
		
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
