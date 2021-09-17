<?php
/* Smarty version 3.1.36, created on 2021-09-17 01:40:47
  from 'C:\wamp64\www\sis_carpinteria\privada\reportes\templates\rpt_mueble_material.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6143f21f3b0dd5_93492225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d54c26850ce1cd5b828b6bddf786e22c5bc22c2' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_carpinteria\\privada\\reportes\\templates\\rpt_mueble_material.tpl',
      1 => 1631842678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143f21f3b0dd5_93492225 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<meta charset="utf-8">
	
	<?php echo '<script'; ?>
 type="text/javascript">
	 function validar(){
	 	material = document.formu.material.value;
	 	if (document.formu.material.value =="") {
	 		alert("Por favor seleccione el material");
	 		document.formu.material.focus();
	 		return;
	 	}
	 	ventanaCalendario = window.open("rpt_mueble_material1.php?material=" + material , "calendario", "width=600,height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
	 }
	<?php echo '</script'; ?>
>
	
</head>
<body>
	<div class="formu_ingreso_datos">
		<h2> RPT DE MUEBLES POR MATERIAL</h2>
		<form method="post" name="formu">
		<p>
		  <b>*Seleccione material</b>
		  <select name="material">
		  	<option value="">--Seleccione--</option>
		  	<option value="T">Todos</option>
		  	<option value="MADERA CEDRO">Madera Cedro</option>
		  	<option value="MADERA ROBLE">Madera Roble</option>
		  	<option value="MELAMINA">Melamina</option>
		  </select>
		 </p>
		 <p>
		 	<input type="hidden" name="accion" value="">
		 	<input type="button" value="Aceptar" onclick="validar();" class="boton">
		 </p>
		</form>
	</div>
</body>
</html><?php }
}
