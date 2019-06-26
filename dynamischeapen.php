<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kies je aapje</title>
</head>
<body>
    <form method="POST">
        <select name="apen">
            <option value="aap1">Aapje Daan</option>
            <option value="aap2">Aapje Sjoerd</option>
            <option value="aap3">Aapje Rick</option>
        
            <input type="button" value="knop">
        </select>  
    </form>

<?php

echo "img src='img/aap/".$_POST['aap'].".jpg'>"; 




?>



</body>
</html>