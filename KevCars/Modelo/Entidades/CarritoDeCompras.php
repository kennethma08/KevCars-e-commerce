<?php

class CarritoDeCompras{
    private $id;
    private $producto;
    private $montopagar;
    private $cantidad;
    private $impuesto;
    private $totalneto;
    private $totalbruto;
    
    public function getId() {
        return $this->id;
    }

    public function getProducto() {
        return $this->producto;
    }

    public function getMontopagar() {
        return $this->montopagar;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function getImpuesto() {
        return $this->impuesto;
    }

    public function getTotalneto() {
        return $this->totalneto;
    }

    public function getTotalbruto() {
        return $this->totalbruto;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setProducto($producto): void {
        $this->producto = $producto;
    }

    public function setMontopagar($montopagar): void {
        $this->montopagar = $montopagar;
    }

    public function setCantidad($cantidad): void {
        $this->cantidad = $cantidad;
    }

    public function setImpuesto($impuesto): void {
        $this->impuesto = $impuesto;
    }

    public function setTotalneto($totalneto): void {
        $this->totalneto = $totalneto;
    }

    public function setTotalbruto($totalbruto): void {
        $this->totalbruto = $totalbruto;
    }
}
