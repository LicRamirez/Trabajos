<?php 
    echo "<h3>El resultado de la función h(x,y,z) es igual a...</h3>";
    if($_POST)
    {

        function g($b,$c)
        {
            return ((7*(int)$b-3)%($c*$c+1));
        }
        function f($a)
        {
            return (4*pow((int)$a,3))+g(2*(int)$a,-3*(int)$a);
        }
        function h($x,$y,$z)
        {
            return f($x/$y)+3*g($z/$y,$x);
        }


        $x=$_POST['x'];
        $y=$_POST['y'];
        $z=$_POST['z'];
        echo h($x,$y,$z);
        echo "<br>variables: x: ",$x," y: ",$y," z: ",$z;
    }
?>