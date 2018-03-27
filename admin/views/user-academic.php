

	<h3>INFORMACION ACADEMICA</h3>
	<table class="form-table">
		<tr>
			<th><label for="tituloacademico">T&iacute;tulo acad&eacute;mico</label></th>
			<td>
				<input type="text" name="user_tituloacademico" id="user_tituloacademico" class="input" value="<?php echo $user_tituloacademico; ?>" size="40" />
				<span class="description"></span>
			</td>
		</tr>
		<tr>
			<th><label for="tituloacademicouniversidad">Universidad t&iacute;tulo acad&eacute;mico</label></th>
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
			<th><label for="tituloacademicofecha">Fecha t&iacute;tulo acad&eacute;mico</label></th>
			<td>
				<input type="text" name="user_tituloacademicofecha" id="user_tituloacademicofecha" class="input" value="<?php echo $user_tituloacademicofecha; ?>" size="10" />
				<span class="description">D&iacute;a, mes y a&ntilde;o (dd/MM/aaa)</span>
			</td>
		</tr>
		<tr>
			<th><label for="titulonacional">T&iacute;tulo en provisi&oacute;n nacional</label></th>
			<td>
				<input type="text" name="user_titulonacional" id="user_titulonacional" class="input" value="<?php echo $user_titulonacional; ?>" size="40" />
				<span class="description"></span>
			</td>
		</tr>
		<tr>
			<th><label for="titulonacionaluniversidad">Universidad t&iacute;tulo en provisi&oacute;n nacional</label></th>
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
			<th><label for="titulonacionalfecha">Fecha t&iacute;tulo en provisi&oacute;n nacional</label></th>
			<td>
				<input type="text" name="user_titulonacionalfecha" id="user_titulonacionalfecha" class="input" value="<?php echo $user_titulonacionalfecha; ?>" size="10" />
				<span class="description">D&iacute;a, mes y a&ntilde;o (dd/MM/aaa)</span>
			</td>
		</tr>
	</table>
