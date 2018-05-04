<?php 
require("../../conexion.php");
$fecha=$_POST['fecha'];

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


<table style="max-width: 90%" class="table table-striped">
        <thead>
			<tr >	
				<th style="background-color: #2f529c; color: white">Loteria </th>
				<th style="background-color: #2f529c; color: white">Resultado </th>
				<th style="background-color: #2f529c; color: white"> Eliminar</th>
				</tr>
		</thead>
		<H4>Resultados para <?php echo fechaCastellano($fecha); ?></H4>
		<?php
		$re=mysqli_query($link,"select nombre, resultado from resultados_loterias INNER JOIN loterias ON loterias.id=resultados_loterias.id_loteria where fecha='$fecha'")or die();
		
		while($f = $re->fetch_assoc()){
        ?>
		<tbody>
			<tr>
				<td><?php echo $f['nombre'];?></td>
				<td><?php echo $f['resultado'];?></td>	
				<td><a href="loterias/eliminar_resultado.php?id=<?php echo $f['id']."&id_lot=".$f['id_loteria']; ?>"><img style="width: 30px" src="http://www.iconsdb.com/icons/preview/caribbean-blue/trash-2-xxl.png"></a></td>			
			</tr>
		</tbody>
		<?php } ?>
		</table>
		