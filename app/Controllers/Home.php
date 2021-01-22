<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
        session_start();
		echo view('Home');
	}
    
    public function op($a)
	{
        session_start();
		echo view($a);
	}

	//--------------------------------------------------------------------

}
