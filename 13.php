<?php
include 'includes/header.php';

include 'DB.php';

//Comicar dos clases

class Empleado {

    protected $nombre;
    protected $apellido;
    protected $departamento;
    protected $email;
    protected $codigo;

    public function __construct(string $nombre, string $apellido, string $departamento, string $email, $codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

    /*
        Get - Para obtener un valor
        Set - Para modificar un valor
    */


    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }


    public function getApellido(){
        return $this->apellido;
    }

    public function setDepartamento($departamento){
        $this->departamento = $departamento;
    }

    public function getDepartamento(){
        return $this->departamento;
    }


}



//Esta es la instancia objeto de la clase empleado
$karen = new Empleado ("Karen", "Cisneros", "TI", "juan@empresa.com", 006);
$nombre = $karen->getNombre();


$db = new DB($nombre);
$db->save();

