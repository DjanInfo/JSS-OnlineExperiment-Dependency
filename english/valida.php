<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey - Comprehensibility in Configurable Systems</title>
</head>
<body>
<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
include("conexao.php");
if (isset($_POST['resultado'])) {
    $resposta = $_POST["resultado"];
    $resposta = strtolower($resposta);
    $dataFinal = date("Y-m-d H:i:s");
    $idParticipante = $_SESSION['idParticipante'];
    $sequencia = $_SESSION['sequencia'];
    $etapa = $_SESSION['etapa'];

    if (isset($_POST['dataInicio'])) {
        $dataInicio = $_POST['dataInicio'];
    } else {
        $dataInicio = null;
    }

    $diff_time = (strtotime($dataFinal) - strtotime($dataInicio));
    $tempoTotal = $_SESSION['totalTempo'] += $diff_time;
    $tentativas = $_SESSION['tentativas'] += 1;

    $atividadeRespondida = $_SESSION['atividadesRespondidas'];
        if ($sequencia == 1 && $etapa == 1) {
            if ($atividadeRespondida == 0){
                $atividadeRespondida = 101;
                $gabarito = 'alice';
            }else if ($atividadeRespondida == 1){
                $atividadeRespondida = 102;
                $gabarito = 42;
            }else if ($atividadeRespondida == 2){
                $atividadeRespondida = 103;
                $gabarito = 'jessica';
            }else{
                $atividadeRespondida = 0;
            }
        } else if ($sequencia == 1 && $etapa == 2) {
            if ($atividadeRespondida == 0){
                $atividadeRespondida = 401;
                $gabarito = 500;
            }else if ($atividadeRespondida == 1){
                $atividadeRespondida = 402;
                $gabarito = 0;
            }else if ($atividadeRespondida == 2){
                $atividadeRespondida = 403;
                $gabarito = 150;
            }else{
                $atividadeRespondida = 0;
            }
        } else if ($sequencia == 2 && $etapa == 1) {
            if ($atividadeRespondida == 0){
                $atividadeRespondida = 201;
                $gabarito = 1000;
            }else if ($atividadeRespondida == 1){
                $atividadeRespondida = 202;
                $gabarito = 200;
            }else if ($atividadeRespondida == 2){
                $atividadeRespondida = 203;
                $gabarito = 200;
            }else{
                $atividadeRespondida = 0;
            }   
        } else if ($sequencia == 2 && $etapa == 2) {
            if ($atividadeRespondida == 0){
                $atividadeRespondida = 301;
                $gabarito = 'shower';
            }else if ($atividadeRespondida == 1){
                $atividadeRespondida = 302;
                $gabarito = 2;
            }else if ($atividadeRespondida == 2){
                $atividadeRespondida = 303;
                $gabarito = 'cement';
            }else{
                $atividadeRespondida = 0;
            }    
        } 

    if ($resposta == $gabarito) {
        $sql = "INSERT INTO experimento (idParticipante, codAtividade, dataHoraInicio, acerto, dataHoraFinal, duracao, tentativa, idsequencia) VALUES ('" . $idParticipante . "', $atividadeRespondida, '" . $dataInicio . "', 1, '" . $dataFinal . "', $tempoTotal, $tentativas, $sequencia)";
        $mysqli->query($sql);
        //echo $sql;
        $_SESSION['totalTempo'] = 0;
        $_SESSION['tentativas'] = 0;
        $_SESSION['atividadesRespondidas'] += 1;
        //echo $_SESSION['atividadesRespondidas'];
        $message = "Right answer. You will be redirected to the next task";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>location.href='atividade.php';</script>";
        //header('Location:atividade.php');
    } else {
        $sql = "INSERT INTO experimento (idParticipante, codAtividade, dataHoraInicio, acerto, dataHoraFinal, duracao, tentativa, idsequencia) VALUES ('" . $idParticipante . "', $atividadeRespondida, '" . $dataInicio . "', 0, '" . $dataFinal . "', $diff_time, $tentativas, $sequencia)";
        $mysqli->query($sql);
        //echo $sql;
        $message = "The answer is incorrect. Try again!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>location.href='atividade.php';</script>";
        //header('Location:atividade.php');
    }
}
?>
</body>
</html>