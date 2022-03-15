<?php 
    include('conect.php');

    if(count($_POST) > 0){
        $CodeI = $_POST['Code'];
        $Name = $_POST['Name'];
        $LastName = $_POST['LastName'];
        $Ocupation = $_POST['Ocupation'];
        $Group = $_POST['Group'];
        $Telephone = $_POST['Telephone'];
        $Address = $_POST['Address'];
        $Facebook = $_POST['Facebook'];
        $Instagram = $_POST['Instagram'];
        $Twitter = $_POST['Twitter'];
        $Age = $_POST['Age'];
        $Height = $_POST['Height'];
        $Weight = $_POST['Weight'];
        $Gender = $_POST['Gender'];
        $Email = $_POST ['Email'];
        $Password = $_POST ['Password'];
        
        $sql = "INSERT INTO cuentasproxidol(Code Name, LastName, Ocupation, Group, Telephone, Address, Facebook, Instagram, Twitter, Age, Height, Weight, Gender, Email, Password) VALUES ('$CodeI','$Name','$LastName','$Ocupation','$Group','$Telephone','$Address','$Facebook','$Instagram','$Twitter','$Age','$Height','$Weight','$Gender','$Email','$Password')";
        $conn->exec($sql);
        header('Location: ../main_T.php');
    }
?>