<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Item</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin-top: 20px;
        }

        h1 {
            color: #3498db;
            margin-bottom: 15px;
        }

        p {
            color: #333;
            margin: 8px 0;
        }

        p.description {
            font-style: italic;
            color: #555;
        }

        h5 {
            color: #3498db;
            margin-top: 20px;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>{{ $name }}</h1>
        <p><strong>Cost:</strong> {{ $cost }}</p>
        <p><strong>City:</strong> {{ $city }}</p>
        <p class="description"><strong>Description:</strong> {{ $description }}</p>
        <h5>Imagem</h5>
        <img src="{{ $path }}" alt="Imagem do Spot">
    </div>
</body>

</html>