<?php $arguments = array('category_name' => 'empreendimentos', 'showposts' => 8, 'category__not_in'=>get_cat_ID( 'concluido' ), 'orderby' => 'date', 'order'=>'DESC'); $recent = new WP_Query( $arguments ); ?>

<?php if ( $recent->have_posts() ) : ?>
<?php while( $recent->have_posts() ): $recent->the_post(); ?>

	<div class="col-md-3">
		<?php
			// Must be inside a loop.
			 
			if ( has_post_thumbnail() ) {

				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'obras_home' );

				$thumbnail_id = get_post_thumbnail_id( $post->ID );

				$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

			    echo '<div class="thumb-obras" style="background: url('.$thumb['0'].') no-repeat center top; background-size: auto 100%;">';
			}
			else {
			    echo '<div class="thumb-obras">';
			}
		?>
		
		<?php 
			$categoria = get_the_category();  

			if ( $categoria[0]->slug == 'breve_lancamento' ) {
				echo '<div class="status" style="background-color: #e96b00;"> <i class="fa fa-retweet" aria-hidden="true"></i>'.$categoria[0]->name.'</div>';
			} if ( $categoria[0]->slug == 'concluido' ) {
				echo '<div class="status" style="background-color: #00a8ff;"> <i class="fa fa-check" aria-hidden="true"></i>'.$categoria[0]->name.'</div>';
			} if ( $categoria[0]->slug == 'em_andamento' ) {
				echo '<div class="status" style="background-color: #ff4949;"> <i class="fa fa-bell" aria-hidden="true"></i>'.$categoria[0]->name.'</div>';
			}
		?>

		<br>
		<h4><?php $cidade = get_field('cidade'); if( !empty( $cidade ) ){ echo $cidade; } ?></h4>
		<h1><?php the_title(); ?></h1>

		<div class="hover-effect">			
			<h3><?php the_title(); ?></h3>
			<p><?php the_excerpt(); ?></p>
		</div>
		</div>
	</div>

<?php endwhile; endif; ?>