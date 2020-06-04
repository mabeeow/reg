<?php

//ОБЪЯВЛЯЕМ ПЕРЕМЕННЫЕ
$name = $_POST['name'];
$login = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$passRepeat = $_POST['pass-repeat'];
$errors = array();
$data = $_POST;


if (isset($data['reg'])) {
    //ПРОВЕРКА НА ПУСТЫЕ ПОЛЯ
    if ($name == '') {
        $errors[] = 'Введите имя';
    }
    if ($login == '') {
        $errors[] = 'Введите логин';
    }
    if ($email == '') {
        $errors[] = 'Введите email';
    }
    if ($pass == '') {
        $errors[] = 'Введите пароль';
    }
    if ($passRepeat == '') {
        $errors[] = 'Введите повторный пароль';
    }
    if ($passRepeat != $pass) {
        $errors[] = 'Пароли не совпадают';
    }


    if (empty($errors)) {
        //ЕСЛИ МАССИВ С ОШИБКАМИ ПУСТ,ТОГДА РЕГИСТРИРУЕМ
        if (isset($name) && isset($login) && isset($email) && isset($pass)) {
            $query = "INSERT INTO `registration`(`name`, `login`, `email`, `password`) VALUES ('$name, '$login', '$email', '$pass')";
            $result = mysqli_query($connect, $query);
            var_dump($result);
            if ($result){
                echo '<div style="color:green;">Вы зарегистрировались</div>';
            }
        }
    }else {
        echo '<div style="color:red;">'.array_shift($errors).'</div>';
    }
}


//?>