<!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta charset="utf-8">
	{literal}
	<script type="text/javascript">
	 function validar(){
	 	material = document.formu.material.value;
	 	if (document.formu.material.value =="") {
	 		alert("Por favor seleccione el material");
	 		document.formu.material.focus();
	 		return;
	 	}
	 	ventanaCalendario = window.open("rpt_muebles_material1.php?material=" + material , "calendario", "width=600,height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
	 }
	</script>
	{/literal}
</head>
<body>
	<div class="formu_ingreso_datos">
		<h2> RPT DE MUEBLES POR MATERIAL</h2>
		<form method="post" name="formu">
		<p>
		  <b>*Seleccione material</b>
		  <select name="material">
		  	<option value="">--Seleccione--</option>
		  	<option value="T">Todos</option>
		  	<option value="MC">Madera Cedro</option>
		  	<option value="MR">Madera Roble</option>
		  	<option value="M">Melamina</option>
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