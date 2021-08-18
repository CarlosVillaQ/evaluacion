<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__ci = $_POST["ci"];
$__nombres = $_POST["nombres"];
$__apellidos = $_POST["apellidos"];
$__telefono = $_POST["telefono"];
$__fecha_nac = $_POST["fecha_nac"];
$__fecha_inicio = $_POST["fecha_inicio"];
$__fecha_fin = $_POST["fecha_fin"];
//$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["id_carpinteria"] = 1;
$reg["ci"] = $__ci;
$reg["nombres"] = $__nombres;
$reg["apellidos"] = $__apellidos;
$reg["telefono"] = $__telefono;
$reg["fecha_nac"] = $__fecha_nac;
$reg["fecha_inicio"] = $__fecha_inicio;
$reg["fecha_fin"] = $__fecha_fin;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = 1;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("trabajadores",$reg,"INSERT");

if($rs1){
	$smarty->assign("mensaje", "DATOS INGRESADOS CORRECTAMENTE");
	header("Location: trabajadores.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("trabajador_nuevo1.tpl");
}
?>