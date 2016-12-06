<div class="tab-content">
	<h1>Tire suas Dúvidas:</h1><br>
	<?php wp_editor( esc_attr( tutsup_chk( $this->options, 'footer_questions' ) ) , 'footer_questions', $settings = array('textarea_name'=>'tutsup_opcoes_tema[footer_questions]') ); ?>
	
	<br>
	
	<h1>Venha nos visitar:</h1><br>
	<?php wp_editor( esc_attr( tutsup_chk( $this->options, 'come_visit_us' ) ) , 'come_visit_us', $settings = array('textarea_name'=>'tutsup_opcoes_tema[come_visit_us]') ); ?>
</div>