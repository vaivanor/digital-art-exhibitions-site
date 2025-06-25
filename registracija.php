<?php
  session_start();
  include("funkcijos.php");
?>
<!DOCTYPE html>
  <html lang="lt">

  <head>
    <title>Registracija</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script> 
  </head>

  <body class = "fonasr">
    <div class=" container-fluid d-flex flex-lg-row flex-column" >
    <div class="col justify-content-center" id="parastes"></div>
        <div class="col justify-content-center " id="parastes2"> 
            <a href="index.php" class="d-flex justify-content-center" >
              <img class="logo" src="images/logo.png" alt="logotipas">
            </a>
            <p id="pr">Registracija</p>
            <a href="prisijungimas.php">
              <p id="prreg"><u>Prisijungimas</u></p>
            </a>

            <form method="post" action="registracija.php">
              <p id="priv">Vardas</p>
              <input type="text" name="vardas" class="ivedimas">
              <p id="priv">Pavardė</p>
              <input type="text" name="pavarde" class="ivedimas">
              <p id="priv">El.paštas</p>
              <input type="email" name="elpastas" class="ivedimas">
              <p id="priv">Tel.nr.</p>
              <input type="text" name="telnr" class="ivedimas" placeholder="+3706*******" pattern="[+]{1}[0-9]{11}">
              <p id="priv">Facebook</p>
              <input type="text" name="fb" class="ivedimas" placeholder="padėkite „-“ jei neturite paskyros">
              <p id="priv">Instagram</p>
              <input type="text" name="ig" class="ivedimas" placeholder="padėkite „-“ jei neturite paskyros">
              <p id="priv">Apie Jus</p>
              <textarea name="apie" class="ivedimas"></textarea>
              <p id="priv">Slaptažodis</p>
              <input type="password" name="slaptazodis" class="ivedimas" placeholder="bent 5 simboliai">
              <p id="priv">Pakartoti slaptažodį</p>
              <input type="password" name="pslaptazodis" class="ivedimas">
              <div class="d-flex justify-content-center">
                <input type="submit" name="registruotis" value="Registruotis" id="paskyra" >
              </div>
            </form>

            <?php
              registracija();
            ?>

        </div>
        
    </div>
  </body>

</html>