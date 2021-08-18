<?php
session_start();
require_once("../../smarty/libs//Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

$sql = $db->Prepare("SELECT *
					FROM trabajadores t
					WHERE t.estado <> 0
					ORDER BY t.id_trabajador DESC
					");
$rs = $db->GetAll($sql);

$smarty->assign("trabajadores", $rs);

$smarty->assign("direc_css", $direc_css);
$smarty->display("horario_trabajador_nuevo.tpl");
?>