<?php
/*
Template Name: Área do cliente
*/

get_header(); ?>

<?php if ( have_posts() ) : ?>

<?php while( have_posts() ): the_post(); ?>

<div canvas="container" class="container-fluid sobpage clientpage">
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

<div canvas="container" class="container-fluid cont-partnes">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="row">
					<div class="col-md-12">
						<h1>Contato</h1>
							<h4>Entre em contato com a serve <br>
							estamos á disposição para tirar <br>
							qualquer dúvida que tenha.</h4>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 contact-form">
						<?php echo do_shortcode( '[contact-form-7 id="48" title="Formulário de contato"]' ); ?>
					</div>	
				</div>
			</div>

			<div class="col-md-4">
				<h3>Informações úteis</h3>
				<small>Reunimos algumas informações que poderão ajudar <br>
				você de uma forma mais rápida e precisa. Confira <br>
				abaixo</small> <br>

				<h4>Eu posso ir diretamente na sede da Serve para <br>
				tratar de assuntos sobre a obra?</h4>

				<small>Sim você não só pode como deve vir até nós para tratar
				de assuntos sobre as obras pois ném sempre
				conseguiremos forneçer tudo o que precisa atravéz da
				internet. Por isto vindo até nós você terá um atendimento
				mais completo</small> <br>

				<hr>

				<h4>Eu consigo efetuar a compra de um imóvel
				diretamente pelo site da serve?</h4>

				<small>Não. O site da serve é um portal de informações e
				acompanhamento., e não voltado para vendas. Portanto
				você não conseguirá efetuar compras em nosso site.
				Para efeuar as compras você deve nos procurar para 
				tratar de negócios.</small> <br>
			</div>


			<div class="col-md-3">
				<div class="info-contact">
					<h3>informações de Contato</h3>

					<?php 

						if ( tutsup_chk( $tutups_opcoes_tema, 'contactimage' ) ) {
							echo '<img src="'.tutsup_chk( $tutups_opcoes_tema, 'contactimage'). '" alt="">';
						} if ( tutsup_chk( $tutups_opcoes_tema, 'contact_text' ) ) {
							echo tutsup_chk( $tutups_opcoes_tema, 'contact_text');
						}
					?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>