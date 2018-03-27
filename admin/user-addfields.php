<?php // Afiliados RVC

add_action( 'show_user_profile', 'agregar_campos_perfil' );
add_action( 'edit_user_profile', 'agregar_campos_perfil' );
add_action( 'personal_options_update', 'guardar_campos_perfil' );
add_action( 'edit_user_profile_update', 'guardar_campos_perfil' );

function agregar_campos_perfil( $user ) {
	global $wpdb;
	$table_name = $wpdb->prefix . "codificadores";

	$user_sexo = esc_attr( get_the_author_meta( 'user_sexo', $user->ID ) );
	$user_identificacion = esc_attr( get_the_author_meta( 'user_identificacion', $user->ID ) );
	$user_lugarnacimiento = esc_attr( get_the_author_meta( 'user_lugarnacimiento', $user->ID ) );
	$user_fechanacimiento = esc_attr( get_the_author_meta( 'user_fechanacimiento', $user->ID ) );
	$user_fallecio = esc_attr( get_the_author_meta( 'user_fallecio', $user->ID ) );
	$user_direccion = esc_attr( get_the_author_meta( 'user_direccion', $user->ID ) );
	$user_telefono = esc_attr( get_the_author_meta( 'user_telefono', $user->ID ) );
	$user_celular = esc_attr( get_the_author_meta( 'user_celular', $user->ID ) );
	$user_email2 = esc_attr( get_the_author_meta( 'user_email2', $user->ID ) );

	$user_lugartrabajo = esc_attr( get_the_author_meta( 'user_lugartrabajo', $user->ID ) );
	$user_nombretrabajo = esc_attr( get_the_author_meta( 'user_nombretrabajo', $user->ID ) );
	$user_cargotrabajo = esc_attr( get_the_author_meta( 'user_cargotrabajo', $user->ID ) );
	$user_direcciontrabajo = esc_attr( get_the_author_meta( 'user_direcciontrabajo', $user->ID ) );
	$user_telefonotrabajo = esc_attr( get_the_author_meta( 'user_telefonotrabajo', $user->ID ) );

	$user_rni = esc_attr( get_the_author_meta( 'user_rni', $user->ID ) );
	$user_fecharni = esc_attr( get_the_author_meta( 'user_fecharni', $user->ID ) );
	$user_librorni = esc_attr( get_the_author_meta( 'user_librorni', $user->ID ) );
	$user_libropaginasrni = esc_attr( get_the_author_meta( 'user_libropaginasrni', $user->ID ) );
	$user_categoriarni = esc_attr( get_the_author_meta( 'user_categoriarni', $user->ID ) );
	$user_nivelrni = esc_attr( get_the_author_meta( 'user_nivelrni', $user->ID ) );
	$user_departamentalregistro = esc_attr( get_the_author_meta( 'user_departamentalregistro', $user->ID ) );
	$user_colegioespecialidad = esc_attr( get_the_author_meta( 'user_colegioespecialidad', $user->ID ) );

	$user_tituloacademico = esc_attr( get_the_author_meta( 'user_tituloacademico', $user->ID ) );
	$user_tituloacademicouniversidad = esc_attr( get_the_author_meta( 'user_tituloacademicouniversidad', $user->ID ) );
	$user_tituloacademicofecha = esc_attr( get_the_author_meta( 'user_tituloacademicofecha', $user->ID ) );
	$user_titulonacional = esc_attr( get_the_author_meta( 'user_titulonacional', $user->ID ) );
	$user_titulonacionaluniversidad = esc_attr( get_the_author_meta( 'user_titulonacionaluniversidad', $user->ID ) );
	$user_titulonacionalfecha = esc_attr( get_the_author_meta( 'user_titulonacionalfecha', $user->ID ) );

	$user_tallachamarra = esc_attr( get_the_author_meta( 'user_tallachamarra', $user->ID ) );
	$user_tallabuzo = esc_attr( get_the_author_meta( 'user_tallabuzo', $user->ID ) );
	$user_tallapolera = esc_attr( get_the_author_meta( 'user_tallapolera', $user->ID ) );

	$departamentales = $wpdb->get_results("SELECT * FROM $table_name WHERE tipo = 1 ORDER BY nombre; "); // 1 = Departamentales
	$colegios = $wpdb->get_results("SELECT * FROM $table_name WHERE tipo = 2 ORDER BY nombre; "); // 2 = Colegios de especialidad
	$niveles = $wpdb->get_results("SELECT * FROM $table_name WHERE tipo = 3 ORDER BY nombre; "); // 3 = Nivel
	$categorias = $wpdb->get_results("SELECT * FROM $table_name WHERE tipo = 4 ORDER BY nombre; "); // 4 = Categorias
	$universidades = $wpdb->get_results("SELECT * FROM $table_name WHERE tipo = 5 ORDER BY nombre; "); // 5 = Universidades

	require_once plugin_dir_path( __FILE__ ) . 'views/user-personal.php';
	require_once plugin_dir_path( __FILE__ ) . 'views/user-work.php';
	require_once plugin_dir_path( __FILE__ ) . 'views/user-register.php';
	require_once plugin_dir_path( __FILE__ ) . 'views/user-academic.php';
	require_once plugin_dir_path( __FILE__ ) . 'views/user-other.php';
}

function guardar_campos_perfil($user_id) {
	/*
	if ( isset($_POST['user_sexo']) && isset($_POST['user_identificacion']) && isset($_POST['user_lugarnacimiento']) && isset($_POST['user_fechanacimiento']) && isset($_POST['user_fallecio']) && isset($_POST['user_direccion']) && isset($_POST['user_telefono']) && isset($_POST['user_celular']) && isset($_POST['user_email2']) && isset($_POST['user_lugartrabajo']) && isset($_POST['user_nombretrabajo']) && isset($_POST['user_cargotrabajo']) && isset($_POST['user_direcciontrabajo']) && isset($_POST['user_telefonotrabajo']) && isset($_POST['user_rni']) && isset($_POST['user_fecharni']) && isset($_POST['user_librorni']) && isset($_POST['user_libropaginasrni']) && isset($_POST['user_categoriarni']) && isset($_POST['user_nivelrni']) && isset($_POST['user_departamentalregistro']) && isset($_POST['user_colegioespecialidad']) && isset($_POST['user_tituloacademico']) && isset($_POST['user_tituloacademicouniversidad']) && isset($_POST['user_tituloacademicofecha']) && isset($_POST['user_titulonacional']) && isset($_POST['user_titulonacionaluniversidad']) && isset($_POST['user_titulonacionalfecha']) && isset($_POST['user_tallachamarra']) && isset($_POST['user_tallabuzo']) && isset($_POST['user_tallapolera']) ) {
		*/

		update_user_meta($user_id, 'user_sexo', $_POST['user_sexo']);
		update_user_meta($user_id, 'user_identificacion', $_POST['user_identificacion']);
		update_user_meta($user_id, 'user_lugarnacimiento', $_POST['user_lugarnacimiento']);
		update_user_meta($user_id, 'user_fechanacimiento', $_POST['user_fechanacimiento']);
		update_user_meta($user_id, 'user_fallecio', $_POST['user_fallecio']);
		update_user_meta($user_id, 'user_direccion', $_POST['user_direccion']);
		update_user_meta($user_id, 'user_telefono', $_POST['user_telefono']);
		update_user_meta($user_id, 'user_celular', $_POST['user_celular']);
		update_user_meta($user_id, 'user_email2', $_POST['user_email2']);
		update_user_meta($user_id, 'user_lugartrabajo', $_POST['user_lugartrabajo']);
		update_user_meta($user_id, 'user_nombretrabajo', $_POST['user_nombretrabajo']);
		update_user_meta($user_id, 'user_cargotrabajo', $_POST['user_cargotrabajo']);
		update_user_meta($user_id, 'user_direcciontrabajo', $_POST['user_direcciontrabajo']);
		update_user_meta($user_id, 'user_telefonotrabajo', $_POST['user_telefonotrabajo']);
		update_user_meta($user_id, 'user_rni', $_POST['user_rni']);
		update_user_meta($user_id, 'user_fecharni', $_POST['user_fecharni']);
		update_user_meta($user_id, 'user_librorni', $_POST['user_librorni']);
		update_user_meta($user_id, 'user_libropaginasrni', $_POST['user_libropaginasrni']);
		update_user_meta($user_id, 'user_categoriarni', $_POST['user_categoriarni']);
		update_user_meta($user_id, 'user_nivelrni', $_POST['user_nivelrni']);
		update_user_meta($user_id, 'user_departamentalregistro', $_POST['user_departamentalregistro']);
		update_user_meta($user_id, 'user_colegioespecialidad', $_POST['user_colegioespecialidad']);
		update_user_meta($user_id, 'user_tituloacademico', $_POST['user_tituloacademico']);
		update_user_meta($user_id, 'user_tituloacademicouniversidad', $_POST['user_tituloacademicouniversidad']);
		update_user_meta($user_id, 'user_tituloacademicofecha', $_POST['user_tituloacademicofecha']);
		update_user_meta($user_id, 'user_titulonacional', $_POST['user_titulonacional']);
		update_user_meta($user_id, 'user_titulonacionaluniversidad', $_POST['user_titulonacionaluniversidad']);
		update_user_meta($user_id, 'user_titulonacionalfecha', $_POST['user_titulonacionalfecha']);
		update_user_meta($user_id, 'user_tallachamarra', $_POST['user_tallachamarra']);
		update_user_meta($user_id, 'user_tallabuzo', $_POST['user_tallabuzo']);
		update_user_meta($user_id, 'user_tallapolera', $_POST['user_tallapolera']);
	//}
}
