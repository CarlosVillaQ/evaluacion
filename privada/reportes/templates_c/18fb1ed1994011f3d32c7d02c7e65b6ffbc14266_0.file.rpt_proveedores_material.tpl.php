<?php
/* Smarty version 3.1.36, created on 2021-08-10 03:01:24
  from 'C:\wamp64\www\sis_carpinteria\privada\reportes\templates\rpt_proveedores_material.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6111ec04634dc8_74486504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18fb1ed1994011f3d32c7d02c7e65b6ffbc14266' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_carpinteria\\privada\\reportes\\templates\\rpt_proveedores_material.tpl',
      1 => 1628564471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6111ec04634dc8_74486504 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<meta charset="utf-8">
	
	<?php echo '<script'; ?>
 type="text/javascript">
	 function validar(){
	 	caracteristicas = document.formu.caracteristicas.value;
	 	if (document.formu.caracteristicas.value =="") {
	 		alert("Por favor seleccione el material");
	 		document.formu.caracteristicas.focus();
	 		return;
	 	}
	 	ventanaCalendario = window.open("rpt_proveedores_material1.php?caracteristicas=" + caracteristicas , "calendario", "width=600,height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
	 }
	<?php echo '</script'; ?>
>
	
</head>
<body>
	<div class="formu_ingreso_datos">
		<h2> RPT DE PROVEEDORES POR MATERIAL</h2>
		<form method="post" name="formu">
		<p>
		  <b>*Seleccione material</b>
		  <select name="caracteristicas">
		  	<option value="">--Seleccione--</option>
		  	<option value="T">Todos</option>
		  	<option value="VENTA DE MADERA">Madera</option>
		  	<option value="VENTA DE BARNIZ">Barniz</option>
		  	<option value="VENTA DE MELAMINA">Melamina</option>
		  	<option value="VENTA DE FERRETERIA">Ferreteria</option>
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
