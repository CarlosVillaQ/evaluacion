<?php
/* Smarty version 3.1.36, created on 2021-08-10 03:05:06
  from 'C:\wamp64\www\sis_carpinteria\privada\reportes\templates\rpt_proveedores_material1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6111ece29f26c6_11659818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b7357cd589b99a1fe8b676135bc6931143d112d' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_carpinteria\\privada\\reportes\\templates\\rpt_proveedores_material1.tpl',
      1 => 1628564680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6111ece29f26c6_11659818 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<?php echo '<script'; ?>
 type="text/javascript">
	  var ventanaCalendario=false
	  	function imprimir(){
	  	  if (confirm(' Desea Imprimir ?')){
	  	  	window.print();
	  	  }
	  	}
	<?php echo '</script'; ?>
>
</head>
<body style='cursor:pointer;cursor:hand' onClick='imprimir();'>
   <table width="100%" border="0">
   	 <tr>
   	 	<td> <img src="../carpinteria/logos/<?php echo $_smarty_tpl->tpl_vars['logo_carpinteria']->value;?>
" width="70%"></td>
   	 	<td align="center" width="80%">
   	 		<h1> MUEBLES -- MATERIAL </h1>
   	 	</td>
   	 </tr>
   </table>
   <br>
   <center>
   	<table border="1" cellspacing="0">
   	  <tr>
   	  	<th>NRO</th><th>NOMBRES</th><th>APELLIDOS</th><th>MATERIAL</th><th>TELEFONO</th>
   	  </tr>
   	  <?php $_smarty_tpl->_assignInScope('b', "1");?>
   	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['proveedores_material1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
   	  <tr>
   	  	<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
   	  	<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</td>
   	  	<td><?php echo $_smarty_tpl->tpl_vars['r']->value['apellidos'];?>
</td>
   	  	<td><?php if ($_smarty_tpl->tpl_vars['r']->value['caracteristicas'] == "VENTA DE MADERA") {?>VENTA DE MADERA<?php } else {
if ($_smarty_tpl->tpl_vars['r']->value['caracteristicas'] == "VENTA DE BARNIZ") {?>VENTA DE BARNIZ<?php } else {
if ($_smarty_tpl->tpl_vars['r']->value['caracteristicas'] == "VENTA DE MELAMINA") {?>VENTA DE MELAMINA<?php } else { ?>VENTA DE FERRETERIA<?php }
}
}?></td>
         <td><?php echo $_smarty_tpl->tpl_vars['r']->value['telefono'];?>
</td>
   	  	<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
   	  	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   	  </tr>
   	</table>
   	<br><br>
   	<b>Fecha:</b> <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>

   </center>
</body>
</html><?php }
}
