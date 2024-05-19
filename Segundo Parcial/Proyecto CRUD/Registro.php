<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body{
            margin: 0; 
            font-family: 'Poppins';
        }
        main{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 80vh;
        }
        form{
            top: 50%;
        }
        header{
            background-color: #2c3e50;
            height: 80px;
        }
        header a{
            text-decoration: none;
            position: realtive;
            width: 50px;
        }
        header h1{
            color: white;
            margin: 0;
            top: 50%;
            margin-left: 20px;
            transform: translateY(50%);
        }
        header h1:hover{
            color: grey;
        }
        table td{
            padding: 10px;
            font-size: 30px;
        }
        input{
            border-radius: 5px;
            font-size: 30px;
        }
        .btn{
            width: 100%;
            background-color: #2c3e50;
            color: white;
        }
    </style>

    <header><a href="main.html"><h1>Inicio</h1></a></header>
    <main>
    <form action="Registro.php" method="post">
    <table>
        <tr>
            <td>Usuario</td>
            <td><input type="text" name="User" ></td>
        </tr>
        <tr>
            <td>Contraseña</td>
            <td><input type="text" name="PassWord"></td>
        </tr>
        <tr>
            <td>Confirma tu Contraseña</td>
            <td><input type="text" name="PassWordCon"></td>
        </tr>
        <tr>
            <td colspan=2><input type="submit" value="Registrarse" class="btn"></td>
        </tr>
    </table>
    </form>
    <?php
        if(isset($_POST['User'],$_POST['PassWord'],$_POST['PassWordCon']))
        {
            $User=$_POST['User'];
            $PassWord=$_POST['PassWord'];
            $PassWordcon=$_POST['PassWordCon'];
            if(!$User || !$PassWord || !$PassWordcon)
            {
                echo "Es obligatorio llenar todos los campos";
                exit;
            }
            
            if($PassWord != $PassWordcon)
            {
                echo "Las contraseñas no coinciden";
                exit;
            }

            $conexion=mysqli_connect('localhost','root','','CRUD','3306');
            $consulta="SELECT * FROM Usuarios WHERE Nombre = '$User'";
            $resultado=mysqli_query($conexion,$consulta);
            $existencia=mysqli_fetch_array($resultado);

            if($existencia) echo "Esa cuenta ya existe";
            else
            {
                $insert="INSERT INTO Usuarios(Nombre,Contraseña) VALUES('$User',sha1('$PassWord'))";
                $resultado=mysqli_query($conexion,$insert);
                echo "Cuenta creada";
            }
            mysqli_close($conexion);
        }
    ?>
    </main>
    
</body>
</html>