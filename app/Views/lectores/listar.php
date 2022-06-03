<?=$header?>
<a class="btn btn-success" href="<?=base_url('agregarLectores')?>">Agregar un lector</a>
    <br/>
    <br/>    
    <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lectores as $lector): ?>

                    <tr>
                        <td><?=$lector['id']; ?></td>
                        <td><?=$lector['nombre']; ?></td>
                        <td><?=$lector['telefono']; ?></td>
                        <td><?=$lector['direccion']; ?></td>
                        <td>
                            <a href="<?=base_url('editarLectores/'.$lector['id']);?>" class="btn btn-warning" type="button">Editar</a>
                            <a href="<?=base_url('borrarLectores/'.$lector['id']);?>" class="btn btn-danger" type="button">Borrar</a>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
<?=$footer?>