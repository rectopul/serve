<div class="tab-content">
	<div class="tab-pane active" id="cont1"> 
		<header>Slide 1 <span class="acordeon-slide fa fa-plus"></span></header>

		<section data-visible="0">
			<input class="url_img" type="text" value="<?php
			echo esc_attr( tutsup_chk( $this->options, 'image1' ) ); 
			?>" name="tutsup_opcoes_tema[image1]">
			<button class="btn btn-default active-upload"><i class="fa fa-picture-o" aria-hidden="true"></i> Upload</button>

			<div class="example-image">
				<img src="" alt="">
				<a class="remove-image dell-image"></a>
			</div>

			<div class="rubrica">
				<h1>Rubrica</h1>
			  	<?php wp_editor( esc_attr( tutsup_chk( $this->options, 'textSlide1' ) ) , 'textSlide1', $settings = array('textarea_name'=>'tutsup_opcoes_tema[textSlide1]') ); ?> 
			  
			</div> <!-- RUBRICA -->

		</section>
		

	</div>

	<div class="tab-pane" id="cont2">
		
		<header>Slide 2 <span class="acordeon-slide fa fa-plus"></span></header>

		<section data-visible="0">
			<input class="url_img" type="text" value="<?php
			echo esc_attr( tutsup_chk( $this->options, 'image2' ) ); 
			?>" name="tutsup_opcoes_tema[image2]">
			<button class="btn btn-default active-upload"><i class="fa fa-picture-o" aria-hidden="true"></i> Upload</button>

			<div class="example-image">
				<img src="" alt="">
				<a class="remove-image dell-image"></a>
			</div>

			<div class="rubrica">
				<h1>Rubrica</h1>
			  	<?php wp_editor( esc_attr( tutsup_chk( $this->options, 'textSlide2' ) ) , 'textSlide2', $settings = array('textarea_name'=>'tutsup_opcoes_tema[textSlide2]') ); ?> 
			  
			</div> <!-- RUBRICA -->

		</section>

	</div>

	<div class="tab-pane" id="cont3">
		
		<header>Slide 3 <span class="acordeon-slide fa fa-plus"></span></header>

		<section data-visible="0">
			<input class="url_img" type="text" value="<?php
			echo esc_attr( tutsup_chk( $this->options, 'image3' ) ); 
			?>" name="tutsup_opcoes_tema[image3]">
			<button class="btn btn-default active-upload"><i class="fa fa-picture-o" aria-hidden="true"></i> Upload</button>

			<div class="example-image">
				<img src="" alt="">
				<a class="remove-image dell-image"></a>
			</div>

			<div class="rubrica">
				<h1>Rubrica</h1>
			  	<?php wp_editor( esc_attr( tutsup_chk( $this->options, 'textSlide3' ) ) , 'textSlide3', $settings = array('textarea_name'=>'tutsup_opcoes_tema[textSlide3]') ); ?> 
			  
			</div> <!-- RUBRICA -->

		</section>

	</div>

	<div class="tab-pane" id="cont4">
		
		<header>Slide 4 <span class="acordeon-slide fa fa-plus"></span></header>

		<section data-visible="0">
			<input class="url_img" type="text" value="<?php
			echo esc_attr( tutsup_chk( $this->options, 'image4' ) ); 
			?>" name="tutsup_opcoes_tema[image4]">
			<button class="btn btn-default active-upload"><i class="fa fa-picture-o" aria-hidden="true"></i> Upload</button>

			<div class="example-image">
				<img src="" alt="">
				<a class="remove-image dell-image"></a>
			</div>

			<div class="rubrica">
				<h1>Rubrica</h1>
			  	<?php wp_editor( esc_attr( tutsup_chk( $this->options, 'textSlide4' ) ) , 'textSlide4', $settings = array('textarea_name'=>'tutsup_opcoes_tema[textSlide4]') ); ?> 
			  
			</div> <!-- RUBRICA -->

		</section>

	</div>

	<div class="tab-pane" id="cont2">
		
		<header>Slide 5 <span class="acordeon-slide fa fa-plus"></span></header>

		<section data-visible="0">
			<input class="url_img" type="text" value="<?php
			echo esc_attr( tutsup_chk( $this->options, 'image5' ) ); 
			?>" name="tutsup_opcoes_tema[image5]">
			<button class="btn btn-default active-upload"><i class="fa fa-picture-o" aria-hidden="true"></i> Upload</button>

			<div class="example-image">
				<img src="" alt="">
				<a class="remove-image dell-image"></a>
			</div>

			<div class="rubrica">
				<h1>Rubrica</h1>
			  	<?php wp_editor( esc_attr( tutsup_chk( $this->options, 'textSlide5' ) ) , 'textSlide5', $settings = array('textarea_name'=>'tutsup_opcoes_tema[textSlide5]') ); ?> 
			  
			</div> <!-- RUBRICA -->

		</section>

	</div>
	<!-- TAB PANE -->
</div>