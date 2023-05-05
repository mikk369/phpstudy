<?php 

$cookieName = "BestCookie";
$value = 100;
// expires after 1 week 
$expiration = time() + (60*60*24*7);

setcookie($cookieName,$value,$expiration);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if(isset($_COOKIE["BestCookie"])){
    $newCookieName = $_COOKIE["BestCookie"];
        echo $newCookieName;

}else{
    $newCookieName = "";
}



?>


</body>
</html>