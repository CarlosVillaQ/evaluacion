<?php
/* Smarty version 3.1.36, created on 2021-08-10 03:20:38
  from 'C:\wamp64\www\sis_carpinteria\privada\reportes\templates\fichas_tecnicas_proveedores1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6111f0861a7032_56149692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '787f0509f9c258469dfb9b46cb83a65ede871051' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_carpinteria\\privada\\reportes\\templates\\fichas_tecnicas_proveedores1.tpl',
      1 => 1628565635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6111f0861a7032_56149692 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<?php echo '<script'; ?>
 type="text/javascript">
		var ventanaCalendario=false
		   function imprimir(){
		   if (confirm(' Desea imprimir ?')) {
		   	  window.print();
		    }
		   }
	<?php echo '</script'; ?>
>
</head>
<body style='cursor:pointer;cursor:hand' onClick='imprimir();'>
	<table width="100%" border="0">
	  <tr>
	  	<td>
	  		<img src="../carpinteria/logos/<?php echo $_smarty_tpl->tpl_vars['logo_carpinteria']->value;?>
" width="70%">
	  	</td>
	  	<td align="center" width="80%">
	  		<h1> FICHA TECNICA DE PROVEEDOR </h1>
	  	</td>
	  </tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<td>
					<table border="0">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['proveedor']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
						<tr>
							<th align="right">Caracteristicas</th><th>:</th>
							<td><input type="text" name="caracteristicas" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['caracteristicas'];?>
" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Nombres</th><th>:</th>
							<td><input type="text" name="nombres" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Apellidos</th><th>:</th>
							<td><input type="text" name="apellidos" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['apellidos'];?>
" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Telefono</th><th>:</th>
							<td><input type="text" name="telefono" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['telefono'];?>
" disabled=""></td>
						</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</table>
						
				</td>
			</tr>
		</table>
		
	</center>
	
</body>
</html><?php }
}
