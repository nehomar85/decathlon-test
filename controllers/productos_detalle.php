<?php
    include_once('../connection/bd.php');

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $idProducto = 1;
        $query = "SELECT P.id_producto, P.nombre, P.precio, C.categoria, P.descripcion_corta, P.imagen, P.id_categoria
                FROM producto P LEFT JOIN categoria C ON P.id_categoria = C.id_categoria
                WHERE P.id_producto = $idProducto";
        $qry_producto = $dk_conn->query($query);
        $row_producto = $qry_producto->fetch_array(MYSQLI_ASSOC);
        $result = array($row_producto);
        echo json_encode($row_producto, JSON_UNESCAPED_UNICODE);
    }

    elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $idProducto = $_POST['idProducto'];
        $query = "DELETE FROM producto WHERE id_producto = '$idProducto'";
        $qry_producto = $dk_conn->query($query);
        echo true;
    }  
    
    
?>