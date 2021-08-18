"use strict"
function validar(){
	var id_trabajador = document.formu.id_trabajador.value;
	var hora_entrada = document.formu.hora_entrada.value;
	var hora_salida = document.formu.hora_salida.value;
	var dias = document.formu.dias.value;
	
	if (id_trabajador == "") {
		alert("Por favor seleccione un trabajador");
		document.formu.id_trabajador.focus();
		return;
	}
	if (hora_entrada==""){
		alert("El campo Hora Entrada esta vacio");
		document.formu.hora_entrada.focus();
		return;
	}
	if (hora_salida==""){
		alert("El campo Hora Salida esta vacio");
		document.formu.hora_salida.focus();
		return;
	}
	if (dias==""){
		alert("El campo Dias esta vacio");
		document.formu.dias.focus();
		return;
	}
	

		document.formu.submit();

}