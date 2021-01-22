<?php namespace App\Controllers;

class Administrador extends BaseController
{
    public function index(){
        session_start();
        echo view('administrador');
        
    }
    
    
	public function buscar($id)
	{
        session_start();
        helper(['form','url']);
        
        $banco = model('Criarconta');
        
        if($id == "aluno")
        $user = $banco->where('tipo', 1)->findAll();
        else if($id == "professor")
        $user = $banco->where('tipo', 2)->findAll();
        else if($id == "administrador")
        $user = $banco->where('tipo', 3)->findAll();
        
        $a = [
          'usuarios' => $user, 'tipo' => $id 
        ];
        
        echo view('administrador_buscar', $a);
	}
    
    
    
    public function deletar($id)
    {
        session_start();
        $banco = model('Criarconta');
        $banco2 = model('Pagamento');
        
        $request = $banco->delete($id);
        
        if($request){
        return $this->index();
        }else
        echo view('erro');
    }
    
    public function mostrar($id)
    {
        session_start();
        helper(['form','url']);
        
        $banco = model('Criarconta');
        
        $user = $banco->find($id);
        
        $dados = ['id' => $id, 'primeiro_nome' => $user['primeiro_nome'], 'segundo_nome' => $user['segundo_nome'], 'idade' => $user['idade'], 'email' => $user['email'], 'cpf' => $user['cpf_id'], 'usuario' => $user['usuario'], 'senha' => $user['senha'], 'arquivo' => $user['arquivo'], 'tipo' => $user['tipo']];
        
        echo view('administrador_atualizar', $dados);
    }
    
    public function atualizar()
    {
        session_start();
        $banco = model('Criarconta');
        
        $id = $this->request->getPost();
        
        $data = [
            'primeiro_nome' => $id['primeiro_nome'],
            'segundo_nome' => $id['segundo_nome'],
            'idade' => $id['idade'],
            'email' => $id['email'],
            'usuario' => $id['usuario'],            
        ];
        
        $request = $banco->update($id['id'],$data);
        
        if($request){
        return $this->index();
        }else
        echo view('erro');
        
        
    }

	//--------------------------------------------------------------------

}