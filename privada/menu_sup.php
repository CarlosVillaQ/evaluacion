<?php
session_start();//abrir la sesion
require_once("../smarty/libs/Smarty.class.php");
require_once("../conexion.php");

$smarty = new Smarty;

//$db->debug=true;
if(isset($_SESSION["sesion_id_usuario"])) {
	$sesion = array("id_usuario" => $_SESSION["sesion_id_usuario"],
					"usuario" => $_SESSION["sesion_usuario"],
					"id_rol" => $_SESSION["sesion_id_rol"],
					"rol" => $_SESSION["sesion_rol"],
					);
	$login = "NO";
} else {
	$sesion = array ("id_usuario" => "----",
					 "usuario" => "----",
					 "id_rol" => "----",
					 "rol"=>"----",
					);
	$login = "SI";
}

/*PARA VOLVER AUTOGESTIONABLE EL NOMBRE DE LA AGENCIA Y EL LOGO*/
$sql1 = $db->Prepare("SELECT *
					  FROM carpinteria
					  WHERE id_carpinteria = 1
					  AND estado <> 0
					  ");
	$rs1 = $db->GetAll($sql1);
	$nombre = $rs1[0]["nombre"];
	$logo_carpinteria = $rs1[0]["logo_carpinteria"];
	$smarty->assign("nombre", $nombre);
	$smarty->assign("logo_carpinteria", $logo_carpinteria);

$smarty->assign("sesion", $sesion);
$smarty->assign("login", $login);
$smarty->assign("direc_css", $direc_css);
$smarty->display("menu_sup.tpl");
?>