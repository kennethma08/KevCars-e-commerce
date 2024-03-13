<?php

class Permiso{
    private $id;
    private $acceso;
    private $estado;
    
    public function getId() {
        return $this->id;
    }

    public function getAcceso() {
        return $this->acceso;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setAcceso($acceso): void {
        $this->acceso = $acceso;
    }

    public function setEstado($estado): void {
        $this->estado = $estado;
    }

}

