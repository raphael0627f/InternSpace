<?php

class Perfil extends Controller{
    function index(){
        $usuario = new Usuario();
        $row = $usuario->where(TB_USUARIOS,'id',Auth::getid());
        $row = $row[0];
        $this->view('perfil',['row'=>$row]);
    }
}

?>