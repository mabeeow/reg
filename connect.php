<?php
    $connect = mysqli_connect('localhost','admin','пароль', 'reg');
    if ($connect == false) {
        echo '<div style="color:red;">Подключения НЕТ</div>';
    }
?>