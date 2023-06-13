<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./statics/styles/style.css">
    <link rel="icon" href="https://citadirecta.com.ar/wp-content/uploads/preguntados.png" type="image/x-png">
    <title>Preguntados</title>
</head>
<body>
    <h1><marquee behavior="alternate" direction="left">Preguntados</marquee></h1>
    <!-- <div class="container"> -->
    
        <div class="jugador">
            <form action="index.php" method="post">

            Nombre: <input type="text" name="jugador" placeholder="Escribe tu nombre">
            <input type="submit" value="Enviar">
            </form>
        </div>
        <br><br>
    
    <!-- </div> -->
    

    <div align="center"><button id="preguntas">Pregunta</button></div>
    <br>
    <?php            
        $nombre = $_POST["jugador"];
        echo "<h3>Jugador: ". $nombre."</h3><BR>";
    ?>
    <div id="resultado-preguntas"> 
        
    </div>
    <script src="./dynamics/js/juego_preguntados.js"></script>
</body>
</html>