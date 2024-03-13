<?php

class Distrito{
    private $id;
    private $descripcion;
    private $estado;
    private $canton;
    
    public function getId() {
        return $this->id;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getCanton() {
        return $this->canton;
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

    public function setCanton($canton): void {
        $this->canton = $canton;
    }
}

