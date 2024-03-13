<?php

class Ubicacion{
    private $id;
    private $direccion;
    private $provincia;
    private $canton;
    private $distrito;
    private $estado0;
    
    public function getId() {
        return $this->id;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getProvincia() {
        return $this->provincia;
    }

    public function getCanton() {
        return $this->canton;
    }

    public function getDistrito() {
        return $this->distrito;
    }

    public function getEstado0() {
        return $this->estado0;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setDireccion($direccion): void {
        $this->direccion = $direccion;
    }

    public function setProvincia($provincia): void {
        $this->provincia = $provincia;
    }

    public function setCanton($canton): void {
        $this->canton = $canton;
    }

    public function setDistrito($distrito): void {
        $this->distrito = $distrito;
    }

    public function setEstado0($estado0): void {
        $this->estado0 = $estado0;
    }
}