<?php 
    include("conect.php");

    if(count($_POST) > 0){
        $Code = $_POST['Code'];
        $Name = $_POST['Name'];
        $LastName = $_POST['LastName'];
        $Ocupation = $_POST['Ocupation'];
        $Group = $_POST['Group'];
        $Telephone = $_POST['Telephone'];
        $Address = $_POST['Address'];
        $Facebook = $_POST['Facebook'];
        $Instagram = $_POST['Instagram'];
        $Twitter = $_POST['Twitter'];
        $Email = $_POST ['Email'];
        $Password = $_POST ['Password'];
        
        $sql = "INSERT INTO cuentastrainers(Code, Name, LastName, Ocupation, Group, Telephone, Address, Facebook, Instagram, Twitter, Email, Password) VALUES ('$Code', '$Name','$LastName', '$Ocupation', '$Group', '$Telephone', '$Address', '$Facebook', '$Instagram', '$Twitter', '$Email', '$Password')";
        $conn->exec($sql);
        /*
          $Group = $_POST['Group'];    
          $Age = $_POST['Age'];
          $Height = $_POST['Height'];
          $Weight = $_POST['Weight'];
          $Gender = $_POST['Gender'];
           //$Group = $_POST['Group'];
      */
    }

  header('Location: ../main_T.php');

?>