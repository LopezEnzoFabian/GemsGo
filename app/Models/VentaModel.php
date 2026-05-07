<?php

namespace App\Models;

use CodeIgniter\Model;

class VentaModel extends Model
{
    protected $table = 'venta';
    protected $primaryKey = 'id_venta';

    protected $allowedFields = [
        'fecha_compra',
        'precio',
        'id_producto',
        'id_metodo',
        'id_estadoPago',
        'id_usuario'
    ];
}