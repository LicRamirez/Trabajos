<?php
echo "<h3>La respuestas es...</h3>";
    function f($x)
    {
        if($x<=0)
        {
            return $x*$x-$x;
        }
        else
        {
            return -1*($x*$x)+3*$x;
        }
    }
    if($_POST)
    {
        $x=$_POST['x'];
        echo "f(",$x,") = ",f($x);
    }
?>