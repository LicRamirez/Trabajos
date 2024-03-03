<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 1.7</title>
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
            background-color:rgb(17, 119, 183);
        }
        @keyframes intro{
            0% {font-size: 1px;}
            100% {font-size: 40px;}
        }
        .presentation{
            background-image: linear-gradient(rgb(17, 119, 183), rgb(14, 85, 129));
            padding: 210px;
        }
        .presentation h1{
            color: white;
            font-weight: 500;
            font-size: 40px;
            animation-name: intro;
            animation-duration: 3s;
            text-align: center;
        }
        @keyframes introdata{
            from{opacity: 0;};
            to{opacity: 1;};
        }
        .presentation p{
            text-align: center;
            color: white;
            opacity: 1;
            animation-name: introdata;
            animation-duration: 5s;
        }
        .menu{
            background-color: white;
            padding: 100px;
            justify-content: center;
            display: grid;
            grid-template-columns: repeat(2,0fr);
            gap: 1rem;
            margin-bottom: 20px;
            
        }
        .menu .card{
            text-align: center;
            position: relative;
            border-radius: 10px;
            background-color: rgb(0, 99, 212);  
            height: 250px;         
            width: 210px;
            transition: all 0.7s ease;
            text-align: center;
        }
        .menu p{
            color: white;
            justify-content: center;
            padding: 10px;
            height: 50px;
            background-color: rgb(52, 157, 249);
            margin: 0;
            border-radius: 10px;
        }
        .menu img{
            filter: invert(100%);
            position: relative;
            bottom: -30px;
        }
        .menu .card:hover{
            width: 220px;
            height: 260px;
            font-size: 17px;
            border: blue 5px solid;
        }
        .menu .card:hover img{
        }
        
        
    </style>
    <div class="presentation">
        <h1>Tarea 1.7: Problemas de OmegaUp</h1>
            <p>Alumno: Diego Ramirez Ortiz</p>
            <p>Profesor: Luis Germán Gutiérrez Torres</p>
            <p>Fecha: 02/03/2024</p>
    </div>
    
    
    <section class="menu">
        <a href="Problem 1.php" class="card"><p>7050. Cálculos condicionales</p><img src="img/if.webp" alt="NO JALÓ :(" haight="100px" width="100px"></a>
        <a href="Problem 2.php" class="card"><p>18710. Formulota</p><img src="img/fx.png" alt="NO JALÓ :(" haight="150px" width="150px"></a>
        <a href="Problem 3.php" class="card"><p>7093. El lado más corto</p><img src="img/cuaa.png" alt="NO JALÓ :(" haight="140px" width="140px"></a>
        <a href="Problem 4.php" class="card"><p>11338. Escalera de asteriscos</p><img src="img/hashtag.webp" alt="NO JALÓ :(" haight="100px" width="100px"></a>
    </section>
    
   
</body>
</html>
