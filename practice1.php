<?php
    /*PHP Connection DB (CleverCloud)*/
    $host = "bncd9hieeaio2t656g7z-mysql.services.clever-cloud.com";
    $username = "uc0dq5vf0e9yybrt";
    $password = "VTL0fzwRpWhEIfWe75nI";
    $database = "bncd9hieeaio2t656g7z";
    $enlace = mysqli_connect($host, $username, $password, $database);

    if (!$enlace) {
        echo "Error En La Conexion";
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Work PHP Practice</title>
</head>
<body>
    <H2 class='text-center'>Gestion De Usuarios En Discoteca</H2>
<form action="#" method="post">
    <label for="">Nombre</label>
    <input class="form-control" type="text" name="nombre">
    <label for="">Edad</label>
    <input class="form-control" type="text" name="edad">
    <label for="">Tipo de Documento</label>
 <select class="form-select form-select-sm" name="tipo_documento">
  <option value="CC">CC</option>
  <option value="TO">TI</option>
</select>
    <label for="">Número de Documento</label>
    <input class="form-control" type="text" name="numero_documento">
    <label for="">Dinero Disponible</label>
    <input class="form-control" type="text"name="dinero_disponible">
    <input class="btn btn-primary d-flex justify-content-between" type="submit" class="btn" name="registrarse" value="Registrarse">
</form>
<?php

    function strstarts ( $haystack, $needle ) {
        return strpos( $haystack , $needle ) === 0;
    }
    echo"<h2 class='text-center'>Usuarios Registrados</h2>";
	if(isset($_POST['registrarse'])){
        
		$nombre =$_POST["nombre"];
		$edad=$_POST["edad"];
		$tipo_documento=$_POST["tipo_documento"];
		$numero_documento=$_POST["numero_documento"];
		$dinero_disponible=$_POST["dinero_disponible"];

        if($edad>21 and strstarts($numero_documento, '1094')and $dinero_disponible>=25000 and $tipo_documento=='CC' )
        {
            $accesoN = "Tiene Permiso";
            $insertData = "INSERT INTO users VALUES('$nombre', $edad, '$tipo_documento',$numero_documento, $dinero_disponible, '$accesoN')";

            $executeInsertDB = mysqli_query($enlace, $insertData);
            if(!$executeInsertDB) {
                echo "Error Al Insertar, Rellene Todos Los Campos.";
            }

        }
        else
        {
            $accesoS = "No Tiene Permiso";
            $insertDataS = "INSERT INTO users VALUES('$nombre', $edad, '$tipo_documento',$numero_documento, $dinero_disponible, '$accesoS')";

            $executeInsertDBS = mysqli_query($enlace, $insertDataS);
            if(!$executeInsertDBS) {
                echo "Error Al Insertar, Rellene Todos Los Campos.";
            }
        }

    }
?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Tipo De Documento</th>
                <th scope="col">Numero Documento</th>
                <th scope="col">Dinero</th>
                <th scope="col">Acceso</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM users";
                $result = mysqli_query($enlace, $sql);
                $array = mysqli_fetch_array($result);

                foreach ($result as $row){ ?>
                    <tr>
                        <td ><?php echo $row['nombre'] ?></td>
                        <td ><?php echo $row['edad'] ?></td>
                        <td ><?php echo $row['tipoD'] ?></td>
                        <td ><?php echo $row['numeroD'] ?></td>
                        <td ><?php echo $row['dinero'] ?></td>
                        <td ><?php echo $row['acceso'] ?></td>
                    </tr>
                }
        </tbody>
        <?php 
        
            }

        ?>
    </table>
</body>
</html>