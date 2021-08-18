<!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta charset="utf-8">
	{literal}
	<script type="text/javascript">
	 function validar(){
	 	caracteristicas = document.formu.caracteristicas.value;
	 	if (document.formu.caracteristicas.value =="") {
	 		alert("Por favor seleccione el material");
	 		document.formu.caracteristicas.focus();
	 		return;
	 	}
	 	ventanaCalendario = window.open("rpt_proveedores_material1.php?caracteristicas=" + caracteristicas , "calendario", "width=600,height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
	 }
	</script>
	{/literal}
</head>
<body>
	<div class="formu_ingreso_datos">
		<h2> RPT DE PROVEEDORES POR MATERIAL</h2>
		<form method="post" name="formu">
		<p>
		  <b>*Seleccione material</b>
		  <select name="caracteristicas">
		  	<option value="">--Seleccione--</option>
		  	<option value="T">Todos</option>
		  	<option value="VENTA DE MADERA">Madera</option>
		  	<option value="VENTA DE BARNIZ">Barniz</option>
		  	<option value="VENTA DE MELAMINA">Melamina</option>
		  	<option value="VENTA DE FERRETERIA">Ferreteria</option>
		  </select>
		 </p>
		 <p>
		 	<input type="hidden" name="accion" value="">
		 	<input type="button" value="Aceptar" onclick="validar();" class="boton">
		 </p>
		</form>
	</div>
</body>
</html>