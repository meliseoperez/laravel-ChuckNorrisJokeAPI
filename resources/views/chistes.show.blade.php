<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chiste aleatorio</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100%;
            background-color: #333;
        }

        .container {
            text-align: center;
            color: blue;
            background-color: yellow;
        }

        .action {
            text-align: center;
            font-size: 32px;
            color: orange;
            margin-top: 185px;
        }

        .document-container {
            background: #fff;
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            height: 100vh;
            overflow-y: scroll;
        }

        .joke {
            font-size: 24px;
            color: black;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Chiste aleatorio</h1>
        <p class="joke">{{ $value }}</p>
    </div>
    <div class="footer">
        <p>Este chiste fue generado por la API de Chuck Norris.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
