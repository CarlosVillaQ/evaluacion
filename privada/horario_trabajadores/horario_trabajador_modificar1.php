<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__id_trabajador = $_REQUEST["id_trabajador"];
$__id_horario_trabajador = $_REQUEST["id_horario_trabajador"];
$__hora_entrada = $_POST["hora_entrada"];
$__hora_salida = $_POST["hora_salida"];
$__dias = $_POST["dias"];


$smarty = new Smarty;

$reg = array();
$reg["id_trabajador"] = $__id_trabajador;
$reg["id_horario_trabajador"] = $__id_horario_trabajador;
$reg["hora_entrada"] = $__hora_entrada;
$reg["hora_salida"] = $__hora_salida;
$reg["dias"] = $__dias;
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("horarios_trabajadores",$reg,"UPDATE", "id_horario_trabajador='".$__id_horario_trabajador."'");

if($rs1){
	header("Location: horario_trabajadores.php");
	exit();
}else{
	$smarty->assign("mensaje", "ERROR: Los datos no se insertaron!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->assign("id_horario_trabajador", $__id_horario_trabajador);
	$smarty->display("horario_trabajador_modificar1.tpl");
}
?>