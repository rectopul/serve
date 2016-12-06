<?php get_header(); ?>
<div canvas="container" class="container-fluid obras-home">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h1>Obras recentes</h1>
				<h4>Confira algumas de nossas <br>	
				obras recentes.</h4>
				<p>
					Obras Feitas para o conforto <br>
					e lazer de todos desenhados <br>
					sob medida para cada um de <br>
					nossos clientes.
				</p>

				<a href="#" class="show-more">Mostrar mais <i class="fa fa-th-large" aria-hidden="true"></i></a>
			</div>

			<?php get_template_part('lib/widgets/looping', 'obras'); ?>
		</div>


		<div class="row andament">
			<div class="col-md-4" style="height: auto; margin-bottom: 0px;">
				<h1>Obras em andamento</h1>
			</div>

			<div class="col-md-6 col-md-offset-2" style="height: auto; text-align: right; margin-top: 15px;"> <small>Obras que estão em fase de construção e prestes a ser em lançadas</small></div>
			
		</div>


		<div class="row">
			<?php get_template_part('lib/widgets/looping', 'andamento'); ?>
		</div>
	</div>
</div>


<div canvas="container" class="container-fluid notices">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Notícias</h1>
				<h4>Confira as notícias e novidades <br>
				relacionadas ás obras e ao trabalho <br>
				da serve engenharia</h4>

			</div>
		</div>

		<div class="row">
			<?php get_template_part('lib/widgets/looping', 'noticias'); ?>
		</div>
	</div>
</div>

<div canvas="container" class="container-fluid cont-partnes">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Parceiros</h1>
				<h4>Confira alguns de nossos <br>
				parceiros e quem nos ajuda a <br>
				proporcionar o melhor trabalho <br>
				para você</h4>
			</div>
		</div>
		<div class="row	partners">
			<?php get_template_part('lib/widgets/looping', 'partners'); ?>
		</div>
	</div>
</div>

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
	
<?php get_footer(); ?>

