<?php
include 'includes/header.php';

class DB{


    protected $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function save(){
        echo "Guardando..." . $this->nombre; 
    }

}