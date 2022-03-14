    <?php 
        include('../conects/conect.php');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Tutor</title>
</head>
<body>
        <h1>__BLACK MOON____TRAINESS__ </h1>
        <h2>ENTER NEW PROXIDOLS</h2>
        <h3>LOGING</h3>
       <!--<form action="store.php" method="POST" name="frm" id="formulario">-->
                <label id="cuestion" for="code">
                    Code:
                <input class="cuestion" type="text" name="Code" required>
                </label><br>
                <label id="cuestion" for="Name">
                    Name: 
                    <input class="date" type="text" name="Name" required>
                </label><br>

                <label id="cuestion" for="LastName">
                    Last name: 
                    <input class="date" type="text" name="LastName" required>
                </label><br>
                
                <label id="cuestion" for="Ocupation">
                    Ocupation: 
                    <input class="date" type="text" name="Ocupation" required>
                </label><br>
                
                <label id="cuestion" for="Group">
                    Group: 
                    <input class="date" type="text" name="Ocupation" required>
                </label><br>

                <label id="cuestion" for="Conect">
                    Connection with: 
                    <input class="date" type="text" name="Conect" required>
                </label><br>
                
                <label id="cuestion" for="Telephone">
                    Telephone: 
                    <input class="date" type="text" name="Telephone" required>
                </label><br>
                
                <label id="cuestion" for="Address">
                    Addrress: 
                    <select  class="date"  name="Adrres">
                        <option  class="date"  value="BM 12 moons">BM 12 moons</option>
                        <option  class="date" value="BM Saturn" selected>BM Saturn</option>
                        <option class="date"  value="BM Constellation" selected>BM Constellation</option>
                        <option  class="date"  value="BM Building" selected>BM Building</option>
                        <option class="date" value="Private">Private</option>
                    </select>
                </label><br>
                
                <label id="cuestion" for="Facebook">
                    Facebook: 
                    <input class="date" type="text" name="Facebook">
                </label><br>
                
                <label id="cuestion" for="Instagram">
                    Instagram: 
                    <input class="date" type="text" name="Instagram">
                </label><br>
                
                <label id="cuestion" for="Twitter">
                    Twitter: 
                    <input class="date" type="text" name="Twitter" required>
                </label><br>
                
                <label id="cuestion" for="Age">
                    Age:
                    <input class="datos" type="numeric" name="Edad" required>
                </label><br>
                
                <label id="cuestion" for="Email">
                    Email: 
                    <input class="date" type="email" name="Email" required>
                </label><br>
                <label id="cuestion" for="Password">
                    Password:
                    <input id="cuestion" type="password" name="Password" required>
                </label><br>
                <label for="boton">
                    <button  class="button" type="submit">Loging</button>
                </label>
            <footer>
                <p id = "Deespedida">
                    Actividad: Conexión básica a Base de Datos
                </p><p>
                    Nombre: Anet Guadalupe Muñoz De Santiago
                </p>
            </footer>
       <!--</form> -->
</body>
</html>