<?php
 require_once 'app_config.php';
 $link=mysqli_connect(DATABASE_HOST, USERNAME, PASSWORD,DATABASE_NAME)
    or die("<p>Ошибка подключения к базе данных: " .
 mysqli_error() . "</p>");
 mysqli_select_db($link, DATABASE_NAME)
    or die("<p>Ошибка при выборе базы данных " .
 DATABASE_NAME . mysqli_error() . "</p>");
?>