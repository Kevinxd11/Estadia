<?php 
namespace App\Models;

use CodeIgniter\Model;

class Usuarios extends Model{
    protected $table      = 'tlbalumnos';
     protected $primaryKey = 'pkMatricula';
     protected $allowedFields = ['vchNombre', '	vchApellidoP','vchApellidoM', 'dateFechaNacimiento','vchFoto'];
}