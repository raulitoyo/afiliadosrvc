<h3><?php echo __( 'ADDITIONAL INFORMATION', 'afiliadosrvc' ); ?></h3>
<table class="form-table">
  <tr>
    <th><label for="sexo"><?php echo __( 'Sex', 'afiliadosrvc' ); ?></label></th>
    <td>
      <input type="radio" name="user_sexo" class="radio" value="h" <?php if($user_sexo=='h') { echo ' checked'; } ?> /> <?php echo __( 'Male', 'afiliadosrvc' ); ?>
      <input type="radio" name="user_sexo" class="radio" value="m" style="margin-left:10px" <?php if($user_sexo=='m') { echo ' checked'; } ?> /> <?php echo __( 'Female', 'afiliadosrvc' ); ?><br />
    </td>
  </tr>
  <tr>
    <th><label for="identificacion"><?php echo __( 'Identification document', 'afiliadosrvc' ); ?></label></th>
    <td>
      <input type="text" name="user_identificacion" id="user_identificacion" class="input" value="<?php echo $user_identificacion; ?>" size="10" />
      <span class="description"><?php echo __( 'Include place of expedition', 'afiliadosrvc' ); ?></span>
    </td>
  </tr>
  <tr>
    <th><label for="lugarnacimiento"><?php echo __( 'Place of birth', 'afiliadosrvc' ); ?></label></th>
    <td>
      <input type="text" name="user_lugarnacimiento" id="user_lugarnacimiento" class="input" value="<?php echo $user_lugarnacimiento; ?>" size="30" />
      <span class="description"><?php echo __( 'Departament, province, place', 'afiliadosrvc' ); ?></span>
    </td>
  </tr>
  <tr>
    <th><label for="fechanacimiento"><?php echo __( 'Birthdate', 'afiliadosrvc' ); ?></label></th>
    <td>
      <input type="text" name="user_fechanacimiento" id="user_fechanacimiento" class="input" value="<?php echo $user_fechanacimiento; ?>" size="10" />
      <span class="description"><?php echo __( 'Day, month and year (dd/MM/aaa)', 'afiliadosrvc' ); ?></span>
    </td>
  </tr>
  <tr>
    <th><label for="fallecio"><?php echo __( 'Passed away', 'afiliadosrvc' ); ?></label></th>
    <td>
      <input type="checkbox" name="user_fallecio" id="user_fallecio" value="false" <?php if ( ! empty( $user_fallecio ) ) checked( 'false', $user_fallecio ); ?> />
      <span class="description"></span>
    </td>
  </tr>
  <tr>
    <th><label for="direccion"><?php echo __( 'Address', 'afiliadosrvc' ); ?></label></th>
    <td>
      <input type="text" name="user_direccion" id="user_direccion" class="input" value="<?php echo $user_direccion; ?>" size="30" />
      <span class="description"><?php echo __( 'Departament, province, place, street or avenue... and the number', 'afiliadosrvc' ); ?></span>
    </td>
  </tr>
  <tr>
    <th><label for="telefono"><?php echo __( 'Phone number', 'afiliadosrvc' ); ?></label></th>
    <td>
      <input type="text" name="user_telefono" id="user_telefono" class="input" value="<?php echo $user_telefono; ?>" size="20" />
      <span class="description"><?php echo __( 'Separates by commas', 'afiliadosrvc' ); ?></span>
    </td>
  </tr>
  <tr>
    <th><label for="celular"><?php echo __( 'Cell phone number', 'afiliadosrvc' ); ?></label></th>
    <td>
      <input type="text" name="user_celular" id="user_celular" class="input" value="<?php echo $user_celular; ?>" size="20" />
      <span class="description"><?php echo __( 'Separates by commas', 'afiliadosrvc' ); ?></span>
    </td>
  </tr>
  <tr>
    <th><label for="email2"><?php echo __( 'Secondary email', 'afiliadosrvc' ); ?></label></th>
    <td>
      <input type="email" name="user_email2" id="user_email2" class="input" value="<?php echo $user_email2; ?>" size="30" />
      <span class="description"></span>
    </td>
  </tr>
</table>
