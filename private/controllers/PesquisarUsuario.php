<?php

class PesquisarUsuario extends Controller{
    function index(){

        if(!Auth::loggedin()){
            $this->redirect('login');
        }

        $usuario = new Usuario();
        $row = $usuario->where(TB_USUARIOS, "cargo", "Aluno");

        $this->view('pesquisarUsuario',['row' => $row]);
    }
}

?>