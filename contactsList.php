<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dbh = new PDO("mysql:dbname=Atelier17;host=mysql", "root", "root");
    $query = $dbh->prepare("SELECT * FROM contacts");
    $result = $query->execute();

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
        foreach ($contacts as $ligne => $liste) {
            foreach ($liste as $key => $value) {
        ?>
                <p><?= $value ?></p>
        <?php
            }
        } ?>
    </section>

</body>

</html>