<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body>
    
    <h1>Correo:</h1>

    <p>Nombre: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Token: {{ $user->remember_token }}</p>

    <p>dale al link para resetear el password</p>
</body>

</html>
