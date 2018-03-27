
	<h3><?php echo __( 'NATIONAL REGISTRY INFORMATION', 'afiliadosrvc' ); ?></h3>
	<table class="form-table">
		<tr>
			<th><label for="rni"><?php echo __( 'RNI o RNT', 'afiliadosrvc' ); ?></label></th>
			<td>
				<input type="text" name="user_rni" id="user_rni" class="input" value="<?php echo $user_rni; ?>" size="10" />
				<span class="description"><?php echo __( 'National engieneer record or National registry of technician', 'afiliadosrvc' ); ?></span>
			</td>
		</tr>
		<tr>
			<th><label for="fecharni"><?php echo __( 'Registration date', 'afiliadosrvc' ); ?></label></th>
			<td>
				<input type="text" name="user_fecharni" id="user_fecharni" class="input" value="<?php echo $user_fecharni; ?>" size="10" />
				<span class="description"><?php echo __( 'Day, month and year (dd/MM/aaa)', 'afiliadosrvc' ); ?></span>
			</td>
		</tr>
		<tr>
			<th><label for="librorni"><?php echo __( 'Book', 'afiliadosrvc' ); ?></label></th>
			<td>
				<input type="text" name="user_librorni" id="user_librorni" class="input" value="<?php echo $user_librorni; ?>" size="10" />
				<span class="description"></span>
			</td>
		</tr>
		<tr>
			<th><label for="libropaginasrni"><?php echo __( 'Pages of the book', 'afiliadosrvc' ); ?></label></th>
			<td>
				<input type="text" name="user_libropaginasrni" id="user_libropaginasrni" class="input" value="<?php echo $user_libropaginasrni; ?>" size="10" />
				<span class="description"></span>
			</td>
		</tr>
		<tr>
			<th><label for="categoriarni"><?php echo __( 'Category', 'afiliadosrvc' ); ?></label></th>
			<td>
				<select name='user_categoriarni'>
				<?php
					foreach ($categorias as $categoria) {
				?>
					<option value=<?php echo $categoria->id; if($categoria->id==$user_categoriarni) { echo ' selected'; } ?> > <?php echo $categoria->nombre; ?> </option>
				<?php }?>
				<span class="description"></span>
			</td>
		</tr>
		<tr>
			<th><label for="nivelrni"><?php echo __( 'Level', 'afiliadosrvc' ); ?></label></th>
			<td>
				<select name='user_nivelrni'>
				<?php
					foreach ($niveles as $nivel) {
				?>
					<option value=<?php echo $nivel->id; if($nivel->id==$user_nivelrni) { echo ' selected'; } ?> > <?php echo $nivel->nombre; ?> </option>
				<?php }?>
				<span class="description"></span>
			</td>
		</tr>
		<tr>
			<th><label for="departamentalregistro"><?php echo __( 'Departamental registration', 'afiliadosrvc' ); ?></label></th>
			<td>
				<select name='user_departamentalregistro'>
				<?php
					foreach ($departamentales as $departamental) {
				?>
					<option value=<?php echo $departamental->id; if($departamental->id==$user_departamentalregistro) { echo ' selected'; } ?> > <?php echo $departamental->nombre; ?> </option>
				<?php }?>
				<span class="description"></span>
			</td>
		</tr>
		<tr>
			<th><label for="colegioespecialidad"><?php echo __( 'Specialty school', 'afiliadosrvc' ); ?></label></th>
			<td>
				<select name='user_colegioespecialidad'>
				<?php
					foreach ($colegios as $colegio) {
				?>
					<option value=<?php echo $colegio->id; if($colegio->id==$user_colegioespecialidad) { echo ' selected'; } ?> > <?php echo $colegio->nombre; ?> </option>
				<?php }?>
				<span class="description"></span>
			</td>
		</tr>
	</table>
