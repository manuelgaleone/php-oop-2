<?php

//Modello di Categoria
class Category
{
    public function __construct(public String $Name, public String $description)
    {
        $this->name = $Name;
        $this->description = $description;
    }
}
