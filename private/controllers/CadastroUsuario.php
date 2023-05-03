<?php

class CadastroUsuario extends Controller{
    function index(){

        if(!Auth::loggedin()){
            $this->redirect('login');
        }

        $errors = [];
        if(count($_POST)>0){
            $usuario = new Usuario();
            if($usuario->validate($_POST)){
                $usuario->insert(TB_USUARIOS, $_POST);
                $this->redirect('painel');
            }else{
                $errors = $usuario->errors;
            }
        }

        $this->view('cadastroUsuario', ['errors'=>$errors]);
    }
}

?>