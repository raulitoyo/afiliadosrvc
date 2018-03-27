<h3><?php echo __( 'JOB INFORMATION', 'afiliadosrvc' ); ?></h3>
<table class="form-table">
  <tr>
    <th><label for="lugartrabajo"><?php echo __( 'Place', 'afiliadosrvc' ); ?></label></th>

    <td>
      <input type="text" name="user_lugartrabajo" id="user_lugartrabajo" class="input" value="<?php echo $user_lugartrabajo; ?>" size="30" />
      <span class="description"><?php echo __( 'Departament, province, place', 'afiliadosrvc' ); ?>Departamento, provincia, lugar</span>
    </td>
  </tr>
  <tr>
    <th><label for="nombretrabajo"><?php echo __( 'Name', 'afiliadosrvc' ); ?></label></th>
    <td>
      <input type="text" name="user_nombretrabajo" id="user_nombretrabajo" class="input" value="<?php echo $user_nombretrabajo; ?>" size="30" />
      <span class="description"></span>
    </td>
  </tr>
  <tr>
    <th><label for="cargotrabajo"><?php echo __( 'Position', 'afiliadosrvc' ); ?></label></th>
    <td>
      <input type="text" name="user_cargotrabajo" id="user_cargotrabajo" class="input" value="<?php echo $user_cargotrabajo; ?>" size="30" />
      <span class="description"></span>
    </td>
  </tr>
  <tr>
    <th><label for="direcciontrabajo"><?php echo __( 'Address', 'afiliadosrvc' ); ?></label></th>
    <td>
      <input type="text" name="user_direcciontrabajo" id="user_direcciontrabajo" class="input" value="<?php echo $user_direcciontrabajo; ?>" size="30" />
      <span class="description"><?php echo __( 'Departament, province, place, street or avenue... and the number', 'afiliadosrvc' ); ?></span>
    </td>
  </tr>
  <tr>
    <th><label for="telefonotrabajo"><?php echo __( 'Phone number', 'afiliadosrvc' ); ?></label></th>
    <td>
      <input type="text" name="user_telefonotrabajo" id="user_telefonotrabajo" class="input" value="<?php echo $user_telefonotrabajo; ?>" size="20" />
      <span class="description"><?php echo __( 'Separates by commas', 'afiliadosrvc' ); ?></span>
    </td>
  </tr>
</table>
