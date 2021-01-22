<?php namespace App\Models;

    use CodeIgniter\Model;

class Questao extends Model{
    
    protected $table='questao';
    protected $primaryKey = 'ID';
    protected $allowedFields =['ID','nome','a','b','c','d','resposta'];
    
}