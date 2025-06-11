<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porsche Cayenne</title>
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

        h1, h2 {
            color: gray;
        }

        h1 { font-size: 3em; margin-bottom: 20px; }
        h2 { font-size: 2em; margin-top: 50px; border-bottom: 2px solid gray; padding-bottom: 5px; }

        ul {
            list-style: none;
            padding-left: 0;
            font-size: 1.2em;
        }

        li::before {
            content: "• ";
            color: gray;
            font-weight: bold;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            padding: 20px;
            text-align: left;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .visible {
            opacity: 1;
            transform: translateY(0);
        }

        header {
            background-color: black;
            padding: 15px 0;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            text-align: center;
            box-shadow: 0 2px 10px rgba(255, 255, 255, 0.2);
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            margin: 0 15px;
            font-size: 1.2em;
            transition: color 0.3s;
            cursor: pointer;
        }

        nav a:hover {
            color: gray;
        }

        .section {
            padding-top: 100px;
            margin-top: -100px;
        }

        img {
            display: block;
            max-width: 100%;
            height: auto;
            margin: 30px auto;
            border-radius: 10px;
        }

        .button {
            margin-top: 50px;
            padding: 10px 20px;
            background-color: gray;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .button:hover {
            background-color: white;
            color: black;
            transform: scale(1.05);
        }

        form label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: white;
            font-size: 1.1em;
        }

        form input[type="text"],
        form input[type="number"],
        form select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: none;
            font-size: 1em;
        }

        input[readonly] {
            background-color: #444;
            color: #ddd;
            cursor: not-allowed;
        }

        #resumenPedido {
            margin-top: 30px;
            border-collapse: collapse;
            width: 100%;
            color: white;
            font-size: 1.1em;
            display: none;
        }

        #resumenPedido th,
        #resumenPedido td {
            border: 1px solid gray;
            padding: 10px;
            text-align: left; 
        }

        #resumenPedido th {
            background-color: #333;
            width: 40%;
        }

        .logo {
            font-weight: bold;
            font-size: 1.5em;
            color: white;
        }
        .animate-show {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .animate-show.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>

    <header>
        <div class="header-container">
            <div class="logo">Porsche Cayenne</div>
            <nav>
                <a href="#mecanica">Mecánica</a>
                <a href="#interior">Interior</a>
                <a href="#exterior">Exterior</a>
                <a href="#adquirir" id="linkAdquirir">Adquirir</a>
            </nav>
        </div>
    </header>

    <div class="container" id="main-content">
        <h1>Porsche Cayenne</h1>

        <section id="mecanica" class="section">
            <div class="container">
                <h2>Mecánica</h2>
                <ul>
                    <li><strong>Motorización:</strong> Variedad de motores, desde un V6 turboalimentado de 3.0 litros con 340 CV hasta un V8 biturbo de 4.0 litros en el Turbo GT que alcanza 640 CV.</li>
                    <li><strong>Transmisión:</strong> Automática Tiptronic S de 8 velocidades.</li>
                    <li><strong>Tracción:</strong> Total activa con Porsche Traction Management (PTM).</li>
                </ul>
                <img src="media/Porsche Cayenne Motor.jpg" alt="Motor Porsche Cayenne" />
            </div>
        </section>

        <section id="interior" class="section">
            <div class="container">
                <h2>Interior</h2>
                <ul>
                    <li><strong>Diseño y materiales:</strong> Ambiente lujoso con acabados en cuero, madera y aluminio.</li>
                    <li><strong>Tecnología:</strong> Pantalla táctil de 12,3 pulgadas, sistema PCM, cuadro de instrumentos analógico y digital, y sistemas de asistencia al conductor.</li>
                    <li><strong>Comodidades:</strong> Asientos ajustables eléctricamente con función de masaje, climatizador de cuatro zonas y sistema de sonido envolvente Bose o Burmester.</li>
                </ul>
                <img src="media/Porsche Cayenne Interior.jpg" alt="Interior Porsche Cayenne" />
            </div>
        </section>

        <section id="exterior" class="section">
            <div class="container">
                <h2>Exterior</h2>
                <ul>
                    <li><strong>Diseño:</strong> SUV robusto con líneas deportivas y una presencia imponente.</li>
                    <li><strong>Iluminación:</strong> Faros LED con tecnología Porsche Dynamic Light System (PDLS).</li>
                    <li><strong>Opciones:</strong> Paquetes deportivos, varios diseños de llantas y colores exclusivos.</li>
                </ul>
                <img src="media/Porsche Cayenne.jpg" alt="Porsche Cayenne" />
            </div>
        </section>

        <section id="adquirir" class="section">
            <div class="container">
                <h2>Adquirir Porsche Cayenne</h2>
                <button id="showFormBtn" class="button">Mostrar formulario de compra</button>
                <form id="compraForm" class="animate-show" method="POST" action="#adquirir" style="display:none;">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" value="<?php echo isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : '' ?>" required />

                    <label for="apellidos">Apellidos:</label>
                    <input type="text" id="apellidos" name="apellidos" value="<?php echo isset($_POST['apellidos']) ? htmlspecialchars($_POST['apellidos']) : '' ?>" required />

                    <label for="edad">Edad:</label>
                    <input type="number" id="edad" name="edad" min="18" max="120" value="<?php echo isset($_POST['edad']) ? htmlspecialchars($_POST['edad']) : '' ?>" required />

                    <label for="precio">Precio:</label>
                    <input type="text" id="precio" name="precio" value="$2,478,000" readonly />

                    <label for="color">Color del vehículo:</label>
                    <select id="color" name="color" required>
                        <?php
                        $colors = ['Negro', 'Blanco', 'Rojo', 'Plata', 'Azul'];
                        $selectedColor = isset($_POST['color']) ? $_POST['color'] : '';
                        foreach ($colors as $colorOption) {
                            $selected = ($selectedColor === $colorOption) ? 'selected' : '';
                            echo "<option value=\"$colorOption\" $selected>$colorOption</option>";
                        }
                        ?>
                    </select>

                    <label for="cuotas">Cuotas mensuales:</label>
                    <select id="cuotas" name="cuotas" required>
                        <?php
                        $cuotasOptions = ['alcontado' => 'Al contado', '12' => '12 meses', '24' => '24 meses', '36' => '36 meses', '48' => '48 meses', '60' => '60 meses'];
                        $selectedCuotas = isset($_POST['cuotas']) ? $_POST['cuotas'] : '';
                        foreach ($cuotasOptions as $key => $label) {
                            $selected = ($selectedCuotas === $key) ? 'selected' : '';
                            echo "<option value=\"$key\" $selected>$label</option>";
                        }
                        ?>
                    </select>

                    <button type="submit" class="button">Terminar pedido</button>
                </form>

                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $nombre = htmlspecialchars(trim($_POST['nombre']));
                    $apellidos = htmlspecialchars(trim($_POST['apellidos']));
                    $edad = intval($_POST['edad']);
                    $color = htmlspecialchars($_POST['color']);
                    $cuotas = htmlspecialchars($_POST['cuotas']);
                    $precioOriginal = 2478000;
                    $interesPorcentaje = 0;

                    if ($edad < 18) {
                        echo '<p style="color:red; font-weight:bold;">La edad mínima para adquirir el vehículo es 18 años.</p>';
                    } else {
                        switch ($cuotas) {
                            case 'alcontado':
                                $interesPorcentaje = 0;
                                break;
                            case '12':
                                $interesPorcentaje = 0.12;
                                break;
                            case '24':
                                $interesPorcentaje = 0.24;
                                break;
                            case '36':
                                $interesPorcentaje = 0.36;
                                break;
                            case '48':
                                $interesPorcentaje = 0.48;
                                break;
                            case '60':
                                $interesPorcentaje = 0.60;
                                break;
                        }
                        $totalAPagar = $precioOriginal * (1 + $interesPorcentaje);
                        echo '<div id="resumenContainer">';
                        echo '<h3>Resumen del Pedido</h3>';
                        echo '<table id="resumenPedido" aria-label="Resumen del pedido" style="display: table;">';
                        echo '<tbody>';
                        echo '<tr><th>Nombre</th><td>' . $nombre . ' ' . $apellidos . '</td></tr>';
                        echo '<tr><th>Color</th><td>' . $color . '</td></tr>';
                        echo '<tr><th>Precio Original</th><td>$' . number_format($precioOriginal, 2, ',', '.') . '</td></tr>';
                        echo '<tr><th>Cuotas</th><td>' . ($cuotas === 'alcontado' ? 'Al contado' : $cuotas . ' meses') . '</td></tr>';
                        echo '<tr><th>Total a Pagar</th><td>$' . number_format($totalAPagar, 2, ',', '.') . '</td></tr>';
                        echo '</tbody>';
                        echo '</table>';
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </section>

        <center>
            <button class="button" onclick="window.location.href='Porsche.html'">Página de Inicio</button>
        </center>
    </div>

    <script>
        const sections = document.querySelectorAll('.container');
        const options = { root: null, rootMargin: '0px', threshold: 0.1 };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                } else {
                    entry.target.classList.remove('visible');
                }
            });
        }, options);
        sections.forEach(section => {
            observer.observe(section);
        });

        const linkAdquirir = document.getElementById('linkAdquirir');
        const adquirirSection = document.getElementById('adquirir');
        const showFormBtn = document.getElementById('showFormBtn');
        const form = document.getElementById('compraForm');
        showFormBtn.addEventListener('click', () => {
            form.style.display = 'block';
            setTimeout(() => {
                form.classList.add('visible');
            }, 10);
            showFormBtn.style.display = 'none';
            adquirirSection.scrollIntoView({behavior: 'smooth'});
        });

        linkAdquirir.addEventListener('click', function(event){
            event.preventDefault();
            adquirirSection.scrollIntoView({behavior: 'smooth'});
        });

        window.onload = function() {
            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                form.style.display = 'block';
                form.classList.add('visible');
                showFormBtn.style.display = 'none';
                adquirirSection.scrollIntoView({behavior: 'smooth'});
            <?php endif; ?>
        };
    </script>

</body>
</html>
