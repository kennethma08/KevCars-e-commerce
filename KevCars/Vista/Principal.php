<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./Vista/style/PagPrincipal.css">
    <title>KevCars</title>
    <link rel="icon" href="tu_icono.png" type="image/png">
</head>
<body>
    <div class="container-fluid">
        <header class="d-flex flex-wrap justify-content-between align-items-center py-3 my-1">
            <div class="left-section">
                <img src="./Vista/imagenes/KevCars.png" alt="KevCars Logo" class="logo-img img-fluid">
            </div>
            <div class="right-section d-flex align-items-center">
                <div class="nav-links me-auto">
                    <a href="#">Inicio</a>
                    <div class="tienda-link">
                        <a href="#">Tienda</a>
                        <div class="tienda-opciones">
                            <a href="#">Mujer</a>
                            <a href="#">Hombre</a>
                            <a href="#">Niños</a>
                            <a href="#">Zapatos</a>
                            <a href="#">T-Shirt</a>
                            <a href="#">Hoodies</a>
                            <a href="#">Beanies</a>
                            <a href="#">Gorras</a>
                        </div>
                    </div>
                    <a href="#">Nosotros</a>
                    <a href="#">Contáctanos</a>
                    <a href="#">Blog</a>
                    <a href="./index.php?controlador=encargado&accion=Vista">Mi cuenta</a>
                </div>
                <div class="icon-container d-flex align-items-center">
                    <i class="corazon fa-regular fa-heart d-none d-md-block "></i>
                    <button class="btn btn-outline-primary d-none d-md-block">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="cart-text">0 items</span>
                    </button>
                    <i class="fa-solid fa-magnifying-glass d-none d-md-block lupa"></i>
                </div>
            </div>
        </header>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 ">
                <img src="./Vista/imagenes/MegasSale.png" alt="" class="imagensale">
            </div>

        </div>
    </div>
    
    <div class="container-fluid">
        <h1 class="TituloProducto">Nuevos productos</h1>
        <div class="row">
            <?php
            if ($productos1 != null) {
                $contador = 0; 
                foreach ($productos1 as $producto) {
                    // Mostrar solo productos de la categoría con ID 3
                    if ($producto->getCategoria() == 3) {
            ?>
                        <div class="col-md-2">
                            <div class="card">
                                <img src="./Archivos/<?php echo $producto->getFOTO(); ?>" class="card-img-top" alt="Imagen del producto">
                                <div class="card-body">
                                    <div class="producto-info">
                                        <div class="nombre-producto">
                                            <h5 class="card-title"><?php echo $producto->getDescripcion(); ?></h5>
                                        </div>
                                        <div class="precio-producto"> 
                                            <p class="card-text">Precio: ₡<?php echo $producto->getPreciounitario(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php
                        $contador++;
                        if ($contador == 5) break; 
                    }
                }
            }
            ?>
        </div>
    </div>

    <div class="container-fluid">
        <h1 class="TituloProducto">Productos en tendencia</h1>
        <div class="row">
            <?php
            if ($productos1 != null) {
                $contador = 0;
                foreach ($productos1 as $producto) {
                    if ($producto->getCategoria() == 4) {
            ?>
                        <div class="col-md-2">
                            <div class="card">
                                <img src="./Archivos/<?php echo $producto->getFOTO(); ?>" class="card-img-top" alt="Imagen del producto">
                                <div class="card-body">
                                    <div class="producto-info">
                                        <div class="nombre-producto">
                                            <h5 class="card-title"><?php echo $producto->getDescripcion(); ?></h5>
                                        </div>
                                        <div class="precio-producto"> 
                                            <p class="card-text">Precio: ₡<?php echo $producto->getPreciounitario(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php
                        $contador++; 
                        if ($contador == 5) break; 
                    }
                }
            }
            ?>
        </div>
    </div>
    
    
    <div class="container-fluid">
        <div class="col-md-12 d-flex align-items-center justify-content-center">
            <button class="All"> Todos los productos</button>
        </div>
    </div>
    
    
        <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 fo ">
            <h6>Sobre nosotros</h6>
            <p class="text-justify">Tienda costarricense destacada por su compromiso con la excelencia y la diversidad de productos ofrecidos. Su enfoque en la calidad y la satisfacción del cliente la posiciona como líder en el mercado.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categorias</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
              <li><a href="http://scanfcode.com/category/android/">Android</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Enlaces rápidos</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2024 All Rights Reserved by 
         <a href="#">Kenneth Martinez</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/64f3526a38.js" crossorigin="anonymous"></script>
    <script src="./Vista/js/PagPrincipal.js"></script>
</body>
</html>
