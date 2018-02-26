<?php
/*
 * 
 */


get_header(); ?>
<section class="servicestours">
		<div class="inner">
			<h1>Our tours</h1>
			<div class="services-container" >
				
				 <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

              
                    $args = array(
                        'post_type' => 'tour',
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
                         <?php if (has_post_thumbnail()) :

                            $id = get_post_thumbnail_id($post->ID);
                        $thumb_url = wp_get_attachment_image_src($id, 'featured-item', true);

                        ?>
                            <?php else :
                                $thumb_url = ''; ?>     
                                            
                              <?php endif; ?>
							<div class="services-item" >
								<div class="services-media">
									<img src="<?php echo $thumb_url[0] ?>" alt="<?php the_title(); ?>" />
									<a href="<?php the_permalink(); ?>" class="services-link anchor">
										<span>Read More</span> <i class="icon-angle-right"></i>
									</a>
								</div>
								<div class="services-info">
									<a href="<?php the_permalink(); ?>" class="anchor"><h3><?php the_title(); ?></h3></a>
									<?php the_excerpt(); ?>
								</div>
							<hr class="style1">
							</div>
                        

    
                        
                        
                        <?php

                        $index++;
                    }
                }
               
                ?>

			
				
			</div>
		</div>
	</section>


	<?php

get_footer();
