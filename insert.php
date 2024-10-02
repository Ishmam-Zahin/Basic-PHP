<?php
$data = file_get_contents("data.json");
$data_arr = json_decode($data, true);

$data_new = $_POST;
$data_arr[] = $data_new;

$data = json_encode($data_arr);
file_put_contents("data.json", $data);

header("Location: index.php", true, 301);
exit;
?>