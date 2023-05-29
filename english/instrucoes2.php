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
    <title>Survey - Comprehensibility in Configurable Systems</title>
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
                <a href="#" class="brand-logo">Survey - Comprehensibility in Configurable Systems</a>
            </div>
        </nav>
    </header>

    <div class="container">

        <h5>YOU COMPLETED THE FIRST STEP</h5>
        </p>

        <ul>
            <li>Press the Next button below to be redirected to the second source code. 
                You will find a different source code snippet and a different set of tasks. 
                To run each task, you must perform the same procedure: you must mentally execute the source code and answer the questions. 
                After the final task you will be redirected to a form for you to provide information about your experience as a developer/researcher.</li>
        </ul>
        <form action="atividade.php" method="post">
                <button class="waves-effect waves-light btn" type="submit"> NEXT</button>
        </form>
    </div>

</body>
</html>