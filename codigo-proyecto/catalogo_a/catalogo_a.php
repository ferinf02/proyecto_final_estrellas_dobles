<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include ("../conexion/conexion.php");
    session_start();
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrellas dobles</title>
    <link rel="stylesheet" href="catalogo_a.css">
    <link rel="precontent" href="https://fonts.gstatic.com">
    <link
        href="https: //fonts.googleapis.com/css2?family-Josefin+Sans: ital, wght@0, 100; 0, 30
    0;0,400;0, 500;0, 600;0, 700; 1, 100; 1, 200; 1, 300; 1, 400; 1, 500; 1, 600; 1, 700&family-Montserrat: wght@700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
<header id="inicio">
        <!-- barra de navegacion -->
        <div>
            <nav>
                <a href="../index.html" class="logo"><i class='bx bxs-home' ></i><span>Estrellas dobles</span></a>
                <ul class="navbar">
                    <li><a href="#">Datos Aficionados y Oficiales</a></li>
                    <li><a href="../introducir_datos/introducir_datos.php">Nueva observacion</a></li>
                    <li><a href="../ob_per/obser_per.php">Mis observaciones</a></li>
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
    <!--mostrar datos de una base de datos-->
    <div class="cuerpo">
        <!--buscador-->
        <div class="do_tabla">
            <h2 class="DO_h2"><span>Datos oficiales</span></h2>
            <br>
        </div>
        <div class="cat1">
            <div class="buscador">
                <div>
                    <p>Selecciona un campo por el que buscar y escriba la estrella que esta buscando</p>
                </div>
                    <div class="listboton">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" target="_self">
                        <select name="listbtn" id="listbtn-catalogo">
                            <option value="name">name</option>
                            <option value="cst">cst</option>
                            <option value="coord">coord</option>
                            <option value="wds_name">wds_name</option>
                            <option value="last">last</option>
                            <option value="obs">obs</option>
                            <option value="pa">pa</option>
                            <option value="sep">sep</option>
                            <option value="m1">m1</option>
                            <option value="m2">m2</option>
                            <option value="d_mag">d_mag</option>
                            <option value="orb">orb</option>
                        </select>
                            <input type="text" placeholder="buscar" name="inp">
                            <button type="submit"><i class='bx bx-search-alt-2'></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="cat2">
                <table class="tabla_cat" id="tabla_scr">
                    <thead>
                        <tr class="tit">
                            <th>name</th>
                            <th>cst</th>
                            <th>SAO</th>
                            <th>coord</th>
                            <th>wds_name</th>
                            <th>last</th>
                            <th>obs</th>
                            <th>pa</th>
                            <th>sep</th>
                            <th>m1</th>
                            <th>m2</th>
                            <th>d_mag</th>
                            <th>orb</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                $camp_ln = $_POST['listbtn'];
                                $inp_ln = $_POST['inp'];
                                $con_ln = $con->prepare("SELECT * FROM datos_oficiales WHERE ".$camp_ln." =?");
                                $con_ln->bind_param("s", $inp_ln);
                                $con_ln->execute();
                                $con_ln->store_result();
                                $con_ln->bind_result($name, $cst, $SAO, $coord, $wds_name, $last, $obs, $pa, $sep, $m1, $m2, $d_mag, $orb);
                                $i=0;
                                while ($con_ln->fetch()) {
                                    echo "<tr data-id='$i' class='tit_cat_b'>";
                                    echo "<td>" . $name . "</td>";
                                    echo "<td>" . $cst . "</td>";
                                    echo "<td>" . $SAO . "</td>";
                                    echo "<td>" . $coord . "</td>";
                                    echo "<td id='wds'>" . $wds_name . "</td>";
                                    echo "<td>" . $last . "</td>";
                                    echo "<td>" . $obs . "</td>";
                                    echo "<td>" . $pa . "</td>";
                                    echo "<td>" . $sep . "</td>";
                                    echo "<td>" . $m1 . "</td>";
                                    echo "<td>" . $m2 . "</td>";
                                    echo "<td>" . $d_mag . "</td>";
                                    echo "<td>" . $orb . "</td>";
                                    echo "</tr>";
                                    $i = $i+1;
                                }
                            }
                        ?>
                    </tbody>
                </table>
                <script src="https://code.jquery.com/jquery-3.4.1.js"
                integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
                </script>
                <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
                </script>
                <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
                </script>
                <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
                <script src="catalogo_a.js"></script>
            </div>
        <div>
            <br>
            <br>
            <div class="do_tabla">
                <h2 class="DO_h2">Datos Aficionados</h2>
            </div>
            <br>
            <div class="cat2_da" >
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
                            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                    $camp_ln2 = $_POST['listbtn'];
                                    $inp2 = $_POST['inp'];
                                    if($camp_ln2 == "wds_name"){
                                        $publico = "si";
                                        $con_ln = $con->prepare("SELECT Fecha,`Hora-TU`,localidad,latitud,longitud,telescopio,ocular,camara,`ID-WDS`,`coordenadas-AR`,`coordenadas-DEC`,RHO,THETA,`MAG-1`,`MAG-2`,`tipo-espectral`,Naturaleza,notas,foto,dibujo FROM observaciones_aficionados WHERE `ID-WDS` =? AND publico = ?");
                                        $con_ln->bind_param("ss", $inp2, $publico);
                                        $con_ln->execute();
                                        $con_ln->store_result();
                                        $con_ln->bind_result($fecha, $Hora, $localidad, $latitud, $longitud, $telescopio, $ocular, $camara, $wd, $cooA, $cooD, $rho, $theta, $mag1, $mag2, $tipoE, $naturaleza, $notas, $foto, $dibujo);
                                        while ($con_ln->fetch()) {
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
                                    }
                                }
                        ?>
                    </tbody>
                </table>
                <script src="https://code.jquery.com/jquery-3.4.1.js"
                integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
                </script>
                <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
                </script>
                <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
            </div>
        </div>
    </div>

</body>