<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7093. El lado más corto</title>
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
            background-color: rgb(185, 25, 44);
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
            height: 510px;
            background-color: rgb(202, 63, 63);
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
        .inputs h4{
            display: inline; 
            padding-right: 20px;
        }
        .link{
            padding: 50px;
            background-color: rgb(202, 63, 63);
        }
        .link a{
            color: white;
            font-weight: 1000;
            font-size: 20px;
        }
        .sub{
            margin-top: 30px;
        }
    </style>
    <header>
        <a href="main.php">INICIO</a>
    </header>
    <div class="bgc">
    <div class="description">
        <h1>7093. El lado más corto</h1>
        <p>Dadas las coordenadas de los vértices de un cuadrilátero, calcule la longitud de su lado más corto.</p>
        <h2>Límites</h2>
        <p>0 ≤ Xi,Yi ≤ 100</p>
    </div>
    </div>
    <div class="content">
        <div class="inputs">
            <h1>Entrada</h1>
    <form action="problem 3.php" method="post">
        <h4>x1</h4><input type="text" name="x1">
        <h4>y1</h4><input type="text" name="y1"><br>

        <h4>x2</h4><input type="text" name="x2">
        <h4>y2</h4><input type="text" name="y2"><br>

        <h4>x3</h4><input type="text" name="x3">
        <h4>y3</h4><input type="text" name="y3"><br>

        <h4>x4</h4><input type="text" name="x4">
        <h4>y4</h4><input type="text" name="y4"><br>
        <input type="submit" name="Enviar" value="Ejecutar" class="sub">
        <input type="submit" name="rand" value="Random" class="sub">
        <h3>Casos de OmegaUp</h3>
        <input type="submit" name="case1" value="Caso 1">
    </form>
    </div>
    
    <div class="ans">
        <h1>Salida</h1>
    <?php
        function d($x,$y,$x1,$y1)
        {
            return sqrt((pow($x-$x1,2))+(pow($y-$y1,2)));
        }
        function f($x1,$y1,$x2,$y2,$x3,$y3,$x4,$y4)
        {
            $d1=d($x1,$y1,$x2,$y2);
            $d2=d($x3,$y3,$x4,$y4);
            $d3=d($x1,$y1,$x4,$y4);
            $d4=d($x2,$y2,$x3,$y3);
            $answ=min($d2,min($d3,min($d4,$d1)));
            echo $answ;
            echo "<h3>Variables</h3>";
            echo "<pre># x1:  ",$x1,"  y1:  ",$y1,"<br># x2:  ",$x2,"  y2:  ",$y2,
            "<br># x3:  ",$x3,"  y3:  ",$y3,"<br># x4:  ",$x4,"  y4:  ",$y4,"<br></pre>";
        }
        if(isset($_POST['case1']))
        {
            $x1=10.1;
            $y1=10.2;

            $x2=20.2;
            $y2=10.3;

            $x3=22.3;
            $y3=4.1;

            $x4=7.5;
            $y4=0.9;
            f($x1,$y1,$x2,$y2,$x3,$y3,$x4,$y4);
            
        }
        elseif(isset($_POST['Enviar']))
        {
            if($_POST['x1'] == '' || $_POST['y1'] == '' ||
            $_POST['x2'] == '' || $_POST['y2'] == '' ||
            $_POST['x3'] == '' || $_POST['y3'] == '' ||
            $_POST['x4'] == '' ||$_POST['y4'] == '')
            {
                echo "<i class=\"fa-solid fa-circle-exclamation\"> Llene todos los espacios</i>";
                echo " <i class=\"fa-solid fa-circle-exclamation\"></i>";
            }
            else{
            $x1=$_POST['x1'];
            $y1=$_POST['y1'];

            $x2=$_POST['x2'];
            $y2=$_POST['y2'];

            $x3=$_POST['x3'];
            $y3=$_POST['y3'];

            $x4=$_POST['x4'];
            $y4=$_POST['y4'];
            f($x1,$y1,$x2,$y2,$x3,$y3,$x4,$y4);
            }
        }
        elseif(isset($_POST['rand']))
        {
            $x1=rand(1,100);
            $y1=rand(1,100);

            $x2=rand(1,100);
            $y2=rand(1,100);

            $x3=rand(1,100);
            $y3=rand(1,100);

            $x4=rand(1,100);
            $y4=rand(1,100);
            f($x1,$y1,$x2,$y2,$x3,$y3,$x4,$y4);
        }
        
    ?>
    </div>
    </div>

    <div class="link">
        <a href="https://omegaup.com/arena/problem/El-lado-mas-corto#problems">Link al problema</a>
    </div>
        <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
</body>
</html>