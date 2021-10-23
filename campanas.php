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
        <section class="py-3 py-lg-5 campanias_title_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row align-items-center flex-colum flex-column-reverse flex-lg-row" style="position: relative; z-index:2">
                            <div class="col-lg-6">
                                <h1 class="page_general_title text-uppercase text-white mb-4 text-center text-lg-start"><b>100M</b></span></h1>
                                <p class="text-white text-center text-lg-start">En MuniDigital estamos <b>comprometidos</b> con el cuidado medioambiental de nuestro planeta y decidimos que era momento de realizar nuestro aporte y tomar acción. Por eso, iniciamos la <b>campaña de censo de árboles</b> más grande que alguna vez se haya hecho.</p>
                                
                                <p class="text-white text-center text-lg-start">Censar árboles es <b>indispensable</b> para controlar el cuidado de cada uno durante su desarrollo hasta alcanzar madurez ya que es su etapa de mayor captura de carbono, por eso, es <b>fundamental</b> el control sobre el estado en el que se encuentran los árboles de cada ciudad.</p> 
                                
                                <p class="text-white mb-0 text-center text-lg-start"><b>¿Cómo funcionan nuestras herramientas?</b> Es fácil, a partir del registro fotográfico que cada usuario realice de los árboles, la aplicación puede incorporar datos clave como la especie, su fase vital y la geolocalización para determinar los faltantes y riesgos permitiendo la generación de un mapa del arbolado de la ciudad.</p>
                            </div>

                            <div class="col-8 m-auto m-lg-0 col-lg-6">
                                <img src="<?php echo $root_link?>/assets/images/campanas/logo-campana-100m.svg" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <section class="bg_gray py-3 py-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h1 class="text-uppercase text_green mb-4 fw-normal">Frente de Acción</h1>
                                <p class="text_green">Ya logramos registrar <b>10 millones de ejemplares</b> y queremos llegar a nuestro objetivo: <b>censar 100 millones de árboles.</b> Para eso, necesitamos tu ayuda. A partir de la descarga de la aplicación <b>PANDO</b> ya estás participando de este compromiso medioambiental impulsado por <b>MuniDigital</b> simplemente compartiendo imágenes de los árboles de tu zona, y si eres de un Municipio o una organización interesada, completa el registro y nos pondremos en contacto para que puedas participar y disponer del mapa del arbolado de la ciudad. ¿Te sumas?</p>
                            </div>
                        </div>


                        <div class="row mt-4" style="row-gap: 15px;">
                            <div class="col-6 col-lg-3">
                                <div class="frenteAccion_wrapper text-center py-3 py-lg-4 px-2 px-md-3 d-flex flex-column justify-content-center">
                                    <img src="<?php echo $root_link?>/assets/images/campanas/frente-accion-01.svg" alt="">
                                    <div class="frenteAccion_txt mt-3 mt-lg-5 text-white">
                                        <h5>Censado y mapeo</h5>
                                        <p class="mb-0">Carga de información, registro fotográfico y localización de los ejemplares.</p>
                                    </div>
                                </div>
                            </div>    
                            <div class="col-6 col-lg-3">
                                <div class="frenteAccion_wrapper text-center py-3 py-lg-4 px-2 px-md-3 d-flex flex-column justify-content-center">
                                    <img src="<?php echo $root_link?>/assets/images/campanas/frente-accion-03.svg" alt="">
                                    <div class="frenteAccion_txt mt-3 mt-lg-5 text-white">
                                        <h5>Procesamiento e información</h5>
                                        <p class="mb-0">Organización y gestión de la información. Mapas e inventario forestal.</p>
                                    </div>
                                </div>
                            </div>    
                            <div class="col-6 col-lg-3">
                                <div class="frenteAccion_wrapper text-center py-3 py-lg-4 px-2 px-md-3 d-flex flex-column justify-content-center">
                                    <img src="<?php echo $root_link?>/assets/images/campanas/frente-accion-02.svg" alt="">
                                    <div class="frenteAccion_txt mt-3 mt-lg-5 text-white">
                                        <h5>Estrategias de intervención</h5>
                                        <p class="mb-0">Planes de acción, entrega de ejemplares y donaciones, campañas de reforestación.</p>
                                    </div>
                                </div>
                            </div>    
                            <div class="col-6 col-lg-3">
                                <div class="frenteAccion_wrapper text-center py-3 py-lg-4 px-2 px-md-3 d-flex flex-column justify-content-center">
                                    <img src="<?php echo $root_link?>/assets/images/campanas/frente-accion-04.svg" alt="">
                                    <div class="frenteAccion_txt mt-3 mt-lg-5 text-white">
                                        <h5>Recomendación Seguimiento, y cuidado</h5>
                                        <p class="mb-0">Banco de información: Características y estado del ejemplar, recomendaciones de cuidado y mantenimiento.</p>
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
        <section class="py-5 linea-de-tiempo">
   
   </section>

        
        <section class="pt-3 pt-lg-5 pb-md-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="text-uppercase text_green text-center mb-4 fw-normal"><span class="fw-normal">¿Cómo</span><b> Participar?</b></h1>
                                <h3 class="text-uppercase text-center text_green">Juntos podemos llegar a los <br class="d-none d-lg-inline-block"><b>#100MillonesDeÁrbolesCensados !</b></h3>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-lg-6 bg_green comoParticipar_wrapper">
                                <div class="row align-items-center h-100">
                                    <div class="col-5 col-md-6 text-center">
                                        <img src="<?php echo $root_link?>/assets/images/campanas/municipios-y-organizaciones.svg" style="width: 70%;" alt="">
                                        <h4 class="text-white fw-bold mt-3">Municipios y organizaciones</h4>
                                    </div>
                                    <div class="col-7 col-md-6 text-center">
                                        <p class="text-white">¡Regístrate y empieza <br class="d-none d-lg-inline-block">a participar!</p>
                                        <a href="#" class="btn btn_orange text-white fw-bold text-uppercase py-2 px-4">Ingresar</a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 bg_gray comoParticipar_wrapper">
                                <div class="row align-items-center h-100">
                                    <div class="col-5 col-md-6 text-center">
                                        <img src="<?php echo $root_link?>/assets/images/campanas/ciudadanos.svg" style="width: 52%;" alt="">
                                        <h4 class="text_green fw-bold mt-3">Ciudadanos</h4>
                                    </div>
                                    <div class="col-7 col-md-6 text-center">
                                        <p class="text_green">¡Descarga nuestra <b>App</b> <br class="d-none d-lg-inline-block"><b>PANDO</b> y empieza a participar!</p>
                                        <div class="d-flex">
                                            <a href="https://apps.apple.com/co/app/pando-tree/id1471409387" target="_blank" class=""><img src="<?php echo $root_link?>/assets/images/campanas/ios-market.svg" alt="" style=" width: 85%;"></a>
                                            <a href="https://play.google.com/store/apps/details?id=com.munidigital.muniarbolglobal" target="_blank" class=""><img src="<?php echo $root_link?>/assets/images/campanas/android-market.svg" alt="" style=" width: 85%;"></a>
                                        </div>
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