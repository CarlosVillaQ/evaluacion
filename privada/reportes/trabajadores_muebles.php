<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

//$db->debug=true;


$sql = $db->Prepare("SELECT *
					 FROM trabajadores t
					 INNER JOIN muebles m ON t.id_trabajador = m.id_trabajador
					 WHERE t.estado <> 0 
					 AND m.estado <> 0
					 ORDER BY (m.id_trabajador) DESC
					 ");
$rs = $db->GetAll($sql);

$smarty->assign("trabajadores_muebles", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("trabajadores_muebles.tpl");
?>