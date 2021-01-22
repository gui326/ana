<?php namespace App\Models;

    use CodeIgniter\Model;

class Pagamento extends Model{
    
    protected $table='tipo_conta';
    protected $primaryKey = 'cpf';
    protected $allowedFields =['cpf','tipo','card_number','card_name','card_date','card_cvv'];
    
}