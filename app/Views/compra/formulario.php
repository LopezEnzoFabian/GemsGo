<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger text-center">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>

<?php
/** @var array $producto */
?>

<h2>Confirmar Compra</h2>

<div class="card p-3">

    <h4><?= $producto['nombre'] ?></h4>
    <p><strong>Precio:</strong> $<?= $producto['precio'] ?></p>

    <form method="post" action="<?= base_url('compra/realizar') ?>">

    <input type="hidden" name="id_producto" value="<?= $producto['id_producto'] ?>">

    <label class="form-label">Método de pago</label>
    <select name="id_metodo" class="form-control" required>
        <option value="" selected disabled>Seleccione un método de pago</option>
        <option value="1">Transferencia</option>
        <option value="2">Tarjeta de credito</option>
    </select>

    <button class="btn btn-success mt-3 w-100">
        Confirmar compra
    </button>

</form>

</div>

<?= $this->endSection() ?>