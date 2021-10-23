<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php #echo $thisPageTitle;
            ?></title>

    <!-- Common MetaTags -->
    <meta charset="UTF-8">
    <meta name="title" content="Muni Digital" />
    <meta name="description" content="Website de la Muni Digital" />
    <meta http-equiv="Content-Language" content="es" />
    <meta name="resource-type" content="document" />
    <meta name="distribution" content="global" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="-1" />
    <meta http-equiv="refresh" content="9600" />
    <meta name="copyright" content='2021 Muni Digital' />
    <meta name="author" content="Muni Digital">
    <meta name="distribution" content="Global" />
    <meta name="classification" content=" " />
    <meta name="generator" content="Muni Digital" />
    <meta name="subject" content="Muni Digital" />
    <meta name="abstract" content="Website de la Muni Digital" />
    <meta name="keywords" content="muni digital, open government" />
    <meta name="googlebot" content="noodp" />
    <meta name="robots" content="index,follow">
    <meta name="revisit-after" content="7 days" />
    <meta name="rating" content="General" />

    <meta name="msvalidate.01" content="2A8B912BB5C64DED9CC0D312D7D9423A" />
    <meta name="msApplication-ID" content="width=device-width,initial-scale=1,minimum-scale=1" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1" />


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Facebook Special -->
    <meta property="og:type" content="profile" />
    <meta property="og:site_name" content="Muni Digital" />
    <meta property="og:url" content="www.munidigital.com" />
    <meta property="og:title" content="Muni Digital" />
    <meta property="og:description" content="Website de la Muni Digital" />
    <meta property="og:image" content="www.munidigital.com/logoFB.png" />

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="www.twitter.com">
    <meta name="twitter:title" content="Muni Digital en Twitter">
    <meta name="twitter:description" content="Website de la Muni Digital">
    <meta name="twitter:creator" content="www.twitter.com">
    <meta name="twitter:image:src" content="www.munidigital.com/logoFB.png">
    <meta name="twitter:domain" content="www.munidigital.com">
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- MY OWN CAROUSEL -->
    <link rel="stylesheet" href="views/assets/owl-carousel/dist/assets/owl.carousel.min.css">
    <!-- MY OWN CAROUSEL -->
    <link rel="stylesheet" href="views/assets/owl-carousel/dist/assets/owl.theme.default.min.css">

    <!-- Esto viene de inc_headFiles.php -->

    <link rel="icon" type="image/png" href="views/assets/images/favicon.png">
    <!-- Fonts Awesome -->
    <link rel="stylesheet" href="views/assets/fonts/font-awesome/css/all.min.css">
    <!-- Mi Estilo CSS -->
    <link rel="stylesheet" href="views/assets/css/style.css">
    <!-- Overwrite -->
    <link rel="stylesheet" href="views/assets/css/overwrite.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet">


</head>

<header class="d-none d-lg-inline">
    <nav class="navbar navbar-expand-lg navbar-light py-4">
        <div class="container">
            <a class="navbar-brand" href="munidigital.com">
                <img src="views/assets/images/logo-header.svg" style="width: 200px;" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                    <!-- //////////// -->
                    <li class="nav-item dropdown me-lg-4">
                        <a class="nav-link disable_link text-uppercase text_green <?php echo ($current_page == 'programa-fe' || $current_page == 'como-donar' || $current_page == 'ganamos-todos' || $current_page == 'responsabilidad-empresarial') ? 'font-weight-bold' : NULL ?>" id="navbarDropdown" role="button" aria-haspopup="true" href="<?php echo $root_link; ?>/nosotros.php">Nosotros</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text_green <?php echo $current_page == 'programa-fe' ? 'font-weight-bold' : NULL ?>" href="<?php echo $root_link; ?>/nosotros.php?s=sobre-nosotros">Sobre Nosotros</a>
                            <a class="dropdown-item text_green <?php echo $current_page == 'como-donar' ? 'font-weight-bold' : NULL ?>" href="<?php echo $root_link; ?>/nosotros.php?s=nuestro-staff">Nuestro Staff</a>
                            <a class="dropdown-item text_green <?php echo $current_page == 'ganamos-todos' ? 'font-weight-bold' : NULL ?>" href="<?php echo $root_link; ?>/nosotros.php?s=reconocimientos">Reconocimientos</a>
                            <a class="dropdown-item text_green <?php echo $current_page == 'responsabilidad-empresarial' ? 'font-weight-bold' : NULL ?>" href="<?php echo $root_link; ?>/nosotros.php?s=socios-y-aliados">Socios y Aliados</a>
                            <a class="dropdown-item text_green <?php echo $current_page == 'responsabilidad-empresarial' ? 'font-weight-bold' : NULL ?>" href="<?php echo $root_link; ?>/nosotros.php?s=rrhh">R.R.H.H.</a>
                        </div>
                    </li>
                    <!-- //////////// -->
                    <li class="nav-item dropdown me-lg-4">
                        <a class="nav-link disable_link text-uppercase text_green <?php echo ($current_page == 'programa-fe' || $current_page == 'como-donar' || $current_page == 'ganamos-todos' || $current_page == 'responsabilidad-empresarial') ? 'font-weight-bold' : NULL ?>" id="navbarDropdown" role="button" aria-haspopup="true" href="<?php echo $root_link; ?>/soluciones.php">Soluciones</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text_green <?php echo $current_page == 'programa-fe' ? 'font-weight-bold' : NULL ?>" href="<?php echo $root_link; ?>/soluciones.php?s=nuestras-soluciones">Nuestras Soluciones</a>
                            <a class="dropdown-item text_green <?php echo $current_page == 'como-donar' ? 'font-weight-bold' : NULL ?>" href="<?php echo $root_link; ?>/soluciones.php?s=resultados">Resultados</a>
                        </div>
                    </li>
                    <!-- //////////// -->
                    <li class="nav-item dropdown me-lg-4">
                        <a class="nav-link disable_link text-uppercase text_green <?php echo ($current_page == 'programa-fe' || $current_page == 'como-donar' || $current_page == 'ganamos-todos' || $current_page == 'responsabilidad-empresarial') ? 'font-weight-bold' : NULL ?>" id="navbarDropdown" role="button" aria-haspopup="true" href="<?php echo $root_link; ?>/casos-de-exito.php">Casos de Éxito</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text_green <?php echo $current_page == 'como-donar' ? 'font-weight-bold' : NULL ?>" href="<?php echo $root_link; ?>/casos-de-exito.php?s=paises">Países</a>
                            <a class="dropdown-item text_green <?php echo $current_page == 'programa-fe' ? 'font-weight-bold' : NULL ?>" href="<?php echo $root_link; ?>/casos-de-exito.php?s=experiencias-muni">Experiencias Muni</a>
                        </div>
                    </li>
                    <!-- //////////// -->
                    <li class="nav-item dropdown me-lg-4">
                        <a class="nav-link disable_link text-uppercase text_green <?php echo ($current_page == 'programa-fe' || $current_page == 'como-donar' || $current_page == 'ganamos-todos' || $current_page == 'responsabilidad-empresarial') ? 'font-weight-bold' : NULL ?>" id="navbarDropdown" role="button" aria-haspopup="true" href="<?php echo $root_link; ?>/campanas.php">Campañas</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text_green <?php echo $current_page == 'programa-fe' ? 'font-weight-bold' : NULL ?>" href="<?php echo $root_link; ?>/campanas.php?s=campana-100">100 <i class="fas fa-tree"></i></a>
                        </div>
                    </li>
                    <!-- //////////// -->
                    <li class="nav-item dropdown me-lg-4">
                        <a class="nav-link disable_link text-uppercase text_green <?php echo ($current_page == 'programa-fe' || $current_page == 'como-donar' || $current_page == 'ganamos-todos' || $current_page == 'responsabilidad-empresarial') ? 'font-weight-bold' : NULL ?>" id="navbarDropdown" role="button" aria-haspopup="true" href="<?php echo $root_link; ?>/novedades.php">Novedades</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text_green <?php echo $current_page == 'programa-fe' ? 'font-weight-bold' : NULL ?>" href="<?php echo $root_link; ?>/novedades.php?s=ultimas-novedades">Últimas Novedades</a>
                            <a class="dropdown-item text_green <?php echo $current_page == 'como-donar' ? 'font-weight-bold' : NULL ?>" href="<?php echo $root_link; ?>/novedades.php?s=agenda">Agenda</a>
                            <a class="dropdown-item text_green <?php echo $current_page == 'como-donar' ? 'font-weight-bold' : NULL ?>" href="<?php echo $root_link; ?>/novedades.php?s=prensa">Prensa</a>
                        </div>
                    </li>
                    <!-- //////////// -->
                    <li><a href="<?php echo $root_link ?>/demo-gratuita.php" class="disable_link text-uppercase text-white btn_orange">Demo Gratuita</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Esto viene  de includes/inc_header.php -->

<header class="d-inline d-lg-none">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 pb-md-4 pt-md-4">
        <div class="container">
            <a class="navbar-brand" href="<?php echo $root_link ?>">
                <img src="<?php echo $root_link ?>/assets/images/logo-header.svg" style="width: 200px;" alt="">
            </a>

            <!-- <a class="nav-link donar_outline_mobile d-inline-block d-lg-none ml-auto" href="<?php echo $root_link; ?>/donar">Donar</a> -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="my-3">
                        <button class="navbar-toggler nav-link text_green fw-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne" aria-expanded="false" aria-label="Toggle navigation">Nosotros<i class="fas fa-caret-down ms-2"></i></button>
                        <!-- <a for="collapseOne" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="nav-link" >El programa<i class="fas fa-caret-down ms-2"></i></a> -->
                        <div id="collapseOne" class="collapse">
                            <a class="d-block dropdown-item text_green fw-light" href="<?php echo $root_link; ?>/nosotros.php?s=sobre-nosotros">Sobre Nosotros</a>
                            <a class="d-block dropdown-item text_green fw-light" href="<?php echo $root_link; ?>/nosotros.php?s=nuestro-staff">Nuestro Staff</a>
                            <a class="d-block dropdown-item text_green fw-light" href="<?php echo $root_link; ?>/nosotros.php?s=reconocimientos">Reconocimientos</a>
                            <a class="d-block dropdown-item text_green fw-light" href="<?php echo $root_link; ?>/nosotros.php?s=socios-y-aliados">Socios y Aliados</a>
                            <a class="d-block dropdown-item text_green fw-light" href="<?php echo $root_link; ?>/nosotros.php?s=rrhh">R.R.H.H.</a>
                        </div>
                    </li>

                    <li class="mb-3">
                        <button class="navbar-toggler nav-link text_green fw-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo" aria-expanded="false" aria-label="Toggle navigation">Soluciones<i class="fas fa-caret-down ms-2"></i></button>
                        <div id="collapseTwo" class="collapse">
                            <a class="d-block dropdown-item text_green fw-light" href="<?php echo $root_link; ?>/soluciones.php?s=nuestras-soluciones">Nuestras Soluciones</a>
                            <a class="d-block dropdown-item text_green fw-light" href="<?php echo $root_link; ?>/soluciones.php?s=resultados">Resultados</a>
                        </div>
                    </li>

                    <li class="mb-3">
                        <button class="navbar-toggler nav-link text_green fw-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-controls="collapseThree" aria-expanded="false" aria-label="Toggle navigation">Casos de Éxito<i class="fas fa-caret-down ms-2"></i></button>
                        <div id="collapseThree" class="collapse">
                            <a class="dropdown-item text_green fw-light" href="<?php echo $root_link; ?>/casos-de-exito.php?s=paises">Países</a>
                            <a class="dropdown-item text_green fw-light" href="<?php echo $root_link; ?>/casos-de-exito.php?s=experiencias-muni">Experiencias Muni</a>
                        </div>
                    </li>


                    <li class="mb-3">
                        <button class="navbar-toggler nav-link text_green fw-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-controls="collapseFour" aria-expanded="false" aria-label="Toggle navigation">Campañas<i class="fas fa-caret-down ms-2"></i></button>
                        <div id="collapseFour" class="collapse">
                            <a class="dropdown-item text_green fw-light" href="<?php echo $root_link; ?>/campanas.php?s=campana-100">100 <i class="fas fa-tree"></i></a>
                            <a class="dropdown-item text_green fw-light" href="<?php echo $root_link; ?>/campanas.php?s=otras-campanas">Otras Campañas</a>
                        </div>
                    </li>


                    <li class="mb-3">
                        <button class="navbar-toggler nav-link text_green fw-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-controls="collapseFive" aria-expanded="false" aria-label="Toggle navigation">Novedades<i class="fas fa-caret-down ms-2"></i></button>
                        <div id="collapseFive" class="collapse">
                            <a class="dropdown-item text_green fw-light" href="<?php echo $root_link; ?>/novedades.php?s=ultimas-novedades">Últimas Novedades</a>
                            <a class="dropdown-item text_green fw-light" href="<?php echo $root_link; ?>/novedades.php?s=agenda">Agenda</a>
                            <a class="dropdown-item text_green fw-light" href="<?php echo $root_link; ?>/novedades.php?s=prensa">Prensa</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disable_link text-uppercase text-white btn_orange px-4 py-2" href="<?php echo $root_link; ?>/demo-gratuita.php">Demo Gratuita</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>