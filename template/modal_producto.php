<div class="modal fade" id="categoriaNuevo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Nuevo Producto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form id="formNuevoProducto" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Producto</label>
                        <input type="text" class="form-control" id="productoNuevo" name="productoNuevo" placeholder="nombre.." required>
                    </div>
                    <div class="form-group">
                        <label>Categoría</label>
                        <select class="form-control" id="categoriaNuevo" name="categoriaNuevo" required><?php echo $Categoria; ?></select>
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="number" class="form-control" id="precioNuevo" name="precioNuevo" placeholder="0.0 Cop">
                    </div>
                    <div class="form-group">
                        <label>Descripción</label>
                        <textarea class="form-control" id="descripcionNuevo" name="descripcionNuevo" placeholder="Descripcion corta.." rows="2" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Imagen</label>
                        <input type="file" class="form-control-file" id="imagenNuevo" name="imagenNuevo">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
