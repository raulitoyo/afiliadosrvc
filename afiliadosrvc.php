<?php
/*
Plugin Name:  Afiliados RVC
Description:  Registro de afiliados, de una organización de profesionales que permite agregar campos adicionales de los usuarios registrados (Personales, Formación académica y otros datos de interés). Desde la pagina principal a traves del shortcodes [afiliadosrvc-edit] puede modificar algunos datos cambiables
Plugin URI:   https://github.com/raulitoyo/afiliadosrvc
Author:       Raul Vargas Choquilla
Version:      1.0
Text Domain:  afiliadosrvc
Domain Path:  /languages
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
*/


// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

function codificadores_install()
{
    global $wpdb;
    $table_name = $wpdb->prefix . "codificadores";
   
    $sql = " CREATE TABLE `$table_name` (
			  `id` int(11) NOT NULL,
			  `nombre` char(250) NOT NULL,
			  `tipo` int(11) NOT NULL,
			  `abreviacion` char(50) DEFAULT NULL,
			  `fecha` date NOT NULL DEFAULT '2017-01-01',
			  `vigente` tinyint(4) NOT NULL DEFAULT '1',
			  PRIMARY KEY ( `id` )	
			); ";

   require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
   dbDelta($sql);
   
   //Cargamos datos iniciales
   cargaDatosIniciales();
}

function cargaDatosIniciales()
{
	global $wpdb;
    $table_name = $wpdb->prefix . "codificadores";

	$sql = " INSERT INTO `$table_name` (`id`, `nombre`, `tipo`, `abreviacion`, `fecha`, `vigente`) VALUES
			(1, '--- NO DEFINIDO', 1, 'ND', '2017-01-01', 1),
			(2, 'CHUQUISACA', 1, 'CH', '2017-01-01', 1),
			(3, 'LA PAZ', 1, 'LP', '2017-01-01', 1),
			(4, 'ORURO', 1, 'OR', '2017-01-01', 1),
			(5, 'POTOSI', 1, 'PT', '2017-01-01', 1),
			(6, 'COCHABAMBA', 1, 'CO', '2017-01-01', 1),
			(7, 'TARIJA', 1, 'TJ', '2017-01-01', 1),
			(8, 'SANTA CRUZ', 1, 'SC', '2017-01-01', 1),
			(9, 'BENI', 1, 'BE', '2017-01-01', 1),
			(10, 'PANDO', 1, 'PA', '2017-01-01', 1),
			(11, '--- NO DEFINIDO', 2, '', '2017-01-01', 1),
			(12, 'CIVILES', 2, '', '2017-01-01', 1),
			(13, 'COMERCIALES', 2, '', '2017-01-01', 1),
			(14, 'ELECTRICOS Y ELECTRONICOS', 2, '', '2017-01-01', 1),
			(15, 'GEOLOGOS', 2, '', '2017-01-01', 1),
			(16, 'INDUSTRIALES', 2, '', '2017-01-01', 1),
			(17, 'MECANICOS', 2, '', '2017-01-01', 1),
			(18, 'QUIMICOS', 2, '', '2017-01-01', 1),
			(19, 'SISTEMAS E INFORMATICA', 2, '', '2017-01-01', 1),
			(20, 'AMBIENTALES', 2, '', '2017-01-01', 1),
			(21, '--- NO DEFINIDO', 3, '', '2017-01-01', 1),
			(22, 'I', 3, '', '2017-01-01', 1),
			(23, 'II', 3, '', '2017-01-01', 1),
			(24, 'III', 3, '', '2017-01-01', 1),
			(25, 'IV', 3, '', '2017-01-01', 1),
			(26, 'V', 3, '', '2017-01-01', 1),
			(27, 'VI', 3, '', '2017-01-01', 1),
			(28, 'VII', 3, '', '2017-01-01', 1),
			(29, 'VIII', 3, '', '2017-01-01', 1),
			(30, 'IX', 3, '', '2017-01-01', 1),
			(31, 'X', 3, '', '2017-01-01', 1),
			(32, 'XI', 3, '', '2017-01-01', 1),
			(33, 'XII', 3, '', '2017-01-01', 1),
			(34, 'XIII', 3, '', '2017-01-01', 1),
			(35, 'XIV', 3, '', '2017-01-01', 1),
			(36, 'XV', 3, '', '2017-01-01', 1),
			(37, 'XVI', 3, '', '2017-01-01', 1),
			(38, 'XVII', 3, '', '2017-01-01', 1),
			(39, 'XVII', 3, '', '2017-01-01', 1),
			(40, 'XVIII', 3, '', '2017-01-01', 1),
			(41, 'XIX', 3, '', '2017-01-01', 1),
			(42, 'XX', 3, '', '2017-01-01', 1),
			(43, '--- NO DEFINIDO', 4, '', '2017-01-01', 1),
			(44, 'IS', 4, '', '2017-01-01', 1),
			(45, 'TS', 4, '', '2017-01-01', 1),
			(46, 'IA', 4, '', '2017-01-01', 1),
			(47, 'LI', 4, '', '2017-01-01', 1),
			(48, '--- NO DEFINIDO', 5, '', '2017-01-01', 1),
			(49, 'ACADEMIA AGRICOLA DE MOSCU', 5, '', '2017-01-01', 1),
			(50, 'ACADEMIA DE MINAS DE FREIBERG', 5, '', '2017-01-01', 1),
			(51, 'ESCUELA MILITAR DE INGENIERIA MARISCAL ANTONIO JOSE DE SUCRE', 5, '', '2017-01-01', 1),
			(52, 'ESCUELA AGRICOLA PANAMERICANO ZAMORANO', 5, '', '2017-01-01', 1),
			(53, 'ESC.IND. PEDRO DOMINGO MURILLO', 5, '', '2017-01-01', 1),
			(54, 'ESCUELA ESTATAL DE INGENIERIA', 5, '', '2017-01-01', 1),
			(55, 'ESCUELA PANAMERICANA AGRICOLA', 5, '', '2017-01-01', 1),
			(56, 'ESCUELA POLITECNICA DE LAUSANE', 5, '', '2017-01-01', 1),
			(57, 'INSTITUTO JOSE ANTONIO ECHEVERRIA', 5, '', '2017-01-01', 1),
			(58, 'INSTITUTO AGRICULTURA KISHINEV', 5, '', '2017-01-01', 1),
			(59, 'INSTITUTO POLITECNICO DE DONIETSK', 5, '', '2017-01-01', 1),
			(60, 'INSTITUTO POLITECNICO DE ODESA', 5, '', '2017-01-01', 1),
			(61, 'INSTITUTO POLITECNICO TOMAS KATARI', 5, '', '2017-01-01', 1),
			(62, 'INSTITUTO SUPERIOR CONSTRUCION Y MAQUINARIA CHUVAR', 5, '', '2017-01-01', 1),
			(63, 'INSTITUTO SUPERIOR CONSTRUCION Y MAQUINARIA ZAPOROSHI', 5, '', '2017-01-01', 1),
			(64, 'INSTITUTO SUPERIOR DE AGRICULTURA TASHKENT', 5, '', '2017-01-01', 1),
			(65, 'INSTITUTO CETA', 5, '', '2017-01-01', 1),
			(66, 'TECNICA DE BUDAPEST', 5, '', '2017-01-01', 1),
			(67, 'TECNICA DE MISCOLC', 5, '', '2017-01-01', 1),
			(68, 'TECNICA ESTATAL DONETSK', 5, '', '2017-01-01', 1),
			(69, 'U. M. R. P. S. F. X. CH.', 5, '', '2017-01-01', 1),
			(70, 'UNIVERSIDAD NACIONAL EXPERIMENTAL RAFAEL MARIA BARALT', 5, '', '2017-01-01', 1),
			(71, 'UNIVERSIDAD TECNICA DE ORURO', 5, '', '2017-01-01', 1),
			(72, 'UNIVERSIDAD DO ESTADO DO RIO DE JANEIRO', 5, '', '2017-01-01', 1),
			(73, 'UNIVERSIDAD POLITECNICA DE CATALUÑA', 5, '', '2017-01-01', 1),
			(74, 'UNIVERSIDAD PRIVADA DE SANTA CRUZ DE LA SIERRA', 5, '', '2017-01-01', 1),
			(75, 'UNIVERSIDAD AGRICOLA WABENINGEN', 5, '', '2017-01-01', 1),
			(76, 'UNIVERSIDAD AUTONOMA GABRIEL RENE MORENO', 5, '', '2017-01-01', 1),
			(77, 'UNIVERSIDAD AUTONOMA JUAN MISAEL SARACHO', 5, '', '2017-01-01', 1),
			(78, 'UNIVERSIDAD AUTONOMA TOMAS FRIAS', 5, '', '2017-01-01', 1),
			(79, 'UNIVERSIDAD AUTONOMA METROPOLITANA', 5, '', '2017-01-01', 1),
			(80, 'UNIVERSIDAD BOLIVIANA DE INFORMATICA', 5, '', '2017-01-01', 1),
			(81, 'UNIVERSIDAD CATOLICA DE LOUVANIA', 5, '', '2017-01-01', 1),
			(82, 'UNIVERSIDAD CATOLICA BOLIVIANA SAN PABLO', 5, '', '2017-01-01', 1),
			(83, 'UNIVERSIDAD CATOLICA DE CHILE', 5, '', '2017-01-01', 1),
			(84, 'UNIVERSIDAD CATOLICA DE SALTA', 5, '', '2017-01-01', 1),
			(85, 'UNIVERSIDAD DE AQUINO BOLIVIA', 5, '', '2017-01-01', 1),
			(86, 'UNIVERSIDAD DE BRASIL', 5, '', '2017-01-01', 1),
			(87, 'UNIVERSIDAD DE CHILE', 5, '', '2017-01-01', 1),
			(88, 'UNIVERSIDAD DE GINEBRA', 5, '', '2017-01-01', 1),
			(89, 'UNIVERSIDAD DE RIO GRANDE DEL SUR', 5, '', '2017-01-01', 1),
			(90, 'UNIVERSIDAD DEL ESTADO FEDERAL DE HES', 5, '', '2017-01-01', 1),
			(91, 'UNIVERSIDAD DEL NORTE SANTO TOMAS DE AQUINO', 5, '', '2017-01-01', 1),
			(92, 'UNIVERSIDAD ESTATAL POLITECNICA DE OD', 5, '', '2017-01-01', 1),
			(93, 'UNIVERSIDAD FEDERAL DE FLUMINENSE', 5, '', '2017-01-01', 1),
			(94, 'UNIVERSIDAD FEDERAL DE PARANA', 5, '', '2017-01-01', 1),
			(95, 'UNIVERSIDAD FEDERAL DE PERNAMBUCO', 5, '', '2017-01-01', 1),
			(96, 'UNIVERSIDAD FEDERAL DE SANTA MARIA', 5, '', '2017-01-01', 1),
			(97, 'UNIVERSIDAD LOYOLA', 5, '', '2017-01-01', 1),
			(98, 'UNIVERSIDAD MAYOR DE SAN ANDRES', 5, '', '2017-01-01', 1),
			(99, 'UNIVERSIDAD MAYOR DE SAN SIMON', 5, '', '2017-01-01', 1),
			(100, 'UNIVERSIDAD NACIONAL AUTONOMA DE MEXICO', 5, '', '2017-01-01', 1),
			(101, 'UNIVERSIDAD NACIONAL DE CORDOBA', 5, '', '2017-01-01', 1),
			(102, 'UNIVERSIDAD NACIONAL DE LA PLATA', 5, '', '2017-01-01', 1),
			(103, 'UNIVERSIDAD NACIONAL DE NORDESTE', 5, '', '2017-01-01', 1),
			(104, 'UNIVERSIDAD NACIONAL DE SALTA', 5, '', '2017-01-01', 1),
			(105, 'UNIVERSIDAD NACIONAL DE SIGLO XX', 5, '', '2017-01-01', 1),
			(106, 'UNIVERSIDAD NUR', 5, '', '2017-01-01', 1),
			(107, 'UNIVERSIDAD PATRICIO LUMUMBA', 5, '', '2017-01-01', 1),
			(108, 'UNIVERSIDAD PRIVADA BOLIVIANA', 5, '', '2017-01-01', 1),
			(109, 'UNIVERSIDAD PRIVADA DEL VALLE', 5, '', '2017-01-01', 1),
			(110, 'UNIVERSIDAD RENANA GUILLERMO FEDERICO', 5, '', '2017-01-01', 1);
 		";

   dbDelta($sql);
}
register_activation_hook(__FILE__,'codificadores_install');


function codificadores_uninstall()
{
	global $wpdb; 
	$table_name = $wpdb->prefix . "codificadores";
	
	$sql = "DROP TABLE $table_name";
	$wpdb->query($sql);
}
register_deactivation_hook(__FILE__,'codificadores_uninstall');



// load text domain
function myplugin_load_textdomain() {

	load_plugin_textdomain( 'afiliadosrvc', false, plugin_dir_path( __FILE__ ) . 'languages/' );

}
add_action( 'plugins_loaded', 'myplugin_load_textdomain' );



// include plugin dependencies: admin only
if ( is_admin() ) {
	
	require_once plugin_dir_path( __FILE__ ) . 'admin/user-addfields.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/user-aditional.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
}


function afiliadosrvc_enqueue_style() {
    wp_register_style( 'afiliadosrvc-css', plugins_url( 'public/css/style.css', __FILE__ ) );
    wp_enqueue_style( 'afiliadosrvc-css' );
}
add_action( 'wp_enqueue_scripts', 'afiliadosrvc_enqueue_style' ); 

/**
 * [afiliadosrvc-edit] shortcode
 */
function show_afiliadosrvc_edit($atts) {
	
	ob_start();

	if ( isset( $_GET['updated'] ) ) {
		if ( $_GET['updated'] == 'success' )
			echo "<div class='afiliadosrvc-notification success'><p>". __( 'Information updated', 'afiliadosrvc' ) ."</p></div>";
		else if ( $_GET['updated'] == 'passcomplex' )
			echo "<div class='afiliadosrvc-notification error'><p>". __( 'Passwords must be eight characters including one upper/lowercase letter, one special/symbol character and alphanumeric characters. Passwords should not contain the user\'s username, email, or first/last name.', 'afiliadosrvc' ) ."</p></div>";
		else if ( $_GET['updated'] == 'wrongpass' )
			echo "<div class='afiliadosrvc-notification error'><p>". __( 'Passwords must be identical', 'afiliadosrvc' ) ."</p></div>";
		else if ( $_GET['updated'] == 'wrongmail' )
			echo "<div class='afiliadosrvc-notification error'><p>". __( 'Error updating email', 'afiliadosrvc' ) ."</p></div>";
		else if ( $_GET['updated'] == 'failed' )
			echo "<div class='afiliadosrvc-notification error'><p>". __( 'Something strange has ocurred', 'afiliadosrvc' ) ."</p></div>";
	}

	if ( is_user_logged_in() ) {
		get_template_file( 'login-edit.php' );
	} else {
		echo "<div class='afiliadosrvc-notification error'><p>". __( 'You need to be logged in to edit your profile', 'afiliadosrvc' ) ."</p></div>";
		get_template_file( 'login-form.php' );
		/*$login_url = get_option( 'cl_login_url', '');
		if ( $login_url != '' )
			echo "<script>window.location = '$login_url'</script>";*/
	}

	return ob_get_clean();

}
add_shortcode('afiliadosrvc-edit', 'show_afiliadosrvc_edit');


/**
 * Custom code to be loaded before headers
 */
function afiliadosrvc_load_before_headers() {
	global $wp_query; 
	if ( is_singular() ) { 
		$post = $wp_query->get_queried_object(); 
		// If contains any shortcode of our ones
		if ( strpos($post->post_content, 'afiliadosrvc' ) !== false || strpos($post->post_content, 'afiliadosrvc' ) !== false) {

			// Sets the redirect url to the current page 
			$url = afiliadosrvc_url_cleaner( wp_get_referer() );

			// LOGIN
			if ( isset( $_REQUEST['action'] ) && $_REQUEST['action'] == 'login' ) {
				$url = get_translated_option_page( 'cl_login_url','');
				
				$user = wp_signon();
				if ( is_wp_error( $user ) )
					$url = esc_url( add_query_arg( 'authentication', 'failed', $url ) );
				else {
					// if the user is disabled
					if( empty($user->roles) ) {
						wp_logout();
						$url = esc_url( add_query_arg( 'authentication', 'disabled', $url ) );
					}
					else 
						$url = get_option('cl_login_redirect', false) ? esc_url(apply_filters('cl_login_redirect_url', get_translated_option_page('cl_login_redirect_url'), $user)): esc_url( add_query_arg( 'authentication', 'success', $url ) );
				}
					

				wp_safe_redirect( $url );

			// LOGOUT
			} else if ( isset( $_REQUEST['action'] ) && $_REQUEST['action'] == 'logout' ) {
				wp_logout();
				$url = esc_url( add_query_arg( 'authentication', 'logout', $url ) );
				
				wp_safe_redirect( $url );

			// EDIT profile
			} else if ( isset( $_REQUEST['action'] ) && $_REQUEST['action'] == 'edit' ) {
				$url = esc_url( add_query_arg( 'updated', 'success', $url ) );

				$current_user = wp_get_current_user();
				$userdata = array( 'ID' => $current_user->ID );

				$user_direccion = isset( $_POST['user_direccion'] ) ? $_POST['user_direccion'] : '';
				$user_telefono = isset( $_POST['user_telefono'] ) ? $_POST['user_telefono'] : '';
				$userdata['user_direccion'] = $user_direccion;
				$userdata['user_telefono'] = $user_telefono;
			
			/*
				$email = isset( $_POST['user_email2'] ) ? $_POST['user_email2'] : '';
				if ( ! $email || empty ( $email ) ) {
					$url = esc_url( add_query_arg( 'updated', 'wrongmail', $url ) );
				} elseif ( ! is_email( $email ) ) {
					$url = esc_url( add_query_arg( 'updated', 'wrongmail', $url ) );
				} elseif ( ( $email != $current_user->user_email2 ) && email_exists( $email ) ) {
					$url = esc_url( add_query_arg( 'updated', 'wrongmail', $url ) );
				} else {
					$userdata['user_email2'] = $email;
				}
				*/

				// check if password complexity is checked
				$enable_passcomplex = get_option( 'cl_passcomplex' ) == 'on' ? true : false;

				// password checker
				if ( isset( $_POST['pass1'] ) && ! empty( $_POST['pass1'] ) ) {
					if ( ! isset( $_POST['pass2'] ) || ( isset( $_POST['pass2'] ) && $_POST['pass2'] != $_POST['pass1'] ) ) {
						$url = esc_url( add_query_arg( 'updated', 'wrongpass', $url ) );
					}
					else {
						if( $enable_passcomplex && !is_password_complex($_POST['pass1']) )
							$url = esc_url( add_query_arg( 'updated', 'passcomplex', $url ) );
						else
							$userdata['user_pass'] = $_POST['pass1'];
					}
					
				}

				$user_id = wp_update_user( $userdata );
				if ( is_wp_error( $user_id ) ) {
					$url = esc_url( add_query_arg( 'updated', 'failed', $url ) );
				}

				wp_safe_redirect( $url );
			} 
		} 
	}
}
add_action('template_redirect', 'afiliadosrvc_load_before_headers');

/**
 * Cleans an url
 */
function afiliadosrvc_url_cleaner( $url ) {
	$query_args = array(
		'authentication',
		'updated',
		//'created',
		'sent'
		//,
		//'restore'
	);
	return esc_url( remove_query_arg( $query_args, $url ) );
}

/**
 * It will only display the admin bar for users with administrative privileges
 */
function afiliadosrvc_remove_admin_bar() {
	$remove_adminbar = get_option( 'cl_adminbar' ) == 'on' ? true : false;

	if ( $remove_adminbar && !current_user_can( 'manage_options' ) )
    	show_admin_bar( false );
}
add_action('after_setup_theme', 'afiliadosrvc_remove_admin_bar');

/**
 * It will only enable the dashboard for users with administrative privileges
 * Please note that you can only log in through wp-login.php and this plugin
 */
function afiliadosrvc_block_dashboard_access() {
	$block_dashboard = get_option( 'cl_dashboard' ) == 'on' ? true : false;

	if ( $block_dashboard && !current_user_can( 'manage_options' ) && ( !defined( 'DOING_AJAX' ) || !DOING_AJAX ) ) {
		wp_redirect( home_url() );
		exit;
	}
}
add_action( 'admin_init', 'afiliadosrvc_block_dashboard_access', 1 );

/**
 * session_start();
 */
function afiliadosrvc_register_session(){
    if( !session_id() )
        session_start();
}
add_action('init','afiliadosrvc_register_session');

/**
 * Detect shortcodes and update the plugin options
 */
function afiliadosrvc_get_pages_with_shortcodes( $post_id ) {

	$revision = wp_is_post_revision( $post_id );

	if ( $revision ) $post_id = $revision;
	
	$post = get_post( $post_id );

	if ( has_shortcode( $post->post_content, 'afiliadosrvc' ) ) {
		update_option( 'cl_login_url', get_permalink( $post->ID ) );
	}

	if ( has_shortcode( $post->post_content, 'afiliadosrvc-edit' ) ) {
		update_option( 'cl_edit_url', get_permalink( $post->ID ) );
	}
}
add_action( 'save_post', 'afiliadosrvc_get_pages_with_shortcodes' );

/**
* Add plugin text domain
*/
function afiliadosrvc_load_textdomain(){
	load_plugin_textdomain( 'afiliadosrvc', false, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );
}
add_action( 'plugins_loaded', 'afiliadosrvc_load_textdomain' );


/***********************************
 * template file overriding support
 */
function get_template_file($template, $param = false){
	if ( $overridden_template = locate_template( 'afiliadosrvc/'.$template ) ) {
		require($overridden_template);
	} else {
		require('public/'.$template);
	}
}


/**
 * WPML redirection support
 */
function get_translated_option_page($page, $param = false) {
	$url = get_option($page, $param);
	//if WPML is installed get the page translation
	if (!function_exists('icl_object_id')) {
		return $url;
	} else {
		//get the page ID
		$pid = url_to_postid( $page ); 
		//set the translated urls
		return get_permalink( icl_object_id( $pid, 'page', false, ICL_LANGUAGE_CODE ) );
	}
}




