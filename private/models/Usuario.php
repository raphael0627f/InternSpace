<?php

class Usuario extends Model{
    // Define as colunas da tabela do banco de dados correspondentes a classe Aluno
    protected $colunas = [
        'nome',
        'email',
        'senha',
        'dataNascimento',
        'genero',
        'telefone',
        'cpf',
        'documento',
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'uf',
        'cargo'
    ];

    // Define uma lista de métodos que serão executados antes da inserção de um novo registro na tabela
    protected $antesInserir = [
        'hash_password', // Executa o método hash_password antes da inserção
        'tirar_caracteres'
    ];
    
    // Define um método para validação dos dados recebidos pelo objeto Aluno
    public function validate($DATA){

        // Verifica se o nome está vazio ou se contém caracteres diferentes de letras e espaços
        if(empty($DATA['nome']) || !preg_match('/^[a-zA-Z ]+$/', $DATA['nome'])){
            $this->errors['nome']="NOME INVÁLIDO";
            echo "<script>alert('NOME INVÁLIDO')</script>";
        }

        // Verifica se as senhas informadas não correspondem
        if(empty($DATA['senha']) || $DATA['senha'] != $DATA['senha2']){
            $this->errors['senha']="AS SENHAS NÃO CORRESPONDEM";
            echo "<script>alert('AS SENHAS NÃO CORRESPONDEM')</script>";
        }

        // Verifica se a senha tem no mínimo 8 caracteres
        if(strlen($DATA['senha']) <= 7){
            $this->errors['senha']="A SENHA TEM QUE TER NO MINIMO 8 CARACTERES";
            echo "<script>alert('A SENHA TEM QUE TER NO MINIMO 8 CARACTERES')</script>";
        }

        // Verifica se o email já está cadastrado na tabela do banco de dados
        if($this->where(TB_USUARIOS,'email', $DATA['email'])){
            $this->errors['email']="EMAIL JA CADASTRADO";
            echo "<script>alert('EMAIL JA CADASTRADO')</script>";
        }

        // Retorna verdadeiro se não houver nenhum erro na validação
        if(count($this->errors)==0){
            return true;
        }
    }

    // Define um método para realizar o hash da senha antes de inserir o registro na tabela do banco de dados
    public function hash_password($data){
        // Executa o hash da senha utilizando a função password_hash do PHP
        $data['senha'] = password_hash($_POST['senha'],PASSWORD_DEFAULT);
        return $data;
    }

    public function tirar_caracteres($data){
        $data['cpf'] = str_replace(array('-', '.'), '', $_POST['cpf']);
        $data['telefone'] = str_replace(array('-', ')','(',' '), '', $_POST['telefone']);
        $data['cep'] = str_replace('-', '', $_POST['cep']);
        return $data;
    } 
}

?>