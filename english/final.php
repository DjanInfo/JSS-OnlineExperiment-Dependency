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
    <title>Survey - Comprehensibility in Configurable Systems</title>
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
                <a href="#" class="brand-logo">Survey - Comprehensibility in Configurable Systems</a>
            </div>
        </nav>
    </header>
        <h5>Finally, please answer the questions below: </h5>
        </p>
        <form action="agradecimento.php" method="POST">
        <br />
          <br />

        <div class="container codigofonte">
        1 - Which of the two domains was the most difficult? <br/>
          <p>
            <label>
              <input class="with-gap" name="group1" type="radio" value="2"/>
              <span>Both domains have no difference in difficulty.</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="group1" type="radio" value="VAC"/>
              <span>Domain of vaccines.</span>
            </label>
          </p>
          <p>
            <label>
              <input class="with-gap" name="group1" type="radio"  value="PRO"/>
              <span>Domain of products.</span>
            </label>
          </p>
          <br />
          <br />
          <hr>
          <br />
          <br />
          
          2 -Which variables were the most difficult to identify their output value (printf)? <br/>
    <p>
      <label>
        <input class="with-gap" name="group2" type="radio" value="SEM"/>
      <?php
      if ($sequencia == 1){
        echo "<span><code>p[i].name</code> (line 44) and <code>p[i].age</code> (line 46).</span>";
        echo "</label>";
        echo "</p>";
        echo "<img src=\"../images/variable01__.png\" height=\"280\">";
     }else{
      echo "<span><code>p[i].name</code> (line 44) and <code>p[i].weight</code> (line 46).</span>";
      echo "</label>";
      echo "</p>";
      echo "<img src=\"../images/variable03__.png\" height=\"290\">";
     }
     ?></label>
     </p>
    <p>
      <label>
        <input class="with-gap" name="group2" type="radio" value="DEP"/>
        <?php
      if ($sequencia == 1){
        echo "<span><code>numberOfDicardedProducts</code> (line 64) and <code>numberOfReturnedProducts</code> (line 65).</span>";
        echo "</label>";
        echo "</p>";
        echo "<img src=\"../images/variable04__.png\" height=\"280\">";
     }else{
        echo "<span><code>numberOfAvailableVaccines</code> (line 59) and <code>generalNumberOfVaccinesForUse</code> (line 71).</span>";
        echo "</label>";
        echo "</p>";
        echo "<img src=\"../images/variable02__.png\" height=\"290\">";
     }
      ?></label>
      </p>
        <p>
            <label>
              <input class="with-gap" name="group2" type="radio" value="AMB"/>
              <span>There is no difference to identify the output value of both set of variables.</span>
            </label>
          </p>
    <br/>
          <br />
          <hr>
          <br />
          <br />
          3 - Justify your answer for question 2.
          <div class="row">
          <i class="material-icons prefix">mode_edit</i>
          <textarea name="justify" id="textarea1" class="materialize-textarea" row ="4" maxlength ="399" ></textarea>
        </div>
          <br />
          <hr>
          <br />
          <br />  
          4 -Do you see any difference in code comprehensibility when variables are either inside or outside #ifdefs?
          <div class="row">
          <i class="material-icons prefix">mode_edit</i>
          <textarea name="difference" id="textarea1" class="materialize-textarea" maxlength ="399"></textarea>
          </div>
          <br />
          <hr>
          <br />
          <br />  
          5 - What is your experience with programming languages (professionally or not)?
    <p>
      <label>
        <input class="with-gap" name="group3" type="radio" value="+10" />
        <span>More than 10 years.</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group3" type="radio" value="5-10" />
        <span>Between 5 and 10 years.</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group3" type="radio" value="2-5" />
        <span>Between 2 and 5 years.</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group3" type="radio" value="-2" />
        <span>Less than 2 years.</span>
      </label>
    </p>
    <br />
          <br />
          <hr>
          <br />
          <br />
          6 - What is your experience with the C languages (professionally or not)?
    <p>
      <label>
        <input class="with-gap" name="group4" type="radio" value="+10"  />
        <span>More than 10 years.</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group4" type="radio" value="5-10" />
        <span>Between 5 and 10 years.</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group4" type="radio" value="2-5"  />
        <span>Between 2 and 5 years.</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group4" type="radio" value="-2" />
        <span>Less than 2 years.</span>
      </label>
    </p>
    <br />
          <br />
          <hr>
          <br />
          <br />
          7 - Regarding your #ifdef background knowledge?
    <p>
      <label>
        <input class="with-gap" name="group5" type="radio" value="researcher"  />
        <span>I am a researcher working on topics related to #ifdef.</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group5" type="radio" value="frequently" />
        <span>I frequently work with source code containing #ifdef.</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group5" type="radio" value="fewtimes"  />
        <span>I worked with source code containing #ifdef a few times.</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group5" type="radio" value="understood" />
        <span>I have never worked with source code containing #ifdef but I understood the logic during this survey.</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group5" type="radio" value="notneed" />
        <span>I did not need to understand #ifdef to complete this survey.</span>
      </label>
    </p>
    <br />
          <br />
          <hr>
          <br />
          <br />
    
    8 - Currently, what is your educational/professional occupation?
    <p>
      <label>
        <input name="Graduation" type="checkbox" value="on" />
        <span>Graduation student.</span>
      </label>
    </p>
    <p>
      <label>
      <input name="Specialization" type="checkbox" value="on" />
        <span>Specialization student.</span>
      </label>
    </p>
    <p>
      <label>
      <input name="MSc_student" type="checkbox" value="on" />
        <span>M.Sc. student.</span>
      </label>
    </p>
    <p>
      <label>
      <input name="PhD_student" type="checkbox" value="on"/>
        <span>Ph.D. student.</span>
      </label>
    </p>
    <p>
      <label>
      <input name="PhD" type="checkbox" value="on" />
        <span>Ph.D.</span>
      </label>
    </p>
    <label>
      <input name="MSc" type="checkbox" value="on"/>
        <span>M.Sc.</span>
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
        <span>Works in the software industry</span>
      </label>
    </p>
    <br />
          <br />
          <hr>
          <br />
          <br />
    9 - If you would like to receive feedback about this survey's results, please leave your e-mail.

    <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix">mode_edit</i>
          <input name="email" id="email" type="email" class="validate" maxlength ="59">
        </div>
      </div>
      <br />
      <button class="waves-effect waves-light btn" type="submit">Finish</button>
   </form>
    </div>
</body>
</html>