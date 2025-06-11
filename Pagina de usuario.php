<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página Oficial de Porsche</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        html {
            scroll-behavior: smooth;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            color: white;
            padding-top: 80px;
            text-align: center;
        }
        h1 {
            color: gray;
        }
        button {
            font-size: 1.25em;
            font-weight: bold;
            padding: 5px 15px;
            border-radius: 5px;
            border: 2px solid gray;
            box-shadow: 2px 2px 10px rgba(255, 255, 255, 0.2);
            color: white;
            background-color: #333;
            cursor: pointer;
        }
        .input-container {
            position: relative;
            margin: 10px;
        }
        input {
            padding: 10px;
            border-radius: 5px;
            border: none;
            width: 250px;
        }
        i {
            color: gray;
        }
        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<h1>Página oficial de Porsche</h1>

<?php
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['name'] ?? '';
    $contrasena = $_POST['password'] ?? '';

    if (($usuario === 'Luis Angel' && $contrasena === '120208') || 
        ($usuario === 'Jose Luis' && $contrasena === '140508')) {
        header("Location: Porsche.html");
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<form method="POST" action="">
    <img src="media/Porsche logo.jpg" alt="Logo de Porsche" width="160px" height="120px"> 
    <div class="input-group">
        <div class="input-container">
            <input type="text" name="name" id="name" placeholder="Nombre" required>
            <i class="fa-solid fa-user"></i>
        </div> 
        <div class="input-container"> 
            <input type="password" name="password" id="password" placeholder="Contraseña" required>
            <i class="fa-solid fa-lock"></i>
        </div> 
        <button type="submit">Ingresar</button>
        <?php if (!empty($error)): ?>
            <div class="error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
    </div>
</form>
</body>
</html>
