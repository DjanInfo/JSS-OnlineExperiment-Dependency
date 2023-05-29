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
                        echo "Relatório - Domínio e dependência";
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
            <td><H5>DOMÍNIO</H5></td>
        </tr>
        <tr> 
            <td>02 dois dominios tem mesma dificuldade:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao01 = '2'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>Dominio Vacina é mais difícil:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao01 = 'VAC'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>Dominio Produto é mais difícil:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao01 = 'PRO'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>Não responderam:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao01 = 'NAO'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr><td></td></tr>
        <tr>
            <td><H5>VARIÁVEIS</H5></td>
        </tr>
        <tr> 
            <td>Mais dificuldade em variáveis com dependência:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao02 = 'DEP'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>Mais dificuldade em variáveis sem dependência:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao02 = 'SEM'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>Mesmo nível de dificuldades com e sem dependência:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao02 = 'AMB'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>Não responderam:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao02 = 'NAO'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
      </table> 
      <php mysqli_free_result($result);?>
    </div>
    <div class="container">
        </br>
        <table> 
        <tr>
            <td><H5>JUSTIFICATIVAS</H5></td>
        </tr>
        <?php
        $consulta = "select questao03 FROM questionario"; 
        $con = $mysqli->query($consulta) or die($mysqli->error);?>
        <?php while($dado = $con->fetch_array()) { ?>
        <tr>
        <td><?php echo $dado['questao03']; ?></td>
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