<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
	  var ventanaCalendario=false
	  	function imprimir(){
	  	  if (confirm(' Desea Imprimir ?')){
	  	  	window.print();
	  	  }
	  	}
	</script>
</head>
<body style='cursor:pointer;cursor:hand' onClick='imprimir();'>
   <table width="100%" border="0">
   	 <tr>
   	 	<td> <img src="../carpinteria/logos/{$logo_carpinteria}" width="70%"></td>
   	 	<td align="center" width="80%">
   	 		<h1> MUEBLES -- MATERIAL </h1>
   	 	</td>
   	 </tr>
   </table>
   <br>
   <center>
   	<table border="1" cellspacing="0">
   	  <tr>
   	  	<th>NRO</th><th>NOMBRES</th><th>APELLIDOS</th><th>MATERIAL</th><th>TELEFONO</th>
   	  </tr>
   	  {assign var="b" value="1"}
   	  {foreach item=r from=$proveedores_material1}
   	  <tr>
   	  	<td align="center">{$b}</td>
   	  	<td>{$r.nombres}</td>
   	  	<td>{$r.apellidos}</td>
   	  	<td>{if $r.caracteristicas=="VENTA DE MADERA"}VENTA DE MADERA{else}{if $r.caracteristicas =="VENTA DE BARNIZ"}VENTA DE BARNIZ{else}{if $r.caracteristicas == "VENTA DE MELAMINA"}VENTA DE MELAMINA{else}VENTA DE FERRETERIA{/if}{/if}{/if}</td>
         <td>{$r.telefono}</td>
   	  	{assign var="b" value="`$b+1`"}
   	  	{/foreach}
   	  </tr>
   	</table>
   	<br><br>
   	<b>Fecha:</b> {$fecha}
   </center>
</body>
</html>