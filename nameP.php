<?php 
     session_start();
     if(!isset($_SESSION['Code'])){
         header('Location: ../index.php');
     }
     $Code = $_SESSION['Code'];

     $sql = "SELECT Code, Name, LastName, Email FROM cuentasproxidol WHERE Code ='$Code'";
     $resultado = $conn->prepare($sql);
     $resultado->execute();

     $row = $resultado->fetch();

     function email($row){
        echo utf8_decode($row['Email']);
     }

     function name($row){
        echo utf8_decode($row['LastName']);
        echo '_';
        echo utf8_decode($row['Name']);
     }
?>