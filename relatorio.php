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
          <td>Relatório de Participante</td>
          <td><a href="relatorio01.php">Exibir</a></td>
        </tr>
       
        <tr>
            <td>Análise de domínios e variáveis</td>
            <td><a href="relatorio02.php">Exibir</a></td>
        </tr>
 
        <tr>
        <td>Respostas sobre variáveis com dependências</td> 
        <td><a href="relatorio03.php">Exibir</a></td>
        </tr> 

        <tr>
         <td>Relatório de experiências e ocupação</td> 
         <td><a href="relatorio04.php">Exibir</a></td>
         </tr>

         <tr>
         <td>Participantes e e-mail</td> 
         <td><a href="relatorio05.php">Exibir</a></td> 
         </tr>

         <tr>
         <td>Tempo e tentativas - DOMINIO VACINAS </td> 
         <td><a href="relatorio09.php">Exibir</a></td> 
         </tr>
        
         <tr>
         <td>Tempo e tentativas - DOMINIO PRODUTOS </td> 
         <td><a href="relatorio10.php">Exibir</a></td> 
         </tr>
        </tr> 

        <tr>
         <td>Tempo e tentativas - com e sem dependência</td> 
         <td><a href="relatorio11.php">Exibir</a></td> 
         </tr>
        </tr> 

        <tr> 
        </tr>  
      </table> 

    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../../css/materialize/js/materialize.min.js"></script>
</body>

</html>