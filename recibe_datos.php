


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <?php require_once "clientes.php"?>
    <br>
</head>

<body>
    <?php
    $codigo = $_POST['codigo'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST["apellidos"];
    $Dui = $_POST["Dui"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"]
    
    ?>

    <div class="container-fluid">
        <table class="table table-hover" border="1">
            <tbody>
                <tr>
                    <th>Codigo</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Dui</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                </tr>
                <tr>
                    <td><?php echo $codigo?></td>
                    <td><?php echo $nombres?></td>
                    <td><?php echo $apellidos?></td>
                    <td><?php echo $Dui ?></td>
                    <td><?php echo $direccion?></td>
                    <td><?php echo $telefono?></td>
                </tr>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>