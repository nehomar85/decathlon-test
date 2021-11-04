$(document).ready(function(){

    //POST Agregar Producto
    $("#formNuevoProducto").on("submit", function(c){
      c.preventDefault();
      $.ajax({
        type: "POST",
        url: "controllers/productos.php",
        data: $("#formNuevoProducto").serialize(),
        success: function(result){
          if (result == true) {
            alert("Producto agregado correctamente");
          }else{
            alert(result);
            window.location.reload(true);
          }
        }
      });
      return false;
    });
  
    //Modal Detalle Producto
    $(document).on('click', '.edit-producto', function(){
      var id=$(this).val();
      var producto=$('#producto'+id).text();
      var precio=$('#precio'+id).text();
      var categoria=$('#categoria'+id).text();
      var descripcion=$('#descripcion'+id).text();
      var imagen=$('#imagen'+id).text();
      $('#modalUpdProducto').modal('show');
      $('#idProducto').val(id);
      $('#productoUpd').val(producto);
      $('#precioUpd').val(precio);
      $('#categoriaUpd').val(categoria);
      $('#descripcionUpd').val(descripcion);
      $('#imagenUpd').val(imagen);
    });
  
    //PUT Update Producto
    $("#formUpdProducto").on("submit", function(e){
      e.preventDefault();
      $.ajax({
        type: "PUT",
        url: "controllers/productos.php",
        data: $("#formUpdProducto").serialize(),
        success: function(result){
          if (result == true) {
            alert("Producto actualizado exitosamente");
            window.location.reload(true);
          }else{
            alert(result);
          }
        }
      });
      return false;
    });
  
    //DELETE Eliminar Producto
    $(document).on('click', '.delete-producto', function(){
      var id=$(this).val();
      var producto=$('#producto'+id).text();
      var opcion = confirm('Desea eliminar el producto '+producto+'?');
      if (opcion == true) {
        $.ajax({
            type: "POST",
            url: "controllers/productos_detalle.php",
            data: "idProducto=" + id,
            success: function(result){
              if (result == true) {
                alert("Producto eliminado exitosamente");
                window.location.reload(true);
              }else{
                alert(result);
              }
            }
        });
      } else {
          return false;
      }
    });
  
});