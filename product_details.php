<?php

    if( empty($_GET["id"]) ){
        header("location: index.php");
    }

    $product_id = $_GET["id"];
    include "model/conn.php";
    $sqlProduct = $conn->query("select * from productos where id = $product_id");
    $product_item = $sqlProduct->fetch_object();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Producto: <?= $product_item->product_name?></title>
</head>
<header>
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="navbar-nav ms-4 me-auto">
            <a class="navbar-brand" href="index.php"><h3 class="text-warning">MEGA<span class="text-black">TRONIC</span></h3></a>
            <form class="d-flex" action="index_search.php" type="search" method="get">
                <input class="form-control me-2" type="search" placeholder="Buscar productos" name="results" required/>
                <button class="btn btn-dark px-3" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
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
    <div class="row my-5">
        <div class="col-lg-3 offset-lg-1">
            <img class="img-fluid" src="<?= $product_item->product_image ?>" alt="Imagen sobre <?= $product_item->product_name ?>">
        </div>
        <div class="col-lg-6 offset-lg-1 text-white">
            <h2><?= $product_item->product_name ?></h2>
            <h6>Publicado por X empresa</h6>
            <p class="mt-4"><?= $product_item->product_desc ?></p>
            <h6 class="text-success"><i class="fa-solid fa-truck-moving me-2"></i>Envío gratis en las próximas horas</h6>
            <button type="button" class="btn btn-warning mt-3 p-3">Agregar al carrito<i class="fa-solid fa-cart-shopping ms-2"></i></button>
        </div>
    </div>
</body>
<?php 
    include "components/footer.html";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"> </script>
<script src="https://kit.fontawesome.com/a5601269a3.js" crossorigin="anonymous"></script>
</html>