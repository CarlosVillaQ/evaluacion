<!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta charset="utf-8">
	{literal}
	<script type="text/javascript">
	 function validar(){
	 	antiguedad = document.formu.antiguedad.value;
	 	if (document.formu.antiguedad.value =="") {
	 		alert("Por favor seleccione la antiguedad del cliente");
	 		document.formu.antiguedad.focus();
	 		return;
	 	}
	 	ventanaCalendario = window.open("rpt_clientes_antiguedad1.php?antiguedad=" + antiguedad , "calendario", "width=600,height=550,left=100,top=100,scrollbars=yes,menubars=no,statusbar=NO,status=NO,resizable=YES,location=NO")
	 }
	</script>
	{/literal}
</head>
<body>
	<div class="formu_ingreso_datos">
		<h2> RPT DE CLIENTES POR ANTIGUEDAD</h2>
		<form method="post" name="formu">
		<p>
		  <b>*Seleccione tipo Cliente</b>
		  <select name="antiguedad">
		  	<option value="">--Seleccione--</option>
		  	<option value="T">TODOS</option>
		  	<option value='A'>ANTIGUO</option>
		  	<option value='N'>NUEVO</option>
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