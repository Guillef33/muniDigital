<?php 
require 'includes/inc_libFnt.php'; 

if(isset($_GET["s"])){
    $section = $_GET["s"];
    if($section == "paises"){
        $initialScroll = "$('html, body').animate({scrollTop: $(\"#section_01\").offset().top - \"50\"}, 800);";
    }else if($section == "experiencias-muni"){
        $initialScroll = "$('html, body').animate({scrollTop: $(\"#section_02\").offset().top - \"50\"}, 800);";
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
        <section class="py-5 nuestro-equipo-bg3" id="section_01">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto text-center">
                        <h2 class="font_size_2 text-uppercase text-white text-center text_green mb-5"><span class="fw-normal">Estamos en <b>7 paises</b></span></h2>

                        <img src="<?php echo $root_link;?>/assets/images/casos-de-exito/mapa.png" class=" text-center" style="width: 90%;" alt="">
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
                        <h1 class="text-uppercase text_green mb-4 fw-normal"><span class="fw-bold">Casos </span>de Éxito</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-md-4 mb-4 mb-md-0">
                                <div class="yt_videos_size_w100 w-100">
                                    <iframe class="w-100 h-100" src="https://www.youtube.com/embed/IQ1ai4QgVtM?rel=0&amp;showinfo=0&amp;enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                                    <img src="<?php echo $root_link;?>/assets/images/home/casos-de-exito/ipad-mockup.png" class="w-100 ipad_yt d-none d-lg-inline-block" alt="">
                                </div>
                                <h6 class="text_green text-center mt-4">Córdoba Capital,<br class="d-none d-lg-inline-block"> Córdoba, Argentina.</h6>
                            </div>
                            <div class="col-md-4 mb-4 mb-md-0">
                                <div class="yt_videos_size_w100 w-100">
                                    <iframe class="w-100 h-100" src="https://www.youtube.com/embed/_ugk9y8vWMI?rel=0&amp;showinfo=0&amp;enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                                    <img src="<?php echo $root_link;?>/assets/images/home/casos-de-exito/ipad-mockup.png" class="w-100 ipad_yt d-none d-lg-inline-block" alt="">
                                </div>
                                <h6 class="text_green text-center mt-4">Municipalidad de Villa Carlos Paz,<br class="d-none d-lg-inline-block"> Córdoba, Argentina</h6>
                            </div>
                            <div class="col-md-4">
                                <div class="yt_videos_size_w100 w-100">
                                    <iframe class="w-100 h-100" src="https://www.youtube.com/embed/NCbyufvWVNE?rel=0&amp;showinfo=0&amp;enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                                    <img src="<?php echo $root_link;?>/assets/images/home/casos-de-exito/ipad-mockup.png" class="w-100 ipad_yt d-none d-lg-inline-block" alt="">
                                </div>
                                <h6 class="text_green text-center mt-4">Municipalidad de Abangares,<br class="d-none d-lg-inline-block"> Costa Rica</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <section class="py-3 py-lg-5 d-none exito-bg2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <h1 class="text-uppercase text_green mb-4 fw-normal"><b>Muni<span class="fw-normal">cipios</span> Digitales</b></h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h4 class="text-uppercase text_green fw-bold">Argentina</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="disable_list">
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Guaymallén</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Municipalidad de Cipolleti</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Municipalidad Cañada de Gómez</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Formosa Tu Ciudad</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>La Nave</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Municipalidad Bialet Massé</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Abangares</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>DDNA</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Pla Estrategic Metropolitana de Barcelona</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Granadero Baigorra</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>San Luis Ciudad</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>General Pico</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Yerba Buena</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Municipalidad de Río Tercero</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Catamarca Ciudad</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Maringá Prefeitura da Cidade</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Municipalidad de Villa Carlos Paz</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Maringá Prefeitura da Cidade</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Río Segundo</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Municipalidad</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Ciudad de Resistencia</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="disable_list">
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Municipalidad General Ortiz de Ocampo</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Municipalidad de Monet Buey</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Gobierno de la Ciudad de Alta Gracia</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Gobierno Municipal Rosario Vera Peñaloza</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Secretaria de Equidad y Promoción de Empleo</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Municipalidad de Puerto Vilelas</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Municipio de Venado</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>San Isidro Municipio</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Villa María</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Rivadavia Mendoza Crece con vos</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Quilmes Municipio</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Pérez Ciudad</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>NQN</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>La Varillas</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Municipalidad Ciudad de Córdoba</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>Chichigalpa</li>
                                            <li class="mb-3 d-flex"><i class="fas fa-map-marker-alt text_green me-2 mt-1"></i>La Rioja</li>
                                        </ul>
                                    </div>
                                </div>                                
                            </div>
                            <div class="col-lg-6">
                                <figure class="mb-0 ms-auto" style="width: 70%;">
                                    <img src="<?php echo $root_link?>/assets/images/casos-de-exito/mapa-argentina.svg" class="w-100" alt="">
                                </figure>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12 text-center">
                                <a href="#" class="btn btn_orange fw-bold text-white text-uppercase py-2 px-3">Ver otros Países</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <section class="pb-3 pb-lg-5 nuestro-equipo-bg2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h5 class="text_green">Si deseas <b>conocer más testimonios</b> sobre quiénes digitalizaron sus municipios confiando en <b>MuniDigital, síguenos en nuestras redes sociales.</b></h5>
                            </div>

                            <div class="row mt-4">
                                <ul class="col-12 disable_list d-flex justify-content-center align-items-center">
                                    <li><a href="https://linkedin.com/company/munidigital" target="_blank" class="disable_link text_orange fs-1 mb-0" style="margin-right: 70px"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://facebook.com/munidigital" target="_blank" class="disable_link text_orange fs-1 mb-0" style="margin-right: 70px"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://instagram.com/muni.digital" target="_blank" class="disable_link text_orange fs-1 mb-0" style="margin-right: 70px"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://youtube.com/channel/UCFxgTN8vbQusHNsyVQ9PUSA" class="disable_link text_orange fs-1 mb-0"><i class="fab fa-youtube"></i></a></li>
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
        /////////////////
        /////////////////
    </script>
</body>
</html>