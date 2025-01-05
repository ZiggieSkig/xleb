<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style 3.css">
    <title>Вход</title>
</head>
<body>
    <header>
        <h1>Вход в аккаунт</h1>
        <form id="login-form" method="POST" action="bd2.php">
            <label for="username">Имя:</label>
            <input type="text" id="username" name="username" placeholder="Введите ваше имя" required>

            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" placeholder="Введите пароль" required>

            <button type="submit">Войти</button>
        </form>

        <!-- Контейнер для кнопок "Регистрация" и "Назад" -->
        <div class="button-container">
            <!-- Кнопка для перехода на страницу регистрации -->
            <button id="register-button" onclick="window.location.href='register.php'">Нет аккаунта? Зарегистрироваться</button>

            <!-- Кнопка для возврата на предыдущую страницу -->
            <button id="back-button" onclick="window.history.back()">Назад</button>
        </div>
    </header>
</body>
</html>