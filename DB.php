<?php
/**
 * Created by PhpStorm.
 * File: DB.php
 * Date: 30/10/2019
 * Time: 22:40
 */
require("RedBeanPHP5_4/rb.php");
R::setup('mysql:host=localhost;dbname=infocomplect', 'infocomplect', '12345');


//class DB
//{
//    protected $connection;
//
//    public function __construct($servername, $dbname, $user, $pass)
//    {
//        try {
//            $this->connection = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
//            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
////    echo "Пошло поехало";
//        } catch (PDOException $e) {
//            echo "Не туда, смотри ошибку: " . $e->getMessage();
//        }
//    }
//}

