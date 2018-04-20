<?php
/**
 * Recibo desde
 * get.php?nombre=Mel
 */
$nombreprofesor= $_GET['nombre'];
$nombrecurso= $_GET['nombre'];
$fechacurso= $_GET['fechaalta'];
$horas= $_GET['numerohoras'];
$ciudadradicacion= $_GET['ciudad'];
$nombredir= $_GET['nombredirector'];


/*
select nombre, apellidop, apellidom from instructores inner join cursos on instructores.nombre = cursos.instructor1 where numerocurso = '1.3';
*/


?>

<center>
<p>
Nombre : <?php echo $nombrepofesor;?>
</p>

<p>
Nombre del curso : <?php echo $nombrecurso;?>
</p>

<p>
Fecha del curso : <?php echo $fechacurso;?>
</p>

<p>
Numero horas : <?php echo $horas;?>
</p>

<p>
Ciudad de radicacion : <?php echo $ciudadradicacion;?>
</p>

<p>
Nombre del director : <?php echo $nombredir;?>
</p>

</center>
