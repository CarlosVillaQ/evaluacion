"use strict"
function validar(){
	var id_cliente = document.formu.id_cliente.value;
	var fecha_venta = document.formu.fecha_venta.value;
	var monto_venta = document.formu.monto_venta.value;

	if (id_cliente == "") {
		alert("Por favor seleccione un cliente");
		document.formu.id_cliente.focus();
		return;
	}
	if (fecha_venta==""){
		alert("El campo fecha esta vacio");
		document.formu.fecha_venta.focus();
		return;
	}
		if (monto_venta==""){
		alert("El campo monto esta vacio");
		document.formu.monto_venta.focus();
		return;
	}
	
		document.formu.submit();

}