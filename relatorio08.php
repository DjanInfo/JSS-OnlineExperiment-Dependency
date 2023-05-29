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
            
    <div>
        </br>
        <table> 
        <tr> 
            <td><b>Tipo do código</b></td> 
            <td><b>Média tempo</b></td>
            <td><b>Total tentativas</b></td>
        </tr>
        <tr> 
            <td>SEM DEPENDÊNCIA - Domínio Vacinas: </td> 
            <?php
            $consulta = "select avg(duracao), sum(tentativa) FROM experimento WHERE (codAtividade = 101 or codAtividade = 102 or codAtividade = 103) and acerto = 1"; 
            $con = $mysqli->query($consulta) or die($mysqli->error);?>
            <?php while($dado = $con->fetch_array()) { ?>
            <td><?php echo $dado['avg(duracao)']; ?></td>
            <td><?php echo $dado['sum(tentativa)']; ?></td>
            <?php } ?>
        </tr>
        <tr> 
            <td>SEM DEPENDÊNCIA - Domínio produtos: </td> 
            <?php
            $consulta = "select avg(duracao), sum(tentativa) FROM experimento WHERE (codAtividade = 301 or codAtividade = 302 or codAtividade = 303) and acerto = 1"; 
            $con = $mysqli->query($consulta) or die($mysqli->error);?>
            <?php while($dado = $con->fetch_array()) { ?>
            <td><?php echo $dado['avg(duracao)']; ?></td>
            <td><?php echo $dado['sum(tentativa)']; ?></td>
            <?php } ?>
        </tr>
        <tr> 
            <td>SEM DEPENDÊNCIA - Todos os códigos: </td> 
            <?php
            $consulta = "select avg(duracao), sum(tentativa) FROM experimento WHERE (codAtividade = 101 or codAtividade = 102 or codAtividade = 103 or codAtividade = 301 or codAtividade = 302 or codAtividade = 303) and acerto = 1"; 
            $con = $mysqli->query($consulta) or die($mysqli->error);?>
            <?php while($dado = $con->fetch_array()) { ?>
            <td><?php echo $dado['avg(duracao)']; ?></td>
            <td><?php echo $dado['sum(tentativa)']; ?></td>
            <?php } ?>
        </tr>   
        <tr><td></td></tr>
        <tr> 
            <td>COM DEPENDÊNCIA - Domínio Vacinas: </td> 
            <?php
            $consulta = "select avg(duracao), sum(tentativa) FROM experimento WHERE (codAtividade = 201 or codAtividade = 202 or codAtividade = 203) and acerto = 1"; 
            $con = $mysqli->query($consulta) or die($mysqli->error);?>
            <?php while($dado = $con->fetch_array()) { ?>
            <td><?php echo $dado['avg(duracao)']; ?></td>
            <td><?php echo $dado['sum(tentativa)']; ?></td>
            <?php } ?>
        </tr>
        <tr> 
            <td>COM DEPENDÊNCIA - Domínio produtos: </td> 
            <?php
            $consulta = "select avg(duracao), sum(tentativa) FROM experimento WHERE (codAtividade = 401 or codAtividade = 402 or codAtividade = 403) and acerto = 1"; 
            $con = $mysqli->query($consulta) or die($mysqli->error);?>
            <?php while($dado = $con->fetch_array()) { ?>
            <td><?php echo $dado['avg(duracao)']; ?></td>
            <td><?php echo $dado['sum(tentativa)']; ?></td>
            <?php } ?>
        </tr>
        <tr> 
            <td>COM DEPENDÊNCIA - Todos os códigos: </td> 
            <?php
            $consulta = "select avg(duracao), sum(tentativa) FROM experimento WHERE (codAtividade = 201 or codAtividade = 202 or codAtividade = 203 or codAtividade = 401 or codAtividade = 402 or codAtividade = 403) and acerto = 1"; 
            $con = $mysqli->query($consulta) or die($mysqli->error);?>
            <?php while($dado = $con->fetch_array()) { ?>
            <td><?php echo $dado['avg(duracao)']; ?></td>
            <td><?php echo $dado['sum(tentativa)']; ?></td>
            <?php } ?>
        </tr>  
      </table> 
      <php mysqli_free_result($result); 
      mysqli_close($mysqli);?>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../../css/materialize/js/materialize.min.js"></script>
</body>

</html>