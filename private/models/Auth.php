<?php
// Classe Auth para gerenciamento de autenticação
class Auth{

    // Função para autenticar o usuário
    public static function authenticate($row){
        $_SESSION['logado']=$row; // Define a sessão 'logado' com o usuário autenticado
    }

    // Função para realizar o logout
    public static function logout (){
        if(isset($_SESSION['logado'])){ // Verifica se a sessão 'logado' está definida
           unset($_SESSION['logado']); // Remove a sessão 'logado'
        }
    }

    // Função para verificar se o usuário está logado
    public static function loggedin(){
        if(isset($_SESSION['logado'])){ // Verifica se a sessão 'logado' está definida
            return true; // Retorna true se o usuário está logado
        }
        return false; // Retorna false se o usuário não está logado
    }

    // Função para obter o nome do aluno logado
    public static function aluno(){
        if(isset($_SESSION['logado'])){ // Verifica se a sessão 'logado' está definida
            return $_SESSION['logado']->nome; // Retorna o nome do aluno logado
        }
        return false; // Retorna false se o usuário não está logado
    }

    // Função para obter qualquer propriedade do usuário logado
    public static function __callStatic($method, $params){
        $prop = strtolower(str_replace("get","",$method)); // Obtém o nome da propriedade a partir do nome do método
        
        if(isset($_SESSION['logado']->$prop)){ // Verifica se a propriedade está definida no usuário logado
            return $_SESSION['logado']->$prop; // Retorna o valor da propriedade
        }
        return 'Un rerre boi'; // Retorna uma mensagem de erro se a propriedade não estiver definida
    }
}


?>