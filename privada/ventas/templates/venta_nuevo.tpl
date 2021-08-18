<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href ="../{$direc_css}" type ="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_venta.js"></script>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="venta_nuevo1.php" method="post" name="formu">
			<h2>REGISTRAR VENTAS</h2>
				<b>Cliente (*)</b>
					<select name="id_cliente">
					 <option value="">--- seleccione ---</option>
					 {foreach item=r from=$clientes}
						<option value="{$r.id_cliente}">{$r.nombres}-{$r.apellidos}</option>
					 {/foreach}
					</select>
			<p> 
				<b>Fecha Venta (*)</b>
				<input type="text" name="fecha_venta" size="15" placeholder="AAAA-MM-DD" >
			</p>
			<p>
				<b>Monto Venta (*)</b>
			  <input type="text" name="monto_venta" size="15" placeholder="1111.00" >(*)
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value ="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value ="Cancelar" onclick="javascript:location.href='ventas.php';" class="boton2">
			</p>
			<p><b>(*)Campos Obligatorios</b></p>
		</form>	
	</div>
  </body>
</html>
