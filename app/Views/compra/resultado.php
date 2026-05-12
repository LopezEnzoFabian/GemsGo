<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<?php
/** @var string $mensaje */
?>

<div class="container mt-4">

    <div class="alert alert-success text-center">
        <h4><?= $mensaje ?></h4>
    </div>

    <a href="<?= base_url('productos') ?>" class="btn btn-primary">
        Volver al catálogo
    </a>

</div>

<?= $this->endSection() ?>