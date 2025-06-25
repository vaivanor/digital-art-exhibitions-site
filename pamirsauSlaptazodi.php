<?php
  include("funkcijos.php");
?>
<!DOCTYPE html>
  <html lang="lt">

  <head>
    <title>Pamiršau slaptažodį</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script> 
  </head>

  <body class = "fonaspa">
    <div class=" container-fluid d-flex flex-lg-row flex-column" >
        <!--kairė pusė, logotipas ir aprašymas-->
        <div class="col justify-content-center " id="parastes"> 
        </div>
        <!--dešinė pusė, prisijungimo forma-->
        <div class="col justify-content-center" id="parastes2">
            <a href="index.php" class="d-flex justify-content-center" >
              <img class="logo" src="images/logo.png" alt="logotipas">
            </a>
            <p id="pr">Pamiršau slaptažodį</p>
            <a href="registracija.php">
              <p id="prreg"><u>Registracija</u></p>
            </a>
            <a href="prisijungimas.php">
              <p id="prreg"><u>Prisijungimas</u></p>
            </a>
            <form method="post" action="pamirsauSlaptazodi.php">
              <p id="priv">El.paštas</p>
              <input type="email" name="elpastas"class="ivedimas">
              <!--paspaudus Prisijungti įsijungia pagrindinis puslapio langas 2.html-->
              <div class="d-flex justify-content-center">
                <input type="submit" name="siusti" value="Siųsti" id="paskyra"></a>
              </div>
            </form>

            <?php
              pamirsauSlaptazodi();
            ?>

       </div>
    </div>
  </body>

</html>