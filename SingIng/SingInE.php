<?php 

    include('../conects/conect.php');

    session_start();

    $Code = $_POST['Code'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $sql = "SELECT * FROM cuentastrainers WHERE Code = '$Code'and Password ='$Password'";
    $resultado = $conn->prepare($sql);
    $resultado->execute();

    $row = $resultado->fetch();
    if($row['Code'] == $Code && $row['Password'] == $Password){
        $_SESSION['Code'] = $Code;
        header('Location: ../main_E.php');
    }else{
        header('Location: ../index.php');
    }

?>