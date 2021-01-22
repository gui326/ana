<?php namespace App\Models;

    use CodeIgniter\Model;

class Prova extends Model{
    
    protected $table='prova';
    protected $primaryKey = 'ID';
    protected $allowedFields =['ID','nome','tipo',];
    
}