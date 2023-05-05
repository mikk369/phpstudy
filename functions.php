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

function init(){
echo "hello World";
echo "<br>";
calcSomething();
echo "<br>";
saySomething();

}

function calcSomething() {
    echo 12+12;
}
function saySomething() {
    echo "say something else";
}
init();
echo ("<br>");
function exercise($num1,$num2){
    $sum = $num1 + $num2;

    return $sum;
}
$result = exercise(69,69);
echo $result;
?>

</body>
</html>