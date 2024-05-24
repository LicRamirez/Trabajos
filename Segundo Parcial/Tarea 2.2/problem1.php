<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 1</title>
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
    </div>

</body>
</html>
