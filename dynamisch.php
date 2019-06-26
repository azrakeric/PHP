<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dynamische Website</title>
</head>
<body>
<form method="POST">
	Inlognaam <input type="text" name="inlognaam" value=""><br>
	Wachtwoord <input type="password" name="wachtwoord" value="">
	<input type="submit" name="knop" value="verstuur">
</form>

</body>
<?php
$inlognaam = $_POST["inlognaam"]; 
$wachtwoord = $_POST["wachtwoord"]; 


if($inlognaam != "" || $wachtwoord !=""){ 
    //print_r($_GET); zie je in de url 
    echo $_POST['inlognaam']; // zie je niet in de url //$inlognaam."<br>"; 
    echo $_POST['wachtwoord']; //$wachtwoord;
}else {
    echo "Vul alle velden in."; 
}

?> 
</html>