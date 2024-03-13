<?php

session_start();
require_once './Modelo/Conexion.php';
require_once './Modelo/Entidades/Encargado.php';
require_once './Modelo/Metodos/EncargadoM.php';

class IndexControlador 
{
    function Index()
    {
        if(isset($_SESSION["mensaje"]))
            $mensaje=$_SESSION["mensaje"];
        header("Location: ./index.php?controlador=producto&accion=Menu");
        unset($_SESSION["mensaje"]);        
    }
    
function Login()
    {
        $pass=$_POST['PASS'];
        $correo=$_POST['CORREO'];
        
        $encargadom=new EncargadoM();
        $encargado=$encargadom->BuscarCorreo($correo);
        if($encargado!=null)
        {
            if(password_verify($pass, $encargado->getPass()))
            {
                $_SESSION['idEncargado']=$encargado->getId();
                $_SESSION['mensaje']="Ingreso Existoso";
                header('Location: index.php?controlador=encargado&accion=Vista');
            }
            else
            {
                $_SESSION['mensaje']="Correo o contrasena incorrecta";
                header('Location: index.php');
            } 
        }
        else
        {
            $_SESSION['mensaje']="isdjkdshsdijd incorrecta";
            header('Location: index.php');
        }
    }
    
    function Cerrar()
    {
        session_destroy();
        header('Location: index.php');
    }
}
