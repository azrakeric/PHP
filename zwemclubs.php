<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zwemclubs</title>
    <style>
    body{ 
        
    }   

    table, th, td, tr {
    border: 1px solid black;
    }
   
    
    </style>
</head>
<body>



<table class="tg">
  <tr>
    <td>De Spartelkuikens</td>
    <td>25</td>
  </tr>
  <tr>
    <td>De waterbuffels</td>
    <td>32</td>
  </tr>
  <tr>
    <td>Plonsmderin</td>
    <td>11</td>
  </tr>
  <tr>
    <td>Bommetje</td>
    <td>23</td>
  </tr>
</table>




<?php
 $spartelkuikens = 25; 
 $waterbuffels = 32; 
 $plonsmderin = 11; 
 $bommetje = 23; 
  

 $zwemclubs = array(
  '$spartelkuikens' => 25, 
  '$waterbuffels' => 32, 
  '$plonsmderin' => 11, 
  '$bommetje' => 23
 );


    foreach ($zwemclubs as $a) {
      echo floor($a / 5)."<br>"; 
      for($i = 1; $i <=floor($a / 5); $i++){ 
        echo "<img src='img/swim.jpg' style='width: 100px;'>"; 
      } 
    
      echo "<br>"; 
      
}






?>
</body>
</html>