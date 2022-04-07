<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El camino glorioso</title>
</head>
<body>
    <h2 class='text-center'>El camino glorioso</h2>
<form action="#" method="post">
    <label for="">Peso en libras del vehiculo</label>
    <input class="form-control" type="text" name="peso">

    <input class="btn btn-primary" type="submit" name="calcular" value="calcular">
</form>

</body>
<?php
    function strStart($haystack, $needle ) {
    return strpos( $haystack , $needle ) === 0;
    }
	if(isset($_POST['calcular'])){
        
		$peso =$_POST["peso"];
		$pesokg=floatval($peso)/2.205;

        if($pesokg<=250)
        {
            echo "<h3 class='text-center'>El Vehiculo Tiene Permiso Para Pasar.</h3>";
        }
        else
        {
            echo "<h3 class='text-center'>El Vehiculo NO Tiene Permiso Para Pasar.</h3>";
        }

    }
	
	
?>