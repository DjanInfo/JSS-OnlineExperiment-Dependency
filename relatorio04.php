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
                        echo "Relatório - Experiência";
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
            <td><H5>TEMPO DE EXPERIÊNCIA COM LINGUAGENS DE PROGRAMAÇÃO</H5></td>
        </tr>
        <tr> 
            <td>Mais de 10 anos:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao05 = '+10'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>De 5 a 10 anos:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao05 = '5-10'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>De 2 a 5 anos:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao05 = '2-5'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>Menos de 2 anos:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao05 = '-2'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>Não responderam:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao05 = 'NAO'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr><td></td></tr>
        <tr>
            <td><H5>TEMPO DE EXPERIÊNCIA COM LINGUAGEM C</H5></td>
        </tr>
        <tr> 
            <td>Mais de 10 anos:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao06 = '+10'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>De 5 a 10 anos:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao06 = '5-10'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>De 2 a 5 anos:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao06 = '2-5'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>Menos de 2 anos:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao06 = '-2'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>Não responderam:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao06 = 'NAO'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr><td></td></tr>
        <tr>
            <td><H5>EXPERIÊNCIA COM #IFDEF</H5></td>
        </tr>
        <tr> 
            <td>Pesquisador em #ifdef:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao07 = 'researcher'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>Trabalha frequentemente:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao07 = 'frequently'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>Já teve pouco contato:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao07 = 'fewtimes'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>Nunca teve contato - aprendeu durante a survey:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao07 = 'understood'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>Fez a survey sem precisar saber ifdef:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao07 = 'notneed'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>Não responderam:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao07 = 'NAO'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr><td></td></tr>
        <tr>
            <td><H5>OCUPAÇÃO PRINCIPAL</H5></td>
        </tr>
        <tr> 
            <td>Estudante de graduação:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao08 LIKE '%Graduation%'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>Estudante de especialização:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao08 LIKE '%Specialization%'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>Estudante de mestrado:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao08 LIKE '%MSc_student%'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>Estudante de doutorado:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao08 LIKE '%PhD_student%'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>Mestre:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao08 LIKE '%PhD%'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>Doutor:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao08 LIKE '%MSc%'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>Professor:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao08 LIKE '%Professor%'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>Trabalha na industria:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao08 LIKE '%software_industry%'"; 
            $result = mysqli_query($mysqli, $consulta);       
            $row = mysqli_num_rows($result)?>
            <td><?php echo $row; ?></td>
        </tr>
        <tr> 
            <td>Não responderam:</td> 
            <?php
            $consulta = "select * FROM questionario WHERE questao08 =''"; 
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