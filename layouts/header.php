<?php session_start();  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="<?= $HOST ?>/libs/Bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="<?= $HOST ?>/libs/DataTables/datatables.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?= $HOST ?>/libs/DataTables/responsive.dataTables.min.css">
  </head>
  <body>
   

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="container-fluid d-flex">
      <a class="navbar-brand" href="#">Simón Rodríguez</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= $HOST ?>/">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= $HOST ?>/estudiantes/index.php">Estudiantes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= $HOST ?>/estadisticas/index.php">Estadisticas</a>
          </li>
        </ul>
        
      </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="../destroy.php">Vaciar</a>
          </li>
        </ul>
    </div>
  </div>
</nav>