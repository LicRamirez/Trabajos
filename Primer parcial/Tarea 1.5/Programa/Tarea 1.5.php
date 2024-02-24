<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        td{
            padding: 3px 8px;
            text-align: center;
        }
        table{
            border-collapse: collapse;
        }
        div{
            color: green;

        }
    </style>
    <?php
    $arr=array();
    $n=rand(1,1000);
    $sum=0;
    for($i=0;$i<$n;$i++)
    {
        array_push($arr,rand(1,10));
        $sum+=$arr[$i];
    }
    $pro=$sum/$n;
    echo "Promedio:<br>",round($pro,2),"<br><br>";

    $aprov=0;
    $repro=0;
    $mayprom=0;
    for($i=0;$i<$n;$i++)
    {
        if($arr[$i]>=$pro) $mayprom++;
        if($arr[$i]>=6) $aprov++;
        else $repro++;
    }
    echo "Reprovados:<br>",$repro," Porcentaje: ", round(($repro/$n)*100,2),"%<br><br>";
    echo "Aprovados:<br>",$aprov," Porcentaje: ", round(($aprov/$n)*100,2),"%<br><br>";

    $sum1=0;
    for($i=0;$i<$n;$i++)
    {
        $sum1+=pow(($arr[$i]-$pro),2);
    }
    $desestan=sqrt($sum1/$n);
    echo "Desviacion estandar:<br>",round($desestan,2),"<br><br>Tabla:<br>";


    echo"<table border=4>";
    for($i=0;$i<$n;$i+=0)
    {
        echo "<tr>";
        for($j=0;$j<30;$j++)
        {
            if($i<$n) echo "<td>",$arr[$i],"</td>";
            else echo "<td></td>";
            $i++;
        }
        echo "</tr>";
    }
    echo"</table>";
?>

</body>
</html>