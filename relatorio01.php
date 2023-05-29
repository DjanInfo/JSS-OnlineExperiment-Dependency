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
                        echo "Relatório - Participantes";
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
        <div  class="container" >

    <div class="container">
        </br>
        <table> 
        <tr> 
            <td>Total Participantes do Quadrado Latino 1: </td> 
            <?php
            $consulta = "select DISTINCT idParticipante FROM experimento WHERE idsequencia = 1"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>Total Participantes do Quadrado Latino 2:</td> 
            <?php
            $consulta = "select DISTINCT idParticipante FROM experimento WHERE idsequencia = 2"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr><td></td></tr>
        <tr> 
            <td>Total Participantes na Survey:</td> 
            <?php
            $consulta = "select DISTINCT idParticipante FROM experimento"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
         <tr><td></td></tr>
        <tr> 
            <td>Total Participantes do Quadrado Latino 1 - RESULTADO COMPLETO: </td> 
            <?php
            $consulta = "select DISTINCT idParticipante FROM experimento WHERE codAtividade = 403 and acerto = 1"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>   
        <tr> 
            <td>Total Participantes do Quadrado Latino 2 - RESULTADO COMPLETO:</td> 
            <?php
            $consulta = "select DISTINCT idParticipante FROM experimento WHERE codAtividade = 303 and acerto = 1"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr><td></td></tr>
        <tr> 
            <td>Total Participantes da Survey - RESULTADO COMPLETO:</td> 
            <?php
            $consulta = "select DISTINCT idParticipante FROM experimento WHERE (codAtividade = 403 or codAtividade = 303) and acerto = 1"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
      </table> 
      <php mysqli_free_result($result); 
      mysqli_close($mysqli);?>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../../css/materialize/js/materialize.min.js"></script>
</body>

</html>