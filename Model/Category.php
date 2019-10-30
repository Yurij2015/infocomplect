<?php

namespace category;

class Category
{
    public $idcategory;
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }
}