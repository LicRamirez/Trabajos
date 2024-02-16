<html>
<head>

</head>
<body>
<style>body{
    padding: 150px;
    font-family:'Gill Sans', sans-serif;
    font-size: 90%;
}
h1{
    text-align: center;
}
table{
    border-collapse: collapse;
    background-color: white;
}
table td.res{
    font-size: 90%;
    border: black 1px solid;
    background-color: rgb(250, 250, 250);
    padding: 10px 40px 15px 20px;
    letter-spacing: 3px;
}
table td.titulo{

    font-weight: 700;
    text-align: center;
    font-size: 90%;
    padding-bottom: 10px;
    
}
img.imagen{
    display: block;
    margin: 0 auto;
    width: 100px;
    height: 150px;
}
</style>
    <h1>12618. Practicando con formulas</h1>
    <h2>Descripcion</h2>
    <p>Dado un valor real a, quieres resolver una serie de ecuaciones hasta obtener el valor de z</p>
    <img src="phpimagenes/xyz.png" alt="Formulas" class="imagen">
    <h2>Entrada</h2>
    Un real a. Puedes suponer que 1 ≤ a ≤ 100.
    <h2>Salida</h2>
    Un real que sea el valor de z impreso con tres puntos decimales.
    <h2>Ejemplo</h2>
    <?php
        $a=33.562;
        $x=3*$a+15;
        $y=($x+3)/($x+1);
        $z=(5*$x+7*$y)/($a*$x*$y);

        $a1=72.569;
        $x=3*$a1+15;
        $y=($x+3)/($x+1);
        $z1=(5*$x+7*$y)/($a1*$x*$y);

        $a2=64.835;
        $x=3*$a2+15;
        $y=($x+3)/($x+1);
        $z2=(5*$x+7*$y)/($a2*$x*$y);
    ?>
    <table>
        <tr>
            <td class="titulo">Entrada</td>
            <td class="titulo">Salida</td>
        </tr>
        <tr>
            <td class="res"><?php echo $a;?></td>
            <td class="res"><?php echo round($z,3);?></td>
        </tr>
        <tr>
            <td class="res"><?php echo $a1;?></td>
            <td class="res"><?php echo round($z1,3);?></td>
        </tr>
        <tr>
            <td class="res"><?php echo $a2;?></td>
            <td class="res"><?php echo round($z2,3);?></td>
        </tr>
    </table>
    
</body>
</html>