<?php
/**
 * Project: infocomplect
 * Filename: Category.php
 * Date: 10/30/2019
 * Time: 5:29 PM
 */

class Category
{
    public $idcategory;
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
}