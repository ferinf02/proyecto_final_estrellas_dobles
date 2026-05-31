<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include ("../conexion/conexion.php");
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrellas dobles</title>
    <link rel="stylesheet" href="catalogo.css">
    <link rel="precontent" href="https://fonts.gstatic.com">
    <link
        href="https: //fonts.googleapis.com/css2?family-Josefin+Sans: ital, wght@0, 100; 0, 30
    0;0,400;0, 500;0, 600;0, 700; 1, 100; 1, 200; 1, 300; 1, 400; 1, 500; 1, 600; 1, 700&family-Montserrat: wght@700;800;900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="imagenes/autoescuela (1).png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <header id="inicio">
        <!-- barra de navegacion -->
        <div>
            <nav>
                <a href="../index.html" class="logo"><i
                        class='bx bxs-star bx-flip-vertical bx-fade-up'></i></i><span>Estrellas dobles</span></a>
                <ul class="navbar">
                    <li><a href="../index.html#conocenos">¿Que son?</a></li>
                    <li><a href="../index.html#guia">Tipos</a></li>
                    <li><a href="catalogo.html">Datos oficiales</a></li>
                </ul>
                <div class="main">
                    <a href="../login/login.php" class="user"><i class='bx bxs-user'></i>iniciar sesion</a>
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
                        // Generar filas HTML para cada fila de la tabla
                        $i=0;
                        while ($con_ln->fetch()) {
                            echo "<tr class='tit_cat_b'>";
                                echo "<td>" . $name . "</td>";
                                echo "<td>" . $cst . "</td>";
                                echo "<td>" . $SAO . "</td>";
                                echo "<td>" . $coord . "</td>";
                                echo "<td>" . $wds_name . "</td>";
                                echo "<td>" . $last . "</td>";
                                echo "<td>" . $obs . "</td>";
                                echo "<td>" . $pa . "</td>";
                                echo "<td>" . $sep . "</td>";
                                echo "<td>" . $m1 . "</td>";
                                echo "<td>" . $m2 . "</td>";
                                echo "<td>" . $d_mag . "</td>";
                                echo "<td>" . $orb . "</td>";
                                echo "</tr>";
                        }
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
            <script>
                $(document).ready(function() {
                    $('#tabla_scr').DataTable({
                        "pagingType": "full_numbers",
                        "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
                        "language": {
                            "paginate": {
                            "previous": "<i class='fa fa-angle-left'></i>",
                            "next": "<i class='fa fa-angle-right'></i>"
                            }
                        },
                    "dom": '<"top"i>rt<"bottom"flp><"clear">'
                });
            });
            </script>
        </div>
    </div>
</body>
