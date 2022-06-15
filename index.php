<?php



?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atelier 17 : Formulaire de contact avec PDO</title>
</head>

<body>

    <section id="form1Area">
        <form action="contact.php" method="POST">
            <input type="text" name="firstname" placeholder="Prénom">
            <input type="text" name="lastname" placeholder="Nom">
            <input type="email" name="email" placeholder="Email">
            <input type="tel" name="phone" placeholder="n° téléphone">
            <textarea name="message" cols="30" rows="10" placeholder="Votre message ici."></textarea>
            <input type="submit" value="Valider">

        </form>

    </section>

    <section id="travelForm">
        <form action="contactsList.php" method="POST">
            <input type="submit" value="Display">
        </form>
    </section>

</body>

</html>