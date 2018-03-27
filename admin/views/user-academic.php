

	<h3><?php echo __( 'ACADEMIC INFORMATION', 'afiliadosrvc' ); ?></h3>
	<table class="form-table">
		<tr>
			<th><label for="tituloacademico"><?php echo __( 'Academic title', 'afiliadosrvc' ); ?></label></th>
			<td>
				<input type="text" name="user_tituloacademico" id="user_tituloacademico" class="input" value="<?php echo $user_tituloacademico; ?>" size="40" />
				<span class="description"></span>
			</td>
		</tr>
		<tr>
			<th><label for="tituloacademicouniversidad"><?php echo __( 'Academic degree', 'afiliadosrvc' ); ?></label></th>
			<td>
				<select name='user_tituloacademicouniversidad'>
				<?php
					foreach ($universidades as $universidad) {
				?>
					<option value=<?php echo $universidad->id; if($universidad->id==$user_tituloacademicouniversidad) { echo ' selected'; } ?> > <?php echo $universidad->nombre; ?> </option>
				<?php }?>
				<span class="description"></span>
			</td>
		</tr>
		<tr>
			<th><label for="tituloacademicofecha"><?php echo __( 'Academic title date', 'afiliadosrvc' ); ?></label></th>
			<td>
				<input type="text" name="user_tituloacademicofecha" id="user_tituloacademicofecha" class="input" value="<?php echo $user_tituloacademicofecha; ?>" size="10" />
				<span class="description"><?php echo __( 'Day, month and year (dd/MM/aaa)', 'afiliadosrvc' ); ?></span>
			</td>
		</tr>
		<tr>
			<th><label for="titulonacional"><?php echo __( 'National provision title', 'afiliadosrvc' ); ?></label></th>
			<td>
				<input type="text" name="user_titulonacional" id="user_titulonacional" class="input" value="<?php echo $user_titulonacional; ?>" size="40" />
				<span class="description"></span>
			</td>
		</tr>
		<tr>
			<th><label for="titulonacionaluniversidad"><?php echo __( 'University national provision title', 'afiliadosrvc' ); ?></label></th>
			<td>
				<select name='user_titulonacionaluniversidad'>
				<?php
					foreach ($universidades as $universidad) {
				?>
					<option value=<?php echo $universidad->id; if($universidad->id==$user_titulonacionaluniversidad) { echo ' selected'; } ?> > <?php echo $universidad->nombre; ?> </option>
				<?php }?>
				<span class="description"></span>
			</td>
		</tr>
		<tr>
			<th><label for="titulonacionalfecha"><?php echo __( 'Date national provision title', 'afiliadosrvc' ); ?></label></th>
			<td>
				<input type="text" name="user_titulonacionalfecha" id="user_titulonacionalfecha" class="input" value="<?php echo $user_titulonacionalfecha; ?>" size="10" />
				<span class="description"><?php echo __( 'Day, month and year (dd/MM/aaa)', 'afiliadosrvc' ); ?></span>
			</td>
		</tr>
	</table>
