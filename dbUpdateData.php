<?php
try{
    require_once 'dbConnection.php';

    $sql = <<<SQL
    UPDATE "students"
    SET "fname" = :fname,
        "lname" = :lname,
        "birth_date" = :birth_date,
        "gender" = :gender,
        "desc" = :desc
    WHERE "id" = :id
    SQL;
    
    $statement = $pdo->prepare($sql);
    $statement->execute($_POST);

    header("Location: index.php", true, 301);
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>