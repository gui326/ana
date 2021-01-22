<?php namespace App\Controllers;

class Materia extends BaseController
{
    
    
    public function matematica($site){
        session_start();
        echo view('aluno_matematica_' . $site);
    }
    
    public function portugues($site){
        session_start();
        echo view('aluno_portugues_' . $site);
    }
    
    public function historia($site){
        session_start();
        echo view('aluno_historia_' . $site);
    }
    
    public function geografia($site){
        session_start();
        echo view('aluno_geografia_' . $site);
    }
    
    public function ciencia($site){
        session_start();
        echo view('aluno_ciencia_' . $site);
    }

}