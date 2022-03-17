    <?php 
        include('conects/conect.php');
        include('name.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile <?php 
        echo name($row);
    ?></title>
</head>
<body>
    <div class="View_Profile">
    <h1 id="NameUsers">__BLACK MOON____TRAINEES__
    <?php 
    echo email($row);
    ?></h1>
    <br>
    <a href="Account/account_T.php">Ussers</a>
    </div>
    <ul>
        <li>
        <a href="Logins/logingProxIdos.php">Add Profile Ussers: ProxIdols</a>
        </li>
        <li>
        <a href="Logins/logingCoach.php">Add Profile Ussers: Coach</a>
        </li>
        <li>
        <a href="Logins/logingCEO_A.php">Add Profike Ussers: Tutor</a>
        </li>
    </ul>
    <br>
    <a href="SingIng/close.php">Close</a>
</body>
</html>