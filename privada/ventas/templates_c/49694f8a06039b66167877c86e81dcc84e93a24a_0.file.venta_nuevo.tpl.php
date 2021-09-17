<?php
/* Smarty version 3.1.36, created on 2021-09-18 00:14:46
  from 'C:\wamp64\www\sis_carpinteria\privada\ventas\templates\venta_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_61452f76e5bc51_64697377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49694f8a06039b66167877c86e81dcc84e93a24a' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_carpinteria\\privada\\ventas\\templates\\venta_nuevo.tpl',
      1 => 1631924079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61452f76e5bc51_64697377 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href ="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type ="text/css">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_venta.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../../ajax.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" >
	  function buscar(){
		var d1, contenedor, url;
	    contenedor = document.getElementById('clientes');
		contenedor2 = document.getElementById('cliente_seleccionado');
		contenedor3 = document.getElementById('cliente_insertado');
	    d1 = document.formu.nombres.value;
	    d2 = document.formu.apellidos.value;
	    d3 = document.formu.telefono.value;
	    ajax = nuevoAjax();
	    url = "ajax_buscar_cliente.php";
	    param = "nombres="+d1+"&apellidos="+d2+"&telefono="+d3;
		ajax.open("POST",url,true);
		ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		ajax.onreadystatechange= function(){
			if(ajax.readyState==4){
				contenedor.innerHTML= ajax.responseText;
				contenedor2.innerHTML ="";
				contenedor3.innerHTML ="";

			}
		}
		ajax.send(param);
	  }
	  function buscar_cliente(id_cliente){
		  var d1, contenedor, contenedor2, url,ajax,param;
		  contenedor = document.getElementById('cliente_seleccionado');
		  contenedor2 = document.getElementById('clientes');
		  document.formu.id_cliente.value = id_cliente;

		  d1 = id_cliente;
		  ajax = nuevoAjax();
	    url = "ajax_buscar_cliente1.php"
	    param = "id_cliente="+d1;
		ajax.open("POST", url, true);
		ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		ajax.onreadystatechange= function(){
			if(ajax.readyState==4){
				contenedor.innerHTML= ajax.responseText;
				contenedor2.innerHTML ="";
			}
		}
		ajax.send(param);
	 }
	 function insertar_cliente(){
		var d1, contenedor,contenedor2, contenedor3, ajax, url, param;
	    contenedor = document.getElementById('cliente_seleccionado');
		contenedor2 = document.getElementById('clientes');
		contenedor3 = document.getElementById('cliente_insertado');
	    d1 = document.formu.nombres1.value;
	    d2 = document.formu.apellidos1.value;
	    d3 = document.formu.telefono1.value;
	    
		
		if(d1 == ""){
			alert("Los nombres son incorrectos o el campo esta vacio");
			document.formu.nombres1.focus();
			return;
		}
		if(d2 == ""){
			alert("Los apellidos son incorrectos o el campo esta vacio");
			document.formu.apellidos1.focus();
			return;
		}
		
		ajax = nuevoAjax();
		url = "ajax_inserta_cliente.php";
		param = "&nombres1="+d1+"&apellidos1="+d2+"&telefono1="+d3;
		ajax.open("POST", url, true);
		ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
		ajax.onreadystatechange = function(){
			if(ajax.readyState == 4){
				contenedor.innerHTML = "";
				contenedor2.innerHTML = "";
				contenedor3.innerHTML = ajax.responseText;
			}
		}
		ajax.send(param);

	 }
	<?php echo '</script'; ?>
>
</head>
<body>
	
		<h1>REGISTRAR CLIENTE</h1>
		<form action="cliente_nuevo1.php" method="post" name="formu">
		<table border="1" class="formu_ingreso_datos" >
			<tr>
				<th align="right">Seleccione Cliente (*)</th>
				<th>:</th>
				<td>
					<table>
						<tr>
							<td>
								<b>Nombres</b><br>
								<input type="text" name="nombres" value="" size="10" onKeyUp= "buscar()">
							</td>
							<td>
								<b>Apellidos</b><br>
								<input type="text" name="apellidos" value="" size="10" onKeyUp= "buscar()">
							</td>
							<td>
								<b>Telefono</b><br>
								<input type="text" name="telefono" value="" size="10" onKeyUp= "buscar()">
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="6">
					<table width="100%">
						<tr>
							<td colspan="3">
								<div id="clientes"></div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="6">
					<table width="100%">
						<tr>
							<td colspan="3">
								<div id="cliente_seleccionado"></div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="6">
					<table width="100%">
						<tr>
							<td colspan="3">
								<input type="hidden" name="id_cliente">
								<div id="cliente_insertado"></div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<th align="right">Fecha Venta (*)</th>
				<th>:</th>
				<td><input type="text" name="fecha_venta"> </td>
			</tr>
			<tr>
				<th align="right">Monto Venta (*)</th>
				<th>:</th>
				<td><input type="text" name="monto_venta"> </td>
			</tr>
			
			<tr>
				<td align="center" colspan="3">
					<input type="hidden" name="accion" value="">
					<input type="button" value="Aceptar" onclick="validar();">
					<input type="button" value="Cancelar" onclick="javascript:location.href='ventas.php';">
				</td>
			</tr>
		</table>
		<center>
		<table >
			<tr>
				<td colspan="3" align="center" class="formu_ingreso_datos"><b>(*)Campos Obligatorios</b></td>
			</tr>
		</table>
		</center>
	</form>
	
	</body>
</html>
<?php }
}
