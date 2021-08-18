<?php
session_start();
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$material = strip_tags(stripslashes($_POST["material"]));
$tamaño_m2 = strip_tags(stripslashes($_POST["tamaño_m2"]));
$descripcion = strip_tags(stripslashes($_POST["descripcion"]));

//$db->debug=true;
if($material or $tamaño_m2 or $descripcion){
	$sql3 = $db->Prepare("SELECT *
						  FROM tipo_muebles
						  WHERE material LIKE ?
						  AND tamaño_m2 LIKE ?
						  AND descripcion LIKE ?
						  AND estado <> 0
						  ");
	$rs3 = $db->GetAll($sql3, array($material."%", $tamaño_m2."%", $descripcion."%"));
	if($rs3){
		echo "<center>
				<table class='listado'>
				<tr>
					<th>MATERIAL</th><th>TAMAÑO M2</th><th>DESCRIPCION</th><th>SELECCIONE</th>
				</tr>";
		foreach ($rs3 as $k => $fila) {
			$str = $fila["material"];
			$str1 = $fila["tamaño_m2"];
			$str2 = $fila["descripcion"];
			echo"<tr>
				<td align= 'center'>".resaltar($descripcion, $str)."</td>
				<td>".resaltar($material, $str1)."</td>
				<td>".resaltar($tamaño_m2, $str2)."</td>
				<td align= 'center'>
					<input type='radio' name= 'seleccione' value= '".$fila['id_tipo_mueble']."'onclick='mostrar(".$fila["id_tipo_mueble"].")'>
					</td>
					</tr>";
			
		}
		echo"</table>
		</center>";
	}else {
		echo"<center><b>EL TIPO DE MUEBLE NO EXISTE!!</b></center><br>";
	}
}

?>