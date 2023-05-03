<!DOCTYPE html>
<html lang="pt-br">

<?php $this->view('includes/header'); ?>

<body class="sb-nav-fixed">
    <!---NAV BAR-->
    <?php $this->view('includes/nav'); ?>
    <!---Linha importantante abaixo-->
    <div id="layoutSidenav">
        <!--------------SIDE----------------->
        <?php $this->sidebar(); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="painelAdm">Dashboard</a></li>
                        <li class="breadcrumb-item active">Perfil</li>
                    </ol>

                    <div class="col-xl">

                        <div class="card mb-4">
                            <div class="card-header">

                                <div class="row">
                                    <div class="container container-pfp">
                                        <img class="profile-picture" style="width: 200px; height: 200px;" src="../public/assets/img/fundo_landingpage_borrado.jpg">
                                    </div>

                                    <div class="container col">
                                        <h3 class="text-start font-weight-light mt-4 mb-1"><?= Auth::getnome() ?></h3>
                                        <h6 class="text-start font-weight-light mt-1 mb-4"><?= Auth::getlogradouro()?></h5>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="card-body">
                                asfhkasjghf
                            </div>


                        </div>
                    </div>


                </div>
            </main>
        </div>
    </div>
</body>

</html>