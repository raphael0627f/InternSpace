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
        <div></div>
        <div class="container-fluid px-4">
          <h1 class="mt-4">Cadastro Usuário</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="painelAdm">Dashboard</a></li>
            <li class="breadcrumb-item active">Cadastro Usuário</li>
          </ol>
          <div class="card mb-4">
            <div class="card-body">
              <form method="POST">
                <div class="row">
                  <div class="form-group col-md-12">
                    <label>Nome</label>
                    <input type="text" class="form-control" value="<?= get_var('nome') ?>" name="nome" placeholder="Nome">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>E-mail</label>
                    <input type="email" value="<?= get_var('email') ?>" name="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group col-md-3">
                    <label>Senha</label>
                    <input type="password" value="<?= get_var('senha') ?>" name="senha" class="form-control" placeholder="Senha">
                  </div>
                  <div class="form-group col-md-3">
                    <label>Confirmar Senha</label>
                    <input type="password" value="<?= get_var('senha2') ?>" name="senha2" class="form-control" placeholder="Senha">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-3">
                    <label>Data de Nascimento</label>
                    <input type="date" class="form-control" value="<?= get_var('dataNascimento') ?>" name="dataNascimento" placeholder="Data de Nascimento">
                  </div>
                  <div class="form-group col-md-3">
                    <label>Gênero</label>
                    <select name="genero" class="form-control">
                      <option <?= get_select('genero', '') ?> value='' selected>Selecione..</option>
                      <option <?= get_select('genero', 'Masculino') ?> value='Masculino'>Masculino</option>
                      <option <?= get_select('genero', 'Feminino') ?> value='Feminino'>Feminino</option>
                      <option <?= get_select('genero', 'Não Informar') ?> value='Não Informar'>Não Informar</option>
                      <option <?= get_select('genero', 'Outros') ?> value='Outros'>Outros</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <label>Telefone</label>
                    <input type="text" class="form-control" value="<?= get_var('telefone') ?>" name="telefone" placeholder="Telefone">
                  </div>
                  <div class="form-group col-md-3">
                    <label>Cargo</label>
                    <select name="cargo" class="form-control">
                      <option <?= get_select('genero', '') ?> value='' selected>Selecione..</option>
                      <option <?= get_select('cargo', 'Masculino') ?> value='Administrador'>Administrador</option>
                      <option <?= get_select('cargo', 'Feminino') ?> value='Aluno'>Aluno</option>
                      <option <?= get_select('cargo', 'Não Informar') ?> value='Professor'>Professor</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-3">
                    <label>CPF</label>
                    <input type="text" class="form-control" value="<?= get_var('cpf') ?>" name="cpf" id="cpf" placeholder="CPF">
                  </div>
                  <div class="form-group col-md-3">
                    <label>RG</label>
                    <input type="text" class="form-control" value="<?= get_var('documento') ?>" name="documento" placeholder="Documento">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-2">
                    <label>CEP</label>
                    <input type="text" class="form-control" value="<?= get_var('cep') ?>" name="cep">
                  </div>
                  <div class="form-group col-md-10">
                    <div class="form-group col-md-10">
                      <label for="logradouro">Logradouro</label>
                      <input type="text" class="form-control" value="<?= get_var('logradouro') ?>" name="logradouro" id="logradouro">
                    </div>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="numero">Número</label>
                    <input type="text" class="form-control" value="<?= get_var('numero') ?>" name="numero" id="numero">
                  </div>
                  <div class="form-group col-md-7">
                    <label for="complemento">Complemento</label>
                    <input type="text" class="form-control" value="<?= get_var('complemento') ?>" name="complemento" id="complemento">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" value="<?= get_var('bairro') ?>" name="bairro" id="bairro">
                    <div class="form-group col-md-7">
                      <label for="cidade">Cidade</label>
                      <input type="text" class="form-control" value="<?= get_var('cidade') ?>" name="cidade" id="cidade">
                    </div>
                  </div>
                  

                  
                  <div class="row">
                    <!-- UF -->
                    <div class="form-group col-md-3">
                      <label>UF</label>
                      <select name="uf" class="form-control">
                        <option <?= get_select('uf', '') ?> value="">Selecione</option>
                        <option <?= get_select('uf', 'AC') ?>value="AC">Acre</option>
                        <option <?= get_select('uf', 'AL') ?>value="AL">Alagoas</option>
                        <option <?= get_select('uf', 'AP') ?>value="AP">Amapá</option>
                        <option <?= get_select('uf', 'AM') ?>value="AM">Amazonas</option>
                        <option <?= get_select('uf', 'BA') ?>value="BA">Bahia</option>
                        <option <?= get_select('uf', 'CE') ?>value="CE">Ceará</option>
                        <option <?= get_select('uf', 'DF') ?>value="DF">Distrito Federal</option>
                        <option <?= get_select('uf', 'ES') ?>value="ES">Espirito Santo</option>
                        <option <?= get_select('uf', 'GO') ?>value="GO">Goiás</option>
                        <option <?= get_select('uf', 'MA') ?>value="MA">Maranhão</option>
                        <option <?= get_select('uf', 'MS') ?>value="MS">Mato Grosso do Sul</option>
                        <option <?= get_select('uf', 'MT') ?>value="MT">Mato Grosso</option>
                        <option <?= get_select('uf', 'MG') ?>value="MG">Minas Gerais</option>
                        <option <?= get_select('uf', 'PA') ?>value="PA">Pará</option>
                        <option <?= get_select('uf', 'PB') ?>value="PB">Paraíba</option>
                        <option <?= get_select('uf', 'PR') ?>value="PR">Paraná</option>
                        <option <?= get_select('uf', 'PE') ?>value="PE">Pernambuco</option>
                        <option <?= get_select('uf', 'PI') ?>value="PI">Piauí</option>
                        <option <?= get_select('uf', 'RJ') ?>value="RJ">Rio de Janeiro</option>
                        <option <?= get_select('uf', 'RN') ?>value="RN">Rio Grande do Norte</option>
                        <option <?= get_select('uf', 'RS') ?>value="RS">Rio Grande do Sul</option>
                        <option <?= get_select('uf', 'RO') ?>value="RO">Rondônia</option>
                        <option <?= get_select('uf', 'RR') ?>value="RR">Roraima</option>
                        <option <?= get_select('uf', 'SC') ?>value="SC">Santa Catarina</option>
                        <option <?= get_select('uf', 'SP') ?>value="SP">São Paulo</option>
                        <option <?= get_select('uf', 'SE') ?>value="SE">Sergipe</option>
                        <option <?= get_select('uf', 'TO') ?>value="TO">Tocantins</option>
                      </select>
                    </div>
                  </div>
                  <br>
                  <!-- Botões -->
                  <div class="container-btn">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <button type="button" class="btn btn-secondary ">Cancelar</button>
                  </div>
              </section>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="../public/assets/js/mascara.js"></script>
</body>

</html>