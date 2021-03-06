<?php 
require 'includes/inc_libFnt.php'; 

if(isset($_GET["s"])){
    $section = $_GET["s"];
    if($section == "nuestras-soluciones"){
        $initialScroll = "$('html, body').animate({scrollTop: $(\"#section_01\").offset().top - \"50\"}, 800);";
    }else if($section == "resultados"){
        $initialScroll = "$('html, body').animate({scrollTop: $(\"#section_02\").offset().top - \"50\"}, 800);";
    }else if($section == "modulos"){
        $initialScroll = "$('html, body').animate({scrollTop: $(\"#section_03\").offset().top - \"50\"}, 800);";
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
        <section class="page_general_bg_accesoClientes py-3 py-lg-0" style="background-image: url('<?php echo $root_link?>/assets/images/demo-gratuito/bg-demo-gratuita.jpg');">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-8 col-lg-5 m-auto text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1409.094 344.813" class="tituloPpal-muni"><defs><style>.a{isolation:isolate;}.b{fill:#fff;}.c{filter:url(#w);}.d{filter:url(#u);}.e{filter:url(#s);}.f{filter:url(#q);}.g{filter:url(#o);}.h{filter:url(#m);}.i{filter:url(#k);}.j{filter:url(#i);}.k{filter:url(#g);}.l{filter:url(#e);}.m{filter:url(#c);}.n{filter:url(#a);}</style><filter id="a" x="0" y="214.513" width="1409.094" height="130.3" filterUnits="userSpaceOnUse"><feOffset input="SourceAlpha"/><feGaussianBlur stdDeviation="10" result="b"/><feFlood flood-color="#182e26" flood-opacity="0.973"/><feComposite operator="in" in2="b"/><feComposite in="SourceGraphic"/></filter><filter id="c" x="1.654" y="1.01" width="218.865" height="234.152" filterUnits="userSpaceOnUse"><feOffset input="SourceAlpha"/><feGaussianBlur stdDeviation="7.5" result="d"/><feFlood flood-color="#061819"/><feComposite operator="in" in2="d"/><feComposite in="SourceGraphic"/></filter><filter id="e" x="210.292" y="1.01" width="171.846" height="237.49" filterUnits="userSpaceOnUse"><feOffset input="SourceAlpha"/><feGaussianBlur stdDeviation="7.5" result="f"/><feFlood flood-color="#061819"/><feComposite operator="in" in2="f"/><feComposite in="SourceGraphic"/></filter><filter id="g" x="371.912" y="1.01" width="178.461" height="234.152" filterUnits="userSpaceOnUse"><feOffset input="SourceAlpha"/><feGaussianBlur stdDeviation="7.5" result="h"/><feFlood flood-color="#061819"/><feComposite operator="in" in2="h"/><feComposite in="SourceGraphic"/></filter><filter id="i" x="541.611" y="1.01" width="78.796" height="234.152" filterUnits="userSpaceOnUse"><feOffset input="SourceAlpha"/><feGaussianBlur stdDeviation="7.5" result="j"/><feFlood flood-color="#061819"/><feComposite operator="in" in2="j"/><feComposite in="SourceGraphic"/></filter><filter id="k" x="614.343" y="2.632" width="161.827" height="227.568" filterUnits="userSpaceOnUse"><feOffset input="SourceAlpha"/><feGaussianBlur stdDeviation="7.5" result="l"/><feFlood flood-color="#061819"/><feComposite operator="in" in2="l"/><feComposite in="SourceGraphic"/></filter><filter id="m" x="764.153" y="2.632" width="62.883" height="227.569" filterUnits="userSpaceOnUse"><feOffset input="SourceAlpha"/><feGaussianBlur stdDeviation="7.5" result="n"/><feFlood flood-color="#061819"/><feComposite operator="in" in2="n"/><feComposite in="SourceGraphic"/></filter><filter id="o" x="814.777" y="0" width="159.506" height="232.839" filterUnits="userSpaceOnUse"><feOffset input="SourceAlpha"/><feGaussianBlur stdDeviation="7.5" result="p"/><feFlood flood-color="#061819"/><feComposite operator="in" in2="p"/><feComposite in="SourceGraphic"/></filter><filter id="q" x="964.355" y="2.632" width="62.883" height="227.569" filterUnits="userSpaceOnUse"><feOffset input="SourceAlpha"/><feGaussianBlur stdDeviation="7.5" result="r"/><feFlood flood-color="#061819"/><feComposite operator="in" in2="r"/><feComposite in="SourceGraphic"/></filter><filter id="s" x="1004.761" y="2.632" width="161.135" height="227.569" filterUnits="userSpaceOnUse"><feOffset input="SourceAlpha"/><feGaussianBlur stdDeviation="7.5" result="t"/><feFlood flood-color="#061819"/><feComposite operator="in" in2="t"/><feComposite in="SourceGraphic"/></filter><filter id="u" x="1118.566" y="2.632" width="172.281" height="227.568" filterUnits="userSpaceOnUse"><feOffset input="SourceAlpha"/><feGaussianBlur stdDeviation="7.5" result="v"/><feFlood flood-color="#061819"/><feComposite operator="in" in2="v"/><feComposite in="SourceGraphic"/></filter><filter id="w" x="1271.161" y="2.632" width="133.494" height="227.569" filterUnits="userSpaceOnUse"><feOffset input="SourceAlpha"/><feGaussianBlur stdDeviation="7.5" result="x"/><feFlood flood-color="#061819"/><feComposite operator="in" in2="x"/><feComposite in="SourceGraphic"/></filter></defs><g transform="translate(2332.154 -2212.204)"><g class="a" transform="translate(-2308.25 2234.704)"><path class="b" d="M2453.342,804.043V614.891h57.549l29.384,137.972,29.391-137.972h57.542V804.043h-33.79V657.732h-3.674L2557.172,795.7h-33.8l-32.564-137.966h-3.674V804.043Z" transform="translate(-2453.342 -613.881)"/><path class="b" d="M2550.52,740.906q0,33.1,29.635,33.1t29.631-33.1V614.891h33.79V740.066q0,34.78-15.79,51.043t-47.631,16.272q-31.838,0-47.629-16.272t-15.8-51.043V614.891h33.79Z" transform="translate(-2308.092 -613.882)"/><path class="b" d="M2565.833,804.043V614.891h57.057l40.159,155.777h2.448V614.891h33.8V804.043H2643.7l-41.622-155.769h-2.45V804.043Z" transform="translate(-2195.574 -613.881)"/><rect class="b" width="33.796" height="189.152" transform="translate(539.957 1.01)"/><path class="b" d="M2696.851,797.9h-57.364V615.333h57.364q39.251,0,52.035,35.355,7.43,20.322,7.428,53.29,0,68.868-30.2,86.8Q2714.038,797.9,2696.851,797.9Zm41.114-93.923q0-52.488-20.674-65.425-8.36-5.275-20.439-5.278h-39.482V779.959h39.482Q2737.967,779.959,2737.964,703.978Z" transform="translate(-2026.798 -612.701)"/><rect class="b" width="17.883" height="182.569" transform="translate(762.499 2.632)"/><path class="b" d="M2770.527,724.631v-18.21h44.361v89.7q-29.267,6.332-52.258,6.332-35.073,0-48.661-22.952t-13.586-70.835q0-47.879,13.586-70.971,13.588-23.075,48.194-23.081a202.281,202.281,0,0,1,44.829,5.271l7.9,1.582-.7,16.888q-28.794-5.544-49.931-5.539-26.711,0-36,17.545t-9.292,58.3q0,40.76,9.292,58.3,9.282,17.558,35.768,17.545a156.048,156.048,0,0,0,33.214-3.685v-56.2Z" transform="translate(-1887.259 -614.616)"/><rect class="b" width="17.883" height="182.569" transform="translate(962.701 2.632)"/><path class="b" d="M2758.1,633.542V615.333h116.135v18.209h-49.009V797.9h-17.649V633.542Z" transform="translate(-1754.995 -612.701)"/><path class="b" d="M2792.678,797.9l44.134-182.568h39.018L2919.959,797.9H2902.31L2890.7,750.943h-68.748L2810.334,797.9Zm57.6-165.155-24.386,99.99h60.853l-24.384-99.99Z" transform="translate(-1675.766 -612.701)"/><path class="b" d="M2927.532,797.9h-88.494V615.333h17.884V779.7h70.61Z" transform="translate(-1569.531 -612.701)"/></g><g class="n" transform="matrix(1, 0, 0, 1, -2332.15, 2212.2)"><path class="b" d="M5.846,0H34.262V-7.4H14.134V-50.69H5.846ZM36.63,0h8.288l2.738-10.8H67.044L69.708,0H78.07L65.564-50.69h-16.5ZM49.284-18.13l6.216-25.6h3.7l6.216,25.6ZM119.732.814a131.283,131.283,0,0,0,16.946-1.7V-26.64h-14.43v7.326h6.216V-7.03a74.153,74.153,0,0,1-7.992.592c-10.286,0-12.432-5.106-12.432-18.87,0-14.282,2.59-18.87,12.654-18.87a137.609,137.609,0,0,1,15.688,1.258l.3-6.586a93.7,93.7,0,0,0-17.242-2c-15.1,0-19.98,8.436-19.98,26.2C99.456-8.51,103.6.814,119.732.814ZM146.964,0h31.968V-7.252h-23.68v-14.8h19.24v-7.1h-19.24V-43.438h23.68V-50.69H146.964Zm55.2.814c9.99,0,16.946-4.81,16.946-15.91,0-8.658-3.848-11.47-14.43-14.43-8.658-2.442-11.322-3.478-11.322-8.14,0-4.366,3.108-6.66,9.324-6.66,3.108,0,10.212.74,14.652,1.258L218-49.8a108.764,108.764,0,0,0-16.058-1.776c-10.138,0-16.872,4.292-16.872,14.5,0,8.732,4.662,12.062,15.688,14.874,7.77,1.924,10.064,3.4,10.064,7.622,0,5.254-2.96,8.066-9.176,8.066-3.848,0-10.878-.74-15.244-1.258l-.814,6.586A106.911,106.911,0,0,0,202.168.814ZM237.54,0h8.288V-43.29H260.11v-7.4h-37v7.4h14.43Zm29.378,0h8.288V-50.69h-8.288Zm29.526-56.166,17.982-6.142-2.59-7.178L294.3-61.864ZM305.25.814c15.836,0,20.572-8.658,20.572-25.9,0-17.02-4.736-26.418-20.572-26.418S284.6-42.032,284.6-25.086C284.6-7.992,289.34.814,305.25.814Zm0-7.252c-9.842,0-12.062-5.994-12.062-18.648,0-12.58,2.294-19.166,12.062-19.166,9.694,0,11.988,6.66,11.988,19.166C317.238-12.284,315.018-6.438,305.25-6.438ZM335.368,0h8.288V-43.438h1.036L360.306,0H374.44V-50.69h-8.288V-7.252h-1.036L349.8-50.69h-14.43Zm67.044,0h17.464c16.8,0,20.35-10.064,20.35-26.2,0-15.836-3.922-24.494-20.35-24.494H402.412ZM410.7-7.252V-43.438h9.176c10.212,0,11.84,6.142,11.84,17.242s-1.628,18.944-11.84,18.944ZM449.846,0h31.968V-7.252h-23.68v-14.8h19.24v-7.1h-19.24V-43.438h23.68V-50.69H449.846Zm57.2,0h28.416V-7.4H515.336V-50.69h-8.288Zm30.784,0h8.288l2.738-10.8h19.388L570.91,0h8.362L566.766-50.69h-16.5Zm12.654-18.13,6.216-25.6h3.7l6.216,25.6ZM619.824.814a80.083,80.083,0,0,0,14.43-1.628L634.032-7.7a98.21,98.21,0,0,1-12.876,1.11c-9.916,0-11.766-4.81-11.766-18.722,0-14.356,2.22-18.87,11.544-18.87a93.547,93.547,0,0,1,13.1,1.258l.3-6.734a71,71,0,0,0-14.5-1.85c-15.17,0-19.018,7.844-19.018,26.2C600.806-7.992,604.358.814,619.824.814ZM643.06,0h8.288V-50.69H643.06ZM681.1.814c12.21,0,18.722-4.958,18.722-17.168V-50.69H691.53v34.484c0,6.808-3.626,9.768-10.434,9.768-6.66,0-10.286-2.96-10.286-9.768V-50.69h-8.288v34.336C662.522-4.144,669.034.814,681.1.814ZM711.066,0H728.53c16.8,0,20.35-10.064,20.35-26.2,0-15.836-3.922-24.494-20.35-24.494H711.066Zm8.288-7.252V-43.438h9.176c10.212,0,11.84,6.142,11.84,17.242S738.742-7.252,728.53-7.252ZM753.246,0h8.288l2.738-10.8H783.66L786.324,0h8.362L782.18-50.69h-16.5ZM765.9-18.13l6.216-25.6h3.7l6.216,25.6ZM801.938,0H819.4c16.8,0,20.35-10.064,20.35-26.2,0-15.836-3.922-24.494-20.35-24.494H801.938Zm8.288-7.252V-43.438H819.4c10.212,0,11.84,6.142,11.84,17.242S829.614-7.252,819.4-7.252ZM865.652,0H897.62V-7.252H873.94v-14.8h19.24v-7.1H873.94V-43.438h23.68V-50.69H865.652Zm40.922,0h8.288V-43.438H915.9L931.512,0h14.134V-50.69h-8.288V-7.252h-1.036L921-50.69h-14.43Zm76.59,0h8.288V-43.29h14.282v-7.4h-37v7.4h14.43Zm47.508.814c12.21,0,18.722-4.958,18.722-17.168V-50.69h-8.288v34.484c0,6.808-3.626,9.768-10.434,9.768-6.66,0-10.286-2.96-10.286-9.768V-50.69H1012.1v34.336C1012.1-4.144,1018.61.814,1030.672.814Zm44.326,0c9.99,0,16.946-4.81,16.946-15.91,0-8.658-3.848-11.47-14.43-14.43-8.658-2.442-11.322-3.478-11.322-8.14,0-4.366,3.108-6.66,9.324-6.66,3.108,0,10.212.74,14.652,1.258l.666-6.734a108.764,108.764,0,0,0-16.058-1.776c-10.138,0-16.872,4.292-16.872,14.5,0,8.732,4.662,12.062,15.688,14.874,7.77,1.924,10.064,3.4,10.064,7.622,0,5.254-2.96,8.066-9.176,8.066-3.848,0-10.878-.74-15.244-1.258l-.814,6.586A106.911,106.911,0,0,0,1075,.814ZM1117.1,0h8.288V-41.514h1.11l11.914,39.442H1147l11.988-39.442h1.11V0h8.288V-50.69h-14.43l-11.248,39.516L1131.46-50.69H1117.1Zm58.534,0h8.288l2.738-10.8h19.388L1208.716,0h8.362l-12.506-50.69h-16.5Zm12.654-18.13,6.216-25.6h3.7l6.216,25.6ZM1224.33,0h8.288V-43.438h1.036L1249.268,0H1263.4V-50.69h-8.288V-7.252h-1.036L1238.76-50.69h-14.43Zm69.19.814c15.836,0,20.572-8.658,20.572-25.9,0-17.02-4.736-26.418-20.572-26.418s-20.646,9.472-20.646,26.418C1272.874-7.992,1277.61.814,1293.52.814Zm0-7.252c-9.842,0-12.062-5.994-12.062-18.648,0-12.58,2.294-19.166,12.062-19.166,9.694,0,11.988,6.66,11.988,19.166C1305.508-12.284,1303.288-6.438,1293.52-6.438ZM1337.994.814c9.99,0,16.946-4.81,16.946-15.91,0-8.658-3.848-11.47-14.43-14.43-8.658-2.442-11.322-3.478-11.322-8.14,0-4.366,3.108-6.66,9.324-6.66,3.108,0,10.212.74,14.652,1.258l.666-6.734a108.764,108.764,0,0,0-16.058-1.776c-10.138,0-16.872,4.292-16.872,14.5,0,8.732,4.662,12.062,15.688,14.874,7.77,1.924,10.064,3.4,10.064,7.622,0,5.254-2.96,8.066-9.176,8.066-3.848,0-10.878-.74-15.244-1.258l-.814,6.586A106.911,106.911,0,0,0,1337.994.814Z" transform="translate(24.15 314)"/></g><g class="a" transform="translate(-2308 2234.704)"><g class="m" transform="matrix(1, 0, 0, 1, -24.15, -22.5)"><path class="b" d="M2453.342,804.043V614.891h57.549l29.384,137.972,29.391-137.972h57.542V804.043h-33.79V657.732h-3.674L2557.172,795.7h-33.8l-32.564-137.966h-3.674V804.043Z" transform="translate(-2429.19 -591.38)"/></g><g class="l" transform="matrix(1, 0, 0, 1, -24.15, -22.5)"><path class="b" d="M2550.52,740.906q0,33.1,29.635,33.1t29.631-33.1V614.891h33.79V740.066q0,34.78-15.79,51.043t-47.631,16.272q-31.838,0-47.629-16.272t-15.8-51.043V614.891h33.79Z" transform="translate(-2283.94 -591.38)"/></g><g class="k" transform="matrix(1, 0, 0, 1, -24.15, -22.5)"><path class="b" d="M2565.833,804.043V614.891h57.057l40.159,155.777h2.448V614.891h33.8V804.043H2643.7l-41.622-155.769h-2.45V804.043Z" transform="translate(-2171.42 -591.38)"/></g><g class="j" transform="matrix(1, 0, 0, 1, -24.15, -22.5)"><rect class="b" width="33.796" height="189.152" transform="translate(564.11 23.51)"/></g><g class="i" transform="matrix(1, 0, 0, 1, -24.15, -22.5)"><path class="b" d="M2696.851,797.9h-57.364V615.333h57.364q39.251,0,52.035,35.355,7.43,20.322,7.428,53.29,0,68.868-30.2,86.8Q2714.038,797.9,2696.851,797.9Zm41.114-93.923q0-52.488-20.674-65.425-8.36-5.275-20.439-5.278h-39.482V779.959h39.482Q2737.967,779.959,2737.964,703.978Z" transform="translate(-2002.64 -590.2)"/></g><g class="h" transform="matrix(1, 0, 0, 1, -24.15, -22.5)"><rect class="b" width="17.883" height="182.569" transform="translate(786.65 25.13)"/></g><g class="g" transform="matrix(1, 0, 0, 1, -24.15, -22.5)"><path class="b" d="M2770.527,724.631v-18.21h44.361v89.7q-29.267,6.332-52.258,6.332-35.073,0-48.661-22.952t-13.586-70.835q0-47.879,13.586-70.971,13.588-23.075,48.194-23.081a202.281,202.281,0,0,1,44.829,5.271l7.9,1.582-.7,16.888q-28.794-5.544-49.931-5.539-26.711,0-36,17.545t-9.292,58.3q0,40.76,9.292,58.3,9.282,17.558,35.768,17.545a156.048,156.048,0,0,0,33.214-3.685v-56.2Z" transform="translate(-1863.1 -592.12)"/></g><g class="f" transform="matrix(1, 0, 0, 1, -24.15, -22.5)"><rect class="b" width="17.883" height="182.569" transform="translate(986.85 25.13)"/></g><g class="e" transform="matrix(1, 0, 0, 1, -24.15, -22.5)"><path class="b" d="M2758.1,633.542V615.333h116.135v18.209h-49.009V797.9h-17.649V633.542Z" transform="translate(-1730.84 -590.2)"/></g><g class="d" transform="matrix(1, 0, 0, 1, -24.15, -22.5)"><path class="b" d="M2792.678,797.9l44.134-182.568h39.018L2919.959,797.9H2902.31L2890.7,750.943h-68.748L2810.334,797.9Zm57.6-165.155-24.386,99.99h60.853l-24.384-99.99Z" transform="translate(-1651.61 -590.2)"/></g><g class="c" transform="matrix(1, 0, 0, 1, -24.15, -22.5)"><path class="b" d="M2927.532,797.9h-88.494V615.333h17.884V779.7h70.61Z" transform="translate(-1545.38 -590.2)"/></g></g></g></svg>
                        <!-- <img src="<?php echo $root_link?>/assets/images/nuevotitulo-munidigital.svg" class="w-100" alt=""> -->
                        <!-- <img src="<?php echo $root_link?>/assets/images/tituloCarousel-unido.svg" class="w-100" alt=""> -->
                    </div>
                    <div class="col-12 col-lg-5 m-auto"> 
                        <div class="bg_acceso_clientes_form">
                            <h3 class="text_green fw-bold mb-3 text-uppercase">Iniciar Sesi??n</h3>
                            <form action="" class="row" id="formulario-soluciones">
                                <div class="col-lg-12 mb-2 mb-lg-3">
                                    <input type="text" placeholder="Nombre" class="w-100" id="nombre" name="nombre" required>
                                </div>
                                <div class="col-lg-12 mb-2 mb-lg-3">
                                    <input type="password" placeholder="Contrase??a" class="w-100" id="password" name="password" required>
                                </div>
                                <div class="col-lg-6 mb-2 mb-lg-3 ">
                                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start">
                                        <input type="checkbox" placeholder="Contrase??a" id="showpass" name="showpass">
                                        <label class="d-inline-block ms-2" for="showpass">Mostrar Contrase??a</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2 mb-lg-3 text-center text-lg-end">
                                    <a href="#" class="text_green disable_link">??Olvidaste tu contrase??a?</a>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <input type="submit" value="Entrar" class="btn btn_orange text-white py-1 px-4 text-uppercase">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <section class="my-5" >
            <div class="container ">
                <h3 class="text_green text-uppercase mb-4 text-center text-titulo-grande"> <b> ??Todav??a no eres cliente?</b></h3>
                <div class="row">
                    <div class="col-lg-10 m-auto bg_gray py-4 rounded">
                        <div class="row">
                            <div class="col-lg-10 m-auto">
                                <p class="text_green text-center text-form-nuevo">Solicita ahora una demo gratuita completando el siguiente formulario.</p>
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
                                        <input type="text" placeholder="Tel??fono*" class="w-100" id="telefono" name="telefono">
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

       

    </script>
</body>
</html>