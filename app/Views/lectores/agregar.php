<?=$header?>
    Formulario de agregar
    
    <div class="card">
        <div class="card-body">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?=base_url('listarLectores');?>" class="btn btn-primary">Regresar</a>
            </div>
            <h5 class="card-title">Ingresar datos del Lector</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('/guardarLectores')?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" value="<?=old('nombre')?>" class="form-control" type="text" required="" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Telefono</label>
                        <input id="nombre" value="<?=old('nombre')?>" class="form-control" type="tel" required="" name="telefono">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Direccion</label>
                        <input id="nombre" value="<?=old('nombre')?>" class="form-control" type="text" required="" name="direccion">
                    </div>
                    <button class="btn btn-success" type="submit">Agregar</button>
                </form>
            </p>
        </div>
    </div>
    

<?=$footer?>