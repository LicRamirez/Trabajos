<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7050. Cálculos condicionales</title>
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
            height: 670px;
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
    </style>

    <header>
        <a href="main.php">INICIO</a>
    </header>
    <div class="bgc">
     <div class="description">
        <h1>7050. Cálculos condicionales</h1>
        <p>Dado un número N, seguir en orden las siguientes
            operaciones:
        </p>
        <p>1.-Si el valor actual de N es par, divídelo entre 2. En caso contrario, súmale 1.</p>
        <p>2.-Si el valor actual de N
 tiene tres o más cifras, divídelo entre 100. Pero si tiene exactamente dos cifras, divídelo entre 10.</p>
        <p>3.-Si el valor actual de N
 es un múltiplo de tres, réstale uno.</p>
        <h2>Límites</h2>
        <p>1 ≤ N ≤ 1000.</p>
     </div>
    </div>

    <div class="content">
        <div class="inputs">
            <h1>Entrada</h1>
    <form action="problem 1.php" method="post">
        <h4>N</h4><input type="text" name="numero">
        <input type="submit" name="Enviar">
        <input type="submit" name="rand" value="Random">
        <h3>Casos de OmegaUp</h3>
        <input type="submit" name="case1" value="Caso 1">
    </form>
    </div>

        
    <div class="ans">
        <h1>Salida</h1>
    <?php
        function f($n)
        {
            $firstn=$n;
            $cnt=0;
            if($n%2 == 0)
            {
                $n/=2;
                $cnt++;
            } 
            else
            {
                $n++;
                $cnt++;
            } 
            if($n>=100)
            {
                $n/=100;
                $cnt++;
            } 
            elseif($n>=10 && $n<100)
            {
                $n/=10;
                $cnt++;
            } 
            if($n%3 == 0)
            {
                $n--;
                $cnt++;
            } 
            echo $n," ",$cnt;
            echo "<h3>Variable</h3>";
            echo "<pre>N: ",$firstn,"</pre>";
        }
        if(isset($_POST['Enviar']))
        {
            if($_POST['numero'] == '')
            {
                echo "<i class=\"fa-solid fa-circle-exclamation\"> Ingrese un numero</i>";
                echo " <i class=\"fa-solid fa-circle-exclamation\"></i>";
            }
            else{
                $n=$_POST['numero'];
                f($n);
            }
            
        }
        elseif(isset($_POST['rand']))
        {
            $n=rand(1,1000);
            f($n);
        }
        elseif(isset($_POST['case1']))
        {
            $n=7;
            f($n);
        }
        
    ?>
        </div>
    </div>

    <div class="link">
        <a href="https://omegaup.com/arena/problem/Calculos-condicionales">Link al problema</a>
    </div>

    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>

</body>
</html>