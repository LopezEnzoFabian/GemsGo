<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<?php
/** @var array $productos */
?>

<?php if (session()->getFlashdata('mensaje')): ?>
    <div class="alert alert-success text-center">
        <?= session()->getFlashdata('mensaje') ?>
    </div>
<?php endif; ?> 
<!-- ESTE IF ES PARA MOSTRAR EL MENSAJE DE QUE SE PROCESO LA COMPRA DE UN ARTICULO DE JOYERIA CON EXITO -->

<h2 class="mb-4 titulo-catalogo">Catálogo de Productos</h2>

<div class="row">

<?php foreach ($productos as $p): ?>

  <div class="col-md-4">

    <div class="card shadow mb-4">

        <!-- IMAGEN -->
        <?php if (!empty($p['imagen'])): ?>
            <img src="<?= base_url('public/uploads/' . $p['imagen']) ?>"
                 class="card-img-catalogo">
        <?php else: ?>
            <img src="<?= base_url('uploads/default.png') ?>"
                 class="card-img-catalogo">
        <?php endif; ?>

        <div class="card-body text-center">

            <h5 class="card-title">
                <?= $p['nombre'] ?>
            </h5>

            <p class="card-text fw-bold text-warning">
                $<?= $p['precio'] ?>
            </p>

            <!-- BOTÓN -->
            <form method="post" action="<?= base_url('compra/formulario') ?>">
                <input type="hidden" name="id_producto" value="<?= $p['id_producto'] ?>">
                    
                <?php if ($p['stock'] > 0): ?>
                    <button class="btn btn-warning w-100 fw-bold">
                        🛒 Comprar
                    </button>
                <?php else: ?>
                    <button class="btn btn-secondary w-100" disabled>
                        Sin stock
                    </button>
                <?php endif; ?>
            </form>

        </div>

    </div>

</div>

<?php endforeach; ?>

</div>

<?= $this->endSection() ?>