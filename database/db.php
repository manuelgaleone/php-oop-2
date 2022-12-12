<?php

require_once __DIR__ . "/../models/product-model.php";
require_once __DIR__ . "/../models/category-model.php";

//Database di Categorie
$Dog = new Category("Cane", "Prodotto per Cani");
$Cat = new Category("Cat", "Prodotto per Gatti");
$Rubbit = new Category("Rubbit", "Prodotto per Conigli");

//Database di Prodotti
$products = [
    $SuperConiglio = new FoodProduct("Super Cibo Conigliesco", "Ottimo cibo conigliesco, super.", $Dog, "Cibo", "https://arcaplanet.vtexassets.com/arquivos/ids/224338/virtus-rustic-cane-adult.jpg?v=1757258609"),
    $Gattissimo = new ToyProduct("Gattissimo 2x1", "Il gioco che il tuo gatto amerà!", $Cat, "Gioco", "https://arcaplanet.vtexassets.com/arquivos/ids/207398/Kong-Dotz-Circle-Small.jpg?v=1757249547"),
    $SuperConiglio = new FoodProduct("Coniglio Amore", "Il Cibo che il tuo coniglio amerà!", $Rubbit, "Cibo", "https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=1757261187")
];
