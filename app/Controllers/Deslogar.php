<?php namespace App\Controllers;

class Deslogar extends BaseController
{   
    public function index(){
        session_start();
        unset($_SESSION["nome"]);
        echo view('home');
    }

	//--------------------------------------------------------------------

}
