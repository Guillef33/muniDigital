<?php

class EnlaceController
{

    public function template()
    {
        require_once("views/modules/template/template.views.php");
    }

    public function getPage()
    {
        // //Vistas de admin
         $admin = ["iniciar-sesion"];

        //Vistas de client
        $client = ["acceso-clientes", "campanas", "casos-de-exito", "demo-gratuita", "nosotros", "contacto", "novedad-01","novedad-02","novedad-03","novedad-04","novedad-05","novedad-06", "novedades", "soluciones"];

        $allowedPages = ["admin" => $admin, "client" => $client];

        if (isset($_GET["action"])) {
            //Ingreso a una pagina permitida
            if (in_array($_GET["action"], $allowedPages["admin"])) {
                $page = "views/modules/admin/" . $_GET["action"] . ".views.php";
            } elseif (in_array($_GET["action"], $allowedPages["client"])) {
                $page = "views/modules/client/" . $_GET["action"] . ".views.php";
            } else {
                $page = "views/modules/error/error404.views.php";
            }
        }
        //Pagina por defecto | HOME
        else {
            $page = "views/modules/client/index.views.php";
        }
        require_once($page);
    }
}
