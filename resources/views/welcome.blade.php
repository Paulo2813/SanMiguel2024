<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Estilos personalizados -->
    <style>
        html, body{
        width: auto;
        display: flex;
        height: 700px;
        justify-content: center;
        align-items: center;
        }
        body {
            font-family: 'figtree', sans-serif;
            background-color: #f3f4f6;
            color: #374151;
            margin: 0;
            padding: 0;
            background: url('assets/colored-pencils-2562077_1280.jpg');
            background-size: cover;
            background-position: center;
            overflow: hidden;

        }
        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
            height: 200px;
        }
        .nav-link {
            font-weight: 600;
            text-decoration: none;
            color: #4b5563;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #d1d5db;
            transition: background-color 0.3s ease;
        }
        .nav-link:hover {
            background-color: #6b7280;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ url('/home') }}" class="nav-link">Home</a>
    </div>
</body>
</html>
