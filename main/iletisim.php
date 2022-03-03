<html>
<body>



<?php 

    $ad = $_POST['ad'];
echo "İsim: <b>". $ad."</b><br><br> ";
    
    
    $email = $_POST['email'];
echo "E-mail: <b>". $email."</b><br><br> ";



    $cinsiyet= $_POST["radio"];
echo "Cinsiyet:".$cinsiyet."<br><br>" ;
    
    
   
    
    

    if(isset($_POST['sebep'])) 
    {
        $sebep = $_POST['sebep'];
 
        echo 'İletişim sebepleri: <br/>';
 
        foreach($sebep as $secilen_sebep)
        {
            echo  $secilen_sebep . ' <br/>';
        }
    } 
    
    
    
    
    else 
    {
    echo 'Hiç sebep seçmediniz.';
    }
    
    
    
    
    
    echo "<br>Mesaj:";
 echo htmlentities($_POST['mesaj']);
 


  echo "<br/><br/></b> <a href='index.html'>Anasayfaya Dön</a>";



 


?> 
    
    
</body>
</html>