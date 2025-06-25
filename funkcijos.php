<?php
    // nPagrindinis, pPagrindinis, aPagrindinis-----------------------------------------------------------------------------------------------------------------------------
    function siSavaitePirmadienis()
    {
        $siosSavaitesPradzia = date('Y-m-d', strtotime('monday this week'));
        return $siosSavaitesPradzia;
    }
    function siSavaiteSekmadienis()
    {
        $siosSavaitesPabaiga = date('Y-m-d', strtotime('sunday this week'));
        return $siosSavaitesPabaiga;
    }
    function siSavaiteKadaKasPav()
    {
        $siosSavaitesPradzia = siSavaitePirmadienis();
        $siosSavaitesPabaiga = siSavaiteSekmadienis();
        include("konfiguracija.php");
        $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
        $DB -> set_charset('utf8');
        $DB1 = $DB -> query("SELECT vID, vardas, pavarde, nuotrauka, apie, pID, pPavadinimas, pradzia, pabaiga 
                             FROM vartotojas, paroda
                             WHERE vartotojas.vID = paroda.vartID and pradzia = '$siosSavaitesPradzia' and pabaiga = '$siosSavaitesPabaiga';");
        $k = $DB1 -> num_rows;
        for($x = 1; $x <= $k; $x++)
        {
               $EIL = $DB1 -> fetch_assoc();
               echo  '<div>
                       <p class="data1">'.$EIL['pradzia'].' iki '.$EIL['pabaiga'].'</p>
                     </div>
                     </div>
                     <!--kieno paroda skelbiama-->
                     <div class="divasd">
                       <div class="d-flex flex-lg-row flex-column">
                         <div class="priartinimas d-flex flex-column me-4 align-items-center">
                           <p><img src="images/'.$EIL['nuotrauka'].'" style="height: 100px; width: 100px;"></p>
                         </div>
                         <div class="d-flex flex-column me-4">
                           <div class="skiltis1">
                             <p class="d-flex justify-content-center justify-content-lg-start">'.mb_strtoupper($EIL['vardas']).' '.mb_strtoupper($EIL['pavarde']).'</p>
                           </div>
                           <div class="aprasymas">
                             <p>'.nl2br($EIL['apie']).'</p>
                           </div>
                         </div>
                       </div>
                     </div>
                     <!--parodos pavadinimas-->
                     <div class="divasd">
                       <div class="skiltis" id="skiltis3">
                         <p>'.mb_strtoupper($EIL['pPavadinimas']).'</p>
                       </div>
                     </div>';
          }
          $DB -> close();
    }
    function siSavaiteNuotraukos()
    {
        $siosSavaitesPradzia = siSavaitePirmadienis();
        $siosSavaitesPabaiga = siSavaiteSekmadienis();
        include("konfiguracija.php");
        $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
        $DB -> set_charset('utf8');
        $DB2 = $DB -> query("SELECT pID, pradzia, pabaiga, nID, mNuotrauka
                             FROM paroda, nuotrauka
                             WHERE paroda.pID = nuotrauka.parID and pradzia = '$siosSavaitesPradzia' and pabaiga = '$siosSavaitesPabaiga';");
        $k = $DB2 -> num_rows;
        for($x = 1; $x <= $k; $x++)
        {
            $EIL = $DB2 -> fetch_assoc();
            echo '<a href="nPerziura.php?X='.$x.'" id="plotis" class="m-2 align-items-center " >
                  <img  src="images/'.$EIL['mNuotrauka'].'" id="nplotis">
                  </a>';       
        }
        $DB -> close();
    }
    function psiSavaiteNuotraukos()
    {
        $siosSavaitesPradzia = siSavaitePirmadienis();
        $siosSavaitesPabaiga = siSavaiteSekmadienis();
        include("konfiguracija.php");
        $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
        $DB -> set_charset('utf8');
        $DB2 = $DB -> query("SELECT pID, pradzia, pabaiga, nID, mNuotrauka
                             FROM paroda, nuotrauka
                             WHERE paroda.pID = nuotrauka.parID and pradzia = '$siosSavaitesPradzia' and pabaiga = '$siosSavaitesPabaiga';");
        $k = $DB2 -> num_rows;
        for($x = 1; $x <= $k; $x++)
        {
            $EIL = $DB2 -> fetch_assoc();
            echo '<a href="pPerziura.php?X='.$x.'" id="plotis" class="m-2 align-items-center " >
                  <img  src="images/'.$EIL['mNuotrauka'].'" id="nplotis">
                  </a>';       
        }
        $DB -> close();
    }
    function asiSavaiteNuotraukos()
    {
        $siosSavaitesPradzia = siSavaitePirmadienis();
        $siosSavaitesPabaiga = siSavaiteSekmadienis();
        include("konfiguracija.php");
        $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
        $DB -> set_charset('utf8');
        $DB2 = $DB -> query("SELECT pID, pradzia, pabaiga, nID, mNuotrauka
                             FROM paroda, nuotrauka
                             WHERE paroda.pID = nuotrauka.parID and pradzia = '$siosSavaitesPradzia' and pabaiga = '$siosSavaitesPabaiga';");
        $k = $DB2 -> num_rows;
        for($x = 1; $x <= $k; $x++)
        {
            $EIL = $DB2 -> fetch_assoc();
            echo '<a href="aPerziura.php?X='.$x.'" id="plotis" class="m-2 align-items-center " >
                  <img  src="images/'.$EIL['mNuotrauka'].'" id="nplotis">
                  </a>';       
        }
        $DB -> close();
    }
    function siSavaiteAtsiliepimai()
    {
        $siosSavaitesPradzia = siSavaitePirmadienis();
        $siosSavaitesPabaiga = siSavaiteSekmadienis();
        include("konfiguracija.php");
        $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
        $DB -> set_charset('utf8');
        $DB2 = $DB -> query("SELECT vID, vardas, pavarde, aID, atsiliepimas, data, pID, pradzia, pabaiga
                             FROM vartotojas, atsiliepimas, paroda
                             WHERE vartotojas.vID = atsiliepimas.vartoID and paroda.pID = atsiliepimas.paroID and pradzia = '$siosSavaitesPradzia' and pabaiga = '$siosSavaitesPabaiga'
                             ORDER BY data desc;");
        $k = $DB2 -> num_rows;
        for($x = 1; $x <= $k; $x++)
        {
            $EIL = $DB2 -> fetch_assoc();
            echo '<div class="d-flex flex-column">
                        <div class="skiltis4">
                            <p>'.$EIL['vardas'].' '.$EIL['pavarde'].'</p>
                        </div>
                        <div class="data">
                            <p>'.$EIL['data'].'</p>
                        </div>
                        <div class="aprasymas">
                            <p>'.$EIL['atsiliepimas'].'</p>
                        </div>
                  </div>';
        }
        $DB -> close();
    }
    function aSiSavaiteAtsiliepimai()
    {
        $siosSavaitesPradzia = siSavaitePirmadienis();
        $siosSavaitesPabaiga = siSavaiteSekmadienis();
        include("konfiguracija.php");
        $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
        $DB -> set_charset('utf8');
        $DB2 = $DB -> query("SELECT vID, vardas, pavarde, aID, atsiliepimas, data, pID, pradzia, pabaiga
                             FROM vartotojas, atsiliepimas, paroda
                             WHERE vartotojas.vID = atsiliepimas.vartoID and paroda.pID = atsiliepimas.paroID and pradzia = '$siosSavaitesPradzia' and pabaiga = '$siosSavaitesPabaiga'
                             ORDER BY data desc;");
        $k = $DB2 -> num_rows;
        for($x = 1; $x <= $k; $x++)
        {
            $EIL = $DB2 -> fetch_assoc();
            echo '<form method="post" action="aPagrindinis.php">
                  <div class="d-flex flex-lg-row flex-column" >  
                    <div class="d-flex flex-column">
                        <div class="skiltis4">
                            <p>'.$EIL['vardas'].' '.$EIL['pavarde'].'</p>
                        </div>
                        <div class="data">
                            <p>'.$EIL['data'].'</p>
                        </div>
                        <div class="aprasymas">
                            <p>'.$EIL['atsiliepimas'].'</p>
                        </div>
                    </div>
                    
                    <div class="d-flex flex-column justify-content-sm-center align-items-sm-center desine">
                        <input type="submit" name="'.$EIL['aID'].'" value="Naikinti" id="paskyra" class="parastes" style="margin-top: 20px;">
                    </div>
                   
                 </div>
                  </form>';
                 $aID = $EIL['aID'];
                 aSiSavAtsiliepimoTrynimas($aID);

        }
        $DB -> close();
    }
    function aSiSavAtsiliepimoTrynimas($aID)
    {
        include("konfiguracija.php");
        $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
        $DB -> set_charset('utf8');
        if(isset($_POST[$aID]))
        {
          $DB -> query("DELETE FROM atsiliepimas WHERE aID = $aID");
          echo '<script>location.replace("aPagrindinis.php");</script>';
        }
    }
    function siSavaiteRasytiAtsiliepima()
    {
        if(isset($_POST['pateikti']))
          {
            $atsiliepimas = $_POST['atsiliepimas'];
            if($atsiliepimas == '')
            {
              echo '<p class="pranesimas">Įveskite visus duomenis.</p>';
            }
            else
            {
              include("konfiguracija.php");
              $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
              $DB -> set_charset('utf8');
              $data = date('Y-m-d');
              $vartoID = $_SESSION['vID'];
              $siosSavaitesPradzia = siSavaitePirmadienis();
              $siosSavaitesPabaiga = siSavaiteSekmadienis();

              $DB -> query("INSERT INTO atsiliepimas (aID, atsiliepimas, data, vartoID, paroID)
                            VALUES (NULL,'$atsiliepimas','$data',$vartoID,(SELECT pID FROM paroda WHERE pradzia = '$siosSavaitesPradzia' and pabaiga = '$siosSavaitesPabaiga'))");
              $DB -> close();
              echo '<script>location.replace("pPagrindinis.php");</script>';
            }
          }
    }
    //-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //nPerziura, pPerziura, aPerziura
    function siSavaiteNuotrPerziura()
    {
        $siosSavaitesPradzia = siSavaitePirmadienis();
        $siosSavaitesPabaiga = siSavaiteSekmadienis();
        include("konfiguracija.php");
        $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
        $DB -> set_charset('utf8');
        $DB2 = $DB -> query("SELECT pID, pradzia, pabaiga, nID, dNuotrauka, nPavadinimas, nAprasymas, metai
                             FROM paroda, nuotrauka
                             WHERE paroda.pID = nuotrauka.parID and pradzia = '$siosSavaitesPradzia' and pabaiga = '$siosSavaitesPabaiga';");
        $k = $DB2 -> num_rows;
        for($x = 1; $x <= $k; $x++)
        {
            $EIL = $DB2 -> fetch_assoc();
            if(isset($_GET['X']))
            {
                $eil = $_GET['X'];
                //echo $eil;
            }
            if($x == $eil)
            {
                 echo '<div class="d-flex flex-column me-4 col-lg-8 nuot">
                            <img class="m-2 align-items-center nuot" src="images/'.$EIL['dNuotrauka'].'" >
                        </div>
                        <!--kieno paroda skelbiama-->
                        <div class="divasap">
                        <div class="d-flex flex-column me-4">
                        <div class="skiltis1">
                            <p class="d-flex justify-content-center justify-content-lg-start">PAVADINIMAS</p>
                        </div>
                        <div class="aprasymas">
                            <p>'.$EIL['nPavadinimas'].'</p>
                        </div>
                        <div class="skiltis1">
                            <p class="d-flex justify-content-center justify-content-lg-start">APRAŠYMAS</p>
                        </div>
                        <div class="aprasymas">
                            <p>'.$EIL['nAprasymas'].'</p>
                        </div>
                        <div class="skiltis1">
                            <p class="d-flex justify-content-center justify-content-lg-start">METAI</p>
                        </div>
                        <div class="aprasymas">
                            <p>'.$EIL['metai'].' m.</p>
                        </div>';
            }
        }
        $DB -> close();
    }
    //------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //nPraejusiaSavaite
    function praejusiSavaitePirmadienis()
    {
        $praejusiosSavaitesPradzia = date('Y-m-d', strtotime('monday last week'));
        return $praejusiosSavaitesPradzia;
    }
    function praejusiSavaiteSekmadienis()
    {
        $praejusiosSavaitesPabaiga = date('Y-m-d', strtotime('sunday last week'));
        return $praejusiosSavaitesPabaiga;
    }
    function praejusiSavaiteKadaKasPav()
    {
        $praejusiosSavaitesPradzia = praejusiSavaitePirmadienis();
        $praejusiosSavaitesPabaiga = praejusiSavaiteSekmadienis();
        include("konfiguracija.php");
        $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
        $DB -> set_charset('utf8');
        $DB1 = $DB -> query("SELECT vID, vardas, pavarde, nuotrauka, apie, pID, pPavadinimas, pradzia, pabaiga 
                             FROM vartotojas, paroda
                             WHERE vartotojas.vID = paroda.vartID and pradzia = '$praejusiosSavaitesPradzia' and pabaiga = '$praejusiosSavaitesPabaiga';");
        $k = $DB1 -> num_rows;
        for($x = 1; $x <= $k; $x++)
        {
               $EIL = $DB1 -> fetch_assoc();
               echo  '<div>
                       <p class="data1">'.$EIL['pradzia'].' iki '.$EIL['pabaiga'].'</p>
                     </div>
                     </div>
                     <!--kieno paroda skelbiama-->
                     <div class="divasd">
                       <div class="d-flex flex-lg-row flex-column">
                         <div class="priartinimas d-flex flex-column me-4 align-items-center">
                           <p><img src="images/'.$EIL['nuotrauka'].'" style="height: 100px; width: 100px;"></p>
                         </div>
                         <div class="d-flex flex-column me-4">
                           <div class="skiltis1">
                             <p class="d-flex justify-content-center justify-content-lg-start">'.mb_strtoupper($EIL['vardas']).' '.mb_strtoupper($EIL['pavarde']).'</p>
                           </div>
                           <div class="aprasymas">
                             <p>'.nl2br($EIL['apie']).'</p>
                           </div>
                         </div>
                       </div>
                     </div>
                     <!--parodos pavadinimas-->
                     <div class="divasd">
                       <div class="skiltis" id="skiltis3">
                         <p>'.mb_strtoupper($EIL['pPavadinimas']).'</p>
                       </div>
                     </div>';
        }
        $DB -> close();
    }
    function praejusiSavaiteNuotraukos()
    {
        $praejusiosSavaitesPradzia = praejusiSavaitePirmadienis();
        $praejusiosSavaitesPabaiga = praejusiSavaiteSekmadienis();
        include("konfiguracija.php");
        $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
        $DB -> set_charset('utf8');
        $DB2 = $DB -> query("SELECT pID, pradzia, pabaiga, nID, mNuotrauka
                             FROM paroda, nuotrauka
                             WHERE paroda.pID = nuotrauka.parID and pradzia = '$praejusiosSavaitesPradzia' and pabaiga = '$praejusiosSavaitesPabaiga';");
        $k = $DB2 -> num_rows;
        for($x = 1; $x <= $k; $x++)
        {
            $EIL = $DB2 -> fetch_assoc();
            echo '<a href="nprPerziura.php?X='.$x.'" id="plotis" class="m-2 align-items-center " >
                  <img  src="images/'.$EIL['mNuotrauka'].'" id="nplotis">
                  </a>';       
        }
        $DB -> close();
    }
    function ppraejusiSavaiteNuotraukos()
    {
        $praejusiosSavaitesPradzia = praejusiSavaitePirmadienis();
        $praejusiosSavaitesPabaiga = praejusiSavaiteSekmadienis();
        include("konfiguracija.php");
        $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
        $DB -> set_charset('utf8');
        $DB2 = $DB -> query("SELECT pID, pradzia, pabaiga, nID, mNuotrauka
                             FROM paroda, nuotrauka
                             WHERE paroda.pID = nuotrauka.parID and pradzia = '$praejusiosSavaitesPradzia' and pabaiga = '$praejusiosSavaitesPabaiga';");
        $k = $DB2 -> num_rows;
        for($x = 1; $x <= $k; $x++)
        {
            $EIL = $DB2 -> fetch_assoc();
            echo '<a href="pprPerziura.php?X='.$x.'" id="plotis" class="m-2 align-items-center " >
                  <img  src="images/'.$EIL['mNuotrauka'].'" id="nplotis">
                  </a>';       
        }
        $DB -> close();
    }
    function apraejusiSavaiteNuotraukos()
    {
        $praejusiosSavaitesPradzia = praejusiSavaitePirmadienis();
        $praejusiosSavaitesPabaiga = praejusiSavaiteSekmadienis();
        include("konfiguracija.php");
        $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
        $DB -> set_charset('utf8');
        $DB2 = $DB -> query("SELECT pID, pradzia, pabaiga, nID, mNuotrauka
                             FROM paroda, nuotrauka
                             WHERE paroda.pID = nuotrauka.parID and pradzia = '$praejusiosSavaitesPradzia' and pabaiga = '$praejusiosSavaitesPabaiga';");
        $k = $DB2 -> num_rows;
        for($x = 1; $x <= $k; $x++)
        {
            $EIL = $DB2 -> fetch_assoc();
            echo '<a href="aprPerziura.php?X='.$x.'" id="plotis" class="m-2 align-items-center " >
                  <img  src="images/'.$EIL['mNuotrauka'].'" id="nplotis">
                  </a>';       
        }
        $DB -> close();
    }
    function praejusiSavaiteAtsiliepimai()
    {
        $praejusiosSavaitesPradzia = praejusiSavaitePirmadienis();
        $praejusiosSavaitesPabaiga = praejusiSavaiteSekmadienis();
        include("konfiguracija.php");
        $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
        $DB -> set_charset('utf8');
        $DB2 = $DB -> query("SELECT vID, vardas, pavarde, aID, atsiliepimas, data, pID, pradzia, pabaiga
                             FROM vartotojas, atsiliepimas, paroda
                             WHERE vartotojas.vID = atsiliepimas.vartoID and paroda.pID = atsiliepimas.paroID and pradzia = '$praejusiosSavaitesPradzia' and pabaiga = '$praejusiosSavaitesPabaiga'
                             ORDER BY data desc;");
        $k = $DB2 -> num_rows;
        for($x = 1; $x <= $k; $x++)
        {
            $EIL = $DB2 -> fetch_assoc();
            echo '<div class="skiltis4">
                    <p>'.$EIL['vardas'].' '.$EIL['pavarde'].'</p>
                 </div>
                 <div class="data">
                    <p>'.$EIL['data'].'</p>
                 </div>
                 <div class="aprasymas">
                    <p>'.$EIL['atsiliepimas'].'</p>
                 </div>';
        }
        $DB -> close();
    }
    function aPraejusiiSavaiteAtsiliepimai()
    {
        $praejusiosSavaitesPradzia = praejusiSavaitePirmadienis();
        $praejusiosSavaitesPabaiga = praejusiSavaiteSekmadienis();
        include("konfiguracija.php");
        $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
        $DB -> set_charset('utf8');
        $DB2 = $DB -> query("SELECT vID, vardas, pavarde, aID, atsiliepimas, data, pID, pradzia, pabaiga
                             FROM vartotojas, atsiliepimas, paroda
                             WHERE vartotojas.vID = atsiliepimas.vartoID and paroda.pID = atsiliepimas.paroID and pradzia = '$praejusiosSavaitesPradzia' and pabaiga = '$praejusiosSavaitesPabaiga'
                             ORDER BY data desc;");
        $k = $DB2 -> num_rows;
        for($x = 1; $x <= $k; $x++)
        {
            $EIL = $DB2 -> fetch_assoc();
            echo '<form method="post" action="aPraejusiaSavaite.php">
                  <div class="d-flex flex-lg-row flex-column" >  
                    <div class="d-flex flex-column">
                        <div class="skiltis4">
                            <p>'.$EIL['vardas'].' '.$EIL['pavarde'].'</p>
                        </div>
                        <div class="data">
                            <p>'.$EIL['data'].'</p>
                        </div>
                        <div class="aprasymas">
                            <p>'.$EIL['atsiliepimas'].'</p>
                        </div>
                    </div>
                    
                    <div class="d-flex flex-column justify-content-sm-center align-items-sm-center desine">
                        <input type="submit" name="'.$EIL['aID'].'" value="Naikinti" id="paskyra" class="parastes" style="margin-top: 20px;">
                    </div>
                   
                 </div>
                  </form>';
                 $aID = $EIL['aID'];
                 aPraejusiSavAtsiliepimoTrynimas($aID);

        }
        $DB -> close();
    }
    function aPraejusiSavAtsiliepimoTrynimas($aID)
    {
        include("konfiguracija.php");
        $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
        $DB -> set_charset('utf8');
        if(isset($_POST[$aID]))
        {
          $DB -> query("DELETE FROM atsiliepimas WHERE aID = $aID");
          echo '<script>location.replace("aPraejusiaSavaite.php");</script>';
        }
    }
    function praejusiSavaiteRasytiAtsiliepima()
    {
        if(isset($_POST['pateikti']))
          {
            $atsiliepimas = $_POST['atsiliepimas'];
            if($atsiliepimas == '')
            {
              echo '<p class="pranesimas">Įveskite visus duomenis.</p>';
            }
            else
            {
              include("konfiguracija.php");
              $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
              $DB -> set_charset('utf8');
              $data = date('Y-m-d');
              $vartoID = $_SESSION['vID'];
              $praejusiosSavaitesPradzia = praejusiSavaitePirmadienis();
              $praejusiosSavaitesPabaiga = praejusiSavaiteSekmadienis();

              $DB -> query("INSERT INTO atsiliepimas (aID, atsiliepimas, data, vartoID, paroID)
                            VALUES (NULL,'$atsiliepimas','$data',$vartoID,(SELECT pID FROM paroda WHERE pradzia = '$praejusiosSavaitesPradzia' and pabaiga = '$praejusiosSavaitesPabaiga'))");
              $DB -> close();
              echo '<script>location.replace("pPraejusiaSavaite.php");</script>';
            }
          }
    }
    //-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //nPerziura, pPerziura, aPerziura
    function praejusiSavaiteNuotrPerziura()
    {
        $praejusiosSavaitesPradzia = praejusiSavaitePirmadienis();
        $praejusiosSavaitesPabaiga = praejusiSavaiteSekmadienis();
        include("konfiguracija.php");
        $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
        $DB -> set_charset('utf8');
        $DB2 = $DB -> query("SELECT pID, pradzia, pabaiga, nID, dNuotrauka, nPavadinimas, nAprasymas, metai
                             FROM paroda, nuotrauka
                             WHERE paroda.pID = nuotrauka.parID and pradzia = '$praejusiosSavaitesPradzia' and pabaiga = '$praejusiosSavaitesPabaiga';");
        $k = $DB2 -> num_rows;
        for($x = 1; $x <= $k; $x++)
        {
            $EIL = $DB2 -> fetch_assoc();
            if(isset($_GET['X']))
            {
                $eil = $_GET['X'];
            }
            if($x == $eil)
            {
                 echo '<div class="d-flex flex-column me-4 col-lg-8 nuot">
                            <img class="m-2 align-items-center nuot" src="images/'.$EIL['dNuotrauka'].'" >
                        </div>
                        <!--kieno paroda skelbiama-->
                        <div class="divasap">
                        <div class="d-flex flex-column me-4">
                        <div class="skiltis1">
                            <p class="d-flex justify-content-center justify-content-lg-start">PAVADINIMAS</p>
                        </div>
                        <div class="aprasymas">
                            <p>'.$EIL['nPavadinimas'].'</p>
                        </div>
                        <div class="skiltis1">
                            <p class="d-flex justify-content-center justify-content-lg-start">APRAŠYMAS</p>
                        </div>
                        <div class="aprasymas">
                            <p>'.$EIL['nAprasymas'].'</p>
                        </div>
                        <div class="skiltis1">
                            <p class="d-flex justify-content-center justify-content-lg-start">METAI</p>
                        </div>
                        <div class="aprasymas">
                            <p>'.$EIL['metai'].' m.</p>
                        </div>';
            }
        }
        $DB -> close();
    }
    //------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //registracija
    function registracija()
    {
        if(isset($_POST['registruotis']))
        {
          $vardas = $_POST['vardas'];
          $pavarde = $_POST['pavarde'];
          $elpastas = $_POST['elpastas'];
          $telnr = $_POST['telnr'];
          $fb = $_POST['fb'];
          $ig = $_POST['ig'];
          $apie = $_POST['apie'];
          $slaptazodis = $_POST['slaptazodis'];
          $pslaptazodis = $_POST['pslaptazodis'];
          
          if($vardas == '' || $pavarde == '' || $elpastas == '' || $telnr == '' || $fb == '' || $ig == '' || $apie == '' || $slaptazodis == '' || $pslaptazodis == '')
          {
            echo '<p class="pranesimas">Įveskite visus duomenis.</p>';
          }
          else if(strlen($slaptazodis) < 5)
          {
            echo '<p class="pranesimas">Įvestas per trumpas slaptažzodis.</p>';
          }
          else if($slaptazodis != $pslaptazodis)
          {
            echo '<p class="pranesimas">Slaptažodžiai nesutampa.</p>';
          }
          else 
          {
            include("konfiguracija.php");
            $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
            $DB -> set_charset('utf8');
            $DB1 = $DB -> query("SELECT * FROM vartotojas");
            $k = $DB1 -> num_rows;
            $kiekis = 0;
            for($x = 1; $x <= $k; $x++)
            {
                $EIL = $DB1 -> fetch_assoc();
                if($elpastas == $EIL['elpastas'])
                {
                    $kiekis++;
                    echo '<p class="pranesimas">Vartotojas su nurodytu el.paštu jau yra registruotas.</p>';
                    break;
                }
            }
            if($kiekis == 0)
            {
                $DB -> query("INSERT INTO vartotojas (vID, vardas, pavarde, nuotrauka, elpastas, telnr, fb, ig, apie, slaptazodis)
                VALUES (NULL,'$vardas','$pavarde','vartotojas.png','$elpastas','$telnr','$fb','$ig','$apie',md5('$slaptazodis'))");

                $_SESSION['vID'] = $vardas;
                $_SESSION['vardas'] = $vardas;
                $_SESSION['pavarde'] = $pavarde;
                $_SESSION['nuotrauka'] = 'vartotojas.png';
                $_SESSION['elpastas'] = $elpastas;
                $_SESSION['telnr'] = $telnr;
                $_SESSION['fb'] = $fb;
                $_SESSION['ig'] = $ig;
                $_SESSION['apie'] = $apie;
            }
            header("Location: pPagrindinis.php");
            $DB -> close();
        }
      }    
    }
    // ---------------------------------------------------------------------------------------------------------------------------------------------------
    // prisijungimas
    function prisijungimas()
    {
        if(isset($_POST['prisijungti']))
        {
            $elpastas = $_POST['elpastas'];
            $slaptazodis = $_POST['slaptazodis'];
            
            if($elpastas == '' || $slaptazodis == '')
            {
                echo '<p class="pranesimas">Įveskite visus duomenis.</p>';
            }
            else 
            {
                include("konfiguracija.php");
                $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
                $DB -> set_charset('utf8');
                $DB1 = $DB -> query("SELECT * FROM vartotojas");
                $kiekis = 0;
                $k = $DB1 -> num_rows;
                for($x = 1; $x <= $k; $x++)
                {
                    $EIL = $DB1 -> fetch_assoc();

                    if($elpastas == 'admin@neatrasta.lt' && md5($slaptazodis) == '0192023a7bbd73250516f069df18b500')
                    {
                        $kiekis++;
                        header("Location: aPagrindinis.php");
                        $_SESSION['vID'] = $EIL['vID'];
                        $_SESSION['vardas'] = $EIL['vardas'];
                        $_SESSION['pavarde'] = $EIL['pavarde'];
                        $_SESSION['elpastas'] = $elpastas;
                        $_SESSION['telnr'] = $EIL['telnr'];
                        $_SESSION['fb'] = $EIL['fb'];
                        $_SESSION['ig'] = $EIL['ig'];
                        $_SESSION['apie'] = $EIL['apie'];
                    }
                    else if($EIL['elpastas'] == $elpastas && $EIL['slaptazodis'] == md5($slaptazodis))
                    {
                        $kiekis++;
                        header("Location: pPagrindinis.php");
                        $_SESSION['vID'] = $EIL['vID'];
                        $_SESSION['vardas'] = $EIL['vardas'];
                        $_SESSION['pavarde'] = $EIL['pavarde'];
                        $_SESSION['elpastas'] = $elpastas;
                        $_SESSION['nuotrauka'] = $EIL['nuotrauka'];
                        $_SESSION['telnr'] = $EIL['telnr'];
                        $_SESSION['fb'] = $EIL['fb'];
                        $_SESSION['ig'] = $EIL['ig'];
                        $_SESSION['apie'] = $EIL['apie'];
                    }
                }
                if($kiekis == 0)
                {
                    echo '<p class="pranesimas">Neteisingai įvesti duomenys. Bandykite iš naujo.</p>';
                }
                $DB -> close();
            }  
        }        
    }
    function atsijungimas()
    {
        if (isset($_GET['atsijungti'])) 
        {
            session_destroy();
            unset($_SESSION['vardas']);
            unset($_SESSION['pavarde']);
            unset($_SESSION['elpastas']);
            unset($_SESSION['telnr']);
            unset($_SESSION['fb']);
            unset($_SESSION['ig']);
            unset($_SESSION['apie']);
        }
    }
    // ---------------------------------------------------------------------------------------------------------------------------------------------------------
    // pamirsauSlpatazodi.php
    function pamirsauSlaptazodi()
    {
        if(isset($_POST['siusti']))
        {
          $elpastas = $_POST['elpastas'];
          if($elpastas == '')
          {
              echo '<p class="pranesimas">Įveskite visus duomenis.</p>';
          }
          else
          {
            include("konfiguracija.php");
            $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
            $DB -> set_charset('utf8');
            $DB1 = $DB -> query("SELECT elpastas FROM vartotojas");
            $kiekis = 0;
            $k = $DB1 -> num_rows;
            for($x = 1; $x <= $k; $x++)
            {
                $EIL = $DB1 -> fetch_assoc();
                if($EIL['elpastas'] == $elpastas)
                {
                  $kiekis++;
                  echo '<p class="pranesimas">Prisijungimo kodas išsiųstas.</p>';
                }
            }
            if($kiekis==0)
            {
              echo '<p class="pranesimas">Paskyra neegzistuoja.</p>';
            }
          }
        }
    }
    //-----------------------------------------------------------------------------------------------------------------------------------------
    // pVartotojuProfiliai
    function pVarotojuProfiliai()
    {
        include("konfiguracija.php");
         $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
         $DB -> set_charset('utf8');
         $DB1 = $DB -> query("SELECT vID,nuotrauka, vardas, pavarde, apie, elpastas FROM vartotojas ORDER BY pavarde");
         $k = $DB1 -> num_rows;
         for($x = 1; $x <= $k; $x++)
         {
           $EIL = $DB1 -> fetch_assoc();
           if($EIL['elpastas'] != 'admin@neatrasta.lt')
           {
            echo '<div class="divasd">
                    <div class="d-flex flex-lg-row flex-column">
                      <div class="priartinimas d-flex flex-column me-4 align-items-center">
                        <p><img src="images/'.$EIL['nuotrauka'].'" style="height: 100px; width: 100px;"></p>
                      </div>
                      <div class="d-flex flex-column me-4">
                        <div class="skiltis1">
                          <p class="d-flex justify-content-center justify-content-lg-start">'.mb_strtoupper($EIL['vardas']).' '.mb_strtoupper($EIL['pavarde']).'</p>
                        </div>
                        <div class="aprasymas">
                          <p>'.nl2br($EIL['apie']).'</p>
                        </div>
                        
                      </div>
                      <div class="d-flex flex-column justify-content-sm-center align-items-sm-center desine">
                            <a href="pVartotojoProfilioPerziura.php?X='.$EIL['vID'].'"><input type="submit" value="Peržiūrėti" id="paskyra" class="parastes" style="margin-top: 0;"></a>
                        </div>
                    </div>
                  </div>';
           }
           
         }
         $DB -> close();
    }
    // -----------------------------------------------------------------------------------------------------------------------------------------------------------
    // pVartotojoProfilioPerziura
    function pVartotojoProfilioPerziuraAsmInfo()
    {
         include("konfiguracija.php");
         $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
         $DB -> set_charset('utf8');
         $DB1 = $DB -> query("SELECT * FROM vartotojas");
         $k = $DB1 -> num_rows;
         for($x = 1; $x <= $k; $x++)
         {
           $EIL = $DB1 -> fetch_assoc();
           if(isset($_GET['X']))
           {
              $eil = $_GET['X'];
              //echo $eil;
           }
           if($EIL['vID'] == $eil)
           {
            echo ' <!--vartotojas-->
                    <div class="divasd">
                      <div class="d-flex flex-column">
                        <div class="priartinimas d-flex flex-column me-4 align-items-center">
                          <p><img src="images/'.$EIL['nuotrauka'].'" style="height: 200px; width: 200px;"></p>
                        </div>
                        <div class="d-flex flex-column me-4">
                          <div class="skiltis1">
                            <p class="d-flex justify-content-center ">'.mb_strtoupper($EIL['vardas']).' '.mb_strtoupper($EIL['pavarde']).'</p>
                          </div>
                          <div class="skiltis1">
                            <p class="d-flex justify-content-lg-start justify-content-center">APIE MANE</p>
                          </div>
                          <div class="aprasymas">
                            <p>'.nl2br($EIL['apie']).'</p>
                          </div>
                          <div class="skiltis1">
                            <p class="d-flex justify-content-lg-start justify-content-center">KONTAKTAI</p>
                          </div>
                          <div  class="aprasymas">
                            <p><i class="fas fa-envelope"></i> '.$EIL['elpastas'].'</p>
                            <p><i class="fas fa-phone"></i> '.$EIL['telnr'].'</p>
                            <p><i class="fab fa-facebook"></i> '.$EIL['fb'].'</p>
                            <p><i class="fab fa-instagram"></i> '.$EIL['ig'].'</p>
                          </div>
                        </div> 
                      </div>
                    </div>';
             }
          }
          $DB -> close();
    }
    function pVartotojoProfilioPerziuraParNuot()
    {
        if(isset($_GET['X']))
          {
            $eil = $_GET['X'];
            //echo $eil;
          }
          include("konfiguracija.php");
          $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
          $DB -> set_charset('utf8');
          $DB1 = $DB -> query("SELECT vID, pID, pPavadinimas, pradzia, pabaiga
                                FROM paroda, vartotojas
                              WHERE vartotojas.vID = paroda.vartID");
          $k = $DB1 -> num_rows;    
          for($x = 1; $x <= $k; $x++)
          {
            $EIL = $DB1 -> fetch_assoc();
            if($EIL['vID'] == $eil)
            {
              echo '<!--parodos pavadinimas-->
                      <div class="divasd">
                        <div class="skiltis" id="skiltis3">
                          <p>'.mb_strtoupper($EIL['pPavadinimas']).'</p>
                        </div>
                        <div>
                          <p class="data1">'.$EIL['pradzia'].' iki '.$EIL['pabaiga'].'</p>
                        </div>
                      </div>
                      <div class="d-flex justify-content-center align-items-center ">
                        <div class="d-flex flex-wrap flex-lg-row ">';
                  
                      $DB2 = $DB -> query("SELECT nID, mNuotrauka, pID, parID pradzia
                                           FROM nuotrauka, paroda
                                           WHERE nuotrauka.parID = paroda.pID and pID = $x 
                                           ORDER BY parID desc");
                      $k2 = $DB2 -> num_rows; 
                      for($i = 1; $i <= $k2; $i++)
                      {
                        $EIL2 = $DB2 -> fetch_assoc();
                        echo '<a href="#" id="plotis" class="m-2 align-items-center " >
                                <img  src="images/'.$EIL2['mNuotrauka'].'" id="nplotis">
                              </a>';
                      }
                      echo '</div>
                          </div>';   
             }
           }
    }
    // ---------------------------------------------------------------------------------------------------------------------------------------------------------
    // aVartotojuProfiliai
    function aVarotojuProfiliai()
    {
        include("konfiguracija.php");
         $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
         $DB -> set_charset('utf8');
         $DB1 = $DB -> query("SELECT vID,nuotrauka, vardas, pavarde, apie, elpastas FROM vartotojas ORDER BY pavarde");
         $k = $DB1 -> num_rows;
         for($x = 1; $x <= $k; $x++)
         {
           $EIL = $DB1 -> fetch_assoc();
           if($EIL['elpastas'] != 'admin@neatrasta.lt')
           {
            echo '
            <div class="divasd">
                    <div class="d-flex flex-lg-row flex-column">
                      <div class="priartinimas d-flex flex-column me-4 align-items-center">
                        <p><img src="images/'.$EIL['nuotrauka'].'" style="height: 100px; width: 100px;"></p>
                      </div>
                      <div class="d-flex flex-column me-4">
                        <div class="skiltis1">
                          <p class="d-flex justify-content-center justify-content-lg-start">'.mb_strtoupper($EIL['vardas']).' '.mb_strtoupper($EIL['pavarde']).'</p>
                        </div>
                        <div class="aprasymas">
                          <p>'.nl2br($EIL['apie']).'</p>
                        </div>
                        
                      </div>
                      
                      <div class="d-flex flex-column desine justify-content-center align-items-center">
                        <div class="d-flex row justify-content-center align-items-center ">
                            <a href="aVartotojoProfilioPerziura.php?X='.$EIL['vID'].'"><input type="submit" value="Peržiūrėti" id="paskyra" class="parastes2" style="margin-top: 0;"></a>
                        </div>
                        <form method="post" action="aVartotojuProfiliai.php">
                        <div class="d-flex row flex-column justify-content-center align-items-center ">
                           <input type="submit" name="'.$EIL['vID'].'" value="Naikinti" id="paskyra" class="parastes2" style="margin-top: 10px;">
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>';
                   $vID = $EIL['vID'];
                   aPaskyrosTrynimas($vID);   
           }
          }               
    }
    function aPaskyrosTrynimas($vID)
    {
        include("konfiguracija.php");
        $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
        $DB -> set_charset('utf8');
        if(isset($_POST[$vID]))
        {
          $DB -> query("DELETE FROM uzklausa WHERE varID = $vID");
          $DB -> query("DELETE FROM atsiliepimas WHERE vartoID = $vID");
          $DB1 = $DB -> query("SELECT pID, nID, vID, vartID
                               FROM paroda, nuotrauka, vartotojas
                               WHERE paroda.pID = nuotrauka.parID and vartotojas.vID = paroda.vartID");
          $k = $DB1 -> num_rows;
          for($x = 1; $x <= $k; $x++)
          {
            $EIL = $DB1 -> fetch_assoc();
            if($vID == $EIL['vartID'])
            {
              $pID = $EIL['pID'];
              $DB -> query("DELETE FROM nuotrauka WHERE parID = $pID");
              $DB -> query("DELETE FROM atsiliepimas WHERE paroID = $pID");
            }
          }
            $DB -> query("DELETE FROM paroda WHERE vartID = $vID");
            $DB -> query("DELETE FROM vartotojas WHERE vID = $vID");
            echo '<script>location.replace("aVartotojuProfiliai.php");</script>';
        }
        $DB -> close();
    }
    // -----------------------------------------------------------------------------------------------------------------------------------------------------------
    // aVartotojoProfilioPerziura
    function aVartotojoProfilioPerziuraAsmInfo()
    {
        include("konfiguracija.php");
         $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
         $DB -> set_charset('utf8');
         $DB1 = $DB -> query("SELECT * FROM vartotojas");
         $k = $DB1 -> num_rows;
         for($x = 1; $x <= $k; $x++)
         {
           $EIL = $DB1 -> fetch_assoc();
           if(isset($_GET['X']))
           {
              $eil = $_GET['X'];
              //echo $eil;
           }
           if($EIL['vID'] == $eil)
           {
            echo ' <!--vartotojas-->
                    <div class="divasd">
                      <div class="d-flex flex-column">
                        <div class="priartinimas d-flex flex-column me-4 align-items-center">
                          <p><img src="images/'.$EIL['nuotrauka'].'" style="height: 200px; width: 200px;"></p>
                        </div>
                        <div class="d-flex flex-column me-4">
                          <div class="skiltis1">
                            <p class="d-flex justify-content-center ">'.mb_strtoupper($EIL['vardas']).' '.mb_strtoupper($EIL['pavarde']).'</p>
                          </div>
                          <div class="skiltis1">
                            <p class="d-flex justify-content-lg-start justify-content-center">APIE MANE</p>
                          </div>
                          <div class="aprasymas">
                            <p>'.nl2br($EIL['apie']).'</p>
                          </div>
                          <div class="skiltis1">
                            <p class="d-flex justify-content-lg-start justify-content-center">KONTAKTAI</p>
                          </div>
                          <div  class="aprasymas">
                            <p><i class="fas fa-envelope"></i> '.$EIL['elpastas'].'</p>
                            <p><i class="fas fa-phone"></i> '.$EIL['telnr'].'</p>
                            <p><i class="fab fa-facebook"></i> '.$EIL['fb'].'</p>
                            <p><i class="fab fa-instagram"></i> '.$EIL['ig'].'</p>
                          </div>
                        </div> 
                      </div>
                    </div>';
             }
          }
          $DB -> close();
    }
    function aVartotojoProfilioPerziuraParNuot()
    {
        if(isset($_GET['X']))
          {
            $eil = $_GET['X'];
            //echo $eil;
          }
          include("konfiguracija.php");
          $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
          $DB -> set_charset('utf8');
          $DB1 = $DB -> query("SELECT vID, pID, pPavadinimas, pradzia, pabaiga
                               FROM paroda, vartotojas
                               WHERE vartotojas.vID = paroda.vartID");
          $k = $DB1 -> num_rows;    
          for($x = 1; $x <= $k; $x++)
          {
            $EIL = $DB1 -> fetch_assoc();
            if($EIL['vID'] == $eil)
            {
              echo '<!--parodos pavadinimas-->
                      <div class="divasd">
                        <div class="skiltis" id="skiltis3">
                          <p>'.mb_strtoupper($EIL['pPavadinimas']).'</p>
                        </div>
                        <div>
                          <p class="data1">'.$EIL['pradzia'].' iki '.$EIL['pabaiga'].'</p>
                        </div>
                      </div>
                      <div class="d-flex justify-content-center align-items-center ">
                        <div class="d-flex flex-wrap flex-lg-row ">';
                  
                      $DB2 = $DB -> query("SELECT nID, mNuotrauka, pID, parID pradzia
                                           FROM nuotrauka, paroda
                                           WHERE nuotrauka.parID = paroda.pID and pID = $x 
                                           ORDER BY parID desc");
                      $k2 = $DB2 -> num_rows; 
                      for($i = 1; $i <= $k2; $i++)
                      {
                        $EIL2 = $DB2 -> fetch_assoc();
                        echo '<a href="#" id="plotis" class="m-2 align-items-center " >
                                <img  src="images/'.$EIL2['mNuotrauka'].'" id="nplotis">
                              </a>';
                      }
                      echo '</div>
                          </div>';   
             }
           }
    }
    // -----------------------------------------------------------------------------------------------------------------------------------------------------------
    // pJusuProfilis
    function pPrisijungusioVartotojoAsmInfo()
    {
        echo ' <!--vartotojas-->
        <div class="divasd">
          <div class="d-flex flex-column">
            <div class="priartinimas d-flex flex-column me-4 align-items-center">
              <p><img src="images/'.$_SESSION['nuotrauka'].'" style="height: 200px; width: 200px;"></p>
            </div>
            <div class="d-flex flex-column me-4">
              <div class="skiltis1">
                <p class="d-flex justify-content-center ">'.mb_strtoupper($_SESSION['vardas']).' '.mb_strtoupper($_SESSION['pavarde']).'</p>
              </div>
              <div class="skiltis1">
                <p class="d-flex justify-content-lg-start justify-content-center">APIE MANE</p>
              </div>
              <div class="aprasymas">
                <p>'.nl2br($_SESSION['apie']).'</p>
              </div>
              <div class="skiltis1">
                <p class="d-flex justify-content-lg-start justify-content-center">KONTAKTAI</p>
              </div>
              <div  class="aprasymas">
                <p><i class="fas fa-envelope"></i> '.$_SESSION['elpastas'].'</p>
                <p><i class="fas fa-phone"></i> '.$_SESSION['telnr'].'</p>
                <p><i class="fab fa-facebook"></i> '.$_SESSION['fb'].'</p>
                <p><i class="fab fa-instagram"></i> '.$_SESSION['ig'].'</p>
              </div>
            </div> 
          </div>
        </div>';
    }
    function pPrisijungusioVartotojoDuomRed()
    {
      echo '<form method="post" action="pJusuProfilis.php">
                  <p class="pav">Vardas</p>
                  <input type="text" name="vardas" class="ivedimas" value="'.$_SESSION['vardas'].'" >
                  <p class="pav">Pavardė</p>
                  <input type="text" name="pavarde" class="ivedimas" value="'.$_SESSION['pavarde'].'">
                  <p class="pav">Apie Jus</p>
                  <textarea name="apie" class="ivedimas">'.$_SESSION['apie'].'</textarea>
                  <p class="pav">El.paštas</p>
                  <input type="email" name="elpastas" class="ivedimas" value="'.$_SESSION['elpastas'].'">
                  <p class="pav">Tel.nr.</p>
                  <input type="text" name="telnr" class="ivedimas" placeholder="+3706*******" pattern="[+]{1}[0-9]{11}" value="'.$_SESSION['telnr'].'">
                  <p class="pav">Facebook</p>
                  <input type="text" name="fb" class="ivedimas" placeholder="padėkite „-“ jei neturite paskyros" value="'.$_SESSION['fb'].'">
                  <p class="pav">Instagram</p>
                  <input type="text" name="ig" class="ivedimas" placeholder="padėkite „-“ jei neturite paskyros" value="'.$_SESSION['ig'].'">
                  <p class="pav">Slaptažodis</p>
                  <input type="password" name="slaptazodis" class="ivedimas" placeholder="bent 5 simboliai">
                  <p class="pav">Pakartoti slaptažodį</p>
                  <input type="password" name="pslaptazodis" class="ivedimas">
                  <div class="d-flex justify-content-center">
                    <input type="submit" name="redaguoti" value="Redaguoti" id="paskyra" class="parastes" >
                  </div>
              </form>';

            if(isset($_POST['redaguoti']))
            {
              $vardas = $_POST['vardas'];
              $pavarde = $_POST['pavarde'];
              $elpastas = $_POST['elpastas'];
              $telnr = $_POST['telnr'];
              $fb = $_POST['fb'];
              $ig = $_POST['ig'];
              $apie = $_POST['apie'];
              $slaptazodis = $_POST['slaptazodis'];
              $pslaptazodis = $_POST['pslaptazodis'];
              $vID = $_SESSION['vID'];
              if($vardas == '' || $pavarde == '' || $elpastas == '' || $telnr == '' || $fb == '' || $ig == '' || $apie == '' || $slaptazodis == '' || $pslaptazodis == '')
              {
                echo '<p class="pranesimas">Įveskite visus duomenis.</p>';
              }
              else if(strlen($slaptazodis) < 5)
              {
                echo '<p class="pranesimas">Įvestas per trumpas slaptažodis.</p>';
              }
              else if($slaptazodis != $pslaptazodis)
              {
                echo '<p class="pranesimas">Slaptažodžiai nesutampa.</p>';
              }
              else 
              {
                include("konfiguracija.php");
                $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
                $DB -> set_charset('utf8');
                $DB -> query("UPDATE vartotojas SET vardas = '$vardas', pavarde = '$pavarde', elpastas = '$elpastas', telnr = '$telnr', 
                                      fb = '$fb', ig = '$ig', apie = '$apie', slaptazodis = md5('$slaptazodis')
                                      WHERE vID = $vID");
                // header('Location: prisijungimas.php');
                echo '<script>location.replace("prisijungimas.php?atsijungti");</script>';
                $DB -> close();
              } 
            }
    }
    function pPrisijungusioVartotojoSkelbtosPar()
    {
          include("konfiguracija.php");
          $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
          $DB -> set_charset('utf8');
          $DB1 = $DB -> query("SELECT vID, pID, pPavadinimas, pradzia, pabaiga
                                FROM paroda, vartotojas
                              WHERE vartotojas.vID = paroda.vartID");
          $k = $DB1 -> num_rows;   
          for($x = 1; $x <= $k; $x++)
          {
            $EIL = $DB1 -> fetch_assoc();
            if($_SESSION['vID'] == $EIL['vID'])
            {
              echo '<!--parodos pavadinimas-->
                      <div class="divasd">
                        <div class="skiltis" id="skiltis3">
                          <p>'.mb_strtoupper($EIL['pPavadinimas']).'</p>
                        </div>
                        <div>
                          <p class="data1">'.$EIL['pradzia'].' iki '.$EIL['pabaiga'].'</p>
                        </div>
                      </div>
                      <div class="d-flex justify-content-center align-items-center ">
                        <div class="d-flex flex-wrap flex-lg-row ">';
                  
                      $DB2 = $DB -> query("SELECT nID, mNuotrauka, pID, parID pradzia
                                           FROM nuotrauka, paroda
                                           WHERE nuotrauka.parID = paroda.pID and pID = $x 
                                           ORDER BY parID desc");
                      $k2 = $DB2 -> num_rows; 
                      for($i = 1; $i <= $k2; $i++)
                      {
                        $EIL2 = $DB2 -> fetch_assoc();
                        echo '<a href="#" id="plotis" class="m-2 align-items-center " >
                                <img  src="images/'.$EIL2['mNuotrauka'].'" id="nplotis">
                              </a>';
                      }
                      echo '</div>
                          </div>';   
             }
           }
    }
    // ----------------------------------------------------------------------------------------------------------------------------------------------------
    // pPateiktiUzklausa
    function pUzklausosPateikimas()
    {
        echo '<form method="post" action="pPateiktiUzklausa.php">
                  <p class="pav">Vardas</p>
                  <p id="priv">'.$_SESSION['vardas'].'</p>
                  <p class="pav">Pavardė</p>
                  <p id="priv">'.$_SESSION['pavarde'].'</p>
                  <p class="pav">Apie Jus</p>
                  <p id="priv">'.nl2br($_SESSION['apie']).'</p>
                  <p class="pav">Parodos pavadinimas</p>
                  <input type="text" name="pavadinimas" class="ivedimas">
                  <p class="pav">Parodos aprašymas</p>
                  <textarea name="aprasymas" class="ivedimas"></textarea>
                  <div class="d-flex justify-content-center">
                    <input type="submit" name="pateikti" value="Pateikti" id="paskyra" class="parastes" >
                  </div>
              </form>';

        if(isset($_POST['pateikti']))
        {
          $pavadinimas = $_POST['pavadinimas'];
          $aprasymas = $_POST['aprasymas'];

          if($pavadinimas == '' || $aprasymas == '')
          {
            echo '<p class="pranesimas">Įveskite visus duomenis.</p>';
          }
          else
          {
            include("konfiguracija.php");
            $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
            $DB -> set_charset('utf8');
            $data = date('Y-m-d');
            $varID = $_SESSION['vID'];
            $DB -> query("INSERT INTO uzklausa (uID, uPavadinimas, uAprasymas, data, varID)
                          VALUES (NULL,'$pavadinimas','$aprasymas','$data',$varID)");
            echo '<p class="pranesimas">Užklausa pateikta.</p>';
          }
        }
    }
    // -----------------------------------------------------------------------------------------------------------------------------------------------------
    // aUzklausos
    function aUzklausuAtvaizdavimas()
    {
        include("konfiguracija.php");
        $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
        $DB -> set_charset('utf8');
        $DB1 = $DB -> query("SELECT vID, vardas, pavarde, apie, uID, uPavadinimas, uAprasymas, data
                            FROM vartotojas, uzklausa
                            WHERE vartotojas.vID = uzklausa.varID
                            ORDER BY data desc, pavarde;");
        $k = $DB1 -> num_rows;   
        for($x = 1; $x <= $k; $x++)
        {
            $EIL = $DB1 -> fetch_assoc();
            echo '<div class="divasd">
                    <div class="skiltis5">
                    <p>'.$EIL['data'].'</p>
                    <p>'.mb_strtoupper($EIL['vardas']).' '.mb_strtoupper($EIL['pavarde']).'</p>
                    </div>
                    <div class="skiltis6">
                    <p>Apie</p>
                    </div>
                    <div class="aprasymas">
                        <p>'.nl2br($EIL['apie']).'</p>
                    </div>
                    <div class="skiltis6">
                    <p>Parodos pavadinimas</p>
                    </div>
                    <div class="aprasymas">
                        <p>'.$EIL['uPavadinimas'].'</p>
                    </div>
                    <div class="skiltis6">
                    <p>Parodos aprašymas</p>
                    </div>
                    <div class="aprasymas">
                        <p>'.$EIL['uAprasymas'].'</p>
                    </div>
                    <div class="d-flex justify-content-center">
                    
                    <form method="post" action="aUzklausos.php">
                        <a href="aProfilioPerziura.php?X='.$EIL['vID'].'" style="text-decoration: none;">
                            <input type="button" name="perziuretiProfili" value="Peržiurėti profilį" id="paskyra" style="margin-bottom:20px;margin-right:20px;">
                        </a>
                        <input type="submit" name="'.$EIL['uID'].'" value="Naikinti užklausą" id="paskyra" style="margin-bottom:20px;">
                    </form>

                    </div>
                </div>';
                $uID = $EIL['uID'];
                aUzklausosTrynimas($uID);
        }
        $DB -> close();
    }
    function aUzklausosTrynimas($uID)
    {
        include("konfiguracija.php");
        $DB = new mysqli('localhost',$DBuser,$DBpass,$DBname);
        $DB -> set_charset('utf8');
        if(isset($_POST[$uID]))
        {
          $DB -> query("DELETE FROM uzklausa WHERE uID = $uID");
          echo '<script>location.replace("aUzklausos.php");</script>';
        }
    }
    // -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
?>

