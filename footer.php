
<footer class="container-fluid">
	
		<div class="container">
			<div class="row">
				<?php 
					wp_nav_menu( array(
						'theme_location'  => 'footer_pages',
					    'sort_column'     => 'menu_order',
					    'container'       => 'nav',
					    'container_class' => 'container-menu-footer col-md-8 col-md-offset-0',
					    'container_id'    => ' ',
					    'menu_id'		  => 'footer-menu',
					    'menu_class' 	  => 'nav navbar-nav'
					) );
				?>

				<div class="col-md-4 mapa">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3693.477437440857!2d-49.93757378454862!3d-22.22195698536431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bfd0b498043323%3A0x1b27d6f50505f5cd!2sServe+Engenharia+Ltda!5e0!3m2!1spt-BR!2sbr!4v1480917374534" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>

		</div>
		
</footer>

<?php wp_footer(); ?>
</body>
</html>