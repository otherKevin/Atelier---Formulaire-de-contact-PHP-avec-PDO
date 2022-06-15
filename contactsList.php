<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connexion à la base de données
    $dbh = new PDO("mysql:dbname=Atelier17;host=mysql", "root", "root");

    // Préparation et exécution de la requête (ici, $result est booléen et témoigne de l'existance ou non de la table)
    $query = $dbh->prepare("SELECT * FROM contacts");
    $result = $query->execute();

    // Récupération des données obtenues via la requête
    $contacts = $query->fetchAll(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atelier 17 : Affichage des contacts</title>
</head>

<body>
    <section id="contactsDisplayArea">
        <?php
        /* Affichage des données de la table
        (Chaque contact est une ligne de la table. Nous voulons afficher toutes les infos de chaque ligne) */
        foreach ($contacts as $ligne => $liste) {
            foreach ($liste as $index => $value) {
        ?>
                <p><?= $value ?></p>
        <?php
            }
        } ?>
    </section>

</body>

</html>