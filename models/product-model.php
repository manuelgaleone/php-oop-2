<?php

require_once __DIR__ . "/category-model.php";

/* //Modello di Prodotto
class Product
{
    public function __construct(public String $name, public String $description, public Category $category, public String $ProductType, public String $productHref)
    {
        $this->name = $name;
        $this->description = $description;
        $this->type = $ProductType;
        $this->productHref = $productHref;
    }
} */

class FoodProduct
{
    public function __construct(public String $name, public String $description, public Category $category, public String $Kcal, public String $productHref)
    {
        $this->name = $name;
        $this->description = $description;
        $this->kcal = $Kcal;
        $this->productHref = $productHref;
    }
}

class ToyProduct
{
    public function __construct(public String $name, public String $description, public Category $category, public String $ProductType, public String $productHref)
    {
        $this->name = $name;
        $this->description = $description;
        $this->type = $ProductType;
        $this->productHref = $productHref;
    }
}
