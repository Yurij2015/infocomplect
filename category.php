<?php
require_once ("DB.php");
//require("RedBeanPHP5_4/rb.php");
//R::setup('mysql:host=localhost;dbname=infocomplect', 'infocomplect', '12345');
$categories = R::getAll( 'SELECT * FROM categories');

    foreach ($categories as $category) {
        echo $category['name'] . "<br>";
    }

var_dump($categories);






//require_once ("DB.php");
//require_once ("dbconfig.php");
//
//try {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
//    $stmt = $conn->prepare("SELECT * FROM categories");
//    $stmt->execute();
//    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//    foreach ($stmt->fetchAll()as $k => $v) {
//        $category = $v['name'];
//        echo $category . "<br>";
//    }
//} catch (PDOException $e) {
//    echo "Error: " . $e->getMessage();
//}
//$conn = null;


