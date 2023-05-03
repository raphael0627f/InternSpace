<?php $this->view('includes/header'); ?>
<link rel="stylesheet" type="text/css" href="../public/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="../public/assets/css/login.css">
<title>Login</title>

<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <?php if (count($errors) > 0) : ?>
                                        <div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
                                            <strong>Errors:</strong>
                                            <?php foreach ($errors as $error) : ?>
                                                <br><?= $error ?>
                                            <?php endforeach; ?>
                                            <span type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </span>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <form action="" method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email" name="email" id="input-email" value="<?= get_var('email') ?>" placeholder="name@example.com" required/>
                                            <label for="inputEmail">Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" name="senha" type="password" id="input-email" value="<?= get_var('senha') ?>" placeholder="senha" required />
                                            <label for="inputPassword">Senha</label>
                                        </div>
                                        <div class="form-check mb-3">
                                           
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            
                                            <button class="btn btn-primary" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="register.html"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
</body>

<?php $this->view('includes/footer'); ?>