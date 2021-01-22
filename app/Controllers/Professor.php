<?php namespace App\Controllers;

class Professor extends BaseController
{
    public function index(){
        session_start();
        echo view('professor');
        
    }
    
	public function buscar(){
        session_start();
        helper(['form','url']);
        
        $banco = model('Criarconta');
        
        $user = $banco->where('tipo', 1)->findAll();
        
        $a = [
          'usuarios' => $user  
        ];
        
        echo view('professor_buscar', $a);
            
		
	}
    
    public function buscar_prova(){
        session_start();
        helper(['form','url']);
        
        $banco = model('Prova');
        
        $user = $banco->findAll();
        
        $a = [
          'provas' => $user  
        ];
        
        echo view('professor_buscar_prova', $a);
            
		
	}
    
    public function mostrar_prova($id){
        session_start();
        helper(['form','url']);
        
        $banco = model('Questao');
        $banco2 = model('Questoes');
        $banco3 = model('Prova');
        
        $prova = $banco3->where('ID', $id)->findAll();
        
        $user = $banco2->where('prova_ID', $id)->findAll();
        
        $questao1 = $banco->where('ID', $user[0]['questao1_ID'])->findAll();
        $questao2 = $banco->where('ID', $user[0]['questao2_ID'])->findAll();
        $questao3 = $banco->where('ID', $user[0]['questao3_ID'])->findAll();
        $questao4 = $banco->where('ID', $user[0]['questao4_ID'])->findAll();
        $questao5 = $banco->where('ID', $user[0]['questao5_ID'])->findAll();
        
        $dados = ['nome' => $prova[0]['nome'],
                  'tipo' => $prova[0]['tipo'],
                  'questao1' => $questao1[0]['nome'],
                  'questao2' => $questao2[0]['nome'],
                  'questao3' => $questao3[0]['nome'],
                  'questao4' => $questao4[0]['nome'],
                  'questao5' => $questao5[0]['nome'],
                  'a1' => $questao1[0]['a'],
                  'a2' => $questao2[0]['a'],
                  'a3' => $questao3[0]['a'],
                  'a4' => $questao4[0]['a'],
                  'a5' => $questao5[0]['a'],
                  'b1' => $questao1[0]['b'],
                  'b2' => $questao2[0]['b'],
                  'b3' => $questao3[0]['b'],
                  'b4' => $questao4[0]['b'],
                  'b5' => $questao5[0]['b'],
                  'c1' => $questao1[0]['c'],
                  'c2' => $questao2[0]['c'],
                  'c3' => $questao3[0]['c'],
                  'c4' => $questao4[0]['c'],
                  'c5' => $questao5[0]['c'],
                  'd1' => $questao1[0]['d'],
                  'd2' => $questao2[0]['d'],
                  'd3' => $questao3[0]['d'],
                  'd4' => $questao4[0]['d'],
                  'd5' => $questao5[0]['d'],
                  'r1' => $questao1[0]['resposta'],
                  'r2' => $questao2[0]['resposta'],
                  'r3' => $questao3[0]['resposta'],
                  'r4' => $questao4[0]['resposta'],
                  'r5' => $questao5[0]['resposta'],
                 
                 ];
        
        echo view('professor_atualizar_prova', $dados);
    }
    
    public function atualizar_prova(){
        session_start();
        $banco = model('Prova');
        $banco2 = model('Questao');
        
        $id = $this->request->getPost();
        
        $dado_prova = ['nome' => $id['nome'],'tipo' => $id['tipo']];
            
        $prova = $banco->where('nome', $id['ex-nome'])->findAll();
        
        $request = $banco->update($prova[0]['ID'],$dado_prova);
        
        for($i=1; $i<=5; $i++){
            $questao = $banco2->where('nome', $id['ex-questao' . $i])->find();
            
            $data = [
            'nome' => $id['questao' . $i],
            'a' => $id['a' . $i],
            'b' => $id['b' . $i],
            'c' => $id['c' . $i],
            'd' => $id['d' . $i], 
            'resposta' => $id['r' . $i], 
            ];
            
            $banco2->update($questao[0]['ID'],$data);
        }
        
        if($request){
        echo view('professor');
        }else
        echo view('erro');
        
        
    }
    
    
    
    public function deletar($id){
        session_start();
        $banco = model('Criarconta');
        $banco2 = model('Pagamento');
        
        $request = $banco->delete($id);
        
        if($request){
        return $this->index();
        }else
        echo view('erro');
    }
    
    public function mostrar($id){
        session_start();
        helper(['form','url']);
        
        $banco = model('Criarconta');
        
        $user = $banco->find($id);
        
        $dados = ['id' => $id, 'primeiro_nome' => $user['primeiro_nome'], 'segundo_nome' => $user['segundo_nome'], 'idade' => $user['idade'], 'email' => $user['email'], 'cpf' => $user['cpf_id'], 'usuario' => $user['usuario'],];
        
        echo view('professor_atualizar', $dados);
    }
    
    public function atualizar(){
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