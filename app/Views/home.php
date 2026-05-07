<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="text-center mt-5">

    <h1 class="display-4">💎 Bienvenido a GemsGo</h1>
    <p class="lead">Tu tienda de joyería online</p>

    <hr class="my-4">

    <p>Compra piezas exclusivas de forma rápida y segura.</p>

    <a href="<?= base_url('/login') ?>" class="btn btn-primary btn-lg mt-3">
        Iniciar Sesión
    </a>

</div>

<?= $this->endSection() ?>
