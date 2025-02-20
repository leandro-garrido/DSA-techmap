<?php
include_once "config.php";

// ) Almacenamos los datos del envío POST
// No se utiliza este paso en este caso puntual

// 2) Preparar la orden SQL
// Sintaxis SQL SELECT
// SELECT * FROM nombre_tabla
// => Selecciona todos los campos de la siguiente tabla
// SELECT campos_tabla FROM nombre_tabla
// => Selecciona los siguientes campos de la siguiente tabla

if (empty($_GET['categoria_producto'])){
    $categoria_producto = 'Todas las marcas';
} else {
    $categoria_producto = $_GET['categoria_producto'];
}

if ($categoria_producto == 'Todas las marcas'){
    $consulta = 'SELECT * FROM marcaxcategoria GROUP BY marca';
} else {
    $consulta = "SELECT * FROM marcaxcategoria WHERE categoria_producto='$categoria_producto'";
}

// 3) Ejecutar la orden y obtenemos los registros
$datos = mysqli_query($conexion, $consulta);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distecna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/newstyle.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Distecna</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="producto.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="marca.php">Marcas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ayuda.php">Ayuda</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="catalogo">
            <div class="container">
                <div class="row">
                    



                
                    <div class="filtros mt-5 col-lg-3 col-xl-3 d-none d-lg-block d-xl-block">
                        <ul class="list-group list-group-flush">
                            <h2 class="h2 list-group-item">Filtrar</h2>
                            <nav class="navbar navbar-light bg-light">
                            <div class="container-fluid">
                                <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="SKU/Nombre" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                            </nav>
                            <li class="list-group-item"><a href="producto.php">Todos los productos (1101)</a></li>
                            <li class="list-group-item"><a href="">Accesorios (110)</a></li>
                            <li class="list-group-item"><a href="">Access Points (55)</a></li>
                            <li class="list-group-item"><a href="">Backup Appliances (87)</a></li>
                            <li class="list-group-item"><a href="">Camaras (77)</a></li>
                            <li class="list-group-item"><a href="">Desktops (31)</a></li>
                            <li class="list-group-item"><a href="">Discos HDD (45)</a></li>
                            <li class="list-group-item"><a href="">Discos SSD (52)</a></li>
                            <li class="list-group-item"><a href="">KVM (92)</a></li>
                            <li class="list-group-item"><a href="producto.php?categoria_producto=<?php echo "Laptops"; ?>">Laptops (24)</a></li>
                            <li class="list-group-item"><a href="">Memorias Micro SD (19)</a></li>
                            <li class="list-group-item"><a href="">Memorias RAM (10)</a></li>
                            <li class="list-group-item"><a href="">Monitores (17)</a></li>
                            <li class="list-group-item"><a href="">Racks (50)</a></li>
                            <li class="list-group-item"><a href="producto.php?categoria_producto=<?php echo "Routers"; ?>">Routers (93)</a></li>
                            <li class="list-group-item"><a href="">Servidores (16)</a></li>
                            <li class="list-group-item"><a href="">Storages (56)</a></li>
                            <li class="list-group-item"><a href="producto.php?categoria_producto=<?php echo "Switches"; ?>">Switches (31)</a></li>
                            <li class="list-group-item"><a href="">UPS (10)</a></li>
                            <li class="list-group-item"><a href="">Workstations (6)</a></li>
                        </ul>
                    </div>

                    <div class="mt-5 col-lg-9 col-xl-9 col-12">
                        <div class="container-fluid">
                            <h2 class="h2">Catalogo</h2>
                            <hr>
                            <div class="row">
                                <?php
                                // 4) Mostrar los datos del registro
                                while ($reg = mysqli_fetch_array($datos)) { ?>
                                <div class="card mt-2">
                                <div class="col-12 col-md-4 col-lg-6">
                                    <img class="card-img-top" src="data:image/png;base64, <?php echo base64_encode($reg['imagen']) ?>" alt="img" style="width: 100%; height: 50x;">
                                </div>
                                <div class="col-12 col-md-8 col-lg-6">
                                    <div class="card-body">
                                        <p class="card-subtitle mb-2 text-muted">Marca: <?php echo $reg['marca'] ?></p>
                                        <p class="card-subtitle mb-2 text-muted">Categoria: <?php echo $reg['categoria_producto'] ?></p>
                                        <hr>
                                        <p class="card-subtitle mb-2 text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate
                                            quaerat consectetur similique porro, dolore, impedit quae tenetur eveniet animi
                                            quibusdam rerum quos consequatur eos delectus, at illum adipisci eius velit?</p>
                                    </div>
                                </div>
                                  </div>
                                <!--
                                <div class="col-4 mt-4">
                                    <div class="card">
                                        <img class="card-img-top"
                                            src="data:image/png;base64, <?php echo base64_encode($reg['imagen']) ?>" alt="img" style="width: 100%; height: 50x;">
                                        <a href="ver.php?id=<?php echo $reg['id']; ?>" class="card-body"
                                            style="text-decoration: none;">
                                            <h3 class="card-title" style="width: 100%; font-size:25px;">
                                                <?php echo ucwords($reg['tipo_prenda'] . " " . $reg['marca'] . " ") . strtoupper($reg['talle']); ?>
                                            </h3>
                                            <span>$<?php echo $reg['precio']; ?></span>
                                        </a>
                                    </div>
                                </div>
                                -->
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="sec5 mt-5">
            <div class="container-fluid bg-dark">
                <div class="row">
                    <div class="my-5 text-center text-light">
                        <h2>¡ENTERATE DE TODO!</h2>
                        <p>Suscribite a nuestro newsletter y recibí ofertas exclusivas</p>
                        <form>
                            <div class="d-flex justify-content-center">
                                <input type="email" class="form-control w-50 rounded-pill mx-3" id="exampleInputEmail1"
                                    placeholder="Ingresá tu email">
                                <button type="submit" class="btn boton btn-primary px-5 rounded-pill">Enviar</button>
                            </div>
                        </form>
                        <div class="mt-3">
                            <h5>Seguinos en nuestras redes</h5>
                            <button type="button" class="btn">
                                <a class="social" href="https://www.facebook.com/" target="_blank"><i
                                        class="bi bi-facebook"></i></a>
                            </button>
                            <button type="button" class="btn">
                                <a class="social" href="https://www.instagram.com/" target="_blank"><i
                                        class="bi bi-instagram"></i></a>
                            </button>
                            <button type="button" class="btn">
                                <a class="social" href="https://twitter.com/" target="_blank"><i
                                        class="bi bi-twitter"></i></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Vestirse nunca fue tan facil.</h2>
                </div>
                <hr class="mt-5">
                <div class="col-12 col-lg-6 col-xl-6">
                    <p class="text-muted">Diseñado por <a href="https://www.linkedin.com/in/leandro-garrido/"
                            target="_blank">Leandro Garrido</a>. Todos los derechos reservados</p>
                </div>
                <div class="col-12 col-lg-6 col-xl-6 text-end">
                    <p class="text-muted">Utilizado con fines educativos para <a href="https://www.potrerodigital.org/"
                            target="_blank">Potrero Digital</a></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>