<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container-fluid p-0">

    <!--  HERO / CARRUSEL -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">

            <!-- SLIDE 1 -->
            <div class="carousel-item active">
                <img src="<?= base_url('assets/img/carrusel1.jpg') ?>" class="d-block w-100" style="height:400px; object-fit:cover;">
            </div>

            <!-- SLIDE 2 -->
            <div class="carousel-item">
                <img src="<?= base_url('assets/img/carrusel2.jpg') ?>" class="d-block w-100" style="height:400px; object-fit:cover;">
            </div>


        </div>

    </div>

</div>

<!-- 🧭 OPCIONES -->
<div class="container mt-5">
    <div class="row">

        <!-- 🛒 COMPRA -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-lg border-0 h-100">

                <img src="<?= base_url('assets/img/compra.jpg') ?>" class="card-img-top" style="height:400px">

               <div class="card-body text-center" style="background: linear-gradient(135deg, #0f0f0f, #1c1c1c); color: #d4af37;">
                 <h3 class="fw-bold">Compra</h3>
                    <a href="<?= base_url('/productos') ?>" 
                        class="btn" 
                        style="background-color: #d4af37; color: black; border: none;">
                         Ir a tienda
                    </a>
                </div>

            </div>
        </div>

        <!-- 🔨 SUBASTA -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-lg border-0 h-100">

                <img src="<?= base_url('assets/img/subastas.jpg') ?>" class="card-img-top" style="height:400px">

                <div class="card-body text-center" style="background: linear-gradient(135deg, #d4af37, #1c1c1c); color: #0f0f0f;">
                    <h3 class="fw-bold">Subasta</h3>
                    <a href="<?= base_url('#') ?>" 
                        class="btn" 
                        style="background-color: #0f0f0f; color: gold; border: none;">
                        Proximamente
                    </a>
                </div>

            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>