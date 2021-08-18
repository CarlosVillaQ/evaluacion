<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombres = strip_tags(stripslashes($_POST["nombres"]));
$apellidos = strip_tags(stripslashes($_POST["apellidos"]));
$telefono = strip_tags(stripslashes($_POST["telefono"]));
$caracteristicas = strip_tags(stripslashes($_POST["caracteristicas"]));

//$db->debug=true;
if($nombres or $apellidos or $telefono or $caracteristicas){
	$sql3 = $db->Prepare("SELECT *
						  FROM proveedores
						  WHERE nombres LIKE ?
						  AND apellidos LIKE ?
						  AND telefono LIKE ?
						  AND caracteristicas LIKE ?
						  AND estado <> 0
						  ");
	$rs3 = $db->GetAll($sql3, array($nombres."%", $apellidos."%", $telefono."%", $caracteristicas."%"));
	if($rs3){
		echo "<center>
				<table class='listado'>
				<tr>
					<th>CARACTERISTICAS</th><th>NOMBRES</th><th>APELLIDOS</th><th>TELEFONO</th><th>SELECCIONE</th>
				</tr>";
		foreach ($rs3 as $k => $fila) {
			$str = $fila["caracteristicas"];
			$str1 = $fila["nombres"];
			$str2 = $fila["apellidos"];
			$str3 = $fila["telefono"];
			echo"<tr>
				<td align= 'center'>".resaltar($caracteristicas, $str)."</td>
				<td>".resaltar($nombres, $str1)."</td>
				<td>".resaltar($apellidos, $str2)."</td>
				<td>".resaltar($telefono, $str3)."</td>
				<td align= 'center'>
					<input type='radio' name= 'seleccione' value= '".$fila['id_proveedor']."'onclick='mostrar(".$fila["id_proveedor"].")'>
					</td>
					</tr>";
			
		}
		echo"</table>
		</center>";
	}else {
		echo"<center><b>EL PROVEEDOR NO EXISTE!!</b></center><br>";
	}
}

?>