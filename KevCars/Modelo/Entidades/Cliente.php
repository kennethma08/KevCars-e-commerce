<?php

class Cliente{
    
    private $id;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $direccion;
    private $correo;
    private $telefono;
    private $estado;
    private $ubicacion;
    

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido1() {
        return $this->apellido1;
    }

    public function getApellido2() {
        return $this->apellido2;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getUbicacion() {
        return $this->ubicacion;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setApellido1($apellido1): void {
        $this->apellido1 = $apellido1;
    }

    public function setApellido2($apellido2): void {
        $this->apellido2 = $apellido2;
    }

    public function setDireccion($direccion): void {
        $this->direccion = $direccion;
    }

    public function setCorreo($correo): void {
        $this->correo = $correo;
    }

    public function setTelefono($telefono): void {
        $this->telefono = $telefono;
    }

    public function setEstado($estado): void {
        $this->estado = $estado;
    }

    public function setUbicacion($ubicacion): void {
        $this->ubicacion = $ubicacion;
    }
}

