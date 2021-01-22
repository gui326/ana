<?php namespace App\Controllers;

class Usuario extends BaseController
{   
    
    
    public function index(){
        helper(['form', 'url']);  
        
        echo view('criarconta');
    }
    
    
    public function criarconta(){
        helper(['form', 'url']);    
        
        $validation =  \Config\Services::validation();
        
        $val = $this->validate([
                'primeiro_nome' => 'required|min_length[3]|alpha_space',
                'segundo_nome' => 'required|min_length[3]|alpha_space',
                'idade' => 'required|max_length[3]|numeric',
                'email' => 'required|valid_email',
                'cpf_id' => 'required|numeric',
                'usuario' => 'required',
                'senha' => 'required',
                'conf_senha' => 'required|matches[senha]',
                ]
                ,
                [   
                'primeiro_nome' => [
                    'required' => '* O primeiro nome é obrigatório ser preenchido.',
                    'min_length' => '* Deve ter no mínimo 3 caracteres.',
                    'alpha_space' => '* Deve ser inserido somente letras.',
                ],
                'segundo_nome' => [
                    'required' => '* O segundo nome é obrigatório ser preenchido.',
                    'min_length' => '* Deve ter no mínimo 3 caracteres.',
                    'alpha_space' => '* Deve ser inserido somente letras.',
                ],
                'idade' => [
                    'required' => '* A idade é obrigatório ser preenchido.',
                    'max_lenght' => '* Deve ser inserido uma idade válida.',
                    'numeric' => '* Deve ser inserido somente números.',
                ],
                'email' => [
                    'required' => '* O Email é obrigatório ser preenchido.',
                    'valid_email' => '* Deve ser inserido um email válido.'
                ],
                'cpf_id' => [
                    'required' => '* O CPF é obrigatório ser preenchido.',
                    'numeric' => '* Deve ser inserido somente números.'
                ],
                'usuario' => [
                    'required' => '* O usuário é obrigatório ser preenchido.',
                ],
                'senha' => [
                    'required' => '* A senha é obrigatório ser preenchido.',
                ],
                'conf_senha' => [
                    'required' => '* A confirmação de senha é obrigatório ser preenchido.',
                    'matches' => '* Deve ser igual a senha.'
                ],
                ]
            );
        
        
        
        if (!$val)
        {
            echo view('criarconta', ['validation' => $this->validator]);
            
        }
        else
        {
            $banco2 = model('Pagamento');
            
            $banco = model('Criarconta');
            
            $file = $this->request->getFile('arquivo');
            
            if($file->getSize() > 0){
                $file->move('upload', $file->getName());
                $arquivo = $file->getTempName() . $file->getName();
            }
            
            $dados = $this->request->getPost();
            
            $pag = [
                'cpf' => $dados['cpf_id'],
                'tipo' => '1',
                'card_number' => '0',
                'card_name' => '0',
                'card_date' => '01/01/1990',
                'card_cvv' => '0',
            ];
            
            $banco2->insert($pag);
            
            $crypt = password_hash($dados['senha'], PASSWORD_DEFAULT);
            
            $dados = [
                'primeiro_nome' => $dados['primeiro_nome'],
                'segundo_nome' => $dados['segundo_nome'],
                'idade' => $dados['idade'],
                'email' => $dados['email'],
                'cpf_id' => $dados['cpf_id'],
                'usuario' => $dados['usuario'],
                'senha'   => $crypt,
                'arquivo' => $arquivo,
                'tipo' => 1,
            ];
            
            $banco->insert($dados);
            
            helper(['form', 'url']);
            
            echo view('criarconta2',$dados);
        }
        
        
    }
    
    public function criarconta2(){
            helper(['form', 'url']);
        
            $teste = $this->request->getPost();
        
            $validation =  \Config\Services::validation();
        
            $val = $this->validate([
                'card_number' => 'required|numeric|valid_cc_number[mastercard]',
                'card_name' => 'required|min_length[3]|alpha_space',
                'card_date' => 'required|valid_date',
                'card_cvv' => 'required|numeric|min_length[3]|max_length[3]',
                ]
                ,
                [   
                'card_number' => [
                    'required' => '* O número do cartão é obrigatório ser preenchido.',
                    'numeric' => '* Deve ter somente números',
                    'valid_cc_number' => '* Deve ser um número de cartão válido.',
                ],
                'card_name' => [
                    'required' => '* O nome do titular é obrigatório ser preenchido.',
                    'min_length' => '* Deve ter no mínimo 3 caracteres.',
                    'alpha_space' => '* Deve ter somente letras.',
                ],
                'card_date' => [
                    'required' => '* A data de validade é obrigatório ser preenchido.',
                    'valid_date' => '* Deve ser inserido uma data válida.',
                ],
                'card_cvv' => [
                    'required' => '* O código CVV é obrigatório ser preenchido.',
                    'numeric' => '* Deve ser inserido apenas números.',
                    'min_length' => '* Deve ter no mínimo 3 caracteres.',
                    'max_length' => '* Deve ter no mínimo 3 caracteres.',
                ],
                ]
            );
        
        
        
        if (!$val)
        {   
            return view('criarconta2', ['validation' => $this->validator, 'cpf_id' => $teste['cpf'],]); 
        }
        else
        {              
            $banco = model('Pagamento');
            
            $dados = $this->request->getPost();
            
            $id = $dados['cpf'];
            
            $dados = [
                'tipo' => 2,
                'card_number' => $dados['card_number'],
                'card_name' => $dados['card_name'],
                'card_date' => $dados['card_date'],
                'card_cvv' => $dados['card_cvv'],
            ];            
            
            $banco->update($id, $dados);
            
            echo view('success');
        }
    }
    
    public function criarconta3(){
        helper(['form', 'url']);
        
        echo view('success');
        
    }
    

	//--------------------------------------------------------------------

}
