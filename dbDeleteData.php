<?php
try{
    require_once 'dbConnection.php';

    $sql = <<<SQL
    DELETE FROM "students"
    WHERE "id" = :id
    SQL;
    
    $statement = $pdo->prepare($sql);
    $statement->execute($_GET);

    header("Location: index.php", true, 301);
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>