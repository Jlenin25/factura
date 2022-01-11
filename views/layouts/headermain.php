<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="<?= img(); ?>logo.png" rel="icon">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
  <title>Kuyaru</title>
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= css(); ?>fontawesome.css">
  <link rel="stylesheet" href="<?= css(); ?>tooplate-main.css">
  <link rel="stylesheet" href="<?= css(); ?>owl.css">
  <link rel="stylesheet" href="../<?= css(); ?>flex-slider.css">
</head>
<body>
  <div id="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <span>Lunes - Sábado, 8AM a 6PM ----- Llámanos ahora al 787-1039</span>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url(); ?>"><img src="<?= img(); ?>logo1.png" alt="" style="width:300px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive" style="top:172px">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url(); ?>">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>Home/product">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>Home/contact">Contáctanos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>