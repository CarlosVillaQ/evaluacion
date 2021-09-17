<?php
/* Smarty version 3.1.36, created on 2021-09-17 01:49:28
  from 'C:\wamp64\www\sis_carpinteria\privada\reportes\templates\rpt_mueble_material1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6143f4286afb84_13389917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b7fc5d0243759b9b5a53f045d10d75ca322f9af' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_carpinteria\\privada\\reportes\\templates\\rpt_mueble_material1.tpl',
      1 => 1631843356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143f4286afb84_13389917 (Smarty_Internal_Template $_smarty_tpl) {
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
   	  	<th>NRO</th><th>TAMAÑO M2</th><th>COLOR</th><th>DESCRIPCION</th><th>MATERIAL</th>
   	  </tr>
   	  
   	</table>
   	<br><br>
   	<b>Fecha:</b> <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>

   </center>
</body>
</html><?php }
}
