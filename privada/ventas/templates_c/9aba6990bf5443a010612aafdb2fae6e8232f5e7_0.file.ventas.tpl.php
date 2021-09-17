<?php
/* Smarty version 3.1.36, created on 2021-09-17 22:42:50
  from 'C:\wamp64\www\sis_carpinteria\privada\ventas\templates\ventas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_614519ea0f2395_87012975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9aba6990bf5443a010612aafdb2fae6e8232f5e7' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_carpinteria\\privada\\ventas\\templates\\ventas.tpl',
      1 => 1623644552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614519ea0f2395_87012975 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="titulo_listado">
		<h1>VENTAS</h1>
	</div>
	<div class="titulo_nuevo">
		<form name="formNuevo" method="post" action="venta_nuevo.php">
		   <a href="javascript:document.formNuevo.submit();">
		   	Nuevo>>>
		   </a>
		</form>
	</div>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>CLIENTE</th><th>FECHA VENTA</th><th>MONTO VENTA</th>
				<th><img src="../../img/editar.png"></th>
				<th><img src="../../img/eliminar.png"></th>
			</tr>
			</tr>
			<?php $_smarty_tpl->_assignInScope('b', "1");?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ventas']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['apellidos'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['fecha_venta'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['monto_venta'];?>
</td>
				<td align="center">
					<form name="formModificar<?php echo $_smarty_tpl->tpl_vars['r']->value['id_venta'];?>
" method="post" action="venta_modificar.php">
						<input type="hidden" name="id_venta" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_venta'];?>
">
						<input type="hidden" name="id_cliente" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_cliente'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_venta'];?>
.submit();" title="Modificar Ventas">
							Modificar>>
						</a>
					</form>
				</td>
				<td align="center">
					<form name="forElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_venta'];?>
" method="post" action="venta_eliminar.php">
					<input type="hidden" name="id_venta" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_venta'];?>
">
					<a href="javascript:document.forElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_venta'];?>
.submit();" title="Eliminar Ventas" onclick='javascript:return(confirm("Desea realmente Eliminar la venta::: "));'>Eliminar>></a>	
					</form>
				</td>
				<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				
			</tr>
		</table>
	  </center>
   </body>
</html>
<?php }
}
