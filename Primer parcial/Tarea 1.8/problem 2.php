<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4886. Autores</title>
</head>
<body>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        html{
            font-family: 'Poppins';
        }
        a{
            text-decoration: none;
        }
        body{
            margin: 0;
        }
        header{
            background-color: rgb(25, 89, 252);
            padding: 20px;
        }
        header a{
            color: white;
            font-size: 30px;
            font-weight: 1000;
            padding: 0;
            margin: 0;
            transition: all 0.4s ease;
        }
        header a:hover{
            color: black;
        }
        
        .bgc{
            height: 670px;
            background-color: rgb(89, 130, 236);
            text-align: center;
        }
        .description{
            color: white;
            padding: 100px;
            font-size: 21px;
            text-shadow: 4px 0 2px black;
        }
        .content{
            margin: 30px;
            padding: 70px;
            margin-bottom: 100px;
            display: grid;
            grid-template-columns: repeat(2,3fr);
        }
        .ans{
            border: black 3px solid;
            padding-left: 30px;
            padding: 10px;
        }
        @keyframes warning{
            from{opacity: 0;}
            to{opacity: 1;}
        }
        i{
            color: red;
            animation-name: warning;
            animation-duration: 1s;
            animation-iteration-count: infinite;
        }
        .link{
            padding: 50px;
            background-color: rgb(25, 89, 252);
        }
        .link a{
            color: white;
            font-weight: 1000;
            font-size: 20px;
        }
        .link a:hover{
            color: black;
        }
        .inputs h4{
            display: inline; 
            padding-right: 20px;
        }
    </style>

    <header><a href="main.php">Inicio</a></header>
    <div class="bgc">
        <div class="description">
            <h1>Autores</h1>
            <p>Los grandes descubrimientos científicos a menudo son nombrados por los apellidos de los científicos que los hicieron. Por ejemplo, el sistema de criptografía asimétrica más popular, RSA fue descubierto por Rivest, Shamir y Adleman. Otro ejemplo notable es el algoritmo de Knuth-Morris-Pratt, nombrado por Knuth, Morris y Pratt. </p>
            <p>La referencia de documentos científicos anteriores funciona mucho y es frecuente que un documento utilice dos convenciones de nomenclatura diferentes: la variación corta (por ejemplo, KMP) utilizando sólo las primeras letras de los autores y la larga variación (por ejemplo, Knuth-Morris-Pratt). Dada la varición larga, imprimir la variación corta </p>
        </div>
    </div>

    <div class="content">
        <div class="inputs">
            <h1>Entrada</h1>
    <form action="problem 2.php" method="post">
        <input type="text" name="txt1">
        <input type="submit" name="sub" value="Ejecutar">
    </form>
    </div>

    <div class="ans">
        <h1>Salida</h1>
    <?php
        if($_POST)
        {
            $s=$_POST['txt1'];
            $r='';
            for($i=0;$i<strlen($s);$i++)
            {
                if($s[$i] >= 'A' && $s[$i] <= 'Z') $r.=$s[$i];
            }
            echo $r;
        }
    ?>
    </div>
    </div>

    <div class="link">
        <a href="https://omegaup.com/arena/problem/Autores/#problems">Link al problema</a>
    </div>

    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
</body>
</html>