<?php 
require("../../conexion.php");
$loteria=$_POST['loteria'];
  function fechaCastellano ($fecha) {
  $fecha = substr($fecha, 0, 10);
  $numeroDia = date('d', strtotime($fecha));
  $dia = date('l', strtotime($fecha));
  $mes = date('F', strtotime($fecha));
  $anio = date('Y', strtotime($fecha));
  $dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
  $dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
  $nombredia = str_replace($dias_EN, $dias_ES, $dia);
  $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
  $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
  $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
  return $nombredia." ".$numeroDia." de ".$nombreMes." de ".$anio;
}
?>
	<table class="table table-striped">
        <thead>
			<tr>
				<th>Resultado </th>
				<th>fecha</th>
				<th>Eliminar</th>
				</tr>
		</thead>
		<?php
		$re=mysqli_query($link,"select * from resultados_loterias  where id_loteria=$loteria order by id desc")or die();
		while ($f=mysqli_fetch_array($re)) {
        ?>
		<tbody>
			<tr>
				<td><?php echo $f['resultado'];?></td>
				<td><?php 
				$timezone  = -5; //(GMT -5:00) EST (U.S. & Canada) 
				$hoy = gmdate("Y-m-j", time() + 3600*($timezone+date("I"))); 
				if($f['fecha']==$hoy){echo "HOY";}else{echo fechaCastellano($f['fecha']);}; ?></td>
				<td><a href="loterias/eliminar_resultado.php?id=<?php echo $f['id']."&id_lot=".$f['id_loteria']; ?>"><img style="width: 30px" src="http://www.iconsdb.com/icons/preview/caribbean-blue/trash-2-xxl.png"></a></td>
			</tr>
		</tbody>
		<?php } ?>
		</table>
