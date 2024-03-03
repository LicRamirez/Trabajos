<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18710. Formulota</title>
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
            height: 660px;
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
        .link{
            padding: 50px;
            background-color: rgb(202, 63, 63);
        }
        .link a{
            color: white;
            font-weight: 1000;
            font-size: 20px;
        }
        .inputs h4{
            display: inline; 
            padding-right: 20px;
        }
        .sub{
            margin-top: 30px;
            position: relative;
            right: -50px;
        }
    </style>

    <header>
        <a href="main.php">INICIO</a>
    </header>
    <div class="bgc">
    <div class="description">
        <h1>18710. Formulota</h1>
        <p>Con las variables x,y,z, resolver la siguiente función:</p>
        <img src="img/fxyz.png" alt="NO JALÓ LOL" width="500" hight="400">
        <h2>Límites</h2>
        <p>-100 ≤ x,y,z ≤ 100.</p>
    </div>
    </div>

    <div class="content">
        
    <div class="inputs">
        <h1>Entrada</h1>
    <form action="problem 2.php" method="post">
        <h4>x</h4><input type="text" name="x"><br>
        <h4>y</h4><input type="text" name="y"><br>
        <h4>z</h4><input type="text" name="z"><br>
        <input type="submit" name="Enviar" class="sub">
        <input type="submit" name="rand" value="Random" class="sub">
    </form>

    <form action="problem 2.php" method="post">
        <h3>Casos de OmegaUp</h3>
        <input type="submit" value="Caso 1" name="case1">
        <input type="submit" value="Caso 2" name="case2">
        <input type="submit" value="Caso 3" name="case3">
    </form>
    </div>

    <div class="ans">
        <h1>Salida</h1>
    <?php
        function f($x,$y,$z){
                $div1=($x+$y)/(2*$x);
                $div2=(pow($x,3)+pow($y,3))/(pow($x,2)+pow($y,2));
                $div3=($div1+$div2)/(pow($x,2)+pow($y,2)+pow($z,2));
                echo round($div3,6);
                echo "<h3>Variables</h3>";
                echo "<pre>x: ",$x,"  y: ",$y,"  z: ",$z,"</pre>";
        }
        if(isset($_POST['Enviar']))
        {
            if($_POST['x'] == '' || $_POST['y'] == '' || $_POST['z'] == '')
            {
                echo "<i class=\"fa-solid fa-circle-exclamation\"> Llene todos los espacios</i>";
                echo " <i class=\"fa-solid fa-circle-exclamation\"></i>";
            }
            else{
                $x=$_POST['x'];
                $y=$_POST['y'];
                $z=$_POST['z'];
                f($x,$y,$z);
                
            }
            
        }
        elseif(isset($_POST['rand']))
        {
                $x=rand(-100,100);
                $y=rand(-100,100);
                $z=rand(-100,100);
                f($x,$y,$z);
        }
        elseif(isset($_POST['case1']))
        {
                $x=1;
                $y=2;
                $z=3;
                f($x,$y,$z);
        }
        elseif(isset($_POST['case2']))
        {
                $x=4;
                $y=5;
                $z=6;
                f($x,$y,$z);
        }
        elseif(isset($_POST['case3']))
        {
                $x=7;
                $y=8;
                $z=9;
                f($x,$y,$z);
        }
        
    ?>
    </div>
    </div>

    <div class="link">
        <a href="https://omegaup.com/arena/problem/Formulota">Link al problema</a>
    </div>

    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>

</body>
</html>