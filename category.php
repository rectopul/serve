<?php get_header(); ?>

<div canvas="container" class="container-fluid category">
	<div class="container">
		<div class="row category-container">
			<?php if ( have_posts() ) : ?>

			<?php while( have_posts() ): the_post(); ?>
                            
                    <div class="col-md-6" >

                        <a href="<?php echo get_permalink(); ?>">

                        	<?php
								// Must be inside a loop.
								 
								if ( has_post_thumbnail() ) {

									$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'simgle_thumb' );

									$thumbnail_id = get_post_thumbnail_id( $post->ID );

									$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

								    echo '<img src="'.$thumb['0'].'" alt="'.$alt.'">';
								}
								else {
								    echo '';
								}
							?>

                        </a>
						
						<div class="container-category-descript col-md-12">
							
							<h1><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
							<h4><a href="<?php echo get_permalink(); ?>"><?php the_category(); ?></a></h4>
                        	<p><a href="<?php echo get_permalink(); ?>"><?php the_excerpt(); ?></a></p>

						</div>

                    </div>

			<?php endwhile; endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>