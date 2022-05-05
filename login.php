<?php

if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    
    require_once "vistas/libraries/password_compatibility_library.php";
}


require_once "vistas/db.php";


require_once "classes/Login.php";


$login = new Login();


if ($login->isUserLoggedIn() == true) {
    
    header("location: vistas/html/principal.php");

} else {
    
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="Software de Ventas">
        <meta name="author" content="Ventas">

        <link rel="shortcut icon" href="assets/images/favicon.png">

        <title>.: Software de Ventas :.</title>

        <link href="../plugins/switchery/switchery.min.css" rel="stylesheet" />

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

        <script src="assets/js/modernizr.min.js"></script>

    </head>
   <body style="	background: url(img/fondo.jpg) no-repeat center top;">
   
    

 

        <div class="wrapper-page">

            <div align="center">
                <img src="img/logo.png" class="img-responsive" alt="profile-image" width="175px" height="175px">
            </div><br>

            <form method="post" accept-charset="utf-8" action="login.php" name="loginform" class="form-signin">
                <?php

    if (isset($login)) {
        if ($login->errors) {
            ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <strong>Error!</strong>

                            <?php
foreach ($login->errors as $error) {
                echo $error;
            }
            ?>
                        </div>
                        <?php
}
        if ($login->messages) {
            ?>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <strong>Aviso!</strong>
                            <?php
foreach ($login->messages as $message) {
                echo $message;
            }
            ?>
                        </div>
                        <?php
}
    }
    ?>

                <div class="form-group row">
                    <div class="col-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="mdi mdi-account"></i></span>
                            <input class="form-control" type="text" name="usuario_users" required="" placeholder="Usuario" autocomplete="off" autofocus="">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="mdi mdi-radar"></i></span>
                            <input class="form-control" type="password" name="con_users" required="" placeholder="Clave" autocomplete="off">
                        </div>
                    </div>
                </div>

                <div class="form-group text-right m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login" id="submit"><i class='fa fa-unlock'></i> INGRESAR
                        </button>
                    </div>
                </div>
            </form>
        </div>


        <script>
            var resizefunc = [];
			
        </script>

        <!-- Plugins  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/tether.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
	
    </html>
    <?php
}