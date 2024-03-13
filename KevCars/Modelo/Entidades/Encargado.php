<?php

class Encargado{
    private $id;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $cedula;
    private $telefono;
    private $correo;
    private $pass;    
    private $estado;
    
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

    public function getCedula() {
        return $this->cedula;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getPass() {
        return $this->pass;
    }

    public function getEstado() {
        return $this->estado;
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

    public function setCedula($cedula): void {
        $this->cedula = $cedula;
    }

    public function setTelefono($telefono): void {
        $this->telefono = $telefono;
    }

    public function setCorreo($correo): void {
        $this->correo = $correo;
    }

    public function setPass($pass): void {
        $this->pass = $pass;
    }

    public function setEstado($estado): void {
        $this->estado = $estado;
    }
}