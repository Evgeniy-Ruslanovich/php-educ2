<?php

//соединяемся с сервером базы данных

$link = mysqli_connect('localhost', 'root', '');
if (!$link) {
    die('Ошибка подключения ' . mysqli_connect_errno() . ') '
       . mysqli_connect_error());
}
echo 'Успешно соединились ' . mysqli_get_host_info($link) . "\n";

//создаем базу данных

mysqli_query($link, '', MYSQLI_STORE_RESULT);
