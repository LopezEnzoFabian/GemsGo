<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="row justify-content-center">
    <div class="col-md-4">

        <div class="card shadow">
            <div class="card-header text-center bg-primary text-white">
                <h4>Iniciar Sesión</h4>
            </div>

            <div class="card-body">
                <form method="post" action="/login">

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Contraseña</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <button class="btn btn-success w-100">Ingresar</button>

                </form>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>
