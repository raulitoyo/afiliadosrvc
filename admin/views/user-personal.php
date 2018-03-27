<h3>INFORMACION ADICIONAL</h3>
<table class="form-table">
  <tr>
    <th><label for="sexo">Sexo</label></th>
    <td>
      <input type="radio" name="user_sexo" class="radio" value="h" <?php if($user_sexo=='h') { echo ' checked'; } ?> /> Hombre
      <input type="radio" name="user_sexo" class="radio" value="m" style="margin-left:10px" <?php if($user_sexo=='m') { echo ' checked'; } ?> /> Mujer<br />
    </td>
  </tr>
  <tr>
    <th><label for="identificacion">Documento de identificaci&oacute;n</label></th>
    <td>
      <input type="text" name="user_identificacion" id="user_identificacion" class="input" value="<?php echo $user_identificacion; ?>" size="10" />
      <span class="description">Incluya el lugar de expedici&oacute;n</span>
    </td>
  </tr>
  <tr>
    <th><label for="lugarnacimiento">Lugar nacimiento</label></th>
    <td>
      <input type="text" name="user_lugarnacimiento" id="user_lugarnacimiento" class="input" value="<?php echo $user_lugarnacimiento; ?>" size="30" />
      <span class="description">Departamento, provincia, lugar</span>
    </td>
  </tr>
  <tr>
    <th><label for="fechanacimiento">Fecha nacimiento</label></th>
    <td>
      <input type="text" name="user_fechanacimiento" id="user_fechanacimiento" class="input" value="<?php echo $user_fechanacimiento; ?>" size="10" />
      <span class="description">D&iacute;a, mes y a&ntilde;o (dd/MM/aaa)</span>
    </td>
  </tr>
  <tr>
    <th><label for="fallecio">Fallecio</label></th>
    <td>
      <input type="checkbox" name="user_fallecio" id="user_fallecio" value="false" <?php if ( ! empty( $user_fallecio ) ) checked( 'false', $user_fallecio ); ?> />
      <span class="description"></span>
    </td>
  </tr>
  <tr>
    <th><label for="direccion">Direcci&oacute;n</label></th>
    <td>
      <input type="text" name="user_direccion" id="user_direccion" class="input" value="<?php echo $user_direccion; ?>" size="30" />
      <span class="description">Departamento, provincia, lugar, calle o avenida... y el n&uacute;mero</span>
    </td>
  </tr>
  <tr>
    <th><label for="telefono">N&uacute;mero de tel&eacute;fono</label></th>
    <td>
      <input type="text" name="user_telefono" id="user_telefono" class="input" value="<?php echo $user_telefono; ?>" size="20" />
      <span class="description">Separados por comas</span>
    </td>
  </tr>
  <tr>
    <th><label for="celular">N&uacute;mero de celular</label></th>
    <td>
      <input type="text" name="user_celular" id="user_celular" class="input" value="<?php echo $user_celular; ?>" size="20" />
      <span class="description">Separados por comas</span>
    </td>
  </tr>
  <tr>
    <th><label for="email2">Correo elect&oacute;nico secundario</label></th>
    <td>
      <input type="email" name="user_email2" id="user_email2" class="input" value="<?php echo $user_email2; ?>" size="30" />
      <span class="description"></span>
    </td>
  </tr>
</table>
