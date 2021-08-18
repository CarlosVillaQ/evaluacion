<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href ="../{$direc_css}" type ="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_horario_trabajador.js"></script>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="horario_trabajador_modificar1.php" method="post" name="formu">
			<h2>MODIFICAR HORARIO TRABAJADOR</h2>
				<b>Persona (*)</b>
					<select name="id_trabajador">
					{foreach item =r from=$trabajador}
					 <option value="{$r.id_trabajador}">{$r.nombres} - {$r.apellidos}</option>
					 {/foreach}
					 {foreach item=r from=$trabajadores}
						<option value="{$r.id_trabajador}">{$r.nombres}-{$r.apellidos}</option>
					 {/foreach}
					</select>
			{foreach item = r from=$horario_trabajador}
			<p>
			  <input type="text" name="hora_entrada" size="15" placeholder="Hora Entrada" value="{$r.hora_entrada}">(*)
			</p>
			<p>
			  <input type="text" name="hora_salida" size="15" placeholder="Hora Salida" value="{$r.hora_salida}">(*)
			</p>
			<p>
			  <input type="text" name="dias" size="15" placeholder="Dias" value="{$r.dias}" onkeyup="this.value=this.value.toUpperCase()">(*)
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="hidden" name="id_horario_trabajador" value="{$r.id_horario_trabajador}">
				<input type="button" value ="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value ="Cancelar" onclick="javascript:location.href='horario_trabajadores.php';" class="boton2">
			</p>
			{/foreach}
			<p><b>(*)Campos Obligatorios</b></p>
		</form>	
	</div>
  </body>
</html>