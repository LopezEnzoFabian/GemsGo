<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row vh-100">

        <!-- IZQUIERDA -->
        <div class="col-md-4 d-none d-md-block p-0 position-relative">
            <img src="<?= base_url('assets/img/loginimg1.jpg') ?>" 
                 class="w-100 h-100" 
                 style="object-fit: cover;">
            
            <!-- Overlay oscuro -->
            <div class="position-absolute top-0 start-0 w-100 h-100"
                 style="background: rgba(0,0,0,0.6);"></div>
        </div>

        <!-- CENTRO -->
        <div class="col-md-4 d-flex align-items-center justify-content-center"
             style="background-color: #0f0f0f;">

            <div class="card shadow-lg w-100 border-0"
                 style="background: #1a1a1a; border-radius:15px;">

                <!-- HEADER -->
                <div class="card-header text-center border-0"
                     style="background: transparent;">

                    <h3 style="color:#d4af37; font-weight:bold;">
                        GemsGo
                    </h3>

                    <p style="color:#aaa; margin:0;">
                        Iniciar sesión
                    </p>
                </div>

                <!-- BODY -->
                <div class="card-body">

                    <form method="post" action="<?= base_url('login') ?>">

                        <div class="mb-3">
                            <label style="color:#ccc;">Email</label>
                            <input type="email" name="email" 
                                   class="form-control"
                                   style="background:#111; border:1px solid #333; color:white;">
                        </div>

                        <div class="mb-3">
                            <label style="color:#ccc;">Contraseña</label>
                            <input type="password" name="password" 
                                   class="form-control"
                                   style="background:#111; border:1px solid #333; color:white;">
                        </div>

                        <button class="btn w-100"
                                style="background:#d4af37; color:black; font-weight:bold;">
                            Ingresar
                        </button>

                    </form>

                </div>

            </div>

        </div>

        <!-- DERECHA -->
        <div class="col-md-4 d-none d-md-block p-0 position-relative">
            <img src="<?= base_url('assets/img/loginimg2.jpg') ?>" 
                 class="w-100 h-100" 
                 style="object-fit: cover;">
            
            <div class="position-absolute top-0 start-0 w-100 h-100"
                 style="background: rgba(0,0,0,0.6);"></div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>

<?= $this->endSection() ?>
