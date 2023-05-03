<?php

class Login extends Controller{
    function index(){
        $errors = [];
        if(Auth::loggedin()){
            if(Auth::getcargo() == "Aluno"){
                $this->redirect('painel');
            }else{
                $this->redirect('painelAdm');
            }
        }

        // a variavel $row é o aluno que foi encontrado no banco com o email
        if(count($_POST)>0){
            $usuario = new Usuario();
            if($row = $usuario->where(TB_USUARIOS,'email',$_POST['email'])){
                $row = $row[0];
                if(password_verify($_POST['senha'],$row->senha)){
                    Auth::authenticate($row);
                    if(Auth::getcargo() == "Aluno"){
                        $this->redirect('painel');
                    }else{
                        $this->redirect('painelAdm');
                    }
                }
                $errors['email'] = "LOGIN INVALIDO";
            }
        }
        $this->view('login',['errors'=>$errors,]);
    }
}


?>