<?php
require_once ('reg.php');
require_once ('connect.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="Регистрация/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
  <title>Регистрация</title>
</head>
<body>
  <form method="post">
    <div class="background">
      <div class="container">
        <h1 class="logo">IT</h1>

          <input type="text" name="name" class="name" placeholder="Введите имя">

          <input type="text" name="login" class="login" placeholder="Введите логин">

          <input type="text" name="email" class="email" placeholder="Введите email">

          <input type="password" name="pass" class="pass" placeholder="Введите пароль">

          <input type="password" name="pass-repeat" class="pass-repeat" placeholder="Повторите пароль">

      <div class="button">
          <button type="submit" class="reg" name="reg"><a href="#">Зарегистрироваться</a>
          <button type="submit" class="autho" name="autho"><a href="#">Войти</a>
        </div>
    </div>
  </form>
</body>
</html>






