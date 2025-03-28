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
    <link rel="stylesheet" href="./css/style.css">
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
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/banner1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./img/banner2.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section>
        <div class="sec1 mt-5 d-none d-lg-block d-xl-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4">
                        <img src="./img/sec1-1.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-4">
                        <img src="./img/sec1-2.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-4">
                        <img src="./img/sec1-3.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="sec2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-6 mt-5">
                        <a href=""><img src="./img/sec2-1.png" alt="" class="img-fluid"></a>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-6 mt-5">
                        <a href=""><img src="./img/sec2-2.png" alt="" class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="sec3">
            <div class="container-fluid">
                <div class="row">
                    <div class="px-0 col-12 mt-5 d-flex justify-content-center">
                        <a href="outfits.php" class=""><img src="./img/sec3-1.png" alt="" class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="sec4">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 col-xl-4 mt-5">
                        <a href=""><img src="./img/sec4-1.png" alt="" class="img-fluid"></a>
                    </div>
                    <div class="col-12 col-lg-4 col-xl-4 mt-5">
                        <a href=""><img src="./img/sec2-2.png" alt="" class="img-fluid"></a>
                    </div>
                    <div class="col-12 col-lg-4 col-xl-4 mt-5">
                        <a href=""><img src="./img/sec2-1.png" alt="" class="img-fluid"></a>
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
                                <a class="social" href="https://www.facebook.com/" target="_blank"><i class="bi bi-facebook"></i></a>
                            </button>
                            <button type="button" class="btn">
                                <a class="social" href="https://www.instagram.com/" target="_blank"><i class="bi bi-instagram"></i></a>
                            </button>
                            <button type="button" class="btn">
                                <a class="social" href="https://twitter.com/" target="_blank"><i class="bi bi-twitter"></i></a>
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
                    <p class="text-muted">Diseñado por <a href="https://www.linkedin.com/in/leandro-garrido/" target="_blank">Leandro Garrido</a>. Todos los derechos reservados</p>
                </div>
                <div class="col-12 col-lg-6 col-xl-6 text-end">
                    <p class="text-muted">Utilizado con fines educativos para <a href="https://www.potrerodigital.org/" target="_blank">Potrero Digital</a></p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>