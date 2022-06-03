<?=$header?>
    
    <div class="card">
        <div class="card-body">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?=base_url('listarAlquileres');?>" class="btn btn-primary">Regresar</a>
            </div>
            <h5 class="card-title">Ingresar datos del Alquiler</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('/actualizarAlquileres')?>" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?=$alquiler['id']?>">
                    <div class="form-group">
                        <label for="fechaEntrada">Fecha de Entrada</label>
                        <input id="fechaEntrada" value="<?=$alquiler['fechaEntrada']?>" class="form-control" required="" type="date" name="fechaEntrada">
                    </div>
                    <div class="form-group">
                        <label for="fechaSalida">Fecha de Salida</label>
                        <input id="fechaSalida" value="<?=$alquiler['fechaSalida']?>" class="form-control" required="" type="date" name="fechaSalida">
                    </div>
                    <div class="form-group">
                        <label for="idLector">Lector</label>
                        <input id="idLector" value="<?=$alquiler['idLector']?>" class="form-control" required="" type="int" name="idLector">
                    </div>
                    <div class="form-group">
                        <label for="idLibro">Libro</label>
                        <input id="idLibro" value="<?=$alquiler['idLibro']?>" class="form-control" required="" type="int" name="idLibro">
                    </div>
                    <br/>
                    <button class="btn btn-warning" type="submit">Editar</button>
                </form>
            </p>
        </div>
    </div>
<?=$footer?>