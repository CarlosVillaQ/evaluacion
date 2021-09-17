<?php
/* Smarty version 3.1.36, created on 2021-09-10 23:07:34
  from 'C:\wamp64\www\sis_carpinteria\privada\templates\menu_sup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_613be536988230_40604806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6daba5f5480e94e7e505c070d95ff4f10240ac8c' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_carpinteria\\privada\\templates\\menu_sup.tpl',
      1 => 1617588194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_613be536988230_40604806 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
</head>
<body>


	<div class="cabecera">
	<img src="carpinteria/logos/<?php echo $_smarty_tpl->tpl_vars['logo_carpinteria']->value;?>
" width="7%" >
	<div class="titulo">
		CARPINTERIA "<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
"
	</div>
	<div class="usuario">
	Usuario:<b><?php echo $_smarty_tpl->tpl_vars['sesion']->value['usuario'];?>
</b>
	  Rol: <b><?php echo $_smarty_tpl->tpl_vars['sesion']->value['rol'];?>
</b>
	</div>
	</div>
</body>
</html>
<?php }
}
