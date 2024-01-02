<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Natours</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            background: url('/storage/Logo/background.jpg') center/cover no-repeat fixed;
            color: #495057;
            text-align: center;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            /* Adiciona um fundo branco translúcido para o conteúdo */
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            /* Adiciona uma sombra suave ao redor do conteúdo */
        }

        .logo {
            max-width: 150px;
            margin: 20px auto;
        }

        .logo img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .welcome-message {
            font-size: 1.5rem;
            margin-top: 20px;
            color: #007bff;
        }

        .links {
            margin-top: 2rem;
        }

        .links a {
            margin: 0 1rem;
            text-decoration: none;
            color: #007bff;
            font-weight: 600;
            transition: color 0.3s;
        }

        .links a:hover {
            color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('storage/Logo/Logo_Natours.jpg') }}" alt="Logo">
        </div>
        <div class="welcome-message">
            <p>Bem-vindo à Natours! Aqui pode organizar a sua viagem!</p>
        </div>
        <div class="links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ url('/login') }}">Entrar</a>
            @if (Route::has('register'))
            <a href="{{ url('/register') }}">Registrar</a>
            @endif
            @endauth
        </div>
    </div>
</body>

</html>