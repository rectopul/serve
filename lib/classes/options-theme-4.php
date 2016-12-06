<div class="tab-content">

	<h1>Localização:</h1><br>
	<?php 

	wp_editor( tutsup_chk( $this->options, 'endereco' ),
	'endereco',
	$settings = array('textarea_name'=>'tutsup_opcoes_tema[endereco]', 'wpautop'=>false, 'teeny' => true, 'textarea_rows' => 6, 'tabindex' => 1) ); ?>
	
	<br>
	
	<h1>Mapa:</h1><br>

	<?php 
		wp_editor( tutsup_chk( $this->options, 'map_location' ),
		'map_location',
		$settings = array('textarea_name'=>'tutsup_opcoes_tema[map_location]', 'wpautop'=>true, 'teeny' => true, 'textarea_rows' => 6, 'tabindex' => 1 ) );
	?>

</div>