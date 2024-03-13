<?php

class Perfil{
    private $id;
    private $descripcion;
    private $permiso;
    private $estado;
    
    public function getId() {
        return $this->id;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getPermiso() {
        return $this->permiso;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setDescripcion($descripcion): void {
        $this->descripcion = $descripcion;
    }

    public function setPermiso($permiso): void {
        $this->permiso = $permiso;
    }

    public function setEstado($estado): void {
        $this->estado = $estado;
    }

}