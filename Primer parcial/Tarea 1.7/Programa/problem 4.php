<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11338. Escalera de asteriscos</title>
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
            text-shadow: 4px 0 2px black;
            font-size: 21px;
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
            padding-right: 10px;
        }
        
    </style>
    <header>
        <a href="main.php">INICIO</a>
    </header>
    <div class="bgc">
    <div class="description">
        <h1>11338. Escalera de asteriscos</h1>
        <p>Dado un numero N, generar una escalera de longitud y altura N.</p>
        <h2>Límites</h2>
        <p>1 ≤ N ≤ 15.</p>
    </div>
    </div>
    <div class="content">
        <div class="inputs">
        <h1>Entrada</h1>
    <form action="problem 4.php" method="post">
        <h4>N</h4><input type="text" name="cantidad" class="text">
        <input type="submit" name="Enviar" value="Ejecutar">
        <input type="submit" value="Random" name="rand">
    </form>

    <form action="problem 4.php" method="post">
        <h3>Casos de OmegaUp</h3>
        <input type="submit" value="Caso 1" name="case1">
        <input type="submit" value="Caso 2" name="case2">
        <input type="submit" value="Caso 3" name="case3">
        <input type="submit" value="Caso 4" name="case4">
    </form>

        </div>
    
    <div class="ans">
        <h1>Salida</h1>
        <span>
    <?php
        #echo var_dump($_POST);
        function f($n)
        {
            for($i=1;$i<=$n;$i++)
            {
                for($j=1;$j<=$i;$j++)
                echo "#";
                echo "<br>";
            }
            echo "<h3>Variable</h3>";
            echo "<pre>N: ",$n,"</pre>";
        }
        if(isset($_POST['case1']))
        {
            $n=2;
            f($n);
        }
        if(isset($_POST['case2']))
        {
            $n=5;
            f($n);
        }
        if(isset($_POST['case3']))
        {
            $n=1;
            f($n);
        }
        if(isset($_POST['case4']))
        {
            $n=3;
            f($n);
        }
        elseif(isset($_POST['rand']))
        {
            $n=rand(1,15);
            f($n);
        }
        elseif(isset($_POST['Enviar']))
        {
            if($_POST['cantidad'] == '')
            {
                echo "<i class=\"fa-solid fa-circle-exclamation\"> Ingrese un numero</i>";
                echo " <i class=\"fa-solid fa-circle-exclamation\"></i>";
            }
            else{
                $n=$_POST['cantidad'];
                f($n);
            }
            
        }
        
    ?>
    </span>
    </div>

    </div>

    <div class="link">
        <a href="https://omegaup.com/arena/problem/Escalera-de-asteriscos/">Link al problema</a>
    </div>
    
    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
</body>
</html>