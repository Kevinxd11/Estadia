<?php

namespace App\Controllers;
use Dompdf\Dompdf;


class Home extends BaseController
{
    public function index()
    {
        $vista=


        view('header').
         view('welcome_message');
         return $vista;
    }

    public function Usuario(){

        $vista=     view('header').
                    view('welcome_message').
                    view('Usuarios').
                    view('footer');
                    return $vista;
    }
    public function Citas(){

        $vista=     view('header').
                    view('welcome_message').
                    view('citas');
                    return $vista;
    }
    public function Baja(){

        $vista=     view('header').
                    view('welcome_message').
                    view('baja').
                    view('footer');
                    return $vista;
    }
    
    public function Tema(){

        $vista=     view('header').
                    view('welcome_message').
                    view('temas').
                    view('footer');  
                    return $vista;
    }
    public function Canalizacion(){

        $vista=     view('header').
                    view('welcome_message').
                    view('canalizacion').
                    view('footer');
                    return $vista;
    }
    public function Historial(){

        $vista=     view('header').
                    view('welcome_message').
                    view('historial').
                    view('footer');
                    return $vista;
    }

    public function demoPDF(){

        $dompdf = new Dompdf();
        $dompdf->loadHTML(view('canalizacion'));
        $dompdf->setPaper('A4','portrait');
        $dompdf->render();
        $dompdf->stream();
    }

    public function listasalumnos(){
        $Alumnos=  new Alumnos();
        $datos['Alumnos']= $Alumnos->orderBy('pkMatricula')->findAll();
        return view('Usuarios', $datos);
    }




}
