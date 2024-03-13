<?php

session_start();
require_once './Modelo/Conexion.php';
require_once './Modelo/Entidades/Cliente.php';
require_once './Modelo/Metodos/ClienteM.php';
require_once './Modelo/Entidades/Encargado.php';
require_once './Modelo/Metodos/EncargadoM.php';

class ClienteControlador {

    private function Validar() {
        if (isset($_SESSION['idEncargado'])) {
            $idEncargado = $_SESSION['idEncargado'];
            $encargado = new Encargado();
            $encargadoM = new EncargadoM();
            $encargado = $encargadoM->BuscarId($idEncargado);
            if ($encargado == null)
                header('Location: index.php');
        } else
            header('Location: index.php');
        return $encargado;
    }

    
     private function Todos()
    {

       $clientesm = new ClienteM();
        $Cliente = $ClienteM->Todos();     
        
        $ClientesTodos = array();
        foreach ($Cliente as $cliente)
        {
            $ClientesTodos[] = array
            (
                "ID" => $cliente->getID(),
                "Nombre" => $cliente->getNombre(),
                "Apellido1" => $cliente->getApellido1(),
                "Apellido2" => $cliente->getApellido2(),
                "Cedula" => $cliente->getCedula(),
                "Telefono" => $cliente->getTelefono()
            );
        }
        
        echo json_encode($ClientesTodos);
        
    }

    function Crear() {
        $e = $this->Validar();

        
        
        $cliente = new Cliente();
        $cliente->setNombre($_POST['NOMBRE']);
        $cliente->setApellido1($_POST['APELLIDO1']);
        $cliente->setApellido2($_POST['APELLIDO2']);
        $cliente->setCedula($_POST['CEDULA']);
        $cliente->setTelefono($_POST['TELEFONO']);
        $cliente->setEstado(true);

        $clientem = new ClienteM();

        if ($clientem->Nuevo($cliente)) {
            $_SESSION["mensaje"] = "Ingreso Exitoso";
            header("Location:./index.php?controlador=cliente&accion=Vista");
        } else {
            $_SESSION["mensaje"] = "Contacte con TI";
            header("Location:./index.php?controlador=cliente&accion=Vista");
        }
    }

    function Actualizar() {
        $e = $this->Validar();

        $id = $_POST["id"];
        if (isset($id)) {
            $clientem = new ClienteM();
            $cliente = new Cliente();
            $cliente = $clientem->BuscarId($id);
            if ($cliente != null) {
                $cliente->setNombre($_POST['NOMBRE']);
                $cliente->setApellido1($_POST['APELLIDO1']);
                $cliente->setApellido2($_POST['APELLIDO2']);
                $cliente->setCedula($_POST['CEDULA']);
                $cliente->setTelefono($_POST['TELEFONO']);

                if ($clientem->Actualizar($cliente)) {
                    $_SESSION["mensaje"] = "Actualizacion exitosa";
                    header("Location:./index.php?controlador=cliente&accion=Vista");
                } else {
                    $_SESSION["mensaje"] = "Error al actualizar, contacte con TI";
                    header("Location:./index.php?controlador=cliente&accion=Vista");
                }
            } else {
                $_SESSION["mensaje"] = "El cliente no existe";
                header("Location:./index.php?controlador=cliente&accion=Vista");
            }
        } else {
            $_SESSION["mensaje"] = "Error al seleccionar el cliente a actualizar";
            header("Location:./index.php?controlador=cliente&accion=Vista");
        }
    }

    
    function Desactivar()
    {
        $e = $this->Validar();
        $clientem = new ClienteM();
        $cliente = new Cliente();
        $cliente->setId($_POST["ID"]);
        $cliente->setEstado(0);
        if ($clientem->Estado($cliente)) {
            $_SESSION["mensaje"]="Cliente eliminado correctamente";
            header("Location:./index.php?controlador=cliente&accion=Vista");
        }
        else
        {
            $_SESSION["mensaje"]="Comuniquese con TI";
            header("Location:./index.php?controlador=cliente&accion=Vista");
        }
    }
    
    
    function Todos1()
    {
        $clientem = new ClienteM();
        $Cliente = $clientem->Todos();       
        
        $ClientesTodos = array();
        foreach ($Cliente as $cliente)
        {
            $ClientesTodos[] = array
            (
                "ID" => $cliente->getID(),
                "Nombre" => $cliente->getNombre(),
                "Cedula" => $cliente->getCedula(),
                "Telefono" => $cliente->getTelefono(),
                "Apellido1" => $cliente->getApellido1(),
                "Apellido2" => $cliente->getApellido2()
            );
        }
        
        echo json_encode($ClientesTodos);
    }   
    
    function Vista()
    {
        $e=$this->Validar();
        require_once './Vista/Clientes.html';
    }
    
    
    
}