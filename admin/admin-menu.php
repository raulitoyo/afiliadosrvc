<?php // Afiliados RVC

// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

//add menu settings
function afiliadosrvc_menu() {
    add_options_page( 'Afiliados RVC Options', 'Afiliados RVC', 'manage_options', 'afiliadosrvc_menu', 'afiliadosrvc_options' );
}
add_action( 'admin_menu', 'afiliadosrvc_menu' );

function afiliadosrvc_options() {
    // No debería ser necesario, pero no está de más
    if (!current_user_can('manage_options')){
        wp_die( __('Admin area', 'afiliadosrvc') );
    }

    // Comprobar el estado del plugin y mostrarlo
    $login_url = get_option( 'cl_login_url');
	$edit_url = get_option( 'cl_edit_url');
    ?>

	<h2><?php echo __( 'Options', 'afiliadosrvc' ); ?></h2>

    <?php

    $hidden_field_name = 'cl_hidden_field';
    $hidden_field_value = 'hidden_field_to_update_others';

    if( isset($_POST[ $hidden_field_name ]) && $_POST[ $hidden_field_name ] == $hidden_field_value ) {

        update_option( 'cl_adminbar', isset( $_POST['adminbar'] ) ? $_POST['adminbar'] : '' );
		echo '<div class="updated"><p><strong>'. __( 'Settings saved.', 'afiliadosrvc' ) .'</strong></p></div>';
    }

    // Recoger las opciones del plugin
    $adminbar = get_option( 'cl_adminbar' , 'on' );

    ?>
    	<form name="form1" method="post" action="">
    	<table class="form-table">
			<tbody>
				<tr>
					<th scope="row"><?php echo __( 'Admin bar', 'afiliadosrvc' ); ?></th>
					<td>
						<label><input name="adminbar" type="checkbox" id="adminbar" <?php if( $adminbar == 'on' ) echo 'checked="checked"'; ?>><?php echo __( 'Hide admin bar for non-admin users?', 'afiliadosrvc' ); ?></label>
					</td>
				</tr>
			</tbody>
		</table>
		<input type="hidden" name="<?php echo $hidden_field_name; ?>" value="<?php echo $hidden_field_value; ?>">

	    <p class="submit"><input type="submit" name="Submit" class="button-primary" value="<?php echo __( 'Save Changes', 'afiliadosrvc' ); ?>" /></p>
        </form>

    </div>
	<?php
}
