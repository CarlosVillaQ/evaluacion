"use strict"
function validar(){
	
	var nombres = document.formu.nombres.value;
	var apellidos = document.formu.apellidos.value;
	var ci = document.formu.ci.value;
	var fecha_nac = document.formu.fecha_nac.value;
	var fecha_inicio = document.formu.fecha_inicio.value;
	var fecha_fin = document.formu.fecha_fin.value;

	if((!v2.test(ci)) || (ci ="")){
		alert("El campo ci es incorrecto o esta vacio");
		document.formu.ci.focus();
		return;
	}
	if ((!v1.test(nombres)) || (nombres == "")) {
		alert("Los nombres son incorrectos o el campo esta vacio");
		document.formu.nombres.focus();
		return;
	}

	if ((!v1.test(apellidos)) || (apellidos == "")) {
		alert("Los apellidos son incorrectos o el campo esta vacio");
		document.formu.apellidos.focus();
		return;
	}
	
	if(fecha_nac =""){
		alert("El campo Fecha Nacimiento esta vacio");
		document.formu.ci.focus();
		return;
	}
	if(fecha_inicio =""){
		alert("El campo Fecha Inicio de Contrato esta vacio");
		document.formu.ci.focus();
		return;
	}
	if(fecha_fin =""){
		alert("El campo Fecha Fin de Contrato esta vacio");
		document.formu.ci.focus();
		return;
	}
	document.formu.submit();


}
