<?php 
include("gestionstagiaire_V1.php");

$dsn ="mysql:host=localhost;dbname=gestionstagiare_V1;charset=utf8";
$username ="root";
$password ="";


try{

    $pdo = new PDO($dsn,$username, $password);
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    ECHO" connected successfully";


}catch(PDOException $e){

echo" connected failed {$e -> getmessage()}";

}





