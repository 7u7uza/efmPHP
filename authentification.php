<?php 
session_start();
include("conn.php");
$login=  $_POST["login"] ;
$pwd = $_POST["password"] ;




if(isset ($_POST ["submit" ])){
    

        
    
    
    if(empty($login )){
    
    echo" your login not valide <br>  ";
    
    
    }else{
        echo" validate login  <br> ";
    
    }
    if(empty($pwd )){
    
        echo" your password not valide  <br>  ";
        
        }else{
            echo" validate password  <br> ";
        
        
        
        }
        header ("Location: espaceprivee.php");
    
    
if (empty($_POST["login"]) && empty($_POST["password" ])){
$_SESSION[ "login"] = $_POST ["login"];
header ("Location: espaceprivee.php");
$_SESSION[ "password"] = $_POST["password"];}
echo $_SESSION[ "login"] . "<br>";
echo $_SESSION["password"] . "<br>";
}


// echo  $_POST["login"] . "<br>";
// echo $_POST["password"] . "<br>";






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{ border: 1px black dotted ;}
    </style>
</head>
<body>
    <table>
        <tr><td>Authentification</td></tr>
    <form action="authentification.php" method="post">
       <tr><td><label for="login">login</label></td></tr>
        <tr><td><input type="text" name="login"></td></tr>
        <tr><td><label for="password">password</label></td></tr>
        <tr><td><input type="password" name="password"></td></tr>
        <tr><td><input type="submit" value="submit" name="submit"></td></tr>
    </form>
    </table>
</body>
</html>