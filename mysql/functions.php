<?php include "db.php";?>
<?php

function registerUser() {
    if(isset($_POST["submit"])){
        global $connection;
        $username = $_POST["username"];
        $password =  $_POST["password"];

        // Clean data 
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        // Hashing & salt the password 
        $hashFormat = "$2y$10$";
        // extra string as parameter 
        $salt = "mostowerpoweredsecretkey";
        $hash_and_salt = $hashFormat . $salt;
        $password = crypt($password, $hash_and_salt);  

        // insert data 
        $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
        $result = mysqli_query($connection, $query);
        if(!$result){
        die("Query failed" . mysqli_error($connection));
       }else{
        echo "user created";
       }
    }
}

function readRows() {
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result){
    die("Query failed" . mysqli_error($connection));
   }
   while($row = mysqli_fetch_assoc($result)) {
  
    print_r($row);

    }
}

function GetAllUsers(){
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query failed" . mysqli_error($connection));
    }
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function updateData(){
    if(isset($_POST["submit"])){
        global $connection;
        $username =  $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        $query = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Query failed" . mysqli_error($connection));
        }else {
            echo "User updated";
        }
    }
}

function deleteData(){
    if(isset($_POST["submit"])){
    global $connection;
    $id = $_POST['id'];
    $query = "DELETE FROM users WHERE id = $id";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Query failed" . mysqli_error($connection));
        }else {
            echo "User deleted";
        }
    }
}
?>