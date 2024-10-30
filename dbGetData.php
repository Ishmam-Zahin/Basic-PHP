<?php
try{
    require_once 'dbConnection.php';
    $sql = 'SELECT * FROM "students"';
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $data_arr = $statement->fetchAll();
} catch(PDOException $e){
    echo $e->getMessage();
}
?>