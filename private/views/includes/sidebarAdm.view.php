<div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <a class="nav-link" href="painelAdm">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Agendamentos
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="#">Pesquisar</a>
                                <a class="nav-link" href="#">Aprovar/Reprovar</a>
                                <a class="nav-link" href="cadastroAgendamento">Cadastrar</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Alunos
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="pesquisarUsuario">Pesquisar</a>
                                <a class="nav-link" href="cadastroUsuario">Cadastrar</a>

                                </a>

                            </nav>
                        </div>
                        <div class=""></div>
                        <a class="" href="">
                            <div class=""><i class=""></i></div>

                        </a>
                        <a class="">
                            <div class=""><i class=""></i></div>

                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small"><?= Auth::getnome() ?></div>
                    <?= Auth::getcargo() ?>
                </div>
            </nav>
        </div>