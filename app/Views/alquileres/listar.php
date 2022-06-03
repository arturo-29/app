<?=$header?>
<a class="btn btn-success" href="<?=base_url('agregarAlquileres')?>">Agregar un alquiler</a>
    <br/>
    <br/>    
    <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Fecha de Salida</th>
                    <th>Fecha de Entrada</th>
                    <th>Lector</th>
                    <th>Libro</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($alquileres as $alquiler): ?>

                    <tr>
                        <td><?=$alquiler['id']; ?></td>
                        <td><?=$alquiler['fechaEntrada']; ?></td>
                        <td><?=$alquiler['fechaSalida']; ?></td>
                        <td><?=$alquiler['idLector']; ?></td>
                        <td><?=$alquiler['idLibro']; ?></td>
                        <td>
                            <a href="<?=base_url('editarAlquileres/'.$alquiler['id']);?>" class="btn btn-warning" type="button">Editar</a>
                            <a href="<?=base_url('borrarAlquileres/'.$alquiler['id']);?>" class="btn btn-danger" type="button">Borrar</a>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
<?=$footer?>