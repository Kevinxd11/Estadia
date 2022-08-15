<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Alumno;
use App\Models\Baja;

class Alumnos extends Controller{

    //Lista los alumnos de la tabla tblalumnos
    public function listas($pkMatricula=null){

        $alumno= new Alumno();
        $datos['pkMatricula']=$pkMatricula;
        $datos['alumnos']= $alumno->orderBy('pkMatricula', 'ASC')->findAll();

        $datos['header'] =view ('header');
        $datos['welcome_message'] =view ('welcome_message');
   

        return view('alumnos/listas', $datos);
    }

    //direcciona al formulario de baja
    public function baja(){

        $datos['header'] =view ('header');
        $datos['welcome_message'] =view ('welcome_message');
   
        return view('alumnos/baja', $datos);
    }

    //Funcion para guardar alumno en la tabla tblbajas
    public function guardar(){

          $baja= new Baja();
  
              $datos=[
                  'programaedu'=>$this->request->getVar('programaedu'),
                  'nombre'=>$this->request->getVar('nombre'),
                  'apellidoP'=>$this->request->getVar('apellidP'),
                  'apellidoM'=>$this->request->getVar('apellidoM'),
                  'matricula'=>$this->request->getVar('matricula'),
                  'cuatrimestre'=>$this->request->getVar('cuatrimestre'),
                  'grupo'=>$this->request->getVar('grupo'),
                  'periodo'=>$this->request->getVar('periodo'),
                  'motivo'=>$this->request->getVar('motivo')
              ];
              
              $datos['header'] =view ('header');
              $datos['welcome_message'] =view ('welcome_message');
         
              $baja->insert($datos);
                
              echo '<script type="text/javascript">'
              , 'alert("Reporte creado con existo");'
              , '</script>';

              return view('alumnos/baja', $datos);
    }
}