<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<script type="text/javascript">
		var ventanaCalendario=false
			function imprimir(){
				ventanaCalendario = window.open("clientes_ventas1.php", "calendario", "width=600, height= 550, left=100, top=100, scrollbars=yes, menubars=NO, status=NO, resizable=YES, location=NO")
			}
	</script>
</head>
<body>
	<table width="100%" border="0">
		<tr>
			<td align="center"><h1>CLIENTES_VENTAS</h1></td>
		</tr>
	</table>
	<br>
	
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>CLIENTE</th><th>FECHA VENTA </th><th>MONTO VENTA</th>
			</tr>
			{assign var= "b" value="1"}
			{foreach item=r from=$clientes_ventas}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.nombres} {$r.apellidos} </td>
				<td>{$r.fecha_venta}</td>
				<td>{$r.monto_venta}</td>
				{assign var ="b" value="`$b+1`"}
			</tr>
			{/foreach}
		</table>
		<br><br>
		<h2>
			<input type="radio" name="seleccionar" onclick="javascript:imprimir()">Imprimir
		</h2>
	</center>
</body>
</html>
