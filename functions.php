<?php
/**
 * Created by PhpStorm.
 * File: functions.php
 * Date: 31/10/2019
 * Time: 11:49
 * @param $productname
 * @param $weight
 * @param $volume
 * @param $count
 */
function productfilter($productname, $weight, $volume, $count)
{
    $productname = trim(htmlspecialchars($productname)) ?: null;
    $weight = trim(htmlspecialchars($weight)) ?: null;
    $volume = trim(htmlspecialchars($volume)) ?: null;
    $count = trim(htmlspecialchars($count)) ?: null;
}