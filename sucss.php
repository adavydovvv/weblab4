<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300&display=swap" rel="stylesheet">
    <title>Авторизация</title>
</head>
<body>
    <main>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = "teana";
            $password = "75755";

            $input_username = $_POST['username'];
            $input_password = $_POST['password'];

            if ($username === $input_username && $password === $input_password) {
                echo "Авторизация прошла успешно!";
            } else {
                echo "Неверный логин или пароль";
            }
        }
        ?>
        <div>
            <button>
                <a href="index.php">Переход на главную страницу</a>
            </button>
        </div>
    </main>
</body>
</html>