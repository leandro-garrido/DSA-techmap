<?php
// 1) Conexion
include_once "config.php";

// 2) Almacenamos los datos del envío POST
$marca = $_GET['marca'];

// 3) Preparar la orden SQL
// => Selecciona todos los campos de la tabla alumno donde el campo dni sea igual a $dni
$consulta = "SELECT * FROM marcaxcategoria WHERE marca='$marca'";
$consul_subcategorias = "SELECT categoria, subcategoria FROM marcaxcategoria WHERE marca='$marca' GROUP BY categoria, subcategoria ORDER BY categoria, subcategoria ASC;";


// 4) Ejecutar la orden y almacenamos en una variable el resultado
$repuesta = mysqli_query($conexion, $consulta);
$datos_subcategoria = mysqli_query($conexion, $consul_subcategorias);


// 5) Transformamos el registro obtenido a un array
$datos = mysqli_fetch_array($repuesta);

$navbar = file_get_contents('navbar.html');
$footer = file_get_contents('footer.html');
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
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<?php echo $navbar; ?>

    <!-- producto -->
    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 ">
                    <div class="fondo_marca_detalles">
                        <p style="font-size: 6px; padding: 20px;">
                        <img class="card-img-top " src="./img/<?php echo $datos['marca']; ?>.svg" alt="img" width="100%" height="180px" ></p>
                    </div>
                    <div class="">
                        <h4 class="">Descripción</h4>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate
                            quaerat consectetur similique porro, dolore, impedit quae tenetur eveniet animi
                            quibusdam rerum quos consequatur eos delectus, at illum adipisci eius velit?</p>
                        <h4>Datos del PM</h4>
                        <p><b>Responsable</b>: nombre_pm</p>
                        <p><b>Mail</b>: pm_mail</p>
                        <p><b>Celular</b>: pm_num</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <h2 class="h2 list-group-item">Categorias</h2>
                            <?php
                            while ($reg_subcategorias = mysqli_fetch_array($datos_subcategoria)){
                                $lista_subcategoria[] = [$reg_subcategorias['categoria'] => $reg_subcategorias['subcategoria']];
                            }
                            $lista_categoria = [];
                            $lista_categoria[] = 'VACIO';
                            $i=0;
                            foreach ($lista_subcategoria as $valor){
                                foreach ($valor as $a => $b){
                                    if ($b == 'VACIO') { ?>
                                        <a class="" href="index.php?categoria=<?php echo $a; ?>"><li class="list-group-item filtro"><?php echo $a?></li></a>
                                        <?php
                                    } elseif ($b != 'VACIO') {
                                        if ($lista_categoria[$i] == $a){ ?>
                                            <div class="collapse" id="<?php echo str_replace(' ', '_', $a)?>">
                                                <ul class=''><a class="" href="index.php?subcategoria=<?php echo $b; ?>"><li class="list-group-item filtro"><?php echo $b?></li></a></ul>
                                            </div>
                                            <?php
                                        } else { ?>
                                            <a class="" data-bs-toggle="collapse" href="#<?php echo str_replace(' ', '_', $a)?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                <li class="list-group-item filtro">+ <?php echo $a?></li>
                                            </a>
                                            <div class="collapse" id="<?php echo str_replace(' ', '_', $a)?>">
                                                <ul class=''><a class="" href="index.php?subcategoria=<?php echo $b; ?>"><li class="list-group-item filtro"><?php echo $b?></li></a></ul>
                                            </div>                                         
                                            <?php 
                                            $lista_categoria[]=$a;
                                            $i+=1;
                                        }
                                    }
                                } 
                            } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php echo $footer; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>