<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
    <style>
        body { 
            text-aligin: center; 
        }            
    
        .rood { 
            border: red solid 5px; 
        }

    </style>
</head>
<body>
<?php
    for($i = 1; $i<=9; $i++){
        if($i == 3) { 
            $class= "class='rood'"; 
        } 
        else { 
            $class= ""; 
        }
        
        echo "<img " .$class. "src='img/aap" .$i. ".jpg'>"; 

    }
  
?>
    
</body>
</html>