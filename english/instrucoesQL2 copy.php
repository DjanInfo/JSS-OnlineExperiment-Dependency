<?php
session_start();
$_SESSION['idParticipante']=uniqid();
$_SESSION['totalTempo']=0;
$_SESSION['tentativas']=0;
$_SESSION['atividadesRespondidas']=0;
$_SESSION['sequencia']= 0;
$_SESSION['etapa']= 1;

//print_r($_SESSION);
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
    <?php
    include("conexao.php");
            $_SESSION['sequencia']= 2;
    ?>

    <div class="container">
        </br>

        <h5>Instructions </h5>
        </p>
        <ul>
            <li>Your participation in this study will require the understanding and the mental compilation of two source code snippets. You will have to execute three tasks concerning each snippet. It is not possible to proceed to the next task before the current task is answered correctly.</li>
            <li>We will count the number of attempts, so avoid providing random answers. We will measure the time used to answer each task, so avoid losing focus during the study. Only proceed if you really have time and availability to answer the questions. Advancing to the next task resets the timer.</li>
            <li>For each task, follow these steps:</li>
        </ul>
        <ol>
            <li>You should read the question carefully and mentally compile the code according to the proposed scenarios;</li>
            <li>You must answer the task when you know the answer and then move on to the next activity. Try to answer the task until you get it right;</li>
            <li>After answering the three tasks of the first source code you will be redirected to the second and last source code;</li>
        </ol>
        <form action="atividade.php" method="post">
                <button class="waves-effect waves-light btn" type="submit"> NEXT</button>
        </form>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../css/materialize/js/materialize.min.js"></script>
</body>

</html>