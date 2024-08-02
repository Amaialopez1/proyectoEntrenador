<!DOCTYPE html>
<html>
<head>
    <title>Calcular IMC</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<?php include'log/header.php' ?>


<div style="margin-left:25%; padding:1px 16px;">
    <div class="card" style="width:200px;">

        <img src="img/amaia.jfif" alt="" class="rounded-circle" style="width:50%; margin-left:50px">

            <div class="card-body">
                    
                    <h4 class="card-title">Amaia López</h4>
                    <p class="card-text">Pesas y mantenimiento</p>
                    <button type="button" class="btn btn-primary">Modificar Perfil</button>
            
            </div>
    
    </div>
    
    <h2>Ingresar Datos del Cliente</h2>
    <form id="clienteForm">
        Nombre: <input type="text" id="nombre" required><br><br>
        Peso (kg): <input type="number" step="0.1" id="peso" required><br><br>
        Altura (m): <input type="number" step="0.01" id="altura" required><br><br>
        Género: 
        <select id="genero" required>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select><br><br>
        <input type="button" value="Calcular" onclick="calcularIMC()">
    </form>

    <div id="resultados"></div>

    <script>
        function calcularIMC() {
            // Obtener los datos del formulario
            const nombre = document.getElementById('nombre').value;
            const peso = parseFloat(document.getElementById('peso').value);
            const altura = parseFloat(document.getElementById('altura').value);
            const genero = document.getElementById('genero').value;

            // Calcular el IMC
            const imc = peso / (altura * altura);

            // Crear la tabla de resultados
            const resultadosDiv = document.getElementById('resultados');
            resultadosDiv.innerHTML = `
                <h2>Resultados para ${nombre}</h2>
                <table>
                    <tr>
                        <th>Cliente</th>
                        <th>Peso (kg)</th>
                        <th>Altura (m)</th>
                        <th>IMC</th>
                        <th>Género</th>
                    </tr>
                    <tr>
                        <td>${nombre}</td>
                        <td>${peso}</td>
                        <td>${altura}</td>
                        <td>${imc.toFixed(2)}</td>
                        <td>${genero === 'M' ? 'Masculino' : 'Femenino'}</td>
                    </tr>
                </table>
            `;
        }
    </script>
    </div>

</body>
</html>
