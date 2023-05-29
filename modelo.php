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
    $consulta = "SELECT DISTINCT idParticipante FROM experimento"; 
    $con = $mysqli->query($consulta) or die($mysqli->error);
    ?>
    <header>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">
                    <?php
                        echo "Relatório";
                    ?>
                </a>
            </div>
        </nav>
    </header>

    <div class="container">
        </br>
        <table> 
        <tr> 
          <td>Participante</td> 
          <td>QL</td> 
          <td>tentativa</td> 
          <td>acerto</td> 
          <td>Duração</td> 
        </tr> 
        <?php while($dado = $con->fetch_array()) { ?> 
        <tr> 
          <td><?php echo $dado['idParticipante']; ?></td>
          <td><?php echo $dado['idsequencia']; ?></td> 
          <td><?php echo $dado['tentativa']; ?></td> 
          <?php //echo date('d/m/Y', strtotime($dado['usu_datadecadastro'])); ?>
          <td><?php echo $dado['acerto']; ?></td> 
          <!--
              <a href="usu_editar.php?codigo=<?php //echo $dado['usu_codigo']; ?>">Editar</a> 
          -->
          <td><?php echo $dado['duracao']; ?></td> 
        </tr> 
        <?php } ?> 
      </table> 

    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../../css/materialize/js/materialize.min.js"></script>
</body>

</html>