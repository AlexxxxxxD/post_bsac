<?php
header('Content-Type: text/html; charset=utf-8');

$link = mysqli_connect("localhost", "root", "", "post_info");

/* проверяем соединение */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
} else printf("Подключено :)    ");


/* возвращаем имя текущей базы данных */
if ($result = mysqli_query($link, "SELECT DATABASE()")) {
    $row = mysqli_fetch_row($result);
    printf("Установленная БД %s.\n", $row[0]);
    mysqli_free_result($result);
}



$query2="INSERT INTO `departures_sender`(	`name_sender`, `country`, `city`, `street`). VALUES('$name_sender', '$country', '$city', '$street')"
$result = mysqli_query($link, $query2) or die(mysql_error());


//$mysqli->query("INSERT INTO `departures_sender`(	`name_sender`, `country`, `city`, `street`). VALUES('$name_sender', '$country', '$city', '$street')");
//$mysqli->query("INSERT INTO `departures_rec`(	`name_rec`, `country_rec`, `city_rec`, `street_rec`, `phone_rec`, `index_rec`) VALUES('$name_rec', '$country_rec', '$city_rec', '$street_rec', '$phone_rec', '$index_rec')");





/*закрытие БД*/
mysqli_close($link);






/*
//присваем каждому полю переменную
$name_sender = $_POST['name_sender'];
$country = $_POST['country'];
$city = $_POST['city'];
$street = $_POST['street'];

$name_rec = $_POST['name_rec'];
$country_rec = $_POST['country_rec'];
$city_rec = $_POST['city_rec'];
$street_rec = $_POST['street_rec'];
$phone_rec = $_POST['phone_rec'];
$index_rec = $_POST['index_rec'];

//подключение к БД


$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_database = 'post_info';

mysqli_select_db($departures_sender);
$query = "INSERT INTO departures_sender (name_sender, country, city, street) VALUES('$name_sender', '$country', '$city', '$street')";


mysqli_select_db($departures_rec);
$query = "INSERT INTO departures_rec (	name_rec, country_rec, city_rec, street_rec, phone_rec, index_rec) VALUES('$name_rec', '$country_rec', '$city_rec', '$street_rec', '$phone_rec', '$index_rec')";

$result = mysqli_query($query);


if($connect == true)
{
echo "Подключение прошло успешно!" ;
}
else
{
exit("Ошибка подключения к БД!") ;
}*/

/*
$_POST[]





$name_sender = filter_var(trim($_POST['name_sender']), FILTER_SANITIZE_STRING);
$country = filter_var(trim($_POST['country']), FILTER_SANITIZE_STRING);
$city = filter_var(trim($_POST['city']), FILTER_SANITIZE_STRING);
$street = filter_var(trim($_POST['street']), FILTER_SANITIZE_STRING);

$name_rec = filter_var(trim($_POST['name_rec']), FILTER_SANITIZE_STRING);
$country_rec = filter_var(trim($_POST['country_rec']), FILTER_SANITIZE_STRING);
$city_rec = filter_var(trim($_POST['city_rec']), FILTER_SANITIZE_STRING);
$street_rec = filter_var(trim($_POST['street_rec']), FILTER_SANITIZE_STRING);
$phone_rec = filter_var(trim($_POST['phone_rec']), FILTER_SANITIZE_STRING);
$index_rec = filter_var(trim($_POST['index_rec']), FILTER_SANITIZE_STRING);


if(mb_strlen($name_sender) < 7 || mb_strlen($name_sender) > 50) {
  echo "Некоректно введенная информация";
  exit();
} else if(mb_strlen($country) < 4 || mb_strlen($country) > 20) {
  echo "Некоректно введенная информация";
  exit();
} else if(mb_strlen($city) < 4 || mb_strlen($city) > 20) {
  echo "Некоректно введенная информация";
  exit();
} else if(mb_strlen($street) < 9 || mb_strlen($street) > 50) {
  echo "Некоректно введенная информация";
  exit();
}       else if(mb_strlen($name_rec) < 7 || mb_strlen($name_rec) > 50) {
  echo "Некоректно введенная информация";
  exit();
} else if(mb_strlen($country_rec) < 4 || mb_strlen($country_rec) > 20) {
  echo "Некоректно введенная информация";
  exit();
} else if(mb_strlen($city_rec) < 4 || mb_strlen($city_rec) > 20) {
  echo "Некоректно введенная информация";
  exit();
} else if(mb_strlen($street_rec) < 9 || mb_strlen($street_rec) > 50) {
  echo "Некоректно введенная информация";
  exit();
} else if(mb_strlen($phone_rec) < 7 || mb_strlen($phone_rec) > 50) {
  echo "Некоректно введенная информация";
  exit();
} else if(mb_strlen($index_rec) < 7 || mb_strlen($index_rec) > 50) {
  echo "Некоректно введенная информация";
  exit();
}



$mysql = new mysqli('localhost', 'root', 'root', 'post_info');
$mysql->query("INSERT INTO `departures_sender`(	`name_sender`, `country`, `city`, `street`). VALUES('$name_sender', '$country', '$city', '$street')");
$mysql->query("INSERT INTO `departures_rec`(	`name_rec`, `country_rec`, `city_rec`, `street_rec`, `phone_rec`, `index_rec`) VALUES('$name_rec', '$country_rec', '$city_rec', '$street_rec', '$phone_rec', '$index_rec')");

$mysql->close();*/
 ?>
