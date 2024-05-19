<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="prueba.php" method="post">
        <input type="submit" value="1" name="1">
        <input type="submit" value="2" name="2">
    </form>
    <?php
        $lol;$xd;
        $arr=array($lol,$xd);
        if($arr) echo "SIS";
        else echo "NON";
    ?>
</body>
</html>