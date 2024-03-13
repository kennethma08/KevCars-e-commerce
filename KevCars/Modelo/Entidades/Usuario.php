<?php

class Usuario{
    private $id;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $cedula;
    private $correo;
    private $tipousuario;
    private $estado;
    private $perfil;
    private $password;
    private $email;
    
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

    public function getCorreo() {
        return $this->correo;
    }

    public function getTipousuario() {
        return $this->tipousuario;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getPerfil() {
        return $this->perfil;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getEmail() {
        return $this->email;
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

    public function setCorreo($correo): void {
        $this->correo = $correo;
    }

    public function setTipousuario($tipousuario): void {
        $this->tipousuario = $tipousuario;
    }

    public function setEstado($estado): void {
        $this->estado = $estado;
    }

    public function setPerfil($perfil): void {
        $this->perfil = $perfil;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }


    
}
