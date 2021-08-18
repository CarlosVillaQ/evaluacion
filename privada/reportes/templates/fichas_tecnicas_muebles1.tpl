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
	  		<h1> FICHA TECNICA DEL TIPO DE MUEBLE </h1>
	  	</td>
	  </tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<td>
					<table border="0">
						{foreach item=r from=$tipo_mueble}
						<tr>
							<th align="right">Material</th><th>:</th>
							<td><input type="text" name="material" value="{$r.material}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Tamaño m2</th><th>:</th>
							<td><input type="text" name="tamaño_m2" value="{$r.tamaño_m2}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Color</th><th>:</th>
							<td><input type="text" name="color" value="{$r.color}" disabled=""></td>
						</tr>
						<tr>
							<th align="right">Descripcion</th><th>:</th>
							<td><input type="text" name="descripcion" value="{$r.descripcion}" disabled=""></td>
						</tr>
						
						{/foreach}
					</table>
						
				</td>
			</tr>
		</table>
		
	</center>
	
</body>
</html>