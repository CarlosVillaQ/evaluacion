<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$fecha1 = $_REQUEST["fecha1"];
$fecha2 = $_REQUEST["fecha2"];
$smarty = new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
						FROM ventas
						WHERE fecha_venta BETWEEN ? AND ?
						AND estado <> 0
						");
$rs = $db->GetAll($sql, array($fecha1, $fecha2));

$sql1 = $db->Prepare("SELECT *
						FROM carpinteria
						WHERE id_carpinteria = 1
						AND estado <> 0
						");
$rs1 = $db->GetAll($sql1);
$nombre = $rs1[0]["nombre"];
$logo_carpinteria = $rs1[0]["logo_carpinteria"];

$smarty->assign("fecha_ventas1", $rs);
$smarty->assign("logo_carpinteria", $logo_carpinteria);
$smarty->assign("fecha1", $fecha1);
$smarty->assign("fecha2", $fecha2);

$smarty->assign("direc_css", $direc_css);
$smarty->display("fecha_ventas1.tpl");
?>