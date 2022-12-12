<?php

//Modello di Prodotto
class Product
{
    public function __construct(public String $name, public String $description, public Category $category, public String $ProductType, public String $productHref)
    {
        $this->name = $name;
        $this->description = $description;
        $this->type = $ProductType;
        $this->productHref = $productHref;
    }
}

//Modello di Categoria da portare via
class Category
{
    public function __construct(public String $Name, public String $description)
    {
        $this->name = $Name;
        $this->description = $description;
    }
}
