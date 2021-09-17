<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombres = strip_tags(stripslashes($_POST["nombres"]));
$apellidos = strip_tags(stripslashes($_POST["apellidos"]));
$telefono = strip_tags(stripslashes($_POST["telefono"]));
$tipo_cliente = strip_tags(stripslashes($_POST["tipo_cliente"]));

//$db->debug=true;
if($nombres or $apellidos or $telefono or $tipo_cliente){
	$sql3 = $db->Prepare("SELECT *
						  FROM clientes
						  WHERE nombres LIKE ?
						  AND apellidos LIKE ?
						  AND telefono LIKE ?
						  AND tipo_cliente LIKE ?
						  AND estado <> 0
						  ");
	$rs3 = $db->GetAll($sql3, array($nombres."%", $apellidos."%", $telefono."%", $tipo_cliente."%"));
	if($rs3){
		echo "<center>
				<table class='listado'>
				<tr>
					<th>NOMBRES</th><th>APELLIDOS</th><th>TELEFONO</th><th>TIPO CLIENTE</th><th>SELECCIONE</th>
				</tr>";
		foreach ($rs3 as $k => $fila) {
			$str = $fila["nombres"];
			$str1 = $fila["apellidos"];
			$str2 = $fila["telefono"];
			$str3 = $fila["tipo_cliente"];
			echo"<tr>
				<td align= 'center'>".resaltar($nombres, $str)."</td>
				<td>".resaltar($apellidos, $str1)."</td>
				<td>".resaltar($telefono, $str2)."</td>
				<td>".resaltar($tipo_cliente, $str3)."</td>
				<td align= 'center'>
					<input type='radio' name= 'seleccione' value= '".$fila['id_cliente']."'onclick='mostrar(".$fila["id_cliente"].")'>
					</td>
					</tr>";
			
		}
		echo"</table>
		</center>";
	}else {
		echo"<center><b>EL CLIENTE NO EXISTE!!</b></center><br>";
	}
}

?>