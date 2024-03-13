<?php

class Categoria{
    private $id;
    private $producto;
    private $stockminimo;
    private $stockmaximo;
    private $cantidaddisponible;
    private $estado;
    
    public function getId() {
        return $this->id;
    }

    public function getProducto() {
        return $this->producto;
    }

    public function getStockminimo() {
        return $this->stockminimo;
    }

    public function getStockmaximo() {
        return $this->stockmaximo;
    }

    public function getCantidaddisponible() {
        return $this->cantidaddisponible;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setProducto($producto): void {
        $this->producto = $producto;
    }

    public function setStockminimo($stockminimo): void {
        $this->stockminimo = $stockminimo;
    }

    public function setStockmaximo($stockmaximo): void {
        $this->stockmaximo = $stockmaximo;
    }

    public function setCantidaddisponible($cantidaddisponible): void {
        $this->cantidaddisponible = $cantidaddisponible;
    }

    public function setEstado($estado): void {
        $this->estado = $estado;
    }
}



