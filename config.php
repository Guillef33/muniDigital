<?php

session_start();
// Constantes de Sistema
// 
//Conexion con Base de datos

//Root Link
$siteTestVersion = "/munidigital";
// $cookieExpirationTime_1mes = time() + (86400 * 30);//un mes
//$actual_link = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
//$root_link = 'https://' . $_SERVER['HTTP_HOST'] . $siteTestVersion;

//Constantes de rutas
define("PROJECT_PATH", "/munidigital");
define("SITE_PATH", $_SERVER['DOCUMENT_ROOT'] . PROJECT_PATH);

    // PHP.INI Viene de ese archivo
    // date.timezone = "America/Argentina/Buenos_Aires"

    // Funciones de Sistema
