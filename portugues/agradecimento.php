<?php
session_start();
include("conexao.php");
$idParticipante = $_SESSION['idParticipante'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey - Compreensibilidade em Sistemas Configuráveis</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize/css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/styleCss.css" />
</head>
<body>
    <header>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Survey - Compreensibilidade em Sistemas Configuráveis</a>
            </div>
        </nav>
    </header>
    <div class="container">
    
<?php
if (isset($_POST['group1'])) {
    $questao01 = $_POST['group1'];
}else{
    $questao01 = "NAO";
}

if (isset($_POST['group2'])) {
    $questao02 = $_POST['group2'];
}else{
    $questao02 = "NAO";
}

if (isset($_POST['group2'])) {
    $questao02 = $_POST['group2'];
}else{
    $questao02 = "NAO";
}

if (isset($_POST['justify'])) {
    $questao03 = $_POST['justify'];
}else{
    $questao03 = "NAO";
}

if (isset($_POST['difference'])) {
    $questao04 = $_POST['difference'];
}else{
    $questao04 = "NAO";
}

if (isset($_POST['group3'])) {
    $questao05 = $_POST['group3'];
}else{
    $questao05 = "NAO";
}

if (isset($_POST['group4'])) {
    $questao06 = $_POST['group4'];
}else{
    $questao06 = "NAO";
}

if (isset($_POST['group5'])) {
    $questao07 = $_POST['group5'];
}else{
    $questao07 = "NAO";
}

$questao08 = "";
if (isset($_POST['Graduation']))
$questao08 .= "Graduation - ";
if (isset($_POST['Specialization']))
$questao08 .= "Specialization - ";
if (isset($_POST['MSc_student']))
$questao08 .= "MSc_student - ";
if (isset($_POST['PhD_student']))
$questao08 .= "PhD_student - ";
if (isset($_POST['PhD']))
$questao08 .= "PhD - ";
if (isset($_POST['MSc']))
$questao08 .= "MSc - ";
if (isset($_POST['Professor']))
$questao08 .= "Professor - ";
if (isset($_POST['software_industry']))
$questao08 .= "software_industry";

if (isset($_POST['email'])) {
    $questao09 = $_POST['email'];
}else{
    $questao09 = "NAO";
}

$sql = "INSERT INTO questionario (idParticipante, questao01, questao02, questao03, questao04, questao05, questao06, questao07, questao08, questao09) VALUES ('" . $idParticipante . "', '" . $questao01 . "', '" . $questao02 . "', '" . $questao03 . "', '" . $questao04 . "','" . $questao05 . "', '" . $questao06 . "', '" . $questao07 . "', '" . $questao08 . "', '" . $questao09 . "')";
$mysqli->query($sql);
//echo $sql;
session_destroy();
?>

        <h5>Obrigado! Você finalizou as atividades. </h5>
      
</body>
</html>