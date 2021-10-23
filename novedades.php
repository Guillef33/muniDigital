<?php 
require 'includes/inc_libFnt.php'; 
if(isset($_GET["s"])){
    $section = $_GET["s"];
    if($section == "ultimas-novedades"){
        $initialScroll = "$('html, body').animate({scrollTop: $(\"#section_01\").offset().top - \"50\"}, 800);";
    }else if($section == "agenda"){
        $initialScroll = "$('html, body').animate({scrollTop: $(\"#section_02\").offset().top - \"50\"}, 800);";
    }else if($section == "prensa"){
        $initialScroll = "$('html, body').animate({scrollTop: $(\"#section_03\").offset().top - \"50\"}, 800);";
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
        <section class="py-3 py-lg-5" id="section_01">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="page_general_title text-uppercase text-white text-center text_green mb-3 mb-lg-5"><b>Últimas</b> <span class="fw-normal">Novedades</span></h1>
                            </div>
                        </div>


                        <div class="row" style="row-gap: 30px;">
                            <!-- Item -->
                            <div class="col-lg-4">
                                <a href="<?php echo $root_link?>/novedad-06.php" class="m-0 d-block novedad_wrapper">
                                    <figure class="image_wrapper_60_porc mb-0">
                                        <img src="<?php echo $root_link?>/assets/images/f_novedades/novedad-06.jpg" class="w-100" alt="">
                                    </figure>
                                    <div class="novedad_title_bgGreen">
                                        <h6 class="text-white m-0 py-2 text-center">MuniDigital realizó una Masterclass online sobre Arbolado Urbano</h6>
                                    </div>
                                </a>
                            </div>
                            <!-- Item -->
                            <div class="col-lg-4">
                                <a href="<?php echo $root_link?>/novedad-05.php" class="m-0 d-block novedad_wrapper">
                                    <figure class="image_wrapper_60_porc mb-0">
                                        <img src="<?php echo $root_link?>/assets/images/f_novedades/novedad-05.jpg" class="w-100" alt="">
                                    </figure>
                                    <div class="novedad_title_bgGreen">
                                        <h6 class="text-white m-0 py-2 text-center">El Govtech según Alejandra Torres y el trabajo de MuniDigital en la Municipalidad de Córdoba</h6>
                                    </div>
                                </a>
                            </div>
                            <!-- Item -->
                            <div class="col-lg-4">
                                <a href="<?php echo $root_link?>/novedad-04.php" class="m-0 d-block novedad_wrapper">
                                    <figure class="image_wrapper_60_porc mb-0">
                                        <img src="<?php echo $root_link?>/assets/images/f_novedades/novedad-04.jpg" class="w-100" alt="">
                                    </figure>
                                    <div class="novedad_title_bgGreen">
                                        <h6 class="text-white m-0 py-2 text-center">Conocé más sobre MuniDigital</h6>
                                    </div>
                                </a>
                            </div>
                            <!-- Item -->
                            <div class="col-lg-4">
                                <a href="<?php echo $root_link?>/novedad-03.php" class="m-0 d-block novedad_wrapper">
                                    <figure class="image_wrapper_60_porc mb-0">
                                        <img src="<?php echo $root_link?>/assets/images/f_novedades/novedad-03.jpg" class="w-100" alt="">
                                    </figure>
                                    <div class="novedad_title_bgGreen">
                                        <h6 class="text-white m-0 py-2 text-center">Censos de Arbolado: nuestra aplicación llegó a La Francia, Córdoba</h6>
                                    </div>
                                </a>
                            </div>
                            <!-- Item -->
                            <div class="col-lg-4">
                                <a href="<?php echo $root_link?>/novedad-02.php" class="m-0 d-block novedad_wrapper">
                                    <figure class="image_wrapper_60_porc mb-0">
                                        <img src="<?php echo $root_link?>/assets/images/f_novedades/novedad-02.jpg" class="w-100" alt="">
                                    </figure>
                                    <div class="novedad_title_bgGreen">
                                        <h6 class="text-white m-0 py-2 text-center">Presentación de la app Barranqueras Digital</h6>
                                    </div>
                                </a>
                            </div>
                            <!-- Item -->   
                            <div class="col-lg-4">
                                <a href="<?php echo $root_link?>/novedad-01.php" class="m-0 d-block novedad_wrapper">
                                    <figure class="image_wrapper_60_porc mb-0">
                                        <img src="<?php echo $root_link?>/assets/images/f_novedades/novedad-01.jpg" class="w-100" alt="">
                                    </figure>
                                    <div class="novedad_title_bgGreen">
                                        <h6 class="text-white m-0 py-2 text-center">Lanzamiento de APP Ciudadana en Córdoba</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <section class="bg_gray py-3 py-lg-5" id="section_02">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto text-center">
                        <h2 class="text-uppercase text_green mb-4 font_size_2">Agenda</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row" style="row-gap: 15px;">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-4 pe-0">
                                        <div class="agenda_image_bg w-100 h-100" style="background-image: url('<?php echo $root_link?>/assets/images/f_agenda/agenda-01.jpg');"></div>
                                    </div>
                                    <div class="col-8 py-4 agendaText_wrapper position-relative" >
                                        <h6 class="text_green text-uppercase fw-bold mb-0">Municipio de Villa María</h6>
                                        <h6 class="text_green">Cordoba, Argentina</h6>
                                        <ul class="disable_list mt-3">
                                            <li class="mb-2 d-flex"><i class="fas fa-calendar-alt me-2 text_green mt-1"></i>Lunes 16 de Septiembre</li>
                                            <li class="mb-2 d-flex"><i class="fas fa-clock me-2 text_green mt-1"></i>14:30 Hs Argentina</li>
                                            <li class="d-flex"><i class="fas fa-user me-2 text_green mt-1"></i><span><b>Mauricio Sestopal</b><br>Co-Founder at MuniDigital</span></li>
                                        </ul>
                                        <h2 class="text_green fecha_absolute">16<br><span>Sep</span></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row" >
                                    <div class="col-4 pe-0">
                                        <div class="agenda_image_bg w-100 h-100" style="background-image: url('<?php echo $root_link?>/assets/images/f_agenda/agenda-02.jpg');"></div>
                                    </div>
                                    <div class="col-8 py-4 agendaText_wrapper position-relative">
                                        <h6 class="text_green text-uppercase fw-bold mb-0">Municipio de Villa María</h6>
                                        <h6 class="text_green">Cordoba, Argentina</h6>
                                        <ul class="disable_list mt-3">
                                            <li class="mb-2 d-flex"><i class="fas fa-calendar-alt me-2 text_green mt-1"></i>Lunes 16 de Septiembre</li>
                                            <li class="mb-2 d-flex"><i class="fas fa-clock me-2 text_green mt-1"></i>14:30 Hs Argentina</li>
                                            <li class="d-flex"><i class="fas fa-user me-2 text_green mt-1"></i><span><b>Mauricio Sestopal</b><br><span style="font-size:14px;">Co-Founder at MuniDigital</span></span></li>
                                        </ul>
                                        <h2 class="text_green fecha_absolute">16<br><span>Sep</span></h2>
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
        <section class="py-3 py-lg-5" id="section_03">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-uppercase text_green mb-4 fw-normal text-center font_size_2">Prensa</h2>
                            </div>
                        </div>

                        <div class="row mt-3" style="row-gap: 30px;">
                            <div class="col-lg-4">
                                 <!-- Item -->
                                 <a href="https://ramcc.net/noticia.php?id=1452#.YQBJJaSrpuw.linkedin" target="_blank" class="m-0 d-block novedad_wrapper">
                                    <figure class="image_wrapper_60_porc mb-0">
                                        <img src="<?php echo $root_link?>/assets/images/f_prensa/prensa-03.jpg" class="w-100" alt="">
                                    </figure>
                                    <div class="novedad_title_bgGreen">
                                        <h6 class="text-white m-0 py-2 text-center">MuniArbolado: planeamiento sobre forestación urbana</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <!-- Item -->
                                <a href="https://apolitical.co/solution-articles/en/govtech-startups-sustainable-development-goals" target="_blank" class="m-0 d-block novedad_wrapper">
                                    <figure class="image_wrapper_60_porc mb-0">
                                        <img src="<?php echo $root_link?>/assets/images/f_prensa/prensa-02.jpg" class="w-100" alt="">
                                    </figure>
                                    <div class="novedad_title_bgGreen">
                                        <h6 class="text-white m-0 py-2 text-center">Sustainable Development Goals</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4">
                               
                                <!-- Item -->
                                <a href="https://villamariavivo.com/evaluaran-a-villa-maria-en-transformacion-digital" target="_blank" class="m-0 d-block novedad_wrapper">
                                    <figure class="image_wrapper_60_porc mb-0">
                                        <img src="<?php echo $root_link?>/assets/images/f_prensa/prensa-01.jpg" class="w-100" alt="">
                                    </figure>
                                    <div class="novedad_title_bgGreen">
                                        <h6 class="text-white m-0 py-2 text-center">Villa María y la transformación digital</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- <section class="bg_gray py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-uppercase text_green mb-4 fw-normal text-center font_size_2">Video</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center">
                                <img src="<?php echo $root_link?>/assets/images/casos-de-exito/video-example.png" style="width: 60%;" alt="">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6 m-auto">
                                <div class="row row-cols-6">
                                    <div class="col p-0">
                                        <img src="<?php echo $root_link?>/assets/images/casos-de-exito/video-example.png" style="width: 100%;" alt="">
                                    </div>
                                    <div class="col p-0">
                                        <img src="<?php echo $root_link?>/assets/images/casos-de-exito/video-example.png" style="width: 100%;" alt="">
                                    </div>
                                    <div class="col p-0">
                                        <img src="<?php echo $root_link?>/assets/images/casos-de-exito/video-example.png" style="width: 100%;" alt="">
                                    </div>
                                    <div class="col p-0">
                                        <img src="<?php echo $root_link?>/assets/images/casos-de-exito/video-example.png" style="width: 100%;" alt="">
                                    </div>
                                    <div class="col p-0">
                                        <img src="<?php echo $root_link?>/assets/images/casos-de-exito/video-example.png" style="width: 100%;" alt="">
                                    </div>
                                    <div class="col p-0">
                                        <img src="<?php echo $root_link?>/assets/images/casos-de-exito/video-example.png" style="width: 100%;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-12 text-center">
                                <a href="#" class="btn btn_orange py-2 px-4 text-white text-uppercase fw-bold">Ver Más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
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
        <?php echo $initialScroll;?>    
    </script>
</body>
</html>