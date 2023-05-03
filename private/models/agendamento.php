<?php

class Agendamento extends Model{
    // Define as colunas da tabela do banco de dados correspondentes a classe Agendamento
    protected $colunas = [
        'data',
        'periodo',
        'idHotel',
        'idAluno',
        'idSetor',
        'status'
    ];

    // Define uma lista de métodos que serão executados antes da inserção de um novo registro na tabela
    protected $antesInserir = [
        'Arrumar_data',
        'gerar_idHotel', // Executa o método gerar_idHotel antes da inserção
        'gerar_idAluno', // Executa o método gerar_idAluno antes da inserção   
        'gerar_idSetor'  // Executa o método gerar_idSetor antes da inserção
    ];
    
    // Define um método para validação dos dados recebidos pelo objeto Agendamento
    public function validate($DATA){

        // Verifica se o periodo foi selecionado
        if($DATA['periodo'] == "Selecione"){
            $this->errors['periodo']="Periodo não Selecionado";
        }

        // Verifica se o hotel foi selecionado
        if($DATA['hotel'] == "Selecione"){
            $this->errors['hotel']="Hotel não Selecionado";
        }

        // Verifica se o setor foi selecionado
        if($DATA['setor'] == "Selecione"){
            $this->errors['setor']="Setor não Selecionado";
        }

        // Retorna verdadeiro se não houver nenhum erro na validação
        if(count($this->errors)==0){
            return true;
        }
    }

    public function Arrumar_data($data){
        $data['data'] =  date('Y-m-d', strtotime(str_replace("/", "-", $_POST['data'])));
        $data['status'] = "Analise";
        return $data;
    }

    public function gerar_idHotel($data){
        $row = $this->where(TB_HOTEIS,'hotel',$_POST['hotel']);
        $row = $row[0];
        $data['idHotel'] = $row->id;
        return $data;
    }

    public function gerar_idAluno($data){
        $data['idAluno'] = Auth::getid();
        return $data;
    }

    public function gerar_idSetor($data){
        $row = $this->where(TB_SETORES,'setor',$_POST['setor']);
        $row = $row[0];

        $data['idSetor'] = $row->id;
        return $data;
    }
}

?>