<?php
// Подключение к базе данных
$host = "localhost";
$user = "root";
$password = "1234";
$dbname = "da";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения к базе данных. Попробуйте позже.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    if ($password !== $confirm_password) {
        echo "Пароли не совпадают!";
    } elseif (strlen($password) < 8) {
        echo "Пароль должен быть не менее 8 символов.";
    } else {
        $check_user_sql = "SELECT id FROM new_table WHERE username = ?";
        $check_stmt = $conn->prepare($check_user_sql);
        $check_stmt->bind_param("s", $username);
        $check_stmt->execute();
        $check_stmt->store_result();

        if ($check_stmt->num_rows > 0) {
            echo "Пользователь с таким именем уже существует.";
            $check_stmt->close();
        } else {
            $check_stmt->close();
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO new_table (username, password) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $username, $hashed_password);

            if ($stmt->execute()) {
                session_start();
                $_SESSION['message'] = "Регистрация прошла успешно!";
                header("Location: login.php");
                exit;
            } else {
                error_log("Ошибка базы данных: " . $stmt->error);
                echo "Ошибка регистрации. Попробуйте позже.";
            }

            $stmt->close();
        }
    }
}

$conn->close();
?>
