    <?php 
        include('../conects/conect.php');
        include('../name.php');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil 
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
        <h2>ENTER NEW PROXIDOLS</h2>
        <h3>LOGING</h3>
       <form action="../conects/storeP.php" method="POST" name="frm" id="formulario">
                <label id="cuestion" for="Code">
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
                    <input class="date" type="text" name="Group" required>
                </label><br>

                <label id="cuestion" for="Conect">
                    Connection with: 
                    <input class="date" type="text" name="Conect" required>
                </label><br>
                
                <label id="cuestion" for="Telephone">
                    Telephone: 
                    <input class="date" type="numeric" name="Telephone" required>
                </label><br>
                
                <label id="cuestion" for="Address">
                    Address: 
                    <select  class="date"  name="Address">
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
                    <input class="datos" type="numeric" name="Age" required>
                </label><br>

                <label id="cuestion" for="Height">
                    Height:
                    <input class="datos" type="numeric" name="Height" required>
                </label><br>

                <label id="cuestion" for="Weight">
                    Weight:
                    <input class="datos" type="numeric" name="Weight" required>
                </label><br>

                <label>
                    Gender: 
                    <input  class="date" type="radio" id="Hombre" name="Gender" value="Man" checked>
                    <label for="Man">Man</label>
                    <input  class="datos" type="radio" id="Mujer" name="Gender" value="Woman">
                    <label for="Womanr">Woman</label>
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
       </form>
</body>
</html>