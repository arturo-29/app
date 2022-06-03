<?php 
namespace App\Models;

use CodeIgniter\Model;

class Lector extends Model{
    protected $table      = 'lectores';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'telefono', 'direccion'];

}