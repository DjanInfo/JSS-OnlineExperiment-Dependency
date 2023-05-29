<?php
session_start();
$idParticipante = $_SESSION['idParticipante'];
if(!isset($_SESSION['idParticipante'])){
  header('Location:erro.php');
}
$sequencia = $_SESSION['sequencia'];
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

    <h5>Para finalizar, favor responder as questões abaixo: </h5>
        </p>
        <form action="agradecimento.php" method="POST">
        <br />
          <br />

        <div class="container codigofonte">
        1 - Qual dos dois domínios foi o mais difícil? <br/>
          <p>
            <label>
              <input class="with-gap" name="group1" type="radio" value="2"/>
              <span>Os dois domínios não possuem diferença em dificuldade.</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="group1" type="radio" value="VAC"/>
              <span>Domínio das Vacinas.</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="group1" type="radio"  value="PRO"/>
              <span>Domínio dos Produtos.</span>
            </label>
          </p>
          <br />
          <br />
          <hr>
          <br />
          <br />
          
          2 -Qual das variáveis você teve mais dificuldade para descobrir o valor de saída (printf)? <br/>
        <p>
      <label>
        <input class="with-gap" name="group2" type="radio" value="SEM"/>
      <?php
      if ($sequencia == 1){
        echo "<span><b><code>p[i].nome</code></b> (linha 47) e <b><code>p[i].idade</code></b> (linha 49).</span>";
        echo "</label>";
        echo "</p>";
        echo "<img src=\"../images/variavel01__.png\" height=\"280\">";
     }else{
      echo "<span><b><code>p[i].nome</code></b> (linha 47) e <b><code>p[i].peso</code></b> (linha 49).</span>";
      echo "</label>";
      echo "</p>";
      echo "<img src=\"../images/variavel03__.png\" height=\"290\">";
     }
     ?></label>
     </p>
    <p>
      <label>
        <input class="with-gap" name="group2" type="radio" value="DEP"/>
        <?php
      if ($sequencia == 1){
        echo "<span><b><code>totalProdutosDescartados</code></b> (linha 67) e <b><code>totalProdutosDevolvidos</code></b> (linha 68).</span>";
        echo "</label>";
        echo "</p>";
        echo "<img src=\"../images/variavel04__.png\" height=\"280\">";
     }else{
        echo "<span><b><code>totalVacinasDisponiveis</code></b> (linha 59) e <b><code>totalGeralVacinasParaUso</code></b> (linha 71).</span>";
        echo "</label>";
        echo "</p>";
        echo "<img src=\"../images/variavel02__.png\" height=\"290\">";
     }
      ?></label>
      </p>
        <p>
            <label>
              <input class="with-gap" name="group2" type="radio" value="AMB"/>
              <span>As variáveis tem o mesmo nível de dificuldade para identificar os valores de saída.</span>
            </label>
          </p>
    <br/>
          <br />
          <hr>
          <br />
          <br />
          3 - Justifique sua resposta.
          <div class="row">
          <i class="material-icons prefix">mode_edit</i>
          <textarea name="justify" id="textarea1" class="materialize-textarea" row ="4" maxlength ="399" ></textarea>
        </div>
          <br />
          <hr>
          <br />
          <br />  
          4 - Você vê alguma diferença na compreensibilidade do código fonte quando variáveis estão dentro ou fora de #ifdefs?
          <div class="row">
          <i class="material-icons prefix">mode_edit</i>
          <textarea name="difference" id="textarea1" class="materialize-textarea" maxlength ="399"></textarea>
          </div>
          <br />
          <hr>
          <br />
          <br />  
          5 - Qual seu tempo de experiência com linguagens de programação (profissionalmente ou não)?
    <p>
      <label>
        <input class="with-gap" name="group3" type="radio" value="+10" />
        <span>Mais de 10 anos.</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group3" type="radio" value="5-10" />
        <span>De 5 a 10 anos.</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group3" type="radio" value="2-5" />
        <span>De 2 a 5 anos.</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group3" type="radio" value="-2" />
        <span>Menos de 2 anos.</span>
      </label>
    </p>
    <br />
          <br />
          <hr>
          <br />
          <br />
          6 - Qual seu tempo de experiência com a linguagem C (profissionalmente ou não)?
    <p>
      <label>
        <input class="with-gap" name="group4" type="radio" value="+10"  />
        <span>Mais de 10 anos.</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group4" type="radio" value="5-10" />
        <span>De 5 a 10 anos.</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group4" type="radio" value="2-5"  />
        <span>De 2 a 5 anos.</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group4" type="radio" value="-2" />
        <span>Menos de 2 anos.</span>
      </label>
    </p>
    <br />
          <br />
          <hr>
          <br />
          <br />
          7 - Qual a sua experiência com #ifdef?
    <p>
      <label>
        <input class="with-gap" name="group5" type="radio" value="researcher"  />
        <span>Eu sou um pesquisador que trabalho com tópicos relacionados a #ifdef</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group5" type="radio" value="frequently" />
        <span>Eu frequentemente trabalho com códigos que contém #ifdef.</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group5" type="radio" value="fewtimes"  />
        <span>Eu tive contato com códigos que contém #ifdef poucas vezes.</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group5" type="radio" value="understood" />
        <span>Eu nunca tive contato com códigos que contém #ifdef mas eu entendi a lógica de funcionamento durante esta survey.</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group5" type="radio" value="notneed" />
        <span>Eu não precisei entender #ifdef para completar esta survey.</span>
      </label>
    </p>
    <br />
          <br />
          <hr>
          <br />
          <br />
    
    8 - Atualmente, qual a sua ocupação?
    <p>
      <label>
        <input name="Graduation" type="checkbox" value="on" />
        <span>Estudante graduação.</span>
      </label>
    </p>
    <p>
      <label>
      <input name="Specialization" type="checkbox" value="on" />
        <span>Estudante de especialização.</span>
      </label>
    </p>
    <p>
      <label>
      <input name="MSc_student" type="checkbox" value="on" />
        <span>Estudante de Mestrado.</span>
      </label>
    </p>
    <p>
      <label>
      <input name="PhD_student" type="checkbox" value="on"/>
        <span>Estudante de doutorado.</span>
      </label>
    </p>
    <p>
      <label>
      <input name="PhD" type="checkbox" value="on" />
        <span>Doutor.</span>
      </label>
    </p>
    <label>
      <input name="MSc" type="checkbox" value="on"/>
        <span>Mestre.</span>
      </label>
    </p>
    <p>
      <label>
      <input name="Professor" type="checkbox" value="on" />
        <span>Professor.</span>
      </label>
    </p>
    <p>
      <label>
      <input name="software_industry" type="checkbox" value="on" />
        <span>Trabalho na indústria de software.</span>
      </label>
    </p>
    <br />
          <br />
          <hr>
          <br />
          <br />
    9 - Se você gostaria de receber os resultados desta survey's, por favor deixe seu e-mail.

    <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">mode_edit</i>
          <input name="email" id="email" type="email" class="validate" maxlength ="59">
        </div>
      </div>
      <br />
      <button class="waves-effect waves-light btn" type="submit">Finalizar</button>
   </form>
    </div>
</body>
</html>