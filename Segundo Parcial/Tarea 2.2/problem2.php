
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 2</title>
    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>

</head>
<body>

<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body{
            margin: 0;
            font-family: 'Poppins';
            margin: 0;
        }
        header i{
            margin: 0;
            color: white;
            font-weight: 800;
            font-size: 70px;
        }
        a{
            text-decoration: none;
        }
        header{
            height: 120px; 
            background: black;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 120px;
            border-radius: 0 0 50% 0;
        }
        .php{
            padding: 30px;
        }

    </style>
    <a href="main.html">
    <header>
        <i class="fa-solid fa-arrow-left"></i>
    </header>
    </a>

    <div class="php">
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
                case 'p': $sum+=0; break; 
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
</div>

</body>
</html>

