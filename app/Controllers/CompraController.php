<?php

namespace App\Controllers;

use App\Models\ProductoModel;
use App\Models\VentaModel;

class CompraController extends BaseController
{
    public function realizarCompra()
    {
        $productoModel = new ProductoModel();
        $ventaModel = new VentaModel();

        $id_producto = $this->request->getPost('id_producto');
        $id_usuario = session()->get('id_usuario');
        $id_metodo = $this->request->getPost('id_metodo');

        $producto = $productoModel->find($id_producto);

        // Validación de stock
        if (!$producto || $producto['stock'] <= 0) {
            return view('compra/resultado', [
                'mensaje' => 'Producto sin stock'
            ]);
        }
        
        // Guardar venta (ANTES "compra")
        $ventaModel->save([
            'fecha_compra' => date('Y-m-d H:i:s'),
            'precio' => $producto['precio'],
            'id_producto' => $id_producto,
            'id_usuario' => $id_usuario,
            'id_metodo' => 1,        // fijo por ahora
            'id_estadoPago' => 1     // fijo por ahora
        ]);

        // Descontar stock
        $productoModel->update($id_producto, [
            'stock' => $producto['stock'] - 1
        ]);

        return view('compra/resultado', [
            'mensaje' => 'Compra realizada con éxito. Hemos enviado a tu correo registrado los datos de pago y seguimiento de la orden.'
        ]);
    }


public function formulario()
{
    $id_producto = $this->request->getPost('id_producto');

    $productoModel = new ProductoModel();
    $producto = $productoModel->find($id_producto);

    return view('compra/formulario', [
        'producto' => $producto
    ]);
}

}