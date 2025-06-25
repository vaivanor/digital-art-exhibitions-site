<?php
  session_start();
  include("funkcijos.php");
?>
<!DOCTYPE html>
  <html lang="lt">

  <head>
    <title>Prisijungimas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script> 
  </head>

  <body class = "fonasp">
    <div class=" container-fluid d-flex flex-lg-row flex-column" >
        <!--kairė pusė, logotipas ir aprašymas-->
        <div class="col justify-content-center " id="parastes"> 
        </div>
        <!--dešinė pusė, prisijungimo forma-->
        <div class="col justify-content-center" id="parastes2">
            <a href="index.php" class="d-flex justify-content-center" >
              <img class="logo" src="images/logo.png" alt="logotipas">
            </a>
            <p id="pr">Prisijungimas</p>
            <a href="registracija.php">
              <p id="prreg"><u>Registracija</u></p>
            </a>

            <form method="post" action="prisijungimas.php">
              <p id="priv">El.paštas</p>
              <input type="email" name="elpastas" class="ivedimas">
              <p id="priv">Slaptažodis</p>
              <input type="password" name="slaptazodis" class="ivedimas"><br>
              <a href="pamirsauSlaptazodi.php" class="d-flex justify-content-center">
                <p id="prreg1"><u>Pamiršau slaptažodį</u></p>
              </a>
              <div class="d-flex justify-content-center">
                <input type="submit" name="prisijungti" value="Prisijungti" id="paskyra" >
              </div>
            </form>

            <?php
              prisijungimas();
            ?>

       </div>
    </div>
  </body>

</html>