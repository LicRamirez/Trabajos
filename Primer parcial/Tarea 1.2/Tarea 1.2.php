<html>
<body>
    <?php
        echo "Variables A: ",$a," B: ",$b,"<br>";
        $a=122;
        $b=64;
        if($a>$b)
        {
            echo "\"A\" es la variable mayor<br>";
        }
        $a=12;
        if($a<$b)
        {
            echo "Condicion IF:<br>";
            echo "\"A\" es menor que \"B\"<br>";
        } 
        else 
        {
            echo "Condicion Else:<br>";
            echo "\"B\" es menor que \"A\"<br>";
        }

        $estacion="primavera";
        if($estacion=="invierno")
        echo "Invierno, del 21 de diciembre al 20 de marzo";
        elseif($estacion=="primavera")
        echo "Primavera, del 21 de marzo al 20 de junio";
        elseif($estacion=="verano")
        echo "Verano, del 21 de marzo al 20 de septiembre";
        elseif($estacion=="Otoño")
        echo "Otoño, del 21 de septiembre al 20 de diciembre";
    ?>
</body>
</html>
