<?php
// Подключение к базе данных
$host = "localhost";  // хост
$user = "root";       // имя пользователя
$password = "1234";   // пароль
$dbname = "da";       // имя базы данных

$conn = new mysqli($host, $user, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Проверка данных из формы
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];

    // Подготовка SQL-запроса для проверки пользователя
    $sql = "SELECT password FROM new_table WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    // Если пользователь найден
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        // Проверка пароля
        if (password_verify($password, $hashed_password)) {
            echo "Добро пожаловать, $username!";
            // Здесь можно перенаправить на другую страницу
            // header("Location: dashboard.php");
        } else {
            echo "Неверный пароль!";
        }
    } else {
        echo "Пользователь не найден!";
    }

    $stmt->close();
}

$conn->close();
?>

