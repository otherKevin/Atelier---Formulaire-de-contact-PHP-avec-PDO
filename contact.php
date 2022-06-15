<?php

// Vérification du verbe HTTP
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Récupération des données du formulaire, en appliquant des filtres
    $firstname = filter_var($_POST["firstname"], FILTER_SANITIZE_ADD_SLASHES);
    $lastname = filter_var($_POST["lastname"], FILTER_SANITIZE_ADD_SLASHES);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST["phone"], FILTER_SANITIZE_NUMBER_INT);
    $message = filter_var($_POST["message"], FILTER_SANITIZE_SPECIAL_CHARS);

    // Instanciation de la classe PDO pour se connecter à la base de données
    $dbh = new PDO("mysql:dbname=Atelier17;host=mysql", "root", "root");

    // Préparation de la requête SQL
    $query = $dbh->prepare("INSERT INTO contacts(firstname,lastname,email,phone,message) VALUES(?,?,?,?,?)");

    /* Exécution de la requête ( $query->execute() )
    $result témoigne du succès de la requête en donnant le nombre de lignes crées (ici 1 ou 0) */
    $result = $query->execute([$firstname, $lastname, $email, $phone, $message]);
};


if ($result) {
?>
    <h2>Contact enregistré dans la base de données.</h2>

<?php } else {
?>
    <h2>ERREUR LORS DE LA TENTATIVE D'ENREGISTREMENT DU CONTACT</h2>

<?php };
