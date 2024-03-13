<?php

class ClienteM {

    function Nuevo(Cliente $cliente) {
        $conexion = new Conexion();
        $sql = "INSERT INTO `KENNETHCLIENTE` (`NOMBRE`, `APELLIDO1`, `APELLIDO2`, `CEDULA`, `TELEFONO`, `ESTADO`) VALUES"
                . "('" . $cliente->getNombre() . "','" . $cliente->getApellido1() . "','" . $cliente->getApellido2() . "','" . $cliente->getCedula() . "','" . $cliente->getTelefono() . "','" . $cliente->getEstado() . "');";
        $retVal = $conexion->Ejecutar($sql);
        $conexion->Cerrar();

        return $retVal;
    }

    function Todos() {
        $retVal = array();
        $conexion = new Conexion();

        $sql = 'SELECT * FROM KENNETHCLIENTE';
        $resultado = $conexion->Ejecutar($sql);

        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $cliente = new Cliente();
                $cliente->setId($fila['ID']);
                $cliente->setNombre($fila['NOMBRE']);
                $cliente->setApellido1($fila['APELLIDO1']);
                $cliente->setApellido2($fila['APELLIDO2']);
                $cliente->setCedula($fila['CEDULA']);
                $cliente->setTelefono($fila['TELEFONO']);
                $cliente->setEstado($fila['ESTADO']);
 
                $retVal[] = $cliente;
            }
        } else {
            $retVal = null;
        }

        $conexion->Cerrar();

        return $retVal;
    }

    function BuscarId(int $id) {
        $cliente = new Cliente();
        $conexion = new Conexion();
        $sql = "SELECT * FROM `KENNETHCLIENTE` WHERE `ID`=$id AND `ESTADO`=1;";
        $resultado = $conexion->Ejecutar($sql);
        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $cliente->setId($fila['ID']);
                $cliente->setNombre($fila['NOMBRE']);
                $cliente->setApellido1($fila['APELLIDO1']);
                $cliente->setApellido2($fila['APELLIDO2']);
                $cliente->setCedula($fila['CEDULA']);
                $cliente->setTelefono($fila['TELEFONO']);
                $cliente->setEstado($fila['ESTADO']);
            }
        } else {
            $cliente = null;
        }
        $conexion->Cerrar();
        return $cliente;
    }

    function Actualizar(Cliente $cliente) {
        $retVal = false;
        $conexion = new Conexion();
        $sql = "UPDATE `KENNETHCLIENTE` SET `NOMBRE`='" . $cliente->getNombre() . "',`APELLIDO1`='" . $cliente->getApellido1() . "',`APELLIDO2`='" . $cliente->getApellido2() . "',`CEDULA`='" . $cliente->getCedula() . "',`TELEFONO`='" . $cliente->getTelefono() . "' WHERE `ID`=" . $cliente->getId() . " ;";
        if ($conexion->Ejecutar($sql)) {
            $retVal = true;
        }
        $conexion->Cerrar();

        return $retVal;
    }

    function Estado(Cliente $cliente) {
        $retVal = false;
        $conexion = new Conexion();
        $sql = "UPDATE `KENNETHCLIENTE` SET `ESTADO`=" . $cliente->getEstado() . " WHERE `ID`=" . $cliente->getId() . ";";
        if ($conexion->Ejecutar($sql)) {
            $retVal = true;
        }
        $conexion->Cerrar();

        return $retVal;
    }

}
