<div class="modal fade" id="modalUpdProducto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Detalle Producto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form id="formUpdProducto">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Producto</label>
                        <input type="text" class="form-control" id="productoUpd" name="productoUpd" placeholder="nombre.." required>
                        <input type="text" class="form-control" id="idProducto" name="idProducto" hidden>
                    </div>
                    <div class="form-group">
                        <label>Categoría</label>
                        <select class="form-control" id="categoriaUpd" name="categoriaUpd" required><?php echo $Categoria2; ?></select>
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="number" class="form-control" id="precioUpd" name="precioUpd" placeholder="0.0 Cop">
                    </div>
                    <div class="form-group">
                        <label>Descripción</label>
                        <textarea class="form-control" id="descripcionUpd" name="descripcionUpd" placeholder="Descripcion corta.." rows="2" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Imagen</label>
                        <input type="file" class="form-control-file" id="imagenUpd" name="imagenUpd">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
