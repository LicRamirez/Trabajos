<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3991. Adquisición de Letras</title>
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        html{
            font-family: 'Poppins';
        }
        a{
            text-decoration: none;
        }
        body{
            margin: 0;
        }
        header{
            background-color: rgb(25, 89, 252);
            padding: 20px;
        }
        header a{
            color: white;
            font-size: 30px;
            font-weight: 1000;
            padding: 0;
            margin: 0;
            transition: all 0.4s ease;
        }
        header a:hover{
            color: black;
        }
        
        .bgc{
            height: 550px;
            background-color: rgb(89, 130, 236);
            text-align: center;
        }
        .description{
            color: white;
            padding: 100px;
            font-size: 21px;
            text-shadow: 4px 0 2px black;
        }
        .content{
            margin: 30px;
            padding: 70px;
            margin-bottom: 100px;
            display: grid;
            grid-template-columns: repeat(2,3fr);
        }
        .ans{
            border: black 3px solid;
            padding-left: 30px;
            padding: 10px;
        }
        @keyframes warning{
            from{opacity: 0;}
            to{opacity: 1;}
        }
        i{
            color: red;
            animation-name: warning;
            animation-duration: 1s;
            animation-iteration-count: infinite;
        }
        .link{
            padding: 50px;
            background-color: rgb(25, 89, 252);
        }
        .link a{
            color: white;
            font-weight: 1000;
            font-size: 20px;
        }
        .link a:hover{
            color: black;
        }
        .inputs h4{
            display: inline; 
            padding-right: 20px;
        }
    </style>

    <header><a href="main.php">Inicio</a></header>
    <div class="bgc">
        <div class="description">
            <h1>Adquisición de Letras</h1>
            <p>En el ITAM, a los alumnos que estudian
                ingeniería les gusta comer letras. A Miguel
                le encanta la letra "d" y quiere saber cuántas
                se va a poder comer de un paquete que la escuela
                proporciona a todos sus alumnos. El paquete que
                la escuela entrega es una palabra con letras
                minúsculas del alfabeto.</p>
        </div>
    </div>

    <div class="content">
        <div class="inputs">
            <h1>Entrada</h1>
    <form action="problem 3.php" method="post">
        <input type="text" name="txt1">
        <input type="submit" name="sub" value="Ejecutar">
    </form>
    </div>
    <div class="ans">
        <h1>Salida</h1>
    <?php
        if($_POST)
        {
            $s=$_POST['txt1'];
            $r=0;
            for($i=0;$i<strlen($s);$i++)
            {
                if($s[$i] == 'd') $r++;;
            }
            echo $r;
        }
    ?>
    </div>
    </div>

    <div class="link">
        <a href="https://omegaup.com/arena/problem/Adquisicion-de-Letras/#problems">Link al problema</a>
    </div>

    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
</body>
</html>