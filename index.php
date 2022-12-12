<?php

/*
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

    L'e-commerce vende prodotti per animali.
    
    I prodotti sono categorizzati, le categorie sono Cani o Gatti.
    
    I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
    
    Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

    BONUS (Opzionale):
    Il cliente potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store, oppure può iscriversi e creare un account per ricevere cosi il 20% di sconto.

    Il cliente effettua il pagamento dei prodotti nel carrello con la carta di credito, che non deve essere scaduta.

    Confermate lettura come al solito e buon lavoro!
*/

require_once __DIR__ . "/models/product-model.php";

$superGatto = new Product("Super Cibo per Gatti", "Il nostro super cibo è davvero spaziale, provalo! Ceh, il tuo gatto dico.", "Cibo per Gatti", "Cibo");
$superGioco = new Product("Super Gioco per Cani", "Il nostro super gioco è davvero divertentissimo, provalo! Ceh, il tuo cane dico.", "Gioco per Cani", "Gioco");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Cani & Gatti SpA</title>
</head>

<body>

    <div class="main_content py-3">
        <div class="main_products">
            <h1 class="py-3 text-center">
                I nostri prodotti:
            </h1>
            <div class="container">
                <div class="row">
                    <div class="card" style="width: 18rem;">
                        <img src="https://arcaplanet.vtexassets.com/arquivos/ids/224338/virtus-rustic-cane-adult.jpg?v=1757258609" class="card-img-top" alt="Animal Product.">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Script-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--//Script-->
</body>

</html>