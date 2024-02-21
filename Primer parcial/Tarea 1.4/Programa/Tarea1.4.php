<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 1.4</title>
</head>
<body>
    <style>
        html{
            background-color: rgb(233, 233, 233);
        }
        body{
            margin: 60px;
        }
        h1{
            text-align: center;
            background-color: orange;
            padding: 40px;
            color: white;
            border-radius: 80px;
        }
        img{
            border: orange 10px dotted;
        }
        .content{
            padding: 50px;
            display: flex;
            justify-content: space-between;
        }
        .content span{
            font-size:35px;
        }
        th{
            text-align: center;
            border-collapse: collapse;
            background-color: orange;
            color: white;
            padding: 10px;
        }
        td{
            border: blue 5px dotted;
            padding: 10px;
        }
        table{
            background-color: white;
            border: blue 5px solid;
            width: 200;
            text-align: center;
            size: 50px;
            padding: 5px;
        }
        .res th{
            background-color: yellow;
        }
    </style>

    <?php
        $num1=7;
        $num2=2;
        $res=0;
        if($num1==7) $res++;
        if($num2==7) $res++;
        
    ?>

    <?php
        $n1m3=11;
        $n2m3=11;
        $n3m3=11;
        $res2=$n1m3;
        if($res2<$n2m3) $res2=$n2m3;
        if($res2<$n3m3) $res2=$n3m3;
    ?>

    <?php
        $day=20;
        $mouth=3;
        $res3="no existe la fecha";
        switch($mouth)
        {
            case 12: if($day< 32 and $day>20) $res3="Winter";break;
            case 1: if($day < 32) $res3="Winter";break;
            case 2: if($day < 29) $res3="Winter";break;
            case 3: if($day < 21) $res3="Winter";
            case 3: if($day > 21 and $day < 32) $res3="Spring";break;
            case 4: if($day < 31) $res3="Spring";break;
            case 5: if($day < 32) $res3="Spring";break;
            case 6: if($day < 22) $res3="Spring";
            case 6: if($day > 21 and $day < 31) $res3="Summer"; break;
            case 7: if($day < 32) $res3="Summer"; break;
            case 8: if($day < 32) $res3="Summer"; break;
            case 9: if($day < 24) $res3="Summer"; 
            case 9: if($day > 22 and $day < 31) $res3="Fall"; break;
            case 10: if($day < 32) $res3="Fall"; break;
            case 11: if($day < 31) $res3="Fall"; break;
        }
    ?>

    <h1>7294. ¿Cuántos valen 7?</h1>
    <div class="content">
        <a href="https://omegaup.com/arena/problem/Cuantos-valen-7/?authuser=0"><img src="img/omegaupsiete.png" width="500" height="250"></a>
        <span>
            <table>
                    <tr>
                        <th colspan=2>Varibles</th>
                    </tr>
                    <tr>
                        <td>$Numero 1</td>
                        <td>$Numero 2</td>
                    </tr>
                    <tr>
                        <td><?php echo $num1?></td>
                        <td><?php echo $num2?></td>
                    </tr>
                        <div class="res">
                            <tr>
                             <th colspan=2><?php echo "Resultado: ",$res;?></th>
                            </tr>
                        </div>
            </table>
        </span>
    </div>
    <hr>
    <h1>7341. El mayor de tres números</h1>
    <div class="content">
         <a href="https://omegaup.com/arena/problem/El-mayor-de-tres-numeros/?authuser=0#problems"><img src="img/omegaupmayor3.png" width="500" height="250"></a>

         <span>
            <table>
                    <tr>
                        <th colspan=3>Varibles</th>
                    </tr>
                    <tr>
                        <td>$Numero 1</td>
                        <td>$Numero 2</td>
                        <td>$Numero 3</td>
                    </tr>
                    <tr>
                        <td><?php echo $n1m3?></td>
                        <td><?php echo $n2m3?></td>
                        <td><?php echo $n3m3?></td>
                    </tr>
                    <div class="res">
                        <tr>
                        <th colspan=3><?php echo "Resultado: ",$res2;?></th>
                        </tr>
                    </div>
            </table>
        </span>
    </div>
    <hr>
    <h1>13433. Estaciones del Año</h1>
    <div class="content">
         <a href="https://omegaup.com/arena/problem/Season-of-the-year/?authuser=0"><img src="img/omegaupestaciones.png" width="500" height="250"></a>
         <span>
            <table>
                    <tr>
                        <th colspan=3>Varibles</th>
                    </tr>
                    <tr>
                        <td>$Day</td>
                        <td>$Mouth</td>
                    </tr>
                    <tr>
                        <td><?php echo $day?></td>
                        <td><?php echo $mouth?></td>
                    </tr>
                    <div class="res">
                        <tr>
                         <th colspan=3><?php echo "Resultado: ",$res3;?></th>
                        </tr>
                    </div>
            </table>
         </span>
    </div>
</body>
</html>
