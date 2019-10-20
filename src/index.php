<?php

// Параметры для подключения
$db_host = "185.136.166.20"; 
$db_user = "test"; // Логин БД
$db_password = "toster"; // Пароль БД
$db_base = "Dev_db"; // Имя БД
$db_table = "DB_insert_rows"; // Имя Таблицы БД
// Create connection
$link = mysqli_connect($db_host, $db_user, $db_password, $db_base);
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$query = "INSERT INTO DB_insert_rows (name, phone, email ) VALUES('$name', '$phone', '$email')";
if (!mysqli_query($link, $query)) {
  die('An error occurred.');
} else {
echo "Thanks.";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Form validation example</title>
  <style>
    input{display:block; margin-bottom:10px;}
  </style>
</head>

<body>
  <h1>Form Validation Example</h1>
  <h2>Please enter your name</h2>
  
  <form action="index.php" method="post">
    <label for="name">Name:</label>
    <input name="name" id="name" type="text" />
    
    <label for="phone">Phone:</label>
    <input name="phone" id="phone" type="text" />

    <label for="email">Email:</label>
    <input name="email" id="email" type="text" />
    
    <input type="hidden" name="process" value="1" />
    <input type="submit" value="Add" />
  </form>
</body>
</html>