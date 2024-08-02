<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Entrenamiento</title>
    <link rel="stylesheet" href="entrenamiento.css">
</head>
<body>

    <div class="header">
        <div class="navigation">
            <a href="index2.php">Inicio</a>
            <a href="#">Sobre nosotros</a>
            <a href="#">Servicios</a>
            <a href="#">Contacto</a>
        </div>
        <div class="sign-out">Cerrar sesión</div>
    </div>

    <div class="training-container">
        <h1>Tu Entrenamiento</h1>
        <img src="img/entrenamiento.png" alt="" height="300px" width="300px">
        <div class="buttons-container">
            <button class="exercise-button" data-exercise="1">Ejercicio 1</button>
            <button class="exercise-button" data-exercise="2">Ejercicio 2</button>
            <button class="exercise-button" data-exercise="3">Ejercicio 3</button>
            <button class="exercise-button" data-exercise="4">Ejercicio 4</button>
            <button class="exercise-button" data-exercise="5">Ejercicio 5</button>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-body">
                <h2 id="exercise-title">Título del Ejercicio</h2>
                <img id="exercise-image" src="" alt="Imagen del Ejercicio">
                <p id="exercise-description">Descripción del Ejercicio</p>
                <div class="timer">
                    <p>Cronómetro: <span id="timer">00:00</span></p>
                    <button id="start-timer">Iniciar</button>
                    <button id="pause-timer">Pausar</button>
                    <button id="reset-timer">Reiniciar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div>&copy; 2024 Osoi. Todos los derechos reservados.</div>
    </div>

    <script src="js/entrenamiento.js"></script>
</body>
</html>


