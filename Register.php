<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style 2.css">
    <title>Регистрация</title>
</head>
<body>
    <header>
        <h1>Регистрация</h1>
        <!-- Путь к файлу обработки данных (db.php) -->
        <form id="registration-form" method="POST" action="bd.php">
            <label for="username">Имя:</label>
            <input type="text" id="username" name="username" placeholder="Введите ваше имя" required>

            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" placeholder="Введите пароль" required>

            <label for="confirm-password">Подтверждение пароля:</label>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Подтвердите пароль" required>

            <button type="submit">Создать аккаунт</button>
        </form>
        
        <!-- Контейнер для кнопок "Войти" и "Назад" -->
        <div class="button-container">
            <button type="button" id="login-button" onclick="window.location.href='login.php'" aria-label="Перейти на страницу входа">Уже есть аккаунт? Войти</button>
            <button type="button" id="back-button" onclick="window.history.back()" aria-label="Вернуться на предыдущую страницу">Назад</button>
        </div>
    </header>
</body>
</html>
