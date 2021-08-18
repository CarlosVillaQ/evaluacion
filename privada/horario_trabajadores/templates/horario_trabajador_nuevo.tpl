<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href ="../{$direc_css}" type ="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_horario_trabajador.js"></script>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="horario_trabajador_nuevo1.php" method="post" name="formu">
			<h2><center>REGISTRAR HORARIO TRABAJADORES</center></h2>
				<b>Trabajador (*)</b>
					<select name="id_trabajador">
					 <option value="">-- seleccione --</option>
					 {foreach item=r from=$trabajadores}
						<option value="{$r.id_trabajador}">{$r.nombres}-{$r.apellidos}</option>
					 {/foreach}
					</select>
			<p> 
				<b>Hora Entrada (*)</b>
				<input type="text" name="hora_entrada" size="15" placeholder="00:00" >
			</p>
			<p>
				<b>Hora Salida (*)</b>
			  <input type="text" name="hora_salida" size="15" placeholder="00:00" >
			</p>
			<p>
				<b>Dias (*)</b>
			  <input type="text" name="dias" size="15" placeholder="LUNES-SABADO" onkeyup="this.value=this.value.toUpperCase()" >
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="button" value ="Aceptar" onclick="validar();" class="boton2">
				<input type="button" value ="Cancelar" onclick="javascript:location.href='horario_trabajadores.php';" class="boton2">
			</p>
			<p><b>(*)Campos Obligatorios</b></p>
		</form>	
	</div>
  </body>
</html>
