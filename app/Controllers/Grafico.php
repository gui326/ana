<?php namespace App\Controllers;

class Grafico extends BaseController
{
	public function index()
	{
        session_start();
        $banco = model('pagamento');
        
        $user = $banco->findAll();
        
        $contpago = 0;
        $contgratis = 0;
        
        foreach($user as $u){
            if($u['tipo'] == 1)
                $contgratis++;
            else if($u['tipo'] == 2)
                $contpago++;
        }
        
        
        $a = ['tipo' => 4, 'pago' => $contpago, 'gratis' => $contgratis];
        
        echo view('administrador_grafico',$a);
	}
    
    

}