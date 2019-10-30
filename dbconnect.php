<?php

$servername = "localhost";
$user = "infocomplect";
$pass = "12345";
$dbname = "infocomplect";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Пошло поехало";
} catch (PDOException $e) {
    echo "Не туда, смотри ошибку: " . $e->getMessage();
}
