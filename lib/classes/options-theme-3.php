<div class="tab-content">

	<h1>Copyright:</h1><br>
	<?php 

	// $post = get_post( $post_id, OBJECT, 'edit' );

	// echo esc_attr( tutsup_chk( $this->options, 'copyright' ) );

	wp_editor( tutsup_chk( $this->options, 'copyright' ),
	'copyright',
	$settings = array('textarea_name'=>'tutsup_opcoes_tema[copyright]', 'wpautop'=>false, 'teeny' => true, 'textarea_rows' => 6, 'tabindex' => 1) ); ?>
	
	<br>

	<hr class="rmb_custom_wp">

	<br>

	<section class="upload_logo" >

		<h1>Logotipo:</h1><br>
		<input class="url_img" type="text" value="<?php
		echo esc_attr( tutsup_chk( $this->options, 'logotipo' ) ); 
		?>" name="tutsup_opcoes_tema[logotipo]">
		<button class="btn btn-default active-upload"><i class="fa fa-picture-o" aria-hidden="true"></i> Upload</button>
		
		<div class="example-image upload-logo">
			<img src="" alt="">
			<a class="remove-image dell-image"></a>
		</div>

	</section>
</div>