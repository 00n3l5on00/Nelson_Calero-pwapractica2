<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
</head>
<body>

    <h1>Lista de Productos</h1>

    <?php include('productos.php'); ?>

    <div class="productos-container">
        <?php foreach ($productos as $producto): ?>
            <div class="producto">
                <h2><?php echo $producto['nombre']; ?></h2>
                <p><?php echo $producto['descripcion']; ?></p>
                <p>Precio: $<?php echo $producto['precio']; ?></p>
                <button onclick="agregarAlCarrito(<?php echo $producto['id']; ?>)">Agregar al Carrito</button>
            </div>
        <?php endforeach; ?>
    </div>

    <script>
        function agregarAlCarrito(idProducto) {
            alert('Producto agregado al carrito. ID: ' + idProducto);
        }
    </script>

</body>
</html>
