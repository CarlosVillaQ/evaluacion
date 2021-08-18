<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__id_trabajador = $_POST["id_trabajador"];
$__hora_entrada = $_POST["hora_entrada"];
$__hora_salida = $_POST["hora_salida"];
$__dias = $_POST["dias"];

//$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["id_trabajador"] = $__id_trabajador;
$reg["hora_entrada"] = $__hora_entrada;
$reg["hora_salida"] = $__hora_salida;
$reg["dias"] = $__dias;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = 1;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("horarios_trabajadores",$reg,"INSERT");

if($rs1){
	header("Location: horario_trabajadores.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("horario_trabajador_nuevo1.tpl");
}
?>