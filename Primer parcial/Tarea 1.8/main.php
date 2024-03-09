<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 1.8</title>
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
            background-color:rgb(249, 223, 52);
        }
        @keyframes intro{
            0% {font-size: 1px;}
            100% {font-size: 40px;}
        }
        .presentation{
            background-image: linear-gradient(rgb(249, 223, 52), rgb(252, 153, 25));
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
            grid-template-columns: repeat(3,0fr);
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
        <h1>Tarea 1.8: Problemas de OmegaUp</h1>
            <p>Alumno: Diego Ramirez Ortiz</p>
            <p>Profesor: Luis Germán Gutiérrez Torres</p>
            <p>Fecha: 06/03/2024</p>
    </div>
    
    
    <section class="menu">
        <a href="problem 1.php" class="card"><p>Bit de paridad</p><img src="https://static.vecteezy.com/system/resources/previews/027/119/276/non_2x/3d-rendering-binary-code-isolated-useful-for-technology-programming-development-coding-software-app-computing-server-and-connection-design-element-png.png" width="120" height="120"></a>
        <a href="problem 2.php" class="card"><p>Autores</p><img src="https://cdn.pixabay.com/photo/2023/02/02/18/38/author-7763519_1280.png" width="120" height="140"></a>
        <a href="problem 3.php" class="card"><p>Adquisición de Letras</p><img src="https://cdn-icons-png.flaticon.com/512/5226/5226046.png" width="100" height="120"></a>
    </section>
    
   
</body>
</html>