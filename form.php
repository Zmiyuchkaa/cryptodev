<?php

if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  // Параметры для подключения
  $db_host = "185.136.166.20"; 
  $db_user = "test"; // Логин БД
  $db_password = "toster"; // Пароль БД
  $db_base = 'Dev_db'; // Имя БД
  $db_table = "DB_insert_rows"; // Имя Таблицы БД
  // Подключение к базе данных
  $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);
  // Если есть ошибка соединения, выводим её и убиваем подключение
  if ($mysqli->connect_error) {
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
  }
  $result = $mysqli->query("INSERT INTO ".$db_table." (name,phone, email) VALUES ('$name','$phone', '$email')");
  if ($result == true){
    echo $name;
  } else {
    echo "Информация не занесена в базу данных";
  }
}
?>