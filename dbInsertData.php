<?php
try{
    require_once 'dbConnection.php';

    $sql = <<<SQL
    INSERT INTO "students"("fname", "lname", "birth_date", "gender", "desc")
    VALUES (:fname, :lname, :birth_date, :gender, :desc)
    SQL;
    
    $statement = $pdo->prepare($sql);
    $statement->execute($_POST);

    header("Location: index.php", true, 301);
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>