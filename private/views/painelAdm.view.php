<!DOCTYPE html>
<html lang="pt-br">
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
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
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Horas/Cargo
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-pie me-1"></i>
                                    grafico de pizza
                                </div>
                                <div class="card-body"><canvas id="myPieChart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Agendamentos para Confirmar
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Data</th>
                                        <th>Periodo</th>
                                        <th>Hotel</th>
                                        <th>Setor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if ($retorno) {
                                            foreach ($row as $registro) { ?>
                                                <tr>
                                                    <td><?= $registro->id ?></td>
                                                    <td><?= $registro->idAluno ?></td>
                                                    <td><?= $registro->data ?></td>
                                                    <td><?= $registro->periodo ?></td>
                                                    <td><?= $registro->idHotel ?></td>
                                                    <td><?= $registro->idSetor ?></td>
                                                </tr>
                                    <?php } } ?>
                                </tbody>        
                            </table>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../public/assets/js/chart-area-demo.js"></script>
    <script src="../public/assets/js/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="../public/assets/js/datatables-simple-demo.js"></script>
    <script src="../public/assets/js/chart-pie-demo.js"></script>
</body>

</html>