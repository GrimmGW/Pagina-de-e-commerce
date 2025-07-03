<!DOCTYPE html>
<html lang="es-VE">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Creando un nuevo Producto</title>
</head>
<body class="bg-dark">
    <?php 
    include "../model/conn.php";
    include "../controllers/create_product_controller.php";
    
    ?>
    <form method="POST" class="container-fluid mt-5" enctype="multipart/form-data">
        <div class="row text-white">
            <div class="col-10 offset-1 col-lg-4 offset-lg-1 mb-3">
                <div class="mb-3">
                    <label for="nombre_prod" class="form-label">Nombre del producto</label>
                    <input type="text" class="form-control bg-dark text-white" name="nombre_prod" required>
                </div>
                <div class="mb-3">
                    <label for="precio_prod" class="form-label">Precio del producto</label>
                    <input type="number" class="form-control bg-dark text-white" name="precio_prod" step="0.01" required>
                </div>
                <div class="mb-3">
                    <label for="imagen_prod" class="form-label">Imagen del producto</label>
                    <input type="file" class="form-control bg-dark text-white" name="imagen_prod" accept="image" required>
                </div>
            </div>
            <div class="col-10 offset-1 col-lg-6 offset-lg-0 ">
                <div class="mb-3">
                    <label for="desc_prod" class="form-label">Descripcion</label>
                    <textarea name="desc_prod" class="form-control bg-dark text-white" rows="8" maxlength="1000" required></textarea>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-warning" name="btnnuevoprod" value="ok">Crear producto</button>
        </div>
    </form>
</body>
</html>