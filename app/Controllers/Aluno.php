<?php namespace App\Controllers;

class Aluno extends BaseController
{
	public function index()
	{
        session_start();
        echo view('aluno');
	}
    
    public function prova($site){
        session_start();
        helper(['form','url']);
        
        $banco = model('Prova');
        
        $count = 0;
        
        if($site == 'matematica'){
            $count = 1;
        }
        else if($site == 'portugues'){
            $count = 2;
        }
        else if($site == 'historia'){
            $count = 3;
        }
        else if($site == 'geografia'){
            $count = 4;
        }
        else if($site == 'ciencia'){
            $count = 5;
        }
        
        $user = $banco->where('tipo', $count)->findAll();
        
        $a = [
            'provas' => $user,
            'tipo' => $count,
        ];
        
        echo view('aluno_prova_buscar', $a);
        
    }
    
    public function questoes($id){
        session_start();
        helper(['form','url']);
        
        $banco = model('Questoes');
        $banco2 = model('Questao');
        $banco3 = model('Prova');
        
        $questoes = $banco->where('prova_ID', $id)->findAll();
        
        $prova = $banco3->where('ID', $id)->findAll();
        
        $questao1 = $banco2->where('ID', $questoes[0]['questao1_ID'])->findAll();
        $questao2 = $banco2->where('ID', $questoes[0]['questao2_ID'])->findAll();
        $questao3 = $banco2->where('ID', $questoes[0]['questao3_ID'])->findAll();
        $questao4 = $banco2->where('ID', $questoes[0]['questao4_ID'])->findAll();
        $questao5 = $banco2->where('ID', $questoes[0]['questao5_ID'])->findAll();
        
        $dado = [
            'nome' => $prova[0]['nome'],
            'questao1' => $questao1[0]['nome'],
            'a1' => $questao1[0]['a'],
            'b1' => $questao1[0]['b'],
            'c1' => $questao1[0]['c'],
            'd1' => $questao1[0]['d'],
            'questao2' => $questao2[0]['nome'],
            'a2' => $questao2[0]['a'],
            'b2' => $questao2[0]['b'],
            'c2' => $questao2[0]['c'],
            'd2' => $questao2[0]['d'],
            'questao3' => $questao3[0]['nome'],
            'a3' => $questao3[0]['a'],
            'b3' => $questao3[0]['b'],
            'c3' => $questao3[0]['c'],
            'd3' => $questao3[0]['d'],
            'questao4' => $questao4[0]['nome'],
            'a4' => $questao4[0]['a'],
            'b4' => $questao4[0]['b'],
            'c4' => $questao4[0]['c'],
            'd4' => $questao4[0]['d'],
            'questao5' => $questao5[0]['nome'],
            'a5' => $questao5[0]['a'],
            'b5' => $questao5[0]['b'],
            'c5' => $questao5[0]['c'],
            'd5' => $questao5[0]['d'],
            'tipo' => $prova[0]['tipo'],
        ];
        
        echo view('aluno_prova',$dado);
        
    }
    
    public function resposta(){
        session_start();
        
        helper(['form','url']);
        
        $user = $this->request->getPost();
        
        $banco = model('Questao');
        
        $r1 = 0;
        $r2 = 0;
        $r3 = 0;
        $r4 = 0;
        $r5 = 0;
        
        $questao1 = $banco->where('nome', $user['questao1'])->findAll();
        $questao2 = $banco->where('nome', $user['questao2'])->findAll();
        $questao3 = $banco->where('nome', $user['questao3'])->findAll();
        $questao4 = $banco->where('nome', $user['questao4'])->findAll();
        $questao5 = $banco->where('nome', $user['questao5'])->findAll();
        
        if($user['optradio'] == $questao1[0]['resposta'])
            $r1 = 1;
        if($user['optradio2'] == $questao2[0]['resposta'])
            $r2 = 1;
        if($user['optradio3'] == $questao3[0]['resposta'])
            $r3 = 1;
        if($user['optradio4'] == $questao4[0]['resposta'])
            $r4 = 1;
        if($user['optradio5'] == $questao5[0]['resposta'])
            $r5 = 1;
        
        $dado = ['r1' => $r1, 'r2' => $r2, 'r3' => $r3, 'r4' => $r4, 'r5' => $r5, 'tipo' => $user['tipo'], 'nome' => $user['nome'],];    
        
        echo view('aluno_resposta',$dado);
        
        
    }
    
    

}