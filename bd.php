<?php
$pdo = new PDO("mysql:host=localhost;dbname=hotel;charset=utf8", "root", "", [
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
]);
$error = null;
try {
    $statementR = $pdo->query('SELECT * from reservation');
    $reservation = $statementR->fetchAll();

    $statementC = $pdo->query('SELECT * from clients');
    $reservation = $statementC->fetchAll();
    //var_dump($vehicules);
} catch (PDOException $e){
    echo $error = $e->getMessage();
} 
?>