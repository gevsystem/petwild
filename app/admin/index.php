<?php
require "../function/functions.php";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/wiild.css">
    <script src="https://kit.fontawesome.com/20492fa932.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Pet wild accesories</title>
</head>

<body>
    <!-- Modal inseert user -->
    <div class="modal fade" id="new_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header header-new-user">
                    <h5 class="modal-title text-white" id="exampleModalLabel">nuevo usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <label for="" class="label-control">Email</label>
                                <input type="text" name="email_new" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="" class="label-control">Nombre</label>
                                <input type="text" name="nombre_new" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="" class="label-control">Password</label>
                                <input type="password" name="pass_new" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="btn-new-user" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end Modal inseert user -->
    <div class="body-wild">

        <nav>
            <div class="menu-index">
                <button class="btn btn-primary"  type="button" data-bs-toggle="modal" data-bs-target="#new_user">registrarse</button>
            </div>
        </nav>


        <div class="container-admin-index">
            <div class="form-login-wild mt-5">

                <img src="../img/logo-wild-2.png" alt="" srcset="" class="img-login">
                <form action="" method="post">
                <h2 class="text-center text-white h2-insession">inicio de session</h2>
                <div class="col-12 mt-3">
                    <label for="" class="label-form text-white">Usuario</label>
                    <input type="text" name="user" class="form-control">
                </div>
                <div class="col-12">
                    <label for="" class="label-form text-white">password</label>
                    <input type="password" name="pass" class="form-control">
                </div>
                <button class="btn btn-primary mt-3" name="btn-login" type="submit">ingresar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="../js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>