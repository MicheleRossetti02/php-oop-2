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



$dogFood = new Cani('Monge', 'image_link', 19.99, 'icon_link', 'Food');
$dogFood->set_weight(10, ' kg');


$lettiera = new Gatti('Lettiera', 'image_link', 9.99, 'icon_link', 'Lettiera');
$lettiera->set_weight(2, ' kg');

// var_dump($dogFood);

// var_dump($lettiera);


?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>


    <title>Document</title>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js' integrity='sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer'>
    <link rel='stylesheet' href='./assets/style.css'>
</head>

<body>


    <header id="site_header">
        <nav class="navbar p-0">
            <div class="container-fluid ps-1">
                <a class="navbar-brand" href="#">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Golden_retriever_stehfoto.jpg/1200px-Golden_retriever_stehfoto.jpg" alt="logo">
                </a>
                <div class="link ">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row">
                        <li class="nav-item px-3">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                    </ul>
                </div>

                <span class="navbar-text pe-4">
                    Animal Shop
                </span>
            </div>


        </nav>
    </header>
    <!-- /#site_header -->

    <?php ?>

    <main id="site_main">
        <div class="container">
            <div class="row row-cols-3">

                <?php foreach ($variable as $key => $value) {
                    # code...
                }  ?>

                <div class="card col" style="width: 18rem;">
                    <img src="<?php ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php ?></h5>
                        <p class="card-text"><?php ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php ?></li>
                        <li class="list-group-item"><?php ?></li>
                        <li class="list-group-item"><?php ?></li>
                    </ul>

                </div>

                <?php ?>

            </div>
        </div>
    </main>

    <?php ?>
    <!-- /#site_main -->
    <footer id="site_footer">

    </footer>
    <!-- /#site_footer -->


    <script src='https://cdn.jsdelivr.net/npm/vue@3.2.41/dist/vue.global.min.js'></script>
    <script src=''></script>
</body>

</html>