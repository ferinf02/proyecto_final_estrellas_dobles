<?php
$host = "localhost";
$user = "root";
$passw = "";
$BD = "estrellas_multiples";

$con = mysqli_connect($host,$user,$passw,$BD);

if($con->connect_errno){
    die("Ha ocurrido un error");
}
/*formulario inicio/registro */
if (strpos($_SERVER['HTTP_REFERER'], 'login.php') !== false) {
    $boton = $_POST['button'];
    $adm = "no";
    if($boton == "Registrarse"){
        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $apellido = $_POST['apellidos'];
        $email = $_POST['email'];
        $passwd = $_POST['passwd'];
        if(empty($nombre)||empty($usuario)||empty($apellido)||empty($email)||empty($passwd)){
            header("Location: ../login/login.php?error=1");
            exit();
        }
        else{
            if(strlen($passwd)<8){
                header("Location: ../login/login.php?error=2");
                exit();
            }
            $con_regist = $con->prepare("INSERT INTO usuarios (usuario, contraseña, email, nombre, apellidos, admin) VALUES (?,?,?,?,?,?)");
            $con_regist->bind_param("ssssss", $usuario, $passwd, $email, $nombre, $apellido, $adm);
            if (!$con_regist->execute()){
                echo "Error al insertar el registro en la base de datos: " . mysqli_error($con);
            }
            else{
                session_start();
                header("Location: http://localhost/web/login/login.php?error=4");
            }
        }
    }
    else if($boton != "Registrarse"){
        $email = $_POST['email_i'];
        $passwd = $_POST['passwd_i'];
        if(empty($email) || empty($passwd)) {
            header("Location: ../login/login.php?error=1");
            $_SESSION['mensaje'] = "¡Tienes que rellenar todos los datos!";
            exit();
        }
        else{
            $con_inc = $con->prepare("SELECT id FROM usuarios WHERE email = ? and contraseña = ?");
            $con_inc -> bind_param("ss", $email, $passwd);
            $con_inc ->execute();
            $res_inc = $con_inc->get_result();
            if(mysqli_num_rows($res_inc)>0){
                session_start();
                $row = $res_inc->fetch_assoc();
                $id = $row["id"];
                $_SESSION['id'] = $id;
                header("Location: http://localhost/web/catalogo_a/catalogo_a.php");
            }
            else{
                header("Location: ../login/login.php?error=3");
                exit();
            }
        }
    }
}

?>