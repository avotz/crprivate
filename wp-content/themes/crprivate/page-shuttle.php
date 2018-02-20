<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * Template Name: Page shuttle
 * @package crPrivate
 */

get_header(); ?>

	<div class="main">
		<div class="inner">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			<div class="shuttle-details">
				<div class="dl">
					 <?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;


					$args = array(
						'post_type' => 'shuttle-service',
                        //'order' => 'ASC',
						'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
						'posts_per_page' => 12,
						'paged' => $paged,


					);


					$items = new WP_Query($args);
                    // Pagination fix
					$temp_query = $wp_query;
					$wp_query = null;
					$wp_query = $items;
					$index = 0;
					if ($items->have_posts()) {
						while ($items->have_posts()) {
							$items->the_post();

							?>

						<div class="dt btn btn-celeste"><?php the_title(); ?></div>
						<div class="dd hidden" <?php echo ($index == 0) ? 'style="display: block;"' : '' ?>>
							<a href="#shuttle-popup" class="btn btn-red shuttle-popup-link" data-title="<?php the_title ();?>">Inquiry now</a>	
						<?php the_content(); ?>
						</div>
                    
                        
                        
                        <?php

								$index++;
							}
						}

						?>

					
					
				</div>
			</div>

		</div><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
