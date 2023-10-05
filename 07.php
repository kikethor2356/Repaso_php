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
    ){
        
    }


    public function nombreEmpleado()
    {
        echo $this->nombre. "" . $this->apellido;
    }


    public function departamentoEmpleado(){
        return $this->departamento;
    }

}



//Esta es la instancia objeto de la clase empleado
$karen = new Empleado ("Karen", "Cisneros", "TI", "juan@empresa.com", 006);
$Lisa = new Empleado ("Lisa", "Cisneros", "MKT", "lisa@empresa.com", 007);



echo "<pre>";
var_dump($karen);
echo "<pre>";

echo "<pre>";
var_dump($Lisa);
echo "<pre>";

$departamento1 = $karen->departamentoEmpleado();

echo $departamento1;