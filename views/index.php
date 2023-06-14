<?php
   require '../funciones/funciones.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Municipalidad Provincial de Tarma</title>
    <link rel="stylesheet" href="<?php url();?>/assets/css/main.css?=v1.1">
    <link rel="stylesheet" href="<?php url();?>/node_modules/fontawesome_6.3.0/css/all.min.css">
    <link rel="stylesheet" href="<?php url();?>/assets/css/style.css?=v1.6">
</head>
<body>
  <header>
    <?php
      require __DIR__ . '/../views/webcomponents/header.php';
    ?>
  </header>
  <div>
     <?php 
      include __DIR__ . '/../views/webcomponents/bienvenido.php';
     ?>
  </div>
  <div>
     <?php 
      include __DIR__ . '/../views/webcomponents/icon_grid.php';
     ?>
  </div>
  <footer>
     <?php 
      include __DIR__ . '/../views/webcomponents/footer.php';
     ?>
  </footer>

  <script src="<?php url();?>/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

