<?php
  session_start();
  include("funkcijos.php");
?>
<!DOCTYPE html>
  <html lang="lt">

  <head>
    <title>Apie mus</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script> 
    <!--vector icons and social logos-->
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  </head>

  <body class="fonas" >
    <!--navigacijos juosta------------------------------------------------------------------------------------------------------------------------------------->
    <nav class="navbar navbar-expand-xl navbar-light justify-content-between fixed-top">
      <!--logotipas-->
      <a href="pPagrindinis.php" class="navbar-brand mb-0">
        <div class="fade-in-image">
          <img class="d-inline-block align-top" id="logo2" src="images/logo.png">
        </div>
      </a>
      <!--hamburger menu mygtukas, kuris atsiranda tablet, mobile versijoje-->
      <button
        type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="toggle navigation" id="menu"><i class="fas fa-bars"></i>
      </button>
      <!--kairė pusė-->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <!--šią savaitę-->
          <li class="nav-item active" >
            <a href="pPagrindinis.php" class="nav-link" id="nava">
              ŠIĄ SAVAITĘ
            </a>
          </li>
          <!--praėjusią savaitę-->
          <li class="nav-item active" >
            <a href="pPraejusiaSavaite.php" class="nav-link" id="nava">
              PRAĖJUSIĄ SAVAITĘ
            </a>
          </li>  
          <!--vartotojų profiliai-->
          <li class="nav-item active">
            <a href="pVartotojuProfiliai.php" class="nav-link" id="nava">
              VARTOTOJŲ PROFILIAI
            </a>
          </li>
           <!--prisijungusio vartotojo profilis-->
           <li class="nav-item active">
            <a href="pJusuProfilis.php" class="nav-link" id="nava">
              JŪSŲ PROFILIS
            </a>
          </li>
           <!--pateikti užklausą-->
           <li class="nav-item active">
            <a href="pPateiktiUzklausa.php" class="nav-link" id="nava">
              PATEIKTI UŽKLAUSĄ
            </a>
          </li>
        </ul>
      </div>
      <!--dešinė pusė-->
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav ms-auto mt-2 mt-lg-0 ">
            <!--paieškos laukas-->
            <li class="nav-item active">
              <form class="form-inline my-2 my-lg-0 d-flex">  
                <input type="search" class="paieska" id="nava" style="height:35px;">
                <a href="#" class="nav-link">
                  <i class="fas fa-search" id="nava" ></i>
                </a>
              </form>  
            </li>
            <!--apie mus-->
            <li class="nav-item active">
              <a href="pApieMus.php" class="nav-link" id="nava">
                APIE MUS
              </a>
            </li>
            <!--kalba-->
            <li class="nav-item active">
              <a href="#" class="nav-link" id="nava">
                LT
              </a>
            </li>
          </ul>
        <ul class="navbar-nav"> 
          <!-- mygtukas atsijungti -->
          <a href="index.php?atsijungti">
            <input type="submit" name="atsijungti" value="Atsijungti" id="paskyra" class="justify-content-end" style="margin-top: 0;">
          </a>
        </ul>
      </div>
    </nav>
    <!----------------------------------------------------------------------------------------------------------------------------------------------------->
    
    <div class="container" id="divas">
      <!--kuri skiltis-->
      <div class="divasd">
        <div class="skiltis" id="skiltis">
          <p>APIE MUS</p>
        </div>
      </div>
      <div class="divasd">
        <div class="skiltis1" id="skiltis3">
          <p>TIKSLAS</p>
        </div>
        <div  class="aprasymas">
          <p>
            „NeAtrasta“ - interneto svetainė, kurioje talpinami norinčių naudotojų meno darbai, 
             mūsų tikslas padėti dar neatrastiems menininkams būti atrastiems. Kiekvieną savaitę talpinami 
             vis kito puslapio naudotojo darbai.
          </p>
        </div>
        <div class="skiltis1" id="skiltis3">
          <p>KĄ ŠIOJE SVETAINĖJE GALIMA DARYTI?</p>
        </div>
        <div  class="aprasymas">
          <p>
            Prisiregistravus prie svetainės galėsite rašyti atsiliepimus apie pateiktus darbus, matyti kitų
            vartotojų profilius, juose rasti jau skelbtus darbus bei kontaktus, jei norėsite su autoriais 
            susisiekti
          </p>
        </div>
        <div class="skiltis1" id="skiltis3">
          <p>KAIP PASKELBTI SAVO DARBUS ŠIOJE SVETAINĖJE?</p>
        </div>
        <div  class="aprasymas">
          <p>
            Jei norite pamatyti savo darbus paskelbtus mūsų puslapyje, Jums reikia užsiregistruoti, o tai padarius
             skiltyje „PATEIKTI UŽKLAUSĄ" rasite formą, kurią galite užpildyti ir pateikti. Per kelias darbos dienas 
             su Jumis susisieksime Jūsų profilyje nurodytais kontaktais. 
          </p>
        </div>
        <div class="skiltis1" id="skiltis3">
          <p>KAIP SUSISIEKTI?</p>
        </div>
        <div  class="aprasymas">
          <p>
            Su mumus galima susiekti Jums patogiu būdu: tiek rašant el.laišką, tiek telefonu, taip pat galima mus 
            rasti ir socialiniuose tinkluose. Išsamesnė informacija pateikta kontaktų skiltyje.
          </p>
        </div>
        <div class="skiltis1" id="skiltis3">
          <p>KONTAKTAI</p>
        </div>
        <div  class="aprasymas">
          <p style="margin-top:10px;"><i class="fas fa-envelope"></i> info@neatrasta.lt</p>
          <p><i class="fas fa-phone"></i> +37064751987</p>
          <p><i class="fab fa-facebook"></i> neAtrasta</p>
          <p><i class="fab fa-instagram"></i> neAtrasta</p>
        </div>
      </div>
    </div>

    <!--apatinė puslapio eilutė-------------------------------------------------------------------------------------------------------->
    <footer class="d-flex  justify-content-center">
      <!--logotipas ir copyright-->
      <div>
        <p><img id="logo2" src="images/logon.png" alt="logotipas"></p>
        <p> &copy; 2021</p>
      </div>
      <!--apie mus ir privatumo politika tablet/mobile versijoje paslepiami-->
      <div id="infot" class="d-none d-xs-none d-sm-none d-md-none d-lg-block d-xl-block" >
        <p><a href="pApieMus.php">Apie mus</a></p>
        <p id="info"><a href="#">Privatumo politika</a></p>
      </div>
      <!--nuorodos į soc. tinklus fb ir ig, paspaudus ant teksto įsijungia fb/ig prisijungimo langai-->
      <div id="infot">
        <p><img id="ikona" src="images/fb.png" alt="fb"><a href="https://www.facebook.com/">Facebook</a></p>
        <p id="info"><img id="ikona" src="images/ig.png" alt="ig"><a href="https://www.instagram.com/">Instagram</a></p>
      </div>
    </footer>
    <!------------------------------------------------------------------------------------------------------------------------------->
  </body>

</html>