<?php
/**
 * Classe TutsupOpcoesTema - Carrega as opções do tema
 *
 * Este é um template básico para suas criações mais avançadas.
 */
 
// Verifica se a classe já existe

if ( ! class_exists('TutsupOpcoesTema') ) {

	
 
	// Cria a classe
	class TutsupOpcoesTema
	{
		// As opções
		protected $options;
 
		/**
		 * Construtor
		 *
		 * Carrega todas as funções.
		 */
		public function __construct () {
		
			// Variável de opções que está no functions.php
			global $tutups_opcoes_tema;
			
			// Configura as opções dentro da classe
			$this->options = $tutups_opcoes_tema;
				
			/* Essa classe só executa ações para a área administrativa */
			if ( is_admin() ) {
				
				// Carrega os scripts e styles necessários
				add_action( 
					'admin_enqueue_scripts', 
					array( $this, 'carrega_scripts' ) 
				);
 
				// Adiciona o menu de opções
				add_action('admin_menu', array( $this, 'adiciona_menu' ) );
				
				// Registra nossas opções
				add_action( 'admin_init', array( $this, 'registra_opcoes' ) );
			} // is_admin
			
		} // __construct
		
		/**
		 * Função para adicionar o menu na área administrativa
		 */
		public function adiciona_menu() {
		
			// Creates a page for editing the theme options
			add_theme_page(
				'Opções do tema',            // Título da página
				'Opções do tema',            // Título do menu
				'edit_themes',               // Permissões
				'tutsup_opcoes_tema',        //	Slug do menu
				array( $this, 'admin_html' ) // Função de callback
			);
			
		} // adiciona_menu
		
		/**
		 * Função para registrar nossas opções
		 */
		public function registra_opcoes() {
		
			register_setting( 
				'tutsup_opcoes_tema', 
				'tutsup_opcoes_tema', 
				array( $this, 'valida_campos' ) // Função de callback
			);
			
		} // registra_opcoes
		
		// Callback para validar os campos enviados (se necessário)
		public function valida_campos( $input ) {
			
			// Vamos validar apenas o fundo, só para você entender
			if( isset( $input['fundo'] ) ) {
				$input['fundo'] = sanitize_text_field( $input['fundo'] );
			}
			
			return $input;
			
		} // valida_campos
		
		/**
		 * Carrega a página HTML que será apresentada na área administrativa
		 */
		public function admin_html() {		
?>
 
<div class="wrap">

	

	<form method="post" action="options.php">
		<?php
			settings_fields( 'tutsup_opcoes_tema' );
			do_settings_sections( 'tutsup_opcoes_tema' );
		?>
		
		<h3>Opções do tema</h3>
		<div class="container-fluid">
			<div class="tabs">
				<ul class="nav nav-tabs nav-stacked">
					<li class="active"><a href="#cont1"><i class="fa fa-sliders" aria-hidden="true"></i> Slides</a></li>
					<li><a href="#cont1"><i class="fa fa-building-o" aria-hidden="true"></i>Parceiros</a></li>
					<li><a href="#cont1"><i class="fa fa-volume-control-phone" aria-hidden="true"></i>Informações de contato</a></li>
					<li><a href="#cont1"><i class="fa fa-bars" aria-hidden="true"></i>Footer menu</a></li>
					<li><a href="#cont1"><i class="fa fa-angle-double-down" aria-hidden="true"></i>Footer</a></li>
					<li><a href="#cont1"><i class="fa fa-map-marker" aria-hidden="true"></i>Localização</a></li>
				</ul>				
			</div>
		

			<div class="content options-theme-content">
				<?php require('options-theme-1.php'); ?>
				<?php require('options-theme-5.php'); ?>
				<?php require('options-theme-6.php'); ?>
				<?php require('options-theme-2.php'); ?>
				<?php require('options-theme-3.php'); ?>
				<?php require('options-theme-4.php'); ?>
			</div>
		</div>

		
		
		<p>
			<?php submit_button(); ?>
		</p>
	</form>
</div>
 
<?php
 
		} // admin_html
		
		/**
		 * Carrega scripts e styles
		 */
		public function carrega_scripts() {
		
			// Caixa de upload de imagem
			wp_enqueue_script('media-upload');

			wp_enqueue_media();
			
			// Thickbox
			wp_enqueue_script('thickbox');
			wp_enqueue_style('thickbox');
			
			// Color picker (para cores)
			wp_enqueue_style( 'wp-color-picker' );
			
			// Nosso script
			wp_enqueue_script( 
				'admin_settings', 
				get_template_directory_uri() . '/lib/js/admin-settings.js', 
				array('wp-color-picker'), 
				'1.0.0', 
				true 
			);
			
		} // carrega_scripts
	
	} // Class TutsupOpcoesTema
 
	// Carrega a classe
	$tutsup_opcoes_tema = new TutsupOpcoesTema();
}