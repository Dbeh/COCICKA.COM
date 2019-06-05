<?php

require 'functions.php';

$firstName = '';
$lastName = '';
$email = '';
$password = '';
$message = '';
$table = '';
$table2 = '';


if($_SERVER['REQUEST_METHOD'] == "POST") {
    $par = ['first_name', 'last_name', 'email', 'password'];

    foreach ($par as $p) {
        if (empty($_POST[$p])) {
            return 'Не найден элемент' . $p;
        }
    }


    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    if(saveUser($firstName, $lastName, $email, $password)){
        $message = "Пользователь зарегистрировался";
    } else {
        $message = "Ошибка при регистрации пользователя";
    }


}

if($table = getUsers()){
    $message = "ОК";
} else {
    $message = "Нет чуваков";
}

if($table2 = getArrUsers()){
    $message = "ОК";
} else {
    $message = "Нет чуваков2";
}

include 'form.tpl.php';