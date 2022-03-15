<?php 

    include('../conects/conect.php');

    session_start();

    $Code = $_POST['Code'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $sql = "SELECT * FROM cuentastutores WHERE Code = '$Code'and Password ='$Password'";
    $resultado = $conn->prepare($sql);
    $resultado->execute();

    $row = $resultado->fetch();
    if($row['Code'] == $Code && $row['Password'] == $Password){
        $_SESSION['Code'] = $Code;
        header('Location: ../main_T.php');
    }else{
        header('Location: ../index.php');
    }

?>