<?php
$name = $_GET['name'];
$email = $_GET['email'];
$message = $_GET['message'];
$topic = $_GET['topic'];
$consent = $_GET['consent'];
$referral = $_GET['referral'];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300&display=swap" rel="stylesheet">
    <title>Ответ на обращение</title>
</head>
<body>
    <main>
        <h2>Ответ на ваше обращение:</h2>
        <div><p><strong>ФИО:</strong> <?php echo $name; ?></p></div>
        <div><p><strong>Текст обращения:</strong> <?php echo $message; ?></p></div>
        <div><p><strong>Название прикрепленного файла:</strong> <?php echo isset($_GET['attachment']) ? $_GET['attachment'] : 'Нет прикрепленного файла'; ?></p></div>
            <form action="header.html">
               <input type="submit" value="Заполнить снова">
            </form>
    </main>
</body>
</html>