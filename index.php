<?php
session_start();
require_once "app/class/frontClass.php";
if (!empty($_SESSION['SHOP-F'])) {
    $itemsShop = count($_SESSION['SHOP-F']);
} else {
    $itemsShop = 0;
}

$con = new ConsultaF();
$query = "SELECT * FROM productos WHERE ESTADOP_LIST=:ART";
$data = [
    ':ART' => "index"// falta subir
];
$res = $con->consulta($query, $data);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="petwild, wildpet, pet, wild, correas para perros, collares para perros, cinturon de seguridad para perros,
    pretal para perros, arnes para perros, correas, collares, pretales, arnes, cinturon de seguridad, correa, collar, pretal">
    <meta name="description" content="fabrica de collares, correas, pretales y cinturon de seguridad para mascotas">
    <link rel="icon" type="image/ico" href="app/img/logo-wild-2.ico"/>
    <script src="https://kit.fontawesome.com/20492fa932.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="app/css/frontWild.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Pet wild accesories</title>
</head>

<body>
<div class="movil-bar">
    <ul class="mb">
        <li class="iMb">home</li>
        <li class="iMb">product</li>
        <li class="iMb">contact</li>
    </ul> 
</div>

    <nav>
        
            
        
        <div class="f-head">

            <div class="f-logo"><img src="app/img/logo-wild-2.png" class="f-imgLogo" alt="" srcset=""><b>
                    <h5>Pet Wild</h5>accessories</b>
            </div>
            <span class="bar"><i class="fa-solid fa-bars"></i></span>
            <div class="f-search m-v">
                <form action="app/web/product.php" method="post">
                    <input type="text" name="rPf" class="form-control search-index">
                    <button class="btn btn-light" name="btn-s-f" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <div class="vI">
                    <ul id="vI">

                    </ul>
                </div>
            </div>
            <div class="f-items">
                <ul class="f-ul-i">

                    <li class="f-list-i"><a href="app/web/carshop.php"> su pedido <i class="fa-solid fa-cart-shopping"></i>(<?php echo $itemsShop ?>)</a></li>

                </ul>
            </div>
            
            <div class="f-menu m-v">
                <ul class="f-ulMenu">
                    <li class="f-liMenu"><a href="index.php">Home</a> </li>
                    <li class="f-liMenu "><a href="#" class="productos">Productos   <i class="fa-solid fa-chevron-down"></i></a>
                    <div class="catMenu ocultar">
                        <ul class="submenu">
                            <li class="btn-submenu">
                                <form action="app/web/product.php" method="post">
                                    <button type='submit' name="btn-submenu" value="col">collares</button>
                                </form>
                             </li>
                            <li class="btn-submenu">
                                <form action="app/web/product.php" method="post">
                                    <button type='submit' name="btn-submenu" value="cor">correas</button>
                                </form>
                            </li>
                            <li class="btn-submenu">
                                <form action="app/web/product.php" method="post">
                                    <button type='submit' name="btn-submenu" value="pre">pretales</button>
                                </form>
                            </li>
                            <li class="btn-submenu">
                                <form action="app/web/product.php" method="post">
                                    <button type='submit' name="btn-submenu" value="cint">cinturon</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    </li>
                    <li class="f-liMenu"><a href="#">contacto</a> </li>
                </ul>
                
            </div>
            
        </div>
        
    </nav>
    <section>
        
            
        
        <div class="carrusel">
            <div class="slider">
                <?php
                $portada = new FilesystemIterator('app/img/portada/');
                $count = iterator_count($portada);
                if (!empty($portada && $count > 0)) {
                    foreach ($portada as  $portadaF) { ?>
                        <div class="slider-section">
                            
                                <img src="app/img/portada/<?php echo $portadaF->getFilename() ?>" class="slider-img" alt="" srcset="">
                            
                        </div>
                <?php    }
                }

                ?>


            </div>
            <div class="slider-btn slider-btn-left">&#60;</div>
            <div class="slider-btn slider-btn-right">&#62;</div>
        </div>
        
    </section>


    <div class="container">
        <div class="col-lg-6 col-md-6 col-sm-12 my-5 mx-auto border-top">
            <h3 class="text-center  f-h3-cat">Categorias</h3>
        </div>
        <div class="f-category mx-auto">

            <div class="col-lg-6 col-md-6 col-sm-6 overflow-hidden">
                
                <form action="app/web/product.php" method="post">
                <div rubro="correas"  class="card left" style="background: #2fe9ab; box-shadow: 3px 3px 7px aquamarine;">
                    <img src="app/img/4-web.png" class="card-img mx-auto" alt="" srcset="" style="width: 10em;">
                    
                        
                        <input type="hidden" name="rubro" value="correa">
                        <button class="btn card-img-overlay text-start" type="submit"> <h5 class="card-title text-white text-center" >Correas Pet-wild</h5></button>
                    
                </div>
                </form>
            
                <form action="app/web/product.php" method="post">
                <div rubro="cinturon" class="card mt-3 left" style="background: cornflowerblue; box-shadow: 3px 3px 7px cornflowerblue;">
                    <img src="app/img/juegoSublimado.png" class="card-img mx-auto" alt="" srcset="" style="width: 10em;">
                    <input type="hidden" name="rubro" value="cinturon">
                        <button class="btn card-img-overlay text-start" type="submit"> <h5 class="card-title text-white text-center" >cinturon de seguridad Pet-wild</h5></button>
                </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 overflow-hidden">
            <form action="app/web/product.php" method="post">
                <div rubro="collares" class="card right" style="background:lightcoral;box-shadow: 3px 3px 7px darkkhaki;">
                    <img src="app/img/collarM_subli.png" class="card-img mx-auto" alt="" srcset="" style="width: 10em;">
                    <input type="hidden" name="rubro" value="collar">
                        <button class="btn card-img-overlay text-start" type="submit"> <h5 class="card-title text-white text-center" >collares Pet-wild</h5></button>
                </div>
                </form>

                <form action="app/web/product.php" method="post">
                <div rubro="arnes" class="card mt-3 right" style="background: burlywood;box-shadow: 3px 3px 7px burlywood;">
                    <img src="app/img/juegoSublimado.png" class="card-img mx-auto" alt="" srcset="" style="width: 10em;">
                    <input type="hidden" name="rubro" value="arnes">
                        <button class="btn card-img-overlay text-start" type="submit"> <h5 class="card-title text-white text-center" >Arnes Pet-wild</h5></button>
                </div>
                </form>
            </div>
        </div>
    </div>



    <div class="container ">
        <div class="f-deb ">
            <div class="delibery bg-light">
                Hacemos envios a todo el pais
            </div>
        </div>
    </div>


    <div class="container mb-5">
        <div class="col-lg-12 my-5 border-top">
            <h3 class="text-center f-h3-cat">Productos destacados</h3>
        </div>
        <div class="row">
            <?php foreach ($res as  $destP) { ?>
                <div class="col-6 col-md-3 col-sm-6 col-lg-3 mt-4">
                    <div class="card">
                        <form action="app/web/comprar.php" method="post" enctype="multipart/form-data">
                            <?php if ($destP['STOCK_LIST'] > 0) { ?>
                                <div class="f-status">En stock </div>
                            <?php } else { ?>
                                <div class="f-status">Sin stock </div>
                            <?php } ?>

                            <img src="app/img/<?php echo $destP['IMG_LIST'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $destP['DESC_LIST'] ?> </h5>
                                <p class="card-text"><?php echo $destP['COLOR_LIST'] ?></p>
                                <p class="card-text"><?php echo "$ ".$destP['PRECIO_LIST'] ?></p>
                                <input type="hidden" name="f-art" value="<?php echo $destP['ART_LIST'] ?>">
                                <input type="hidden" name="f-color" value="<?php echo $destP['COLOR_LIST'] ?>">

                                <button class="btn btn-dark" name="btn-shop-f" type="submit">Comprar</button>
                            </div>
                        </form>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div class="row-g">
        <div class="f-info">
            <img src="app/img/logo-wild-2.png " class="ms-5" alt="" srcset="" style="width: 3em; margin-right:20px;">
           <p>Hace tu pedido y nosotros nos comunicamos con vos</p> 
            <img src="app/img/info1.png" class="info1" alt="" srcset="" style="width: 14em;">
            
        </div>
    </div>

    <footer>
        <div class="row-g bg-dark py-5">
            <div class="col-lg-4">
                <div class="f-nos">
                    <img src="app/img/logo-wild-2.png" alt="" srcset="" style="width: 3em;">
                    <h5 class="text-white">Pet wild accessories</h5>
                    <div class="f-text-nos">
                    Creamos cinturones, collares, pretales y cinturones de seguridad para perros y
                    gatos.-
                    Dentro del mercado hemos visto infinidad de variedades, por ello hemos dado
                    relevancia a los colores clasicos, pero adhiriendo bordados y subliminares, en ese
                    sentido decidimos trabajar con productos que brinden seguridad a nuestros amigos.-
                    Nuestro lema es crear productos con amor, por que ellos se lo merecen.-
                    
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="f-contact">
                    <h5 class="text-white">Contacto</h5>
                    <ul class="mt-5">
                        <li class="text-white"><i class="fa-solid fa-location-dot"></i> Hurlingham, Buenos Aires</li>
                        <li class="text-white"><i class="fa-brands fa-whatsapp"></i> 1521573760</li>
                        <li class="text-white"><i class="fa-regular fa-at"></i> petwild.accessories@gmail.com</li>
                    </ul>
                </div>
                <div class="f-contact mt-5">
                    <div class="alert alert-warning text-center ">¡Hacemos envios a todo el pais!</div>
                    
                </div>
            </div>
            <div class="col-lg-4">
                <div class="f-social">
                    <h5 class="text-white">Seguinos en:</h5>
                    <ul class="mt-5">
                        <li><i class="fa-brands fa-facebook fa-2x"></i>
                            <a href="https://www.facebook.com/profile.php?id=100090810198790">Pet wild accessories</a>
                        </li>
                        <li><i class="fa-brands fa-instagram fa-2x"></i>
                            <a href="https://www.instagram.com/petwildaccesories/">pet wild accessories</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
    </footer>

    <script src="app/js/sl.js"></script>
    <script src="app/js/front.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>