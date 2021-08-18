<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__id_trabajador = $_REQUEST["id_trabajador"];


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
$reg["ci"] = $__ci;
$reg["nombres"] = $__nombres;
$reg["apellidos"] = $__apellidos;
$reg["telefono"] = $__telefono;
$reg["fecha_nac"] = $__fecha_nac;
$reg["fecha_inicio"] = $__fecha_inicio;
$reg["fecha_fin"] = $__fecha_fin;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("trabajadores",$reg,"UPDATE", "id_trabajador='".$__id_trabajador."'");

if($rs1){
	header("Location: trabajadores.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_trabajador", $__id_trabajador);
	$smarty->display("trabajador_modificar1.tpl");
}
?>