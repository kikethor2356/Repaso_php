<?php
include 'includes/header.php';


class Empleado {

     
    public $nombre;
    public $appellido;
    public $departamento;
    public $email;
    public $codigo;

}


//Esta es la instancia objeto de la clase empleado
$empleado1 = new Empleado;

 $empleado1->nombre = "Diego";
 $empleado1->appellido = "Gutierrez";

echo "<pre>";
var_dump($empleado1);
echo "<pre>";