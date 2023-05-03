<?php

class Painel extends Controller{
    function index(){

        if(!Auth::loggedin()){
            $this->redirect('login');
        }

        if(Auth::getcargo() == "Administrador"){
            $this->redirect('painelAdm');
        }

        $this->view('painel');
    }
}

?>