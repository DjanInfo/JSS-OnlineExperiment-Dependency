<?php
date_default_timezone_set('America/Sao_Paulo');
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
    <link type="text/css" rel="stylesheet" href="css/materialize/css/materialize.min.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="css/rainbow/themes/sjeiti.css" rel="stylesheet" type="text/css">
    <link href="css/estilo.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="style/styleCss.css" />

</head>

<body>
    <?php
    include("conexao.php");
    ?>
    <header>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">
                    <?php
                        echo "Relatório - Participantes e Email";
                    ?>
                </a>
            </div>
        </nav>
    </header>

    <div class="container">
        </br>
        <div >
    <a href="relatorio.php" class="waves-effect waves-light btn">Voltar</a>
        </div>
</br>
        <table> 
        <tr>
            <td><H5>PARTICIPANTES - EMAIL</H5></td>
        </tr>
        <?php
        $consulta = "select idParticipante, questao09 FROM questionario"; 
        $con = $mysqli->query($consulta) or die($mysqli->error);?>
        <?php while($dado = $con->fetch_array()) { ?>
        <tr>
        <td><?php echo $dado['idParticipante']; ?></td>
        <td><?php echo $dado['questao09']; ?></td>
        </tr>
        <?php } ?> 
      </table>
    </div>
    <php mysqli_free_result($con); 
      mysqli_close($mysqli);?>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../../css/materialize/js/materialize.min.js"></script>
</body>

</html>