<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		var ventanaCalendario=false
		   function imprimir(){
		   if (confirm(' Desea imprimir ?')) {
		   	  window.print();
		    }
		   }
	</script>
</head>
<body style='cursor:pointer;cursor:hand' onclick='imprimir();'>
	<table width="100%" border="0">
	  <tr>
	  	<td>
	  		<img src="../carpinteria/logos/{$logo_carpinteria}" width="70%">
	  	</td>
	  	<td align="center" width="80%">
	  		<h1> FECHA DE VENTAS </h1>
	  	</td>
	  </tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<th>NRO</th><th>MONTO VENTA</th><th>FECHA VENTA</th>
			</tr>
			{assign var="b" value="1"}
			{foreach item=r from=$fecha_ventas1}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.monto_venta}</td>
				<td>{$r.fecha_venta}</td>
				{assign var="b" value="`$b+1`"}
				{/foreach}
			</tr>
		</table>
		<br><br>
	</center>
	<b>DEL:</b>{$fecha1} <b>A</b> {$fecha2}
</body>
</html>