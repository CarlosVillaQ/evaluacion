<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
$db->debug=true;
$nombres1 = $_POST["nombres1"];
$apellidos1 = $_POST["apellidos1"];
$telefono1 = $_POST["telefono1"];

$reg = array();
$reg["id_carpinteria"] = 1;
$reg["nombres"] = $nombres1;
$reg["apellidos"] = $apellidos1;
$reg["telefono"] = $telefono1;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["estado"] = '1';
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("clientes", $reg, "INSERT");

?>
