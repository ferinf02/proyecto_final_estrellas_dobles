<?php
$host = "localhost";
$user = "root";
$passw = "";
$BD = "estrellas_multiples";

$con = mysqli_connect($host,$user,$passw,$BD);

if($con->connect_errno){
    die("Ha ocurrido un error");
}