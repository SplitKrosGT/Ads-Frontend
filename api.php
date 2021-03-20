<?php

$pdo = new PDO(
    'mysql:host=localhost;dbname=ads_db',
    'root','root');

if (isset($_GET['add'])) {

    $text = $_POST['text'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    
    $query = $pdo -> prepare('INSERT INTO ads 
    (text, name, phone) 
    value (:text, :name, :phone)');
    $query -> bindValue(':text', $text);
    $query -> bindValue(':name', $name);
    $query -> bindValue(':phone', $phone);
    $query -> execute();
}

else if (isset($_GET['all'])) {

    $query = $pdo -> query("SELECT * FROM ads");
    $query = $query -> fetchAll(PDO::FETCH_ASSOC);
    header("Content-type: application/json; charset=utf-8");

    echo json_encode($query);
}