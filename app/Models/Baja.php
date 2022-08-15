<?php 
namespace App\Models;

use CodeIgniter\Model;

class Baja extends Model{
    protected $table      = 'tblbajas';
    protected $primaryKey = 'pkBaja';
    protected $allowedFields = [
    'programaedu',
    'nombre',
    'apellidoP',
    'apellidoM',
    'matricula', 
    'cuatrimestre',
    'grupo',
    'periodo',
    'fechadenac',
    'motivo'];
}