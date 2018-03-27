<?php // Afiliados RVC
	$login_url = get_translated_option_page( 'cl_login_url','');
?>
<div class="afiliadosrvc-container">		

	<form class="afiliadosrvc-form" method="post" action="<?php echo $login_url;?>">
			
		<fieldset>
			<div class="afiliadosrvc-field">
				<input class="afiliadosrvc-field-username" type="text" name="log" placeholder="<?php echo __( 'Username', 'afiliadosrvc' ); ?>">
			</div>
			
			<div class="afiliadosrvc-field">
				<input class="afiliadosrvc-field-password" type="password" name="pwd" placeholder="<?php echo __( 'Password', 'afiliadosrvc' ); ?>">
			</div>
		</fieldset>
		
		<fieldset>
			<input class="afiliadosrvc-field" type="submit" value="<?php echo __( 'Log in', 'afiliadosrvc' ); ?>" name="submit">
			<input type="hidden" name="action" value="login">
			
			<div class="afiliadosrvc-field afiliadosrvc-field-remember">
				<input type="checkbox" name="rememberme" value="forever">
				<label><?php echo __( 'Remember?', 'afiliadosrvc' ); ?></label>
			</div>
		</fieldset>
		
		<?php echo do_shortcode( apply_filters( 'cl_login_form', '') ); ?>
		
	</form>

</div>
