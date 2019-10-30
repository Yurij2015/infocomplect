<?php
/**
 * Project: infocomplect
 * Filename: dbconnect.php
 * Date: 10/30/2019
 * Time: 4:57 PM
 */
//$server = "127.0.0.1";
//$user = "root";
//$pass = "";

$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "infocomplect";


//$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Пошло поехало";
} catch (PDOException $e) {
    echo "Не туда, смотри ошибку: " . $e->getMessage();
}
