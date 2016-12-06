<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title><?php wp_title('-',true,'right'); bloginfo() ?></title>
	<script> var url_directory = "<?php bloginfo('template_url'); ?>"; </script>
	<?php wp_head(); ?>
 </head>
<body>

<div off-canvas="id-1 left push" id="menu-mobile-slidebar">
	<?php 
		wp_nav_menu( array(
			'theme_location'  => 'main_nav',
		    'sort_column'     => 'menu_order',
		    'container'       => 'nav',
		    'container_class' => 'menu-mobile col-md-12 col-md-offset-0',
		    'container_id'    => ' ',
		    'menu_id'		  => 'main-menu-mobile',
		    'menu_class' 	  => 'nav navbar-nav'
		) );
	?>
</div>

<?php if( is_home() ): ?>

<div canvas="container" class="container-fluid" style="padding-left: 0; padding-right: 0;">
	<header class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-1"><?php theme_prefix_the_custom_logo(); ?></div>
				<?php 
					wp_nav_menu( array(
						'theme_location'  => 'main_nav',
					    'sort_column'     => 'menu_order',
					    'container'       => 'nav',
					    'container_class' => 'container-menu col-md-10 col-md-offset-1',
					    'container_id'    => ' ',
					    'menu_id'		  => 'main-menu',
					    'menu_class' 	  => 'nav navbar-nav'
					) );
				?>
			</div>
		</div>
	</header>

	<div class="row bar-mobile">
		<div class="col-md-12">
			<button class="active-mobile"><i class="fa fa-bars" aria-hidden="true"></i></button>
		</div>
	</div>
	

	
		<div class="container-fluid slide">
			<!-- Swiper -->
		    <div class="swiper-container slide-principal">
		        <div class="swiper-wrapper">
		        	<?php global $tutups_opcoes_tema; ?>

					<?php 
						if ( tutsup_chk( $tutups_opcoes_tema, 'image1' ) ) {

							echo '<div class="swiper-slide"><img src="'.tutsup_chk( $tutups_opcoes_tema, 'image1').'" alt=""></div>';

						} if ( tutsup_chk( $tutups_opcoes_tema, 'image2' ) ){

							echo '<div class="swiper-slide"><img src="'.tutsup_chk( $tutups_opcoes_tema, 'image2').'" alt=""></div>';

						} if ( tutsup_chk( $tutups_opcoes_tema, 'image3' ) ){

							echo '<div class="swiper-slide"><img src="'.tutsup_chk( $tutups_opcoes_tema, 'image3').'" alt=""></div>';
							
						} if ( tutsup_chk( $tutups_opcoes_tema, 'image4' ) ){

							echo '<div class="swiper-slide"><img src="'.tutsup_chk( $tutups_opcoes_tema, 'image4').'" alt=""></div>';
							
						} if ( tutsup_chk( $tutups_opcoes_tema, 'image5' ) ){

							echo '<div class="swiper-slide"><img src="'.tutsup_chk( $tutups_opcoes_tema, 'image5').'" alt=""></div>';
							
						}
					?>

		        </div>
		        <!-- Add Pagination -->
		        <div class="swiper-pagination"></div>
		    </div>
		</div>
	

	
</div>
<?php else: ?>

	<div canvas="container" class="container-fluid" style="height: 90px;">
		<header class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-md-1"><?php theme_prefix_the_custom_logo(); ?></div>
					<?php 
						wp_nav_menu( array(
							'theme_location'  => 'main_nav',
						    'sort_column'     => 'menu_order',
						    'container'       => 'nav',
						    'container_class' => 'container-menu col-md-10 col-md-offset-1',
						    'container_id'    => ' ',
						    'menu_id'		  => 'main-menu',
						    'menu_class' 	  => 'nav navbar-nav'
						) );
					?>
				</div>
			</div>
		</header>

		<div class="row bar-mobile">
			<div class="col-md-12">
				<button class="active-mobile"><i class="fa fa-bars" aria-hidden="true"></i></button>
			</div>
		</div>
		
	</div>

<?php endif; ?>

