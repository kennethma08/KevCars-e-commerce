<?php

class CategoriaM {

    function Nuevo(Categoria $categoria) {
        $conexion = new Conexion();
        $sql = "INSERT INTO `Categoria` (`descripcion`, `estado`) VALUES"
                . "('" . $categoria->getDescripcion() . "','" . $categoria->getEstado(). "');";
        $retVal = $conexion->Ejecutar($sql);
        $conexion->Cerrar();

        return $retVal;
    }

    function Todos() {
        $retVal = array();
        $conexion = new Conexion();

        $sql = 'SELECT * FROM Categoria';
        $resultado = $conexion->Ejecutar($sql);

        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $categoria = new Categoria();
                $categoria->setId($fila['IdCategoria']);
                $categoria->setDescripcion($fila['descripcion']);
                $categoria->setEstado($fila['estado']);
 
                $retVal[] = $categoria;
            }
        } else {
            $retVal = null;
        }

        $conexion->Cerrar();

        return $retVal;
    }

    function BuscarId(int $id) {
        $categoria = new Categoria();
        $conexion = new Conexion();
        $sql = "SELECT * FROM `Categoria` WHERE `IdCategoria`=$id AND `estado`=1;";
        $resultado = $conexion->Ejecutar($sql);
        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $categoria->setId($fila['IdCategoria']);
                $categoria->setDescripcion($fila['descripcion']);
                $categoria->setEstado($fila['estado']);
            }
        } else {
            $categoria = null;
        }
        $conexion->Cerrar();
        return $categoria;
    }

    function Actualizar(Categoria $categoria) {
        $retVal = false;
        $conexion = new Conexion();
        $sql = "UPDATE `Categoria` SET `descripcion`='" . $categoria->getDescripcion(). "' WHERE `IdCategoria`=" . $categoria->getId() . " ;";
        if ($conexion->Ejecutar($sql)) {
            $retVal = true;
        }
        $conexion->Cerrar();

        return $retVal;
    }

    //eliminar
    function Estado(Categoria $categoria) {
        $retVal = false;
        $conexion = new Conexion();
        $sql = "UPDATE `Categoria` SET `estado`=" . $categoria->getEstado() . " WHERE `IdCategoria`=" . $categoria->getId() . ";";
        if ($conexion->Ejecutar($sql)) {
            $retVal = true;
        }
        $conexion->Cerrar();

        return $retVal;
    }

}
