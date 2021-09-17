<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$genero = $_REQUEST["genero"];

$smarty = new Smarty;
//$db->debug=true;
if ($genero == "T") {
	$sql = $db->Prepare("SELECT *
						   FROM trabajadores
						   WHERE estado <> 0
						   ");
	$rs = $db->GetAll($sql);
} else {
	$sql = $db->Prepare("SELECT *
						 FROM trabajadores
						 WHERE genero = ?
						 AND estado <> 0

						 ");
	$rs = $db->GetAll($sql, array($genero));
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
$smarty->assign("trabajadores_genero1", $rs);
$smarty->assign("fecha", $fecha);
$smarty->assign("direc_css", $direc_css);
$smarty->display("rpt_trabajadores_genero1.tpl");
?>