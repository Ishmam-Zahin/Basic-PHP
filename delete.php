<?php
$data = file_get_contents("data.json");
$data_arr = json_decode($data, true);


$index = (int)$_GET["id"];
unset($data_arr[$index-1]);
$data_arr = array_values($data_arr);

$data = json_encode($data_arr);
file_put_contents("data.json", $data);

header("Location: index.php", true, 302);
exit;
?>