<?=$header?>
    Formulario de agregar
    
    <div class="card">
        <div class="card-body">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="<?=base_url('listarAlquileres');?>" class="btn btn-primary">Regresar</a>
            </div>
            <h5 class="card-title">Ingresar datos del Alquiler</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('/guardarAlquileres')?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="fechaSalida">Fecha de Salida</label>
                        <input id="fechaSalida" value="<?=old('fechaSalida')?>" class="form-control" type="date" required="" name="fechaSalida">
                    </div>
                    <div class="form-group">
                        <label for="fechaEntrada">Fecha de Entrada</label>
                        <input id="fechaEntrada" value="<?=old('fechaEntrada')?>" class="form-control" type="date" required="" name="fechaEntrada">
                    </div>
                    <div class="form-group">
                        <label for="idLector">Lector</label>
                        <input id="idLector" value="<?=old('idLector')?>" class="form-control" type="int" required="" name="idLector">
                    </div>
                    <div class="form-group">
                        <label for="idLibro">Libro</label>
                        <input id="idLibro" value="<?=old('idLibro')?>" class="form-control" type="int" required="" name="idLibro">
                    </div>
                    <button class="btn btn-success" type="submit">Agregar</button>
                </form>
            </p>
        </div>
    </div>
    

<?=$footer?>