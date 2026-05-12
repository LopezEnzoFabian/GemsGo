<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>GemsGo</title>
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="d-flex flex-column min-vh-100">

<header>
   
<link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/misestilos.css') ?>">

</header>


 <!-- BARRA DE NAVEGACION PARA USUARIOS -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="<?= base_url('/') ?>">
            GemsGo
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <!-- IZQUIERDA -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('productos') ?>">Catálogo</a>
                </li>
            </ul>

            <!-- DERECHA -->
            <ul class="navbar-nav">

                <?php if (session()->get('logged_in')): ?>

                    <li class="nav-item">
                        <span class="nav-link text-white">
                            <?= session()->get('email') ?>
                        </span>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link btn btn-danger text-white ms-2 px-3" href="<?= base_url('logout') ?>">
                            Logout
                        </a>
                    </li>

                <?php else: ?>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
                    </li>

                <?php endif; ?>

            </ul>

        </div>
    </div>
</nav>
<!-- BARRA DE NAVEGACION PARA USUARIOS -->
<main class="flex-grow-1">
