<?php

session_start();
require_once './Modelo/Conexion.php';
require_once './Modelo/Entidades/Producto.php';
require_once './Modelo/Metodos/ProductosM.php';
require_once './Modelo/Entidades/Categoria.php';
require_once './Modelo/Metodos/CategoriaM.php';
require_once './Modelo/Entidades/Encargado.php';
require_once './Modelo/Metodos/EncargadoM.php';

class ProductoControlador {

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

    function Menu() {
        $productoM = new ProductoM();
        $productos1 = $productoM->Todos();
        
        if (isset($_SESSION["mensaje"])) {
            $mensaje = $_SESSION["mensaje"];
        } else {
            $mensaje = null;
        }
        require_once './Vista/Principal.php';


        unset($_SESSION["mensaje"]);
    }

    function Vista() {
        $productoM = new ProductoM();
        $categoriam = new CategoriaM();
        
        $Categoria = $categoriam->Todos();    
        $productos1 = $productoM->Todos();
        if($productos1!=null)
        {
            foreach ($productos1 as $productos) 
            {
                $categoria=$categoriam->BuscarId($productos->getCategoria());
                $productos->setCategoria($categoria->getDescripcion());
            } 
        }
        //$e=$this->Validar();
        require_once './Vista/Productos.php';
    }

    function Crear() {
        //$e=$this->Validar();

        if ($_FILES["FOTO"]["name"] != null) {
            $directorio = "Archivos/";
            $ubicacionFinal = $directorio . basename($_FILES['FOTO']['name']);
            move_uploaded_file($_FILES['FOTO']['tmp_name'], $ubicacionFinal);
            $dateTime = date("Y-m-d H:i:s");
            $nuevoNombre = $dateTime . "." . str_replace("image/", "", $_FILES['FOTO']['type']);
            rename("./Archivos/" . $_FILES['FOTO']['name'], "./Archivos/" . $nuevoNombre);
        } else {
            $nuevoNombre = "./Archivos/Sinfoto.png";
        }

        $producto = new Producto();

        $producto->setDescripcion($_POST['descripcion']);
        $producto->setPreciounitario($_POST['Preciounitario']);
        $producto->setCosto($_POST['Costo']);
        $producto->setCategoria($_POST['IdCategoria']);
        $producto->setStock($_POST['IdStock']);
        $producto->setProveedor($_POST['IdProveedor']);
        $producto->setFOTO($nuevoNombre);
        $producto->setEstado(true);

        $productoM = new ProductoM();
        if ($productoM->Crear($producto)) {
            $_SESSION["mensaje"] = "Ingreso Exitoso";
            header("Location:./index.php?controlador=producto&accion=Vista");
        } else {
            $_SESSION["mensaje"] = "NO";
            header("Location:./index.php?controlador=producto&accion=Vista");
        }
    }

    /* function Todos()
      {
      $productoM = new ProductoM();
      $Producto = $productoM->Todos();

      $ProductoTodos = array();
      foreach ($Producto as $producto)
      {
      $ProductoTodos[] = array
      (
      "Id" => $producto->getId(),
      "descripcion" => $producto->getDescripcion(),
      "preciounitario" => $producto->getPreciounitario(),
      "costo" => $producto->getCosto(),
      "IdCategoria" => $producto->getCategoria(),
      "IdStock" => $producto->getStock(),
      "imagen" => $producto->getImagen(),
      "IdProveedor" => $producto->getProveedor()
      );
      }

      echo json_encode($ProductoTodos);
      } */
}
