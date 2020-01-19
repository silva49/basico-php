<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <title>clase 2 año 2020</title>
  </head>
     <body>
     <h1>Vectores</h1>
     <?php
        $vector= "1231 1056 32 938 23 655 929 705 553 756 1105 1080 318 1081 618 232 662 746 428 899 368 856 48 551 607 948 198 104 582 81 555 513 1128 578 151 1141 1223" ;
          $vector = explode  (" ", $vector);   
        $suma=0; 
        
        foreach($vector as $valores){
           $suma = $suma + $valores;
         }
         echo $suma;
    ?>

    
    
     </body>
     </html>
