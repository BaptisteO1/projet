<!DOCTYPE html>
<html lang="fr">
<?php
include 'database.php';
?>

<head>
    <meta charset="utf-8">

    <title>Food and Drink</title>
    <meta name="description" content="Description de la page">

    <!-- Feuille style de CSS -->
    <link rel="stylesheet" href="css/style.css">
    </link>

    <link rel="icon" href="favicon.ico">

    <!-- FONT -->


</head>

<body>
    <header>
        <nav class="container flex-container">
            <div class="logo">
                <img src="images/food-and-drink 2.svg" alt="logo">
            </div>
            <div class="links">
                <ul class="flex-container">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Nos producteurs</a></li>
                    <li><a href="#">Nos références</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section id="hero" class="container flex-container">
            <div class="herotexte">
                <div>
                    <h1>Enjoy <span>Delicious </br>
                            Food </span>in Your </br>
                        Healthy Life </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit.</br> Cras ante ante, Squid Game meilleur série,
                        porttitor eu arcu. Curabitur vitae luctus leo. Nullam
                        pellentesque eros tellus,</br> dictum pharetra urna
                        rhoncus vitae. Quoi ? Feur.</p>
                </div>
            </div>
            <div class="heroboximg">
                <img class="heroimg" src="images/pngegg (2).png" alt="imghero">
            </div>
        </section>

        <!-- MENU 1 -->
        <section>
        <?php
// Connexion à la base de données
 





// Inclusion du fichier de configuration


// Requête SQL pour sélectionner tous les enregistrements de la table "menu"
$st = $dbb->prepare("SELECT * FROM menu");
$st->execute();
$data = $st->fetchAll();

// Affichage des résultats
foreach ($data as $record) {
    echo '<b>' . $record['nom'] . '</b>';
    echo '<li>' . 'entrée : ' . $record['entrée']  . '</li>';
    echo '<li>' . 'plat : ' . $record['plat'] . '</li>';
    echo '<li>' . 'dessert : ' . $record['dessert'] . '</li>';
    echo '<li>' . 'boisson : ' . $record['boisson'] . '</li>';
    echo '<li>' . 'tarif : ' . $record['tarif'] . '</li>';
}
?>

        </section>

        <!-- NOS PRODUCTEURS LOCAUX -->
        <section class="container nplcon">
            <div>
                <h2>NOS PRODUCTEURS LOCAUX</h2>
            </div>
            <div class="flex-container npl">
                <img class="imgpl" src="images/amisdelaferme-rennes-livraison-produits fermiers-ferme2.jpg" alt="ImgPL1">
                <img class="imgpl" src="images/jardins-chataignier.jpg" alt="ImgPL2">
                <img class="imgpl" src="images/logo-boucherie-non-coupe-fo-1.png" alt="ImgPL3">
            </div>
        </section>

        <!-- NOS REFERENCES -->
        <section class="container refcon">
            <div>
                <h2>NOS REFERENCES</h2>
            </div>
            <div class="flex-container ref">
                <img class="imgref" src="images/logo_rouge.png" alt="Imgref1">
                <img class="imgref" src="images/michelin-guide-logo-dark.svg" alt="Imgref2">
                <img class="imgref" src="images/Tripadvisor_lockup_horizontal_secondary_registered.svg" alt="Imgref3">
            </div>
        </section>

        <!-- NOUS TROUVER -->
        <section class="container map">
            <div>
                <h2>NOUS TROUVER</h2>
            </div>
            <div class="googlemap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2664.0502240227906!2d-1.6827809490553778!3d48.10926686100967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ede336647100f%3A0x705cb7733a64bcce!2s3%20Rue%20de%20la%20Chalotais%2C%2035000%20Rennes!5e0!3m2!1sfr!2sfr!4v1677590123253!5m2!1sfr!2sfr" width="1171" height="400" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <!-- FORMULAIRES -->
        <section class="container form">
            <form action="envoi_email.php" id="formulaire" method='POST'>
                <div>
                    <h2>FORMULAIRES</h2>
                </div>
                <div class="nom">
                    <input type="text" name="nom" placeholder="Nom" minlength="2" maxlength="40">
                </div>
                <div class="mail">
                    <input type="text" name="Email" placeholder="Email" minlength="3" maxlength="60">
                </div>
                <div class="mess">
                    <textarea name="Message" id="message" cols="100" rows="10" placeholder="Message"></textarea>
                </div>
                <div class="bouton">
                    <button type="submit" value="submit" name="submit">Send</button>  
                </div>
        </section>
 <!-- php envoi du mail -->

    </main>

    <footer>
        <section class="footer">
            <div class="container flex-container foot">
                <div class="joindre">
                    <h3>NOUS JOINDRE</h3>
                    <p>3 Rue de la Chatolais</p>
                    <p>35000 Rennes</p>
                    <p>Tel : 07 84 74 91 29</p>
                </div>
                <div class="footlogo">
                    <img src="images/food-and-drink 2.svg" alt="logo">
                </div>
                <div class="horaires">
                    <h3>NOUS HORAIRES</h3>
                    <p>Du lundi au samedi</p>
                    <p>de 11h00 à 15h00 et de 19h00 à 23h00</p>
                    <p>Le restaurant est fermé le dimanche</p>
                </div>
            </div>
        </section>
    </footer>


    <script src="script.js"></script>
</body>

</html>