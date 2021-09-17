<?php
/* Smarty version 3.1.36, created on 2021-09-10 23:07:34
  from 'C:\wamp64\www\sis_carpinteria\privada\templates\cuerpo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_613be536e6c845_04218257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f52fa3c5670d67aa9daf99236223f27e09da8d5e' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_carpinteria\\privada\\templates\\cuerpo.tpl',
      1 => 1618779923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_613be536e6c845_04218257 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href ="<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type ="text/css">
</head>
<body>
	<form action="claves/" method="post" target="cuerpo">
		<?php if ($_smarty_tpl->tpl_vars['nick']->value == '') {?>
		<div class= "formu_ingreso">
		<p><h2>Ingresar al Sistema</h2></p>
		<p><h2>Login: </h2><input type="text" name="nick" size="11" value="" class="limpiar"></p>
		<p><h2>Clave:</h2><input type="password" name="password" size="11" value="" ></p>
		<input type="submit" name="accion" value="Ingresar" size="5" class="boton">
	</div>
	<?php }?>
</form>
</body>
</html>
<?php }
}
