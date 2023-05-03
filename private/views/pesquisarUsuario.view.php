<!DOCTYPE html>
<html lang="pt-br">

<?php $this->view('includes/header'); ?>

<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="../public/assets/js/datatables-simple-demo.js"></script>

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
                    <h1 class="mt-4">Pesquisar Aluno</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="painelAdm">Dashboard</a></li>
                        <li class="breadcrumb-item active">Pesquisar Usuário</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nome</th>
                                        <th>Cpf</th>
                                        <th>Data de nascimento</th>
                                        <th>Cidade </th>
                                        <th>Cargo</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nome</th>
                                        <th>Cpf</th>
                                        <th>Data de nascimento</th>
                                        <th>Cidade </th>
                                        <th>Cargo</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    foreach ($row as $registro) { ?>
                                        <tr>
                                            <td><?= $registro->id ?></td>
                                            <td><?= $registro->nome ?></td>
                                            <td><?= $registro->cpf ?></td>
                                            <td><?= $registro->dataNascimento ?></td>
                                            <td><?= $registro->cidade ?></td>
                                            <td><?= $registro->cargo ?></td>
                                            <td><button>Editar</button><button>Excluir</button></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>