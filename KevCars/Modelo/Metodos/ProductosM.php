<?php

class ProductoM {
    
    
    function Crear(Producto $producto) {
        $conexion = new Conexion();
$sql = "INSERT INTO `ProductoKenn` (`descripcion`, `Preciounitario`, `Costo`, `IdCategoria`, `IdStock`, `FOTO`, `IdProveedor`, `estado`) VALUES"
       . "('" . $producto->getDescripcion() . "','" . $producto->getPreciounitario() . "','" . $producto->getCosto() . "','" . $producto->getCategoria() . "','" . $producto->getStock() . "','" . $producto->getFOTO() . "','" . $producto->getProveedor() . "','" . $producto->getEstado() . "');";

        $retVal = $conexion->Ejecutar($sql);
        $conexion->Cerrar();

        return $retVal;
    }

    function Todos() {
        $retVal = array();
        $conexion = new Conexion();

        $sql = 'SELECT * FROM ProductoKenn';
        $resultado = $conexion->Ejecutar($sql);

        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $producto = new Producto();
                $producto->setId($fila['Id']);
                $producto->setDescripcion($fila['descripcion']);
                $producto->setPreciounitario($fila['Preciounitario']);
                $producto->setCosto($fila['Costo']);
                $producto->setCategoria($fila['IdCategoria']);
                $producto->setStock($fila['IdStock']);
                $producto->setFOTO($fila['FOTO']);
                $producto->setProveedor($fila['IdProveedor']);
                $producto->setEstado($fila['estado']);           
                $retVal[] = $producto;
            }
        } else
            $retVal = null;

        $conexion->Cerrar();

        return $retVal;
    }

    function BuscarId(int $id) {
        $producto = new Producto();
        $conexion = new Conexion();
        $sql = "SELECT * FROM `ProductoKenn` WHERE `Id`=$id AND `estado`=1;";
        $resultado = $conexion->Ejecutar($sql);
        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $producto->setId($fila['Id']);
                $producto->setDescripcion($fila['descripcion']);
                $producto->setPreciounitario($fila['Preciounitario']);
                $producto->setCosto($fila['Costo']);
                $producto->setCategoria($fila['IdCategoria']);
                $producto->setStock($fila['IdStock']);
                $producto->setFOTO($fila['FOTO']);
                $producto->setProveedor($fila['IdProveedor']);
                $producto->setEstado($fila['estado']);    
            }
        } else
            $producto = null;
        $conexion->Cerrar();
        return $equipo;
    }
    
function BuscarCategoria($categoria)
{
    $productos = array(); // Usaremos un array para almacenar los productos

    $conexion = new Conexion();
    $sql = "SELECT * FROM `ProductoKenn` WHERE `IdCategoria` = '$categoria';";
    $resultado = $conexion->Ejecutar($sql);

    if(mysqli_num_rows($resultado) > 0)
    {
        while($fila = $resultado->fetch_assoc())
        {
            $producto = new Producto();
            $producto->setId($fila['Id']);
            $producto->setDescripcion($fila['descripcion']);
            $producto->setPreciounitario($fila['Preciounitario']);
            $producto->setCosto($fila['Costo']);
            $producto->setCategoria($fila['IdCategoria']);
            $producto->setStock($fila['IdStock']);
            $producto->setFOTO($fila['FOTO']);
            $producto->setProveedor($fila['IdProveedor']);
            $producto->setEstado($fila['estado']);

            $productos[] = $producto; // Agregamos el producto al array
        }
    }

    $conexion->Cerrar();
    return $productos; // Devolvemos el array de productos
}


    function Actualizar(Producto $producto) {
        $retVal = false;
        $conexion = new Conexion();
        $sql = "UPDATE `ProductoKenn` SET `descripcion`='" . $producto->getDescripcion() . "',`Preciounitario`='" . $producto->getPreciounitario(). "',`Costo`='" . $producto->getCosto(). "',`IdCategoria`='" . $producto->getCategoria(). "',`IdStock`='" . $producto->getStock(). "',`FOTO`='" . $producto->getFOTO(). "',`IdProveedor`='" . $producto->getProveedor() . " WHERE `Id`=" . $producto->getId() . " ;";
        if ($conexion->Ejecutar($sql))
            $retVal = true;
        $conexion->Cerrar();

        return $retVal;
    }
        function Estado(Producto $producto) {
        $retVal = false;
        $conexion = new Conexion();
        $sql = "UPDATE `ProductoKenn` SET `estado`=" . $producto->getEstado() . " WHERE `Id`=" . $producto->getId() . ";";
        if ($conexion->Ejecutar($sql)) {
            $retVal = true;
        }
        $conexion->Cerrar();

        return $retVal;
    }
}

