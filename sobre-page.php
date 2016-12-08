<?php
/*
Template Name: Sobre
*/

get_header(); ?>

<?php if ( have_posts() ) : ?>

<?php while( have_posts() ): the_post(); ?>

<div canvas="container" class="container-fluid sobpage">
	<div class="container">

		<div class="row">

			<div class="col-md-12">
				<h1><?php echo get_the_title(); ?></h1>
			</div>
			
		</div>

		<div class="row">
			<div class="col-md-12 col-xs-12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>

<section id="parallaxBar" data-speed="6" data-type="background">
    <div class="container-fluid">
    	<h1>Nossa missão é trazer o melhor em conforto, lazer e a sua satisfação!</h1>
    </div>
</section> 

<section class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12 partTwo">
				
			</div>
		</div>
	</div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>