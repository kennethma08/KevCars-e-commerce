<?php

class DetallePedido{
    private $id;
    private $producto;
    private $cantidad;
    private $costolinea;
    private $costototal;
    private $subtotal;
    private $impuesto;
    private $costounitario;
    
    public function getId() {
        return $this->id;
    }

    public function getProducto() {
        return $this->producto;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function getCostolinea() {
        return $this->costolinea;
    }

    public function getCostototal() {
        return $this->costototal;
    }

    public function getSubtotal() {
        return $this->subtotal;
    }

    public function getImpuesto() {
        return $this->impuesto;
    }

    public function getCostounitario() {
        return $this->costounitario;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setProducto($producto): void {
        $this->producto = $producto;
    }

    public function setCantidad($cantidad): void {
        $this->cantidad = $cantidad;
    }

    public function setCostolinea($costolinea): void {
        $this->costolinea = $costolinea;
    }

    public function setCostototal($costototal): void {
        $this->costototal = $costototal;
    }

    public function setSubtotal($subtotal): void {
        $this->subtotal = $subtotal;
    }

    public function setImpuesto($impuesto): void {
        $this->impuesto = $impuesto;
    }

    public function setCostounitario($costounitario): void {
        $this->costounitario = $costounitario;
    }


}
