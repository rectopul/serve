<?php get_header(); ?>
	
		<?php if ( have_posts() ) : ?>
		<?php while( have_posts() ): the_post(); ?>
			
			<?php $categoria = get_the_category();

			if ( $categoria[0]->parent == get_cat_ID( 'noticias' ) ) : ?>
				
				<!-- IF IS NOTICE -->

			<?php else: ?>
				
				<!-- IF NOT IS NOTICE -->

				<div class="container">

					<div class="row">
							<?php
								// Must be inside a loop.
								 
								if ( has_post_thumbnail() ) {

									$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'simgle_thumb' );

									$thumbnail_id = get_post_thumbnail_id( $post->ID );

									$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

								    echo '<div class="col-md-12 thumbnail-product" style="background-image: url('.$thumb['0'].');" >';
								}
								else {
								    echo '<div class="col-md-12 thumbnail-product" >';
								}
							?>
							
							<span>

								<h1> <?php echo get_the_title(); ?> </h1>

								<h4><?php $cidade = get_field('cidade'); if( !empty( $cidade ) ){ echo $cidade; } ?></h4>

								<p class="icons"><i class="fa fa-bed" aria-hidden="true"></i> : <?php $quartos = get_field('quartos'); if( !empty( $quartos ) ){ echo $quartos; } ?></p>
								
								<p class="icons"><i class="fa fa-area-chart" aria-hidden="true"></i> : <?php $dimension = get_field('dimension'); if( !empty( $dimension ) ){ echo $dimension; } ?></p>

								<p><i class="fa fa-quote-left" aria-hidden="true"></i> <?php echo get_the_content(); ?></p>

							</span>

						</div>

					</div>

				</div>


				<div class="container-fluid especific">
					
					<div class="container">
							<!-- Nav tabs -->
						  	<ul class="nav nav-tabs" role="tablist">
							    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Especificações</a></li>
							    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Infra Instrutura</a></li>
						  	</ul>

						  	<!-- Tab panes -->
						  	<div class="tab-content">
							    <div role="tabpanel" class="tab-pane active" id="home">
							    	<?php $especificacoes = get_field('especificacoes'); if( !empty( $especificacoes ) ){ echo $especificacoes; } ?>
							    </div>
							    <div role="tabpanel" class="tab-pane" id="profile">
							    	<?php $infraestrutura = get_field('infraestrutura'); if( !empty( $infraestrutura ) ){ echo $infraestrutura; } ?>
							    </div>
						  	</div>
					</div>

				</div>
				
				<?php get_template_part('lib/widgets/looping', 'gallery'); ?>
				<?php get_template_part('lib/widgets/looping', 'plant'); ?>
				<?php get_template_part('lib/widgets/looping', 'map'); ?>

			<?php endif; ?>
		<?php endwhile; endif; ?>
	
<?php get_footer(); ?>