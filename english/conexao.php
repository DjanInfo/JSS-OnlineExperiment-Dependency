<?php

$hostname = "localhost";
$bancodedados = "riocatol_experimento";
$usuario = "riocatol_experim";
$senha = "orkutD11L7";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
mysqli_set_charset($mysqli,"utf8");
if($mysqli->connect_errno){
    echo "Falha ao conectar: (". $mysqli->connect_errno . ") " . $mysqli->connect_error;
}