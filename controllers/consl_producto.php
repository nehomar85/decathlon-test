<?php
include_once "connection/bd.php";

$qry_Producto = "SELECT P.id_producto, P.nombre, P.precio, C.categoria, P.descripcion_corta, P.imagen
                FROM producto P LEFT JOIN categoria C ON P.id_categoria = C.id_categoria";
$Producto = $dk_conn->query($qry_Producto);
$row_Producto = $Producto->fetch_assoc();

$qry_Cat = $dk_conn->query("SELECT * FROM categoria ORDER BY categoria ASC");
$Categoria = '<option value=""></option>';
$Categoria = '<option value=""></option>';
while($fila = $qry_Cat->fetch_array()){
	$Categoria.='<option value="'.$fila["id_categoria"].'">'.$fila["categoria"].'</option>';
}
?>