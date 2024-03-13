<?php

session_start();
require_once './Modelo/Conexion.php';
require_once './Modelo/Entidades/Encargado.php';
require_once './Modelo/Metodos/EncargadoM.php';

class EncargadoControlador {

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

    function Menu()
    {
        //$e=$this->Validar();
        require_once './Vista/MenuEncargado.html';
    }

    
    
    function Crear() {
        //$e = $this->Validar();

        $encargado = new Encargado();
        $encargado->setNombre($_POST["NOMBRE"]);
        $encargado->setApellido1($_POST["APELLIDO1"]);
        $encargado->setApellido2($_POST["APELLIDO2"]);
        $encargado->setCedula($_POST["CEDULA"]);
        $encargado->setTelefono($_POST["TELEFONO"]);
        $encargado->setCorreo($_POST["CORREO"]);
        $encargado->setPass(password_hash($_POST["PASS"], PASSWORD_DEFAULT));
        $encargado->setEstado(true);

        $encargadoM = new EncargadoM();
        $encarg = new Encargado();
        $encarg = $encargadoM->BuscarCorreo($encargado->getCorreo());
        if ($encarg == null) {
            if ($encargadoM->Nuevo($encargado)) {
                $_SESSION["mensaje"] = "Ingreso Exitoso";
                header("Location:./index.php?controlador=encargado&accion=Vista");
            } else {
                $_SESSION["mensaje"] = "Error al ingresar, intentelo de nuevo";
                header("Location:./index.php?controlador=encargado&accion=Vista");
            }
        } else {
            $_SESSION["mensaje"] = "El correo ya existe en el sistema";
            header("Location:./index.php?controlador=encargado&accion=Vista");
        }
    }

    function Actualizar() {
        //$e = $this->Validar();

        $id = $_POST["id"];
        if (isset($id)) {
            $encargadoM = new EncargadoM();
            $encargado = new Encargado();
            $encargado = $encargadoM->BuscarId($id);
            if ($encargado != null) {
                $encargado->setNombre($_POST["NOMBRE"]);
                $encargado->setApellido1($_POST["APELLIDO1"]);
                $encargado->setApellido2($_POST["APELLIDO2"]);
                $encargado->setCedula($_POST["CEDULA"]);
                $encargado->setTelefono($_POST["TELEFONO"]);
                $encargado->setCorreo($_POST["CORREO"]);

                if ($encargadoM->Actualizar($encargado)) {
                    $_SESSION["mensaje"] = "Actualizacion del encargado exitosa";
                    header("Location:./index.php?controlador=encargado&accion=Menu");
                } else {
                    $_SESSION["mensaje"] = "Error, intentelo de nuevo";
                    header("Location:./index.php?controlador=encargado&accion=Menu");
                }
            } else {
                $_SESSION["mensaje"] = "Error al seleccionar el encargado a actualizar";
                header("Location:./index.php?controlador=encargado&accion=Menu");
            }
        } else {
            $_SESSION["mensaje"] = "Error al seleccionar el encargado a actualizar";
            header("Location:./index.php?controlador=encargado&accion=Menu");
        }
    }

    function ActualizarContra() {
        //$e = $this->Validar();

        $id = $_POST['id'];
        $passA = $_POST["passA"];
        $passN = $_POST["passN"];

        if (isset($id)) {
            $encargadoM = new EncargadoM();
            $encargado = new Encargado();
            $encargado = $encargadoM->BuscarId($id);

            if ($encargado != null) {
                $encargado = $encargadoM->BuscarCorreo($encargado->getCorreo());
                if (password_verify($passA, $encargado->getPass())) {
                    $encargado->setPass(password_hash($passN, PASSWORD_DEFAULT));
                    if ($encargadoM->ActualizarContra($encargado)) {
                        $_SESSION["mensaje"] = "Cambio de contraseña exitoso";
                        header("Location:./index.php?controlador=encargado&accion=Menu");
                    } else {
                        $_SESSION["mensaje"] = "Error";
                        header("Location:./index.php?controlador=encargado&accion=Menu");
                    }
                } else {
                    $_SESSION["mensaje"] = "Error al cambiar la contraseña, contraseña anterior incorrecta";
                    header("Location:./index.php?controlador=encargado&accion=Menu");
                }
            } else {
                $_SESSION["mensaje"] = "El encargado no existe";
                header("Location:./index.php?controlador=encargado&accion=Menu");
            }
        } else {
            $_SESSION["mensaje"] = "Seleccion de encargado incorrecta";
            header("Location:./index.php?controlador=encargado&accion=Menu");
        }
    }
    
        function Vista()
    {

        require_once './Vista/MenuEncargado.html';
    }
    
function Todos()
    {
        $encargadoM = new EncargadoM();
        $Encargado = $encargadoM->Todos();       
        
        $EncargadosTodos = array();
        foreach ($Encargado as $encargado)
        {
            $EncargadosTodos[] = array
            (
                "ID" => $encargado->getID(),
                "Cedula" => $encargado->getCedula(),
                "Nombre" => $encargado->getNombre(),
                "Apellido1" => $encargado->getApellido1(),
                "Apellido2" => $encargado->getApellido2(),
                "Telefono" => $encargado->getTelefono(),
                "Correo" => $encargado->getCorreo()
            );
        }
        
        echo json_encode($EncargadosTodos);
    }   
}