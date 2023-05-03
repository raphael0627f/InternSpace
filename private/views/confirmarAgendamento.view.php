<?php $this->view('includes/header'); ?>
<?php $this->view('includes/bootstrap'); ?>
<link rel="stylesheet" href="../public/assets/css/confirmarAgendamento.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

<body>
    <?php $this->sidebar(); ?>
    <main>
        <div class="container-tb">
            <div class="pesquisa">
                <input type="search" class="form-control" id="pesquisa" placeholder="Pesquisar">
                <button type="button" class="btn btn-primary"><i class='bx bx-search'></i></button>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Aluno</th>
                        <th scope="col">Data</th>
                        <th scope="col">Periodo</th>
                        <th scope="col">Hotel</th>
                        <th scope="col">Setor</th>
                        <th scope="col">Ações</th>
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
                                <td>
                                    <div>
                                        <i class='bx bx-check bx-md' style='color:#0d6efd;cursor: pointer;'></i>
                                        <i class='bx bx-x bx-md' style='color:#e60808; cursor: pointer;' f></i>
                                    </div>
                                </td>
                            </tr>
                        <?php  } ?>
                </tbody>
            <?php } else { ?>
                <tfoot>
                    <tr>
                        <td colspan="7" style="text-align: center;">Nenhum agendamento para Confirmar ou Recusar</td>
                    </tr>
                </tfoot>
            <?php } ?>
            </table>
        </div>

    </main>