<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
BONUS (Opzionale):
Il cliente potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store, oppure può iscriversi e creare un account per ricevere cosi il 20% di sconto.
Il cliente effettua il pagamento dei prodotti nel carrello con la carta di credito, che non deve essere scaduta.
Confermate lettura come al solito e buon lavoro! :baby-yoda: (modificato)  -->

<?php

require __DIR__ . '/Models/Item.php';
require __DIR__ . '/Models/Cani.php';
require __DIR__ . '/Models/Gatti.php';
require __DIR__ . '/Models/User.php';



$dogFood = new Item('Food for Dog');
$dogFood->set_weight(10, 'kg');

var_dump($dogFood);
