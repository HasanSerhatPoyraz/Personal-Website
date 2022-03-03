<html>
<body>



<?php 




$mevcut_kullanici_adi = "g191210055@gmail.com";


$mevcut_sifre = "123";


 





$gelen_kullanici_adi = $_POST['kullanici_adi'];


$gelen_sifre = $_POST['sifre'];


 





if ($gelen_kullanici_adi == $mevcut_kullanici_adi && $gelen_sifre == $mevcut_sifre){




  echo "Hos geldiniz, <b>". $gelen_kullanici_adi."</b> <a href='index.html'>Anasayfaya Dön</a>";


  


}
elseif ($gelen_kullanici_adi != $mevcut_kullanici_adi){


    echo "Girdiginiz kullanici adi hatali";
    echo "<a href='girisekrani.html'>Tekrar Deneyin</a>";


}elseif ($gelen_sifre != $mevcut_sifre){


    echo "Girdiginiz sifre hatali";
    echo "<a href='girisekrani.html'>Tekrar Deneyin</a>";


}


 


?> 
    
    
</body>
</html>