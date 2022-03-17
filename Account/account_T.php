    <?php 
        include('../conects/conect.php');
        include('../name.php');

        $Code = $_SESSION['Code'];
    
        $sql = "SELECT Code, Name, LastName, Ocupation, Telephone, Address, Facebook, Instagram, Twitter, Email FROM cuentastutores WHERE Code ='$Code'";
        $resultado = $conn->prepare($sql);
        $resultado->execute();
    
        $row = $resultado->fetch();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile 
        <?php 
            echo name($row);
        ?>
    </title>
</head>
<body>
        <h1 id="NameUsers">__BLACK MOON____TRAINEES__
        <?php 
        echo email($row);
        ?></h1>
        EDIT YOUR DATES
        <form action="../conects/storeT.php" method="POST" name="frm" id="formulario">
                
                    Code: <?php echo utf8_decode($row['Code']);?>
                    <br>
                    Name: <?php echo utf8_decode($row['LastName']);
                                echo ' ';
                                echo utf8_decode($row['Name']);
                    ?>
                    <br>
                    Ocupation: <?php echo utf8_decode($row['Ocupation']); ?>
                    <br>
                    Connection with: 
                    <br>
                    Telephone: <?php echo utf8_decode($row['Telephone']);?>
                    <br>
                    Addrress: <?php echo utf8_decode($row['Address']); ?>
                    <br>
                <p>Social Media</p>
                    Facebook: <?php echo utf8_decode($row['Facebook']); ?>
                <br>
                    Instagram: <?php echo utf8_decode($row['Instagram']); ?> 
                <br>
                    Twitter: <?php echo utf8_decode($row['Twitter']); ?>
                <br>
                <!--------->
                    Email: <?php echo utf8_decode($row['Email']);?> 
                <br>
                    Password: 
                <br>
                <label for="boton">
                    <button  class="button" type="submit" name="Edit">Edit</button>
                </label>
            <footer>
                <p id = "Deespedida">
                    Actividad: Conexión básica a Base de Datos
                </p><p>
                    Nombre: Anet Guadalupe Muñoz De Santiago
                </p>
            </footer>
       </form>


</body>
</html>