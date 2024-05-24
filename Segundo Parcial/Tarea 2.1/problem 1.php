<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema</title>
    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
</head>
<body>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body{
            margin: 0;
            font-family: 'Poppins';
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
        echo "<h3>El resultado de la función h(x,y,z) es igual a...</h3>";
    if(isset($_POST))
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
    </div>
</body>
</html>
