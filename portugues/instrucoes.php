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
    $consulta = "SELECT idsequencia FROM experimento WHERE idexperimento=(SELECT max(idexperimento) FROM experimento)";
    //echo $consulta;
    $result = $mysqli->query($consulta) or die($mysqli->error); 

    if($result->num_rows == 0)
        $_SESSION['sequencia']= 1;
    else{
        $linha = $result->fetch_assoc();
        //echo $linha['idsequencia'];
        if($linha['idsequencia']==1){
            $_SESSION['sequencia']= 2;
        } else{
            $_SESSION['sequencia']= 1;
        }
    }
    //$dado = $con->fetch_array() 
    
    ?>

    <div class="container">
        </br>

        <h5>Instruções - Leia atentamente</h5>
        </p>

        <ul>
            <li>A participação nesse estudo exigirá a compreensão e execução mental de dois códigos-fonte;</li>
            <li>Para cada código você será submetido a três atividades. Não é possível avançar até que uma atividade seja respondida corretamente. Contabilizaremos o número de tentativas. Então evite chutar valores aleatórios para as respostas das atividades;</li>
            <li>O tempo para responder cada uma das atividades será registrado. Então evite perder a atenção durante a realização da atividade. Só avance para a próxima atividade se realmente estiver com disponibilidade no momento para respondê-la;</li>
            <li>Ao avançar para a próxima atividade o tempo é reiniciado;</li>
            <li>Para cada atividade siga os seguintes passos:</li>
        </ul>
        <ol>
            <li>Leia atentamente a questão e realize a execução mental do código de acordo com cenário proposto para aquela atividade;</li>
            <li>Cada cenário envolve uma configuração de features habilitadas e desabilitadas, valores iniciais de variáveis e uma pergunta a ser respondida sobre a execução do código;</li>
            <li>Responda a atividade quando estiver certo da resposta e avance para próxima atividade. Tente até acertar;</li>
            <li>Após responder as três atividades do primeiro código fonte você será redirecionado para o segundo código;</li>
        </ol>
        <form action="atividade.php" method="post">
                <button class="waves-effect waves-light btn" type="submit"> AVANÇAR</button>
        </form>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../css/materialize/js/materialize.min.js"></script>
</body>

</html>