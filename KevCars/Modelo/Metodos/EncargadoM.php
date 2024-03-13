<?php

class EncargadoM 
{
    
    function Nuevo(Encargado $encargado) {
        $retVal = false;
        $conexion = new Conexion();
        $sql = "INSERT INTO `KENNETHENCARGADO`("
                . " `NOMBRE`,"
                . " `APELLIDO1`,"
                . " `APELLIDO2`,"
                . " `CEDULA`,"
                . " `TELEFONO`,"
                . " `CORREO`)"
                . " `PASS`,"
                . " `ESTADO`)"
                . " VALUES"
                . " ('" . $encargado->getNombre() . "',"
                . "'" . $encargado->getApellido1() . "',"
                . "'" . $encargado->getApellido2() . "',"
                . "'" . $encargado->getCedula() . "',"
                . "'" . $encargado->getTelefono() . "',"
                . "'" . $encargado->getCorreo() . "',"
                . "'" . $encargado->getPass() . "',"
                . $encargado->getEstado() . ");";
        if ($conexion->Ejecutar($sql))
            $retVal = true;
        $conexion->Cerrar();

        return $retVal;
    }

    
    function Todos() {
        $retVal = array();
        $conexion = new Conexion();
        
        $sql = 'SELECT * FROM KENNETHENCARGADO';
        $resultado = $conexion->Ejecutar($sql);

        if (mysqli_num_rows($resultado) > 0) 
        {
            while ($fila = $resultado->fetch_assoc()) 
            {
                $encargado=new Encargado();
                $encargado->setId($fila["ID"]);
                $encargado->setNombre($fila["NOMBRE"]);
                $encargado->setApellido1($fila["APELLIDO1"]);
                $encargado->setApellido2($fila["APELLIDO2"]);
                $encargado->setCedula($fila["CEDULA"]);
                $encargado->setTelefono($fila["TELEFONO"]);
                $encargado->setCorreo($fila["CORREO"]);
                $encargado->setPass($fila["PASS"]);
                $encargado->setEstado($fila["ESTADO"]);
                $retVal[] = $encargado;
            }
        } else
            $retVal = null;
        
        $conexion->Cerrar();

        return $retVal;
    }
    
    
    

    function BuscarId($id) {
        $encargado = new Encargado();
        $conexion = new Conexion();
        $sql = "SELECT * FROM `KENNETHENCARGADO` WHERE `ID` = $id;";
        $resultado = $conexion->Ejecutar($sql);

        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $encargado->setId($fila["ID"]);
                $encargado->setNombre($fila["NOMBRE"]);
                $encargado->setApellido1($fila["APELLIDO1"]);
                $encargado->setApellido2($fila["APELLIDO2"]);
                $encargado->setCedula($fila["CEDULA"]);
                $encargado->setTelefono($fila["TELEFONO"]);
                $encargado->setCorreo($fila["CORREO"]);
                $encargado->setPass($fila["PASS"]);
                $encargado->setEstado($fila["ESTADO"]);
            }
        } else
            $encargado = null;
        $conexion->Cerrar();
        return $encargado;
    }

    function BuscarCorreo($correo) {
        $encargado = new Encargado();
        $conexion = new Conexion();
        
        $sql = "SELECT * FROM `KENNETHENCARGADO` WHERE `CORREO` = '$correo';";
        $resultado = $conexion->Ejecutar($sql);

        if (mysqli_num_rows($resultado)>0) 
        {
            while ($fila = $resultado->fetch_assoc()) 
            {
                $encargado->setId($fila["ID"]);
                $encargado->setNombre($fila["NOMBRE"]);
                $encargado->setCorreo($fila["CORREO"]);
                $encargado->setPass($fila["PASS"]);
            }
        } else
            $encargado = null;
        $conexion->Cerrar();
        return $encargado;
    }



    function ActualizarContra(Estudiante $encargado) {
        $retVal = false;
        $conexion = new Conexion();
        $sql = "UPDATE `KENNETHENCARGADO` SET `PASS`='" . $encargado->getPass() . "' WHERE `ID`=" . $encargado->getId() . ";";
        if ($conexion->Ejecutar($sql))
            $retVal = true;
        $conexion->Cerrar();

        return $retVal;
    }

    function Actualizar(Encargado $encargado) {
        $conexion = new Conexion();
        $sql = "UPDATE `KENNETHENCARGADO` SET `NOMBRE`='" . $encargado->getNombre() . "',`APELLIDO1`='" . $encargado->getApellido1() . "',`APELLIDO2`='" . $encargado->getApellido2() . "',`CEDULA`=" . $encargado->getCedula(). "',`TELEFONO`='" . $encargado->getTelefono() . "',`CORREO`='" . $encargado->getCorreo() . "',`PASS`='" . $encargado->getPass() .   " WHERE `ID`=" . $encargado->getId() . " ;";
        $MSJ = $conexion->Ejecutar($sql);
        $conexion->Close();
        return $MSJ;
    }
}
