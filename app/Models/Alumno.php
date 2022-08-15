<?php 
namespace App\Models;

use CodeIgniter\Model;

class Alumno extends Model{
    protected $table      = 'tblalumnos';
    protected $primaryKey = 'pkMatricula';
    protected $allowedFields = ['vchNombre', '	vchApellidoP','vchApellidoM', 'dateFechaNacimiento','vchFoto'];
}