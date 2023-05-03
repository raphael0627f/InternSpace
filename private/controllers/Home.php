<?php

class Home extends Controller{
    function index(){
        /*
        if(!Auth::loggedin()){
            $this->redirect('login');
        }*/
        
        $this->view('home');    
    }
}


?>