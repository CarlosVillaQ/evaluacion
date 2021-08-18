<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$smarty = new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
					 FROM clientes c, ventas v
					 WHERE c.id_cliente = v.id_cliente
					 AND c.estado <> 0
					 AND v.estado <> 0
					 ORDER BY (c.id_cliente) DESC
					 ");
$rs = $db->GetAll($sql);

$sql1 = $db->Prepare("SELECT *
						FROM carpinteria
						WHERE id_carpinteria = 1
						AND estado <> 0
						");
$rs1 = $db->GetAll($sql1);
$nombre = $rs1[0]["nombre"];
$logo_carpinteria = $rs1[0]["logo_carpinteria"];

$fecha= date("Y-m-d H:i:s");

$smarty->assign("clientes_ventas", $rs);
$smarty->assign("logo_carpinteria", $logo_carpinteria);
$smarty->assign("fecha", $fecha);

$smarty->assign("direc_css", $direc_css);
$smarty->display("clientes_ventas1.tpl");
?>