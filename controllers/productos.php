<?php
    include_once "../connection/bd.php";

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
         $query = "SELECT P.id_producto, P.nombre, P.precio, C.categoria, P.descripcion_corta, P.imagen
                FROM producto P LEFT JOIN categoria C ON P.id_categoria = C.id_categoria";
        $qry_producto = $dk_conn->query($query);
        $row_producto = $qry_producto->fetch_all(MYSQLI_ASSOC);
        $result = array($row_producto);
        echo json_encode($row_producto,JSON_PRETTY_PRINT | JSON_FORCE_OBJECT), PHP_EOL;
        //echo json_encode($row_producto, JSON_UNESCAPED_UNICODE);
    }
    
    elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $producto = $_POST['productoNuevo'];
        $categoria = $_POST['categoriaNuevo'];
        $precio = $_POST['precioNuevo'];
        $descripcion = $_POST['descripcionNuevo'];
        //Carga imagen
        //$imagen = $_POST['imagenNuevo'];
        $query = "INSERT INTO producto (id_categoria, nombre, descripcion_corta, precio, imagen)
                VALUES ('$categoria', '$producto', '$descripcion', '$precio', NULL  )";
        $qry_producto = $dk_conn->query($query);
        echo true;
    }

    elseif ($_SERVER['REQUEST_METHOD'] === 'PUT') {
        parse_str(file_get_contents("php://input"),$put_vars);
        $idProducto = $put_vars['idProducto'];
        $producto = $put_vars['productoUpd'];
        $categoria = $put_vars['categoriaUpd'];
        $precio = $put_vars['precioUpd'];
        $descripcion = $put_vars['descripcionUpd'];
        //$imagen = $put_vars['imagenUpd'];
        $query = "UPDATE producto SET nombre = '$producto', id_categoria = '$categoria', descripcion_corta = '$descripcion', precio = '$precio' 
                WHERE id_producto = '$idProducto'";
       $qry_producto = $dk_conn->query($query);
       echo true;
   }
    
?>