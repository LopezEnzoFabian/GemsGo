<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h2 class="mb-4">Catálogo de Productos</h2>

<div class="row">
<?php foreach ($productos as $p): ?>
    
    <div class="col-md-4">
        <div class="card shadow mb-4">

            <div class="card-body text-center">
                <h5 class="card-title"><?= $p['nombre'] ?></h5>

                <p class="card-text">
                    <strong>$<?= $p['precio'] ?></strong>
                </p>

                <?php if($p['stock'] > 0): ?>
                    <span class="badge bg-success mb-2">
                        Stock: <?= $p['stock'] ?>
                    </span>
                <?php else: ?>
                    <span class="badge bg-danger mb-2">
                        Sin stock
                    </span>
                <?php endif; ?>

                <form method="post" action="/compra/realizar">
                    <input type="hidden" name="producto_id" value="<?= $p['id'] ?>">

                    <button class="btn btn-primary w-100"
                        <?= ($p['stock'] <= 0) ? 'disabled' : '' ?>>
                        Comprar
                    </button>
                </form>
            </div>

        </div>
    </div>

<?php endforeach; ?>
</div>

<?= $this->endSection() ?>
