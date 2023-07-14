<?php
$username = $_POST["username"];
$password = $_POST["password"];
    if($username == "diamond1908" && $password == "19082022"){
        header('location: ../index-tela-email.php');
    }else{
        print( "<h1> Login invalido </h1>");
    }
?>