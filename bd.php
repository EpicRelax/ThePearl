<?php
$pdo = new PDO("mysql:host=localhost;dbname=hotel;charset=utf8", "root", "", [
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
]);
$error = null;
try {
    $statement = $pdo->query('SELECT * from reservation');
    $reservation = $statement->fetchAll();
    //var_dump($vehicules);
} catch (PDOException $e){
    echo $error = $e->getMessage();
} 
?>