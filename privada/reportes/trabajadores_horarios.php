<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

//$db->debug=true;

$sql = $db->Prepare("SELECT *
					 FROM trabajadores t, horarios_trabajadores hor
					 WHERE t.id_trabajador = hor.id_trabajador
					 AND t.estado <> 0
					 AND hor.estado <> 0
					 ORDER BY (hor.id_trabajador) DESC
					 ");
$rs = $db->GetAll($sql);

$smarty->assign("trabajadores_horarios", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("trabajadores_horarios.tpl");
?>