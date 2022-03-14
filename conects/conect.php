<?php 
$servername = "localhost";
$username = "BlackMoonT";
$password = "blackmoon12344t";
$database = "blackmoontrainees";
try{
    $conn = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        echo"No se pudo conectar al servidor por la razon: " . $e->getMessage();
    }
?>

