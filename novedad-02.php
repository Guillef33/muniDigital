<?php 
require 'includes/inc_libFnt.php'; 

                  
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
        <!-- Titulo Pagina v2 -->
        <section class="py-4 py-lg-5 bg_gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <p class="text-uppercase mb-0"><a href="<?php echo $root_link?>/novedades.php"  class="disable_link">Novedades</a> > Presentación de la Aplicación Barranqueras Digital</p>
                    </div>
                </div>
            </div>
        </section> 

        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <section class="mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-lg-9">
                                <!-- Fecha -->
                                <p class="fw-bold my-3">21-07-2021</p>
                                <!-- Titulo Novedad -->
                                <h3 class="text_green text-uppercase my-3">Presentación de la Aplicación Barranqueras Digital</h3>
                                <!--Texto Principal y Footage Principal -->
                                <div class="d-flex flex-column-reverse flex-md-column">
                                    <p class="mt-2" style="text-align: justify">Estamos orgullosos de acompañar a los distintos municipios en su camino a la modernización. En este caso, estuvimos junto a la ciudad de Barranqueras en la presentación de la APP “Barranqueras Digital”. La intendenta Magda Ayala aseguró que “la modernización que estamos impulsando es en pos de ser un gobierno transparente y accesible, como también es una contribución directa a la planificación de las gestiones de gobierno en las diferentes áreas”. </p>
                                    <p class="mt-2 mb-0" style="text-align: justify">Por otra parte, el coordinador de Cómputos de la ciudad chaqueña, Angel Pochettino, destacó que la aplicación realizada por MuniDigital es una herramienta cuyo fin es mantener una comunicación constante con los vecinos y poner al servicio de la gestión las herramientas tecnológicas disponibles para facilitar la realización de reclamos y pedidos dirigidos a la Municipalidad.</p>
                                    <!-- Footage Principal -->
                                    <figure class="mt-4 w-100 mb-3 mt-3">
                                        <img src="<?php echo $root_link?>/assets/images/f_novedades/novedad-02.jpg" class="w-100"  alt="">
                                    </figure> 
                                </div>
                                <!-- Compartir en Redes -->
                                <!-- <ul class="p-0 d-flex mt-3 mb-0 disable_list">
                                    <li class="me-3">Compartir:</li>

                                    <li class="me-3"><a href="http://www.facebook.com/sharer.php?u=http://jidoka.com.ar/novedad2.php?id=<?php echo $id_novedades; ?>" title="Compartir en Facebook" target="_blank" class="facebook customer share"><i class="fab fa-facebook-f " style="color: #3a589e;"></i></a></li>
                                    
                                    <li><a href="whatsapp://send?text=<?php echo $titulo_novedades; ?> http://jidoka.com.ar/novedad2.php?id=<?php echo $id_novedades; ?>" data-action="share/whatsapp/share"><i class="fab fa-whatsapp " style="color: #19CF86;"></i></a></li>
                                </ul> -->
                            </div>

                            <div class="col-lg-3 mt-5 mt-lg-3">
                                <div class="position-relative">
                                    <h6 class="text-center text-uppercase text_600 border_gris m-0 p-2 border_blue text_blue">Otras <b>novedades</b></h6>
                                </div>
                                <div class="row mt-4">
                                    <!-- Item -->
                                    <div class="col-12">
                                        <a href="<?php echo $root_link?>/novedad-01.php" class="m-0 d-block novedad_wrapper">
                                            <figure class="image_wrapper_60_porc mb-0">
                                                <img src="<?php echo $root_link?>/assets/images/f_novedades/novedad-01.jpg" class="w-100" alt="">
                                            </figure>
                                            <div class="novedad_title_bgGreen">
                                                <h6 class="text-white m-0 py-2 text-center">Lanzamiento de APP Ciudadana en Córdoba</h6>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Item -->
                                    <div class="col-12 mt-3">
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
                                    <div class="col-12 mt-3">
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
                                     <div class="col-12 mt-3">
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
                                    <div class="col-12 mt-3">
                                        <a href="<?php echo $root_link?>/novedad-06.php" class="m-0 d-block novedad_wrapper">
                                            <figure class="image_wrapper_60_porc mb-0">
                                                <img src="<?php echo $root_link?>/assets/images/f_novedades/novedad-06.jpg" class="w-100" alt="">
                                            </figure>
                                            <div class="novedad_title_bgGreen">
                                                <h6 class="text-white m-0 py-2 text-center">MuniDigital realizó una Masterclass online sobre Arbolado Urbano</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </section>
    
    </main>

    <?php include('includes/inc_footer.php')?>
    <script src="<?php echo $root_link?>/assets/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- Text Fill -->
    <script src="<?php echo $root_link;?>/assets/js/jquery.textfill.min.js"></script>
    <!------OWL CAROUSEL------>
    <script src="<?php echo $root_link;?>/assets/owl-carousel/dist/owl.carousel.min.js"></script>

    <script src="<?php echo $root_link?>/assets/js/main.js"></script>
</body>
</html>