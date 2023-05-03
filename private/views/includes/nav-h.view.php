<?php $this->view('includes/header'); ?>
<link rel="stylesheet" type="text/css" href="../public/assets/css/landing_page.css">
<title>Bem-vindo ao InternSpace!</title>
<body>
    <!-- Navbar -->
    <nav class="nav-transparente">
        <!-- Lado esquerdo -->
        <div class="lado-esquerdo"></div>
        <!-- Lado direito -->
        <div class="lado-direito">
            <a href="login" class="btn-primario" id="btn-login">Login</a>
        </div>
    </nav>
    <main>
        <!-- Container da introdução -->
        <div class="introducao">
            <!-- Logo -->
            <img id="logo-introducao" src="../public/assets/img/Logo_Light.png">
            <!-- Texto -->
            <span id="texto-introducao">
                <strong>
                    Otimize a gestão dos estágios na sua empresa com o nosso sistema! Acompanhe o desempenho dos
                    estagiários, gerencie documentos e informações de forma segura e eficiente, tudo em um só lugar.
                </strong>
            </span>
            <!-- Botão de cadastro -->
            <!-- <a id="btn-cadastro" class="btn-primario" href="cadastroAluno">Cadastre-se</a> -->
        </div>
    </main>

</body>

<?php $this->view('includes/footer'); ?>