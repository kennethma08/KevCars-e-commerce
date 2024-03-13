<?php

class Proveedor{
    private $id;
    private $nombre;
    private $estado;
    private $telefono;
    private $tipoproveedor;
    
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getTipoproveedor() {
        return $this->tipoproveedor;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setEstado($estado): void {
        $this->estado = $estado;
    }

    public function setTelefono($telefono): void {
        $this->telefono = $telefono;
    }

    public function setTipoproveedor($tipoproveedor): void {
        $this->tipoproveedor = $tipoproveedor;
    }


}