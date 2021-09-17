<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$material = $_REQUEST["material"];

$smarty = new Smarty;
//$db->debug=true;
if ($material == "T") {
	$sql = $db->Prepare("SELECT *
						   FROM tipo_muebles
						   WHERE estado <> 0
						   ");
	$rs = $db->GetAll($sql);
} else {
	$sql = $db->Prepare("SELECT *
						 FROM tipo_muebles
						 WHERE material = ?
						 AND estado <> 0

						 ");
	$rs = $db->GetAll($sql, array($material));
}

$sql1 = $db->Prepare("SELECT *
						FROM carpinteria
						WHERE id_carpinteria = 1
						AND estado <> 0
						");
$rs1 = $db->GetAll($sql1);
$nombre = $rs1[0]["nombre"];
$logo_carpinteria = $rs1[0]["logo_carpinteria"];
$smarty->assign("logo_carpinteria", $logo_carpinteria);

$fecha= date("Y-m-d H:i:s");
$smarty->assign("mueble_material", $rs);
$smarty->assign("fecha", $fecha);
$smarty->assign("direc_css", $direc_css);
$smarty->display("rpt_mueble_material1.tpl");
?>