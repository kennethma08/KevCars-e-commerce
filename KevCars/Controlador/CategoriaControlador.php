<?php

//session_start();
require_once './Modelo/Conexion.php';
require_once './Modelo/Entidades/Categoria.php';
require_once './Modelo/Metodos/CategoriaM.php';
require_once './Modelo/Entidades/Encargado.php';
require_once './Modelo/Metodos/EncargadoM.php';

class CategoriaControlador {

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

        $categoriam = new CategoriaM();
        $Categoria = $categoriam->Todos();     
        
        $CategoriaTodos = array();
        foreach ($Categoria as $categoria)
        {
            $CategoriaTodos[] = array
            (
                "IdCategoria" => $categoria->getId(),
                "Nombre" => $categoria->getDescripcion()
            );
        }
        
        echo json_encode($CategoriaTodos);
        
    }

    function Crear() {
        //$e = $this->Validar();

        $categoria = new Categoria();
        $categoria->setDescripcion($_POST['descripcion']);
        $categoria->setEstado(true);

        $categoriam = new CategoriaM();

        if ($categoriam->Nuevo($categoria)) {
            $_SESSION["mensaje"] = "Ingreso Exitoso";
            header("Location:./index.php?controlador=categoria&accion=Vista");
        } else {
            $_SESSION["mensaje"] = "Contacte con TI";
            header("Location:./index.php?controlador=categoria&accion=Vista");
        }
    }

    function Actualizar() {
        //$e = $this->Validar();

        $id = $_POST["IdCategoria"];
        if (isset($id)) {
            $categoriam = new CategoriaM();
            $categoria = new Categoria();
            $categoria = $categoriam->BuscarId($id);
            if ($categoria != null) {
                $cliente->setNombre($_POST['NOMBRE']);

                if ($categoriam->Actualizar($categoria)) {
                    $_SESSION["mensaje"] = "Actualizacion exitosa";
                    header("Location:./index.php?controlador=categoria&accion=Vista");
                } else {
                    $_SESSION["mensaje"] = "Error al actualizar, contacte con TI";
                    header("Location:./index.php?controlador=categoria&accion=Vista");
                }
            } else {
                $_SESSION["mensaje"] = "La categoria no existe";
                header("Location:./index.php?controlador=categoria&accion=Vista");
            }
        } else {
            $_SESSION["mensaje"] = "Error al seleccionar la categoria a actualizar";
            header("Location:./index.php?controlador=categoria&accion=Vista");
        }
    }

    
    function Desactivar()
    {
       // $e = $this->Validar();
        $categoriam = new CategoriaM();
        $categoria = new Categoria();
        $categoria->setId($_POST["IdCategoria"]);
        $categoria->setEstado(0);
        if ($categoriam->Estado($categoria)) {
            $_SESSION["mensaje"]="Categoria eliminada correctamente";
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
        $categoriam = new CategoriaM();
        $Categoria = $categoriam->Todos();       
        
        $CategoriaTodos = array();
        foreach ($Categoria as $categorias)
        {
            $CategoriaTodos[] = array
            (
                "IdCategoria" => $categorias->getId(),
                "descripcion" => $categorias->getDescripcion(),
            );
        }
        
        echo json_encode($CategoriaTodos);
    }   
    
    function Vista()
    {
        //$e=$this->Validar();
        require_once './Vista/Categoria.html';
    }
    
    
    
}