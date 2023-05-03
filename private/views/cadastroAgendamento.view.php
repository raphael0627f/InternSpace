<!DOCTYPE html>
<html lang="pt-br">

<?php $this->view('includes/header'); ?>
<link rel="stylesheet" href="../public/assets/css/agendamento.css">
<script src="../public/assets/js/agendamento.js" defer></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

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
                        <li class="breadcrumb-item active">Cadastro Usuário</li>
                    </ol>
                    <div class="col-xl-6">
                        <div class="card mb-4">
                            <div class="wrapper">
                                <header>
                                    <p class="current-date"></p>
                                    <div class="icons">
                                        <span id="prev" class="material-symbols-rounded">chevron_left</span>
                                        <span id="next" class="material-symbols-rounded">chevron_right</span>
                                    </div>
                                </header>
                                <div class="calendar">
                                    <ul class="weeks">
                                        <li>D</li>
                                        <li>S</li>
                                        <li>T</li>
                                        <li>Q</li>
                                        <li>Q</li>
                                        <li>S</li>
                                        <li>S</li>
                                    </ul>
                                    <ul class="days"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>