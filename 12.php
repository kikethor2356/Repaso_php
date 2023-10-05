<?php


include 'includes/header.php';

class Empleado {

  

    //Public, acceso en cualquier lugar (clase u objeto)
    //Protected, acceso en la clase

    //public, private, protected

    protected static $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct(string $nombre, string $apellido, string $departamento, string $email, int $codigo)
    {
        self::$nombre;
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


    public static function obtenerEmpleado(){
        echo "Desde el metodo static";
    }

    public static function getNombre(){
        return self::$nombre;
    }
}


$karen = new Empleado ("Karen", "Cisneros", "TI", "karen@empresa.com", 006);

echo $karen::getNombre();

echo "<pre>";
var_dump($karen);
echo "<pre>";


