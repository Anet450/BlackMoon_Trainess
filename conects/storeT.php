<?php 
    include('conect.php');

    if(count($_POST) > 0){
        $Code = $_POST['Code'];
        $Name = $_POST['Name'];
        $LastName = $_POST['LastName'];
        $Ocupation = $_POST['Ocupation'];
        $Telephone = $_POST['Telephone'];
        $Address = $_POST['Address'];
        $Facebook = $_POST['Facebook'];
        $Instagram = $_POST['Instagram'];
        $Twitter = $_POST['Twitter'];
        $Email = $_POST ['Email'];
        $Password = $_POST['Password'];
        //$Password = hash('sha512',$Password);
        
    
        $sql = "INSERT INTO cuentastutores(Code, Name, LastName, Ocupation, Telephone, Address, Facebook, Instagram, Twitter, Email, Password) VALUES ('$Code', '$Name','$LastName', '$Ocupation', '$Telephone', '$Address', '$Facebook', '$Instagram', '$Twitter', '$Email', '$Password')";
        $conn->exec($sql);
        header('Location: ../main_T.php');
    }
?>
