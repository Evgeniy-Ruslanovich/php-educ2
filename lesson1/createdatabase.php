<?php

//соединяемся с сервером базы данных

$link = mysqli_connect('localhost', 'root', '');
if (!$link) {
    die('Ошибка подключения ' . mysqli_connect_errno() . ') '
       . mysqli_connect_error());
}
echo 'Успешно соединились ' . mysqli_get_host_info($link) . "\n";

//создаем базу данных

mysqli_query(   $link, '
                CREATE SCHEMA `shop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;',
               MYSQLI_STORE_RESULT);

//создаем столбцы БД
mysqli_query(   $link, 'CREATE TABLE `shop`.`category` (  `id` INT NOT NULL,
 `name` VARCHAR(128) NOT NULL,
`discount` TINYINT NOT NULL,
PRIMARY KEY (`id`));
',
    MYSQLI_STORE_RESULT);


