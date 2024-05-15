<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            text-align: center;
            height: 100vh;
            background-color: slategrey;
            color: white;
            font-size: 100px;
        }
    </style>
    <?php
    if($_POST)
    {
        $login=$_POST['txtlogin'];
        $pass=$_POST['txtpass'];
        // CONECTARSE A UN SERVIDOR Y UNA BASE DE DATOS
        $conexion=mysqli_connect('localhost','root','','sistema','3306');

        // REALIZAR LA ACCION (INSERT,UPDATE,ETC)
        $consulta="SELECT * FROM usuarios WHERE login = '$login' AND password = sha1('$pass')";
        $resultado=mysqli_query($conexion,$consulta);
        $mostrar=mysqli_fetch_array($resultado);
        if($mostrar)
        {
            echo "¡Entraste!<br>";
        }
        else
        {
            echo "¡Entrada Rechazada!<br>";
        }
        // CERRAR LA CONEXION
        mysqli_close($conexion);
   
        echo "Proceso terminado";
    }
   
?>

</body>
</html>
