<div class="tab-content">
	<div class="tab-pane active" id="cont1"> 
		<header>Parceiro 1 <span class="acordeon-slide fa fa-plus"></span></header>

		<section data-visible="0">
			<input class="url_img" type="text" value="<?php
			echo esc_attr( tutsup_chk( $this->options, 'partners1' ) ); 
			?>" name="tutsup_opcoes_tema[partners1]">
			<button class="btn btn-default active-upload"><i class="fa fa-picture-o" aria-hidden="true"></i> Upload</button>

			<div class="example-image">
				<img src="" alt="">
				<a class="remove-image dell-image"></a>
			</div>

			<div class="rubrica">
				<h1>Nome da Empresa</h1>
			  	<?php wp_editor( esc_attr( tutsup_chk( $this->options, 'partners_textSlide1' ) ) , 'partners_textSlide1', $settings = array('textarea_name'=>'tutsup_opcoes_tema[partners_textSlide1]') ); ?> 
			  
			</div> <!-- RUBRICA -->

		</section>
		

	</div>

	<div class="tab-pane" id="cont2">
		
		<header>Parceiro 2 <span class="acordeon-slide fa fa-plus"></span></header>

		<section data-visible="0">
			<input class="url_img" type="text" value="<?php
			echo esc_attr( tutsup_chk( $this->options, 'partners2' ) ); 
			?>" name="tutsup_opcoes_tema[partners2]">
			<button class="btn btn-default active-upload"><i class="fa fa-picture-o" aria-hidden="true"></i> Upload</button>

			<div class="example-image">
				<img src="" alt="">
				<a class="remove-image dell-image"></a>
			</div>

			<div class="rubrica">
				<h1>Nome da Empresa</h1>
			  	<?php wp_editor( esc_attr( tutsup_chk( $this->options, 'partners_textSlide2' ) ) , 'partners_textSlide2', $settings = array('textarea_name'=>'tutsup_opcoes_tema[partners_textSlide2]') ); ?> 
			  
			</div> <!-- RUBRICA -->

		</section>

	</div>

	<div class="tab-pane" id="cont3">
		
		<header>Parceiro 3 <span class="acordeon-slide fa fa-plus"></span></header>

		<section data-visible="0">
			<input class="url_img" type="text" value="<?php
			echo esc_attr( tutsup_chk( $this->options, 'partners3' ) ); 
			?>" name="tutsup_opcoes_tema[partners3]">
			<button class="btn btn-default active-upload"><i class="fa fa-picture-o" aria-hidden="true"></i> Upload</button>

			<div class="example-image">
				<img src="" alt="">
				<a class="remove-image dell-image"></a>
			</div>

			<div class="rubrica">
				<h1>Nome da Empresa</h1>
			  	<?php wp_editor( esc_attr( tutsup_chk( $this->options, 'partners_textSlide3' ) ) , 'partners_textSlide3', $settings = array('textarea_name'=>'tutsup_opcoes_tema[partners_textSlide3]') ); ?> 
			  
			</div> <!-- RUBRICA -->

		</section>

	</div>

	<div class="tab-pane" id="cont4">
		
		<header>Parceiro 4 <span class="acordeon-slide fa fa-plus"></span></header>

		<section data-visible="0">
			<input class="url_img" type="text" value="<?php
			echo esc_attr( tutsup_chk( $this->options, 'partners4' ) ); 
			?>" name="tutsup_opcoes_tema[partners4]">
			<button class="btn btn-default active-upload"><i class="fa fa-picture-o" aria-hidden="true"></i> Upload</button>

			<div class="example-image">
				<img src="" alt="">
				<a class="remove-image dell-image"></a>
			</div>

			<div class="rubrica">
				<h1>Nome da Empresa</h1>
			  	<?php wp_editor( esc_attr( tutsup_chk( $this->options, 'partners_textSlide4' ) ) , 'partners_textSlide4', $settings = array('textarea_name'=>'tutsup_opcoes_tema[partners_textSlide4]') ); ?> 
			  
			</div> <!-- RUBRICA -->

		</section>

	</div>

	<div class="tab-pane" id="cont2">
		
		<header>Parceiro 5 <span class="acordeon-slide fa fa-plus"></span></header>

		<section data-visible="0">
			<input class="url_img" type="text" value="<?php
			echo esc_attr( tutsup_chk( $this->options, 'partners5' ) ); 
			?>" name="tutsup_opcoes_tema[partners5]">
			<button class="btn btn-default active-upload"><i class="fa fa-picture-o" aria-hidden="true"></i> Upload</button>

			<div class="example-image">
				<img src="" alt="">
				<a class="remove-image dell-image"></a>
			</div>

			<div class="rubrica">
				<h1>Nome da Empresa</h1>
			  	<?php wp_editor( esc_attr( tutsup_chk( $this->options, 'partners_textSlide5' ) ) , 'partners_textSlide5', $settings = array('textarea_name'=>'tutsup_opcoes_tema[partners_textSlide5]') ); ?> 
			  
			</div> <!-- RUBRICA -->

		</section>

	</div>
	<!-- TAB PANE -->
</div>