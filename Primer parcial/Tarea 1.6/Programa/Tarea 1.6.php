<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 1.6</title>
</head>
<body>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    html
    {
        font-size: 62.5%;
        font-family: 'Poppins', 'sans-serif';
        background-color: rgb(32, 79, 171);
        color: white;
    }
    body{
        margin: 0;
        font-size: 20px;
    }
    body h1{
        background-color: rgb(29, 61, 123);
        padding: 50px;
        margin: 0;
        background-image: url(img/corchetes.webp);
        background-size: 4%;
    }
    .content{
        margin: 50px;
    }
    .end a{
        color: white;
        text-decoration: none;
        font-weight: 700;
        margin: 0;
    }
    .end a:hover{
        color: grey;
    }
    .end{
        margin: 0;
        padding: 0;
    }
    .main{
        background-color: white;
    }
    .results{
        padding:40px;
        color: black;
        font-size: 40px;
        text-align: center;
    }
    </style>

    <?php
    function writearray($a,$cant)
    {
        for($i=0;$i<$cant;$i++)
        {
           echo $i,".-[",$a[$i],"] ";
        }
        
    }
    $arr=array(2,3,4,5,5);
    $arr1=array(6,7,1,3,5,);
    $res=array();
    $cant=count($arr);
    for($i=0;$i<$cant;$i++)
    {
        $res[$i]=$arr[$i]+$arr1[$i];
    }
    
    ?>

    <h1>Sumando dos conjuntos</h1>
    
    <div class="content">
        <h3>Descripción</h3>
        <p>Recibiendo dos conjuntos(arreglos), realizar la suma
        de cada uno de sus elementos.
        </p>
        <h3>Primer conjunto</h3>
        <?php echo writearray($arr,$cant);?>
        <h3>Segundo conjunto</h3>
        <?php echo writearray($arr1,$cant)?>
        <h3>Suma de los conjuntos</h3>
        <div class="main">
            <div class="results">
                <?php 
                    $esp="  ";
                    for($i=0;$i<$cant;$i++)
                    echo "Elemento ",$i,": ",$arr[$i],"+",$arr1[$i],"=",$res[$i],"<br>";
                ?>
            </div>
            <div class="result2">

            </div>
        </div>
        <div class="end">
            <a href="https://omegaup.com/arena/problem/Sumando-dos-conjuntos/">2765. Sumando dos conjuntos OmegaUp</a>
        </div>
    </div>
</body>
</html>
