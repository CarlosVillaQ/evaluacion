<?php
/* Smarty version 3.1.36, created on 2021-09-10 23:18:00
  from 'C:\wamp64\www\sis_carpinteria\privada\reportes\templates\fichas_tecnicas_personas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_613be7a868fa45_17182162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccce06f179124c2934c6dd21569c61ecd46a3480' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_carpinteria\\privada\\reportes\\templates\\fichas_tecnicas_personas.tpl',
      1 => 1628035423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_613be7a868fa45_17182162 (Smarty_Internal_Template $_smarty_tpl) {
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
	    contenedor = document.getElementById('personas1');
	    d1 = document.formu.paterno.value;
	    d2 = document.formu.materno.value;
	    d3 = document.formu.nombres.value;
	    d4 = document.formu.ci.value;
	    ajax = nuevoAjax();
	    url = "ajax_buscar_persona.php"
	    param = "paterno="+d1+"&materno="+d2+"&nombres="+d3+"&ci="+d4;
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

	  function mostrar(id_persona) {
	  var d1, ventanaCalendario;
	  d1 = id_persona;
	  //alert(id_persona);
	  ventanaCalendario = window.open("fichas_tecnicas_personas1.php?id_persona=" + d1 , "calendario", "width=600, heigth=550,left=100,top=100,scrollbars=yes,menubars=no,estatusbar=NO,status=NO,resizable=YES,location=NO")
	  }
	<?php echo '</script'; ?>
>
</head>
<body>
	<!------BUSCADOR------------------>
	<center>
	<h1> FICHAS TECNICAS DE PERSONAS </h1>
	<form action="#" method="post" name="formu">
	<table border="1" class="listado">
		<tr>
			<th>
				<b>Paterno</b><br />
				<input type="text" name="paterno" value="" size="10" onKeyUp="buscar()">
			</th>
			<th>
				<b>Materno</b><br />
				<input type="text" name="materno" value="" size="10" onKeyUp="buscar()">
			</th>
			<th>
				<b>Nombres</b><br />
				<input type="text" name="nombres" value="" size="10" onKeyUp="buscar()">
			</th>
			<th>
				<b>C.I.</b><br />
				<input type="text" name="ci" value="" size="10" onKeyUp="buscar()">
			</th>
		</tr>
	</table>
	</form>
	</center>
		<!-----------BUSCADOR--------------------->
		<center>
		  <div id="personas1">
		  </div>
		
</body>
</html><?php }
}
