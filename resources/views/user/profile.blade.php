<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль пользователя</title>
</head>
<body>
    <h1>Информация о пользователе</h1>

    <p>Имя: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>ID: {{ $user->id }}</p>

    <a href="{{ route('logout') }}">Выйти</a>
</body>
</html>
