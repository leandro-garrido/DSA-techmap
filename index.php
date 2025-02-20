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

if (empty($_GET['categoria']) AND empty($_GET['subcategoria'])){
    $filtro = 'Todas las marcas';
} elseif (empty($_GET['categoria'])){
    $filtro = $_GET['subcategoria'];
}else {
    $filtro = $_GET['categoria'];
}

if ($filtro == 'Todas las marcas'){
    $consulta = 'SELECT * FROM marcaxcategoria GROUP BY marca';
} elseif (empty($_GET['categoria'])){
    $consulta = "SELECT marca, subcategoria FROM marcaxcategoria WHERE subcategoria='$filtro' GROUP BY marca";
    $consulta_categorias_vinculadas = "SELECT subcategoria, categorias_vinculadas FROM marcaxcategoria WHERE subcategoria='$filtro' GROUP BY categorias_vinculadas";
    $datos_categorias_vinculadas = mysqli_query($conexion, $consulta_categorias_vinculadas);
} else {
    $consulta = "SELECT marca, categoria FROM marcaxcategoria WHERE categoria='$filtro' GROUP BY marca";
    $consulta_categorias_vinculadas = "SELECT categoria, categorias_vinculadas FROM marcaxcategoria WHERE categoria='$filtro' GROUP BY categorias_vinculadas";
    $datos_categorias_vinculadas = mysqli_query($conexion, $consulta_categorias_vinculadas);
}

$consulta_subcategorias = 'SELECT categoria, subcategoria FROM marcaxcategoria GROUP BY categoria, subcategoria ORDER BY categoria, subcategoria ASC;';

// 3) Ejecutar la orden y obtenemos los registros
$datos = mysqli_query($conexion, $consulta);
$datos_subcategoria = mysqli_query($conexion, $consulta_subcategorias);

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
    <section>
        <div class="catalogo">
            <div class="container">
                <div class="row">
                    <div class=" mt-5 col-lg-3 col-xl-3 d-none d-lg-block d-xl-block">
                        <ul class="list-group list-group-flush">
                            <h2 class="h2 list-group-item">Filtrar</h2>
                            <a class="" href="index.php"><li class="list-group-item filtro">Todas las marcas</li></a>
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
                    <div class="mt-5 col-lg-9 col-xl-9 col-12">
                        <div class="container-fluid">
                            <h2 class="h2"><?php echo $filtro; ?></h2>
                            <div class="row marcas">
                                <?php
                                // 4) Mostrar los datos del registro
                                while ($reg = mysqli_fetch_array($datos)) { ?>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="fondo_marca">
                                        <a href="detalles.php?marca=<?php echo $reg['marca']; ?>">
                                        <p style="font-size: 6px; padding: 20px;">
                                        <img class="card-img-top" src="./img/<?php echo $reg['marca']; ?>.svg" alt="img" width="100%" height="80px" ></p></a>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <?php if ($filtro != 'Todas las marcas') { ?>
                                <!-- otras subcategorias vinculadas -->
                                <h2 class="h2">Categorias Vinculadas</h2>
                                <div class="row">
                                    <?php 
                                    while ($reg_categorias_vinculadas = mysqli_fetch_array($datos_categorias_vinculadas)){?>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                        <p style="font-size: 6px;">
                                            
                                            <button type="button" class="btn btn-outline-primary btn-lg"><?php echo $reg_categorias_vinculadas['categorias_vinculadas'];?></button>
                                            
                                        </div>
                                        
                                    <?php } ?>
                                </div>
                            <?php } ?> 
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php echo $footer;?>        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>