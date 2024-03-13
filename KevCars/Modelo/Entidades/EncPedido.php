<?php


class EncPedido{
    private $id;
    private $detallepedido;
    private $usuario;
    private $fecha;
    private $montopagar;
    private $cliente;
    private $numeropedido;
    
    public function getId() {
        return $this->id;
    }

    public function getDetallepedido() {
        return $this->detallepedido;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getMontopagar() {
        return $this->montopagar;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getNumeropedido() {
        return $this->numeropedido;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setDetallepedido($detallepedido): void {
        $this->detallepedido = $detallepedido;
    }

    public function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    public function setFecha($fecha): void {
        $this->fecha = $fecha;
    }

    public function setMontopagar($montopagar): void {
        $this->montopagar = $montopagar;
    }

    public function setCliente($cliente): void {
        $this->cliente = $cliente;
    }

    public function setNumeropedido($numeropedido): void {
        $this->numeropedido = $numeropedido;
    }


}



