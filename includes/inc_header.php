<header class="d-none d-lg-inline">
    <nav class="navbar navbar-expand-lg navbar-light py-4">
        <div class="container">
            <a class="navbar-brand" href="<?php echo $root_link?>">
                <img src="<?php echo $root_link?>/assets/images/logo-header.svg" style="width: 200px;" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </button>
            <!-- Esto viene de programa Fe -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                    <!-- //////////// -->
                    <li class="nav-item dropdown me-lg-4">
                        <a class="nav-link disable_link text-uppercase text_green <?php echo ($current_page == 'programa-fe' || $current_page == 'como-donar' || $current_page == 'ganamos-todos' || $current_page == 'responsabilidad-empresarial') ? 'font-weight-bold':NULL ?>" id="navbarDropdown" role="button" aria-haspopup="true" href="<?php echo $root_link; ?>/nosotros.php">Nosotros</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text_green <?php echo $current_page == 'programa-fe' ? 'font-weight-bold':NULL ?>" href="<?php echo $root_link; ?>/nosotros.php?s=sobre-nosotros">Sobre Nosotros</a>
                            <a class="dropdown-item text_green <?php echo $current_page == 'como-donar' ? 'font-weight-bold':NULL ?>" href="<?php echo $root_link; ?>/nosotros.php?s=nuestro-staff">Nuestro Staff</a>
                            <a class="dropdown-item text_green <?php echo $current_page == 'ganamos-todos' ? 'font-weight-bold':NULL ?>" href="<?php echo $root_link; ?>/nosotros.php?s=reconocimientos">Reconocimientos</a>
                            <a class="dropdown-item text_green <?php echo $current_page == 'responsabilidad-empresarial' ? 'font-weight-bold':NULL ?>" href="<?php echo $root_link; ?>/nosotros.php?s=socios-y-aliados">Socios y Aliados</a>
                            <a class="dropdown-item text_green <?php echo $current_page == 'responsabilidad-empresarial' ? 'font-weight-bold':NULL ?>" href="<?php echo $root_link; ?>/nosotros.php?s=rrhh">R.R.H.H.</a>
                        </div>
                    </li>
                    <!-- //////////// -->
                    <li class="nav-item dropdown me-lg-4">
                        <a class="nav-link disable_link text-uppercase text_green <?php echo ($current_page == 'programa-fe' || $current_page == 'como-donar' || $current_page == 'ganamos-todos' || $current_page == 'responsabilidad-empresarial') ? 'font-weight-bold':NULL ?>" id="navbarDropdown" role="button" aria-haspopup="true" href="<?php echo $root_link; ?>/soluciones.php">Soluciones</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text_green <?php echo $current_page == 'programa-fe' ? 'font-weight-bold':NULL ?>" href="<?php echo $root_link; ?>/soluciones.php?s=nuestras-soluciones">Nuestras Soluciones</a>
                            <a class="dropdown-item text_green <?php echo $current_page == 'como-donar' ? 'font-weight-bold':NULL ?>" href="<?php echo $root_link; ?>/soluciones.php?s=resultados">Resultados</a>
                        </div>
                    </li>
                    <!-- //////////// -->
                    <li class="nav-item dropdown me-lg-4">
                        <a class="nav-link disable_link text-uppercase text_green <?php echo ($current_page == 'programa-fe' || $current_page == 'como-donar' || $current_page == 'ganamos-todos' || $current_page == 'responsabilidad-empresarial') ? 'font-weight-bold':NULL ?>" id="navbarDropdown" role="button" aria-haspopup="true" href="<?php echo $root_link; ?>/casos-de-exito.php">Casos de Éxito</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text_green <?php echo $current_page == 'como-donar' ? 'font-weight-bold':NULL ?>" href="<?php echo $root_link; ?>/casos-de-exito.php?s=paises">Países</a>
                            <a class="dropdown-item text_green <?php echo $current_page == 'programa-fe' ? 'font-weight-bold':NULL ?>" href="<?php echo $root_link; ?>/casos-de-exito.php?s=experiencias-muni">Experiencias Muni</a>
                        </div>
                    </li>
                    <!-- //////////// -->
                    <li class="nav-item dropdown me-lg-4">
                        <a class="nav-link disable_link text-uppercase text_green <?php echo ($current_page == 'programa-fe' || $current_page == 'como-donar' || $current_page == 'ganamos-todos' || $current_page == 'responsabilidad-empresarial') ? 'font-weight-bold':NULL ?>" id="navbarDropdown" role="button" aria-haspopup="true" href="<?php echo $root_link; ?>/campanas.php">Campañas</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text_green <?php echo $current_page == 'programa-fe' ? 'font-weight-bold':NULL ?>" href="<?php echo $root_link; ?>/campanas.php?s=campana-100">100 <i class="fas fa-tree"></i></a>
                        </div>
                    </li>
                    <!-- //////////// -->
                    <li class="nav-item dropdown me-lg-4">
                        <a class="nav-link disable_link text-uppercase text_green <?php echo ($current_page == 'programa-fe' || $current_page == 'como-donar' || $current_page == 'ganamos-todos' || $current_page == 'responsabilidad-empresarial') ? 'font-weight-bold':NULL ?>" id="navbarDropdown" role="button" aria-haspopup="true" href="<?php echo $root_link; ?>/novedades.php">Novedades</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text_green <?php echo $current_page == 'programa-fe' ? 'font-weight-bold':NULL ?>" href="<?php echo $root_link; ?>/novedades.php?s=ultimas-novedades">Últimas Novedades</a>
                            <a class="dropdown-item text_green <?php echo $current_page == 'como-donar' ? 'font-weight-bold':NULL ?>" href="<?php echo $root_link; ?>/novedades.php?s=agenda">Agenda</a>
                            <a class="dropdown-item text_green <?php echo $current_page == 'como-donar' ? 'font-weight-bold':NULL ?>" href="<?php echo $root_link; ?>/novedades.php?s=prensa">Prensa</a>
                        </div>
                    </li>
                    <!-- //////////// -->
                    <li><a href="<?php echo $root_link?>/demo-gratuita.php" class="disable_link text-uppercase text-white btn_orange">Demo Gratuita</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>


<header class="d-inline d-lg-none">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 pb-md-4 pt-md-4">
        <div class="container">
            <a class="navbar-brand" href="<?php echo $root_link?>">
                <img src="<?php echo $root_link?>/assets/images/logo-header.svg" style="width: 200px;" alt="">
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
                        <div  id="collapseTwo" class="collapse">
                            <a class="d-block dropdown-item text_green fw-light" href="<?php echo $root_link; ?>/soluciones.php?s=nuestras-soluciones">Nuestras Soluciones</a>
                            <a class="d-block dropdown-item text_green fw-light" href="<?php echo $root_link; ?>/soluciones.php?s=resultados">Resultados</a>
                        </div>
                    </li>
                    
                    <li class="mb-3">
                        <button class="navbar-toggler nav-link text_green fw-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-controls="collapseThree" aria-expanded="false" aria-label="Toggle navigation">Casos de Éxito<i class="fas fa-caret-down ms-2"></i></button>
                        <div  id="collapseThree" class="collapse">
                            <a class="dropdown-item text_green fw-light" href="<?php echo $root_link; ?>/casos-de-exito.php?s=paises">Países</a>
                            <a class="dropdown-item text_green fw-light" href="<?php echo $root_link; ?>/casos-de-exito.php?s=experiencias-muni">Experiencias Muni</a>
                        </div>
                    </li>


                    <li class="mb-3">
                        <button class="navbar-toggler nav-link text_green fw-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-controls="collapseFour" aria-expanded="false" aria-label="Toggle navigation">Campañas<i class="fas fa-caret-down ms-2"></i></button>
                        <div  id="collapseFour" class="collapse">
                            <a class="dropdown-item text_green fw-light" href="<?php echo $root_link; ?>/campanas.php?s=campana-100">100 <i class="fas fa-tree"></i></a>
                            <a class="dropdown-item text_green fw-light" href="<?php echo $root_link; ?>/campanas.php?s=otras-campanas">Otras Campañas</a>
                        </div>
                    </li>


                    <li class="mb-3">
                    <button class="navbar-toggler nav-link text_green fw-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-controls="collapseFive" aria-expanded="false" aria-label="Toggle navigation">Novedades<i class="fas fa-caret-down ms-2"></i></button>
                        <div  id="collapseFive" class="collapse">
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

