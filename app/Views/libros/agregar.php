<?=$header?>
    Formulario de agregar
    
    <div class="card">
        <div class="card-body">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?=base_url('listarLibros');?>" class="btn btn-primary">Regresar</a>
            </div>
            <h5 class="card-title">Ingresar datos del Libro</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('/guardarLibros')?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" value="<?=old('nombre')?>" class="form-control" type="text" name="nombre">
                    </div>

                    <div class="form-group">
                        <label for="imagen">Imagen:</label>
                        <input id="imagen" class="form-control-file" type="file" name="imagen">
                    </div>
                    <button class="btn btn-success" type="submit">Agregar</button>
                </form>
            </p>
        </div>
    </div>
    

<?=$footer?>