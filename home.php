<?php
    if(isset($_POST['fio'])){
        $fio = $_POST['fio'];
        $email = $_POST['email'];
        $source = $_POST['source'];
        $message = $_POST['message'];
        if (isset($_POST['source'])) {$source=$_POST['source'];} else {$source='';}
    }
?>
<?php	
	include 'header.html';
?>
<!DOCTYPE html>
<head>
    <title>Ответ на обращение</title>
</head>
<body>
    <main>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "ФИО: $fio <br>";
        echo "Текст обращения: $message <br>";
        if (isset($_POST['attachment']) & $_POST['attachment'] != '') echo 'Вы приложили следующий файл: '.$_POST['attachment'];
        
        echo '<div><a class="btn" href="retconn.php?N='.$_POST['fio'].'&E='.$_POST['email'].'&S='.$_POST['source'].'">Заполнить снова</a></div>';
    }
    ?>
    </main>
</body>
</html>