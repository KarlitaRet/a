<?php include_once '../vista/parte_superior' ?>
    <title>Usuarios</title>
<?php include_once '../vista/parte_inferior' ?>
<br>
<div class="container is-fluid">
<div class="col-xs-12">
    <br>
		<div>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create">
				<span class="glyphicon glyphicon-plus"></span> Agregar Area + <i class="fa fa-plus"></i> </a>
    </button>
    <a class="btn btn-warning" href="../includes/_sesion/cerrarSesion.php">Log Out
        <i class="fa fa-power-off" aria-hidden="true"></i>
    </a>

    <a class="btn btn-primary" href="../includes/excel.php">Excel
        <i class="fa fa-table" aria-hidden="true"></i>
    </a>
      <a href="../includes/reporte.php" class="btn btn-primary"><b>PDF</b> </a>
		</div>
		<br>



    <div class="container-fluid">
  <form class="d-flex">
			<form action="" method="GET">
			<input class="form-control me-2" type="search" placeholder="Buscar reportes" 
			name="busqueda"> <br>
			<button class="btn btn-outline-info" type="submit" name="enviar"> <b>Buscar</b> </button> 
			</form>
  </div>
  <?php
$conexion=mysqli_connect("localhost","root","","hospital"); 
$where="";

if(isset($_GET['enviar'])){
  $busqueda = $_GET['busqueda'];


	if (isset($_GET['busqueda']))
	{
		$where="WHERE user.correo LIKE'%".$busqueda."%' OR nombre  LIKE'%".$busqueda."%'
    OR telefono  LIKE'%".$busqueda."%'";
	}
  
}