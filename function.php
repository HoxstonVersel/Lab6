<?php

    header("Content-Type: text/html; charset=utf-8");
// фильтруем как самую обычную строку и удаляет лишние пробелы 
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    echo $login; 

    $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
    echo $login; 

    $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
    echo $login;

    $result = $mysql->query("SELECT * FROM `users` WHERE `login` =  '$login' ");
    $user = $result->fetch_assoc();
    
    if (count($user) <> 0) { 
        echo "Такой пользователь уже существует!"; 
        $mysql->close(); exit(); }

    if(strlen($login) < 5 || strlen($login) > 100 ){
        ehco "Не допустимая длинна логина";
        exit();
    }
    else if (strlen($name) < 3 || strlen($name) > 50 ){
        ehco "Не допустимая длинна Имени";
        exit();
    }
    else if (strlen($pass) < 2 || strlen($pass) > 6 ){
        ehco "Не допустимая длинна пароля (от 2 до 6 символов)";
        exit();

?>
