<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Paquetería</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        header {
            background-color: #4CAF50;
            padding: 20px 0;
            color: #fff;
        }
        nav {
            margin-bottom: 20px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        nav a:hover {
            background-color: #45a049;
        }
        h1 {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
        }
        .button {
            display: inline-block;
            padding: 15px 30px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #45a049;
        }
        .box {
            background-color: #fff;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .search-form {
            margin-top: 30px;
            margin-bottom: 30px;
            text-align: center;
        }
        .search-input {
            padding: 10px;
            font-size: 16px;
            width: 300px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-right: 10px;
        }
        .search-button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .search-button:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            text-align: center;
        }
        .result img {
            max-width: 300px;
            height: auto;
            margin-top: 20px;
        }
        .result p {
            font-size: 18px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Halcon Service Application</h1>
            <nav>
                <a href="#">Inicio</a>
                <a href="#">Servicios</a>
                <a href="#">Ingresar a plataforma</a>
            </nav>
        </div>
    </header>
    <div class="container">
        <img src="{!! asset('imgPrueba/Service.jpg')!!}" alt="Paquetería" />
        <div class="box">
            <h2>Bienvenido a nuestra aplicación de paquetería</h2>
            <p>Realiza un seguimiento de tus envíos, conoce nuestros servicios y contáctanos para más información.</p>
            <a href="" class="button">Crear nueva orden de paquetería</a>
        </div>

        <div class="search-form">
            <form action="/search" method="GET">
                <label for="invoice_number">Buscar por número de factura:</label>
                <input type="text" id="invoice_number" name="invoice_number" class="search-input">
                <button type="submit" class="search-button">Buscar</button>
            </form>
        </div>

        <div class="result">
            <div class="delivered">
                <img src="ruta_de_la_foto_de_entrega.jpg" alt="Foto de entrega">
            </div>

            <div class="in-process">
                <p>"Status"</p>
                <p>Fecha: 09 de abril de 2024</p>
            </div>
        </div>
    </div>
</body>
</html>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Paquetería</title>
    <style>

        .search-form {
            margin-top: 30px;
            margin-bottom: 30px;
            text-align: center;
        }
        .search-input {
            padding: 10px;
            font-size: 16px;
            width: 300px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-right: 10px;
        }
        .search-button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .search-button:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            text-align: center;
        }
        .result img {
            max-width: 300px;
            height: auto;
            margin-top: 20px;
        }
        .result p {
            font-size: 18px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    

    
</body>
</html>