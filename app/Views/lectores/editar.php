<?=$header?>
    
    <div class="card">
        <div class="card-body">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?=base_url('listarLectores');?>" class="btn btn-primary">Regresar</a>
            </div>
            <h5 class="card-title">Ingresar datos del Libro</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('/actualizarLectores')?>" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?=$lector['id']?>">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" value="<?=$lector['nombre']?>" class="form-control" required="" type="text" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Telefono</label>
                        <input id="telefono" value="<?=$lector['telefono']?>" class="form-control" required="" type="tel" name="telefono">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección</label>
                        <input id="direccion" value="<?=$lector['direccion']?>" class="form-control" required="" type="text" name="direccion">
                    </div>
                    <br/>
                    <button class="btn btn-warning" type="submit">Editar</button>
                </form>
            </p>
        </div>
    </div>
<?=$footer?>