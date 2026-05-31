<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrellas Dobles</title>
    <link rel="stylesheet" href="introducir_datos.css">
    <link rel="precontent" href="https://fonts.gstatic.com">
    <link href= "https: //fonts.googleapis.com/css2?family-Josefin+Sans: ital, wght@0, 100; 0, 30
    0;0,400;0, 500;0, 600;0, 700; 1, 100; 1, 200; 1, 300; 1, 400; 1, 500; 1, 600; 1, 700&family-Montserrat: wght@700;800;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../imagenes/autoescuela (1).png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!--
    <script src="introducir_datos.js"></script>
    -->
</head>
<body>
    <header id="inicio">
        <!-- barra de navegacion -->
        <div>
        <nav>
                <a href="../index.html" class="logo"><i class='bx bxs-home' ></i><span>Estrellas dobles</span></a>
                <ul class="navbar">
                    <li><a href="../catalogo_a/catalogo_a.php">Datos Aficionados y Oficiales</a></li>
                    <li><a href="introducir_datos.php">Nueva observacion</a></li>
                    <li><a href="../ob_per/Obser_per.php">Mis observaciones</a></li>
                </ul>
                <div class="main">
                    <a href="http://localhost/web/login/login.php" class="user"><i class='bx bxs-user'></i>Cerrar Sesion</a>
                    <div class="bx bx-menu" id="menu-icon"></div>
                </div>
            </nav>
        </div>
        <!--Fin de la barra de navegaccion-->
        <script type="text/javascript" src="../script.js"></script>
    </header>
    <div class="cuerpo">
        <div class="tit_form">
            <h2 class="h2_form">Introduce los datos de la observacion</h2>
        </div>
        <div class="formulario">
            <form action="formulario_id.php" class="form_subd" id="mi_formulario" method="post" enctype="multipart/form-data">
                <div class="ct">
                    <label for="fecha">Fecha</label>
                    <input type="date" id="fecha" placeholder="dd/mm/yyyy" name="fecha">
                </div>
                <div class="ct">
                    <label for="hora">Hora UT</label>
                    <input type="time" id="hora" placeholder="HH:MM" name="hora">
                </div>
                <div class="ct">
                    <label for="localidad">Localidad</label>
                    <input type="text" id="localidad" placeholder="localidad" name="localidad">
                </div>
                <div class="ct">
                    <label for="latitud">latitud</label>
                    <input type="text" id="latitud" placeholder="latitud" name="latitud">
                </div>
                <div class="ct">
                    <label for="longitud">longitud</label>
                    <input type="text" id="longitud" placeholder="longitud" name="longitud">
                </div>
                <div class="ct">
                    <label for="telescopio">telescopio</label>
                    <input type="text" id="telescopio" placeholder="telescopio" name="telescopio">
                </div>
                <div class="ct">
                    <label for="ocular">Ocular</label>
                    <input type="text" id="ocular" placeholder="Ocular" name="ocular">
                </div>
                <div class="ct">
                    <label for="camara">Camara</label>
                    <input type="text" id="camara" placeholder="Camara" name="camara">
                </div>
                <div class="ct">
                    <label for="wds">id-wds</label>
                    <input type="text" id="wds" placeholder="ID-WDS" name="wds">
                </div>
                <div class="ct">
                    <label for="coord-a">Coordenadas-AR</label>
                    <input type="text" id="coord-a" placeholder="Coordenadas-AR" name="coora">
                </div>
                <div class="ct">
                    <label for="coord-d">Coordenadas-Dec</label>
                    <input type="text" id="coord-d" placeholder="Coordenadas-Dec" name="coord">
                </div>
                <div class="ct">
                    <label for="rho">RHO</label>
                    <input type="text" id="rho" placeholder="RHO" name="rho">
                </div>
                <div class="ct">
                    <label for="theta">THETA</label>
                    <input type="text" id="theta" placeholder="theta" name="theta">
                </div>
                <div class="ct">
                    <label for="mag1">Mag-1</label>
                    <input type="text" id="mag1" placeholder="Mag-1" name="mag1">
                </div>
                <div class="ct">
                    <label for="mag2">Mag-2</label>
                    <input type="text" id="mag2" placeholder="Mag-2" name="mag2">
                </div>
                <div class="ct">
                    <label for="ti_es">Tipo espectral</label>
                    <input type="text" id="ti_es" placeholder="Tipo espectral" name="ties">
                </div>
                <div class="ct">
                    <label for="nat">Naturaleza</label>
                    <input type="text" id="nat" placeholder="Naturaleza" name="nat">
                </div>
                <div class="ct">
                    <label for="nota">Notas</label>
                    <input type="text" id="notas" placeholder="Notas" name="notas">
                </div>
                <div class="ct">
                    <label for="foto">Foto</label>
                    <input type="file" id="foto" name="foto">
                </div>
                <div class="ct">
                    <label for="dib">Dibujo</label>
                    <input type="file" class="enciar" name="dib">
                </div>
                <div class="publico">
                <label for="publ">Quieres que sea publico?</label>
                <input type="checkbox" id="publ" name="public" >
                </div>
                <input type="submit" value="enviar" class="enviar">
            </form>
        </div>
    </div>
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo '<script>alert("Faltan campos por rellenar");</script>';
    }
    ?>
</body>