<?php
require_once('conexion.php');
mysql_select_db($database,$conexion);
$consulta3 = mysql_query(" select * from funcionario_monitorias where identificacion='$_REQUEST[identificacion_moni]'",$conexion) or die("Problemas en el select:".mysql_error());

if($seleccion1= mysql_fetch_array($consulta3))
{
?>

ID:
<?php echo  $seleccion1['idFuncionario_Monitorias']; ?><br /><br>

IDENTIFICACION:
<?php echo  $seleccion1['identificacion']; ?><br /><br>

Nombre:
<?php echo  $seleccion1['nombre']; ?><br />

APELLIDO:
<?php echo  $seleccion1['apellido']; ?><br />

TELEFONO:
<?php echo  $seleccion1['telefono']; ?><br />

CORREO:
<?php echo  $seleccion1['correo']; ?><br />

CONTRASEŅA:
<?php echo  $seleccion1['contraseņa']; ?><br />
<br>
<br>


<form method="POST" action="eliminar_funcionario_monitorias.php">
Si Desea Eliminar De Este Usuario o De Otro confirme ID:<br>
<input type="number" name="idFuncionario_Monitorias" size="5" placeholder="Indetificacion" required />

<input type="submit" value="BORRAR" />

</form>

<?php
}

else
{
	echo "El registro no existe en la base de datos, vuelva a intentarlo";
}
?>