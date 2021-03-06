<?php 
require 'includes/inc_libFnt.php'; 
$initialScroll = "";
if(isset($_GET["s"])){
    $section = $_GET["s"];
    if($section == "sobre-nosotros"){
        $initialScroll = "$('html, body').animate({scrollTop: $(\"#section_01\").offset().top - \"50\"}, 800);";
    }else if($section == "nuestro-staff"){
        $initialScroll = "$('html, body').animate({scrollTop: $(\"#section_02\").offset().top - \"50\"}, 800);";
    }else if($section == "reconocimientos"){
        $initialScroll = "$('html, body').animate({scrollTop: $(\"#section_03\").offset().top - \"1000\"}, 800);";
    }else if($section == "socios-y-aliados"){
        $initialScroll = "$('html, body').animate({scrollTop: $(\"#section_04\").offset().top - \"50\"}, 800);";
    }else if($section == "rrhh"){
        $initialScroll = "$('html, body').animate({scrollTop: $(\"#section_05\").offset().top - \"50\"}, 800);";
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
        <section class="page_general_bg" style="background-image: url('<?php echo $root_link?>/assets/images/nosotros/nosotros-imagen-titulo.jpg')">
            <div class="container h-100 d-flex align-items-center">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="page_general_title text_shadow text-uppercase text-white" style="text-shadow: 2px 2px 4px rgba(0,0,0,.7);"><span class="fw-bold">Muni</span><span class="fw-light">Digital</span></h1>
                                <p class="m-0 text-white text_shadow nosotros_banner_subtitle" style="text-shadow: 2px 2px 4px rgba(0,0,0,1);">Somos una empresa Govtech dedicada al desarrollo de software destinado a incrementar la eficiencia, transparencia y participaci??n ciudadana en la gesti??n de gobiernos de todo el mundo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <section class="py-3 py-lg-5 nuestro-equipo-bg" id="section_01">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row position-relative">
                            <div class="col-md-6">
                                <h2 class="font_size_2 mb-4 fw-normal text-center text-md-start">Sobre Nosotros</h2>
                                <p class="text-center text-md-start"><b>MuniDigital</b> ofrece las soluciones necesarias que cada gesti??n necesita a nivel municipal, provincial o nacional. Nuestra <b>herramienta</b> de gesti??n ayuda a reducir los tiempos de respuesta y prestaci??n de servicios entre los empleados municipales y los ciudadanos, optimiza recursos humanos y econ??micos y aumenta el rendimiento productivo del trabajador.</p>
                                <p class="text-center text-md-start">Nuestra empresa est?? conformada por un <b>equipo de profesionales</b> provenientes de diferentes ??reas y paises para lograr <b>soluciones</b> innovadoras con resultados ??ptimos y adaptables a las necesidades que cada administraci??n requiera.</p>
                            </div>
                            <div class="col-6 d-none d-md-inline-block">
                                <figure class="m-0 phone_nosotros">
                                    <img src="<?php echo $root_link?>/assets/images/nosotros/phone-nosotros.png" class="w-100" alt="">
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
        <section class="bg_gray pt-3 pb-5 pt-lg-5 pb-lg-0 nuestro-equipo-bg2" id="section_02">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="font_size_2 mb-0 fw-normal">Nuestro Equipo</h2>
                    </div>
                </div>
            </div>
            <!-- carousel -->
            <div class="d-flex justify-content-around owl-staff owl-carousel owl-theme mt-4">
                <!-- Items -->
                <div class="row marginTop_staffFix" style="row-gap: 25px;">
                    <div class="col-lg-8 m-auto">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="<?php echo $root_link?>/assets/images/nosotros/staff/mauricio-sestopal.png" class="m-auto staffImage_translate" alt="">
                            </div>
                            <div class="col-md-6">
                                <h3 class="text_green text-center text-lg-left px-3 pt-4 px-lg-0 pt-lg-0 staffText">???Mi nombre es <b>Mauricio Sestopal</b> y soy <b>CEO</b> de MuniDigital. Nuestra visi??n es contribuir para mejorar la calidad de vida de los ciudadanos y d??a a d??a trabajamos para que ellos sean part??cipes en la toma de decisiones de sus municipios???.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Items -->
                <div class="row marginTop_staffFix" style="row-gap: 25px;">
                    <div class="col-lg-8 m-auto">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="<?php echo $root_link?>/assets/images/nosotros/staff/martin-bono.png" class="m-auto staffImage_translate" alt="">
                            </div>
                            <div class="col-md-6">
                                <h3 class="text_green text-center text-lg-left px-3 pt-4 px-lg-0 pt-lg-0 staffText">???Mi nombre es <b>Mart??n Bono</b> y soy <b>CTO</b> de MuniDigital, una empresa que genera valor e impacto positivo tanto en las gestiones de gobierno como en la vida de los ciudadanos. Tener una escucha activa de los municipios nos permite brindarles herramientas que respondan a sus necesidades???.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Items -->
                <div class="row marginTop_staffFix" style="row-gap: 25px;">
                    <div class="col-lg-8 m-auto">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="<?php echo $root_link?>/assets/images/nosotros/staff/staff-01.png" class="m-auto staffImage_translate" alt="">
                            </div>
                            <div class="col-md-6">
                                <h3 class="text_green text-center text-lg-left px-3 pt-4 px-lg-0 pt-lg-0 staffText">???Soy <b>Victoria Libedinsky</b> y soy <b>CFO</b> de MuniDigital. Nuestro objetivo es democratizar esta transformaci??n digital en la administraci??n p??blica, tanto en grandes ciudades como en municipios peque??os???</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Items -->
                <div class="row marginTop_staffFix" style="row-gap: 25px; ">
                    <div class="col-lg-8 m-auto">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="<?php echo $root_link?>/assets/images/nosotros/staff/staff-02.png" class="m-auto staffImage_translate" alt="">
                            </div>
                            <div class="col-md-6">
                                <h3 class="text_green text-center text-lg-left px-3 pt-4 px-lg-0 pt-lg-0 staffText">???Soy <b>Virgina Mor??n</b> y coordino el ??rea de <b>dise??o y comunicaci??n</b> de MuniDigital. Ver c??mo la plataforma se adapta a municipios grandes y peque??os y genera un efecto positivo en la vida cotidiana de los ciudadanos, es s??per inspirador???</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Items -->
                <div class="row marginTop_staffFix" style="row-gap: 25px;">
                    <div class="col-lg-8 m-auto">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="<?php echo $root_link?>/assets/images/nosotros/staff/staff-03.png" class="m-auto staffImage_translate" alt="">
                            </div>
                            <div class="col-md-6">
                                <h3 class="text_green text-center text-lg-left px-3 pt-4 px-lg-0 pt-lg-0 staffText">"Mi nombre es <b>Paula</b> y trabajo en el ??rea de <b>Recursos Humanos</b> de MuniDigital. Nuestro objetivo como equipo es mejorar la calidad de vida de los ciudadanos y que ellos tambi??n se sientan parte de la administraci??n p??blica del gobierno."</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Items -->
                <div class="row marginTop_staffFix" style="row-gap: 25px;">
                    <div class="col-lg-8 m-auto">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="<?php echo $root_link?>/assets/images/nosotros/staff/staff-04.png" class="m-auto staffImage_translate" alt="">
                            </div>
                            <div class="col-md-6">
                                <h3 class="text_green text-center text-lg-left px-3 pt-4 px-lg-0 pt-lg-0 staffText">"Me llamo <b>Brunella Mandrile</b>, soy Licenciada en Ciencias Pol??ticas y formo parte del equipo de <b>Costumer Service</b> como Asistente de Seguimiento e Implementaci??n. En MuniDigital acompa??amos a los municipios desde el primer momento y estamos presentes para ayudarlos en cualquier duda que tengan con respecto a la plataforma, aunque sea en lo m??nimo e indispensable."</h3>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- Items -->
                 <div class="row marginTop_staffFix" style="row-gap: 25px;">
                    <div class="col-lg-8 m-auto">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="<?php echo $root_link?>/assets/images/nosotros/staff/staff-05.png" class="m-auto staffImage_translate" alt="">
                            </div>
                            <div class="col-md-6">
                                <h3 class="text_green text-center text-lg-left px-3 pt-4 px-lg-0 pt-lg-0 staffText">"Mi nombre es <b>Pedro Gonz??lez Ach??val</b> y soy el <b>Coordinador de Mercado Internacional</b> de MuniDigital. Me encanta poder formar parte de un equipo que colabora a que la vida de la gente sea mejor y trabajo todos los d??as para que esto se expanda a todos los pa??ses que sean posibles."</h3>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- Items -->
                 <div class="row marginTop_staffFix" style="row-gap: 25px;">
                    <div class="col-lg-8 m-auto">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="<?php echo $root_link?>/assets/images/nosotros/staff/rene-fernandez.png" class="m-auto staffImage_translate" alt="">
                            </div>
                            <div class="col-md-6">
                                <h3 class="text_green text-center text-lg-left px-3 pt-4 px-lg-0 pt-lg-0 staffText">???Mi nombre es <b>Ren?? Fernandez</b> y soy <b>Coordinador del ??rea de Ventas</b>. Nuestro fin, es facilitar las tareas y darle mayor velocidad a los procesos que involucran a los vecinos. MuniDigital tiende un puente entre los vecinos y municipios, para poder generar una respuesta m??s r??pida y eficiente???.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- Items -->
                 <div class="row marginTop_staffFix" style="row-gap: 25px;">
                    <div class="col-lg-8 m-auto">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="<?php echo $root_link?>/assets/images/nosotros/staff/santiago-falses.png" class="m-auto staffImage_translate" alt="">
                            </div>
                            <div class="col-md-6">
                                <h3 class="text_green text-center text-lg-left px-3 pt-4 px-lg-0 pt-lg-0 staffText">???Soy <b>Santiago Falses</b> y soy <b>T??cnico L??der</b> de uno de los equipos de desarrollo. Saber que d??a a d??a contribuimos a que municipios y ciudades sean mejores, y que los ciudadanos se vean beneficiados con el aporte de mi trabajo, es lo que m??s de inspira de trabajar en MuniDigital."</h3>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- Items -->
                 <div class="row marginTop_staffFix" style="row-gap: 25px;">
                    <div class="col-lg-8 m-auto">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="<?php echo $root_link?>/assets/images/nosotros/staff/melina-miranda.png" class="m-auto staffImage_translate" alt="">
                            </div>
                            <div class="col-md-6">
                                <h3 class="text_green text-center text-lg-left px-3 pt-4 px-lg-0 pt-lg-0 staffText">???Mi nombre es <b>Melina Miranda</b> y soy <b>Scrum Master</b> del equipo de desarrollo. Desde mi lugar, trabajo d??a a d??a para llevar la metodolog??a ??gil dentro de la organizaci??n para que MuniDigital siga desarrollando nuevas soluciones que cubran las necesidades que se manifiestan en las diferentes ??reas???.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- Items -->
                 <div class="row marginTop_staffFix" style="row-gap: 25px;">
                    <div class="col-lg-8 m-auto">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="<?php echo $root_link?>/assets/images/nosotros/staff/belen-garnero.png" class="m-auto staffImage_translate" alt="">
                            </div>
                            <div class="col-md-6">
                                <h3 class="text_green text-center text-lg-left px-3 pt-4 px-lg-0 pt-lg-0 staffText">???Mi nombre es <b>Ana Bel??n Garnero</b> y soy <b>Full Stack Developer.</b> Sue??o con que MuniDigital est?? presente en todo el planeta y llegue a otros pa??ses para acompa??ar la transformaci??n digital de las diferentes administraciones p??blicas???.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- Items -->
                 <div class="row marginTop_staffFix" style="row-gap: 25px;">
                    <div class="col-lg-8 m-auto">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img src="<?php echo $root_link?>/assets/images/nosotros/staff/inigo-junco.png" class="m-auto staffImage_translate" alt="">
                            </div>
                            <div class="col-md-6">
                                <h3 class="text_green text-center text-lg-left px-3 pt-4 px-lg-0 pt-lg-0 staffText">???Mi nombre es <b>I??igo Junco</b> y soy el <b>representante de cuentas de MuniDigital en Espa??a</b>. Saber que uno forma parte de una empresa que genera soluciones para la mejora de la sociedad en general, es muy motivador. Todos los d??as trabajo para que, a trav??s de la estrategia de expansi??n, podamos ayudar a la mayor cantidad de entes p??blicos.???</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <section class="py-3 py-lg-5 nuestro-equipo-bg3" id="section_03">
            <div class="container">
                <div class="row position-relative">
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="font_size_2 mb-4 fw-normal text-center text-md-start">Reconocimientos</h2>
                            </div>  
                        </div>

                        <div class="row-adj-2 align-items-center alg2">
                            <div class="col-lg-6 text-center text-lg-start">
                                <p>Gracias al trabajo de todo nuestro equipo, MuniDigital fue reconocido por The World Economic Forum entre 96 <b>empresas innovadoras</b> de todo el mundo por su <b>contribuci??n al desarrollo de la tecnolog??a</b> fomentando la transparencia e integridad en la gesti??n p??blica.</p>
                            </div>
                            <div class="col-1"></div>
                            <div class="col-5 text-center">
                                <img class="reco-img" src="<?php echo $root_link?>/assets/images/nosotros/reconocimiento-01.png"  alt="">
                            </div>
                        </div>
                        
                        <div class="row-adj align-items-center alg2">
                            <div class="col-5 text-center">
                                <img class="reco-img" src="<?php echo $root_link?>/assets/images/nosotros/reconocimiento-02.png"  alt="">
                            </div>
                            <div class="col-1"></div>
                            <div class="col-lg-6 text-center text-lg-start">
                                <p>Por otra parte, El Ministerio de Educaci??n, Cultura, Ciencia y Tecnolog??a de la Argentina otorg?? financiamiento para el desarrollo del sistema MuniDigital ya que nos reconoci?? como una <b>potente herramienta de gesti??n administrativa.</b></p>
                            </div>
                        </div>

                        <div class="row-adj-2 align-items-center alg2">
                            <div class="col-lg-6 text-center text-lg-start">
                                <p>Adem??s, el Banco de Desarrollo de Am??rica Latina distingui?? a nuestra empresa como un <b>ejemplo a nivel latinoamericano de gobierno digital e innovaci??n p??blica</b> ya que, a partir de los datos arrojados por una investigaci??n, la plataforma MuniDigital ha posibilitado ahorros de 700% en los gobiernos municipales.</p>
                            </div>
                            <div class="col-1"></div>
                            <div class="col-5 text-center">
                                <img class="reco-img" src="<?php echo $root_link?>/assets/images/nosotros/reconocimiento-03.png"  alt="">
                            </div>
                        </div>
                        
                        <div class="row-adj align-items-center alg2">
                            <div class="col-5 text-center">
                                <img class="reco-img" src="<?php echo $root_link?>/assets/images/nosotros/public-tech.svg"  alt="">
                            </div>
                            <div class="col-1"></div>
                            <div class="col-lg-6 text-center text-lg-start">
                                <p>Asimismo, <b>IE Public Tech Lab de Espa??a</b> creado para la experimentaci??n y dise??o de nuevas soluciones para los retos del sector p??blico, destac?? a <b>MuniDigital</b> entre las 100 mejores startups de Iberoam??rica con mayor eficiencia para brindar soluciones a los grandes desaf??os de los gobiernos aumentando la agilidad y transparencia en la prestaci??n de servicios.</p>
                            </div>
                        </div>

                        <div class="row-adj-2 align-items-center alg2">
                            <div class="col-lg-6 text-center text-lg-start">
                                <p>Por otro lado, <b>StateUP</b>, la consultora brit??nica de pol??ticas p??blicas, nos seleccion?? dentro del ranking Ones to Watch como una de las govtech m??s prometedoras del 2021 a nivel global y con extraordinario potencial para el futuro.</p>
                            </div>
                            <div class="col-1"></div>
                            <div class="col-5 text-center">
                                <img class="reco-img" src="<?php echo $root_link?>/assets/images/nosotros/state-up.png" alt="">
                            </div>
                        </div>

                        <div class="row-adj align-items-center alg2">
                            <div class="col-5 text-center">
                                <img class="reco-img" src="<?php echo $root_link?>/assets/images/nosotros/brazilLab.png"  alt="">
                            </div>
                            <div class="col-1"></div>
                            <div class="col-lg-6 text-center text-lg-start">
                                <p>Adicionalmente, <b>BrazilLab</b>, el primer Hub Govtech del pa??s cuya misi??n es fomentar la innovaci??n dentro de los gobiernos a trav??s del empoderamiento de los distintos sectores de la sociedad, incluy?? a <b>MuniDigital</b> dentro de las startups con mayor impacto en las administraciones p??blicas y con mayor capacidad de resoluci??n frente a los problemas actuales que tienen que enfrentar las distintas gestiones.</p>
                            </div>
                        </div>

                        <div class="row-adj-2 align-items-center alg2">
                            <div class="col-lg-6 text-center text-lg-start">
                                <p>A su vez, el espacio de innovaci??n urbana del Ayuntamiento de Madrid, <b>La Nave</b>, agreg?? a <b>MuniDigital</b> en su ecosistema de innovaci??n con el fin de facilitar la colaboraci??n entre startups, corporaciones e instituciones p??blicas para impulsar el desarrollo de soluciones tecnol??gicas y as?? mejorar la calidad de vida de los ciudadanos.</p>
                            </div>
                            <div class="col-1"></div>
                            <div class="col-5 text-center">
                                <img class="reco-img" src="<?php echo $root_link?>/assets/images/nosotros/lanave.svg"  alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <section class="py-3 py-lg-5 bg_gray nuestro-equipo-bg4" id="section_04">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="font_size_2 mb-4 fw-normal">Socios y Aliados</h2>
                    </div>
                    <div class="col-lg-8 m-auto text-center">
                    <p class="mb-0">Para nosotros, el apoyo de otras grandes compa????as es esencial para continuar el progreso de MuniDigital en el desarrollo de softwares y soluciones. Algunos de nuestros aliados son: </p>
                    </div>

                    <!-- <img src="<?php echo $root_link?>/assets/images/nosotros/socios-y-aliados.png" alt=""> -->
            
             
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel owl-theme owl-socios-aliados d-flex align-items-center">
                            <img src="<?php echo $root_link?>/assets/images/nosotros/socios-y-aliados/AAICI.png" class="" alt="">
                            <img src="<?php echo $root_link?>/assets/images/nosotros/socios-y-aliados/bh-tec.png" class="" alt="">
                            <img src="<?php echo $root_link?>/assets/images/nosotros/socios-y-aliados/CAF.png" class="" alt="">
                            <img src="<?php echo $root_link?>/assets/images/nosotros/socios-y-aliados/Cruz-roja.png" class="" alt="">
                            <img src="<?php echo $root_link?>/assets/images/nosotros/socios-y-aliados/enter-e-estonia.png" class="" alt="">
                            <img src="<?php echo $root_link?>/assets/images/nosotros/socios-y-aliados/Fab_Lab.png" class="" alt="">
                            <img src="<?php echo $root_link?>/assets/images/nosotros/socios-y-aliados/Katapult-Acelerator.png" class="" alt="">
                            <img src="<?php echo $root_link?>/assets/images/nosotros/socios-y-aliados/SEEDpng.png" class="" alt="">
                            <img src="<?php echo $root_link?>/assets/images/nosotros/socios-y-aliados/logo-negro.png" class="" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <section class="rrhh_bg" id="section_05">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-10 m-auto">
                        <div class="row h-100 align-items-center">
                            <div class="col-lg-6">
                                <h2 class="font_size_2 mb-4 fw-normal text-white text-center text-lg-start">Recursos Humanos</h2>
                                <p class="mb-0 text-white text-center text-lg-start">En MuniDigital apostamos por incorporar permanentemente nuevos profesionales que sean emp??ticos, proactivos y entusiastas. Si quieres formar parte de nuestro equipo, te invitamos a mandarnos tu CV a <a href="mailto:rrhh@munidigital.com" class="disable_link text-white" style="text-decoration: underline;">rrhh@munidigital.com</a>.</p>
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
    <script>

        var animSpeed= 250;
        <?php echo $initialScroll; ?>    
        /////////////////
        /////////////////
        var owlStaff = $(".owl-staff");
        owlStaff.owlCarousel({
            items: 1,
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
                nav: true,  
                autoHeight:true
            },
            768:{
                items:1,
                dots:true,
                nav: true,
                autoHeight:true
            },
            1024:{
                items:1,
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
        var owlSociosAliados = $(".owl-socios-aliados");
        owlSociosAliados.owlCarousel({
            items: 4,
            nav: false,
            dots: false,
            loop: true,
            autoplay: true,
            autoplayTimeout:5000,
            autoplayHoverPause: true,
            smartSpeed: 600,
            responsive:{
                0:{
                    items:4
                },
                768:{
                    items:4
                },
                1024:{
                    items:8
                },
                1200:{
                    items:8
                },
                1600:{
                    items:8
                }
            }   
        });   


    </script>
</body>
</html>