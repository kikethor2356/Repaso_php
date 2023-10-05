<?php
include 'includes/header.php';

class Empleado {

     
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

}






//Esta es la instancia objeto de la clase empleado
$karen = new Empleado ("Juan", "Cisneros", "TI", "juan@empresa.com", 006);
$Lisa = new Empleado ("Lisa", "Cisneros", "MKT", "lisa@empresa.com", 006);

echo "<pre>";
var_dump($karen);
echo "<pre>";

echo "<pre>";
var_dump($Lisa);
echo "<pre>";