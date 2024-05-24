<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
<script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>

</head>
<body>
    <style>
        main{
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            text-align: center;
            height: 70vh;
            color: white;
            font-size: 100px;
        }
    </style>

<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body{
            margin: 0;
            font-family: 'Poppins';
            margin: 0;
            background-color: slategrey;
        }
        header i{
            margin: 0;
            color: white;
            font-weight: 800;
            font-size: 70px;
        }
        a{
            text-decoration: none;
            height: 120px; 
            width: 120px;
        }
        header{
            height: 120px; 
            background: black;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 120px;
            border-radius: 0 0 50% 0;
        }
</style>
    <a href="main.html">
    <header>
        <i class="fa-solid fa-arrow-left"></i>
    </header>
    </a>
    
<main>
    <?php
    if($_POST)
    {
        $login=$_POST['txtlogin'];
        $pass=$_POST['txtpass'];
        // CONECTARSE A UN SERVIDOR Y UNA BASE DE DATOS
        $conexion=mysqli_connect('localhost','root','','Sistemas','3306');

        // REALIZAR LA ACCION (INSERT,UPDATE,ETC)
        $consulta="SELECT * FROM usuarios WHERE Login = '$login' AND PassWord = sha1('$pass')";
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
</main>
</body>
</html>
