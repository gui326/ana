<?php namespace App\Models;

    use CodeIgniter\Model;

class Questoes extends Model{
    
    protected $table='questoes';
    protected $primaryKey = 'ID';
    protected $allowedFields =['ID','prova_ID','questao1_ID','questao2_ID','questao3_ID','questao4_ID','questao5_ID'];
    
}