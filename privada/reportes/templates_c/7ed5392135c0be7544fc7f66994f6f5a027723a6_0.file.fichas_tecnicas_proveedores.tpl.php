<?php
/* Smarty version 3.1.36, created on 2021-08-10 03:19:52
  from 'C:\wamp64\www\sis_carpinteria\privada\reportes\templates\fichas_tecnicas_proveedores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6111f0589370a0_55899860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ed5392135c0be7544fc7f66994f6f5a027723a6' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_carpinteria\\privada\\reportes\\templates\\fichas_tecnicas_proveedores.tpl',
      1 => 1628565387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6111f0589370a0_55899860 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<meta charset="utf-8">
	<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
	  function buscar() {
	  var d1, d2, d3, d4, contenedor, ajax, url, param;
	    contenedor = document.getElementById('proveedores1');
	    d1 = document.formu.nombres.value;
	    d2 = document.formu.apellidos.value;
	    d3 = document.formu.telefono.value;
	    d4 = document.formu.caracteristicas.value;
	    ajax = nuevoAjax();
	    url = "ajax_buscar_proveedor.php"
	    param = "nombres="+d1+"&apellidos="+d2+"&telefono="+d3+"&caracteristicas="+d4;
	    //alert(param);
	    ajax.open("POST", url, true);
	    ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	    ajax.onreadystatechange = function() {
	    	if (ajax.readyState == 4) {
	    		contenedor.innerHTML = ajax.responseText;
	    	}
	    }
	    ajax.send(param);
	  }

	  function mostrar(id_proveedor) {
	  var d1, ventanaCalendario;
	  d1 = id_proveedor;
	  //alert(id_proveedor);
	  ventanaCalendario = window.open("fichas_tecnicas_proveedores1.php?id_proveedor=" + d1 , "calendario", "width=600, heigth=550,left=100,top=100,scrollbars=yes,menubars=no,estatusbar=NO,status=NO,resizable=YES,location=NO")
	  }
	<?php echo '</script'; ?>
>
</head>
<body>
	<!------BUSCADOR------------------>
	<center>
	<h1> FICHAS TECNICAS DE PROVEEDORES </h1>
	<form action="#" method="post" name="formu">
	<table border="1" class="listado">
		<tr>
			<th>
				<b>Nombres</b><br />
				<input type="text" name="nombres" value="" size="10" onKeyUp="buscar()">
			</th>
			<th>
				<b>Apellidos</b><br />
				<input type="text" name="apellidos" value="" size="10" onKeyUp="buscar()">
			</th>
			<th>
				<b>Telefono</b><br />
				<input type="text" name="telefono" value="" size="10" onKeyUp="buscar()">
			</th>
			<th>
				<b>Caracteristicas</b><br />
				<input type="text" name="caracteristicas" value="" size="10" onKeyUp="buscar()">
			</th>
		</tr>
	</table>
	</form>
	</center>
		<!-----------BUSCADOR--------------------->
		<center>
		  <div id="proveedores1">
		  </div>
		
</body>
</html><?php }
}
