<?php
include 'includes/header.php';
//Modificadores de acceso
class Empleado {

  

    //Public, acceso en cualquier lugar (clase u objeto)
    //Protected, acceso en la clase

    //public, private, protected

    protected $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct(string $nombre, string $apellido, string $departamento, string $email, int $codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

    public function cambiarNombre($nombre){
        $this->nombre = $nombre;
    }

    public function obtenerNombre(){
        return $this->nombre;
    }
}



//Esta es la instancia objeto de la clase empleado
$karen = new Empleado ("Karen", "Cisneros", "TI", "juan@empresa.com", 006);

$karen->cambiarNombre("Kike");
echo $karen->obtenerNombre();

echo "<pre>";
var_dump($karen);
echo "<pre>";


