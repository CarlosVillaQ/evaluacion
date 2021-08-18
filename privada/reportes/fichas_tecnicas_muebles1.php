<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$id_tipo_mueble = $_REQUEST["id_tipo_mueble"];

$smarty = new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
					 FROM tipo_muebles
					 WHERE id_tipo_mueble = ?
					 AND estado <> 0

					 ");
$rs = $db->GetAll($sql, array($id_tipo_mueble));
$sql1 = $db->Prepare("SELECT *
						FROM carpinteria
						WHERE id_carpinteria = 1
						AND estado <> 0
						");
$rs1 = $db->GetAll($sql1);
$nombre = $rs1[0]["nombre"];
$logo_carpinteria = $rs1[0]["logo_carpinteria"];
$smarty->assign("logo_carpinteria", $logo_carpinteria);

$smarty->assign("tipo_mueble", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("fichas_tecnicas_muebles1.tpl");
?>