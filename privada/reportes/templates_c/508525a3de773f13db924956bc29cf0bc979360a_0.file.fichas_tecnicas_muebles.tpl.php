<?php
/* Smarty version 3.1.36, created on 2021-09-16 22:33:55
  from 'C:\wamp64\www\sis_carpinteria\privada\reportes\templates\fichas_tecnicas_muebles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6143c653b0f389_11327980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '508525a3de773f13db924956bc29cf0bc979360a' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_carpinteria\\privada\\reportes\\templates\\fichas_tecnicas_muebles.tpl',
      1 => 1628227616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6143c653b0f389_11327980 (Smarty_Internal_Template $_smarty_tpl) {
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
	  var d1, d2, d3, contenedor, ajax, url, param;
	    contenedor = document.getElementById('muebles1');
	    d1 = document.formu.material.value;
	    d2 = document.formu.tamaño_m2.value;
	    d3 = document.formu.descripcion.value;
	    ajax = nuevoAjax();
	    url = "ajax_buscar_mueble.php"
	    param = "&material="+d1+"&tamaño_m2="+d2+"&descripcion="+d3;
	    //alert(param);
	    ajax.open("POST", url, true);
	    ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	    ajax.onreadystatechange = function() {
	    	if (ajax.readyState == 3) {
	    		contenedor.innerHTML = ajax.responseText;
	    	}
	    }
	    ajax.send(param);
	  }

	  function mostrar(id_tipo_mueble) {
	  var d1, ventanaCalendario;
	  d1 = id_tipo_mueble;
	  //alert(id_tipo_mueble);
	  ventanaCalendario = window.open("fichas_tecnicas_muebles1.php?id_tipo_mueble=" + d1 , "calendario", "width=600, heigth=550,left=100,top=100,scrollbars=yes,menubars=no,estatusbar=NO,status=NO,resizable=YES,location=NO")
	  }
	<?php echo '</script'; ?>
>
</head>
<body>
	<!------BUSCADOR------------------>
	<center>
	<h1> FICHAS TECNICAS DEL TIPO DE MUEBLES </h1>
	<form action="#" method="post" name="formu">
	<table border="1" class="listado">
		<tr>
			<th>
				<b>Material</b><br />
				<input type="text" name="material" value="" size="10" onKeyUp="buscar()">
			</th>
			<th>
				<b>Tamaño m2</b><br />
				<input type="text" name="tamaño_m2" value="" size="10" onKeyUp="buscar()">
			</th>
			<th>
				<b>Descripcion</b><br />
				<input type="text" name="descripcion" value="" size="10" onKeyUp="buscar()">
			</th>
		</tr>
	</table>
	</form>
	</center>
		<!-----------BUSCADOR--------------------->
		<center>
		  <div id="muebles1">
		  </div>
		
</body>
</html><?php }
}
