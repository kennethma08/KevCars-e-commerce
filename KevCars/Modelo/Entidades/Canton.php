<?php

class Canton{
    private $id;
    private $descripcion;
    private $estado;
    private $provincia;
    
    public function getId() {
        return $this->id;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getProvincia() {
        return $this->provincia;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setDescripcion($descripcion): void {
        $this->descripcion = $descripcion;
    }

    public function setEstado($estado): void {
        $this->estado = $estado;
    }

    public function setProvincia($provincia): void {
        $this->provincia = $provincia;
    }
}
