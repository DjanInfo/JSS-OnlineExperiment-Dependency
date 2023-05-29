<?php
session_start();
//print_r($_SESSION);
date_default_timezone_set('America/Sao_Paulo');
$dataInicio = date("Y-m-d H:i:s");
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

    <link href="../css/rainbow/themes/sjeiti.css" rel="stylesheet" type="text/css">
    <link href="../css/estilo.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../../style/styleCss.css" />

</head>

<body onload="start();">
    <?php
    include("conexao.php");
    ?>
    <header>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">
                    <?php
                    $etapa = $_SESSION['etapa'];
                    if ($etapa == 1)
                        echo "Source Code 01";
                    else
                        echo "Source Code  02";

                    ?>
                </a>
            </div>
        </nav>
    </header>

    <div class="container">
    <h2>Task 01 of 03</h2>
</p>

<ul>
    <li>Consider the features:</li>
    <li><p class="desabilitada"> <b>Disabled: CONTROL_PREGNANT, ORDER_QUEUE and CONTROL_AGE</b></li>
    <li>Consider the vector <b>p</b> previously filled in as follows:</li></br>
    <li><b>p[0]</b> : name = <b><i>Alice</i></b>, vaccinated =<b><i> false </i></b></li>
    <li><b>p[1]</b> : name = <b><i>Maria</i></b>, vaccinated =<b><i> false </i></b></li>
    <li><b>p[2]</b> : name = <b><i>Jessica</i></b>, vaccinated =<b><i> false </i></b></li>
    <li><b>p[3]</b> : name = <b><i>Vivian</i></b>, vaccinated =<b><i> false </i></b></li></br>
    <li>What will be the first name printed on line 44 <b><code>( p[i].name )</code></b> when the <code>vaccinate( )</code> function on line 31 is executed?</li>
</ul>
        </br>
        <table>
        <tr>
            <td width=20% style="vertical-align: middle;">

        <?php
        $atividadesExibida = $_SESSION['atividadesRespondidas'];
        //echo $atividadesExibida;
        $sequencia = $_SESSION['sequencia'];
        if ($sequencia == 1 && $etapa == 1) {
            if ($atividadesExibida == 0){
                echo "Consider the vector <b>p</b> previously filled in as follows:";
                echo "<br/>";
                echo "<img src=\"../images/vector1.png\" width=\"200\">";
        }else if ($atividadesExibida == 1)
                include("cod01/atividade02.html");
            else if ($atividadesExibida == 2)
                include("cod01/atividade03.html");
            else{
                echo "<script>location.href='instrucoes2.php';</script>";
                // header('Location:instrucoes2.php');
            }
        } else if ($sequencia == 1 && $etapa == 2) {
            if ($atividadesExibida == 0)
                include("cod04/atividade01.html");
            else if ($atividadesExibida == 1)
                include("cod04/atividade02.html");
            else if ($atividadesExibida == 2)
                include("cod04/atividade03.html");
            else{
                echo "<script>location.href='final.php';</script>";
                //header('Location:final.php');
            }
        } else if ($sequencia == 2 && $etapa == 1) {
            if ($atividadesExibida == 0)
                include("cod02/atividade01.html");
            else if ($atividadesExibida == 1)
                include("cod02/atividade02.html");
            else if ($atividadesExibida == 2)
                include("cod02/atividade03.html");
            else{
                echo "<script>location.href='instrucoes2.php';</script>";
                // header('Location:instrucoes2.php');
            }
               
        } else if ($sequencia == 2 && $etapa == 2) {
            if ($atividadesExibida == 0)
                include("cod03/atividade01.html");
            else if ($atividadesExibida == 1)
                include("cod03/atividade02.html");
            else if ($atividadesExibida == 2)
                include("cod03/atividade03.html");
            else{
                echo "<script>location.href='final.php';</script>";
                //header('Location:final.php');
            }
                
        } else
            header('Location:erro.php');


        ?>
</td>
        <form action="valida.php" method="post">
            <div class="row">
                <div class="input.field col s4">
                    <?php
                    if ($_SESSION['atividadesRespondidas'] < 3) {
                        echo ("Result:");
                        echo ("<input type=\"text\" value=\"\" name=\"resultado\" id=\"resultado\" required />");
                    }
                    ?>
                </div>
                </br>
                <?php
                //<input type="hidden" name="idParticipante" id="idParticipante" value=<?php echo $idParticipante ? > />

                //original<input type="hidden" name="dataInicio" id="dataInicio" value="<?php echo $dataInicio; ? >">
                if ($_SESSION['atividadesRespondidas'] < 3) {
                    echo ("<input type=\"hidden\" name=\"dataInicio\" id=\"dataInicio\" value=\"{$dataInicio}\">");
                    echo ("<button class=\"waves-effect waves-light btn\" type=\"submit\"> Enviar</button>");
                }
                ?>
            </div>
        </form>
    </div>
            
    </br></br>
    <td width=90% style="vertical-align: top;">
    <div class="container codigofonte">
        <?php
        if ($sequencia == 1 && $etapa == 1) {
            if ($atividadesExibida == 0)
                include("cod01/codigoAtividade01.php");
            else if ($atividadesExibida == 1)
                include("cod01/codigoAtividade02.php");
            else if ($atividadesExibida == 2)
                include("cod01/codigoAtividade03.php");
            else{
                exit;
            }
        } else if ($sequencia == 1 && $etapa == 2) {
            if ($atividadesExibida == 0)
                include("cod04/codigoAtividade01.php");
            else if ($atividadesExibida == 1)
                include("cod04/codigoAtividade02.php");
            else if ($atividadesExibida == 2)
                include("cod04/codigoAtividade03.php");
            else{
                exit;
            }
        } else if ($sequencia == 2 && $etapa == 1) {
            if ($atividadesExibida == 0)
                include("cod02/codigoAtividade01.php");
            else if ($atividadesExibida == 1)
                include("cod02/codigoAtividade02.php");
            else if ($atividadesExibida == 2)
                include("cod02/codigoAtividade03.php");
            else{
                exit;
            }
               
        } else if ($sequencia == 2 && $etapa == 2) {
            if ($atividadesExibida == 0)
                include("cod03/codigoAtividade01.php");
            else if ($atividadesExibida == 1)
                include("cod03/codigoAtividade02.php");
            else if ($atividadesExibida == 2)
                include("cod03/codigoAtividade03.php");
            else{
                exit;
            }
                
        } else
            header('Location:erro.php');
        ?>
    </div>
    </td>
    </table>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../../css/materialize/js/materialize.min.js"></script>
</body>

</html>