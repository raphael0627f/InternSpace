<?php

class PainelAdm extends Controller{
    function index(){

        if(!Auth::loggedin()){
            $this->redirect('login');
        }

        if(Auth::getcargo() == "Aluno"){
            $this->redirect('painel');
        }

        $agendamento = new Agendamento();
        $row = $agendamento->where(TB_AGENDAMENTOS, "status", "Analise");
        if ($row) {
            for ($i = 0; $i < count($row); $i++) {
                $row2 = $agendamento->where(TB_USUARIOS, "id", $row[$i]->idAluno);
                $row2 = $row2[0];
                $row[$i]->idAluno = $row2->nome;
            }

            for ($i = 0; $i < count($row); $i++) {
                $row2 = $agendamento->where(TB_HOTEIS, "id", $row[$i]->idHotel);
                $row2 = $row2[0];
                $row[$i]->idHotel = $row2->hotel;
            }

            for ($i = 0; $i < count($row); $i++) {
                $row2 = $agendamento->where(TB_SETORES, "id", $row[$i]->idSetor);
                $row2 = $row2[0];
                $row[$i]->idSetor = $row2->setor;
            }

            for ($i = 0; $i < count($row); $i++) {
                $row[$i]->data = date('d/m/Y', strtotime($row[$i]->data));
            }
            $retorno = true;
        }else{
           $retorno = false;
        }


        $this->view('painelAdm',['row' => $row, 'retorno'=>$retorno]);
    }
}

?>