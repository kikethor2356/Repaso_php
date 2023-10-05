<?php
include 'includes/header.php';

class Empleado {

    //Constructor property Promotion
    

    public function __construct(
        public $nombre,
        public $apellido,
        public $departamento,
        public $email,
        public $codigo,
    ){}

}






//Esta es la instancia objeto de la clase empleado
$karen = new Empleado ("Juan", "Cisneros", "TI", "juan@empresa.com", 006);
$Lisa = new Empleado ("Lisa", "Cisneros", "MKT", "lisa@empresa.com", 007);

echo "<pre>";
var_dump($karen);
echo "<pre>";

echo "<pre>";
var_dump($Lisa);
echo "<pre>";