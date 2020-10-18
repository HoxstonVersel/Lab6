<?php

    $_POST
// header('Content-Type: text/html; charset=utf-8');


$server = "localhost"
$username = "root"
$password = "root"
$database = "lab4"

// Функция подключения к базе данных
function connectDB () {  
    global $mysqli;
    $mysqli = new mysqli($server, $username, $password, $database);
    $mysqli->query(" SET NAMES 'utf-8' ");

}
// Функция отключения от базы данных 
function closeDB () {
    global $mysqli;
    $mysqli->close ();
}

