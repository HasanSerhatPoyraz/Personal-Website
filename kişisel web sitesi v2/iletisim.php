<html>
<body>



<?php 

    $ad = $_POST['ad'];
echo "İsim: <b>". $ad."</b><br><br> ";
    
    
    $email = $_POST['email'];
echo "E-mail: <b>". $email."</b><br><br> ";



    $cinsiyet= $_POST["radio"];
echo "Cinsiyet:".$cinsiyet."<br><br>" ;
    
    
     $sebep = $_POST['sebep'];
 
  if (count($sebep) > 0)
  {
      echo "İletişim Sebepleri:<br>";
     foreach ($sebep as $secilen_sebep)
     {
    echo $secilen_sebep."<br>";
     }
  }
    
   
    
    echo "<br>Mesaj:";
 echo htmlentities($_POST['mesaj']);
 






 


?> 
    
    
</body>
</html>