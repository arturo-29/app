<?php 
namespace App\Models;

use CodeIgniter\Model;

class Alquiler extends Model{
    protected $table      = 'alquileres';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['fechaSalida', 'fechaEntrada', 'idLector', 'idLibro'];

}