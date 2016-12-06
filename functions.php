<?php 

function theme_enqueue_styles() {

	wp_enqueue_script('jquery', true );
    wp_enqueue_style('style', get_stylesheet_uri(), false, '0.0.10');
    wp_enqueue_style('Normalize', get_template_directory_uri() . '/lib/css/normalize.css', false, '3.3.7');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/lib/css/bootstrap.min.css', false, '3.3.7');
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/lib/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_style('Fira Sans', "https://fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900", array(), null);
	/*SWIPER SLIDE*/
	wp_enqueue_script('Swipper JS', get_template_directory_uri() . '/lib/js/swiper.jquery.min.js', array('jquery'));
	wp_enqueue_style('Swipper CSS', get_template_directory_uri() . '/lib/css/swiper.min.css', false, '3.3.7');

	/*FONT AWESOME*/
	wp_enqueue_style('FONT AWESOME', get_template_directory_uri() . '/lib/css/font-awesome.min.css', false, '3.3.7');
	wp_enqueue_style('RMB CUSTOM FONTS', get_template_directory_uri() . '/lib/css/rmb-custom-fonts.css', false, '3.3.7');

	/*BOOTSTRAP SELECT*/
	wp_enqueue_style('BOOTSTRAP SELECT CSS', get_template_directory_uri() . '/lib/css/bootstrap-select.min.css', false, '1.11.2');
	wp_enqueue_script('BOOTSTRAP SELECT JS', get_template_directory_uri() . '/lib/js/bootstrap-select.min.js', array('jquery'));

	/*SLIDEBAR*/
	wp_enqueue_style('SLIDEBAR CSS', get_template_directory_uri() . '/lib/css/slidebars.css', false, '2.0.2');
	wp_enqueue_script('SLIDEBAR JS', get_template_directory_uri() . '/lib/js/slidebars.js', array('jquery'), '2.0.2', true );

	


	/*WOWSLIDER*/
	wp_enqueue_script('effects', get_template_directory_uri() . '/lib/js/effects.js', array('jquery'), '0.0.1', true );

	/*ECO LIGHTBOX*/
	wp_enqueue_style('ECO LIGHTBOX CSS', get_template_directory_uri() . '/lib/css/magnific-popup.css', false, '2.0.2');

	
	
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


// Update CSS within in Admin
function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/lib/css/admin.css');
  wp_enqueue_style('FONT AWESOME', get_template_directory_uri() . '/lib/css/font-awesome.min.css', false, '3.3.7');

}
add_action('admin_enqueue_scripts', 'admin_style');


/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return sprintf( '<br><a class="show-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Mostrar mais <i class="fa fa-th-large" aria-hidden="true"></i>', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );



/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );




if (!function_exists('serve_theme_setup')) {
	function serve_theme_setup() {
		register_nav_menus(array(
			'main_nav' => __('Main Navigation', 'Serve'),
			'footer_pages' => __('Footer Pages Navigation One', 'Serve'),
		));
		add_theme_support('custom-background', array('default-color' => 'fff'));
		add_post_type_support( 'page', 'excerpt' );
	 	remove_action('wp_head', 'wp_generator'); 
	 	add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-logo', array(
			'height'      => 73,
			'width'       => 94,
			'flex-width' => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );


	}
}

add_action('after_setup_theme', 'serve_theme_setup');



//ADICIONAR TAMANHO PERSONALIZADO

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'slide_size', 2000, 850, true ); //(cropped)
	add_image_size( 'obras_home', 555, 366, true ); //(cropped)
	add_image_size( 'simgle_thumb', 1134, 370, true ); //(cropped)
	add_image_size( 'gallery', 1170, 555, true ); //(cropped)
	add_image_size( 'galeria_moderda', 1600, false ); //(cropped)
	add_image_size( 'thumg_wow', 380, false ); //(cropped)

}

add_filter('image_size_names_choose', 'my_image_sizes');

function my_image_sizes($sizes) {
	$addsizes = array( 
		"slide_size" 	  => __( "Slide Size"), 
		"obras_home" 	  => __( "Obras Home"),
		"single_thumb" 	  => __( "Single Thumb" ),
		"gallery" 		  => __( "Galleria de Imagens" ),
		"thumg_wow" 	  => __( "Thumbnail WoW Slider" ),
		"galeria_moderda" => __("Galeria de imagens das Obras")
	);

	$newsizes = array_merge($sizes, $addsizes);
	return $newsizes;
}



// CUSTOM LOGO
function theme_prefix_the_custom_logo() { if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } }


// Opções do tema
$tutups_opcoes_tema = get_option( 'tutsup_opcoes_tema' );

// Função para verificar e retornar nossas opções
function tutsup_chk ( $array, $key ) {
	if ( isset( $array[$key] ) ) {
		return $array[$key];
	} else {
		return false;
	}
}

// Classe para carregar as opções
load_template( get_template_directory() . '/lib/classes/class-tutsup-opcoes-tema.php' );



function nav_menu_search($items, $args) {
    if( 'main_nav' === $args -> theme_location )
        $items .= '<li class="menu-item menu-item-search" id="nav-search">' . get_search_form(FALSE) . '</li>';
	return $items;
}
add_filter( 'wp_nav_menu_items', 'nav_menu_search', 10, 2 );

function nav_menu_contact($items, $args) {
    if( 'footer_pages' === $args -> theme_location )
        $items .= '<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-51" id="nav-search"> <a href="">VENHA ATÉ NÓS</a> <ul class="sub-menu"> <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-54"> Rua Silvio Marinho , nº 344 Jd. <br>Tangará - CEP 17516-020 <br>Marília/SP - Tel.: 14. 3301-7555 </li> </ul> </li>';
	return $items;
}
add_filter( 'wp_nav_menu_items', 'nav_menu_contact', 10, 2 );