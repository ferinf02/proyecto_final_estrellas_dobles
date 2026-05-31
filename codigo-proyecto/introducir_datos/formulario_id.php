<?php
require_once '../conexion/config.php';
session_start();

if($con->connect_errno){
    die("Ha ocurrido un error");
}
$fec = $_POST['fecha'];
$hor = $_POST['hora'];
$loc = $_POST['localidad'];
$lat = $_POST['latitud'];
$lon = $_POST['longitud'];
$tel = $_POST['telescopio'];
$ocu = $_POST['ocular'];
$cam = $_POST['camara'];
$wds = $_POST['wds'];
$coa = $_POST['coora'];
$cod = $_POST['coord'];
$rho = $_POST['rho'];
$the = $_POST['theta'];
$ma1 = $_POST['mag1'];
$ma2 = $_POST['mag2'];
$tie = $_POST['ties'];
$nat = $_POST['nat'];
$not = $_POST['notas'];
$fot = $_FILES['foto']['tmp_name'];
$dib = $_FILES['dib']['tmp_name'];
$id = $_SESSION['id'];

if(empty(trim($fec)) || empty(trim($hor)) || empty(trim($loc)) || empty(trim($lat)) || empty(trim($lon)) || empty(trim($tel)) || empty(trim($ocu)) || empty(trim($cam)) || empty(trim($wds)) || empty(trim($coa)) || empty(trim($cod)) || empty(trim($rho)) || empty(trim($the)) || empty(trim($ma1)) || empty(trim($ma2)) || empty(trim($tie)) || empty(trim($nat)) || empty(trim($not)) || empty(trim($fot)) || empty(trim($dib))){
    header("Location: introducir_datos.php?error=1");
}else{
    //comprobar el checkbox
    if(isset($_POST['public']) && $_POST['public'] == 1){
        $pub = "si";
    }else{
        $pub = "no";
    }
    $con_prub = $con->prepare("SELECT wds_name FROM datos_oficiales where wds_name =?");
    $con_prub->bind_param("s", $wds);
    if($con_prub->execute()){
        $con_prub->free_result();
        $fotoBase64 = base64_encode(file_get_contents($fot));
        $dibBase64 = base64_encode(file_get_contents($dib));
        // Resto del código para guardar en la base de datos
        $con_id = $con->prepare("INSERT INTO observaciones_aficionados (Fecha, `Hora-TU`, localidad, latitud, longitud, telescopio, ocular, camara, `ID-WDS`, `coordenadas-AR`, `coordenadas-DEC`, RHO, THETA, `MAG-1`, `MAG-2`, `tipo-espectral`, Naturaleza, notas, publico,`id_usuario`, foto, dibujo) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    
        $con_id->bind_param("ssssssssssssssssssssss", $fec, $hor, $loc, $lat, $lon, $tel, $ocu, $cam, $wds, $coa, $cod, $rho, $the, $ma1, $ma2, $tie, $nat, $not, $pub,$id, $fotoBase64, $dibBase64);
    
        if($con_id->execute()) {
            header("Location: introducir_datos.php");
            echo "<script>alert('La consulta se ha ejecutado correctamente.');</script>";
        } else {
            echo "<script>alert('Error al ejecutar la consulta.');</script>";
        }
    }else{
        header("Location: introducir_datos.php");
    }

}

?>