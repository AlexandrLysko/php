
<!--/*Написать функцию, которая обрабатывает данные из формы, проверяет isset(), убирает пробелы, теги и возвращает обработанные данные*/-->


<form method="POST">
Логин: <input type="text" name="login" /><br><br>
Пароль: <input type="text" name="password" /><br><br>
<input type="submit" value="Войти">
</form>


<?php

if(isset($_POST['login']) && isset($_POST['password'])){
	
	$login= htmlentities($_POST['login']);
	strip_tags($login);
	addslashes($login);
	trim($login);
	
    $password = htmlentities($_POST['password']);
	strip_tags($password);
	addslashes($password);
	trim($password);
    echo "Ваш логин: $login <br> Ваш пароль: $password";

} 
?>