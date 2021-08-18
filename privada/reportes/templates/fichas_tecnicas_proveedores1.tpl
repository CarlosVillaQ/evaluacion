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
<body style='cursor:pointer;cursor:hand' onClick='imprimir();'>
	<table width="100%" border="0">
	  <tr>
	  	<td>
	  		<img src="../carpinteria/logos/{$logo_carpinteria}" width="70%">
	  	</td>
	  	<td align="center" width="80%">
	  		<h1> FICHA TECNICA DE PROVEEDOR </h1>
	  	</td>
	  </tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<td>
					<table border="0">
						{foreach item=r from=$proveedor}
						<tr>
							<th align="right">Caracteristicas</th><th>:</th>
							<td><input type="text" name="caracteristicas" value="{$r.caracteristicas}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Nombres</th><th>:</th>
							<td><input type="text" name="nombres" value="{$r.nombres}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Apellidos</th><th>:</th>
							<td><input type="text" name="apellidos" value="{$r.apellidos}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Telefono</th><th>:</th>
							<td><input type="text" name="telefono" value="{$r.telefono}" disabled=""></td>
						</tr>
						{/foreach}
					</table>
						
				</td>
			</tr>
		</table>
		
	</center>
	
</body>
</html>