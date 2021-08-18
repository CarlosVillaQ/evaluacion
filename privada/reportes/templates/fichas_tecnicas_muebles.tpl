<!DOCTYPE html>
<html lang="esp">
<head>
	<link rel="stylesheet" href="../{$direc_css}" type="text/css">
	<meta charset="utf-8">
	<script type="text/javascript" src="../../ajax.js"></script>
	<script type="text/javascript">
	  function buscar() {
	  var d1, d2, d3, contenedor, ajax, url, param;
	    contenedor = document.getElementById('muebles1');
	    d1 = document.formu.material.value;
	    d2 = document.formu.tamaño_m2.value;
	    d3 = document.formu.descripcion.value;
	    ajax = nuevoAjax();
	    url = "ajax_buscar_mueble.php"
	    param = "&material="+d1+"&tamaño_m2="+d2+"&descripcion="+d3;
	    //alert(param);
	    ajax.open("POST", url, true);
	    ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	    ajax.onreadystatechange = function() {
	    	if (ajax.readyState == 3) {
	    		contenedor.innerHTML = ajax.responseText;
	    	}
	    }
	    ajax.send(param);
	  }

	  function mostrar(id_tipo_mueble) {
	  var d1, ventanaCalendario;
	  d1 = id_tipo_mueble;
	  //alert(id_tipo_mueble);
	  ventanaCalendario = window.open("fichas_tecnicas_muebles1.php?id_tipo_mueble=" + d1 , "calendario", "width=600, heigth=550,left=100,top=100,scrollbars=yes,menubars=no,estatusbar=NO,status=NO,resizable=YES,location=NO")
	  }
	</script>
</head>
<body>
	<!------BUSCADOR------------------>
	<center>
	<h1> FICHAS TECNICAS DEL TIPO DE MUEBLES </h1>
	<form action="#" method="post" name="formu">
	<table border="1" class="listado">
		<tr>
			<th>
				<b>Material</b><br />
				<input type="text" name="material" value="" size="10" onKeyUp="buscar()">
			</th>
			<th>
				<b>Tamaño m2</b><br />
				<input type="text" name="tamaño_m2" value="" size="10" onKeyUp="buscar()">
			</th>
			<th>
				<b>Descripcion</b><br />
				<input type="text" name="descripcion" value="" size="10" onKeyUp="buscar()">
			</th>
		</tr>
	</table>
	</form>
	</center>
		<!-----------BUSCADOR--------------------->
		<center>
		  <div id="muebles1">
		  </div>
		
</body>
</html>