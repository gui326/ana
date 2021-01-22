<?php namespace App\Controllers;

class Login extends BaseController
{
    
    
	public function index()
	{
        helper(['form', 'url']); 
        
        $banco = model('Criarconta');
        
        $dado = $this->request->getPost();
        
        $user = $banco->where('usuario', $dado['usuario'])->findAll();
        
        $use = ['usuario' => 'a', 'pass' => 'b'];
        
        $pwd = ['pass' => true];
        
        if($user != null){
            $cript = password_hash($dado['senha'], PASSWORD_DEFAULT);
            
            session_start();
            
            foreach ($user as $usuario){
                if(password_verify($dado['senha'],$usuario['senha'])){
                    if($usuario['tipo'] == 1){
                        $_SESSION["nome"] = $usuario['primeiro_nome'];
                        echo view('aluno');
                    }
                    else if($usuario['tipo'] == 2){
                        $_SESSION["nome"] = $usuario['primeiro_nome'];
                        echo view('professor');
                    }
                    else if($usuario['tipo'] == 3){
                        $_SESSION["nome"] = $usuario['primeiro_nome'];
                        echo view('administrador');
                    }
                    
                }
                else
                    echo view('login',$pwd); 
            }
        }
        else
            echo view('login',$use);
            
            
		
	}
    
    public function deslogar(){
        session_start();
        unset($_SESSION["nome"]);
        echo view('home');
    }

	//--------------------------------------------------------------------

}
