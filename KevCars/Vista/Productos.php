<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css"/>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="./Vista/style/Productos.css">
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


        <title>Productos</title> 
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-0 col-md-2"> 
                    <nav class="sidebar">
                        <header>
                            <div class="image-text">
                                <span class="image">

                                </span>
                                <div class="text logo-text">
                                    <span class="name">evCars</span>
                                </div>
                            </div>

                        </header>

                        <div class="menu-bar">
                            <div class="menu">

                                <ul class="list-unstyled">

                                    <li class="no-hover">
                                        <a class="a1 cal hover-fixed" style="color: white;" href="./index.php?controlador=reservas&accion=Vista">
                                            <i class="fas fa-futbol icon" style="color: white;"></i>
                                            <span class="nav-item">Productos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="a1 "  href="./index.php?controlador=encargado&accion=Menu">
                                            <i class="fas fa-user-tie icon" ></i>
                                            <span class="nav-item">Encargados</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="a1" href="./index.php?controlador=categoria&accion=Vista">
                                            <i class="fas fa-user icon "></i>
                                            <span class="nav-item">Categoria</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="a1" href="./index.php?controlador=cliente&accion=Vista">
                                            <i class="fas fa-archive icon "></i>
                                            <span class="nav-item">EDITAR</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="a1 logout-icon" href="./index.php?controlador=index&accion=Cerrar">
                                            <i class="fas bi-box-arrow-right icon" style="margin-top: auto;"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>


                        </div>

                    </nav>

                </div>

                <div class="col-12 col-md-10 p-5">
                    <div class="row justify-content-lg-center align-items-lg-center text-lg-center justify-content-md-center align-items-md-center text-md-center justify-content-sm-center align-items-sm-center text-sm-center justify-content-xs-center align-items-xs-center text-xs-center p-3">
                        <div class="card border-0" style="background-color: white;">
                            <br>
                            <div class="card-header" style="background-color: white;">
                                <div class="row">
                                    <div class="col-6 text-start">
                                        <h1>Productos</h1>
                                    </div>
                                    <div class="col-6 text-end">
                                        <button class="btn btn-primary btn-hover-none me-3" style="border-radius: 50%; background-color: orange; border: transparent; height: 45px; font-size: 17px"data-bs-toggle="modal" data-bs-target="#CrearEncargado">
                                            <i class="bi bi-plus" style="font-size: 24px; vertical-align: middle;"></i>
                                        </button>
                                    </div>
                                </div>
                                <br>
                            </div>


                            <div class="card-body table-responsive">
                                <table class="table" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>Descripción</th>
                                            <th>Precio unitario</th>
                                            <th>Categoria</th>
                                            <th>Imagen</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        <?php
                                        if ($productos1 != null) {
                                            foreach ($productos1 as $b) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $b->getDescripcion() ?></td>
                                                    <td><?php echo $b->getPreciounitario() ?></td>
                                                    <td><?php echo $b->getCategoria() ?></td>
                                                    <td><?php echo '<img  width="50" height="50" src="./Archivos/' . $b->getFOTO() . '">'; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button id="toggleSidebarBtn" class="btn btn-primary btn-hover-none sidebar-toggle-btn">
            <i class="bi bi-list" style="font-size: 24px; vertical-align: middle;"></i>
        </button>
        <div class="abrir-modal">
            <div class="modal fade" id="CrearEncargado" data-bs-backdrop="false" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalCrear" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-body px-3">
                            <h2 class="ModalTitulo"><b>Agregar producto</b></h2>
                            <form id="formulario" action="./index.php?controlador=producto&accion=Crear" method="POST" enctype="multipart/form-data">
                                <div class="row pt-2 mx-3">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 log-xl-6 col-xxl-6">
                                        <label for="descripcion">Descripción</label>
                                        <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="MAX 17 CARACTERES" max="17">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 log-xl-6 col-xxl-6">
                                        <label for="Preciounitario">Precio unitario</label>
                                        <input type="text" id="Preciounitario" name="Preciounitario" class="form-control">
                                    </div>
                                </div>
                                <div class="row pt-2 mx-3">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 log-xl-6 col-xxl-6">
                                        <label for="Costo">Costo</label>
                                        <input type="text" id="Costo" name="Costo" class="form-control">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 log-xl-6 col-xxl-6">
                                        <label for="IdCategoria">Categoria</label>
                                        <select class="form-select" aria-label="Default select example" name="IdCategoria">
                                            <option selected>Seleccione una categoria</option>
                                            <?php
                                            if ($Categoria != null) {
                                                foreach ($Categoria as $categoria) {
                                                    echo("<option value='" . $categoria->getId() . "'>" . $categoria->getDescripcion() . "</option>");
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row pt-2 mx-3">

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 log-xl-6 col-xxl-6">
                                        <label for="IdStock">Stock</label>
                                        <input  type="number" name="IdStock" id="IdStock" class="form-control" >
                                    </div>
                                </div>
                                <div class="row pt-2 mx-3">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 log-xl-6 col-xxl-6">
                                        <label for="IdProveedor">Proveedor</label>
                                        <input type="text" name="IdProveedor" id="IdProveedor" class="form-control">
                                    </div>
                                </div>
                                <div class="row pt-2 mx-3">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 log-xl-6 col-xxl-6">
                                        <label for="FOTO">Imagen</label>
                                        <input type="file" name="FOTO" id="FOTO" class="form-control">
                                    </div>
                                </div>
                                <div class="row pt-4">
                                    <div class="modal-footer">
                                <button class="BotonCancelar px-5 py-1" type="button" name="button" data-bs-dismiss="modal" style="background-color: #B05555; color: #ffffff; border:none; font-weight: bold; ">Cancelar</button>
                                <button id="SweetCorrecto" class="BotonAceptar px-5 py-1" type="button" name="button" style="background-color: #887cff; color: #ffffff; border:none; font-weight: bold;" @click="mostrarSweetAlert">Aceptar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
        <script src="./Vista/js/Productos.js"></script>
                <!--Funciones SweetAlert-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                      <!-- Vue -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    </body>
</html>