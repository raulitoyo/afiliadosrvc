<?php // Afiliados RVC
	$current_user = wp_get_current_user();
?>

<div class="afiliadosrvc-container afiliadosrvc-full-width">
	<form class="afiliadosrvc-form" method="post" action="#">

		<h4><?php echo __( 'General information', 'afiliadosrvc' ); ?></h4>

		<fieldset>
		
			<div class="afiliadosrvc-field">
				<label><?php echo __( 'First name', 'afiliadosrvc' ); ?></label>
				<input type="text" name="first_name" value="<?php echo $current_user->user_firstname; ?>">
			</div>
			
			<div class="afiliadosrvc-field">
				<label><?php echo __( 'Last name', 'afiliadosrvc' ); ?></label>
				<input type="text" name="last_name" value="<?php echo $current_user->user_lastname; ?>">
			</div>
						
			<div class="afiliadosrvc-field">
				<label><?php echo __( 'Age', 'afiliadosrvc' ); ?></label>
				<input type="text" name="user_edad" value="<?php echo $current_user->user_edad; ?>">
			</div>
			
			<div class="afiliadosrvc-field">
				<label><?php echo __( 'E-mail', 'afiliadosrvc' ); ?></label>
				<input type="text" name="email" value="<?php echo $current_user->user_email; ?>">
			</div>
			
		</fieldset>

		<h4><?php echo __( 'Change password', 'afiliadosrvc' ); ?></h4>
		
		<p class="afiliadosrvc-form-description"><?php echo __( "If you would like to change the password type a new one. Otherwise leave this blank.", 'afiliadosrvc' ); ?></p>
		
		<fieldset>
		
			<div class="afiliadosrvc-field">
				<label><?php echo __( 'New password', 'afiliadosrvc' ); ?></label>
				<input type="password" name="pass1" value="" autocomplete="off">
			</div>
			
			<div class="afiliadosrvc-field">
				<label><?php echo __( 'Confirm password', 'afiliadosrvc' ); ?></label>
				<input type="password" name="pass2" value="" autocomplete="off">
			</div>
		
		</fieldset>
		
		<div>	
			<input type="submit" value="<?php echo __( 'Update profile', 'afiliadosrvc' ); ?>" name="submit">
			<input type="hidden" name="action" value="edit">		
		</div>

	</form>
</div>