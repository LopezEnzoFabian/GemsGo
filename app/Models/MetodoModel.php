<?php

namespace App\Models;
use CodeIgniter\Model;

class MetodoModel extends Model
{
    protected $table = 'metodo';
    protected $primaryKey = 'id_metodo';

    protected $allowedFields = [
        'descripcion'
    ];
}