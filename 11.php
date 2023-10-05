<?php
include 'includes/header.php';

//Clses Abtractas

abstract class Persona{
    Protected $nombre;
    Protected $apellido;
    Protected $email;
    Protected $telefono;

    public function __construct($nombre, $apellido, $email, $telefono)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
       
    }

    public function mostrarDatos(){
        echo "Nombre: " . $this->nombre . "" . $this->apellido . "" . "Email: " . $this->email; 
    }

    public function getTelefono(){
        return $this->telefono;
    }
}






class Empleado extends Persona{

    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->codigo = $codigo;
        $this->departamento = $departamento;

    }


}

class Proveedor extends Persona{
  
    protected $empresa;

    public function __construct($nombre, $apellido, $email, $telefono, $empresa)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->empresa = $empresa;

    }
}


$persona = new Empleado ("Lisa", "Gutierrez", "mkt", "lisa@empresa.com", 3326777030, 005);
$empleado = new Empleado ("Karen", "Cisneros", "TI", "karen@empresa.com", 3326770713, 006);
$proveedor = new Proveedor("Josue", "Cisneros", "josue.23.10@gmail.com", 332677890, "Oracle");

echo "<pre>";
var_dump($empleado);
echo "</pre><br>";



echo "<pre>";
var_dump($empleado);
echo "</pre><br>";

echo "<pre>";
var_dump($proveedor);
echo "</pre><br>";


$empleado->mostrarDatos();

echo "<br>";

$proveedor->mostrarDatos();

echo "<br>";

 echo $proveedor->getTelefono();