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
   	 		<h1> CLIENTES -- ANTIGUEDAD </h1>
   	 	</td>
   	 </tr>
   </table>
   <br>
   <center>
   	<table border="1" cellspacing="0">
   	  <tr>
   	  	<th>NRO</th><th>APELLIDOS</th><th>NOMBRES</th><th>TELEFONO</th><th>TIPO CLIENTE</th>
   	  </tr>
   	  {assign var="b" value="1"}
   	  {foreach item=r from=$clientes_antiguedad1}
   	  <tr>
   	  	<td align="center">{$b}</td>
   	  	<td>{$r.nombres}</td>
   	  	<td>{$r.apellidos}</td>
         <td>{$r.telefono}</td>
   	  	<td>{if $r.tipo_cliente=='N'}NUEVO{else}ANTIGUO{/if}</td>
   	  	{assign var="b" value="`$b+1`"}
   	  	{/foreach}
   	  </tr>
   	</table>
   	<br><br>
   	<b>Fecha:</b> {$fecha}
   </center>
</body>
</html>