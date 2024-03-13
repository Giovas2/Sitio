<?php include("template/cabecera.php"); ?>
<?php
include ("administrador/config/bd.php");
$sentenciaSQL= $conexion->prepare("SELECT * FROM puestos");
$sentenciaSQL->execute();
$listaPuestos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach($listaPuestos as $Puesto ) { ?>

<div class="col-md-3">
<div class="card">
<img class="card-img-top" src="./img/<?php echo $Puesto['imagen']; ?>" alt="">
<div class="card-body">
        <h4 class="card-title"><?php echo $Puesto['nombre']; ?></h4>
        <a name="" id="" class="btn btn-primary" href="citas.php" role="button">Genera tu cita!</a>
</div>    
</div>
</div>
<?php } ?>






<?php include("template/pie.php"); ?>