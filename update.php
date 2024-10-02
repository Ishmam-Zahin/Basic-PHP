<?php
$data = file_get_contents("data.json");
$data_arr = json_decode($data, true);

$index = (int)$_POST["id"];
$data_arr[$index]["fname"] = $_POST["fname"];
$data_arr[$index]["lname"] = $_POST["lname"];
$data_arr[$index]["gender"] = $_POST["gender"];
$data_arr[$index]["bDate"] = $_POST["bDate"];
$data_arr[$index]["desc"] = $_POST["desc"];

$data = json_encode($data_arr);
file_put_contents("data.json", $data);

header("Location: index.php", true, 302);
exit;
?>