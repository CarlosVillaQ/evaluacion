<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="titulo_listado">
		<h1><center>HORARIO TRABAJADORES</center></h1>
	</div>
	<div class="titulo_nuevo">
		<form name="formNuevo" method="post" action="horario_trabajador_nuevo.php">
		   <a href="javascript:document.formNuevo.submit();">
		   	Nuevo>>>
		   </a>
		</form>
	</div>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>TRABAJADOR</th><th>HORA ENTRADA</th><th>HORA SALIDA</th><th>DIAS</th>
				<th><img src="../../img/editar.png"></th>
				<th><img src="../../img/eliminar.png"></th>
			</tr>
			</tr>
			{assign var="b" value="1"}
			{foreach item=r from=$horarios_trabajadores}
			<tr>
				<td align="center">{$b}</td>
				<td>{$r.nombres} {$r.apellidos}</td>
				<td>{$r.hora_entrada}</td>
				<td>{$r.hora_salida}</td>
				<td>{$r.dias}</td>
				<td align="center">
					<form name="formModif{$r.id_horario_trabajador}" method="post" action="horario_trabajador_modificar.php">
						<input type="hidden" name="id_horario_trabajador" value="{$r.id_horario_trabajador}">
						<input type="hidden" name="id_trabajador" value="{$r.id_trabajador}">
						<a href="javascript:document.formModif{$r.id_horario_trabajador}.submit();" title="Modificar Horario Trabajadores">
							Modificar>>
						</a>
					</form>
				</td>
				<td align="center">
					<form name="forElimi{$r.id_horario_trabajador}" method="post" action="horario_trabajador_eliminar.php">
					<input type="hidden" name="id_horario_trabajador" value="{$r.id_horario_trabajador}">
					<a href="javascript:document.forElimi{$r.id_horario_trabajador}.submit();" title="Eliminar Horarios Trabajadores" onclick='javascript:return(confirm("Desea realmente Eliminar el horario del trabajador::: {$r.nombres} {$r.apellidos}?"));'>Eliminar>></a>	
					</form>
				</td>
				{assign var="b" value="`$b+1`"}
				{/foreach}
				
			</tr>
		</table>
	  </center>
   </body>
</html>
