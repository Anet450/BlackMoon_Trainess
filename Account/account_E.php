    <?php 
        include('../conects/conect.php');
        include('../nameE.php');
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
    Cuenta Entrenador

</body>
</html>