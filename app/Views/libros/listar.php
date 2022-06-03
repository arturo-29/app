<?=$header?>
<a class="btn btn-success" href="<?=base_url('agregarLibros')?>">Agregar un libro</a>
    <br/>
    <br/>    
    <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($libros as $libro): ?>

                    <tr>
                        <td><?=$libro['id']; ?></td>
                        <td>
                            <img class="img-thumbnail" src="<?=base_url()?>/uploads/<?=$libro['imagen'];?>" 
                            width="100" alt=""> 
                        </td>
                        <td><?=$libro['nombre']; ?></td>
                        <td>
                            <a href="<?=base_url('editarLibros/'.$libro['id']);?>" class="btn btn-warning" type="button">Editar</a>
                            <a href="<?=base_url('borrarLibros/'.$libro['id']);?>" class="btn btn-danger" type="button">Borrar</a>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
<?=$footer?>