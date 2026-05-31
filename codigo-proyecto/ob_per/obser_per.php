<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrellas Dobles</title>
    <link rel="stylesheet" href="ob_per.css">
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
                    <li><a href="../introducir_datos/introducir_datos.php">Nueva observacion</a></li>
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
        <div class="do_tabla">
            <h2 class="DO_h2">Mis observaciones</h2>
        </div>
        <br>
        <div class="cat2_da">
            <table class="tabla_cat" id="tabla_scr2">
                <thead>
                    <tr class="tit_da">
                    <th>Fecha</th>
                        <th>Hora-TU</th>
                        <th>localidad</th>
                        <th>latitud</th>
                        <th>longitud</th>
                        <th>telescopio</th>
                        <th>ocultar</th>
                        <th>camara</th>
                        <th>ID-WDS</th>
                        <th>coordenadas-AR</th>
                        <th>coordenadas-DEC</th>
                        <th>RHO</th>
                        <th>THETA</th>
                        <th>MAG-1</th>
                        <th>MAG-2</th>
                        <th>Tipo-espectral</th>
                        <th>Naturaleza</th>
                        <th>notas</th>
                        <th>foto</th>
                        <th>dibujo</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    require_once "ob_per_conf.php";
                    while ($con_per->fetch()) {
                        $foto_t = base64_decode($foto);
                        $dib_t = base64_decode($dibujo);
                        $extension = pathinfo($foto, PATHINFO_EXTENSION);
                        $ext_dib = pathinfo($dibujo, PATHINFO_EXTENSION);
                        $imageId = uniqid()."_".rand(100, 500);
                        $dibId = uniqid()."_".rand(501, 999);
                        $filename = $imageId.'.jpg';
                        $filedib = $dibId.'.jpg';
                        $img = imagecreatefromstring($foto_t);
                        $img2 = imagecreatefromstring($dib_t);
                        $imagePath = "img/".$filename;
                        $dibPath = "img/".$filedib;
                        imagejpeg($img, $imagePath, 100);
                        imagejpeg($img2, $dibPath, 100);
                        $imgUrl = "img/".$filename;
                        $dibUrl = "img/".$filedib;
                        $_SESSION['image_id'] = $imageId;
                        echo "<tr class='tit_cat_c'>";
                        echo "<td>" . $fecha . "</td>";
                        echo "<td>" . $Hora . "</td>";
                        echo "<td>" . $localidad . "</td>";
                        echo "<td>" . $latitud . "</td>";
                        echo "<td>" . $longitud . "</td>";
                        echo "<td>" . $telescopio . "</td>";
                        echo "<td>" . $ocular . "</td>";
                        echo "<td>" . $camara . "</td>";
                        echo "<td>" . $wd . "</td>";
                        echo "<td>" . $cooA . "</td>";
                        echo "<td>" . $cooD . "</td>";
                        echo "<td>" . $rho . "</td>";
                        echo "<td>" . $theta . "</td>";
                        echo "<td>" . $mag1 . "</td>";
                        echo "<td>" . $mag2 . "</td>";
                        echo "<td>" . $tipoE . "</td>";
                        echo "<td>" . $naturaleza . "</td>";
                        echo "<td>" . $notas . "</td>";
                        echo "<td><a href='" . $imgUrl . "' target='_blank'>Ver imagen</a></td>";
                        echo "<td><a href='" . $dibUrl . "' target='_blank'>Ver imagen</a></td>";
                        echo "</tr>";
                    }
                ?>
                </tbody>
            </table>
            <script src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
            </script>
            <!-- DATATABLES -->
            <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
            </script>
                <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
            </script>
            <script src="obs_per.js"></script>
        </div>
    </div>
</body>