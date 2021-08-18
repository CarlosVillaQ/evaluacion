<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

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

$smarty->assign("clientes_ventas", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("clientes_ventas.tpl");
?>