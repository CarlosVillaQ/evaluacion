<?php
/* Smarty version 3.1.36, created on 2021-08-10 02:17:05
  from 'C:\wamp64\www\sis_carpinteria\privada\reportes\templates\rpt_muebles_material1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6111e1a16eb312_44603819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73c86667a68ae9441be405bcd2e43bd693fe6304' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_carpinteria\\privada\\reportes\\templates\\rpt_muebles_material1.tpl',
      1 => 1628561813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6111e1a16eb312_44603819 (Smarty_Internal_Template $_smarty_tpl) {
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
   	  	<th>NRO</th><th>TAMAÑO</th><th>TIPO_MUEBLE</th><th>MATERIAL</th><th>COLOR</th>
   	  </tr>
   	  <?php $_smarty_tpl->_assignInScope('b', "1");?>
   	  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['muebles_material1']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
   	  <tr>
   	  	<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
   	  	<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
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
