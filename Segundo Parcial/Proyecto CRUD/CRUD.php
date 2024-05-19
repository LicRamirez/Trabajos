<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body{
            margin: 0;
            zoom: 0.9;
            min-height: 100vh;
            font-family: 'Poppins';
        }
        .result{
            max-width: 650px;
            max-height: 300px;
            background-color: #27ae60;
            color: white;
            padding: 2px;
            overflow: auto;
        }
        .result table.select{
            border-collapse: collapse;
            color: black;
            background-color: white;
            margin: 5px;
            width: 100%;
        }
        table.select td{
            padding: 4px;
        }
        main{
            display:  flex;
            background-color: #ffffff;
            padding: 20px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row-reverse;
            height: 70vh;
        }
        .form{
            max-width: 600px;
            margin-right: 20px;
            color: #2d2d2d;
        }
        .form-table
        {
            width: 100%;
        }
        .form-table td{
            width: 100%;
            padding: 5px;
        }
        input{
            border-radius: 5px;
        }
        header{
            background-color: #2c3e50;
            height: 80px;
        }
        header h1{
            color: white;
            margin: 0;
            top: 50%;
            margin-left: 20px;
            transform: translateY(50%);
            width: 50px;
        }
        header h1:hover{
            color: grey;
        }
        header a{
            text-decoration: none;
            position: absolute;
            width: 50px;
        }
        .btn-table
        {
            width: 100%;
        }
        .btn{
            width: 110px;
            background-color: #2c3e50;
            color: white;
        }
        .mjs{
            margin: 20px;
            text-align: center;
        }
        .content{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>

    <header><a href="main.html"><h1>Inicio</h1></a></header>

<div class="content">
    <main>
    <div class="result">
        <?php
            $mat="";$ape="";$nom="";$fnac="";$dir="";$tel="";$cor="";$tut="";
            if($_POST)
            {
                $mat=$_POST['txtMatricula'];
                $ape=$_POST['txtApellidos'];
                $nom=$_POST['txtNombre'];
                $fnac=$_POST['txtFechaNac'];
                $dir=$_POST['txtDireccion'];
                $tel=$_POST['txtTel'];
                $cor=$_POST['txtCorreo'];
                $tut=$_POST['txtTutor'];

                $conexion=mysqli_connect('localhost','root','','CRUD','3306');
                if(isset($_POST['btnClear']))
                {
                    $mat="";$ape="";$nom="";$fnac="";$dir="";$tel="";$cor="";$tut="";
                }
// ------------------ CREATE ----------------------------------------------------
                elseif(isset($_POST['btnCreate']))
                {
                    $verificadorDeCampos = array($mat,$ape,$nom,$fnac,$dir,$tel,$cor,$tut);
                    $verificador=true;
                    foreach($verificadorDeCampos as $i)
                    {
                        if(!$i)
                        {
                            echo '<h1 class="mjs">Es obligatorio llenar todos los campos</h1>';
                            $verificador=false;
                            break;
                        }
                    }
                    if($verificador){
                        $querySelect="SELECT * FROM Alumnos WHERE Matricula = '$mat'";
                        $queryInsert="INSERT INTO Alumnos VALUES('$mat','$ape','$nom','$fnac','$dir','$tel','$cor','$tut')";
                        $ejecucionSelect=mysqli_query($conexion,$querySelect);

                        $verificacion=mysqli_fetch_array($ejecucionSelect);
                        if($verificacion) echo '<h1 class="mjs">Matricula repetida, escriba otra</h1>';
                        else
                        {
                            mysqli_query($conexion,$queryInsert);
                            echo '<h1 class="mjs">Dato insertado con exito</h1>';
                        }
                    }

                }
// --------------- READ --------------------------------------------------------------------------
                elseif(isset($_POST['btnRead']))
                {
                    $Condiciones = array($mat,$ape,$nom,$fnac,$dir,$tel,$cor,$tut);
                    $ConRef= array("Matricula","Apellidos","Nombre","Fecha_nacimiento","Direccion","Telefono","Correo","`Padre/Tutor`");
                    $where=true;
                    $query="SELECT * FROM Alumnos";

                    $it=0;
                    foreach($Condiciones as $i)
                    {
                        if($i)
                        {
                            if($where)
                            {
                                $where=false;
                                $query.=" WHERE $ConRef[$it] LIKE '%$i%' ";
                            }
                            else $query.="AND $ConRef[$it] LIKE '%$i%s' ";
                        }
                        $it++;
                    }
                    
                    $query.=" ORDER BY Apellidos";
                    $ejecucion=mysqli_query($conexion,$query);

                    echo '<table border=2 class="select">';
                    echo "<tr>
                            <td>Matricula</td>
                            <td>Apellidos</td> 
                            <td>Nombre</td>
                            <td>Fecha de Nacimiento</td>
                            <td>Dirección</td>
                            <td>Teléfono</td>
                            <td>Correo</td>
                            <td>`Padre/Tutor`</td>
                        </tr>";
                    while($mostrar=mysqli_fetch_array($ejecucion))
                    {
                        echo "<tr>";
                            echo"<td>",$mostrar['Matricula'],"</td>";
                            echo"<td>",$mostrar['Apellidos'],"</td>";
                            echo"<td>",$mostrar['Nombre'],"</td>";
                            echo"<td>",$mostrar['Fecha_Nacimiento'],"</td>";
                            echo"<td>",$mostrar['Direccion'],"</td>";
                            echo"<td>",$mostrar['Telefono'],"</td>";
                            echo"<td>",$mostrar['Correo'],"</td>";
                            echo"<td>",$mostrar['Padre/Tutor'],"</td>";
                        echo"</tr>";
                    }
                    echo "</table>";
                }
// -------------- UPDATE -------------------------------------------------------
                elseif(isset($_POST['btnUpdate']))
                {
                    if($mat)
                    {
                        $Columnas = array($ape,$nom,$fnac,$dir,$tel,$cor,$tut);
                        $querySelect="SELECT * FROM Alumnos WHERE Matricula = '$mat'";
                        $mostrador=mysqli_fetch_array(mysqli_query($conexion,$querySelect));
                        $verificador=true;
                        foreach ($Columnas as $i) {
                            if($i == "")
                            {
                                $verificador=false;
                                break;
                            }
                        }

                        if($mostrador)
                        {
                            if(!$verificador)
                            {
                                $mat=$mostrador[0];
                                $ape=$mostrador[1];
                                $nom=$mostrador[2];
                                $fnac=$mostrador[3];
                                $dir=$mostrador[4];
                                $tel=$mostrador[5];
                                $cor=$mostrador[6];
                                $tut=$mostrador[7];
                            }
                            else
                            {
                                $query="UPDATE Alumnos SET Apellidos='$ape', Nombre='$nom', Fecha_nacimiento='$fnac', Direccion='$dir', Telefono='$tel', Correo='$cor', `Padre/Tutor`='$tut' WHERE Matricula='$mat'";
                                mysqli_query($conexion,$query);
                                echo '<h1 class="mjs">Actulizacion exitosa</h1>';
                            }
                        }
                        else
                        {
                            echo '<h1 class="mjs">No se encontró el alumno</h1>';
                        }
                        
                    }
                    else
                    {
                        echo '<h1 class="mjs">Introduzca una matricula</h1>';
                    }
                }
// ------------- DELETE -------------------------------------------------------
                elseif(isset($_POST['btnDelete']))
                {
                    $query="DELETE FROM Alumnos WHERE Matricula = '$mat'";
                    $querySelect="SELECT * FROM Alumnos WHERE Matricula = '$mat'";
                    $ejecucionSelect=mysqli_query($conexion,$querySelect);
                    if(!$mat)
                    {
                        echo '<h1 class="mjs">Introduzca una matricula</h1>';
                    }
                    else if(mysqli_fetch_array($ejecucionSelect))
                    {
                        mysqli_query($conexion,$query);
                        echo '<h1 class="mjs">Eliminación exitosa</h1>';
                    }
                    else
                    {
                        echo '<h1 class="mjs">No se encontró el alumno</h1>';
                    }
                }
                

                mysqli_close($conexion);
            }
        ?>
        </div>
<!-- -------- Formulario -----------------------------------------------  -->

        <div class="form">
        <form action="CRUD.php" method="post">
            <table class="form-table">
                <tr>
                    <td>Matricula</td>
                    <td><input type="text" name="txtMatricula" value="<?php echo $mat; ?>"></td>
                </tr>
                <tr>
                    <td>Apellidos</td>
                    <td><input type="text" name="txtApellidos" value="<?php echo $ape; ?>"></td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="txtNombre" value="<?php echo $nom; ?>" ></td>
                </tr>
                <tr>
                    <td>Fecha de Nacimiento</td>
                    <td><input type="text" placeholder="YYYY/MM/DD" name="txtFechaNac" value="<?php echo $fnac; ?>"></td>
                </tr>
                <tr>
                    <td>Dirección</td>
                    <td><input type="text" name="txtDireccion" value="<?php echo $dir; ?>"></td>
                </tr>
                <tr>
                    <td>Teléfono</td>
                    <td><input type="text" name="txtTel" value="<?php echo $tel; ?>"></td>
                </tr>
                <tr>
                    <td>Correo</td>
                    <td><input type="text" name="txtCorreo" value="<?php echo $cor; ?>"></td>
                </tr>
                <tr>
                    <td>Padre o Tutor</td>
                    <td><input type="text" name="txtTutor" value="<?php echo $tut; ?>"></td>
                </tr>
            </table>

            <table class="btn-table">
                <tr>
                    <td><input type="submit" value="Insertar" name="btnCreate" class="btn"></td>
                    <td><input type="submit" value="Leer" name="btnRead" class="btn"></td>
                    <td><input type="submit" value="Actualizar" name="btnUpdate" class="btn"></td>
                    <td><input type="submit" value="Borrar" name="btnDelete" class="btn"></td>
                    <td><input type="submit" value="Limpiar" name="btnClear" class="btn"></td>
                </tr>  
            </table>
        </form>
        
    </div>
    </main>

    <p>Para actualizar o borrar datos, inserte una matricula.</p>
</div>
</body>
</html>