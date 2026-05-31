<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrellas Dobles</title>
    <link rel="stylesheet" href="login.css">
    <link rel="precontent" href="https://fonts.gstatic.com">
    <link href= "https: //fonts.googleapis.com/css2?family-Josefin+Sans: ital, wght@0, 100; 0, 30
    0;0,400;0, 500;0, 600;0, 700; 1, 100; 1, 200; 1, 300; 1, 400; 1, 500; 1, 600; 1, 700&family-Montserrat: wght@700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <header id="inicio">
        <!-- barra de navegacion -->
        <div>
            <nav>
                <a href="../index.html" class="logo"><i class='bx bxs-home' ></i><span>Estrellas dobles</span></a>
                <ul class="navbar">
                    <li><a href="../index.html#conocenos">¿Que son?</a></li>
                    <li><a href="../index.html#guia">Tipos</a></li>
                    <li><a href="../catalogo/catalogo.php">Datos oficiales</a></li>
                </ul>
                <div class="main">
                    <div class="bx bx-menu" id="menu-icon"></div>
                </div>
            </nav>
        </div>
        <!--Fin de la barra de navegaccion-->
        <script type="text/javascript" src="../script.js"></script>
    </header>
    <div class="cuerpo">
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido</h2>
                <p>Si ya tienes una cuenta por favor inicia sesion aqui</p>
                <button class="sign-up-btn">Iniciar Sesion</button>
            </div>
        </div>
        <form id="registration-form" action="../conexion/config.php" method="post" class="formulario">
            <h2 class="create-account">Crear una cuenta</h2>
            <p class="cuenta-gratis">Crear una cuenta gratis</p>
            <input type="text" placeholder="Nombre de usuario" name="usuario">
            <input type="text" placeholder="Nombre" name="nombre">
            <input type="text" placeholder="Apellidos" name="apellidos">
            <input type="email" placeholder="Email" name="email">
            <input type="password" placeholder="Contraseña" name="passwd">
            <input type="submit" id="registro-btn" name="button" value="Registrarse">
            <br>
            <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == 1) {
                        echo "Faltan campos por rellenar";
                    } else if ($_GET['error'] == 2) {
                    echo "La contraseña debe tener al menos 8 caracteres";
                    }else if($_GET['error'] == 4){
                        echo "registrado con exito";
                    }
                } else {
                    echo "";
                }
            ?>
        </form>
    </div>
    <div class="container-form sign-in">
        <form action="../conexion/config.php" method="post" class="formulario">
            <h2 class="create-account">Iniciar Sesion</h2>
            <p class="cuenta-gratis">¿Aun no tienes una cuenta?</p>
            <input type="email" placeholder="Email" name="email_i">
            <input type="password" placeholder="Contraseña" name="passwd_i">
            <input type="submit" value="Iniciar Sesion" name="button">
            <br>
            <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == 1) {
                        echo "Faltan campos por rellenar";
                    } else if ($_GET['error'] == 2) {
                    echo "La contraseña debe tener al menos 8 caracteres";
                    }else if ($_GET['error'] == 3){
                        echo "la contraseña o el usuario no coincide";
                    }
                } else {
                    echo "";
                }
            ?>
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido de nuevo</h2>
                <p>Si aun no tienes una cuenta por favor registrese aqui</p>
                <button class="sign-in-btn">Registrarse</button>
            </div>
        </div>
    </div>
    <script src="scripts-login.js"></script>
    </div>
</body>
</html>