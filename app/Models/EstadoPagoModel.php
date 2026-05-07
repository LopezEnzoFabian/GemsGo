<?php

namespace App\Models;
use CodeIgniter\Model;

class EstadoPagoModel extends Model
{
    protected $table = 'estadopago';
    protected $primaryKey = 'id_estadoPago';

    protected $allowedFields = [
        'descripcion'
    ];
}