<?php
session_start();
$_SESSION['totalTempo']=0;
$_SESSION['tentativas']=0;
$_SESSION['atividadesRespondidas']=0;
$_SESSION['etapa']=2;
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

        <h5>VOCÊ CONCLUIU A PRIMEIRA ETAPA</h5>
        </p>

        <ul>
            <li>Ao avançar você será redirecionado para a segunda etapa. É um novo código-fonte com mais três atividades;</li>
            <li>O procedimento continua o mesmo, compile mentalmente o código e responda as perguntas.</li>
            <li>Ao final desta etapa você será redirecionado para um pequeno formulário para capturarmos informações sobre sua experiência como desenvolvedor/pesquisador.</li>
        </ul>
        <form action="atividade.php" method="post">
                <button class="waves-effect waves-light btn" type="submit"> AVANÇAR</button>
        </form>
    </div>

</body>
</html>