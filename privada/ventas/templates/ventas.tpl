<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="titulo_listado">
		<h1>VENTAS</h1>
	</div>
	<div class="titulo_nuevo">
		<form name="formNuevo" method="post" action="venta_nuevo.php">
		   <a href="javascript:document.formNuevo.submit();">
		   	Nuevo>>>
		   </a>
		</form>
	</div>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>CLIENTE</th><th>FECHA VENTA</th><th>MONTO VENTA</th>
				<th><img src="../../img/editar.png"></th>
				<th><img src="../../img/eliminar.png"></th>
			</tr>
			</tr>
			{assign var="b" value="1"}
			{foreach item=r from=$ventas}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.nombres} {$r.apellidos}</td>
				<td>{$r.fecha_venta}</td>
				<td>{$r.monto_venta}</td>
				<td align="center">
					<form name="formModificar{$r.id_venta}" method="post" action="venta_modificar.php">
						<input type="hidden" name="id_venta" value="{$r.id_venta}">
						<input type="hidden" name="id_cliente" value="{$r.id_cliente}">
						<a href="javascript:document.formModif{$r.id_venta}.submit();" title="Modificar Ventas">
							Modificar>>
						</a>
					</form>
				</td>
				<td align="center">
					<form name="forElimi{$r.id_venta}" method="post" action="venta_eliminar.php">
					<input type="hidden" name="id_venta" value="{$r.id_venta}">
					<a href="javascript:document.forElimi{$r.id_venta}.submit();" title="Eliminar Ventas" onclick='javascript:return(confirm("Desea realmente Eliminar la venta::: "));'>Eliminar>></a>	
					</form>
				</td>
				{assign var="b" value="`$b+1`"}
				{/foreach}
				
			</tr>
		</table>
	  </center>
   </body>
</html>
