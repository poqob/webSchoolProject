<?php

isset($_POST["submit"]);
{

    $mail=$_POST["mail"];
    $sifre=$_POST["pass"];
    
    if (($mail=="b201210078.sakarya.edu.tr"||$mail=="B201210078.sakarya.edu.tr")&&($sifre=="b201210078"||$sifre=="B201210078")) {
        echo "zbanb";
        
        header("Location: ../iletisim.html");
    }
    else{
        header("Location: ../hakkimizda.html");
    }

}


?>