<?php
require_once '../conexion/config.php';

$id = $_SESSION['id'];
$con_per = $con->prepare("SELECT Fecha, `Hora-TU`, localidad, latitud, longitud, telescopio, ocular, camara, `ID-WDS`, `coordenadas-AR`, `coordenadas-DEC`, RHO, THETA, `MAG-1`, `MAG-2`, `tipo-espectral`, Naturaleza, notas, foto, dibujo FROM observaciones_aficionados WHERE id_usuario = ?");
$con_per -> bind_param("s", $id);
$con_per ->execute();
$con_per->store_result();
$con_per->bind_result($fecha, $Hora, $localidad, $latitud, $longitud, $telescopio, $ocular, $camara, $wd, $cooA, $cooD, $rho, $theta, $mag1, $mag2, $tipoE, $naturaleza, $notas, $foto, $dibujo);
?>