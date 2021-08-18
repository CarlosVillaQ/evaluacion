<?php
session_start();
require_once("../../smarty/libs//Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$__id_horario_trabajador = $_REQUEST["id_horario_trabajador"];
$__id_trabajador = $_REQUEST["id_trabajador"];

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
					FROM horarios_trabajadores 
					WHERE id_horario_trabajador = ?
					");


$rs = $db->GetAll($sql, array($__id_horario_trabajador));

$sql2 = $db->Prepare("SELECT *
					FROM trabajadores
					WHERE id_trabajador = ?
					AND estado <> 0
					");


$rs2 = $db->GetAll($sql2, array($__id_trabajador));

$sql3 = $db->Prepare("SELECT *
					FROM trabajadores
					WHERE id_trabajador <> ?
					AND estado <> 0
					");


$rs3 = $db->GetAll($sql3, array($__id_trabajador));



$smarty->assign("horario_trabajador",$rs);
$smarty->assign("trabajador", $rs2);
$smarty->assign("trabajadores", $rs3);
$smarty->assign("direc_css", $direc_css);
$smarty->display("horario_trabajador_modificar.tpl");
?>