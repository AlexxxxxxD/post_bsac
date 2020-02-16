<?php
include 'connect.php';

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
  echo "Некоректно введенная информация о ФИО отправителя";
  exit();
} else if(mb_strlen($country) < 4 || mb_strlen($country) > 20) {
  echo "Некоректно введенная информация о стране отправителя";
  exit();
} else if(mb_strlen($city) < 4 || mb_strlen($city) > 20) {
  echo "Некоректно введенная информация о городе отправителя";
  exit();
} else if(mb_strlen($street) < 5 || mb_strlen($street) > 50) {
  echo "Некоректно введенная информация о адресе отправителя";
  exit();
}       else if(mb_strlen($name_rec) < 5 || mb_strlen($name_rec) > 50) {
  echo "Некоректно введенная информация о ФИО получателя";
  exit();
} else if(mb_strlen($country_rec) < 4 || mb_strlen($country_rec) > 20) {
  echo "Некоректно введенная информация о стране получателя";
  exit();
} else if(mb_strlen($city_rec) < 4 || mb_strlen($city_rec) > 20) {
  echo "Некоректно введенная информация о городе получателя";
  exit();
} else if(mb_strlen($street_rec) < 9 || mb_strlen($street_rec) > 50) {
  echo "Некоректно введенная информация о улице получателя";
  exit();
} else if(mb_strlen($phone_rec) < 7 || mb_strlen($phone_rec) > 50) {
  echo "Некоректно введенная информация о номере получателя";
  exit();
} else if(mb_strlen($index_rec) < 2 || mb_strlen($index_rec) > 7) {
  echo "Некоректно введенная информация о индексе получателя";
  exit();
}
$query="INSERT INTO `departures_sender`(`name_sender`, `country`, `city`, `street`) VALUES ('$name_sender', '$country', '$city', '$street')";
$result = mysqli_query($link, $query);

$query2="INSERT INTO `departures_rec`(`name_rec`, `country_rec`, `city_rec`, `street_rec`, `phone_rec`, `index_rec`) VALUES('$name_rec', '$country_rec', '$city_rec', '$street_rec', '$phone_rec', '$index_rec')";
$result = mysqli_query($link, $query2);


echo mysqli_error($link);
mysqli_close($link);

echo "Запрос внесен в базу данных";

?>
