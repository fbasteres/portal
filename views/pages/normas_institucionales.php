<?php
  require '../../funciones/funciones.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Normas Institucionales - Municipalidad Provincial de Tarma </title>
    <link rel="stylesheet" href="<?php url();?>/assets/css/main.css?=v1.1">
    <link rel="stylesheet" href="<?php url();?>/node_modules/fontawesome_6.3.0/css/all.min.css">
    <link rel="stylesheet" href="<?php url();?>/assets/css/style.css?=v1.5">
    <link rel="stylesheet" href="<?php url();?>/assets/css/normas.css?=v1.0">
    
</head>
<header>
    <?php
    include '../webcomponents/header.php'
    ?>
</header>
<body>
    <div class="bg_pag">
      <main class="fond_pag">
        <div class="container col-xxl-12 gutter">
          <div class="row flex-lg-row-reverse align-items-center">
            <div class="col-10 col-sm-8 col-lg-6"> </div>
              <div class="col-lg-6 pag_container">
                <h4 class="">Tipos de normas y documentos legales</h4>
                <p class="">Accede a los documentos según el tipo de norma legal.</p>
              </div>
          </div>
        </div>
      </main>
    </div>
        <br>
        <div class="container pt-4 gutter">
          <div class="row row-cols-2 align-items-md-stretch">
                <div class="col-md-3 mb-4">
                    <a href="https://www.gob.pe/institucion/munitarma/colecciones/5259-acuerdos-de-concejo" target="_blank" class="text-decoration-none">
                        <div class="car-2">
                            <ul class="d-flex list-unstyled">
                                <li class="me-auto">
                                    <h5>Acuerdos <br>de Concejo</h5>
                                </li>
                                <li class="d-flex">
                                <i class="car-2-icon sp-atendido fa-solid fa-arrow-up-right-from-square"></i>
                                </li>
                            </ul>
                            <p class="text-muted">Son decisiones que toma el concejo, referidas a asuntos específicos de interés público, vecinal...</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 mb-4">
                    <a href="https://www.gob.pe/institucion/munitarma/colecciones/5263-decretos-de-alcaldia" target="_blank" class="text-decoration-none">
                        <div class="car-2">
                            <ul class="d-flex list-unstyled">
                                <li class="me-auto">
                                    <h5>Decretos <br>de Alcaldía</h5>
                                </li>
                                <li class="d-flex">
                                <i class="car-2-icon sp-atendido fa-solid fa-arrow-up-right-from-square"></i>
                                </li>
                            </ul>
                            <p class="text-muted">Se define como un acto administrativo de contenido normativo reglamentario...</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 mb-4">
                    <a href="https://www.gob.pe/institucion/munitarma/colecciones/5012-ordenanzas-municipales" target="_blank" class="text-decoration-none">
                        <div class="car-2">
                            <ul class="d-flex list-unstyled">
                                <li class="me-auto">
                                    <h5>Ordenanzas <br>Municipales</h5>
                                </li>
                                <li class="d-flex">
                                <i class="car-2-icon sp-atendido fa-solid fa-arrow-up-right-from-square"></i>
                                </li>
                            </ul>
                            <p class="text-muted">Es un tipo de norma jurídica, que se incluye dentro de los reglamentos, y que se caracteriza por estar...</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 mb-4">
                    <a href="https://www.gob.pe/institucion/munitarma/colecciones/5264-resoluciones-de-alcaldia" target="_blank" class="text-decoration-none">
                        <div class="car-2">
                            <ul class="d-flex list-unstyled">
                                <li class="me-auto">
                                    <h5>Resoluciones <br>de Alcaldía</h5>
                                </li>
                                <li class="d-flex">
                                <i class="car-2-icon sp-atendido fa-solid fa-arrow-up-right-from-square"></i>
                                </li>
                            </ul>
                            <p class="text-muted">Las resoluciones de alcaldía aprueban y resuelven los asuntos de carácter administrativo.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="https://www.gob.pe/institucion/munitarma/normas-legales/tipos/28-directiva" target="_blank" class="text-decoration-none">
                        <div class="car-2">
                            <ul class="d-flex list-unstyled">
                                <li class="me-auto">
                                    <h5>Directivas</h5>
                                </li>
                                <li class="d-flex">
                                <i class="car-2-icon sp-atendido fa-solid fa-arrow-up-right-from-square"></i>
                                </li>
                            </ul>
                            <p class="text-muted">Documento que establecen aspectos técnicos y operativos en materias específicas en aplicación de disposiciones legales...</p>
                        </div>
                    </a>
                </div>
          </div>
        </div>
    <div class="container gutter">
        <h3 class="pt-5 fw-bold fs-5 h3-cas">Actualmente la entidad se encuentra migrando a <b>gob.pe</b></h3>
        <p>Es el único punto de contacto digital del Estado Peruano con los ciudadanos. Según el Decreto Supremo 033-2018-PCM, Gob.pe se define como la Plataforma Digital Única del Estado Peruano para Orientación al Ciudadano.
        Su objetivo principal es acercar el Estado al ciudadano, permitiéndote acceder a información institucional y orientación de trámites y servicios, de manera sencilla.
        Si bien es administrada por la Presidencia del Consejo de Ministros, a través de la Secretaría de Gobierno y Transformación Digital, el contenido y la actualización de la información encontrada en las páginas institucionales, es responsabilidad de cada institución.
        </p>
    </div>
        <footer>
     <?php 
      include '../webcomponents/footer.php';
     ?>
  </footer>

        <script src="<?php url(); ?>/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>