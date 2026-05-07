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

</header>

<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <?php if(session()->get('usuario_id')): ?>
            <a href="/productos" class="btn btn-outline-light">Productos</a>
        <?php endif; ?>
    </div>
</nav>

<main class="flex-grow-1">
