<?php 
    include ('../conects/conect.php');

    session_start();
    if(!isset($_SESSION['Code'])){
        header('Location: ../index.php');
    }
    $Code = $_SESSION['Code'];

    $sql = "SELECT Code, Name, LastName, Ocupation, Telephone, Address, Facebook, Instagram, Email FROM cuentastutores WHERE Code ='$Code'";
    $resultado = $conn->prepare($sql);
    $resultado->execute();

    $row = $resultado->fetch();

    function email($row){
        echo utf8_decode($row['Email']);
    }

    function nameAll($row){
        echo utf8_decode($row['LastName']);
        echo ' ';
        echo utf8_decode($row['Name']);
    }

    function Ocupation($row){
        echo utf8_decode($row['Ocupation']);
    }

    function Telephone($row){
         echo utf8_decode($row['Telephone']);

    }
    function Address($row){
        echo utf8_decode($row['Address']);
    }
?>