<?php
/* Smarty version 3.1.36, created on 2021-09-16 21:34:19
  from 'C:\wamp64\www\sis_carpinteria\privada\reportes\templates\trabajadores_muebles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6143b85bb94da0_07850818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7d29759dad5877797bc6a354f500ac800901f4d' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_carpinteria\\privada\\reportes\\templates\\trabajadores_muebles.tpl',
      1 => 1631827475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143b85bb94da0_07850818 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<?php echo '<script'; ?>
 type="text/javascript">
		var ventanaCalendario=false
			function imprimir(){
				ventanaCalendario = window.open("trabajadores_muebles1.php", "calendario", "width=600, height= 550, left=100, top=100, scrollbars=yes, menubars=NO, status=NO, resizable=YES, location=NO")
			}
	<?php echo '</script'; ?>
>
</head>
<body>
	<table width="100%" border="0">
		<tr>
			<td align="center"><h1>TRABAJADORES_MUEBLES</h1></td>
		</tr>
	</table>
	<br>
	
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>TRABAJADORES</th><th>PRECIO MUEBLE</th>
			</tr>
			<?php $_smarty_tpl->_assignInScope('b', "1");?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trabajadores_muebles']->value, 'r');
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
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['precio'];?>
</td>
				<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
			</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
		<br><br>
		<h2>
			<input type="radio" name="seleccionar" onclick="javascript:imprimir()">Imprimir
		</h2>
	</center>
</body>
</html>
<?php }
}
