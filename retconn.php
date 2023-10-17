<?php
    if (isset($_GET['N'])) {$fio =$_GET['N'];} else {$fio='';}
    if (isset($_GET['E'])) {$email =$_GET['E'];} else {$email='';}
    if (isset($_GET['S'])) {$source =$_GET['S'];} else {$source='';}
?>
<?php	
	include 'header.html';
?>
<!DOCTYPE html>
<body>
    <main>
        <div class="container">
            <h1>Форма обратной связи</h1>
            <form action="home.php" method="post">
                <div><label for="fio">ФИО:</label><br>
                <input type="text" id="fio" name="fio" value="<?php echo $fio ?>"><br></div>

                <div><label for="email">Ваш e-mail:</label><br>
                <input type="text" id="email" name="email" placeholder="example@mail.com" value="<?php echo $email ?>"><br></div>

                <div> <label for="message">Сообщение:</label><br>
                <textarea id="message" name="message" rows="4" cols="50"></textarea><br>
                </div>

                <div> <label for="topic">Тема обращения:</label><br>
                <select id="topic" name="topic">
                    <option value="proposal">Предложение</option>
                    <option value="complaint">Жалоба</option>
                </select><br></div>

                <div>
                <label for="attachment"></label>
                <input type="file" id="attachment" name="attachment">
                </div>

                <div>  <input type="radio" id="internet" name="source" value="internet" <?php if($source == 'internet') echo 'checked'; ?>>
                <label for="internet">Реклама из интернета</label><br>

                <input type="radio" id="friends" name="source" value="friends" <?php if($source == 'friends') echo 'checked'; ?>>
                <label for="friends">Рассказали друзья</label><br>
                </div>

                
                <div><input type="submit" value="Отправить"></div>
        </form>
        </div>
    </main>
</body>
</html>
