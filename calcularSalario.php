<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Cálculo</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        h1 { color: #333; font-size: 18px; }
        .valor {
            font-size: 32px;
            color: #27ae60;
            font-weight: bold;
            margin: 20px 0;
        }
        a {
            text-decoration: none;
            color: #007bff;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="card">
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $horas = $_POST["txthoras"];
                $valor = $_POST["txtvalor"];
                $salario = $horas * $valor;
                echo "<h1>O salário calculado é:</h1>";
                echo "<div class='valor'>R$ " . number_format($salario, 2, ",", ".") . "</div>";
                echo "<a href='calcularSalario.html'>← Voltar para o início</a>";
            }
        ?>
    </div>
</body>
</html>
