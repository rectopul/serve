<?php $arguments = array('category_name' => 'noticias', 'category__not_in'=>get_cat_ID( 'concluido' ), 'order'=>'ASC'); $recent = new WP_Query( $arguments ); ?>

<?php if ( $recent->have_posts() ) : ?>
<?php while( $recent->have_posts() ): $recent->the_post(); ?>

	<div class="col-md-4 notices-post">
		<?php
			// Must be inside a loop.
			 
			if ( has_post_thumbnail() ) {

				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'obras_home' );

				$thumbnail_id = get_post_thumbnail_id( $post->ID );

				$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

			    echo '<a href="'.get_permalink().'"><img src="'.$thumb['0'].'" alt=""></a>';
			}
			else {
			    echo '<a href="'.get_permalink().'"><img src="'.get_template_directory_uri().'/images/nothing.jpg" alt="solid-serveengenharia"></a>';
			}
		?>
		
		<?php 
			$categoria = get_the_category(); 

			// var_dump($categoria);

			echo '<a href="'.get_category_link($categoria[0]->term_id).'" class="category-notices">#'.$categoria[0]->name.'</a>';
		?>
		<h1><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>

		<hr class="slide-hover">
	</div>

<?php endwhile; endif; ?>