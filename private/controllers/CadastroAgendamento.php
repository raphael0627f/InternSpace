<?php

class CadastroAgendamento extends Controller{
    function index(){

        if(!Auth::loggedin()){
            $this->redirect('login');
        }
        $errors = [];
        if(count($_POST)>0){
            $agendamento = new Agendamento();
            if($agendamento->validate($_POST)){
                $agendamento->insert(TB_AGENDAMENTOS, $_POST);
                $this->redirect('painel');
            }else{
                $errors = $agendamento->errors;
            }
        }
        
        $this->view('cadastroAgendamento',['errors'=>$errors]);    
    }
}


?>