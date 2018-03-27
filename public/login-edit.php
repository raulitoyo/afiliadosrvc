<?php // Afiliados RVC
	$current_user = wp_get_current_user();
?>

<div class="afiliadosrvc-container afiliadosrvc-full-width">
	<form class="afiliadosrvc-form" method="post" action="#">

		<h4>
		<?php 
			echo __( 'General information', 'afiliadosrvc' ); 
			echo '<br>';
			echo __( 'Name', 'afiliadosrvc' ); 
			echo ': ' . $current_user->user_firstname . ' ' . $current_user->user_lastname . '<br>';
		?>
		</h4>		

		<fieldset>
		
			<div class="afiliadosrvc-field">
				<label><?php echo __( 'Address', 'afiliadosrvc' ); ?></label>
				<input type="text" name="user_direccion" value="<?php echo $current_user->user_direccion; ?>">
			</div>
			
			<div class="afiliadosrvc-field">
				<label><?php echo __( 'Phone', 'afiliadosrvc' ); ?></label>
				<input type="text" name="user_telefono" value="<?php echo $current_user->user_telefono; ?>">
			</div>
						
			<div class="afiliadosrvc-field">
				<label><?php echo __( 'Cell phone', 'afiliadosrvc' ); ?></label>
				<input type="text" name="user_celular" value="<?php echo $current_user->user_celular; ?>">
			</div>
			
			<div class="afiliadosrvc-field">
				<label><?php echo __( 'E-mail', 'afiliadosrvc' ); ?></label>
				<input type="text" name="user_email2" value="<?php echo $current_user->user_email2; ?>">
			</div>
			
			<div class="afiliadosrvc-field">
				<label><?php echo __( 'Work place', 'afiliadosrvc' ); ?></label>
				<input type="text" name="user_lugartrabajo" value="<?php echo $current_user->user_lugartrabajo; ?>">
			</div>
			
			<div class="afiliadosrvc-field">
				<label><?php echo __( 'Work name', 'afiliadosrvc' ); ?></label>
				<input type="text" name="user_nombretrabajo" value="<?php echo $current_user->user_nombretrabajo; ?>">
			</div>
						
			<div class="afiliadosrvc-field">
				<label><?php echo __( 'Work address', 'afiliadosrvc' ); ?></label>
				<input type="text" name="user_direcciontrabajo" value="<?php echo $current_user->user_direcciontrabajo; ?>">
			</div>
			
			<div class="afiliadosrvc-field">
				<label><?php echo __( 'Work phone', 'afiliadosrvc' ); ?></label>
				<input type="text" name="user_telefonotrabajo" value="<?php echo $current_user->user_telefonotrabajo; ?>">
			</div>


			<div class="afiliadosrvc-field">
				<label><?php echo __( 'Tall jacket', 'afiliadosrvc' ); ?></label>
				<input type="text" name="user_tallachamarra" value="<?php echo $current_user->user_tallachamarra; ?>">
			</div>
						
			<div class="afiliadosrvc-field">
				<label><?php echo __( 'Tall diver', 'afiliadosrvc' ); ?></label>
				<input type="text" name="user_tallabuzo" value="<?php echo $current_user->user_tallabuzo; ?>">
			</div>
			
			<div class="afiliadosrvc-field">
				<label><?php echo __( 'Tall shirt', 'afiliadosrvc' ); ?></label>
				<input type="text" name="user_tallapolera" value="<?php echo $current_user->user_tallapolera; ?>">
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

