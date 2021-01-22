<?php namespace App\Models;

    use CodeIgniter\Model;

class Criarconta extends Model{
    
    protected $table='usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields =['id','primeiro_nome','segundo_nome','idade','email','cpf_id','usuario','senha','arquivo','tipo'];
    
}