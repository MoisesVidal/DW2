<?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: index.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: index.php');
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="Imagenes/Medisoft.png">
  <link rel="stylesheet" href="CSS/EstilosMenuAdmin.CSS">
  <title>Menu Administrador</title>
</head>
<body>

<div class="header">
  <h1>Medisoft</h1>
</div>

<div class="topnav">
  <a href="cerrar_sesion.php" style="float:right">Cerrar Sesión</a>
	<div class="nav">
  <a href="GestionaUsuarios.php">Gestión Medicos</a>
  <a href="AgregarAuxiliar.php">Gestión Auxiliares Farmacia</a>
  <a href="#">Gestión Medicamentos</a>
  <a href="#">Revisar Consultas</a>
  <a href="#">Revisar Ventas</a>
</div>
</div>



<div class="row">
  <div class="Contenedor">
    <div class="card">
      <h2>Medisoft</h2>
      <h5>¿Que es Mediosft?</h5>
          <p>Es una aplicación web desarrollada para antender a las necesidades de los consultorios medicos y farmacias, que ofrece ayudarles en tener un control sobre las consultas realizadas por medicos y las ventas que se realizan por los auxiliares farmaceuticos</p>
	  <img src="Imagenes/Medisoft.png" alt="">
			
    		
	</div>
  </div>
</div>

<div class="footer">
  <h2>Contacto: Medisfotf@gmail.com</h2>
</div>

</body>
</html>
