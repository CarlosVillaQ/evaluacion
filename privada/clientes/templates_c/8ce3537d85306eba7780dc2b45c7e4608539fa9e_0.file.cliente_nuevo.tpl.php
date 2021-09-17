<?php
/* Smarty version 3.1.36, created on 2021-09-17 23:58:58
  from 'C:\wamp64\www\sis_carpinteria\privada\clientes\templates\cliente_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_61452bc27a7873_68243078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ce3537d85306eba7780dc2b45c7e4608539fa9e' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_carpinteria\\privada\\clientes\\templates\\cliente_nuevo.tpl',
      1 => 1618792220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61452bc27a7873_68243078 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href ="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type ="text/css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_cliente.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="cliente_nuevo1.php" method="post" name="formu">
			<h2>REGISTRAR CLIENTE</h2>
			  <input type="text" name="nombres" size="15" placeholder="Nombres" onkeyup="this.value=this.value.toUpperCase()">(*)
			<p>
			  <input type="text" name="apellidos" size="15" placeholder="Apellidos" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
			  <input type="text" name="telefono" size="15" placeholder="Telefono">
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value="Aceptar" name="Aceptar" onclick="validar();" class="boton2" >
				<input type="button" value="Cancelar" name="Cancelar" onclick="javascript:location.href='clientes.php';" class="boton2" >
			</p>
			<p><b>(*)Campos Obligatorios</b></p>
		</form>
		
	</div>
</body>
</html>
<?php }
}
