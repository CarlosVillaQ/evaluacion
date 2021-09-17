<?php
/* Smarty version 3.1.36, created on 2021-09-17 22:41:11
  from 'C:\wamp64\www\sis_carpinteria\privada\trabajadores\templates\trabajadores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_61451987077039_46728891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10aaa013917231bb042e06f6620ce83dfe8cc498' => 
    array (
      0 => 'C:\\wamp64\\www\\sis_carpinteria\\privada\\trabajadores\\templates\\trabajadores.tpl',
      1 => 1620872739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61451987077039_46728891 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="titulo_listado">
		<h1>
			TRABAJADORES
		</h1>
	</div>
	<div class="titulo_nuevo">
		<form name="formNuevo" method="post" action="trabajador_nuevo.php">
		   <a href="javascript:document.formNuevo.submit();">
		   	Nuevo>>>
		   </a>
		</form>
	</div>
	<center>
		<table class="listado">
			<tr>
				<th>NRO</th><th>NOMBRES</th><th>APELLIDOS</th><th>TELEFONO</th>
				<th><img src="../../img/editar.png"></th>
				<th><img src="../../img/eliminar.png"></th>
			</tr>
			<?php $_smarty_tpl->_assignInScope('b', "0");?>
			<?php $_smarty_tpl->_assignInScope('total', ((string)($_smarty_tpl->tpl_vars['pagina']->value-1)));?>
			<?php $_smarty_tpl->_assignInScope('a', ((string)($_smarty_tpl->tpl_vars['numreg']->value*$_smarty_tpl->tpl_vars['total']->value)));?>
			<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1+$_smarty_tpl->tpl_vars['a']->value)));?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trabajadores']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
			<tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['r']->value['apellidos'];?>
</td>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['r']->value['telefono'];?>
</td>
				<td align="center">
					<form name="formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_trabajador'];?>
" method="post" action="trabajador_modificar.php">
						<input type="hidden" name="id_trabajador" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_trabajador'];?>
">
						<a href="javascript:document.formModif<?php echo $_smarty_tpl->tpl_vars['r']->value['id_trabajador'];?>
.submit();" title="Modificar Trabajador Sistema">
							Modificar>>
						</a>
					</form>
				</td>
				<td align="center">
					<form name="formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_trabajador'];?>
" method="post" action="trabajador_eliminar.php">
						<input type="hidden" name="id_trabajador" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_trabajador'];?>
">
						<a href="javascript:document.formElimi<?php echo $_smarty_tpl->tpl_vars['r']->value['id_trabajador'];?>
.submit();" title="Eliminar Trabajador Sistema" onclick="javascript:return(confirm('Desea realmente Eliminar al Trabajador <?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value['apellidos'];?>
?')); location.href='trabajador_eliminar.php'">
							Eliminar>>
						</a>
					</form>
				</td>
				<?php $_smarty_tpl->_assignInScope('b', ((string)($_smarty_tpl->tpl_vars['b']->value+1)));?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>
		</table>

		<!--PAGINACION------------->
		<table>
			<tr align="center">
				<td>
					<?php if (!empty($_smarty_tpl->tpl_vars['urlback']->value)) {?>
					<a onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['urlback']->value;?>
'" style="font-family: Verdana; font-size: 9px;cursor:pointer"; >&laquo;
					Anterior</a>
				  <?php }?>
				  <?php if (!empty($_smarty_tpl->tpl_vars['paginas']->value)) {?>
				  	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paginas']->value, 'pag');
$_smarty_tpl->tpl_vars['pag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pag']->value) {
$_smarty_tpl->tpl_vars['pag']->do_else = false;
?>
				  		<?php if ($_smarty_tpl->tpl_vars['pag']->value['npag'] == $_smarty_tpl->tpl_vars['pagina']->value) {?>
				  			<?php if ($_smarty_tpl->tpl_vars['pagina']->value != '1') {?>|<?php }?><b style="color:#FB992F;font-size: 12px;"><?php echo $_smarty_tpl->tpl_vars['pag']->value['npag'];?>
</b>
				  		<?php } else { ?>
				  		| <a onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['pag']->value['pagV'];?>
'" style="cursor:pointer;"><?php echo $_smarty_tpl->tpl_vars['pag']->value['npag'];?>
 </a>
				  		<?php }?>
				  	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				  	<?php }?>
				  	<?php if ($_smarty_tpl->tpl_vars['numpaginas']->value > $_smarty_tpl->tpl_vars['numbotones']->value && !empty($_smarty_tpl->tpl_vars['urlnext']->value) && $_smarty_tpl->tpl_vars['pagina']->value < $_smarty_tpl->tpl_vars['numpaginas']->value) {?>
				  	|<a onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['urlnext']->value;?>
'" style="font-family: Verdana;font-size: 9px;cursor:pointer">Siguiente&raquo;</a>
				  	<?php }?>	
				</td>
			</tr>
		</table>
	  </center>
   </body>
</html>
<?php }
}
