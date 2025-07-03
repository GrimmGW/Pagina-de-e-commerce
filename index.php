<!DOCTYPE html>
<html lang="es-VE">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Tienda de Electrónica</title>
</head>
<header>
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="navbar-nav ms-4">
            <a class="navbar-brand" href="index.php">
                <h3 class="text-warning">MEGA<span class="text-black">TRONIC</span></h3>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="">
            <ul class="navbar-nav ms-auto me-4">
                <li class="nav-item">
                    <a class="nav-link" href="">Menu de administrador</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin/create_product.php">Crear producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Mi perfil</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<body class="bg-dark">
    <section id="intro">
        <div class="container-fluid d-flex text-white align-items-center justify-content-center text-center"
            style="background-image: url(assets/pexels_fondo.JPG); height: 50vh; background-size: cover; background-position: center;">
            <div>
                <h1 style="font-size: 56px;">Tienda de Electrónica</h1>
                <p>Aquí podrás comprar todos los suplementos y artículos de electrónica de la más alta calidad.</p>
            </div>
        </div>
    </section>
    <section id="productos-pop">
        <div class="row m-5">
            <div class="col-8 offset-2 text-white">
                <div>
                    <h3>Productos populares</h3>
                    <div style="grid-template-columns: 1fr 1fr 1fr 1fr" class="d-grid gap-3 my-4">
                        <?php
                        include "model/conn.php";
                        $sql = $conn->query("select * from productos");
                        while ($item = $sql->fetch_object()){ ?>
                        <div class="card" style="width: 15rem; ">
                            <img src="<?= $item->product_image ?>" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?= $item->product_price ?></h5>
                                <p class="card-text una-linea"><?= $item->product_name ?></p>
                                <a href="product_details.php?id=<?= $item->id ?>" class="btn btn-primary">Ver detalles</a>
                            </div>
                        </div>
                        <?php 
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-light">Ver todos los productos</button>
            </div>
        </div>
    </section>
</body>
<?php 
    include "components/footer.html";  
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"> </script>
<script src="https://kit.fontawesome.com/a5601269a3.js" crossorigin="anonymous"></script>
</html>

