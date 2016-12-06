<div class="tab-content contact-infos">
		<header><h1>Imagen de contato</h1></header> <br>

		<section data-visible="0">
			<input class="url_img" type="text" value="<?php
			echo esc_attr( tutsup_chk( $this->options, 'contactimage' ) ); 
			?>" name="tutsup_opcoes_tema[contactimage]">
			<button class="btn btn-default active-upload"><i class="fa fa-picture-o" aria-hidden="true"></i> Upload</button>

			<div class="example-image">
				<img src="" alt="">
				<a class="remove-image dell-image"></a>
			</div>

			<div class="rubrica">
				<h1>Informações</h1>
			  	<?php wp_editor( tutsup_chk( $this->options, 'contact_text' ) , 'contact_text', $settings = array('textarea_name'=>'tutsup_opcoes_tema[contact_text]') ); ?> 
			  
			</div> <!-- RUBRICA -->

		</section>

	
	<!-- TAB PANE -->
</div>