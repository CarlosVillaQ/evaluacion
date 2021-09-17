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
	  		<h1> FICHA TECNICA DE CLIENTE</h1>
	  	</td>
	  </tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<td>
					<table border="0">
						{foreach item=r from=$cliente}
						<tr>
							<th align="right">NOMBRES</th><th>:</th>
							<td><input type="text" name="nombres" value="{$r.nombres}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">APELLIDOS</th><th>:</th>
							<td><input type="text" name="apellidos" value="{$r.apellidos}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">TELEFONO</th><th>:</th>
							<td><input type="text" name="telefono" value="{$r.telefono}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">TIPO CLIENTE</th><th>:</th>
							<td>
								{if $r.tipo_cliente == 'N'}<input type="text" name="tipo_cliente" value="NUEVO" disabled="">{/if}
								{if $r.tipo_cliente == 'A'}<input type="text" name="tipo_cliente" value="ANTIGUO" disabled="">{/if}
							</td>
						</tr>
						{/foreach}
					</table>
						
				</td>
			</tr>
		</table>
		
	</center>
	
</body>
</html>