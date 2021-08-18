<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$__id_horario_trabajador = $_REQUEST["id_horario_trabajador"];

$smarty = new Smarty;

//$db->debug=true;


/*$sql = $db->Prepare("SELECT *
					 FROM ventas
					 WHERE id_cliente = ?
					 AND estado <> 0
					 ");
$rs = $db->GetAll($sql, array($__id_cliente));*/

if (!$rs) {
	$reg = array();
	$reg["estado"] = 0;
	$reg["id_usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("horarios_trabajadores", $reg, "UPDATE", "id_horario_trabajador='".$__id_horario_trabajador."'");
	header("Location:horario_trabajadores.php");
	exit();

} else {
	$smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!!!!!");
	$smarty->assign("direc_css", $direc_css);
	$smarty->display("horario_trabajador_eliminar.tpl");
}
?>




