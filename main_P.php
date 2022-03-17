    <?php 
        include('conects/conect.php');
        include('nameP.php');

    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile <?php 
         echo name($row);
    ?>
    </title>
</head>
<body>
    <div class="View_Profile">
        <h1 id="NameUsers">__BLACK MOON____TRAINEES__
            <?php 
             echo email($row);
            ?>
        </h1>
        <br>
        <a href="Account/account_P.php">Edit Profile</a>
        <!-- <a herf="addactivite">Add Activite</a> -->
    </div>
    <ul>
        
    </ul>
</body>
</html>