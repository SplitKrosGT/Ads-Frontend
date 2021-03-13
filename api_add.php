<?php

$text = $_POST['text'];
$name = $_POST['text'];
$phone = $_POST['phone'];

$query = $pdo -> prepare('INSERT INTO ads 
(text, name, phone) 
value (:text, :name, :phone)');
$query -> bindValue(':text', $text);
$query -> bindValue(':name', $name);
$query -> bindValue(':phone', $phone);
$query -> execute();