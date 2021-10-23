<?php 
require 'includes/inc_libFnt.php'; 

if(isset($_GET["s"])){
    $section = $_GET["s"];
    if($section == "nuestras-soluciones"){
        $initialScroll = "$('html, body').animate({scrollTop: $(\"#section_01\").offset().top - \"50\"}, 800);";
    }else if($section == "resultados"){
        $initialScroll = "$('html, body').animate({scrollTop: $(\"#section_02\").offset().top - \"50\"}, 800);";
    }else if($section == "contacto"){
        $initialScroll = "$('html, body').animate({scrollTop: $(\"#formulario-soluciones\").offset().top - \"50\"}, 800);";
    }
}

         
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php #echo $thisPageTitle;?></title>
    
    <!-- Common MetaTags -->
    <meta charset="UTF-8">
    <meta name="title" content="<?php echo $site_title;?>" />
    <meta name="description" content="<?php echo $site_description;?>" />
    <meta http-equiv="Content-Language" content="<?php echo $siteLANG;?>" />
    <meta name="resource-type" content="document" />
    <meta name="distribution" content="global" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="-1" />
    <meta http-equiv="refresh" content="9600" />
    <meta name="copyright" content='<?php echo $site_copyright;?>' />
    <meta name="author" content="<?php echo $site_name;?>">
    <meta name="distribution" content="Global" />
    <meta name="classification" content=" " />
    <meta name="generator" content="<?php echo $site_name;?>" />
    <meta name="subject" content="<?php echo $site_name;?>" />
    <meta name="abstract" content="<?php echo $site_abstract;?>" />
    <meta name="keywords" content="<?php echo $site_keyWords;?>" />
    <meta name="googlebot" content="noodp" />
    <meta name="robots" content="index,follow">
    <meta name="revisit-after" content="7 days" />
    <meta name="rating" content="General" />
    
    <meta name="msvalidate.01" content="2A8B912BB5C64DED9CC0D312D7D9423A" />
    <meta name="msApplication-ID" content="width=device-width,initial-scale=1,minimum-scale=1"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1"/>

    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
        
    <!-- Facebook Special -->
    <meta property="og:type" content="profile" />
    <meta property="og:site_name" content="<?php echo $site_name;?>" />
    <meta property="og:url" content="<?php echo $actual_link;?>" />
    <meta property="og:title" content="<?php echo $site_title;?>" />
    <meta property="og:description" content="<?php echo $site_description;?>" />
    <meta property="og:image" content="<?php echo $root_link;?>/logoFB.png" />
    
    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="<?php echo $site_RS_tw;?>">
    <meta name="twitter:title" content="<?php echo $site_title;?>">
    <meta name="twitter:description" content="<?php echo $site_description;?>">
    <meta name="twitter:creator" content="<?php echo $site_RS_tw;?>">
    <meta name="twitter:image:src" content="<?php echo $root_link;?>/logoFB.png">
    <meta name="twitter:domain" content="<?php echo $root_link;?>/">
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- MY OWN CAROUSEL -->
    <link rel="stylesheet" href="<?php echo $root_link;?>/assets/owl-carousel/dist/assets/owl.carousel.min.css">
    <!-- MY OWN CAROUSEL -->
    <link rel="stylesheet" href="<?php echo $root_link;?>/assets/owl-carousel/dist/assets/owl.theme.default.min.css">
    <?php include('includes/inc_headFiles.php');?>
</head>
<body style="">
    <?php include('includes/inc_topbar.php');?>
    <?php include('includes/inc_header.php');?>
    <main>
        <section class="page_general_bg" style="background-image: url('<?php echo $root_link?>/assets/images/soluciones/soluciones-header.jpg'); background-position-y: 29%;">
            <div class="container h-100">
                <div class="row  h-100 align-items-center">
                    <div class="col-lg-10 m-auto">
                        <h1 class="page_general_title text_shadow text-uppercase text-white"><span class="fw-normal">Nuestras</span><br><span class="fw-normal">Soluciones</span></h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <section class="py-3 py-lg-5 soluciones-bg" id="section_01">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto text-center">
                        <p class="m-0 text_green">Munidigital ayuda a acelerar la <b>transformación digital de los gobiernos</b>, empoderando a los trabajadores públicos y ciudadanos con tecnología de vanguardia. En definitiva, buscamos construir ciudades digitales, eficientes y sostenibles en donde la gente quiera vivir.</p>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-lg-6">
                                <h2 class="text_green text-uppercase mb-4"><b>Acelerando</b> la Transformación Digital de la <b>Administración Pública.</b></h2>
                                <p>Nuestra herramienta principal es una <b>plataforma web</b> y <b>una aplicación móvil intuitiva</b> que permite la gestión de los servicios públicos mediante el <b>seguimiento de los incidentes</b> denunciados por ciudadanos y funcionarios públicos. Esto posibilita un <b>control integral</b> de todo el proceso de resolución del incidente, desde su denuncia hasta su cumplimiento. Debido a su <b>versatilidad e interoperabilidad</b> puede ser utilizado por las diferentes áreas.
                                </p>
                                <p>
                                 Gracias a la <b>sencillez del programa</b>, ofrecemos una implementación del sistema de un día en donde solo se requiere conexión a Internet. Además, acompañamos al equipo municipal constantemente capacitándolo en el uso de la herramienta y todas sus posibilitantes.
                                </p>
                            </div>
                            <!-- NUEVO MODULO -->
                            <div class="col-lg-6 soluciones-row centrado">
 
                            <div class="soluciones-nuevo-modulo">
                            <div class="centrado">
                                <img class="sol-mod-new"  src="<?php echo $root_link?>/assets/images/soluciones/modulo-nuevo.svg" alt="">
                        
                                <p class="text_orange fw-bold soluciones-modulo-titulo">INTEGRAL</p>
                                <p class="fw-bold sol-text">La plataforma de Munidigital integra la gestión interna de múltiples departamentos y áreas de gobierno y soluciones para la interacción con el ciudadano.</p>
                            
                            </div>
                            </div>

                            <div class="soluciones-nuevo-modulo">
                             <div class="centrado">
                                <img class="sol-mod-new"  src="<?php echo $root_link?>/assets/images/soluciones/modulo-nuevo.svg" alt="">
                                   
                                <p class="text_orange fw-bold soluciones-modulo-titulo">INMEDIATO</p>
                                <p class="fw-bold sol-text">Nuestra plataforma de gestión se implementa en apenas horas y es muy simple de utilizar. <br><br><br></p>
                            
                            </div>
                            </div>
        

                            <div class="soluciones-nuevo-modulo">
                            <div class="centrado">
                                <img class="sol-mod-new" src="<?php echo $root_link?>/assets/images/soluciones/modulo-nuevo.svg" alt="">
                                
                                <p class="text_orange fw-bold soluciones-modulo-titulo">INTEROPERABLE</p>
                                <p class="fw-bold sol-text">Brindamos múltiples APIs para integrar y compartir datos con cualquier otro sistema que utilice el gobierno. <br><br></p>
                                
                                </div>
                            </div>

                            <div class="soluciones-nuevo-modulo">
                            <div class="centrado">
                                <img class="sol-mod-new"  src="<?php echo $root_link?>/assets/images/soluciones/modulo-nuevo.svg" alt="">
                                
                                <p class="text_orange fw-bold soluciones-modulo-titulo">INTELIGENTE</p>
                                <p class="fw-bold sol-text">Utilizando matemática y lógica nuestro software emplea datos históricos para predecir eventos futuros y sugerir acciones óptimas a realizar.</p>
                            </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <section class="bg_gray py-3 py-lg-5 nuestro-equipo-bg2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto text-center">
                        <h2 class="text-uppercase text_green mb-4 fw-normal">Para <span class="fw-bold">el equipo de gobierno</span></h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row align-items-center">
                            <div class="col-lg-6 d-none d-lg-inline-block">
                                <figure class="m-0" style="width: 70%;">
                                    <img src="<?php echo $root_link?>/assets/images/soluciones/municipios.gif" class="w-60" alt="">
                                </figure>
                            </div>
                            <div class="col-lg-6">
                                <ul class="disable_list">
                                    <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Gestión de PQRDS (Peticiones, Quejas, Reclamaciones, Denuncias y Solicitudes).</li>
                                    <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Geolocalización de tareas programadas.</li>
                                    <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Generación de órdenes de trabajo en campo</li>
                                    <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Digitalización de formularios.</li>
                                    <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Manejo integral de la asistencia social (trazabilidad).</li>
                                    <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Inspección con datos en tiempo real.</li>
                                    <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Seguimiento y planificación de obras.</li>
                                    <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Monitoreo del stock de materiales.</li>
                                    <li><i class="fas fa-map-marker-alt text_green me-2 "></i>Control ambiental: arbolado urbano y espacios verdes.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <section class="py-3 py-lg-5 soluciones-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <h2 class="text-uppercase text_green mb-4 fw-normal">Para <b>conectar a municipios</b><br>con <b>los Ciudadanos</b></h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <ul class="disable_list">
                                    <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Envío de solicitudes y/o reclamaciones.</li>
                                    <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Digitalización de trámites.</li>
                                    <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Notificaciones push a cada ciudadano según barrios.</li>
                                    <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Participación ciudadana y gobierno abierto.</li>
                                    <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Formularios web sistematizados.</li>
                                    <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Gestión de citas.</li>
                                    <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Pago de impuestos online.</li>
                                    <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Control de calidad: satisfacción ciudadana.</li>
                                    <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Portal de salud: informativo, gestión de recetas, autochequeos.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 d-none d-lg-inline-block">
                                <figure class="mb-0 ms-auto" style="width: 70%;">
                                    <img src="<?php echo $root_link?>/assets/images/soluciones/ciudadanos.gif" class="w-60" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <section class="bg_gray py-3 py-lg-5 nuestro-equipo-bg2" id="section_02">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto text-center">
                        <h2 class="font_size_2 mb-4 fw-normal">Resultados</h2>
                        <p class="mb-0 text_green">La implementación de nuestro <b>software</b> trae diferentes beneficios: <b>Análisis y Acción:</b></p>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-10 mx-auto">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo $root_link?>/assets/images/soluciones/resultados-01.svg" style="width: 80px;" alt="">
                                    <p class="mb-0 ps-3" style="width:50%;">Monitoreo del desempeño a través de reportes detallados y tableros de control.</p>
                                </div>

                                <div class="d-flex align-items-center mt-5">
                                    <img src="<?php echo $root_link?>/assets/images/soluciones/resultados-02.svg" style="width: 80px;" alt="">
                                    <p class="mb-0 ps-3" style="width:50%;">Visibilidad en tiempo real de los trabajos que realizan en la ciudad.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 mt-5 mt-lg-0">
                                <div class="d-flex align-items-start">
                                    <img src="<?php echo $root_link?>/assets/images/soluciones/resultados-03.svg" style="width: 80px;" alt="">
                                    <div>
                                        <p class="mb-0 ps-3">Seguimiento de todo el proceso de resolución de las reclamaciones de los ciudadanos. <b>Planificación:</b></p>
                                        <ul class="disable_list ps-3 mt-3">
                                            <li><b class="pe-1">-</b> Elaboración de presupuestos y planes de mejora sobre la base de datos claves.</li>
                                            <li><b class="pe-1">-</b> Evaluación de tareas repetitivas y planificación de su frecuencia.</li>
                                            <li><b class="pe-1">-</b> Medición del rendimiento de las actividades de mantenimiento y planificación en consecuencia.</li>
                                            <li><b class="pe-1">-</b> Priorización en las áreas de gestión en función de los patrones de reclamaciones y / o tareas programadas.</li>
                                            <li><b class="pe-1">-</b> Monitoreo del desempeño a través de reportes detallados.</li>
                                            <li><b class="pe-1">-</b> Indicadores de Gestión (KPI).</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <section class="py-3 py-lg-5 soluciones-bg" id="section_03">
            <div class="container">
                <!-- <div class="row">
                    <div class="col-lg-10 m-auto text-center">
                        <h2 class="font_size_2 mb-4 fw-normal">Módulos</h2>
                        <p class="mb-0">Sección que nos va a permitir entender concretamente la utilidad de cada uno de los módulos<br class="d-none d-lg-inline-block">y a qué solución está asignada.</p>
                    </div>
                </div> -->

                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row" style="row-gap: 30px;">
                            <div class="col-6 col-md-4">
                                <figure class="mb-0 text-center soluciones_nuevos_iconos">
                                    <img src="<?php echo $root_link?>/assets/images/soluciones/nuevos-iconos/item-01.svg" alt="">
                                </figure>
                                <h6 class="text-center mt-4 px-lg-5">AUMENTO DE LA RECAUDACIÓN</h6>
                            </div>
                            <div class="col-6 col-md-4">
                                <figure class="mb-0 text-center soluciones_nuevos_iconos">
                                    <img src="<?php echo $root_link?>/assets/images/soluciones/nuevos-iconos/item-02.svg" alt="">
                                </figure>
                                <h6 class="text-center mt-4 px-lg-5">MAYOR SATISFACCIÓN CIUDADANA</h6>
                            </div>
                            <div class="col-6 col-md-4">
                                <figure class="mb-0 text-center soluciones_nuevos_iconos">
                                    <img src="<?php echo $root_link?>/assets/images/soluciones/nuevos-iconos/item-03.svg" alt="">
                                </figure>
                                <h6 class="text-center mt-4 px-lg-5">REDUCCIÓN DE COSTES OPERATIVOS</h6>
                            </div>
                            <div class="col-6 col-md-4">
                                <figure class="mb-0 text-center soluciones_nuevos_iconos">
                                    <img src="<?php echo $root_link?>/assets/images/soluciones/nuevos-iconos/item-04.svg" alt="">
                                </figure>
                                <h6 class="text-center mt-4 px-lg-5">REDUCCIÓN DE TIEMPOS EN LOS SERVICIOS</h6>
                            </div>
                            <div class="col-6 col-md-4">
                                <figure class="mb-0 text-center soluciones_nuevos_iconos">
                                    <img src="<?php echo $root_link?>/assets/images/soluciones/nuevos-iconos/item-05.svg" alt="">
                                </figure>
                                <h6 class="text-center mt-4 px-lg-5">MAYOR EFICIENCIA Y EFECTIVIDAD EN LOS LOGROS DE LOS OBJETIVOS</h6>
                            </div>
                            <div class="col-6 col-md-4">
                                <figure class="mb-0 text-center soluciones_nuevos_iconos">
                                    <img src="<?php echo $root_link?>/assets/images/soluciones/nuevos-iconos/item-06.svg" alt="">
                                </figure>
                                <h6 class="text-center mt-4 px-lg-5">VISIBILIDAD Y TRANSPARENCIA DE LA GESTIÓN</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4 pt-4">
                    <div class="col-lg-10 m-auto text-center">
                        <h2 class="font_size_2 mb-4 fw-normal">Soluciones</h2>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-10 mx-auto">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3 class="text-uppercase text-center mb-4">Soluciones <b>Ciudadanas</b></h3>
                                <!-- ITEM -->
                                <div class="solucionesBox_wrapper mb-4">
                                    <h3 class="text_green mb-1">MUNI <b>Ciudadano</b></h3>
                                    <p class="mb-0">Plataforma ciudadana de servicios municipales</p>
                                    <img src="<?php echo $root_link?>/assets/images/soluciones/muni-ciudadano.svg" alt="">
                                </div>
                                <!-- ITEM -->
                                <div class="solucionesBox_wrapper mb-4">
                                    <h3 class="text_green mb-1">MUNI <b>Citas</b></h3>
                                    <p class="mb-0">Gestión de citas</p>
                                    <img src="<?php echo $root_link?>/assets/images/soluciones/muni-citas.svg" alt="">
                                </div>
                                <!-- ITEM -->
                                <div class="solucionesBox_wrapper mb-4">
                                    <h3 class="text_green mb-1">MUNI <b>Salud</b></h3>
                                    <p class="mb-0">Gestión de prestaciones de salud</p>
                                    <img src="<?php echo $root_link?>/assets/images/soluciones/muni-salud.svg" alt="">
                                </div>
                                <!-- ITEM -->
                                <div class="solucionesBox_wrapper mb-4">
                                    <h3 class="text_green mb-1">OPEN <b>Gov</b></h3>
                                    <p class="mb-0">Visualizador y publicador de datos</p>
                                    <img src="<?php echo $root_link?>/assets/images/soluciones/open-gov.svg" alt="">
                                </div>
                                <!-- ITEM -->
                                <div class="solucionesBox_wrapper mb-4">
                                    <h3 class="text_green mb-1">MUNI <b>Turismo</b></h3>
                                    <p class="mb-0">Plataforma integral de turismo</p>
                                    <img src="<?php echo $root_link?>/assets/images/soluciones/muni-turismo.svg" alt="">
                                </div>
                                <!-- ITEM -->
                                <div class="solucionesBox_wrapper">
                                    <h3 class="text_green mb-1">MUNI <b>Participación</b></h3>
                                    <p class="mb-0">Gestor de participación ciudadana</p>
                                    <img src="<?php echo $root_link?>/assets/images/soluciones/muni-participacion.svg" alt="">
                                </div>
                            </div>
                            <!-- ///////////////////////////////////// -->
                            <!-- ///////////////////////////////////// -->
                            <div class="col-lg-6 mt-5 mt-lg-0">
                                <h3 class="text-uppercase text-center mb-4">Soluciones <b>Municipales</b></h3>
                                <!-- ITEM -->
                                <div class="solucionesBox_wrapper_2 mb-4 text-end">
                                    <h3 class="text_green mb-1">MUNI <b>Gestión</b></h3>
                                    <p class="mb-0">Plataforma ciudadana de servicios municipales</p>
                                    <img src="<?php echo $root_link?>/assets/images/soluciones/muni-gestion.svg" alt="">
                                </div>
                                <!-- ITEM -->
                                <div class="solucionesBox_wrapper_2 mb-4 text-end">
                                    <h3 class="text_green mb-1">MUNI <b>Obras</b></h3>
                                    <p class="mb-0">Gestión de obras</p>
                                    <img src="<?php echo $root_link?>/assets/images/soluciones/muni-obras.svg" alt="">
                                </div>
                                <!-- ITEM -->
                                <div class="solucionesBox_wrapper_2 mb-4 text-end">
                                    <h3 class="text_green mb-1">MUNI <b>Árbol</b></h3>
                                    <p class="mb-0">Gestión de arbolado urbano y espacios verdes</p>
                                    <img src="<?php echo $root_link?>/assets/images/soluciones/muni-arbol.svg" alt="">
                                </div>
                                <!-- ITEM -->
                                <div class="solucionesBox_wrapper_2 mb-4 text-end">
                                    <h3 class="text_green mb-1">MUNI <b>Form</b></h3>
                                    <p class="mb-0">Digitalización de formularios y gastos de inspecciones</p>
                                    <img src="<?php echo $root_link?>/assets/images/soluciones/muni-form.svg" alt="">
                                </div>
                                <!-- ITEM -->
                                <div class="solucionesBox_wrapper_2 mb-4 text-end">
                                    <h3 class="text_green mb-1">MUNI <b>Seguridad</b></h3>
                                    <p class="mb-0">Gestor de seguridad ciudadana</p>
                                    <img src="<?php echo $root_link?>/assets/images/soluciones/muni-seguridad.svg" alt="">
                                </div>
                                <!-- ITEM -->
                                <div class="solucionesBox_wrapper_2 mb-4 text-end">
                                    <h3 class="text_green mb-1">MUNI <b>Social</b></h3>
                                    <p class="mb-0">Gestor de seguridad ciudadana</p>
                                    <img src="<?php echo $root_link?>/assets/images/soluciones/muni-social.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <section class="my-5" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto bg_gray py-4">
                        <div class="row">
                            <div class="col-lg-10 m-auto">
                                <p class="text_green text-center">Solicita ahora una demostración gratuita, no dudes en comunicarte para asesorarte completado<br class="d-none d-lg-inline-block"> el siguiente formulario</p>
                                <form action="" class="row" id="formulario-soluciones">
                                    <input type="hidden" name="formularioNombre" value="formulario-soluciones">
                                    <div class="col-lg-6 mb-4">
                                        <input type="text" placeholder="Nombre*" class="w-100" id="nombre" name="nombre">
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <input type="text" placeholder="Cargo*" class="w-100" id="cargo" name="cargo">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <input type="text" placeholder="Municipio*" class="w-100" id="municipio" name="municipio">
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <input type="text" placeholder="Teléfono*" class="w-100" id="telefono" name="telefono">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" placeholder="Email*" class="w-100" id="email" name="email">
                                    </div>
                                    <div class="col-lg-12 text-center mt-4 mt-lg-0">
                                        <input type="submit" value="Solicitar" class="btn btn_orange text-white py-1 px-4">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    </main>

    <?php include('includes/inc_footer.php')?>
    <script src="<?php echo $root_link?>/assets/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- Text Fill -->
    <script src="<?php echo $root_link;?>/assets/js/jquery.textfill.min.js"></script>
    <!------OWL CAROUSEL------>
    <script src="<?php echo $root_link;?>/assets/owl-carousel/dist/owl.carousel.min.js"></script>

    <script src="<?php echo $root_link?>/assets/js/main.js"></script>
    <script>
         var animSpeed= 250;
        <?php echo isset($initialScroll) ? $initialScroll : "";?>    
        /////////////////
        /////////////////

        var owlStaff = $(".owl-staff");
        owlStaff.owlCarousel({
            items: 3,
            nav: true,
            dots: true,
            loop: true,
            autoplay: true,
            autoplayTimeout:5000,
            autoplayHoverPause: true,
            smartSpeed: 600,
            responsive:{
            0:{
                items:1,
                dots:true,
                nav: true
            },
            768:{
                items:3,
                dots:true,
                nav: true
            },
            1024:{
                items:3,
                dots:true,
                nav: true
            },
            1200:{
                items: 1,
                dots: true,
                nav: true

            },
            1600:{
                items: 1,
                dots: true,
                nav: true
            }
        }
        });   

        /////////////////
        /////////////////

        function formularioContacto(){

            const formulario = document.getElementById('formulario-soluciones');

            const nombre = document.getElementById('nombre');
            const cargo = document.getElementById('cargo');
            const municipio = document.getElementById('municipio');
            const telefono = document.getElementById('telefono');
            const email = document.getElementById('email');
                
            function validarTexto(e, input){
                if (input.value == '' || input.value == null || input.value.length < 4){
                    input.style.border = '1px solid red';
                    // error.innerHTML = error.innerHTML + "<p class='error-visible'>Completá el campo del nombre y Apellido</p>";
                    return false
                }else{
                    input.style.border = '1px solid transparent';
                    return true
                }
                e.preventDefault();
            }



            function validarEmail(e, email){ 
                const validation = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;        
                if (validation.test(email.value)){
                    email.style.border = '1px solid transparent';
                        return true
                }else{
                    email.style.border = '1px solid red';
                    // error.innerHTML = error.innerHTML + "<p class='error-visible'>Completá el campo del Email</p>";
                    return false
                }
                e.preventDefault();
            }

            function validarTelefono(e, telefono){
                if (telefono.value == '' || telefono.value == null || telefono.value.length < 5){
                    telefono.style.border = '1px solid red';
                    // error.innerHTML = error.innerHTML + "<p class='error-visible'>Completá el campo del Teléfono</p>";
                    return false
                }else{
                    telefono.style.border = '1px solid transparent';
                        return true
                }
                e.preventDefault();
            }



            function validarContactForm(e){
                // error.innerHTML = '';
                var rNombre = validarTexto(e, nombre);
                var rCargo = validarTexto(e, cargo);
                var rMunicipio = validarTexto(e, municipio);
                var rTelefono = validarTelefono(e, telefono);
                var rEmail = validarEmail(e, email);
                
                if(rNombre && rCargo && rMunicipio && rTelefono && rEmail){
                    e.preventDefault();
                    $.ajax({
                        url: "<?php echo $root_link?>/includes/inc_formulario.php",
                        type: "POST",
                        data: $(formulario).serialize(),
                        dataType: 'json'
                    })
                    .done(function(response){
                        // console.log(response);
                        if(response.status == "success"){
                            alert(response.mensaje);
                        }else{
                            alert(response.mensaje);
                        }
                    })
                    .fail(function(){
                        alert("Ha ocurrido un error. Intente nuevamente más tarde. [0]");
                    });
                }else{
                    e.preventDefault();
                }

            }
            formulario.addEventListener('submit', validarContactForm);
        }

        formularioContacto();

    </script>
</body>
</html>