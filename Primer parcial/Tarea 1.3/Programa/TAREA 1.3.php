<html>
<head>
    <title>TAREA 1.3</title>
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap');
        html{
            font-family:"Protest Riot", sans-serif;
        }
        body{
            margin: 0;
            padding: 0;
        }
        .cuerpo{
            letter-spacing: 1px;
            margin: 20px;
            
        }
        table{
            text-align: center;
            border-collapse: collapse;
            margin-left: 30px;
            margin-top: 30px;
        }
        td{
            padding: 10px;
        }
        .encabezado{
            background-color: darkblue;
            color: white;
            background-attachment:local;
        }
        a{
            text-decoration: none;

        }
        header{
            background-color: rgb(35, 96, 188);
            padding: 20px;
            margin: 0;
        }
        h1{
            padding: 0;
            margin: 0;
            color: white;
        }
        img{
            float: left;
        }
        .omega{
            padding: 10px 20px 20px ;
            margin: 1;
        }
        p{
            margin: 10px;
        }
        .center{
            display: flex;
            font-size: 50px;
            max-height: 200px;
            justify-content: center;
        }
        .text{
            justify-content: center;
            display: flex;
            margin: 100px;
            margin-left: 200px;
            flex-direction: column;
        }
        h3{
            margin-left: 30px;
        }
    </style>
    <?php
        $materias=5;
        $totalm=$materias*1600;
        $promedio=9.6;
        if($promedio<9)
        {
            $total=$totalm+$totalm*0.16;
        }
        else{
            $total=$totalm-$totalm*0.30;
        }
    ?>

    <header>
        <h1>Colegiatura (Condicionales)</h1>
    </header>
    
    <h3>Descripción</h3>
    
    <div class="cuerpo">
    <p>Ejercicio de condicionales (if/else):
        Si la variable "promedio" es mayor
        o igual a 9, se hace un descuento del 
        30%, de lo contrario, se paga la 
        colegiatura completa más el IVA (16%).
    </p>
    <div class="center">
    <table border="3">
        <tr>
            <th class="encabezado" colspan="2">Variables</th>
        </tr>
        <tr>
            <td>$materias</td>
            <td>$promedio</td>
        </tr>
        <tr>
            <td><?php echo $materias?></td>
            <td><?php echo $promedio?></td>
        </tr>
    </table>
    <div class="text">
         <span class="1">Resultado</span>
         <span class="2"><?php echo "$",$total?></span>
    </div>
    </div>
    <br><br>
    <img src="phpimagenes/questionmark.jpg" alt="questionmark" width="100" lenght="100">
    <pre>9.6 es mayor que 9, el total por las meterias es
$total=$materias(5)*1600=8000; como no se cumplió la condición
($promedio&lt;9), significa que $promedio fue mayor
entonces se ejecuta la operación para el descuento
($total-=$total*0.3)
    </pre>
        <div class="omega">
            <img src="phpimagenes/omega.png" alt="OmegaUP" width="50" lenght="50">
            <ul><a href="https://omegaup.com/arena/problem/Colegiatura/">5630. Colegiatura OmegaUP</a></ul>
        </div>
    </div>
</body>
</html>
