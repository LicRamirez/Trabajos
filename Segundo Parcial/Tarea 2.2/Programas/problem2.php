<?php
echo "<h3>La respuestas es...</h3>";
    function f($p)
    {
        $sum=0;
        for($i=0;$i<strlen($p);$i++)
        {
            switch($p[$i])
            {
                case 'Q':
                case 'A':
                case 'Z': $sum++; break;
                case 'W':
                case 'S':
                case 'X': $sum+=2; break;
                case 'E':
                case 'D':
                case 'C': $sum+=3; break;
                case 'R':
                case 'F':
                case 'V': $sum+=4; break;
                case 'T':
                case 'G':
                case 'B': $sum+=5; break;
                case 'Y':
                case 'H':
                case 'N': $sum+=6; break;
                case 'U':
                case 'J':
                case 'M': $sum+=7; break;
                case 'I':
                case 'K': $sum+=8; break;
                case 'O':
                case 'L': $sum+=9; break;
                case 'p': $sum+=10; break; 
            }
        }
        return $sum;
    }
    if($_POST)
    {
        $p=$_POST['p'];
        echo f($p);
    }
?>