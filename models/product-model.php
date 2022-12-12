<?php

class Product
{
    public $name;
    public $description;
    public $category;
    public $productType;

    public function __construct($name, $description, $category, $productType)
    {
        $this->name = $name;
        $this->description = $description;
        $this->category = $category;
        $this->productType = $productType;
    }
}
