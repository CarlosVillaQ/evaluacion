<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href ="../{$direc_css}" type ="text/css">
	<script type="text/javascript" src="../js/expresiones_regulares.js"></script>
	<script type="text/javascript" src="js/validar_trabajador.js"></script>
</head>
<body>
	<div class="formu_ingreso_datos">
		<form action="trabajador_modificar1.php" method="post" name="formu">
			<h2>MODIFICAR TRABAJADOR</h2>
			{foreach item =r from=$trabajador}
			  <p>
			  <input type="text" name="ci" size="15" placeholder="Carnet de Identidad" onkeyup="this.value=this.value.toUpperCase()" value="{$r.ci}">(*)
			</p>
			<p>
			  <input type="text" name="nombres" size="15" placeholder="Nombres" onkeyup="this.value=this.value.toUpperCase()" value="{$r.nombres}">(*)
			</p>
			<p>
			  <input type="text" name="apellidos" size="15" placeholder="Apellidos" onkeyup="this.value=this.value.toUpperCase()" value="{$r.apellidos}">(*)
			</p>
			<p>
			  <input type="text" name="telefono" size="15" placeholder="Telefono" value="{$r.telefono}">
			</p>
			<p> 
				<input type="text" name="fecha_nac" size="15" placeholder="Fecha Nacimiento" value="{$r.fecha_nac}">(*)
			</p>
			<p> 
				<input type="text" name="fecha_inicio" size="15" placeholder="Fecha Inicio de Contrato" value="{$r.fecha_inicio}" >(*)
			</p>
			<p> 
				<input type="text" name="fecha_fin" size="15" placeholder="Fecha Fin de Contrato" value="{$r.fecha_fin}" >(*)
			</p>
			<p>
				<input type="hidden" name="accion" value="">
				<input type="hidden" name="id_trabajador" value="{$r.id_trabajador}">
				<input type="button" value="Aceptar" name="Aceptar" onclick="validar();" class="boton2" >
				<input type="button" value="Cancelar" name="Cancelar" onclick="javascript:location.href='trabajadores.php';" class="boton2" >
			</p>
			{/foreach}
			<p><b>(*)Campos Obligatorios</b></p>
		</form>
		
	</div>
</body>
</html>
