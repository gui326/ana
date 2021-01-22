<?php namespace App\Controllers;

class Prova extends BaseController
{
    public function index(){
        session_start();
        echo view('professor_prova');
        
    }
    
    public function inserir(){
        session_start();
        helper(['form', 'url']); 
        
        $banco_prova = model('Prova');
        $banco_questao = model('Questao');
        $banco_questoes = model('Questoes');
        
        $dados = $this->request->getPost();
        
        $dado_prova = ['nome' => $dados['nome'], 'tipo' => $dados['tipo']];
        
        $prova_teste = $banco_prova->insert($dado_prova);
        
        for($i = 1;$i <= 5; $i++){
            $dado_questao = [
            'nome' => $dados['questao' . $i],
            'a' => $dados['a' . $i],
            'b' => $dados['b' . $i],
            'c' => $dados['c' . $i],
            'd' => $dados['d' . $i],
            'resposta' => $dados['r' . $i],
            ];
            
            $questao_teste = $banco_questao->insert($dado_questao);
        }
        
        $prova_buscar = $banco_prova->where('nome', $dados['nome'])->find();
        
        $questao1_id = $banco_questao->where('nome', $dados['questao1'])->findAll();
        $questao2_id = $banco_questao->where('nome', $dados['questao2'])->findAll();
        $questao3_id = $banco_questao->where('nome', $dados['questao3'])->findAll();
        $questao4_id = $banco_questao->where('nome', $dados['questao4'])->findAll();
        $questao5_id = $banco_questao->where('nome', $dados['questao5'])->findAll();
        
        $dado_questoes = [
            'prova_ID' => $prova_buscar[0]['ID'],
            'questao1_ID' => $questao1_id[0]['ID'],
            'questao2_ID' => $questao2_id[0]['ID'],
            'questao3_ID' => $questao3_id[0]['ID'],
            'questao4_ID' => $questao4_id[0]['ID'],
            'questao5_ID' => $questao5_id[0]['ID'],
        ];
        
        $questoes_teste = $banco_questoes->insert($dado_questoes);
        
        echo view('professor');
    }

    

}