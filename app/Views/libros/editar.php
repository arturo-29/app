<?=$header?>
    
    <div class="card">
        <div class="card-body">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?=base_url('listarLibros');?>" class="btn btn-primary">Regresar</a>
            </div>
            <h5 class="card-title">Ingresar datos del Libro</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('/actualizarLibros')?>" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?=$libro['id']?>">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" value="<?=$libro['nombre']?>" class="form-control" type="text" name="nombre">
                    </div>

                    <div class="form-group">
                        <label for="imagen">Imagen:</label><br/>
                        <img class="img-thumbnail" src="<?=base_url()?>/uploads/<?=$libro['imagen'];?>" 
                            width="100" alt=""> 
                        <input id="imagen" class="form-control-file" type="file" name="imagen">
                    </div>
                    <br/>
                    <button class="btn btn-warning" type="submit">Editar</button>
                </form>
            </p>
        </div>
    </div>
<?=$footer?>