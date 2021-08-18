<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		var ventanaCalendario= false
			function imprimir(){
				if(confirm('Desea Imprimir ?')){
					window.print();
				}
			}
	</script>
</head>
<body style='cursor:pointer;cursor:hand' onclick='imprimir();'>
	<table width="100%" border="0">
		<tr>
			<td> <img src="../carpinteria/logos/{$logo_carpinteria}" width="70%"></td>
			<td align="center" width="80%"><h1>HORARIOS TRABAJADORES</h1></td>
		</tr>
	</table>
	<br>
	<center>
		<table border="1" cellspacing="0">
			<tr>
				<th>NRO</th><th>TRABAJADOR</th><th>HORARIO ENTRADA</th><th>HORARIO SALIDA</th>
			</tr>
			{assign var ="b" value="1"}
			{foreach item=r from=$trabajadores_horarios}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.nombres} {$r.apellidos}</td>
				<td>{$r.hora_entrada}</td>
				<td>{$r.hora_salida}</td>
				{assign var="b" value="`$b+1`"}
				{/foreach}
			</tr>
		</table>
		<br><br>
		<b>Fecha:</b>{$fecha}
	</center>
	
</body>
</html>
