<?php

$pdo = new PDO('mysql:host=localhost;dbname=ads_db','root','root');

if (isset($_GET['add'])) {

    include_once "api_add.php";
}

else if (isset($_GET['all'])) {

    $query = $pdo -> query("SELECT * FROM ads");
    $query = $query -> fetchALL(PDO::FETCH_ASSOC);
    header("Content-type: application/json; charset=utf-8");

    echo json_encode($query);
}






$query = $pdo -> prepare('INSERT INTO test(id) value (:id)');
$query -> bindValue(':id', 1);
$query -> execute();

if (isset($_GET['ell'])) {
    echo 'все объявления';
}

else if (isset($_GET['add'])) {
    echo 'добавить объявление';
}

else if (isset($_GET['id'])) {
    echo 'показать объявление';
}