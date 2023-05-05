<?php

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $name = ["Edwin", "Mike", "Peter", "Maria", "Tom", "Jake"];

    if(!in_array($username, $name)){
        echo "User does not exist!";
    }else {
        echo "You are logged in!";
    }

    if(strlen($username) < 3 || $username == ""){
        echo "Username has to be longer than 3 characters!";
    }elseif(strlen($username > 10)){
        echo "Username cant be longer than 10";

    }
}
?>