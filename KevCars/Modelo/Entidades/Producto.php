<?php


class Producto{
    private $id;
    private $descripcion;
    private $preciounitario;
    private $costo;
    private $categoria;
    private $stock;
    private $proveedor;
    private $estado;
    private $FOTO;
    
    public function getId() {
        return $this->id;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getPreciounitario() {
        return $this->preciounitario;
    }

    public function getCosto() {
        return $this->costo;
    }



    public function getStock() {
        return $this->stock;
    }


    public function setId($id): void {
        $this->id = $id;
    }

    public function setDescripcion($descripcion): void {
        $this->descripcion = $descripcion;
    }

    public function setPreciounitario($preciounitario): void {
        $this->preciounitario = $preciounitario;
    }

    public function setCosto($costo): void {
        $this->costo = $costo;
    }



    public function setStock($stock): void {
        $this->stock = $stock;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getProveedor() {
        return $this->proveedor;
    }

    public function setCategoria($categoria): void {
        $this->categoria = $categoria;
    }

    public function setProveedor($proveedor): void {
        $this->proveedor = $proveedor;
    }
    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado): void {
        $this->estado = $estado;
    }

    public function getFOTO() {
        return $this->FOTO;
    }

    public function setFOTO($FOTO): void {
        $this->FOTO = $FOTO;
    }



}

