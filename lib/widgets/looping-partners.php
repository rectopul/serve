<?php global $tutups_opcoes_tema; ?>

<!-- Swiper -->
<div class="swiper-container slide-partners">
<div class="swiper-wrapper">
<?php 
	if ( tutsup_chk( $tutups_opcoes_tema, 'partners1' ) ) {

		if ( tutsup_chk( $tutups_opcoes_tema, 'partners_textSlide1' ) ){

			echo '<div class="swiper-slide"><img src="'.tutsup_chk( $tutups_opcoes_tema, 'partners1'). '" alt=""> <br> '.tutsup_chk( $tutups_opcoes_tema, 'partners_textSlide1' ).'</div>';

		}else{
			echo '<div class="swiper-slide"><img src="'.tutsup_chk( $tutups_opcoes_tema, 'partners1').'" alt=""></div>';
		}

	} if ( tutsup_chk( $tutups_opcoes_tema, 'partners2' ) ){

		if ( tutsup_chk( $tutups_opcoes_tema, 'partners_textSlide2' ) ){
			echo '<div class="swiper-slide"><img src="'.tutsup_chk( $tutups_opcoes_tema, 'partners2').'" alt=""> <br> '.tutsup_chk( $tutups_opcoes_tema, 'partners_textSlide2' ).'</div>';
		}else{
			echo '<div class="swiper-slide"><img src="'.tutsup_chk( $tutups_opcoes_tema, 'partners2').'" alt=""></div>';
		}

	} if ( tutsup_chk( $tutups_opcoes_tema, 'partners3' ) ){

		if ( tutsup_chk( $tutups_opcoes_tema, 'partners_textSlide3' ) ){
			echo '<div class="swiper-slide"><img src="'.tutsup_chk( $tutups_opcoes_tema, 'partners3').'" alt=""> <br> '.tutsup_chk( $tutups_opcoes_tema, 'partners_textSlide3' ).'</div>';
		}else{
			echo '<div class="swiper-slide"><img src="'.tutsup_chk( $tutups_opcoes_tema, 'partners3').'" alt=""></div>';
		}
		
	} if ( tutsup_chk( $tutups_opcoes_tema, 'partners4' ) ){

		if ( tutsup_chk( $tutups_opcoes_tema, 'partners_textSlide4' ) ){
			echo '<div class="swiper-slide"><img src="'.tutsup_chk( $tutups_opcoes_tema, 'partners4').'" alt=""> <br> '.tutsup_chk( $tutups_opcoes_tema, 'partners_textSlide4' ).'</div>';
		}else{
			echo '<div class="swiper-slide"><img src="'.tutsup_chk( $tutups_opcoes_tema, 'partners4').'" alt=""></div>';
		}
		
	} if ( tutsup_chk( $tutups_opcoes_tema, 'partners5' ) ){

		if ( tutsup_chk( $tutups_opcoes_tema, 'partners_textSlide5' ) ){
			echo '<div class="swiper-slide"><img src="'.tutsup_chk( $tutups_opcoes_tema, 'partners5').'" alt=""> <br> '.tutsup_chk( $tutups_opcoes_tema, 'partners_textSlide5' ).'</div>';
		}else{
			echo '<div class="swiper-slide"><img src="'.tutsup_chk( $tutups_opcoes_tema, 'partners5').'" alt=""></div>';
		}
		
	}
?>
</div>
</div>
</div>