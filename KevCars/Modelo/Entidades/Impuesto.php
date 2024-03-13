<?php

class Impuesto{
    private $id;
    private $Codigotarifa;
    private $tarifa;
    private $Factoriva;
    private $monto;
    private $estado;
    
    public function getId() {
        return $this->id;
    }

    public function getCodigotarifa() {
        return $this->Codigotarifa;
    }

    public function getTarifa() {
        return $this->tarifa;
    }

    public function getFactoriva() {
        return $this->Factoriva;
    }

    public function getMonto() {
        return $this->monto;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setCodigotarifa($Codigotarifa): void {
        $this->Codigotarifa = $Codigotarifa;
    }

    public function setTarifa($tarifa): void {
        $this->tarifa = $tarifa;
    }

    public function setFactoriva($Factoriva): void {
        $this->Factoriva = $Factoriva;
    }

    public function setMonto($monto): void {
        $this->monto = $monto;
    }

    public function setEstado($estado): void {
        $this->estado = $estado;
    }


    
}

