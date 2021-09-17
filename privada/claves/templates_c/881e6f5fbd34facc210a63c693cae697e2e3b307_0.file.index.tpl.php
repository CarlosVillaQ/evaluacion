<?php
/* Smarty version 3.1.36, created on 2021-09-16 21:31:44
  from 'C:\wamp64\www\sis_carpinteria\privada\claves\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6143b7c0da44b1_53099853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '881e6f5fbd34facc210a63c693cae697e2e3b307' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_carpinteria\\privada\\claves\\templates\\index.tpl',
      1 => 1623618532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143b7c0da44b1_53099853 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type = "text/css" href="../../css/colores1.css">
	<?php echo '<script'; ?>
 type="text/javascript">
		function refrescar(){
			var p = window.parent;
			p.location.href='../';
		}
	<?php echo '</script'; ?>
>
</head>
<body ONLOAD ="self.setTimeout('refrescar()',1000);">
	<center>
		<h1><?php echo $_smarty_tpl->tpl_vars['mensage']->value;?>
</h1>
		<br>
		<h1><?php echo $_smarty_tpl->tpl_vars['mensage1']->value;?>
</h1>
	</center>
</body><?php }
}
